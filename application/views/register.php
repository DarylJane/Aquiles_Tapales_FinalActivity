<!DOCTYPE html>
<html>
<head>
	<title>REGISTER</title>

	 <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="css/local.css" />

    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

</head>
<body>

	<div class="container">
		
		<br />
		<h3 align="center">REGISTER AND LOG IN</h3>
		<br />
	</div>

	<div class="panel panel-default">
		<div class="panel-heading">Register</div>
		<div class="panel-body">
			
			<?php
				if($this->session->flashdata('message'))
				{
					echo '
					<div class="alert alert-success">
					'.$this->session->flashdata("message").'
					</div>
					';
				}
			?>

			<form method="POST" action="<?php echo base_url();?>register/validation">
				<div class="form-group">
					<label>Enter Username</label>
					<input type="text" name="user_name" class="form-control" value="<?php echo set_value
					('user_name');?>"/>
					<span class="text-danger"><?php echo form_error('user_name'); ?></span>
				</div>

				<div class="form-group">
					<label>Enter Email</label>
					<input type="text" name="user_email" class="form-control" value="<?php echo set_value
					('user_email'); ?>"/>
					<span class="text-danger"><?php echo form_error('user_email'); ?></span>
				</div>

				<div class="form-group">
					<label>Enter Password</label>
					<input type="text" name="user_password" class="form-control" value="<?php echo set_value
					('user_password'); ?>"/>
					<span class="text-danger"><?php echo form_error('user_password'); ?></span>
				</div>

					<div class="form-group">
					<label>Enter Email</label>
					<input type="text" name="user_email" class="form-control" value="<?php echo set_value
					('user_email'); ?>"/>
					<span class="text-danger"><?php echo form_error('user_email'); ?></span>
				</div>

				<div class="form-group">
					<label>Enter Email</label>
					<input type="submit" name="register" value="Register" class="btn btn-info" />
				</div>

			</form>
		</div>
</div>

</body>
</html>