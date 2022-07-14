<?php

class Db
{
    public $db;

    public function __construct()
    {
        $this->db = new PDO("mysql:host=localhost;dbname=datawork;", 'root', 'root');
    }

    public function GetDb()
    {
        //return $this->db;
        echo 123;
    }


    //Регистрация пользователя
    public function Reg($login, $pass, $alias)
    {

    }


    //Авторизация пользователя
    public function Auth($login, $pass)
    {
        $dbc = $this->db;
        $rs = $dbc->query("SELECT * FROM users WHERE login='$login'")->fetch();

        if ($rs['password'] == $pass)
        {
            echo $rs['alias'];
        } else {
            echo 'error data';
        }
    }
}
