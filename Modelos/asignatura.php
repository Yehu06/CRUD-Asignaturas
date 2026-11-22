
<?php
require_once 'Modelos/configdb.php';

class asignatura extends conexion
{
    public function listar()
    {
        $mostrar="SELECT * FROM asignaturas";
        return $this->conx->query($mostrar);
    }

    public function añadir($nombre,$codigo,$color)
    {
        $añadir="INSERT INTO asignaturas(nombre,codigo,color) VALUES ('$nombre','$codigo','$color')";
        return $this->conx->query($añadir);
    }

    public function modificar($id,$nombre,$codigo,$color)
    {
        $modificar="UPDATE asignaturas SET nombre='$nombre',codigo='$codigo',color='$color' WHERE id=$id";
        return $this->conx->query($modificar);
    }

    public function eliminar($id)
    {
        $eliminar="DELETE FROM asignaturas WHERE id=$id";
        return $this->conx->query($eliminar);
    }

    public function cogerId($id)
    {
        $mostrar="SELECT * FROM asignaturas WHERE id=$id";
        $resultado=$this->conx->query($mostrar);
        return $resultado->fetch_array();
    }
}
?>
