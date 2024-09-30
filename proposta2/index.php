<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <form action="post.php" method="post">
        <p>Insira o id do veículo:</p>
        <input type="text" name="id">

        <p>Insira o modelo do veículo:</p>
        <input type="text" name="modelo">

        <p>Insira a montadora do veículo:</p>
        <input type="text" name="montadora">

        <p>Insira a cor do veículo:</p>
        <input type="text" name="cor">
        <br/>
        <input type="submit" value="Cadastrar!">
    </form>
</body>
</html>