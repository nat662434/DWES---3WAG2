<?php
require '../dbIkasleak.php';

if (isset($_GET['adinMin']) && isset($_GET['adinMax'])) {
    $adinMin = $_GET['adinMin'];
    $adinMax = $_GET['adinMax'];

    $db = new DB('localhost', 'root', '', 'prueba');
    $db->konektatu();
    $sql = "SELECT * FROM a1 WHERE adina>$adinMin AND adina<$adinMax";
    echo $sql . "<br>";
    $pertsonak = $db->select($sql);
    // var_dump($pertsonak);

    echo "<div style='border: 2px solid black'>";
    foreach ($pertsonak as $pertsona) {
        echo 'Izena: ' . $pertsona['izena'] . '. Abizenak: ' . $pertsona['abizenak'] . '. Adina: ' . $pertsona['adina'] . '. Soldata: ' . $pertsona['soldata'] . '<br>';
    }
    echo "</div>";
}

// echo "<div style='border: 2px solid black'>";

// echo "<br>";

// echo "</div>";

?>

<html>

<body>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
        <Label> Adin min: </label> <input type="text" name="adinMin"><br>
        <Label> Adin max: </label> <input type="text" name="adinMax"><br>
        <input type="submit">
    </form>
</body>

</html>