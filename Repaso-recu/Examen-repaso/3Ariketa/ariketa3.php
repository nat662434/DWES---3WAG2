<?php 
require 'Pertsona.php';

$pertsona1 = new Pertsona(12, 'natalia', 'lamego', 18);

// $pertsonaData =  $pertsona1->bilatuPertsona(1);
$pertsonaData = bilatuPertsona(12);
echo $pertsonaData;
   
?>