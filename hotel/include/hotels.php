<?php
    require_once 'inc/db.php';
    $hotels = $db->getAllHotel();
    foreach($hotels as $row){
        echo '<b>'.$row['name'].'</b> has Email Id <b>'.$row['email'].'</b> and Username <b>'.$row['username'].'</b><br>';
    }