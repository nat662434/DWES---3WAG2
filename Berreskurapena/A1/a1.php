<?php
require '../db.php';
// $db->konektatu();

$animaliak = array();
// 30 registro gehitu
for ($i = 1; $i <= 30; $i++) {
    $animaliak[] = array(
        'izena' => 'Animalia' . $i,
        'izen_zientifikoa' => 'Scientificus' . $i,
        'espeziea' => 'Speciesus' . $i,
        'tamaina' => rand(1, 10) . ' m',
        'pisua' => rand(1, 100),
        'elikadura' => 'Elikadura' . $i
    );
    $balioak = "$animaliak[$i]['izena'], $animaliak[$i]['izen_zientifikoa'], $animaliak[$i]['espeziea'], $animaliak[$i]['tamaina'], $animaliak[$i]['pisua'], $animaliak[$i]['elikadura']";


    $sql = "INSERT INTO animaliak (izena, izen_zientifikoa, espeziea, tamaina, pisua, elikadura) VALUES ($balioak)";
    // var_dump($animaliak);
    $db->insert($sql);
}


//var_dump($animaliak);
?>

<table border=1>
    <tr>
        <th>Izena</th>
        <th>Izen zientifikoa</th>
        <th>Espeziea</th>
        <th>Tamaina</th>
        <th>Pisua</th>
        <th>Elikadura</th>
    </tr>

    <!-- <tr>
        <td></td>
        <td></td>
        <td> </td>
        <td> </td>
        <td> </td>
        <td> </td>
    </tr> -->

    <?php for ($i = 1; $i < 30; $i++){?>
    <tr>
        <td><?php echo $animaliak[$i]['izena']?></td>
        <td><?php echo $animaliak[$i]['izen_zientifikoa']?></td>
        <td><?php echo $animaliak[$i]['espeziea']?></td>
        <td><?php echo $animaliak[$i]['tamaina']?></td>
        <td><?php echo $animaliak[$i]['pisua']?></td>
        <td><?php echo $animaliak[$i]['elikadura']?></td>
    </tr>


<?php } ?>

</table>