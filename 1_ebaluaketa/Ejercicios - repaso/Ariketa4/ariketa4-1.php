<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ariketa 4 - 1</title>
</head>
<body>
    <h1>Ariketa 4 - 1</h1>
    <table border = 1>
        <tr>
            <th>Zenbakiak</th>
        </tr>
        
        <?php
        $zbk = array(rand(0, 10), rand(0, 10), rand(0, 10), rand(0, 10), rand(0, 10));
        $emaitza = 0;
        for ($i=0; $i<count($zbk); $i++){?>
            <tr>
                <td><?php echo $zbk[$i] ?></td>
            </tr>
            <?php $emaitza += $zbk[$i]; 
        }?> 
        <tr>
            <td><?php echo "Total: " . $emaitza ?></td>
        </tr>
    </table>
</body>
</html>