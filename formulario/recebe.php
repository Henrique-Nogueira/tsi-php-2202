<?php
echo "Seja bem-vindo(a)," . $_POST ['nomeUsuario'] . '!<br><br>';

echo "Você tem {$_POST['idadeUsuario']}, CPF: {$_POST['cpfUsuario']}<br>";

echo "E o periodo escolhido foi o {$_POST['periodoUsuario']}";

$nome = $_POST['nomeUsuario'];
$idade = $_POST['idadeUsuario'];
$cpf = $_POST['cpfUsuario'];
$periodo = $_POST['periodoUsuario'];

$arquivo = fopen('alunos.csv', 'a');

fwrite($arquivo, "$nome;$idade;$cpf;$periodo\r\n");
fclose($arquivo);