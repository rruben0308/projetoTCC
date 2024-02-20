<?php
session_start();

include '../php_banco/conexao.php';




$usuario = $_POST["email"];
$senha = $_POST["senha"];

echo $usuario;

echo $senha;
$bd = new Conexao();
$conexao = $bd->getConexao();

$Matriz = $conexao->prepare("select * from cliente  where email = '".$usuario."' and senha = '".$senha."'");
//$Matriz = bindValue(1, $usuario);
//$Matriz = bindValue(2, $senha);

$Matriz->execute();
$Linha = $Matriz->fetch(PDO::FETCH_OBJ);
 
if ($Linha > 0){
    $_SESSION['email'] = $usuario;
    $_SESSION['senha'] = $senha;

    header('location:../paginas/paginainicial.php');
}else {
    unset ($_SESSION['email']);
    unset ($_SESSION['senha']);

    header('location:entrar.php');
}

if($botao=="login"){
    echo 'Bem vindo';
}