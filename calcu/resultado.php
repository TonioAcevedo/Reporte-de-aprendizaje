<?php 
	private $num1;
	private $num2;

	function __construct($num1, $num2){
		$this->num1 = $num1;
		$this->num2 = $num2; 
	}


	$resultado = 0;
	if(isset($_GET["res"]))	
		$resultado = $_GET["res"];

?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Resultado</title>
</head>
<body>
	<h1 id =result  >El resultado es: <?php echo $resultado ?> </h1>
</body>
</html>