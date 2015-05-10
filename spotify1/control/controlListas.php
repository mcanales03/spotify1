<?php

include_once("../modelo/modeloListas.php");
include_once("vista/vistaListas.php");

class controlListas {
	public $model;

	public function __construct()
	{
		$this->model = new modeloListas();

	}

	public function invoke()
	{
		include 'vista/vistaListas.php';
		

	}
}

?>