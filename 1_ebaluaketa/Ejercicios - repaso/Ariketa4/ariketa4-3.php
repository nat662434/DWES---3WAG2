<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ariketa 4 - 3</title>
</head>
<body>
    <h1>Ariketa 4 - 3</h1>
    <table border>
        <tr>
            <th>Zenbakia</th>
            <th>Bakoitia/bikoitia</th>
        </tr>
        <?php
        $zbkArray = array(rand(0, 100), rand(0, 100), rand(0, 100), rand(0, 100), rand(0, 100), rand(0, 100));
        foreach ($zbkArray as $zbk){?>
            <tr>
                <?php if ($zbk%2 == 0){?>
                    <td><?php echo $zbk ?></td>
                    <td><?php echo "Bikoitia" ?></td>
                <?php } elseif ($zbk%2 != 0) {?>
                    <td><?php echo $zbk ?></td>
                    <td><?php echo "Bakoitia" ?></td>
                <?php } ?>
            </tr>
        <?php } ?>
    </table>
    
</body>
</html>