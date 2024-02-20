<?php

include '../php_banco/conexao.php';

session_start();

if(isset($_SESSION['logado'])){
    unset ($_SESSION['email']);
    unset ($_SESSION['senha']);
    session_destroy();
    header("location: ../index.php");
    exit("location: ../index.php");
}

/* 
<?php
// Inicialize a sessão
session_start();
 
// Remova todas as variáveis de sessão
$_SESSION = array();
 
// Destrua a sessão.
session_destroy();
 
// Redirecionar para a página de login
header("location: login.php");
exit;
?>
*/
