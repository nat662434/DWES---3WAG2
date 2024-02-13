<?php
require '../db.php';
$db = new DB('localhost','root', '', '1final_prueba');
$db->konektatu();

$animaliak = array();
$bbT = 0;
$bbP = 0;
// 30 registro gehitu
for ($i = 1; $i <= 30; $i++) {
    $animaliak[] = array(
        'izena' => 'Animalia' . $i,
        'izen_zientifikoa' => 'Scientificus' . $i,
        'espeziea' => 'Speciesus' . $i,
        'tamaina' => rand(1, 10) . ' m',
        'pisua' => rand(1, 100) . ' kg',
        'elikadura' => 'Elikadura' . $i
    );
}

function batazbestekoa ($array, $atributua){
    $totala = 0;
    foreach ($array as $elementua) {
        $balioa = (float) str_replace(array('m', 'kg'), '', $elementua[$atributua]);
        $totala += $balioa;
    }
    return $totala / count($array);
}


$bbT = batazbestekoa($animaliak, 'tamaina');
$bbP = batazbestekoa($animaliak, 'pisua');
echo $bbT. '<br><br>';

foreach ($animaliak as $animalia) {
    $pisua = (float) str_replace('kg', '', $animalia['pisua']);
    $tamaina = (float) str_replace('m', '', $animalia['tamaina']);

    if ($pisua > $bbP || $tamaina > $bbT){
        // echo $animalia['pisua'];
        // echo $animalia['tamaina']. '<br>';
        $balioak = '"'.$animalia['izena'].'", "'.$animalia['izen_zientifikoa'].'", "'.$animalia['espeziea'].'", "'.$animalia['tamaina'].'", "'.$animalia['pisua'].'", "'.$animalia['elikadura'].'"';

        $sql = "INSERT INTO animaliak (izena, izen_zientifikoa, espeziea, tamaina, pisua, elikadura) VALUES ($balioak)";

        echo $sql ."<br><br>" ;
        
        $db->insert($sql);
    }
}


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
    <?php foreach ($animaliak as $animalia) { ?>
    <tr>
        <td>
            <?php echo $animalia['izena'] ?>
        </td>
        <td>
            <?php echo $animalia['izen_zientifikoa'] ?>
        </td>
        <td>
            <?php echo $animalia['espeziea'] ?>
        </td>
        <td>
            <?php echo $animalia['tamaina'] ?>
        </td>
        <td>
            <?php echo $animalia['pisua'] ?>
        </td>
        <td>
            <?php echo $animalia['elikadura'] ?>
        </td>
    </tr>
    <?php } ?>


</table>