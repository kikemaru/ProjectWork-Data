<?php

class GoData
{
    public function DbConnect($host, $dbname, $user, $pass)
    {
       return $db = new PDO("mysql:host=$host;dbname=$dbname;", "$user", "$pass");
    }
}