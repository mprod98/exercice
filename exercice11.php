<?php
$min = 0;
$max = 100;
 
$chiffresQuinte = '';
 
for ($i = $min; $i <= $max; $i++) {
    if ( $i % 5 == 0 ) {
        $chiffresQuinte .= $i.' ';
    }
}
 
echo 'Les chiffres quinte compris entre 0 et 100 sont: '.$chiffresQuinte;
?>