<?php

class conexion
{
    public $servidor;
    public $usuario;
    public $contrasenia;
    public $basededatos;
    protected $conx;

    public function __construct()
    {
        $this->servidor = 'localhost';
        $this->usuario = 'root';
        $this->contrasenia = '';
        $this->basededatos = 'asignaturas';

        $this->conx = new mysqli($this->servidor, $this->usuario, $this->contrasenia, $this->basededatos);
    }
}
?>