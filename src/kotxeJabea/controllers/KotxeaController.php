<?php

namespace Controllers;

use Models\Jabea;
use Models\Kotxea;

class KotxeaController {

    public function listAll(){
        $kotxea = new Kotxea();
        $kotxeak = $kotxea->getAll();
        //echo "<pre>"; var_dump($kotxeak);echo "</pre>";
        require_once '../views/jabe-zerrenda.php';
        //require_once '../views/herri-zerrenda-iragarpen-egunak-lortzeko.php';
    }

    public function asignatu($idKotxea, $idJabea) {
        $kotxea = new Kotxea();
        $kotxea->asignatuKotxea($idKotxea, $idJabea);
        $kotxeak = $kotxea->getAll();
        $jabea = new Jabea();
        $jabeak = $jabea->getAll();
        require_once '../public/jabeak.php';
    }

    public function kotxeList($idJabea) {
        $kotxea = new Kotxea();
        $kotxeakJabea = $kotxea->listKotxe($idJabea);
        require_once '../public/jabeak.php';
    }

    public function kudeatu(){
        $kotxea = new Kotxea();
        $kotxeak = $kotxea->getAll();
        $jabea = new Jabea();
        $jabeak = $jabea->getAll();
        //echo "<pre>"; var_dump($kotxeak);echo "</pre>";
        //require_once '../views/herri-zerrenda.php';
        require_once '../public/jabeak.php';
    }

    public function kotxeaGehitu($modeloa, $matrikula, $matrikulaData, $itv){
        //var_dump($izena);
        $kotxea = new Kotxea();      
        $kotxea->create($modeloa, $matrikula, $matrikulaData, $itv);
        $this->kudeatu();  
        //$herriak = $herria->getAll();
        //echo "<pre>"; var_dump($herriak);echo "</pre>";
        //require_once '../views/herrien-kudeaketa.php';
    }

    public function kotxeaEzabatu($id){
        //var_dump($izena);
        $kotxea = new Kotxea();
        $kotxea->delete($id);
        $this->kudeatu();
        //$herriak = $herria->getAll();
        //echo "<pre>"; var_dump($herriak);echo "</pre>";
        //require_once '../views/herri-zerrenda.php';
        //require_once '../views/herrien-kudeaketa.php';
    }

   /* public function herriaAldatu($id, $izenBerria){
        //var_dump($izena);
        $herria = new Herria();
        $herria->update($id, $izenBerria);
        $this->kudeatu();
        //$herriak = $herria->getAll();
        //echo "<pre>"; var_dump($herriak);echo "</pre>";
        //require_once '../views/herri-zerrenda.php';
        //require_once '../views/herrien-kudeaketa.php';
    }   */ 

}