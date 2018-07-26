<body class="tm-gray-bg">
<div class="tm-header">
  		<div class="container">
  			<div class="row">
  				<div class="col-lg-5 col-md-4 col-sm-4 tm-site-name-container">
  					<a href="#" class="tm-site-name">Stays</a>	
  				</div>
	  			<div class="col-lg-7 col-md-4 col-sm-4">
	  				<div class="mobile-menu-icon">
		              <i class="fa fa-bars"></i>
		            </div>
	  				<nav class="tm-nav" style="text-align:right;">
	  					<?php $base_dir = dirname($filename); ?>
						<ul>
							<li><a href="index.php"  class="<?php echo ($filename == 'index')?'active':'';?>">Home</a></li>
							<li><a href="about.php" class="<?php echo ($filename == 'about')?'active':'';?>">About</a></li>
							<li><a href="contact.php" class="<?php echo ($filename == 'contact')?'active':'';?>">Contact</a></li>
							<li><a href="../signup/signup.php" target="_blank" >SignUp</a></li>
							<li><a href="../adminpanel/login.php" target="_blank">LogIn</a></li>
						</ul>
					</nav>		
	  			</div>				
  			</div>
  		</div>	  	
  	</div>