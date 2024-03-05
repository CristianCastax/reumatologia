<?php
//print_r($_GET);
//print_r($_POST);
//die();
    //CONTROLADOR
    include('doctores.class.php');
    $app = new Doctores();
    include('views/header.php');
    $action= (isset($_GET['action']))?$_GET['action'] : null; //isset es para saber si existe la variable, si no existe se le asigna null, si existe se le asigna el valor
    $id_doctor= (isset($_GET['id_doctor']))?$_GET['id_doctor'] : null;
    $datos = array();
    $alert = array();

    switch($action){
        case 'delete':
            //$fila = $app->delete($id_doctor);
            if ($app->delete($id_doctor)){ //si fila es verdadero, es porque se elimino el registro
                $alert['tipo'] = 'success';
                $alert['mensaje'] = 'Doctor eliminado correctamente';
            }
            else{
                $alert['tipo'] = 'danger';
                $alert['mensaje'] = 'Error al eliminar el doctor';
            }
            $datos = $app->getAll(); //para que se actualice la tabla
            include('views/alert.php');
            include('views/doctores/index.php'); 
            break;
        case 'create':
            include('views/doctores/form.php');
            break;
        case 'save':
            $datos=$_POST;
            if ($app->insert($datos)){ //si fila es verdadero, es porque se elimino el registro
                $alert['tipo'] = 'success';
                $alert['mensaje'] = 'Doctor agregado correctamente';
            }
            else{
                $alert['tipo'] = 'danger';
                $alert['mensaje'] = 'Error al agregar el doctor';
            }
            $datos = $app->getAll(); //para que se actualice la tabla
            include('views/alert.php');
            include('views/doctores/index.php'); 
            break;
        case 'update':
            $datos=$app->getOne($id_doctor);
            if(isset($datos["id_doctor"])){ //s
                include('views/doctores/form.php');
            }
            else{
                $alert['tipo'] = 'danger';
                $alert['mensaje'] = 'No te pases de listo, no hagas cosas inapropiadas';
                $datos = $app->getAll(); //para que se actualice la tabla
                include('views/alert.php');
                include('views/doctores/index.php'); 
            }
            break;
        case 'change':
            $datos=$_POST;
            if ($app->Update($id_doctor, $datos)){ //si fila es verdadero, es porque se elimino el registro
                $alert['tipo'] = 'success';
                $alert['mensaje'] = 'Doctor actualizado correctamente';
            }
            else{
                $alert['tipo'] = 'danger';
                $alert['mensaje'] = 'Error al actualizar el doctor';
            }
            $datos = $app->getAll(); //para que se actualice la tabla
            include('views/alert.php');
            include('views/doctores/index.php'); 
            break;
        default:
            $datos = $app->getAll();
                include('views/doctores/index.php'); //vista
            break;
    }
    include('views/footer.php');
?>