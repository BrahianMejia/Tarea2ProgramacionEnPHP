<?php  

	class EntradasCine
	{
		private $edad;
		private $valorentrada = 10000;

		public function __construct()
		{
			$this->edad = 0;
		}

		public function getEdad()
		{
			return $this->edad;
		}

		public function setEdad($edadusuario)
		{
			$this->edad = $edadusuario;
		}

		public function calcularPrecio()
		{
			switch($this->getEdad())
			{
				case $this->getEdad() < 5:
					return "La función es gratis.";
					break;
				case $this->getEdad() <= 12:
					return "Paga la mitad de la tarifa: " . $this->valorentrada / 2 . " pesos.";
					break;
				case $this->getEdad() <= 54:
					return "Paga la tarifa completa: " . $this->valorentrada . " pesos.";
					break;
				case $this->getEdad() >= 55:
					return "La función es gratis.";
					break;
				default:
					return "Digita un valor válido.";
					break;
			}
		}
	}

?>