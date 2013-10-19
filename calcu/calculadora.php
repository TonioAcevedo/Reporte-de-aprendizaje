<?php 

Class Calculadora
{

	private $num1;
	private $num2;

	function __construct($num1, $num2){
		$this->num1 = $num1;
		$this->num2 = $num2; 

	}

	public function suma(){
		if($this->num1 == "" or $this->num1 == "")
			throw new Exception("Ingrese un valor");
	
		return $this->num1 + $this->num2;
	}

	public function resta(){
		if($this->num1 == "" or $this->num1 == "")
			throw new Exception("Ingrese un valor");
	
		return $this->num1 - $this->num2;
	}

	public function division(){
		if($this->num1 == "" or $this->num1 == "")
			throw new Exception("Ingrese un valor");
	
		if($this->num2 == 0)
			throw new Exception("El numero 2 debe ser distinto de 0");
		
		if($this->num1/$this->num2 < 0 )
			return 0;
		else
			return $this->num1/$this->num2;
	}
 
	public function Multiplica(){
		if($this->num1 == "" or $this->num1 == "")
			throw new Exception("Ingrese un valor");
	
		return $this->num1 * $this->num2;
	}

}

?>