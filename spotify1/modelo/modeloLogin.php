<?php

	//require_once("sesion.class.php");

class modeloLogin {
	
	function validarUsuario()
	{

		if(isset($_REQUEST['usuario']) && isset($_REQUEST['contrasenia'])){
			$conexion = new mysqli("localhost","root","root","phplogin");
			$consulta = "select password from usuarios where usuario = '$_REQUEST[usuario]';";

			$result = $conexion->query($consulta);

			if($result->num_rows > 0)
			{
				$fila = $result->fetch_assoc();
				if( strcmp($_REQUEST['contrasenia'],$fila["password"]) == 0 )
					return true;						
				else					
					return false;
			}
			else
					return false;

		}
	}
}

?>
