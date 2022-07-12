<?php

class Router
{

    private $rout;
    public $title;
    public $page;

    public function __construct($rout = null)
    {
        $this->rout = $rout;
    }

    public function Router($page, $param = null)
    {
        $this->page = $page;

        if (!empty($param)){
            $url = http_build_query($param);
        }
        $rout = $this->rout;
        if (in_array($page, $rout)) {
            if (!isset($page) || $page == 'main' || $page == 'index' || $page == null) {
                return require './page/main.php';
            } else {
                return require './page/' . $page . '.php';
                // echo $page;
            }
        } else {
            return require './page/404.php';
        }
    }

    public function Title($title)
    {
        $this->title = $title;
        echo '<title>'.$title.'</title>';
    }

//    public function getTitle($title)
//    {
//        echo '<title>'.$title.'</title>';
//    }


    /*
     * Методы для создания страниц
     * Расположены в классе Router потому что каждая страница
     * вызывается в данном классе и максимальный простой вариант
     * обращения к методам - обращение к методам этого класса
     */

    public function Head()
    {
        echo '<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="./web/css/bootstrap.min.css" rel="stylesheet">
      <script src="https://cdn.jsdelivr.net/npm/html5shiv@3.7.3/dist/html5shiv.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/respond.js@1.4.2/dest/respond.min.js"></script>
  </head>
  <body>
        ';
    }

    public function Footer()
    {
        echo '
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="./web/js/bootstrap.min.js"></script>
  </body>
</html>';
    }

    public function checkSession()
    {
        session_start();
        if (!isset($_SESSION['as']))
            header("Location: ../");
    }


    private function Navstart($title)
    {
        echo '<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="collapsed navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-9" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="#" class="navbar-brand">'.$title.'</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-9">
            <ul class="nav navbar-nav">
        ';
    }

    private function Navend()
    {
        echo '
        </ul>
        </div>
    </div>
</nav>';
    }


    public function Navbar($page, $title, $active = false)
    {
        if ($active == true){
            echo '<li class="active"><a href="./?page=' . $page . '">' . $title . '</a></li>';
        } else {
            echo '<li><a href="./?page=' . $page . '">' . $title . '</a></li>';
        }
    }


    public function CreateForm($type, $action)
    {
        echo '
        <form method="'.$type.'" action="./">
        <input type="hidden" name="action" value="'.$action.'">
        ';
    }

    public function AddInput($type, $name, $placeholder, $class, $width)
    {
        echo '
        <p><input type="'.$type.'" name="'.$name.'" class="'.$class.'" id="inputSuccess1" style="max-width: '.$width.'px;" placeholder="'.$placeholder.'"></p>
        ';
    }

    public function AddButton($value, $class, $width)
    {
        echo '<p><input type="submit" value="'.$value.'" class="'.$class.'" style="width: '.$width.'px;"></p>';
    }

    public function EndForm()
    {
        echo '</form>';
    }

    public function CheckAuth()
    {
        if (isset($_SESSION['login']))
            header("location: ./?page=private");
    }

}