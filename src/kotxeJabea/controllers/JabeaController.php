<?php

namespace Controllers;

use Models\Jabea;
use Models\Kotxea;

class JabeaController {

    public function listAll(){
        $jabea = new Jabea();
        $jabeak = $jabea->getAll();

        $kotxea = new Kotxea();
        $kotxeak = $kotxea->getAll();
        //echo "<pre>"; var_dump($jabeak);echo "</pre>";
        require_once '../views/jabe-zerrenda.php';
        //require_once '../views/herri-zerrenda-iragarpen-egunak-lortzeko.php';
    }

    
    /*public function kudeatu(){
        $jabea = new Jabea();
        $jabeak = $jabea->getAll();
        //echo "<pre>"; var_dump($herriak);echo "</pre>";
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