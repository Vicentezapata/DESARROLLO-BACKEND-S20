<?php
// Habilitar CORS para permitir solicitudes desde otros orígenes
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

//Obtener la ruta solicitada
$request = $_GET['api'] ?? '';

switch($request){
    case 'ciudades':
        require_once './Controllers/CiudadesController.php';
        $controller = new CiudadesController();
        $controller->listar();
        break;
    case 'nosotros':
        require_once './Controllers/NosotrosController.php';
        $controller = new NosotrosController();
        $controller->listar();
        break;
    case 'servicios':
            require_once './Controllers/ServiciosController.php';
            $controller = new ServiciosController();
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $controller->crear();
            }elseif($_SERVER['REQUEST_METHOD'] == 'PUT'){
                $controller->actualizar();
            }elseif($_SERVER['REQUEST_METHOD'] == 'DELETE'){
                $controller->eliminar();
            }elseif($_SERVER['REQUEST_METHOD'] == 'GET'){
                $controller->listar();
            }else{
                echo json_encode(array("error" => "Método no permitido."));
            }
            break;
    case 'serviciosciudades':
        require_once './Controllers/ServiciosCiudadesController.php';
        $controller = new ServiciosCiudadesController();
        $controller->listar();
        break;
    default:
        echo json_encode(array("error" => "Ruta no encontrada."));
        break;
}

