<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="../model/inserirdados.php" method="POST">
        Nome:
        <input type="text" name="cxnome"/><br>
        Endereço:
        <input type="text" name="cxendereco"/><br>
        Telefone:
        <input type="tel" name="cxtel"/><br>
        Tipo: 
        <input type="radio" name="cxtipo" value ="Professor"/> Professor
        <input type="radio" name="cxtipo" value ="Aluno"/> Aluno    <br>
        Idade:
        <input type="number" name="cxidade"/><br>
        E=mail:
        <input type="email" name="cxemail"/><br>
        CPF: 
        <input type="number" name="cxcpf"/><br>
        <input type="submit" name="cxpronta" value = "Enviar"><br>
    </form>
</body>
</html>