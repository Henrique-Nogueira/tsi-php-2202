<?php
//Chama o controle de sessão
require_once '../controleDeSessao/controle.php';

session_destroy();
//manda de volta após destrir a sessão. 
header('location:/tsi-php-2202/login/index.php');