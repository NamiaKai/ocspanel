<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div id="page-wrapper">
	 <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Add Balance (Via-Topup)</h1>
            <div class="well">Your Balance : <B><?php if (isset($user->saldo)) {echo $user->saldo; }?></B></div>
        </div>
    </div>
    <div class="row">
		  <div class="col-sm-6">
			   <p class="text-muted">Note : jika sudah membayar, Please click on the confirmation button and your balance will added automatically after the payment has been reviewed by admin.</p>
			   <p class="text-info">Please topup to one of these numbers : </p>
			   <?php foreach ($this->user_model->view_asset() as $row): ?>
					<?php if (!empty($row['nohp'])): ?>
					<p class="text-default" align="center"> <?= $row['pemilik']?><br> <?= $row['nohp']?> <br> <?= $row['provider']?> </p>
					<?php endif; ?>	
			   <?php endforeach; ?>
		  </div>
           <div class="col-sm-6">
			  <?php if (validation_errors()) : ?>
					<div class="col-md-12">
						<div class="alert alert-danger" role="alert"><?= validation_errors() ?></div>
					</div>
					<?php endif; ?>
					<?php if (isset($error)) : ?>
					<div class="col-md-12">
						<div class="alert alert-danger" role="alert"><?= $error ?></div>
					</div>
					<?php endif;?>
					<?php if (isset($message)) : ?>
					<div class="col-md-12">
						<div class="alert alert-success" role="alert"><?= $message ?></div>
					</div>
					<?php endif;?>
			   <?= form_open() ?>
					<div class="form-group">
						<label for="sender">Sender's Reference Code</label>
						<input type="text" name="sender" class="form-control" id="sender" placeholder="Insert Reference Code"/>
						<small class="text-muted">As payment prove</small>
					</div>
					<div class="form-group">
						<label for="hp">Sender's Phone Number</label>
						<select name="hp" id="hp" class="form-control">
							<?php foreach ($this->user_model->view_asset() as $row): ?>
							<?php if (!empty($row['nohp'])): ?>
							<option value="<?= $row['nohp']?>"><?= $row['nohp'].' ('.$row['provider'].')'?></option>
							<?php endif;?>
							<?php endforeach; ?>
						</select>
					</div>
					<div class="form-group">
						<label for="hp">Total deposit</label>
						<input type="number" name="jumlah" class="form-control" id="jumlah" value="5"/>
						<small class="text-muted">Total minimum deposit RM 5</small>
					</div>
					<div class="form-group">
						<input type="submit" class="btn btn-primary form-control" value="Confirm"/>
					</div>
			   </form>
            </div>
    </div>
</div>
