<?php
session_start();
require "..\code files\init.php";

// this is some xchanges
$URl = $_GET['url']?? "home";
$URl = explode("/",$URl);

$file = pages(strtolower($URl[0]));
if (file_exists($file)){
    
    require $file;
}
else{
    require pages("404");
}

