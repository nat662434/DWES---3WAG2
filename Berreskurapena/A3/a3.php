<?php
require '../db.php';
// require 'interface.php';

class Animalia implements DatuakKudeatu {
    public function switchAnimaliak(){
        $datuak = $db->select();
        var_dump($datuak);
        echo $datuak['izena'];
    }
}
?>