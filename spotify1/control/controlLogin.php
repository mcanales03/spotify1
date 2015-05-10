<?php
# header("location:../vista/vistaLogin.php");
# include_once("../modelo/modeloLogin.php");
# include_once("vista/vistaLogin.php");

class controlLogin {
 public $model;
 
 public function __construct()  
    {  
        $this->model = new modeloLogin();

    } 
 
    public function invoke()
    {
    
    	$reslt = $this->model->validarUsuario();   
    	if($reslt === true)
    	{
    		include 'vista/vistaListas.php';
    	}
    	else
    	{
    		include 'vista/vistaLogin.php';
    	}
    
    }
}


?>
