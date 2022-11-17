<?php
//Inicializo o sistema de controle de sessão
session_Start();

//Verifica se o usuario esta logado
//em nossa aplicação
if( !isset($_SESSION['id'])){

    //se nao estiver é direcionado para a tela login
    header('Location: /tsi-php-2202/login');
    exit();
}