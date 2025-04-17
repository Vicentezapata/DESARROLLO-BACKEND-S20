<?php
require_once './Models/Servicios.php';

class ServiciosController{
    
    public function listar(){
        $servicios = new Servicios();
        echo json_encode($servicios->getServicios());
    }
    public function crear(){
        $servicios = new Servicios();
        // Implementar lógica para crear un nuevo servicio
        $data = json_decode(file_get_contents("php://input"), true);
        if (isset($data['nombre'], $data['costo'], $data['duracion'], $data['tipo'])) {
            $result = $servicios->crearServicioSeguro($data['nombre'], $data['costo'], $data['duracion'], $data['tipo']);
            echo json_encode(['message' => $result]);
        } else {
            echo json_encode(['error' => 'Datos incompletos']);
        }
        //$result = $servicios->crearServicio($_POST['nombre'], $_POST['costo'], $_POST['duracion'], $_POST['tipo']);
        //echo json_encode(array("message" => "Implementaste metodo post."));
    }
    public function actualizar(){
        $servicios = new Servicios();
        // Implementar lógica para actualizar un servicio existente
        $data = json_decode(file_get_contents("php://input"), true);
        $result = $servicios->actualizarServicio($data['id'], $data['nombre'], $data['costo'], $data['duracion'], $data['tipo']);
        echo json_encode(['message' => $result]);
    }
    public function eliminar(){
        //ESTO TRAE EL JSON DE LA CONSULTA
        $data = json_decode(file_get_contents("php://input"), true);
        $servicios = new Servicios();
        $result = $servicios->eliminarServicio($data['id']);
        // Implementar lógica para eliminar un servicio
        echo json_encode(['message' => $result]);
    }
        
}