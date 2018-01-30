<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
	<div id="page-wrapper">
			<div class="row"><div class="col-lg-12"><h1 class="page-header">Edit Server</h1></div></div>
				<div class="row"><div class="col-lg-12">
					
					<div class="panel panel-default">
						<div class="panel-heading"></div>
						<div class="panel-body">
							<?php if (isset($message)) : ?>
									<?= $message ?>
							<?php endif; ?>
							<form action="<?= base_url('panel/administrator/edit/'.str_replace(' ','-',$server -> ServerName).'/'.$server->Id ) ?>" method="POST">
								<div class="form-group">
									<label for="ServerName">Server Name</label>
									<input type="text" class="form-control" id="ServerName" name="ServerName" value="<?= $server -> ServerName ?>">
									<p class="help-block">Virtual private server name</p>
								</div>
								<div class="form-group">
									<label for="sel1">Location :</label>
									<select class="form-control" id="sel1" name="Location">
										<option value="<?= $server->Location ?>" selected="<?= $server->Location  ?>"><?= $server->Location  ?></option>
										<?php foreach($this->user_model->get_country() as $row):?>
										<option value="<?= $row['Country'] ?>"><?= $row['Country'] ?></option>
										<?php endforeach;?>
									</select>
									<p class="help-block">Choose virtual private server's location</p>
								</div>
								<div class="form-group">
									<label for="email">Price</label>
									<input type="number" class="form-control" id="email" name="Price" value="<?= $server->Price ?>">
									<p class="help-block">If the price is set 0 the server will appear on the main page with free status, but if the set of server prices will appear in the reseller menu</p>
								</div>
								<div class="form-group">
									<label for="email">Hostname</label>
									<input type="text" class="form-control" id="email" name="HostName" value="<?= $server->HostName ?>">
									<p class="help-block">Enter the valid hostname</p>
								</div>
								<div class="form-group">
									<label for="password_confirm">Root Password</label>
									<input type="text" class="form-control" id="password_confirm" name="RootPasswd" value="<?= $server->RootPasswd ?>">
								</div>
								<div class="col-xs-6">
									<div class="form-group">
										<label for="password_confirm">Maxuser</label>
										<input type="number" class="form-control" id="password_confirm" name="MaxUser" value="<?= $server->MaxUser ?>">
									</div>
								</div>			
								<div class="col-xs-6">
									<div class="form-group">
										<label for="password_confirm">User Expired</label>
										<input type="number" class="form-control" id="password_confirm" name="Expired" value="<?= $server->Expired ?>">
									</div>
								</div>
								<div class="col-xs-6">
									<div class="form-group">
										<label for="password_confirm">OpenSSH</label>
										<input type="text" class="form-control" id="password_confirm" name="OpenSSH" value="<?= $server->OpenSSH ?>">
										<p class="help-block">if many, split with (,)</p>
									</div>
								</div>
								<div class="col-xs-6">
									<div class="form-group">
										<label for="password_confirm">Dropbear</label>
										<input type="text" class="form-control" id="password_confirm" name="Dropbear" value="<?= $server->Dropbear?>">
										<p class="help-block">if many, split with (,)</p>
									</div>
								</div>
								<div class="form-group">
									<input type="submit" class="btn btn-primary" value="Save">									
									<a href="<?= base_url('panel/administrator/'.$_SESSION['username'].'/'.'server') ?>" class="btn btn-default">Back</a>
								</div>
							</form>
						</div>
					</div>
				</div></div><!-- .row -->
		</div>
