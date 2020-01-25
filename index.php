<?php  
	
	if(isset($_POST['enviar']))
	{
		require_once('EntradasCine.php');

		$edadusuario = $_POST['edad'];

		$objentrada = new EntradasCine();
		$objentrada->setEdad($edadusuario);
		$resultado = $objentrada->calcularPrecio();
	}

	require('views/index.view.php');
?>