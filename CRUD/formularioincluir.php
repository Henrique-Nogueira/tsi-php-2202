<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario de cadastro</title>
</head>
<body>
    <form action="gravar.php" method="post"> 
        <label for="nome"> Nome: </label>
        <input type="text" name="nome">
        <br><br>
        <label for="turno">Turno: </label>
        <select name="turno">
            <option value="">Escolha</option> 
            <option value="matutino">matutino</option> 
            <option value="vespertino">vespertino</option> 
            <option value="noturno">noturno</option> 
        </select>
        <br><br>
        <label for="inicio">Inicio: </label>
        <input type="date" name="inicio" id="inicio">
        <br><br>
        <input type="submit" value="Gravar">  
    </form>
</body>
</html>