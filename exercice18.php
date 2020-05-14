<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>exercice18</title>
    <link rel="stylesheet" href="style18.css">
</head>
<body>
    <?php
    include("donnees.php");
    ?>
    <ul><?php 
 
    foreach($candidats as $candidat){
        if($candidat["genre"]=="homme"){
        echo  "<li class= homme>"."Prénom: ".$candidat["prenom"] ." Age: ".$candidat["age"]." Ville: ".$candidat["ville"]."<br>"."</li>"; 
    }
    else{
        echo  "<li class= femme>"."Prénom: ".$candidat["prenom"] ." Age: ".$candidat["age"]." Ville: ".$candidat["ville"]."<br>"."</li>"; 
    }
}
    
    ?></ul>
</body>
</html>