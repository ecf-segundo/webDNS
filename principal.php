<?php
session_start();

if(!isset($_SESSION['login'])){
  header("Location: index.php");
  session_destroy();
}

if(isset($_GET['deslogar'])){
  session_destroy();
  header("Location: index.php");
}

$login = $_SESSION['login'];
include "connection.php";

$sql = mysqli_query($conn,"SELECT * FROM usuario WHERE login = '$login' ") or die('Erro na query:' . $sql . ' ' . mysqli_error());

while ($row = mysqli_fetch_array( $sql )) 
{ 
	$nome = $row['nome'];
	$unit = $row['unit'];
	print date('j \of F \of Y h:i:s A');
	print "</br>";
	print "Unidade: $unit";
       	
}

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="css/bootstrap.min.js"></script>
    <script src="css/jquery.min.js"></script>
    <title>DNS Zone Manager</title>
</head>
<body>

  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="principal.php"><img src="imagens/logo.jpg" width="60" height="60"></a>
      </div>
      <ul class="nav navbar-nav">
	<?php
	$sql = mysqli_query($conn,"SELECT * FROM zone WHERE unit = '$unit' ") or die('Erro na query:' . $sql . ' ' . mysqli_error());
	while ($row = mysqli_fetch_array( $sql )) 
	{ 
		$zone = $row['zone'];
		$zone_id = $row['zone_id'];
		echo "<li><a href=zone.php?zoneid={$row['zone_id']}>{$row['zone']}</a></li>";
	}
	?>       	
        <li id="saindo"><a href="?deslogar">Sair</a></li>
        
      </ul>
    </div>
  </nav>
<div class="container">
  <h3><?php echo utf8_encode("Seja bem Vindo(a) $nome"); ?></h3>
  <p>DNS Zone Manager</p>
</div>

<script src="css/script.js"></script>

</body>
</html>
