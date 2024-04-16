<?php
define('PATH','http://localhost/tela_caixa_decimo/');

define('NAMEDB',"caixatem");
define('USERDB',"root");
define('PASSDB',"1234");
$pdo = new PDO("mysql:host=localhost;dbname=".NAMEDB,USERDB,PASSDB);
?>