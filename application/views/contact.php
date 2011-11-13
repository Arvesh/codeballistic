
<?php if(isset($records)):foreach($records as $row):?>

	<h1><?php echo $row->name; ?></h1>
	<h4><?php echo $row->content1; ?></h4>
	<h5><?php echo $row->content2; ?></h5>
	<h5><?php echo $row->content3; ?></h5>

<?php endforeach; ?>
<?php else: ?>

	<p>No records</p>
	
<?php endif; ?>

<div id="contact-form">
	<h1>Contact Us !</h1>
	
	<?php
	
		echo form_open('contact/submit');
		echo form_input('name',set_value('name','enter your name','id="name"'));
		echo form_input('email',set_value('email','enter your email','id="email"'));
		echo form_input('subject',set_value('subject','enter a subject','id="subject"'));
		$data = array(
			'name'=>'message',
			'cols'=>30,
			'rows'=>10
		);
		echo form_textarea($data,set_value('message','Message...','id="message"'));
		echo form_submit('submit','Send','id="submit"');
		echo form_close();
	
	?>
	<?php echo validation_errors('<p class="error">'); ?>
	<p class="success">
	
	</p>
</div>

<script type="text/javascript">

	$('input').click(function(){
		this.value ="";
	});

	$('textarea').click(function(){
		this.value="";
	});
</script>
