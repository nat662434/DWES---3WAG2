<?php
// Ziurtatu ziurtagiria bidali egin den
if (!isset($_SERVER['PHP_AUTH_USER'])) {
    // Ez bada horrela header-en bitartzen autentikazioa eskatu
    header('WWW-Authenticate: Basic realm="Área restringida"');
    header('HTTP/1.0 401 Unauthorized');
    echo 'Orri honetara sartzeko autentikazioa beharrezkoa da.';
    exit;
} else {
    // Bidali bada konprobatzen dugu zuzena dela (kasu erreal batean hau beste era batera egin beharko zen)
    $usuario_autenticado = $_SERVER['PHP_AUTH_USER'];
    $contrasena_autenticada = $_SERVER['PHP_AUTH_PW'];


    // Si las credenciales son válidas, el acceso está permitido
    echo 'Ongi etorri, ' . $usuario_autenticado . '!';
}
?>
