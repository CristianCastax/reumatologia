<?php
print_r($_GET);
print_r($_POST);
//die();
    //CONTROLADOR
    include('doctores.class.php');
    $app = new Doctores();
    include('views/header.php');
    $action= (isset($_GET['action']))?$_GET['action'] : null; //isset es para saber si existe la variable, si no existe se le asigna null, si existe se le asigna el valor
    $id_doctor= (isset($_GET['id_doctor']))?$_GET['id_doctor'] : null;
    $datos = array();
    switch($action){
        case 'delete':
            $fila = $app->delete($id_doctor);
            $datos = $app->getAll(); //para que se actualice la tabla
            include('views/doctores/index.php'); 
            break;
        case 'create':
            include('views/doctores/form.php');
            break;
        case 'save':
            $datos=$_POST;
            $fila=$app->Insert($datos);
            $datos = $app->getAll(); //para que se actualice la tabla
            include('views/doctores/index.php'); 
            break;

        case 'update':
            $datos=$app->getOne($id_doctor);
            print_r($datos);
            include('views/doctores/form.php');
            break;
        default:
            $datos = $app->getAll();
                include('views/doctores/index.php'); //vista
            break;
    }
    include('views/footer.php');
?>