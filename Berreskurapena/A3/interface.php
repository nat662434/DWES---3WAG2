<?php
require '../db.php';
    interface DatuakKudeatu {
        public function switchAnimaliak ();
    }

    class Animalia implements DatuakKudeatu {
        public function switchAnimaliak(){
            $datuak = $db->select();
            var_dump($datuak);
            echo $datuak['izena'];
        }
    }
?>