<?php
include('config.php');


$url = isset($_GET['url']) ? $_GET['url'] : 'login';

if(file_exists('pages/'.$url.'.php')){
    include('pages/'.$url.'.php');
}else{
    include('pages/404.php');
}
?>