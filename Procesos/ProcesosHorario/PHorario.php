<?php
require_once '../../Controladores/CHorario.php';

$controlador=new controladorHorario();

$controlador->crear();

include '../../Vistas/VistasHorario/'.$controlador->vista;
?>