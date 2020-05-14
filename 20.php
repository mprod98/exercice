<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>exercice19</title>
        <link rel="stylesheet" href="20.css">
        <link
            rel="stylesheet"
            href="https://use.fontawesome.com/releases/v5.0.6/css/all.css">
    </head>
    <body>
    
        <?php
    include("donnees.php");
    ?>
        <table class=global>
        <?php 
        echo "<h1>Tableau des candidats</h1>";
    foreach($candidats as $candidat){
 
        if($candidat["genre"]=="homme"){
        
            echo  "<tr class= 'homme ligne'>"
            ."<td class='icon'>"
            ."<i class='fas fa-male'></i>" 
            ."</td>"
            ."<td >"
            ."<li class= 'list'>"
            ."<span class='prenom'>"
            .$candidat["prenom"]
            ."</span>"
            ."<br>" 
            .$candidat["age"]
            ." Ans "
            ."<br>"
            ." Habite à : "
            .$candidat["ville"]
            ."</li>"
            ."</td>"
            ."<td >"
            ."<td class='votes'>"
            .$candidat["votes"]
            ."</td>"
            ."</td>"
            ."</tr>";  
    }
    else{
        echo  "<tr class= 'femme ligne'>"
            ."<td class='icon'>"
        ."<i class='fas fa-female'></i>" 
        ."</td>"
        ."<td >"
        ."<li class= 'list'>"
        ."<span class='prenom'>"
        .$candidat["prenom"]
        ."</span>"
        ."<br>" 
        .$candidat["age"]
        ." Ans "
        ."<br>"
        ." Habite à : "
        .$candidat["ville"]
        ."</li>"
        ."</td>"
        ."<td >"
        ."<td class='votes'>"
        .$candidat["votes"]
        ."</td>"
        ."</td>"
        ."</tr>";  
    }
}
    
    ?>
        </table>
    </body>
</html>