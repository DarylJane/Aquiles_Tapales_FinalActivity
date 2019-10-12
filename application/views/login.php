<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	 <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="css/local.css" />

    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

</head>
<body>

	<div class="container">
		<div class="panel panel-default">
			<div class="panel-heading">Login</div>
			<div class="panel-body">
				<form method="post" action="<?php echo base_url();?>login/validation">
					<div class="form-group">
						<label>Email Address</label>
						<input type="text" name="user_email" class="form-control" value="<?php echo set_value('user_email'); ?>" />
						<span class="text-danger"><?php echo form_error ('user_email'); ?></span>
					</div>

					<div class="form-group">
						<label>Password</label>
						<input type="text" name="user_password" class="form-control" value="<?php echo set_value('user_password'); ?>" />
						<span class="text-danger"><?php echo form_error ('user_password'); ?></span>
					</div>

					<div class="from-group">
						<input type="submit" name="login" value="Login" class="btn btn-info" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo base_url(); ?>rRegisterController">Register</a>
					</div>

				</form>
			</div>
		</div>

	</div>

</body>
</html>