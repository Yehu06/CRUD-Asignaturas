<?php

if(!isset($_GET['c']) || !isset($_GET['m']))
{
    require_once 'Controladores/CAsignatura.php';

    $objC=new CAsignatura();

    $resultado=$objC->listar();

    include 'Vistas/VistasAsignaturas/'.$objC->vista;
}
else
{
    $controlador=$_GET['c'];
    $metodo=$_GET['m'];

    require_once 'Controladores/'.$controlador.'.php';

    $objC=new $controlador();

    $resultado=$objC->$metodo();

    include 'Vistas/VistasAsignaturas/'.$objC->vista;
}




/*Aqui pongo el si no existe nada dentro de las variables, que se ejecute el listar asignaturas. Esto lo hago pq cuando tu la primera vez que 
entras a local host el index no tiene valores en el get. Si tiene valores pues se ejecutara el index de manera normal*/
?>