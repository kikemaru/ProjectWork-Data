<?php
if ($_POST['action'] == 'auth')
{
    echo 123;
    $login = $start->Clear($_POST['login']);
    $password = $start->Hash($_POST['password']);
    $db->Auth($login, $password);
}