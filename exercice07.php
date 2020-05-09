
<?php
$age = mt_rand(0,130);
echo "Vous avez ".$age." ans";
if ($age < 4) {
    echo "<br>entrée gratuite Petit";
}

if ($age >= 4 && $age  <=11) {
    echo "<br>Tarif Enfant Morveux";
}

if ($age >= 12 && $age <=59) {
    echo "<br>Tarif Normal Pas de Chance";
}

if ($age >59)  {
    echo "<br>Tarif Personne Agée Ieuv Power";
}
?>

