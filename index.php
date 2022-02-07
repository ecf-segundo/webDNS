<?php
  session_start();

  if(isset($_SESSION['login'])){
    header("Location: principal.php");
    session_destroy();
  }

  if(isset($_GET['deslogar'])){
    session_destroy();
    header("Location: index.php");
  }

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DNS Zone Manager</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body onload="teste()">

<br>
    <h2 align="center">Seja bem vindo ao Portal de gerenciamento de Zonas de DNS</h2>

    <div>
        <form action="action.php" method="POST">

        <div class="container">
            <label for="login"><b>Username</b></label><br>
            <input type="text" placeholder="Enter Username" name="login" id="login" required><br>

            <label for="pass"><b>Password</b></label><br>
            <input type="password" placeholder="Enter Password" name="pass" id="pass" required><br>
                
            <button type="submit">Fazer Login</button><br>
            <label>
            <input type="checkbox" checked="checked" name="remember"> Remember me
            </label><br><br><br>
            
        </div>
        </form>
    </div>

    <script src="css/script.js"></script>

</body>
</html>
