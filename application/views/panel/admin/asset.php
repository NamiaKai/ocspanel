<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div id="page-wrapper">
	<div class="row">
        <div class="col-lg-12">
            <h4 class="page-header"><i class="fa fa-phone"></i> Add Phone Number</h4>
        </div>
    </div>
    <div class="row">
           <div class="col-xs-6">
			  <?php if (isset($message)) {echo $message;} ?>
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
			   <?= form_open() ?>
					<div class="form-group">
						<label for="pemilik">Number Owner</label>
						<input type="text" name="pemilik" class="form-control" id="pemilik" placeholder="Aiman Amir"/>
					</div>
					<div class="form-group">
						<label for="nohp">Phone Number</label>
						<input type="text" name="nohp" class="form-control" id="nohp" placeholder="Your Phone Number"/>
						<small class="text-muted">Reseller will use this number to transfer money (must fill)</small>
					</div>
					<div class="form-group">
						<label for="provider">Provider</label>
						<select name="provider" class="form-control">
							<option value="Digi">Digi</option>
							<option value="Umobile">Umobile</option>
							<option value="Maxis">Maxis</option>
							<option value="Celcom">Celcom</option>
						</select>
					</div>
					<div class="form-group">
						<input type="submit" class="btn btn-primary form-control" value="Add"/>
					</div>
			   </form>
		   </div>
		  <div class="col-xs-6">
				<?php if (!empty($asset)):?>
					<h4>Active Telephone Number</h4>
					<div class="table-responsive"><table class="table table-hover">
						<thead>
							<tr><th>#</th><th>Name</th><th>Telephone Number</th><th>Provider</th></tr>
                        </thead>
                        <tbody>
						<?php foreach ($asset as $row): ?>
							<tr>
									<?php if (empty($row['rekening'])):?>
									<td><a href="<?=base_url('admin/del_hp/'.$row['id'])?>">Del</a></td>
									<td><?= $row['pemilik'] ?></td>
									<td><?= $row['nohp']?></td>
									<td><?= $row['provider']?></td>
									<?php endif; ?>
							</tr>
						<?php endforeach; ?>
						</tbody>
					</table></div>
					<?php else: ?>
						<h4 class="page-header">You did not add a telephone number yet</h4>
				<?php endif; ?>
			</div>
   
    </div>
</div>
