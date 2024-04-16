<?php
session_start();

if($_SESSION['logado'] == false){
    header("Location: login");
}else{
?>
<?php include("partials/header.php")?>

<?php
if(isset($_GET['status'])){
?>
<div class="sucess">
    <p>
        Numero alterado com sucesso.
    </p>
</div>
<?php
}
?>


<form action="processar-troca" method='POST'>
    <input type="text" name='numeronovo'>
    <input type="submit" value="atualizar">
</form>

<?php



//Imprimindo json editado



//Editando a linha que vc quer
/* $json->layers[1]->nm = "Mensagem Enviada";


//Salvando as edições
$json_editado = file_put_contents('teste.json',json_encode($json));

//Carregando json após ser salvo já editado
$json = json_decode(file_get_contents('teste.json'));
//Imprimindo json editado
var_dump($json); */
?>

<?php include("partials/footer.php")?>
<?php
}
?>