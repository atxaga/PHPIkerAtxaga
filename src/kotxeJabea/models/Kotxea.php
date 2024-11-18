<?php

namespace Models;

use PDO;
use Config\Database;

class Kotxea {

    private $db;

    public function __construct() {
        $this->db = Database::getInstance()->getConnection();
    }

    public function getAll() {
        $stmt = $this->db->prepare('SELECT * FROM kotxeak');
        $stmt->execute();
        return $stmt->fetchALL();
    }

    public function asignatuKotxea($idKotxea, $idJabea) {
        $query = 'UPDATE kotxeak SET jabea_id = :idJabea WHERE id = :idKotxea';
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(":idJabea", $idJabea, PDO::PARAM_STR);
        $stmt->bindParam(":idKotxea", $idKotxea, PDO::PARAM_STR);
        $stmt->execute();

    }

    public function listKotxe($idJabea) {
        $query = 'SELECT * FROM kotxeak WHERE id = :idJabea';
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(":idJabea", $idJabea, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    /*public function create($izena, $dni) {
        $query = "INSERT INTO kotxeak SET DNI = :DNI, izena = :izena";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(":DNI", $dni, PDO::PARAM_STR);
        $stmt->bindParam(":izena", $izena, PDO::PARAM_STR);
        return $stmt->execute();
    }*/

    /*public function delete($id) {
        $query = "DELETE FROM kotxeak WHERE id = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(":id", $id, PDO::PARAM_INT);
        return $stmt->execute();
    }*/

    /*public function update($id, $izenBerria) {
        $query = "UPDATE kotxeak SET izena = :izenBerria WHERE id = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(":id", $id, PDO::PARAM_INT);
        $stmt->bindParam(":izenBerria", $izenBerria, PDO::PARAM_STR);
        return $stmt->execute();
    } */        

// herria lortu id erabiliz
    public function getId($id) {
        $query = "SELECT izena FROM kotxeak WHERE id = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(":id", $id, PDO::PARAM_INT);
        $stmt->execute();
        //return $stmt->fetchAll();
        $kotxea = $stmt->fetchAll();
        //var_dump($herria);
        return $kotxea[0]["izena"];
    }  
}