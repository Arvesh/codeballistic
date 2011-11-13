<div id="register-form">

<h1>Register</h1>


<!-- Template registration form -->


<?php echo form_open('register/submit');?>

	<p><label for="first_name">First name</label><?php echo form_input('first_name',set_value('first_name','enter the first name','id="first_name"'))?></p>
	
	<p><label for="last_name">Last name</label><?php echo form_input('last_name',set_value('last_name','enter the last name','id="last_name"'))?></p>
	
	<p><label for="gender">Gender</label>
																		<?php echo form_radio('gender','male')?><label for="male">Male</label>
																		<?php echo form_radio('gender','female')?><label for="female">Female</label>
	</p>
	
	<p><label for="username">Username</label><?php echo form_input('username',set_value('username','enter the username','id="username"'))?></p>
	
	<p><label for="password">Password</label><?php echo form_password('password','Password')?></p>
	
	<p><label for="cpassword">Confirm password</label><?php echo form_password('cpassword','Confirm password')?></p>
	
	<p><label for="email">Email</label><?php echo form_input('email',set_value('email','enter the Email','id="email"'))?></p>
	
	<p><label for="street">Street</label><?php echo form_input('street',set_value('street','enter the street','id="street"'))?></p>
	
	<p><label for="town">Town</label><?php echo form_input('town',set_value('town','enter the town','id="town"'))?></p>
	
	<p><label for="district">District</label><?php echo form_input('district',set_value('district','enter the district','id="district"'))?></p>
	
	
	<?php echo form_submit('register','Register')?>

<?php echo form_close();?>

<?php echo validation_errors('<p class="error">'); ?>
<!-- End of template registration form -->


</div>