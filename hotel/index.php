<?php require_once 'include/header.php';
require_once '../adminpanel/inc/db.php';?>
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
			    	
					<h1 class="tm-banner-title">Find <span class="tm-yellow-text">The Best</span> Place</h1>
					<p class="tm-banner-subtitle">For Your Holidays</p>
					<div id="searchbar" style="margin-top: 15px;"> 
		  				<form action="view.php" method="GET">
		  					<div class="form-group">
		  					<input type="text" name="city" placeholder="Search Your Hotel!" class="form-control" style="width: 100%; padding-left: -50px; height: 50px;">
		  					</div>
		  				</form>
		  			</div>	
				</div>
				<img src="img/banner-1.jpg" alt="Image" />	
		    </li>
		  </ul>
		</div>	
	</section>

	<!-- gray bg -->	
	<section class="container tm-home-section-1" id="more">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-sm-6" style>
				<!-- Nav tabs -->
				<div class="tm-home-box-1 tm-home-box-1-center">
					<ul class="nav nav-tabs tm-white-bg" role="tablist" id="hotelCarTabs" style="height:99px;">
					    <li role="presentation" class="active">
					    	<a href="#hotel" aria-controls="hotel" role="tab" data-toggle="tab"><h1>Hotel</h1></a>
					    </li>
					</ul>

					<!-- Tab panes -->
					<div class="tab-content" >
					    <div role="tabpanel" class="tab-pane fade in active tm-white-bg" id="hotel">
					    	<div class="tm-search-box effect2">
								<form action="view.php" method="get" class="hotel-search-form">
									<div class="tm-form-inner" style="height:151px;">
										<div class="form-group">
							            	 <select class="form-control" name="id">
							            	 	<option value="">-- Select Hotel -- </option>
							            	 	<?php 
												    $hotels = $db->getAllHotel();
												    foreach($hotels as $row){ ?>
												    	<option value="<?php echo $row['id'] ; ?>"><?php echo $row['name'] ; ?></option>); 
												<?php } ?>
											</select> 
							          	</div>
									</div>							
						            <div class="form-group tm-yellow-gradient-bg text-center">
						            	<button type="submit" class="tm-yellow-btn">Check Now</button>
						            </div>  
								</form>
							</div>
					    </div>				    
					</div>
				</div>								
			</div>
			<?php 
				$hotels = $db->getAllHotel();
				$i=0;
				foreach($hotels as $row){ 
					?>
			<div class="col-lg-4 col-md-4 col-sm-6">
				<div class="tm-home-box-1 tm-home-box-1-2 tm-home-box-1-center">
					<img src="../adminpanel/images/<?php echo $row['images']; ?>" alt="image" class="img-responsive" style="height: 250px; width: 100%;">
					<a href="view.php?id=<?php echo $row['id']; ?>">
						<div class="tm-green-gradient-bg tm-city-price-container">
							<span><?php echo $row['name']; ?></span>
							<span><?php echo $row['city']; ?></span>
						</div>	
					</a>			
				</div>				
			</div>
						<?php   } ?>
		</div>

	
		<div class="section-margin-top">
			<div class="row">				
				<div class="tm-section-header">
					<div class="col-lg-3 col-md-3 col-sm-3"><hr></div>
					<div class="col-lg-6 col-md-6 col-sm-6"><h2 class="tm-section-title">Testimonials</h2></div>
					<div class="col-lg-3 col-md-3 col-sm-3"><hr></div>	
				</div>
			</div>
			<div class="row">
				<?php 
				$hotels = $db->getAllHotel();
				$i=0;
				
				foreach($hotels as $row){ 
					?>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-xxs-12">
					<div class="tm-home-box-2">						
						<img src="../adminpanel/images/<?php echo $row['images']; ?>" alt="image" class="img-responsive" style="height: 200px; width: 100%;">
						<?php echo "<h3>".$row['detail']."</h3>"; ?>
						<p class="tm-date">28 March 2016</p>
						<div class="tm-home-box-2-container">
							<a href="#" class="tm-home-box-2-link"><i class="fa fa-heart tm-home-box-2-icon border-right"></i></a>
							<a href="#" class="tm-home-box-2-link"><span class="tm-home-box-2-description">Travel</span></a>
							<a href="#" class="tm-home-box-2-link"><i class="fa fa-edit tm-home-box-2-icon border-left"></i></a>
						</div>
					</div>
				</div>
			<?php  } ?>
			</div>		
		</div>
	</section>		
	
	<!-- white bg -->
	
	<?php require_once 'include/footer.php';?>