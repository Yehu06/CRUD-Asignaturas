<?php
require_once '../../Controladores/CHorario.php';

$controlador=new controladorHorario();

$resultado=$controlador->añadir();

include '../../Vistas/VistasHorario/'.$controlador->vista;
?>