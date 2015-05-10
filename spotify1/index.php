<?php

include_once("control/controlLogin.php");
include_once("modelo/modeloLogin.php");


$controlLogin = new ControlLogin();
$controlLogin->invoke();

$controlListas = new ControlListas();


?>
