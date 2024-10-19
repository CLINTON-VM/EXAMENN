<?php
$url = $_SERVER['REQUEST_URI'];
//echo $url;
if($url == "/EXAMENN/public/"){
 require_once "../views/inicio.php";

}elseif ($url == "/EXAMENN/public/ejercicio01/"){
    require_once "../views/ejercicio01.php";

}elseif ($url == "/EXAMENN/public/ejercicio02/"){
    require_once "../views/ejercicio02.php";

}elseif ($url == "/EXAMENN/public/ejercicio03/"){
    require_once "../views/ejercicio03.php";
}