<?php
include 'header.php';

if(isset($_GET['pa'])){
    $pa=$_GET['pa'];
}else{
    $pa='home';
}
switch ($pa){
    case 'home':include 'data/home.txt';break;
    case 'service':include 'data/service.txt';break;
    case 'about':include 'data/about.txt';break;
    case 'contact':include 'data/contact.txt';break;
    default: echo '<h2>ERROR 404</h2>';break;
}

include 'footer.php';
