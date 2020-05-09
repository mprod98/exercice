
<?php
$age = mt_rand(0,130);
$reduction = boolval(mt_rand(0,1));

echo "Vous avez ".$age." ans";

if ($reduction== 1){
    echo "<br>Carte de réduction: Oui " ;
}
else {
    echo "<br>Carte de réduction: Non "; 
}
if ($age < 4) {
    echo "<br>entrée gratuite Petit";
}

if ($age >= 4 && $age  <=11 && $reduction==1) {
    echo "<br>Tarif Enfant Morveux Reduit";
}
elseif($age >= 4 && $age  <=11 && $reduction==0){
    echo "<br>Tarif Enfant Morveux De base";
}

if ($age >= 12 && $age <=59 && $reduction==1) {
    echo "<br>Tarif Normal Mais avec Reduction Ma gueule";
}
elseif($age >= 12 && $age <=59 && $reduction==0) {
    echo "<br>Tarif Normal Et aucun réduction, t'a vraiment une chance toi !!! Paye le prix fort et tais toi surtout!";
}
if ($age >59)  {
    echo "<br>Tarif Personne Agée Ieuv Power";
}
?>


