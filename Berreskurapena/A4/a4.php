<?php
require '../db.php';

if (isset($_GET['kopurua'])){
    $kopurua = $_GET['kopurua'];
    $datuak = $db->select();
    $zbk = 0;
    
    echo "<div>";
    for ($i = 0; $i < $kopurua; $i++){
        $zbk = $datuak[$i]['pisua'];
        
        sort($datuak);
        echo $datuak[$i]['pisua'];
    }
    echo "</div>";
}

?>

<html>

<body>
    <form action=<?php echo $_SERVER['PHP_SELF'] ?> method="GET">
        <Label> Sartu zenbaki bat: </label> <input type="text" name="kopurua"><br>
        <input type="submit">
    </form>
</body>

</html>