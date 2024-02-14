<?php
require '../dbIkasleak.php';
require './interface2.php';

class Pertsona implements DatuakKudeatu2
{
    public function bilatuPertsona($id)
    {
        $sql = "SELECT * FROM a1 WHERE id = $id";
        $db = new DB('localhost', 'root', '', 'prueba');
        $db->konektatu();
        $pertsona = $db->select($sql);

        if ($pertsona) {
            // var_dump($pertsona);
            echo $pertsona[0]['izena'] . '<br>';
            echo $pertsona[0]['abizenak'] . '<br>';
            echo $pertsona[0]['adina'] . '<br>';
            echo $pertsona[0]['soldata'] . '<br>';
        } else {
            echo 'Id hori ez da existitzen';
        }

    }

}

$prueba = new Pertsona();
$prueba->bilatuPertsona(32);

?>