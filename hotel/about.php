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
					<h1 class="tm-banner-title"><span class="tm-yellow-text">Tour</span> Packages</h1>
					<p class="tm-banner-subtitle">For Your Vacations</p>	
				</div>
		      <img src="img/banner-3.jpg" />
		    </li>
		    <li>
			    <div class="tm-banner-inner">
					<h1 class="tm-banner-title">Everything except excess</h1>
					<p class="tm-banner-subtitle">Find your Freedom!</p>	
				</div>
		      <img src="img/banner-2.jpg" />
		    </li>
		    <li>
			    <div class="tm-banner-inner">
					<h1 class="tm-banner-title">Relax, it’s Holiday Inn</h1>
					<p class="tm-banner-subtitle">Feel the Hyatt Touch</p>	
				</div>
		      <img src="img/banner-1.jpg" />
		    </li>
		  </ul>
		</div>		
	</section>

	<!-- gray bg -->	
	<section class="container tm-home-section-1" id="more">
		<div class="row">
			<!-- slider -->
			<div class="flexslider flexslider-about effect2">
			  <ul class="slides">
			    <li>
			      <img src="img/about-1.jpg" alt="image" />
			      <div class="flex-caption">
			      	<h2 class="slider-title">Welcome To Stays</h2>
			      	<h3 class="slider-subtitle">Find your Freedom!</h3>
			      	<p class="slider-description">
						The project, Hotel Management System (STAYS) is a website that allows the hotel manager to handle all hotel activities online. Interactive GUI and the ability to manage various hotel bookings and rooms make this system very flexible and convenient. The hotel manager is a very busy person and does not have the time to sit and manage the entire activities manually on paper. This application gives him the power and flexibility to manage the entire system from a single online system. Hotel management project provides room booking, staff management and other necessary hotel management features. The system allows the manager to post available rooms in the system. Customers can view and book room online. Admin has the power of either approving or disapproving the customer’s booking request. Other hotel services can also be viewed by the customers and can book them too. The system is hence useful for both customers and managers to portable manage the hotel activities.
					</p>
			      </div>			      
			    </li>
			  </ul>
			</div>
		</div>
	
		<div class="section-margin-top about-section">
			<div class="row">				
				<div class="tm-section-header">
					<div class="col-lg-3 col-md-3 col-sm-3"><hr></div>
					<div class="col-lg-6 col-md-6 col-sm-6"><h2 class="tm-section-title">Who We Are</h2></div>
					<div class="col-lg-3 col-md-3 col-sm-3"><hr></div>	
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<div class="tm-about-box-1" style="width: 100%;">
						<a href="#"><img src="img/pp2.jpg" alt="img" class="tm-about-box-1-img" style="height: 140px;"></a>
						<h3 class="tm-about-box-1-title">Krishanu Malikk Thakur <span>( Developer )</span></h3>
						<p class="margin-bottom-15 gray-text">PHP Development Intern </p>
						<div class="gray-text">
							<a href="https://www.facebook.com/krishanu.mallikthakur" class="tm-social-icon"><i class="fa fa-facebook"></i></a>
							<a href="https://www.github.com/Krishanu16298" class="tm-social-icon"><i class="fa fa-github"></i></a>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<div class="tm-about-box-1" style="width: 100%;>
						<a href="#"><img src="img/pp1.jpg" alt="img" class="tm-about-box-1-img" style="height: 140px;"></a>
						<h3 class="tm-about-box-1-title">Sarthak Prajapati <span>( Developer )</span></h3>
						<p class="margin-bottom-15 gray-text"> PHP Development Intern </p>
						<div class="gray-text">
							<a href="https://www.twitter.com/sarthak_ishu11" class="tm-social-icon"><i class="fa fa-twitter"></i></a>
							<a href="https://www.facebook.com/sarthakprajapati11" class="tm-social-icon"><i class="fa fa-facebook"></i></a>
							<a href="https://www.github.com/sarthakprajapati" class="tm-social-icon"><i class="fa fa-github"></i></a>
						</div>
					</div>
				</div>
			</div>		
		</div>
	</section>		

	<?php require_once 'include/footer.php';?>
