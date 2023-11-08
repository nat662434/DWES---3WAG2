<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ariketa 4 - 2</title>
</head>
<body>
    <h1>Ariketa 4 - 2</h1>
    <table border = 1>
        <tr>
            <th>Herrialdeak</th>
        </tr>
        <?php
        $herrialdeak = array("EH", "Frantzia", "Alemania", "Italia");
        sort($herrialdeak);
        foreach($herrialdeak as $herrialde){?>
            <tr>
                <td><?php echo $herrialde ?></td>
            </tr>
        <?php }
        ?>
    </table>
</body>
</html>