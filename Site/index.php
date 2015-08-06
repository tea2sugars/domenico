<?php include('perch/runtime.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title><?php perch_pages_title(); ?></title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php
		perch_page_attributes(array(
		    'template' => 'seo.html'
		    
		));
		perch_page_attributes(array(
		    'template' => 'css.html'
		));
		
	?> 

</head>
<body>

	<!-- PRELOADER -->
	<div class="page-loader">
		<div class="loader">Baking...</div>
	</div>
	<!-- /PRELOADER -->

	<!-- NAVIGATION -->
	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">

			<div class="container">
		
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#custom-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="index.php"><img src="assets/images/Master_logo.png" alt="Domenico Pizza - A taste of Napels"></a>
				</div>
		
				<div class="collapse navbar-collapse" id="custom-collapse">
		
					<ul class="nav navbar-nav navbar-right">
						<li class="hidden-xs hidden-sm"><a href="tel:0759502086">07595 020 864</a></li>
						<li><a href="#about" class="section-scroll">About Us</a></li>
						<li><a href="#menu" class="section-scroll">The Menu</a></li>
						<li><a href="#details" class="section-scroll">Contact</a></li>
		
					</ul>
				</div>
		
			</div>

	</nav>
	<!-- /NAVIGATION -->
	
	<!-- HOME -->
	<section id="home" class="module-hero module-parallax module-fade module-full-height">
			

		<!--<div class="hs-caption container">
			<div class="caption-content">
				
				<div class="hs-title-size-4 font-alt m-b-30">
					<img src="assets/images/Master_logo_Large.png" alt="Master_logo_Large" width="788" height="120">
				</div>
				<div class="hs-title-size-1 font-inc">
					A taste of Naples
				</div>
				
			</div>
		</div>-->

	</section >
	<!-- /HOME -->
	<div id="book-button" style="position:fixed; top:90px; left:5%; z-index: 1000;">
				<button data-toggle="modal" data-target="#myModal" class="btn btn-default">
					Book a table
				</button>
			</div>
			<div id="delivery-button" style="position:fixed; top:90px; right:5%; z-index: 1000;">
				<a href="#" class="btn btn-default">Delivery</a>
	</div>
	<section id="about" class="module" data-background="<?php perch_content('about_slide_image');?>">
			
			<div class="container-fluid">

				<div class="row">

						<div class="post-images-slider">
							<ul class="slides">
								<?php perch_content('slide.main');?>
							</ul>
						</div>


				</div><!-- .row -->

			</div>

	</section>

	<section id="menu" class="module">
		<div class="container">

				<div class="row">
					<h2 class="align-center font-alt font-yellow">The Menu</h2>
					<hr class="align-center"/>
					<article>
						<div role="tabpanel">

							<!-- Nav tabs start-->
							<ul class="nav nav-pills nav-justified text-uppercase" role="tablist">
								<li class="active">
									<a href="#starters" data-toggle="tab">starters</a>
								</li>
								<li>
									<a href="#pizzas" data-toggle="tab">pizzas</a>
								</li>
								<li>
									<a href="#calzone" data-toggle="tab">calzone</a>
								</li>
								<li>
									<a href="#pasta" data-toggle="tab">pasta</a>
								</li>
								<li>
									<a href="#alforno" data-toggle="tab">al forno</a>
								</li>
								<li>
									<a href="#desserts" data-toggle="tab">desserts</a>
								</li>
							</ul>
							<!-- Nav tabs end -->

							<!-- Tab panes start-->
							<div class="tab-content">

								<!-- Tab start -->
								<div class="tab-pane active" id="starters">
									<article class="col-sm-10 col-sm-offset-1 col-md-8 col-sm-offset-8">
										<p class="text-center"><?php perch_content('starter.intro');?></p>
									</article>
									<?php perch_content('starter.item');?>
								</div>
								<!-- Tab end -->

								<!-- Tab start -->
								<div class="tab-pane" id="pizzas">
									<article class="col-sm-10 col-sm-offset-1 col-md-8 col-sm-offset-8">
										<p class="text-center"><?php perch_content('pizzas.intro');?></p>
									</article>
									<?php perch_content('pizzas.item');?>
								</div>
								<!-- Tab end -->
								<!-- Tab start -->
								<div class="tab-pane" id="calzone">
									<article class="col-sm-10 col-sm-offset-1 col-md-8 col-sm-offset-8">
										<p class="text-center"><?php perch_content('calzone.intro');?></p>
									</article>
									<?php perch_content('calzone.item');?>
								</div>
								<!-- Tab end -->

								<!-- Tab start -->
								<div class="tab-pane" id="pasta">
									<article class="col-sm-10 col-sm-offset-1 col-md-8 col-sm-offset-8">
										<p class="text-center"><?php perch_content('pasta.intro');?></p>
									</article>
									<?php perch_content('pasta.item');?>
								</div>
								<!-- Tab end -->
								<!-- Tab start -->
								<div class="tab-pane" id="alforno">
									<article class="col-sm-10 col-sm-offset-1 col-md-8 col-sm-offset-8">
										<p class="text-center"><?php perch_content('alforno.intro');?></p>
									</article>
									<?php perch_content('alforno.item');?>
								</div>
								<!-- Tab end -->

								<!-- Tab start -->
								<div class="tab-pane" id="desserts">
									<article class="col-sm-10 col-sm-offset-1 col-md-8 col-sm-offset-8">
										<p class="text-center"><?php perch_content('desserts.intro');?></p>
									</article>
									<?php perch_content('desserts.item');?>
								</div>
								<!-- Tab end -->

							</div>
							<!-- Tab panes end-->
						</div>
					</article>
				</div>
	</section>

		<!-- CONTACT -->
		<section id="details" class="module" data-background="assets/images/details_image.jpg">
			<div class="container">
				<div class="row">
					<article class="col-sm-8 col-sm-offset-2 bg-dark">
						<h2 class="text-center font-alt font-yellow">Opening Hours</h2>
						<hr class="align-center"/>
						<?php perch_content('opening.time');?>
					</article>
					<article class="col-sm-8 col-sm-offset-2 bg-dark">
						<h2 class="text-center font-alt font-yellow">Booking a table</h2>
						<hr class="align-center"/>
						<p class="text-center">Book online or give us a call on <a href="#">+44 (0)20 7XXX XXXX</a><br/>between 9.00am and 10.30pm</p>
						<div class="align-center">
							<button data-toggle="modal" data-target="#myModal" class="btn btn-default btn-lg">
								Book a table
							</button>
						</div>
					</article>
					<article class="col-sm-8 col-sm-offset-2 bg-dark">
						<h2 class="text-center font-alt font-yellow">Finding Us</h2>
						<hr class="align-center"/>
						<?php perch_content('address');?>
						<p class="text-center font-alt"><a href="<?php perch_content('address.link');?>" target="_blank">Click here for directions</a></p>
					</article>
		</section>
		<!-- /CONTACT -->

		<!-- FOOTER -->
		<footer class="footer">
		
			<div class="container">
		
				<div class="row">
		
					<div class="col-sm-12 text-center">
						<img src="assets/images/Secondary_logo.png" alt="Secondary_logo" width="343" height="52" class="align-center">
						<div id="footer-nav">
							<a href="#about">About Us</a> <a href="#menu">The Menu</a> <a href="#details">Contact Us</a> <a href="#">Facebook</a> <a href="#">Twitter</a> <a href="#">Instagram</a>
						</div>
						<p class="copyright text-center m-t-40">© 2015. All Rights Reserved Domenico</p>
					</div>
		
				</div>
		
			</div>
		
		</footer>
		<!-- /FOOTER -->
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		  <div class="modal-dialog">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		        <h4 class="modal-title" id="myModalLabel">Book a table</h4>
		      </div>
		      
		      <div class="modal-footer">
		        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		      </div>
		    </div>
		  </div>
		</div>	
	</div>
	<!-- /WRAPPER -->

	<!-- Scroll-up -->
	<div class="scroll-up">
		<a href="#totop"><i class="fa fa-angle-double-up"></i></a>
	</div>
	
	
	
	<!-- Javascript files -->
	<script src="assets/js/jquery-2.1.3.min.js"></script>
	<script src="assets/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/js/jquery.mb.YTPlayer.min.js"></script>
	<script src="assets/js/appear.js"></script>
	<script src="assets/js/jquery.simple-text-rotator.min.js"></script>
	<script src="assets/js/jqBootstrapValidation.js"></script>
	<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
	<script src="assets/js/gmaps.js"></script>
	<script src="assets/js/isotope.pkgd.min.js"></script>
	<script src="assets/js/imagesloaded.pkgd.js"></script>
	<script src="assets/js/jquery.flexslider-min.js"></script>
	<script src="assets/js/jquery.magnific-popup.min.js"></script>
	<script src="assets/js/jquery.fitvids.js"></script>
	<script src="assets/js/smoothscroll.js"></script>
	<script src="assets/js/wow.min.js"></script>
	<script src="assets/js/contact.js"></script>
	<script src="assets/js/custom.js"></script>

</body>
</html>