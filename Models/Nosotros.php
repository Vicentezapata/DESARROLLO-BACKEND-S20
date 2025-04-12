<?php
require_once 'Database.php';
class Nosotros{
    private $db;

    public function __construct(){
        $this->db = Database::conectar();
    }

    public function getNosotros(){
        $query = "SELECT * FROM nosotros";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
