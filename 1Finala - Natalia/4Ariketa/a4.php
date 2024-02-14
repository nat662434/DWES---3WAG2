<?php
/* Txertatu datubaseko fitxategia */
require '../db.php';

/* Datubasera konektatzeko */
$db = new DB('192.168.202.104', '1finala', '123', 'F1Natalia');
$db->konektatu();

/* input-a datuak duenean exekutatzeko */
if (isset($_GET['abizen'])) {
    $abizen = strtolower($_GET['abizen']);
    $pertsonak = $db->selectAll();
    $datuak = [];

    foreach ($pertsonak as $pertsona) {
        // echo $pertsona['izena'];
        /* datuko abizeneko lehenego letrak hartzeko, sartu duten abizenaren letra kopuruaren arabera */
        $aux = strtolower(substr($pertsona['abizenak'], 0, strlen($abizen)));
        // echo $aux . '<br>';

        /* konparaketa, berdin bada datuak gordeko dira */
        if ($abizen == $aux) {
            array_push($datuak, $pertsona);
            // echo $pertsona['abizenak'];
        }

    }
    // var_dump($datuak);

    /* datuak json formatura pasa */
    echo json_encode($datuak);
    return json_encode($datuak);
}


?>

<html>
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
    <label>Sartu abizen zatia</label>
    <input type="text" name="abizen">
    <input type="submit">
</form>

</html>