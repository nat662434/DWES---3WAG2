<?php
require '../db.php';

if (isset($_POST['pisuMax']) && isset($_POST['tamainMax'])){
    $datuak = $db->select(); // datuak jaso

    $pisuMax = $_POST['pisuMax'];
    $tamainaMax = $_POST['tamainMax'];

    // baliozkotzea zenbaki maximoa
    if ($pisuMax > 100 || $tamainaMax > 10){
        die("Datuak okerrak dira");
    }

    
    echo "<div style='border: 2px solid black'>";
    

    foreach ($datuak as $item=>$data){
        // datuetako kg eta m letrak kendu + float izatera pasatu
        $tamaina = intval(substr($data['tamaina'], 0, -1));
        $pisua = intval(substr($data['pisua'], 0, -2));

        // filtratu sartu diren zenbakien arabera
        if ($pisua <= $pisuMax && $tamaina <= $tamainaMax){
            echo "Izena: " . $data['izena'] .". Izen_zientifikoa: " . $data['izen_zientifikoa'] .". Pisua: " . $pisua . ". Tamaina: " . $tamaina . "<br>";
        }
    }
    echo "</div>";
}

            // echo "<div style='border: 2px solid black'>";

            //     echo "<br>";

            // echo "</div>";

?>

<html>

<body>
    <form action=<?php echo $_SERVER['PHP_SELF'] ?> method="POST">
        <Label> Pisua max: </label> <input type="text" name="pisuMax"><br>
        <Label> Tamaina max: </label> <input type="text" name="tamainMax"><br>
        <input type="submit">
    </form>
</body>

</html>