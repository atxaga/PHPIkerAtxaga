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
        require_once '../views/jabe-zerrenda.php';
    }

    public function kotxeList($idJabea) {
        $kotxea = new Kotxea();
        $kotxeakJabea = $kotxea->listKotxe($idJabea);
        require_once '../views/jabe-zerrenda.php';
    }

    /*public function kudeatu(){
        $kotxea = new Kotxea();
        $kotxeak = $kotxea->getAll();
        //echo "<pre>"; var_dump($kotxeak);echo "</pre>";
        //require_once '../views/herri-zerrenda.php';
        require_once '../views/herrien-kudeaketa.php';
    }*/

    /*public function herriaGehitu($izena){
        //var_dump($izena);
        $herria = new Herria();      
        $herria->create($izena);
        $this->kudeatu();  
        //$herriak = $herria->getAll();
        //echo "<pre>"; var_dump($herriak);echo "</pre>";
        //require_once '../views/herrien-kudeaketa.php';
    }*/

   /* public function herriaEzabatu($id){
        //var_dump($izena);
        $herria = new Herria();
        $herria->delete($id);
        $this->kudeatu();
        //$herriak = $herria->getAll();
        //echo "<pre>"; var_dump($herriak);echo "</pre>";
        //require_once '../views/herri-zerrenda.php';
        //require_once '../views/herrien-kudeaketa.php';
    }*/

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