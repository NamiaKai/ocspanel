<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                SSH Account
            </h1>
        </div>
    </div>
    <div class="row">
            <div class="col-lg-12 hidden-print">                    
                <?= $user['message']?>
            </div>
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-user fa-fw"></i> Account Details
                </div>
                <div class="panel-body">
                <table class="table table-hover">
                    <tbody>
                        <tr>
                            <td>Username</td><td>:</td><td><?= $user['username']?></td>
                        </tr>
                        <tr>
                            <td>Password</td><td>:</td><td><?= $user['password']?></td>
                        </tr>
                        <tr>
                            <td>Host</td><td>:</td><td><?= $user['hostname']?></td>
                        </tr>
                        <tr>
                            <td>Location</td><td>:</td><td><?= $user['location']?></td>
                        </tr>
                        <tr>
                            <td>OpenSSH</td><td>:</td><td><?= $user['openssh']?></td>
                        </tr>
                         <tr>
                            <td>Dropbear</td><td>:</td><td><?= $user['dropbear']?></td>
                        </tr>
                         <tr>
                            <td>Price</td><td>:</td><td><?= $user['price']?></td>
                        </tr>
                        <tr>
                            <td>Exp</td><td>:</td><td><?= date("Y-m-d H:i:s",strtotime("+".$user['expired']." days", time() ) )?></td>
                        </tr>
                    </tbody>
                </table>
                <p class="text-muted">
					Note:<br>
					Squid port : 3128 / 8080
					Do not torrent, multi-login. Your account will be deleted if one of those rules are not obeyed.
                </p>
					<div class="hidden-print">
					<a href="#" class="btn btn-primary" onclick="print_report()">Print</a>
					<a href="<?= base_url('panel/reseller/'.$_SESSION['username'].'/server') ?>" class="btn btn-default">Back</a>
					</div>
				</div>
            </div>
        </div>
    </div>
</div>
