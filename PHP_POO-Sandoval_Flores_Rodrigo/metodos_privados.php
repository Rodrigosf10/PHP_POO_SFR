<?php  
	// Un metodo privado solo puede ser accedido en la misma clase en la que fue creado y al mismo timepo no puede mostrarse fuera o en instancia, debe manejarse dentro de un metodo de la misma clase.
	class clase1{
		private function saludar(){
			return "Saludos";
		}
		public function mandarSaludo(){
			return self::saludar();
		}
	}

	// Instanciacion
	$objeto = new clase1();
	echo $objeto->mandarSaludo();

?>