<!DOCTYPE html>
<html>
<head>
	<title>Sign In</title>
</head>
<body>
<h1>Sign In</h1>
	<?php  if($invalid_auth) echo "Invalid Username and Password"; ?>
	<?php echo form_open('sign/in'); ?>
		<h2>Username</h2>
		<input type="text" name="username" value="<?php echo set_value('username');?>">
		<?php echo form_error('username')?>
		<h2>Password</h2>
		<input type="text" name="password" value="<?php echo set_value('password');?>">
		<?php echo form_error('password')?>
		<input type="submit" value="Submit">
	</form>
</body>
</html>