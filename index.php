<?php
include('config.php');


$url = isset($_GET['url']) ? $_GET['url'] : 'step-0';

if(file_exists($url.'.php')){
    include($url.'.php');
}else{
    include('404.php');
}
?>