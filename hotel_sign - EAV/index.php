<?php
require_once 'inc/db.php';
$type = 'alert-success';
$msg = '';
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if($_POST['name'] != '' && $_POST['username'] != '' && $_POST['email'] != '' && $_POST['password'] != '' && $_POST['repeat'] != ''){
            if($_POST['password'] == $_POST['repeat']){
                $name = $_POST['name'];
                $username = $_POST['username'];
                $email = $_POST['email'];
                $password = $_POST['password'];
                if($db->exists($username,$email)){
                    $type = 'alert alert-danger';
                    $msg = 'Username or passworsd already in use!';
                }else{
                    $password = password_hash($password, PASSWORD_DEFAULT);
                    $res = $db->addHotel($name, $username, $email, $password);
                    if($res){
                        $type = 'alert alert-success';
                        $msg = 'Successfully registered!!';
                    }  
                }
            }else{
                $type = 'alert alert-danger';
                $msg = 'Password mismatch!';
            }
        }else{
            $type = 'alert alert-danger';
            $msg = 'Fill the form properly to register!';
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
</head>
<body>
<div class="card col-md-5 form-class mt-2 bgc-dark text-white">
    <div class="<?php echo $type; $type = 'alert alert-success'?>"><?php echo $msg; $msg = ''?></div>
    <h2>Hotel registration</h2>
    <p>Fill this form to register to our website.</p>
    <form method="post" style="margin:0;">
        <div class="form-group">
            <label for="name">Hotel Name * :</label>
            <input type="text" name="name" class="form-control">
        </div>
        <div class="form-group">
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
        </div>
        <div class="form-group">
            <input type="submit" value="Submit" class="btn btn-success btn-block">
        </div>
    </form>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
</body>
</html>