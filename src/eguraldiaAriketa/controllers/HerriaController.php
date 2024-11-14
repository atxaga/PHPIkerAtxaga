<?php

namespace Controllers;

use Models\Herria;

class HerriaController {

    public function listAll() {
        $herria = new Herria();
        $herriak = $herria->getAll();
        $herriaId = $herriak[0]['id'];
        $datuak = $this->getDatuak($herriaId);
        //echo "<pre>" ; var_dump($herriak); "</pre>";
        require_once '../views/herri-zerrenda.php';
    }

    public function getDatuak($id) {
        $herria = new Herria();
        $herriak = $herria->getDatuak($id);
        return $herriak;
    }

    public function kudeatu() {
        $herria = new Herria();
        $herriak = $herria->getAll();
        $herriaId = $herriak[0]['id'];
        $datuak = $this->getDatuak($herriaId);
        //echo "<pre>" ; var_dump($herriak); "</pre>";
        require_once '../views/herri-kudeaketa.php';
    }
}