
<?php
require_once 'Modelos/asignatura.php';

class CAsignatura
{
    public $vista;
    public $fila;

    public function listar()
    {
        $asig=new asignatura();

        $resultado=$asig->listar();

        $this->vista='listarAsignaturas.php';

        return $resultado;
    }

    public function añadir()
    {
        $nombre=$_POST['nombre'];
        $codigo=$_POST['codigo'];
        $color=$_POST['color'];

        $asig=new asignatura();

        $resultado=$asig->añadir($nombre,$codigo,$color);

        $this->vista='resultadoAsignatura.php';

        return $resultado;
    }

    public function cogerId()
    {
        $id=$_GET['id'];

        $asig=new asignatura();

        $this->fila=$asig->cogerId($id);

        $this->vista='modificarAsignatura.php';
    }

    public function modificar()
    {
        $id=$_POST['id'];
        $nombre=$_POST['nombre'];
        $codigo=$_POST['codigo'];
        $color=$_POST['color'];

        $asig=new asignatura();

        $resultado=$asig->modificar($id,$nombre,$codigo,$color);

        $this->vista='resultadoAsignatura.php';

        return $resultado;
    }

    public function confirmarEliminar()
    {
        $id=$_GET['id'];

        $asig=new asignatura();

        $this->fila=$asig->cogerId($id);

        $this->vista='eliminarAsignatura.php';
    }

    public function eliminar()
    {
        $id=$_POST['id'];

        $asig=new asignatura();

        $resultado=$asig->eliminar($id);

        $this->vista='resultadoEliminar.php';

        return $resultado;
    }

    public function gestionarEliminar()
    {
        if(isset($_POST['confirmar']))
        {
            return $this->eliminar();
        }
        else
        {
            $this->confirmarEliminar();
        }
    }
}
?>
