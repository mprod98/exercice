<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Exercice15</title>
    </head>
    <body>
    

       <ul><?php
    $candidats = [ 
        ["prenom"=>"Paul", "age"=> 25 ],
        ["prenom"=>"Marie", "age"=> 17 ],
        ["prenom"=>"Arthur", "age"=> 16 ],
        ["prenom"=>"George", "age"=> 40],
        ["prenom"=>"William", "age"=> 37],
        ["prenom"=>"Thomas", "age"=> 18]
       ];

    foreach($candidats as $candidat){

        echo $candidat["prenom"] ." ".($candidat["age"]<18? "mineur":"majeur")."<br>";  
    
    }
        
        ?>
  
    
</ul>
      
    </body>
</html>