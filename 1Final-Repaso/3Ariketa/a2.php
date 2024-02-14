<?php
require '../db.php';
$db = new DB('localhost','root', '', '1final_prueba');
$db->konektatu();

if (isset($_POST['pisuMax']) && isset($_POST['tamainMax'])){
    $datuak = $db->select();
    
    $pisuMax = $_POST['pisuMax'];
    $tamainaMax = $_POST['tamainMax'];

    if ($pisuMax > 100 || $tamainaMax > 10 ){
        die("datuak okerrak dira");
    }

    echo "<div style='border: 2px solid black'>";
    // var_dump($datuak);

    foreach ($datuak as $item) {
        $tamaina = (float) str_replace('m', '', $item['tamaina']);
        $pisua = (float) str_replace('kg', '', $item['pisua']);

        // echo $tamaina . ' '. $tamainaMax ."<br>";
        
        if ($pisua <= $pisuMax && $tamaina <= $tamainaMax){
            echo "Izena: " . $item['izena'] . " . Izen zientifikoa: " . $item['izen_zientifikoa'] . " .Pisua: " . $pisua . " . Tamaina: " . $tamaina ."<br>";
            // echo "izena". $item['pisua'] ."<br>";
        }
    }
    echo "</div>";
}

    

                // echo "";

            // echo "</div>";

?>

<html>

<body>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
        <Label> Pisua max: </label> <input type="text" name="pisuMax"><br>
        <Label> Tamaina max: </label> <input type="text" name="tamainMax"><br>
        <input type="submit">
    </form>
</body>

</html>