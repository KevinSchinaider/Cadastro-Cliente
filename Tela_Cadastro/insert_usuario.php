<?php


$servidor = 'localhost';
$user = 'root';
$password = 'root';
$banco = 'sistema';

$conexao = mysqli_connect($servidor,$user,$password,$banco);



$nome = $_POST ['nome'];
$email = $_POST ['email'];
$senha = $_POST ['senha'];




$sql = "INSERT INTO usuarios (nm_user, email, senha) values ('$nome','$email','$senha')";


$insert = mysqli_query($conexao, $sql);

header('Location: \login\index.html?msg=1');


?>