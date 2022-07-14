<?php
$rout = null;
include_once './config/config.php';
include_once './core/Start.php';
$start = new Start();
include_once './core/Router.php';
$router = new Router($rout);
include_once './core/Db.php';
$db = new Db();
include_once './include/connect.php';
