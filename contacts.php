<?php include ('header.php');?>
				
				<!-- BEGIN PAGE TITLE -->
				<div id="page-title" class="page-title">
					<div class="container clearfix">
						<div class="grid_12">
							<div class="page-title-holder clearfix">
								<h1>Contacts</h1>
							</div>
						</div>
					</div>
				</div>
				<!-- END PAGE TITLE -->
				
				
				<!-- BEGIN CONTENT WRAPPER -->
				<div id="content-wrapper" class="content-wrapper">
					<div class="container">
					
						<div class="clearfix">
							<div class="grid_12">
								
								<!-- BEGIN GOOGLE MAP -->
								<div class="map-wrapper">
									<div id="map_canvas"></div>
								</div>
								<!-- END GOOGLE MAP -->
								
							</div>
						</div>
						
						<div class="grid_8">
							<h2>Contact Form</h2>
							
							<!-- BEGIN CONTACT FORM -->
							<form method="post" action="sendEmail.php" id="contact-form" class="contact-form">
								<div class="field">
									<label for="name">Name:</label>
									<input type="text" name="name" id="name">
								</div>
								<div class="field">
									<label for="email">Email:</label>
									<input type="email" name="email" id="email">
								</div>
								<div class="field">
									<label for="subject">Subject:</label>
									<input type="text" name="subject" id="subject">
								</div>
								<div class="field">
									<label for="contact-message">Message:</label>
									<textarea name="comments" id="comments" cols="30" rows="10"></textarea>
								</div>
								<div class="button-wrapper">
									<input type="submit" name="submit" id="submit" value="Send message">
								</div>
								<div id="response"></div>
							</form>
							<!-- END CONTACT FORM -->
							
						</div>
						<aside class="sidebar grid_4">
							<!-- Contact Widget -->
							<div class="contact-widget widget widget__sidebar">
								<h3 class="widget-title">Contact Info</h3>
								<div class="widget-content">
									<p>Drop us a line ! We will be contact within next 12 hours. - Thank you.</p>
									<address>
										<i class="icon-home"></i> <strong>Anup Bhaban, 107 Agrabad CA, Chittagong 4100</strong><br>
										<i class="icon-phone"></i> 01818529291,  01717298737<br>
										<i class="icon-envelope-alt"></i> <a href="mailto:goldentradecentre@yahoo.com">goldentradecentre@yahoo.com</a><br>
										<i class="icon-globe"></i> <a href="http://www.goldentradecenter.com">Golden Trade Center</a>
									</address>
								</div>
							</div>
							<!-- /Contact Widget -->
						</aside>
								
					</div>
				</div>
				<!-- END CONTENT WRAPPER -->
			</div>
		</div>
		
		<!-- BEGIN FOOTER -->
		<footer id="footer" class="footer">
			
			<div class="footer-holder">
				<div class="footer-frame">
					<!-- Footer Widgets -->
					<div class="footer-widgets">
						<div class="container clearfix">
							
							<div class="grid_5">
								<!-- Text Widget -->
								<div class="text-widget widget widget__footer">
									<h3 class="widget-title">Company Overview</h3>
									<div class="widget-content">
										<h5>Golden Trade Center</h5>
										<p>is considered as one of the leading exporter of tobacco products in Bangladesh. Since 2007, Golden Trade Center has been operating export and import business in Middle East. The company also has operations in the Asian countries as well. Based on the decision of the owner, to diversify business we started to supply other products in local markets and export in foreign market.<br> 
										<strong> Trade License No </strong> 85355 <br>
										<strong>Export Registration certificate No</strong> RA 73893 <br>
										<strong>Member Chittagong Chamber of Commerce, Bangladesh</strong>
									</div>
								</div>
								<!-- /Text Widget -->
							</div>
							<div class="grid_3">
								<!-- Twitter Widget -->
								<div class="twitter-widget widget widget__footer">
									<h3 class="widget-title">Twitter</h3>
									<div class="widget-content">
										<!-- <ul id="twitter-feed" class="twitter_update_list"></ul> -->
									</div>
								</div>
								<!-- /Twitter Widget -->
							</div>
							<div class="grid_4">
								<!-- Flickr Widget -->
								<div class="flickr-widget widget widget__footer">
									<h3 class="widget-title">Flicker Feed</h3>
									<div class="widget-content">
										<!-- Flickr images will appear here -->
										<!-- <ul id="flickr" class="thumbs"></ul> -->
									</div>
								</div>
								<!-- /Flickr Widget -->
							</div>
							
						</div>
					</div>
					<!-- /Footer Widgets -->
					
					<!-- Copyright -->
					<div class="copyright">
						<div class="container clearfix">
							<div class="grid_12">
								<div class="clearfix">
									<div class="copyright-primary">
										&copy;  2007 Golden Trade Center<span class="separator">|</span> Exporter Importer & Supplier.
									</div>
									<div class="copyright-secondary">
										Design & Devloped By <a href="http://www.opensourcit.net"><img src="images/opensourceit_developer_designer.png" alt="Opensource-It"  width="100" height="auto"></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /Copyright -->
				</div>
			</div>
			
		</footer>
		<!-- END FOOTER -->
		
	</div>
	<!-- END WRAPPER -->
	
	
	<!-- Javascript Files
	================================================== -->
	
	<!-- initialize jQuery Library -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/jquery-1.9.1.min.js"><\/script>')</script>
	<script src="js/jquery-migrate-1.1.1.min.js"></script>
	<!-- Modernizr -->
	<script src="js/modernizr.custom.17475.js"></script>
	<!-- easing plugin -->
	<script src="js/jquery.easing.min.js"></script>
	<!-- Prettyphoto -->
	<script src="js/jquery.prettyPhoto.js"></script>
	<!-- Superfish -->
	<script src="js/jquery.mobilemenu.js"></script>
	<!-- superfish -->
	<script src="js/jquery.superfish-1.5.0.js"></script>
	<!-- Twitter -->
	<script src="js/jquery.twitter.js"></script>
	<!-- Flickr -->
	<script src="js/jflickrfeed.js"></script>
	<!-- ElastiSlide Carousel -->
	<script src="js/jquery.elastislide.js"></script>
	<!-- jQuery REVOLUTION Slider  -->
	<script src="js/jquery.themepunch.plugins.min.js"></script>
	<script src="js/jquery.themepunch.revolution.min.js"></script>
	<!-- Isotope -->
	<script src="js/jquery.isotope.min.js"></script>
	<script src="js/jquery.imagesloaded.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider.js"></script>

	<!-- Custom -->
	<script src="js/custom.js"></script>

	
	<!-- Contact Page specific scripts
	================================================== -->
	
	<!-- Google Map -->
	<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
	<script src="js/jquery.ui.map.js"></script>
	<!-- Contact Form -->
	<script src="js/jquery.form.js"></script>
	
	<!-- Google Map Init-->
<script type="text/javascript">
	jQuery(function ($) {
		//getter
		var zoom = $('#map_canvas').gmap('option', 'zoom');

		$('#map_canvas').gmap().bind('init', function (ev, map) {
			$('#map_canvas').gmap('addMarker', {'position': '22.3263569,91.8124504', 'bounds': true});
			$('#map_canvas').gmap('option', 'zoom', 13);
		});
	});
</script>
	
</body>
</html>