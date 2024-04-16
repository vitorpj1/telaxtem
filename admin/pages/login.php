<?php session_start()?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>

     <!-- font google-->

     <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <!-- css -->
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <div class="main-login">
        <div class="box-login">
            <form action="processar" method="POST">
                <h1><i class="fa-solid fa-user-tie"></i> Login Admin</h1>
                <br>
                <?php
                    if(isset($_SESSION['erro'])){
                ?>
                <div class="erro-box">
                    <p> <i class="fa-solid fa-triangle-exclamation"></i> Credenciais incorretas</p>
                </div>
                <?php
                    }
                ?>
                
                <br>
                <label for="">Usuario</label>
                <input class="input-item" type="text" name="user">
                <br>
                <label for="">Senha</label>
                <input class="input-item" type="password" name="pass">
                <br>
                <input class="input-item btn-submit" type="submit" value="Entrar">
            </form>
        </div>
    </div>
</body>
</html>