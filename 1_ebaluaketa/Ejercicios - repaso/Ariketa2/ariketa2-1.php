<!DOCTYPE html>
<html lang="en">

<head>
    <title>Ariketa 2 - 1</title>
</head>

<body>
    <h1>Ariketa 2 - 1</h1>
    <?php
    $eguna = date("N");
    $astekoEguna = "";

    if ($eguna == 1) {
        $astekoEguna = "astelehena";
    } elseif ($eguna == 2) {
        $astekoEguna = "astehartea";
    } elseif ($eguna == 3) {
        $astekoEguna = "asteazkena";
    } elseif ($eguna == 4) {
        $astekoEguna = "osteguna";
    } elseif ($eguna == 5) {
        $astekoEguna = "ostirala";
    } elseif ($eguna == 6) {
        $astekoEguna == "larunbata";
    } elseif ($eguna == 7) {
        $astekoEguna = "igandea";
    } else {
        echo "Zenbaki hori ez du egun bat adierazten";
    }

    echo "Gaur " . $astekoEguna . " da.";
    ?>
</body>

</html>