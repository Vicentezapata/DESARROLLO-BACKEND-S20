<?php
require_once './Models/Nosotros.php';

class NosotrosController{
    public function listar(){
        $nosotros = new Nosotros();
        echo json_encode($nosotros->getNosotros());
    }
        
}