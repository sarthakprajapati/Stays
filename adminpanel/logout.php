<?php
ob_start();
session_start();
header("location: ../hotel/index.php");
session_destroy();
 ?>
