<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ariketa 5 - 1</title>
</head>
<body>
    <h1>Ariketa 5 - 1</h1>
    <table border = 1>
        <tr>
            <th>Izena</th>
            <th>Autorea</th>
        </tr>
        <?php datuakBiztaratu() ?>
    </table>



    <?php
    function datuakBiztaratu(){
        $liburuak = array(array("izena" => "Harry Potter", "autorea" => "J.K. Rowling"), array("izena" => "Game of Thrones", "autorea" => "George R.R. Martin"), array("izena" => "The Hobbit", "autorea" => "J.R.R. Tolkien"));
        foreach ($liburuak as $liburua){?>
            <tr>
                <td><?php echo $liburua["izena"] ?></td>
                <td><?php echo $liburua["autorea"]?></td>
            </tr>
            
        <?php }
    }


    ?>
</body>
</html>