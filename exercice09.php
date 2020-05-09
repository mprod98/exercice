<?php
$choix = mt_rand(0,9);
echo "Mon choix est: " .$choix;
 if($choix==0)
{
    echo "<br>Retour à l'accueil";
}
if($choix==1)
{
    echo "<br>Service comptabilité";
}
if($choix==2)
{
    echo "<br>Sevice technique Ca fouette !!! et t'aime ça mon cochon!";
}
if($choix==3)
{
    echo "<br>Service Reclamation";
}
elseif($choix >=4){
    echo "<br>Merci de Choisir un chiffre entre 0 et 3, ou dis à ta femme de lacher ce combiné merci!";
}
?>