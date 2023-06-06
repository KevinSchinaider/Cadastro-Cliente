<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Fornecedor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<nav class="navbar navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" hreorm="#"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Menu</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
             </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/sistema/cadastro_cliente.php">Cadastro de Cliente</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="cadastro_fornecedor.php">Cadastro de Fornecedor</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="">Contas a Pagar</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"></a>
            </li>
                </ul>
            </div>
        </div>
        </nav>
    <div class="imagem">

    </div>
    </nav>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>


<form action="insert_fornecedor.php" method="post">
<div class="container">  
    <div class="row" style="margin-top: 100px";> 
        <h2>Cadastro de Fornecedor</h2>
        <div class="row">
            <div class="col-12">
              <input type="text" class="form-control" placeholder="Nome do Fornecedor" aria-label="First name" name="nome">
            </div>
            <div class="col-8 espacamento">
              <input type="text" class="form-control" placeholder="Endereço" aria-label="Last name" name="endereco">
            </div>
            <div class="col-4 espacamento">
                <input type="number" class="form-control" placeholder="Número" aria-label="First name" name="numero"    >
          </div>
          <div class="col-5 espacamento">
            <input type="text" class="form-control" placeholder="Bairro" aria-label="Last name" name="bairro">
          </div>
          <div class="col-4 espacamento">
              <input type="text" class="form-control" placeholder="Cidade" aria-label="First name" name="cidade">
    </div>
    <div class="col-3 espacamento">
        <input type="text" class="form-control" placeholder="Estado" aria-label="Last name" name="estado" >
        </div>
        <div class="col-6 espacamento">
          <input type="text" class="form-control"  id="cep" placeholder="CEP" aria-label="First name" name="cep">
        </div>
        <div class="col-6 espacamento">
            <input type="text" class="form-control"  id="telefone" placeholder="Telefone" aria-label="Last name" name="telefone">
        </div>
        <div class="col-6 espacamento">
              <input type="text" class="form-control" id="cpf" placeholder="CPF" aria-label="First name" name="cpf">
        </div>
        <div class="col-6 espacamento">
              <input type="email" class="form-control" placeholder="E-mail" aria-label="First name" name="email">
        </div>
        <div class="col-10" > </div>
        <div class="col-2">
            <input class="btn btn-sucess" type="submit" value="Cadastrar">
        </div>

        </div>
</div>
</form>


<script type="text/javascript">
    $("#telefone").mask("(00) 00000-0000");
    $("#cpf").mask("000.000.000-00");
    $("#cep").mask("00000-000");
        </script>

    

    
</body>
</html>