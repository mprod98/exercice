<?php
$age = mt_rand(0,130);
echo "Vous avez ".$age." ans";
if ($age < 18) {
    echo "<br>Vous êtes mineur !!!<br> Passez votre chemin gamin!!!<br> Tourne le regard Petit c'est pas pour toi!!! <br>C'est trop fort, 
    <br>Non je t'ai dis il faut pas que tu regardes. <br>Maiiiis non allons! <br>Mais va jouer avec les gamins de ton quartier allons!";
}
else{
    echo " Vous êtes Majeur.<br> Bienvenue à toi Mecton...";
}

?>