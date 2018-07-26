<?php
require_once '../adminpanel/inc/db.php';
if(isset($_GET['id'])){
    $id = $_GET['id'];
}else{
    header('location:index.php');
}
$msg = '';
$type = '';
if($_SERVER['REQUEST_METHOD'] == 'POST'){
if(isset($_POST['name']) && $_POST['name'] != '' && isset($_POST['check_in']) && $_POST['check_in'] != '' && isset($_POST['check_out']) && $_POST['check_out'] != '' && isset($_POST['numofper']) && $_POST['numofper'] != ''){
    $values = [
        'hotel_id' => $id,
        'name' => $_POST['name'],
        'check_in' => $_POST['check_in'],
        'check_out' => $_POST['check_out'],
        'numofper' => $_POST['numofper']
    ];
    if($db->book($values)){
        $type = 'alert alert-info';
        $msg = 'Booking done!';
    }else{
        $type = 'alert alert-danger';
        $msg = 'Something went wrong!';
    }
}else{
    $type = 'alert alert-secondary';
    $msg = 'Fill the form Properly!';
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://bootswatch.com/4/minty/bootstrap.min.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body{
            background:url('img/3.jpeg') no-repeat;
            background-size: 100vw 100vh;
        }
        .card{
            width:50%;
            margin: 50px auto;
            padding:20px;
        }
    </style>
</head>
<body>
    <div class="card">
        <div class="<?php echo $type;$type='';?>"><?php echo $msg;$msg='';?></div>
        <h2>Booking</h2>
        <form action="book.php?id=<?php echo $id;?>" method="post">
            <div class="form-group">
                <label for="name">Name *: </label>
                <input type="text" name="name" class="form-control">
            </div>
            <div class="form-group">
                <label for="name">Check In *: </label>
                <input type="date" name="check_in" class="form-control">
            </div>
            <div class="form-group">
                <label for="name">Check out *: </label>
                <input type="date" name="check_out" class="form-control">
            </div>
            <div class="form-group">
                <label for="name">Check In *: </label>
                <select name="numofper" class="form-control">
                    <option value="" class="dropdown">Select No. of persons</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">3+</option>
                </select>
            </div>
            <hr>
            <div class="form-group">
                <input type="submit" value="Submit" class="btn btn-success btn-block">
            </div>
        </form>
    </div>
</body>
</html>