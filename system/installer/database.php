<?php

include_once '../../lib/GoData.php';
$data = file_get_contents("../data/data.json");
$udata = json_decode($data);
$host = $udata->host;
$dbname = $udata->dbname;
$user = $udata->user;
$pass = $udata->pass;
$class = new GoData();
$db = $class->DbConnect($host, $dbname, $user, $pass);

$login = $_GET['login'];
$password = $_GET['password'];

$db->exec("CREATE TABLE user (id integer auto_increment primary key, login varchar(70), password varchar(100))");
$db->exec("CREATE TABLE log (id integer auto_increment primary key, data text, ip varchar(30), client text, ref text, date_time DATETIME)");

$db->query("INSERT INTO user VALUES (NULL, '$login', '$password')");


