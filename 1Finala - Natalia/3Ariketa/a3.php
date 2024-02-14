<?php
/* fitxategiak txertatu */
require '../db.php';
require './interface.php';

/* klasea sortu interfazea inplementatuz */
class Pertsona implements Datuak_Kudeatu
{
    public function bilatuPertsona($id)
    {
        /* Datubasera konektatzeko */
        $db = new DB('192.168.202.104', '1finala', '123', 'F1Natalia');
        $db->konektatu();

        /* datuak lortzeko id erabiliz */
        $sql = "SELECT * FROM langileak WHERE id = $id";
        $datuak = $db->select($sql);

        /* datuak bueltatzen en direnean mezua / datuak badaude pantailatik atera */
        if (empty($datuak)) {
            echo "Ez dago id hori datubasean";
        } else {
            echo $datuak[0]['izena'] . ' ' . $datuak[0]['abizenak'] . ', ' . $datuak[0]['adina'] . ' urte, ' . $datuak[0]['soldata'] . '€';
        }
    }

}

/* probak */
$prueba = new Pertsona();
$prueba->bilatuPertsona('12');



?>