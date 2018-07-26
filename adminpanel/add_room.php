<?php
    require_once 'inc/db.php';
    session_start();
    if(isset($_GET['id'])){
        $id = $_GET['id'];
    }else{
        header('location:index.php');
    }
    $flag = '';
    $msg = '';
    $type = '';
    $result = [];
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $image = $_FILES['image']['name'];
    $image_tmp = $_FILES['image']['tmp_name'];


        if(isset($_POST['price']) && $_POST['price'] != ''){
            $result['price'] = $_POST['price'];
        }else{
            $flag = 'priceerr';
        }
        if(isset($_POST['AC'])){
            $result['AC'] = 1;
        }
        if(isset($_POST['WiFi'])){
            $result['WiFi'] = 1;
        }
        if(isset($_POST['detail_room']) && $_POST['detail_room'] != ''){
            $result['detail_room'] = $_POST['detail_room'];
        }else{
            if($flag == 'priceerr'){
                $flag = 'pnd';
            }else{
                $flag = 'deterr';
            }
        }
        $img = move_uploaded_file($image_tmp,"images/$image");
        if ($img) {
            $result['images'] = $image;
            } else {
                $flag = 'imgerr';
            }
         
        $result['hotel_id'] = $id;
        if(isset($_POST['price']) && $_POST['price'] != '' && $_POST['detail_room'] != '' && isset($_POST['detail_room'])){
             if($db->addRoom($result)){
                 $type = 'alert alert-info';
                 $msg = 'Room successfully added!';
             }
        }
        if($flag == 'priceerr'){
            $type = 'alert alert-danger';
            $msg = 'Please enter the price of the room!';
        }else if($flag == 'imgerr'){
            $type = 'alert alert-danger';
            $msg = 'Please add an image of the room!';
        }else if($flag == 'pnd'){
            $type = 'alert alert-danger';
            $msg = 'Please enter price and details!';
        }else if($flag == 'deterr'){
            $type = 'alert alert-danger';
            $msg = 'Please enter the details!';
        }
    }
?>
<?php require_once "inc/top.php"; ?>
<body class="animsition">
    <div class="page-wrapper">
        <?php require_once "inc/header.php"; ?>
        <!-- MENU SIDEBAR-->
        <?php require_once "inc/sidebar.php"; ?>
        <!-- PAGE CONTAINER-->
    <div class="page-container">
            <!-- HEADER DESKTOP-->
            <?php require_once "inc/navbar.php"; ?>

            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">Add Room Details</h2>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="au-card recent-report">
                                    <div class="au-card-inner">
                                        

								 	<div class="card col-md-12 form-class">
								    <div class="<?php echo isset($type)? $type : '' ; $type = '';?>"><?php echo isset($msg)? $msg : '' ; $msg = '';?></div>

        <form action="add_room.php?id=<?php echo $id;?>" method="post" class="card-content" enctype="multipart/form-data">
        <div class="form-group">
            <label for="price">Price (per person, per day) * :</label>
            <input type="number" name="price" class="form-control" placeholder="Enter price" step="0.01">
        </div>
        <div class="form-group form-check">
            <input type="checkbox" value="true" name="AC" class="form-check-input">Air conditioning</input>
        </div>
        <div class="form-group form-check">
            <input type="checkbox" value="true" name="WiFi" class="form-check-input">Wi-Fi</input>
        </div>
        <div class="form-group">
            <label for="detail">Details * :</label>
            <textarea name="detail_room" class="form-control" placeholder="Enter the deatails"></textarea>
        </div>
       <div class="form-group">
            <label for="image">Image * </label>
            <input type="file" id="image" name="image">
        </div>
        <hr>
        <div class="form-group">
            <input type="submit" value="Submit" class="btn btn-success btn-block">
        </div>
        <div class="form-group text-center">
            <a href="edit_hotel.php" class="text-dark" class="btn btn-warning btn-block">Return</a>
        </div>
        </form>
    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <?php require_once "inc/footer.php"; ?>

                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    <?php require_once "inc/script.php"; ?>

</body>

</html>
<!-- end document-->
