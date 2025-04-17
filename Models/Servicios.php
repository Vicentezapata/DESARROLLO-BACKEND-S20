<?php
require_once 'Database.php';
class Servicios{
    private $db;

    public function __construct(){
        $this->db = Database::conectar();
    }

    public function getServicios(){
        $query = "SELECT * FROM servicios";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    //ESTO ES INSEGURO, HAY QUE HACERLO CON PARAMETROS
    public function crearServicio($nombre,$costo,$duracion,$tipo){
        $query = "INSERT INTO Servicios VALUES ('".$nombre."',".$costo.",".$duracion.",".$tipo.")";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->execute();
    }
    //FORMA DE HACERLO CON PARAMETROS SEGURO
    public function crearServicioSeguro($nombre,$costo,$duracion,$tipo){
        $query = "INSERT INTO Servicios (nombre, costo, duracion, tipo) VALUES (:nombre, :costo, :duracion, :tipo)";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':nombre', $nombre);
        $stmt->bindParam(':costo', $costo);
        $stmt->bindParam(':duracion', $duracion);
        $stmt->bindParam(':tipo', $tipo);
        return $stmt->execute();
    }
    //ESTO ES INSEGURO, HAY QUE HACERLO CON PARAMETROS
    public function eliminarServicio($id){
        $query = "DELETE FROM Servicios WHERE id=".$id;
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->execute();
    }
    //actualizar
    public function actualizarServicio($id,$nombre,$costo,$duracion,$tipo){
        $query = "UPDATE Servicios SET nombre='".$nombre."', costo=".$costo.", duracion=".$duracion.", tipo=".$tipo." WHERE id=".$id;
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->execute();
    }
}
