<?php
require_once './Models/Servicios.php';

class ServiciosController{
    public function listar(){
        $servicios = new Servicios();
        echo json_encode($servicios->getServicios());
    }
        
}