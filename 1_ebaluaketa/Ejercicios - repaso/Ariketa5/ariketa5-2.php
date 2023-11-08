<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ariketa 5 - 2</title>
</head>
<body>
    <h1>Ariketa 5 - 2</h1>
    <table border = 1>
        <tr>
            <th>Ikaslea</th>
            <th>Nota</th>
        </tr>
        <?php datuakBiztaratu(); ?>
    </table>



    <?php function datuakBiztaratu(){
        $notak = array(array("ikaslea" => "Jon", "nota" => 8), array("ikaslea" => "Ane", "nota" => 9), array("ikaslea" => "Markel", "nota" => 7));
        $gehiketa = 0;
        $kont = 0;
        for ($i=0; $i < count($notak); $i++){?>
            <tr>
                <td><?php echo $notak[$i]["ikaslea"] ?></td>
                <td><?php echo $notak[$i]["nota"] ?></td>
            </tr>
            <?php $gehiketa += $notak[$i]["nota"];
            $kont++;
        } ?>
        <tr>
            <td>Batasbestekoa: </td>
            <td><?php echo $gehiketa/$kont ?></td>
        </tr>

    <?php } ?>
</body>
</html>