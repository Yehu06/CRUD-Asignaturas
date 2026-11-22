<?php
require_once '../../Controladores/CClases.php';

$controlador=new controladorClases();

$resultado=$controlador->listar();

include '../../Vistas/VistasHorario/'.$controlador->vista;
?>