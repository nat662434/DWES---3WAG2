<?php
require '../db.php';

if (isset($_GET['zbk'])){
    $zbk = $_GET['zbk'];
    $db = new DB('localhost','root', '', '1final_prueba');
    $db->konektatu();
    $animaliak = $db->select();
    
    usort($animaliak, function($a, $b) {
        return (float)str_replace('kg', '', $b['pisua']) - (float)str_replace('kg', '', $a['pisua']);
    });

    $emaitza = array_slice($animaliak, 0, $zbk);

    // var_dump($emaitza);


    echo json_encode($emaitza);
}
    
?>
<html>
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
    <label for="">Sartu zenbaki bat</label>
    <input type="number" name="zbk">
    <input type="submit">
</form>

</html>