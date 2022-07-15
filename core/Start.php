<?php

class Start
{

//    private $login;
//    private $password;
      public $title;

    public function __construct($rout = null)
    {

    }


    public function Start()
    {

    }

    public function Clear($string)
    {
        return stripcslashes(urldecode(htmlspecialchars($string)));
    }

    public function Hash($string)
    {
        return md5($this->Clear($string));
    }


}