<?php
    require_once 'inc/db.php';
    require_once 'inc/session.php';
    session_start();
    $hotel_id = $_SESSION['id'];
    $flag = '';
    $type = '';
    $msg = '';
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        foreach($_POST as $val => $index){
            if(!$db->serviceExists($db->getAttribId($val),$hotel_id)){
                if($db->addValue($hotel_id, $val, 1)){
                }else{
                    $flag = 'Error';
                }
            }else{
                $flag = 'Exists';
            }
        }
        if($flag == 'Error'){
            $type = 'alert alert-danger';
            $msg = 'Something went wrong';
        }else if($flag == 'Exists'){
            $type = 'alert alert-danger';
            $msg = 'Service already added';
        }else{
            $type = 'alert alert-success';
            $msg = 'Details Updated';
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hotel details</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
</head>
<body>
<div class="mt-5 pt-5">
<div class="card col-md-3 form-class bgc-dark text-white">
    <div class="<?php echo $type; $type = 'alert alert-success'?>"><?php echo $msg; $msg = ''?></div>
    <h2>Hotel Services</h2>
    <p>What services does your hotel provide</p>
    <form method="post" style="margin:0;">
        <div class="form-group form-check">
            <input type="checkbox" value="true" name="parking" class="form-check-input">Parking</input>
        </div>
        <div class="form-group form-check">
            <input type="checkbox" value="true" name="pets" class="form-check-input">Pets allowed</input>
        </div>
        <div class="form-group form-check">
            <input type="checkbox" value="true" name="pool" class="form-check-input">Swimming pool</input>
        </div>
        <div class="form-group form-check">
            <input type="checkbox" value="true" name="gym" class="form-check-input">Gym</input>
        </div>
        <div class="form-group">
            <input type="submit" value="Submit" class="btn btn-success btn-block">
        </div>
    </form>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
</body>
</html>