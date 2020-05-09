<?php
$choix= mt_rand(0,99);
echo "le choix sera: ". $choix;


for($choix= 0; $choix=50; $choix++){
if($choix>50){

 $choix -1;

}
elseif($choix<50){
    $choix+1;
   
}
echo "<br>le choix sera: ".$choix;
break; 

}
echo "<br>fin";
//echo "<br>Nouveau choix" .$quinteSup;

?>