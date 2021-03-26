<?php  
	//
	class miclase{
		public $mensaje=1;
		public function hola(){
			return "Hola";
		}
		public static function metodo(){
			return self::hola();
		}
	}

	//echo miclase::metodo();
	//$objeto = new miclase();
	//echo $objeto->metodo();
?>