<?php 
require '../db.php';
require 'interface.php';

class Animaliak implements DatuakKudeatu {
    public function switchAnimaliak(){
        $db = new DB('localhost','root', '', '1final_prueba');
        $db->konektatu();
        $animaliak = $db->select();
        
        foreach ($animaliak as $animalia) {
            $pisua = (float) str_replace('kg', '', $animalia['pisua']);
            if ($pisua < 30){
                echo "txikia: " .$animalia['izena'] ."<br>";
            } elseif ($pisua < 50) { 
                echo "ertainak: " .$animalia['izena'] ."<br>";
            } elseif ($pisua < 70){
                echo "handiak: " .$animalia['izena'] ."<br>";
            } else {
                echo "oso handiak: " .$animalia['izena'] ."<br>";
            }
        }
    }
}

$prueba = new Animaliak();
$prueba->switchAnimaliak();

?>