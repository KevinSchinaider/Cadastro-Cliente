<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    
    <h1>Registro</h1>
    <div class="imagem2"></div>

    <form action="/sistema/cadastro_cliente.php" method="post" >

        <label class="n" for="nome">Nome</label>
        <input class="n2" type="text" name="nome" id="nome">

        <label class="e" for="email">Email</label>
        <input class="e2" type="text" name="email" id="email">

        <label class="p" for="senha">Senha</label>
        <input class="p1" type="text" name="senha" id="senha">

        <input class="b1" type="submit" value="Registrar">

    </form>

</body>
</html>
