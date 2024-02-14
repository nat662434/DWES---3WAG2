<?php
require '../dbIkasleak.php';

$db = new DB('localhost', 'root', '', 'prueba');
$db->konektatu();

$datuak = $db->selectAll();

if (isset($_POST['abiZati'])) {
    $abizena = $_POST['abiZati'];
    echo $abizena;

    foreach ($datuak as $datu) {
        if ($abizena == substr($datu['abizena'], 0, count($abizena))) {

        }
    }


}



?>

<html>
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
    <label>Abizen zatia sartu</label>
    <input type="tex" name="abiZati" />
    <input type="submit">
</form>

</html>