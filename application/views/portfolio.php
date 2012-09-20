<?php //========HIDDEN FIELD CONTAINING PAGE NAME FOR ACTIVE MENU============== ?>



	<input type="hidden" value="portfolio" id="menu-active">



<?php //======================================================================= ?>




<div id="wrapper" class="container_16">

		<section>

			<div id="heading1" class="grid_3 portfolio">
				<img src="<?php echo site_url() ?>images/icons/portfolio.png" alt="Portfolio" class="icon">
				<h1>Portfolio</h1>

			</div>
			<div class="clear"></div>

			<article class="grid_13">

				<div id="heading2">
					<h1>Works</h1>
				</div>

			</article>


<?php 

/*
===================================================================
-------------------------DISPLAY PORTFOLIO-------------------------
===================================================================

	1. print the name
	2. print the url of the image of the project
	3. print the url of the big image of the project
	4. print the external url of the project


===================================================================
-------------------------END HEADER COMMENT------------------------
===================================================================
*/
 ?>

			<article class="grid_5 portfolio-article">
			<div class="main">
					
					<div class="view view-first">
                    	<img src="images/asdfasdf.jpg" alt="" class="box-shadow">
	                    <div class="mask">
	                         <a href="www.google.com" class="info link" target="_blank"><h2>An awesome Project</h2></a> 
	                        
	                        <p class="bgoverlay-pic">
	                        	<a href="images/asdfasdf.jpg" class="enlarge-pic button">Enlarge <img src="images/icons/magnify.png" alt=""></a>
	                        </p>
	                        <a href="#" title="Go to website" class="link-goto" target="_blank"><img src="images/icons/goto.png" alt="Go to website"></a>
	                    </div>
                	</div>

				</div>
			</article>

<?php 

/*
===================================================================
----------------------END DISPLAY PORTFOLIO------------------------
===================================================================

	HTML CODES BELOW EXISTS AS LONG AS
	 THE ABOVE FUNCTIONALITY IS NOT IMPLEMENTED.

===================================================================
-------------------------END HEADER COMMENT------------------------
===================================================================
*/

 ?>


			<article class="grid_5 portfolio-article">
				<div class="main">
					
					<div class="view view-first">
                    	<img src="images/home-section2-img.png" alt="" class="box-shadow">
	                    <div class="mask">
	                       <a href="www.google.com" class="info link" target="_blank"><h2>An awesome Project</h2></a> 

	                        
	                        <p class="bgoverlay-pic">
	                        	<a href="images/home-section2-img.png" class="enlarge-pic button">Enlarge <img src="images/icons/magnify.png" alt=""></a>
	                        </p>

	                        <a href="#" title="Go to website" class="link-goto" target="_blank"><img src="images/icons/goto.png" alt="Go to website"></a>
	                        
	                    </div>
                	</div>

				</div>
			</article>
			<article class="grid_5 portfolio-article">
				<div class="main">
					
					<div class="view view-first">
                    	<img src="images/asdfasdf.jpg" alt="" class="box-shadow">
	                    <div class="mask">
	                       <a href="www.google.com" class="info link" target="_blank"><h2>An awesome Project</h2></a> 

	                        
	                        <p class="bgoverlay-pic">
	                        	<a href="images/asdfasdf.jpg" class="enlarge-pic button">Enlarge <img src="images/icons/magnify.png" alt=""></a>
	                        </p>

	                        <a href="#" title="Go to website" class="link-goto" target="_blank"><img src="images/icons/goto.png" alt="Go to website"></a>
	                        
	                    </div>
                	</div>

				</div>
			</article>
			<article class="grid_5 portfolio-article">
				<div class="main">
					
					<div class="view view-first">
                    	<img src="images/home-section2-img.png" alt="" class="box-shadow">

	                    <div class="mask">
	                         <a href="www.google.com" class="info link" target="_blank"><h2>An awesome Project</h2></a> 
	                        
	                        <p class="bgoverlay-pic">
	                        	<a href="images/home-section2-img.png" class="enlarge-pic button">Enlarge <img src="images/icons/magnify.png" alt=""></a>
	                        </p>

	                        <a href="#" title="Go to website" class="link-goto" target="_blank"><img src="images/icons/goto.png" alt="Go to website"></a>
	                        
	                    </div>
                	</div>

				</div>
			</article>
			<article class="grid_5 portfolio-article">
				<div class="main">
					
					<div class="view view-first">
                    	<img src="images/imgasdf.jpg" alt="" class="box-shadow">

	                    <div class="mask">
	                         <a href="www.google.com" class="info link" target="_blank"><h2>An awesome Project</h2></a> 
	                        
	                        <p class="bgoverlay-pic">
	                        	<a href="images/imgasdf.jpg" class="enlarge-pic button">Enlarge <img src="images/icons/magnify.png" alt=""></a>
	                        </p>

	                        <a href="#" title="Go to website" class="link-goto" target="_blank"><img src="images/icons/goto.png" alt="Go to website"></a>
	                        
	                    </div>
                	</div>

				</div>
			</article>
			<article class="grid_5 portfolio-article">
				<div class="main">
					
					<div class="view view-first">
                    	<img src="images/home-section2-img.png" alt="" class="box-shadow">

	                    <div class="mask">
	                         <a href="www.google.com" class="info link" target="_blank"><h2>An awesome Project</h2></a> 
	                        
	                        <p class="bgoverlay-pic">
	                        	<a href="images/home-section2-img.png" class="enlarge-pic button">Enlarge <img src="images/icons/magnify.png" alt=""></a>
	                        </p>

	                        <a href="#" title="Go to website" class="link-goto" target="_blank"><img src="images/icons/goto.png" alt="Go to website"></a>
	                        
	                    </div>
                	</div>

				</div>
			</article>
			
<?php 
/*====================END TO TEMPORARY HTML CODES=====================*/
 ?>

		</section>
		<div class="clear"></div>
	</div>


<?php //if(isset($records)):foreach($records as $row):?>



	<!-- <h1><?php echo $row->name; ?></h1>

	<h4><?php echo $row->content1; ?></h4>

	<h5><?php echo $row->content2; ?></h5>

	<h5><?php echo $row->content3; ?></h5>
 -->


<?php //endforeach; ?>

<?php //else: ?>



<!-- 	<p>No records</p> -->

	

<?php //endif; ?>