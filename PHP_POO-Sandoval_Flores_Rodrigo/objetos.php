<?php  
	class miClase{
		//Atributos
		public $resultado=0;

		//Metodos
		public function miMetodo($valor1, $valor2){
			$this->resultado=$valor1+$valor2;
			return $this->resultado;
		}
	}
	// Aqui termina la clase

	//Declarar o Instanciar un objeto
	$miObjeto = new miClase();
	echo $miObjeto->miMetodo(10,5);

?>