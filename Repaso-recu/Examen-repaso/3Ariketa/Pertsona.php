<?php 
require 'interface.php';
require '../db.php';

class Pertsona implements DatuakKudeatu{
    private $id;
    private $izena;
    private $abizena;
    private $adina;

    public function __construct($id, $izena, $abizena, $adina){
        $this->id = $id;
        $this->izena = $izena;
        $this->abizena = $abizena;
        $this->adina = $adina;
    }

    public function bilatuPertsona($id){
        $sql = "SELECT * FROM pertsonak WHERE id=$id";
        $db = new DB('localhost', 'root', '', 'repasoexamen');
        $db->konektatu();
        $db->select($sql);
        return "ID: $this->id, Izena: $this->izena, Abizena: $this->abizena, Adina: $this->adina";
    }
}
?>