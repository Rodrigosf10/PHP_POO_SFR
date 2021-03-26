<?php  
	// Los metodos protegidos solo pueden ser accedidos desde herencias de clases o solo desde clases hijas y debe se utilizado por un metodo "hijo"

	class clasePadre{
		protected function metodo1(){
			return "Metodo Protegido";
		}
	}
	class claseHijo extends clasePadre{
		public function muestra(){
			return parent::metodo1();
		}
	}

	$objeto = new claseHijo();
	echo $objeto->muestra();

?>