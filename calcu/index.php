<?php 

	$error = 0;
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Calculadora</title>

	<style type ="text/css">
		#result{
			font.-color:blue;
  			background-color:gray;
  			border: blue 2px inset; 	
		}
		.error{
			font.-color:red;
  			border: blue 2px inset; 
		}
		#calcu { 
  			border: blue 2px inset; 
  			background-color:gray;
		}
		#bod {
			
			margin-right: auto;
			width: 6em;
		}
		td {
			color: white;
		}
	</style>
</head>
<body id =bod>
	<h1>Calculadora</h1>

	<?php if($error != 0){ ?>
		<p class = "error"><?php $error ?></p>	
	<?php } ?>

	<form action="proceso.php" method="POST">
		<table id = calcu>
			<tr>
				<td>Numero 1</td>
				<td><input type="text" name="num1"></td>
			</tr>

			<tr>
				<td>Numero 2</td>
				<td><input type="text" name="num2"></td>
			</tr>

			<tr>
				<td>Operacion</td>
				<td>
					<select name="operacion" id="operacion">
						<option value="0">Suma</option>
						<option value="1">Resta</option>
						<option value="2">Division</option>
						<option value="3">Multiplica</option>
					</select>

				</td>
			</tr>

			<tr>
				<td colspan = "2"><input type="submit" name="Enviar"></td>
			</tr>
		</table>

	</form>
</body>
</html>