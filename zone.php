<?php
session_start();
$zone_id = $_GET['zoneid'];

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


$sql = mysqli_query($conn,"SELECT * FROM zone WHERE zone_id = '$zone_id' ") or die('Erro na query:' . $sql . ' ' . mysqli_error());
while ($row = mysqli_fetch_array( $sql )) 
{ 
	$zone_id = $row['zone_id'];
	$zone = $row['zone'];
	$file = $row['file'];
	$unit = $row['unit'];
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
  <h3><?php echo $zone; ?></h3>
  <?php
  	echo "Create Temp DB</br>";
	//php_shell(mysql -u root -pSenha123 -c "CREATE table...");
  	echo "Select TempDB </br>";
	//$sql1 = mysqli_query($conn,"SELECT * FROM zone WHERE unit = '$unit' ") or die('Erro na query:' . $sql . ' ' . mysqli_error());
	//while ($row1 = mysqli_fetch_array( $sql1 )) 
	//{ 
	//	$item1 = $row1['item1'];
	//	$item2 = $row1['item2'];
	//	$item3 = $row1['item3'];
	//}
  	echo "Create List </br>";
	//<section>
       	//<div class="form-group">
        //    <form action="change.php" method="POST" enctype="multipart/form-data">
        //        <h1 align="center">Alterar Cadastro de Produtos</h1>
        //        
        //        <input class="form-control" name="idprod" id="ex0" type="hidden" value="$idproduto" required="required">
        //        <input class="form-control" name="marca" id="ex1" type="text" value="$marca" required="required">
        //        <label for="ex1">Descrição</label>
        //        <input class="form-control" name="descricao" id="ex2" type="text" value="$descricao" required="required">
        //        <br><br>
        //        <input class="form-control" type="submit" value="Gravar Informação" >
        //    </form>
        //</div>
	//</section>
  	echo "Validate </br>";
	//--> change.php
  ?>
</div>

<script src="css/script.js"></script>

</body>
</html>
