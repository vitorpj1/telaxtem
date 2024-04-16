<?php
define('PATH','http://localhost/');

define('NAMEDB',"caixatem");
define('USERDB',"root");
define('PASSDB',"1234");
$pdo = new PDO("mysql:host=localhost;dbname=".NAMEDB,USERDB,PASSDB);
?>