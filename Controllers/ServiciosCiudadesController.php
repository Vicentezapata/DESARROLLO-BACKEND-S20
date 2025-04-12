<?php
require_once './Models/ServiciosCiudades.php';

class ServiciosCiudadesController{
    public function listar(){
        $serviciosCiudades = new ServiciosCiudades();
        echo json_encode($serviciosCiudades->getServiciosCiudades());
    }
        
}