<?php
//$start = null;
$router = null; $page = null;
session_start();
//$_SESSION['test'] = 'roma';
include_once './include/require.php';

//$test = [
//    'login' => 'admin',
//    'pass' => 'root'
//];
$router->Head();
$router->Router($page);
include_once './controller/'.$router->controller.'Controller.php';
$router->Footer();

