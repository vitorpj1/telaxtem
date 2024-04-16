<?php
if(isset($_POST['numeronovo'])){
    $novonumero = $_POST['numeronovo'];
    //abrindo o json externo
    $json = json_decode(file_get_contents('link.json'));
    /* var_dump($json); */
    /* echo $json->link->data; */
    $json->link->data = $novonumero;
    $json_editado = file_put_contents('link.json',json_encode($json));
    $json = json_decode(file_get_contents('link.json'));
    var_dump($json);
    header('Location: '.PATH_ADMIN.'/trocar-numero?status=sucess');
}else{
    header('Location: '.PATH_ADMIN.'/trocar-numero');
}
?>