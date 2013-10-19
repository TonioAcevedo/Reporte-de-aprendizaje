<?php 

	include "calculadora.php";

	if($_SERVER['REQUEST_METHOD'] != 'POST'){
		header('Location:index.php');		
		exit;
	}

	$num1 = $_POST["num1"];
	$num2 = $_POST["num2"];
	$op = $_POST["operacion"];

	$calculadora = new Calculadora($num1, $num2);

	$resultado = 0;

	try{
		switch ($op) {
			case 0:
				$resultado = $calculadora->suma();
				break;
			
			case 1:
				$resultado = $calculadora->resta();
				break;

			case 2:
				$resultado = $calculadora->division();
				break;
			case 3:
				$resultado = $calculadora->Multiplica();
				break;

			default:
				$resultado = -1;
				break;
		}


	}
	catch(Exception $e){
		echo $e->getMessage();
		exit;
	}

	header("Location:resultado.php?res=$resultado");
	exit;
?>
