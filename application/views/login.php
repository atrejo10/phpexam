<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>


<!DOCTYPE html>
<html>
<head>
		<link rel="stylesheet" href="//code.jquery.com/ui/1.12.0/themes/base/jquery-ui.css">
		<link rel="stylesheet" href="/resources/demos/style.css">
		<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
		<script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
		<title>Login / Registration </title>
		<script>
		$( function() {
		 $( "#datepicker" ).datepicker({ dateFormat: 'yy-mm-dd' });
	 } );
	 </script>
		<style type="text/css">
	label{
		display:block;
	}
	#login{
		display:inline-block;
		vertical-align: top;
	}
	#register{
		display: inline-block;
	}


	</style>
</head>
<body>
	<h2>Welcome!</h2>
	<div id="login">
<?php		if($this->session->flashdata("registration_errors"))
			{
				echo $this->session->flashdata("registration_errors");
			}

			if($this->session->flashdata("success"))
			{
				echo $this->session->flashdata("success");
			}
			if($this->session->flashdata("login_errors"))
			{
				echo $this->session->flashdata("login_errors");
			}

?>
		<form action="/Students/log_in" method="POST">
		<fieldset>
		<legend> Log In </legend>
			<input type="hidden" name="hide">
			<label>Email:
				<input type="text" name="email">
			</label>
			<label>Password:
				<input type="text" name="password">
			</label>
			<button>Log In</button>
			</fieldset>
		</form>
	</div>

	<div id="register">

		<form action="/Students/add" method="post">
		<fieldset>
		<legend> OR Register </legend>
			<input type="hidden" name="hide">
			<label>First Name:
				<input type="text" name="first_name">
			</label>
			<label>Alias:
				<input type="text" name="alias">
			</label>
			<label>Email Address:
				<input type="text" name="email">
			</label>
			<label>Password:
				<input type="password" name="password">
			</label>
			<p> *Passwords should be at least 8 characters</p>
			<label>Confirm Password:
				<input type="password" name="confirm_password">
			</label>
			<p>Date of Birth: <input type="text" name="date" id="datepicker"></p>
			<button>Register</button>
			</fieldset>
		</form>
	</div>

</body>
</html>
