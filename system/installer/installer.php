<?php
$host = $_GET['host'];
$dbname = $_GET['dbname'];
$user = $_GET['user'];
$pass = $_GET['pass'];

$data = [
    'host'=>$host,
    'dbname'=>$dbname,
    'user'=>$user,
    'pass'=>$pass
];

$json = json_encode($data);
file_put_contents("../data/data.json", $json);

header("location: ./database.php?login=".$_GET['login']."&password=".$_GET['password']);