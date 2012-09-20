	<?php 

	/*configs for form elements*/

	$nameInputAttributes = array(

		'name' => 'name',
		'class' => 'text'

		);

	$emailInputAttributes = array(

		'name' => 'email',
		'class' => 'text'

		);

	$subjectInputAttributes = array(

		'name' => 'subject',
		'class' => 'text'

		);

	 ?>

	<?php //========HIDDEN FIELD CONTAINING PAGE NAME FOR ACTIVE MENU============== ?>

		<input type="hidden" value="contact" id="menu-active">

	<?php //======================================================================= ?>




	<div id="wrapper" class="container_16">

			<section>

				<div id="heading1" class="grid_3 portfolio">
					<img src="<?php echo site_url() ?>images/icons/contact.png" alt="Contact Us" class="icon">
					<h1>Contact Us</h1>

				</div>
				<div class="clear"></div>

				


				<article class="grid_8">
					<div id="heading2">
						<h1>Map</h1>
					</div>
					<div class="google_map">
						
						<iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=rose+hill+mauritius&amp;aq=&amp;sll=37.0625,-95.677068&amp;sspn=47.215051,93.076172&amp;ie=UTF8&amp;hq=&amp;hnear=Beau+Bassin-Rose+Hill,+Plaines+Wilhems,+Mauritius&amp;t=m&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe>

					</div>
				</article>

				<article class="grid_8">

					<div id="contact-form">
						<div id="heading2">
							<h1>Contact Form</h1>
						</div>
						
						<?php echo form_open('contact/submit'); ?>

						<p>
							<label for="">Name</label>
							<?php echo form_input($nameInputAttributes,set_value('name','','id="name" class="text"')); ?>
						</p>

						<p>
							<label for="">Email</label>
							<?php echo form_input($emailInputAttributes,set_value('email','','id="email" class="text"')); ?>
						</p>

						<p>
							<label for="">Subject</label>
							<?php 
								/*echo form_input($subjectInputAttributes,set_value('subject','','id="subject" class="text"'));*/
								$options = array(
				                  'mobileapp'  => 'Mobile App Development',
				                  'webapp'    => 'Web App Development',
				                  'ecommerce'   => 'E-commerce Website',
				                  'webdesignCMS' => 'Web Design / CMS',
				                  'others' => 'Others',
				                );
								echo form_dropdown('subject',$options,set_value('subject','','id="subject" class=""'));
							?>
						</p>
						<p>
							<label for="">Message</label>
							<?php 
								$data = array(
												'name'=>'message',
												'cols'=>30,
												'rows'=>10
											);
								echo form_textarea($data,set_value('message','','id="message"'));
							 ?>
						</p>
						<p class="button-container">
							<?php echo form_reset('reset','Reset','class="button"') ?>
							<?php echo form_submit('submit','Send','id="submit" class="button green"'); ?>
						</p>

						<?php echo form_close(); ?>


						<?php 
							/*==================FORM ERROR MESSAGE CONTAINER=================*/
						 ?>
						<div class="error-container">
								<?php echo validation_errors('<p class="error">'); ?>
						</div>

						<?php 
							/*==================END OF FORM ERROR MESSAGE CONTAINER=================*/
						 ?>


					
						<?php 
							/*===============FORM SUCCESS MESSAGE CONTAINER==============*/
							$success = $this->session->flashdata('success'); 
							
							if(!empty($success)): 
						?>

							<div class="success">
								<div id="heading2">
									<h1>Thank You for contacting us.</h1>
								</div>
								<h4>We will get back to you as soon as possible.</h4>
							</div>

						<?php 
							endif;
							/*===============END OF FORM SUCCESS MESSAGE CONTAINER==============*/
						?>


					</div>
				
				</article>

			</section>
			<div class="clear"></div>
	</div>




