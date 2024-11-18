<?php

namespace Models;

use PDO;
use Config\Database;

class Jabea {

    private $db;

    public function __construct() {
        $this->db = Database::getInstance()->getConnection();
    }

    public function getAll() {
        $stmt = $this->db->prepare('SELECT * FROM jabeak');
        $stmt->execute();
        return $stmt->fetchALL();
    }

    public function create($izena, $dni) {
        $query = "INSERT INTO jabeak SET DNI = :DNI, izena = :izena";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(":DNI", $dni, PDO::PARAM_STR);
        $stmt->bindParam(":izena", $izena, PDO::PARAM_STR);
        return $stmt->execute();
    }

    public function delete($id) {
        $query = "DELETE FROM jabeak WHERE id = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(":id", $id, PDO::PARAM_INT);
        return $stmt->execute();
    }

    public function update($id, $izenBerria) {
        $query = "UPDATE jabeak SET izena = :izenBerria WHERE id = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(":id", $id, PDO::PARAM_INT);
        $stmt->bindParam(":izenBerria", $izenBerria, PDO::PARAM_STR);
        return $stmt->execute();
    }         

// herria lortu id erabiliz
    public function getId($id) {
        $query = "SELECT izena FROM jabeak WHERE id = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(":id", $id, PDO::PARAM_INT);
        $stmt->execute();
        //return $stmt->fetchAll();
        $jabea = $stmt->fetchAll();
        //var_dump($herria);
        return $jabea[0]["izena"];
    }  
}