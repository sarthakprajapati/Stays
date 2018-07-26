<?php 
    require_once '../adminpanel/inc/db.php';
    if(!isset($_GET['id']) && !isset($_GET['city'])){
        // header('location: index.php');
    }
    if(isset($_GET['id']) && !isset($_GET['city'])){
        // echo 'id';
        $rooms = $db->getRoomsById($_GET['id']);
    }else if(!isset($_GET['id']) && isset($_GET['city'])){
        $rooms = $db->getRoomsByCity($_GET['city']);
    }else if(isset($_GET['id']) && isset($_GET['city'])){
        // echo 'id city';
        $rooms = $db->getRooms($_GET['id'],$_GET['city']);
    }
    // var_dump($rooms);
?>
<?php require_once 'include/header.php';?>
<?php
		$file = __FILE__;
    $filename = basename($file,'.php');
?>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
<style>

    .wifi, .ac{
        color:#888;
        font-size:16px;
    }

</style>
<?php require_once 'include/navbar.php';?>
    <br>
    <div class="text-center">
        <h1>Find your Ideal hotel here...</h1>
        <p>Choose the best plans we give here ...</p>
    </div>
    <div class="row">
        <div class="container">
        <?php foreach($rooms as $room):?>
        <div class="col" style="background:#fff;margin:30px 0;">
            <div class="tm-home-box-1tm-home-box-1-center">
                <div class="row">
                <div class="col-md-4">
				    <img src="../adminpanel/images/<?php echo $room['images'];?>" alt="image" class="img-responsive" style="height: 250px; width: 100%;">
                </div>
                <div class="col-md-4" style="padding:10px">
                <h2><?php echo $room['hotel']['name'];?></h2>
                <p><?php echo $room['hotel']['city'];?></p>
                <br><br>
                <p>facilities</p>
                <br>
                    <?php if(isset($room['WiFi'])):?>
                        <p class="wifi"><i class="fas fa-wifi"></i> Free WiFi</p>
                    <?php endif;?>
                    <?php if(isset($room['AC'])):?>
                        <p class="wifi"><i class="fas fa-snowflake" style="font-size:22px"></i> Air Conditioning</p>
                    <?php endif;?>
                </div>
                <div class="col-md-4" style="border-left:1px solid black;padding-left:0">
                <div class="text-center" style="padding:51px;">
                    <p><strong>Special Stays discount!!</strong></p>
                    <p style="color:red;text-decoration:line-through;">Rs.18,000</p>
                    <p>Rs. <?php echo $room['price'];?></p>
                </div>
                <a href="book.php?id=<?php echo $room['id'];?>">
				    <div class="tm-green-gradient-bg tm-city-price-container">
						<span>Book now!</span>
					</div>	
				</a>
                </div>
                </div>			
			</div>
        </div>
        <?php endforeach;?>
        </div>
    </div>
	<!-- white bg -->
<?php require_once 'include/footer.php';?>