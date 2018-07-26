<!-- TOP-STYLES -->
<?php  
session_start();
if(!isset($_SESSION['id'])){
    header('location: login.php');
}
$name = $_SESSION['name'];
$username = $_SESSION['username'];
$email = $_SESSION['email'];
require_once "inc/top.php";
require_once "inc/db.php";
 ?>
<body class="animsition">
    <div class="page-wrapper">
        <?php require_once "inc/header.php"; ?>
        <!-- MENU SIDEBAR-->
        <?php require_once "inc/sidebar.php"; ?>
        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <?php require_once 'inc/navbar.php'; ?>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">overview</h2>
                                    <button class="au-btn au-btn-icon au-btn--blue">
                                        <i class="zmdi zmdi-plus"></i>add item</button>
                                </div>
                            </div>
                        </div>
                        <div class="row m-t-25">
                            <div class="col-sm-6 col-lg-6">
                                        <?php 
                                              $t = $db->userExists($_SESSION['username']);
                                              echo "<h5> Username : ".$t['username']."</h5>";
                                              echo "<h5> Name : ".$t['fname']."</h5>";
                                              echo "<h5> Email : ".$t['email']."</h5>";
                                              echo "<h5> Role : ".$t['role']."</h5>";
                                             ?>
                                        
                        
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
