<?php

class modeloListas {
	
	function crearLista()
	{
		if(isset($_REQUEST['nombreLista'])){
			$nombre = $_REQUEST['nombreLista'];
			$conexion = new mysqli("localhost","root","root","phplogin");
			$consulta = "insert into lista (nombre) values ('$nombre');";

			$result = $conexion->query($consulta);

		}
	}

	function getNombrePorID($idTema)
	{
		$conexion = new mysqli("localhost","root","root","phplogin");
		$consulta = "select nombre from tema where id = '$idTema';";
		$result = $conexion->query($consulta);
		return $result;
	}
	
	
	
}

?>
