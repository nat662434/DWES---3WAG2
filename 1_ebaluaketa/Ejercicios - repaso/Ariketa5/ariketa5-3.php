<!DOCTYPE html>
<html lang="en">

<head>
    <title>Ariketa 5 - 3</title>
</head>

<body>
    <h1>Ariketa 5 - 3</h1>
    <table>
        <tr>
            <td>Ikaslea</td>
            <td>Nota</td>
        </tr>
        <?php datuakBiztaratu(); ?>
    </table>



    <?php 
    function datuakBiztaratu(){
        $balioa = "";
        $notak = array(array("ikaslea" => "Jon", "nota" => 8), array("ikaslea" => "Ane", "nota" => 6), array("ikaslea" => "Markel", "nota" => 3));
        foreach ($notak as $ikasle) {
            if ($ikasle["nota"] < 5){
                $balioa = "Txarra";
            } elseif ($ikasle["nota"] < 7) {
                $balioa = "Ona";
            } elseif ($ikasle["nota"] > 7) {
                $baliao = "Oso ona";
            }?>
    <tr>
        <td><?php echo $ikasle["ikaslea"] ?></td>
        <td><?php echo $ikasle["nota"] ?></td>
    </tr>
    <?php }    
    } ?>
</body>

</html>