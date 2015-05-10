<?php

class tema{
	
	private  $idTema;
	private  $nombre;
	
	function getNombrePorID($idTema)
	{
			$conexion = new mysqli("localhost","root","root","phplogin");
			$consulta = "select nombre from tema where id = '$idTema';";
			$result = $conexion->query($consulta);
			return $result;
	}
}

?>
