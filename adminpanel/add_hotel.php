<?php
require_once 'inc/db.php';
session_start();
$type = 'alert-success';
$msg = '';
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if($_POST['name'] != '' && $_POST['detail'] !='' && $_POST['address'] != '' /*&& $_POST['username'] != '' && $_POST['email'] != '' && $_POST['password'] != '' && $_POST['repeat'] != ''*/){
            /*if($_POST['password'] == $_POST['repeat']){*/
                $name = $_POST['name'];
                /*$username = $_POST['username'];
                $email = $_POST['email'];
                $password = $_POST['password'];*/
                $detail = $_POST['detail'];
                $address = $_POST['address'];
                $image = $_FILES['image']['name'];
                $image_tmp = $_FILES['image']['tmp_name'];
                $city = $_POST['city'];
                /*if($db->exists($username,$email)){
                    $type = 'alert alert-danger';
                    $msg = 'Username or passworsd already in use!';
                }*//*else{*/
                    /*$password = password_hash($password, PASSWORD_DEFAULT);
*/
                    $res = $db->addHotel($name/*, $username, $email, $password*/,$city,$image,$detail,$address);
                    if($res){
                        move_uploaded_file($image_tmp,"images/$image");
                        $type = 'alert alert-success';
                        $msg = 'Successfully registered!!';
                    /*} */ 
                }
            /*}else{
                $type = 'alert alert-danger';
                $msg = 'Password mismatch!';*/
            // }
        }else{
            $type = 'alert alert-danger';
            $msg = 'Fill the form properly to register!';
        }
    }
?>
<!-- TOP-STYLES -->
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
                                    <h2 class="title-1">Add Hotel</h2>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="au-card recent-report">
                                    <div class="au-card-inner">
                                        

								 	<div class="card col-md-12 form-class">
								    <div class="<?php echo $type; $type = 'alert alert-success'?>"><?php echo $msg; $msg = ''?></div>
								    <form  action="" method="POST" enctype="multipart/form-data"> <!--IMPORTANT-->
								        <div class="form-group">
								            <label for="name">Hotel Name * :</label>
								            <input type="text" name="name" class="form-control">
								        </div>
                                        <div class="form-group">
                                            <label for="city">City * :</label>
                                            <input type="text" name="city" class="form-control">
                                        </div>
								        <!-- <div class="form-group">
								            <label for="username">Username * :</label>
								            <input type="text" name="username" class="form-control">
								        </div>
								        <div class="form-group">
								            <label for="email">Email Id * :</label>
								            <input type="email" name="email" class="form-control">
								        </div>
								        <div class="form-group">
								            <label for="password">Password * :</label>
								            <input type="password" name="password" class="form-control">
								        </div>
								        <div class="form-group">
								            <label for="repeat">Confirm Password * </label>
								            <input type="password" name="repeat" class="form-control">
								        </div> -->
                                        <div class="form-group">
                                            <label for="detail">Detail * :</label>
                                            <textarea name="detail" class="form-control"></textarea> 
                                        </div>
                                        <div class="form-group">
                                            <label for="address">Address * :</label>
                                            <textarea name="address" class="form-control"></textarea> 
                                        </div>
                                        <div class="form-group">
                                            <label for="image">Image * </label>
                                            <input type="file" id="image" name="image">
                                        </div>
								        <div class="form-group">
								            <input type="submit" value="Submit" class="btn btn-success btn-block">
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
