<?php
require 'inc/db.php';

if(isset($_GET['del'])){
    $del_id = $_GET['del'];
    $db->delHotel($del_id);
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
            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">Edit Hotel</h2>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="au-card recent-report">
                                    <div class="au-card-inner">
                                        <div class="table-responsive">          
                                          <table class="table">
                                            <thead>
                                              <tr>
                                                <th>#</th>
                                                <th>Hotel Name</th>
                                                <th>City</th>
                                                <th>Price</th>
                                                <th>Room Details</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                              </tr>
                                            </thead>
                                        <?php 
                                            $hotels = $db->getAllHotel();
                                            foreach($hotels as $row){ ?>
                                                <tbody>
                                                  <tr>
                                                    <td><?php echo $row['id']; ?></td>
                                                    <td><?php echo $row['name']; ?></td>
                                                    <td><?php echo $row['city']; ?></td>
                                                    <td><?php echo "#"; ?></td>
                                                    <td><a href="add_room.php?id=<?php echo $row['id']; ?>"><i class="fa fa-plus-circle"></i></a></td>
                                                    <td><a href="edit_hotel.php?edit=<?php echo $row['id']; ?>"><i class="fa fa-pencil-alt"></i></a></td>
                                                    <td><a href="edit_hotel.php?del=<?php echo $row['id']; ?>"><i class="fa fa-times"></i></a></td>
                                                  </tr>
                                                </tbody>
                                            <?php } ?>
                                              </table>
                                        </div>
                                        
                                            <?php 
                                            if(isset($_GET['edit'])){
                                                $edit_id = $_GET['edit'];
                                                $row = $db->getHotelById($edit_id);
                                                }
                                            ?>   
                                            <div class="card col-md-12 form-class">
                                    <form  action="" method="GET" enctype="multipart/form-data"> <!--IMPORTANT-->
                                        <div class="form-group">
                                            <label for="name">Hotel Name * :</label>
                                            <input type="text" name="name" class="form-control" value="<?php echo $row['name']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="city">City * :</label>
                                            <input type="text" name="city" class="form-control" value="<?php echo $row['city']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="detail">Detail * :</label>
                                            <textarea name="detail" class="form-control"><?php echo $row['detail']; ?></textarea> 
                                        </div>
                                        <div class="form-group">
                                            <label for="address">Address * :</label>
                                            <textarea name="address" class="form-control"><?php echo $row['address']; ?></textarea> 
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
                            <?php } ?>

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
