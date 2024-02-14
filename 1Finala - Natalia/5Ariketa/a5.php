<?php
/* 
json --> {"numeros_enteros": [43, 17, 89, 55, 72, 30, 64, 12, 98, 41]
}
*/

/* Txertatu datubaseko fitxategia */
require '../db.php';

/* Datubasera konektatzeko */
$db = new DB('192.168.202.104', '1finala', '123', 'F1Natalia');
$db->konektatu();
// $json = [43, 17, 89, 55, 72, 30, 64, 12, 98, 41];
$json = '{"numeros_enteros": [43, 17, 89, 55, 72, 30, 64, 12, 98, 41]}';
// echo json_encode($json);
$json = json_decode($json);
// var_dump($json);


/* json-aren balioak ateratzeko */
foreach ($json as $key => $value) {
    foreach ($value as $key2 => $value2) {
        // echo $value2 . '<br>';
        /* json-a dituen zenbakien arabera delete egiteko */
        $sql = "DELETE FROM langileak WHERE id = $value2";
        $db->delete($sql);
    }
}

/* select : datuak ezabatu direla konprobatzeko */
/* $datuak = $db->selectAll();
foreach ($datuak as $key) {
    // echo $key['id'] . '<br>';
} */

?>