<?php
session_start();
$user = "vp";
$pass = "123";

if(isset($_POST['user']) AND isset($_POST['pass'])){

        $userLog = $_POST['user'];
        $passLog = $_POST['pass'];
        if($userLog == $user AND $passLog == $pass){
            /* CASO DE TUDO CERTO */
            $_SESSION['logado'] = true;
            $_SESSION['name'] = "ADMIN";
            $_SESSION['erro'] = false;
            header("Location: home");
        }else{
            $_SESSION['erro'] = true;
            header("Location: login");
        }
    
}else{
    /* CASO O LOGIN ESTEJA ERRADO */
    header("Location: index");
}
?>