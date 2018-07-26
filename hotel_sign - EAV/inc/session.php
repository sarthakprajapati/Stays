<?php

function setSession($name, $email, $id){
    session_start();
    $_SESSION['name'] = $name;
    $_SESSION['email'] = $email;
    $_SESSION['id'] = $id;
}