<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>exercice19</title>
        <link rel="stylesheet" href="style18.css">
        <link
            rel="stylesheet"
            href="https://use.fontawesome.com/releases/v5.0.6/css/all.css">
    </head>
    <body>
        <H1>Liste des candidats</H1>
        <?php
    include("donnees.php");
    ?>
        <ul>
        <?php 
 
    foreach($candidats as $candidat){
        if($candidat["genre"]=="homme"){
        echo  "<div class= 'flex homme'>"."<i class='fas fa-male'></i>"  ."<li class= 'list'>"."<span class='prenom'>".$candidat["prenom"]."</span>"."<br>" .$candidat["age"]." Ans "."<br>"." Habite à : ".$candidat["ville"]."</li>"."<div class='votes'>".$candidat["votes"]."</div>"."</div>"; 
    }
    else{
        echo  "<div class= 'flex femme'>"."<i class='fas fa-female'></i>"  ."<li class= 'list'>"."<span class='prenom'>".$candidat["prenom"]."</span>"."<br>" .$candidat["age"]." Ans "."<br>"." Habite à : ".$candidat["ville"]."</li>"."<div class='votes'>".$candidat["votes"]."</div>"."</div>"; 
    }
}
    
    ?>
        </ul>
    </body>
</html>