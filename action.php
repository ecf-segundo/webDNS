<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>

<?php

$login = $_POST['login'];
$senha = $_POST['pass'];

include "connection.php";

$select = "SELECT nome FROM usuario WHERE login = '$login' and senha = PASSWORD('$senha');";
$sql = mysqli_query($conn,$select);
$row = mysqli_num_rows($sql);
if($row > 0){
    session_start();
	$_SESSION["login"] = $login;
    echo"<script language='javascript' type='text/javascript'>
        alert('Você esta logado');window.location
        .href='principal.php';</script>";
}else{
    echo"<script language='javascript' type='text/javascript'>
        alert('Login e/ou senha incorretos, tente novamente');window.location
        .href='index.php';</script>";
        mysqli_close();
}
?>

</body>
</html>
