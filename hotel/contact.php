<?php require_once 'include/header.php';?>
<?php
	$file = __FILE__;
    $filename = basename($file,'.php');
?>
<?php require_once 'include/navbar.php';?>

	<!-- Banner -->
	<section class="tm-banner">
		<!-- Flexslider -->
		<div class="flexslider flexslider-banner">
		  <ul class="slides">
		    <li>
			    <div class="tm-banner-inner">
					<h1 class="tm-banner-title">Your <span class="tm-yellow-text">Special</span> Tour</h1>
					<p class="tm-banner-subtitle">For Upcoming Holidays</p>
					<a href="#more" class="tm-banner-link">Contact Us</a>	
				</div>
				<img src="img/banner-3.jpg" alt="Banner 3" />	
		    </li>		    
		  </ul>
		</div>	
	</section>

	<!-- gray bg -->	
	
	
	<!-- white bg -->
	<section class="section-padding-bottom">
		<div class="container">
			<div class="row">
				<div class="tm-section-header section-margin-top">
					<div class="col-lg-4 col-md-3 col-sm-3"><hr></div>
					<div class="col-lg-4 col-md-6 col-sm-6"><h2 class="tm-section-title">Contact Us</h2></div>
					<div class="col-lg-4 col-md-3 col-sm-3"><hr></div>	
				</div>				
			</div>
			<div class="row">
				<!-- contact form -->
				<form action="#" method="post" class="tm-contact-form">
					<div class="col-lg-6 col-md-6">
						<div class="col-md-12">
                  <script src='https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyBXLUAvfnZWs0irxaMF8DBQscU64AhKqac'></script><div style='overflow:hidden;height:382px;width:100%;'><div id='gmap_canvas' style='height:382px;width:100%;'></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div> <a href='https://mapswebsite.net/'> </a> <script type='text/javascript' src='https://embedmaps.com/google-maps-authorization/script.js?id=f14cedb025e3f86b8ec7b7839aa95a36aad8847f'></script><script type='text/javascript'>function init_map(){var myOptions = {zoom:14,center:new google.maps.LatLng(28.380163,79.41054689999999),mapTypeId: google.maps.MapTypeId.SATELLITE};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(28.380163,79.41054689999999)});infowindow = new google.maps.InfoWindow({content:'<strong>Hartman College Road</strong><br>Paras Sweet<br>243001 Bareilly<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script> 
            </div>
					</div> 
					<div class="col-lg-6 col-md-6 tm-contact-form-input">
						<div class="form-group">
							<input type="text" id="contact_name" class="form-control" placeholder="NAME" />
						</div>
						<div class="form-group">
							<input type="email" id="contact_email" class="form-control" placeholder="EMAIL" />
						</div>
						<div class="form-group">
							<input type="text" id="contact_subject" class="form-control" placeholder="SUBJECT" />
						</div>
						<div class="form-group">
							<textarea id="contact_message" class="form-control" rows="6" placeholder="MESSAGE"></textarea>
						</div>
						<div class="form-group">
							<button class="tm-submit-btn" type="submit" name="submit">Submit now</button> 
						</div>               
					</div>
				</form>
			</div>			
		</div>
	</section>
	
	<?php require_once 'include/footer.php';?>