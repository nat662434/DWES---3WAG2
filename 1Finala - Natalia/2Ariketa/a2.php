<?php
/* Txertatu datubaseko fitxategia */
require '../db.php';

/* Datubasera konektatzeko */
$db = new DB('192.168.202.104', '1finala', '123', 'F1Natalia');
$db->konektatu();

/* 2 input-ak balioak dutenean ejekutatzeko */
if (isset($_GET['zenbat']) && isset($_GET['soldata'])) {
    $zbk = $_GET['zenbat'];
    $soldata = $_GET['soldata'];

    /* datuak lortzeko */
    $sql = "SELECT * FROM langileak";
    $pertsonak = $db->select($sql);
    $ordenatuta = [];
    // var_dump($pertsonak);

    /* datuak ordenatzeko / ez du funtzionatzen */
    for ($i = 0; $i < count($pertsonak); $i++) {
        // echo $pertsonak[$i]['soldata'] . '<br>';
        if ($pertsonak[$i]['soldata'] > $pertsonak[$i + 1]['soldata']) {
            array_push($ordenatuta, $pertsonak[$i + 1]);
        } else {
            array_push($ordenatuta, $pertsonak[$i]);
        }
    }


    echo "<div style='border: 2px solid black'>";
    for ($i = 0; $i < $zbk; $i++) {

        echo ($ordenatuta[$i]['soldata'] + $soldata) . '<br>';
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
        <Label> Zenbat pertsona: </label> <input type="number" name="zenbat"><br>
        <Label> Soldata igoera: </label> <input type="number" name="soldata"><br>
        <input type="submit">
    </form>
</body>

</html>