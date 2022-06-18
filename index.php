<?php
$file = file_get_contents("./system/data/data.json");
if (!empty($file)){
    include './pages/auth.html';
} else {
    include './pages/main.html';
}
