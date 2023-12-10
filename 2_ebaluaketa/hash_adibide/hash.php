<?php
    $pass = "123";
    $hash = password_hash($pass, PASSWORD_BCRYPT); //hay que guardarlo en la db
    echo "pasahiza zifratua: " . $hash;
?>