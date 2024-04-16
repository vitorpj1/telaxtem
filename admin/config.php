<?php
define('PATH_ADMIN','http://localhost/tela_caixa_decimo/admin');


define('NAMEDB',"caixatem");
define('USERDB',"root");
define('PASSDB',"");
$pdo = new PDO("mysql:host=localhost;dbname=".NAMEDB,USERDB,PASSDB);
?>