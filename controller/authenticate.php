<?php

require('../model.php');

$login = $_POST['login'];
$pwd = $_POST['password'];

$login = stripslashes($login);
$pwd = stripslashes($pwd);

// var_dump($login);
// var_dump($pwd);

if(checkAuth($login,$pwd))
{
    var_dump('authenticate');
    $host  = $_SERVER['HTTP_HOST'];
    $uri  = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
    $extra = '../view/dashboard.php';  // change accordingly

    header("Location: http://$host$uri/$extra");
    exit;
    // header('Location: dashboard.php');
}

