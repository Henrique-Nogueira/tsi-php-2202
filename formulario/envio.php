<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible"
    content="IE-edge">
    <meta name="viewport"
    content="width-device-width,
    initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="recebe.php"
    method="post">
        <label for="nome">Nome:</label>
        <input type="text"
        name="nomeUsuario" id="nome">
        <br>
        <label for="idade">Idade:</label>
        <input type="number"
        name="idadeUsuario" id="idade">
        <br>
        <label for="cpf">CPF:</label>
        <input type="text"
        name="cpfUsuario" id="cpf">
        <br>
        <label for="periodo">Periodo:</label>
        <select name="periodoUsuario"
        id="periodo">
        <option value="matutino">Matutino</option>
        <option value="vespertino">Vespertino</option>
        <option value="noturno">Noturno</option>
        </select>
        <br>
        <input type="submit"
        value="Enviar">
    </form>
</body>
</html>

    