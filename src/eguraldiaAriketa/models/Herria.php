<?php

namespace Models;

use PDO;
use Config\Database;

class Herria {

    private $db;

    public function __construct() {
        $this->db = Database::getInstance()->getConnection();
    }

    public function getAll() {
        $stmt = $this->db->prepare('SELECT * FROM herria');
        $stmt->execute();
        return $stmt->fetchALL();
    }

    public function getDatuak($id) {
        $stmt = $this->db->prepare('SELECT * FROM iragarpena WHERE herria_id = ?');
        $stmt->bindParam('i', $id);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    

}