<?php
//buscamos o código que conecta no SGBD
require_once '../bancoDeDados/conecta.php';

//Na linha 3 estamos trazendo todo o código de //../bancodedados/conecta.php para este código //include_once(); nao gera erro fatal se não existir

//Dados provenientes do formulário HTML
$nome = $_POST['nome'];
$turno = $_POST['turno'];
$inicio = $_POST['inicio'];

$consulta = $bd->prepare('INSERT INTO alunos(nome,turno,inicio) 
VALUES (:nome, :turno, :inicio)');

/* 
A função $bd->prepare() retorna
outra variavel(objeto), essa outra
variável consegue juntar os dados 
do usuário com a mesma consulta SQL 
*/

$consulta->bindParam('nome',$nome);
$consulta->bindParam('turno',$turno);
$consulta->bindParam('inicio',$inicio);

/*
A função $consulta->bindParam() substitui
os rotulos (ex.: ":nome") pelos dados
inseguros
*/

if($consulta->execute()){
    echo "Gravou com sucesso!";
} else {
    echo "ERRO ao gravar no banco de dados";
}
//finalmente executamos a consulta no sistema gerenciador de banco de dados
