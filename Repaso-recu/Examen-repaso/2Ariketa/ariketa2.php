<?php
require ('../db.php');

// comprobar que hay datos
if(isset($_GET['adinMin']) && isset($_GET['adinMax'])){
    if (ctype_digit($_GET['adinMin']) && ctype_digit($_GET['adinMax'])){ // comprobar que los datos del formulario son numeros
        $adinMin = $_GET['adinMin'];
        $adinMax = $_GET['adinMax'];

        echo "<div style='border: 2px solid black'>";

        $sql = "SELECT * FROM pertsonak WHERE adina > $adinMin AND adina < $adinMax";
        $emaitza = $db->select($sql);
        // $emaitza = $db->conn->query($sql); // hacer la consulta

        if ($emaitza->num_rows > 0){
            while ($row = $emaitza->fetch_assoc()) {
                echo $row['izena'] . " " . $row['adina'] . "<br>";
            }
        }
        echo "</div>";
    }
}
?>

<html>

<body>
    <form action=<?php echo $_SERVER['PHP_SELF'] ?> method="get">
        <Label> Adin min: </label> <input type="text" name="adinMin"><br>
        <Label> Adin max: </label> <input type="text" name="adinMax"><br>
        <input type="submit">
    </form>
</body>

</html>