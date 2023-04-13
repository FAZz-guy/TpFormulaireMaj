<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de traitement</title>

    <style>
        *{
    margin: 10px;
    padding: 10px;
}

body
{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    min-height: 100%;
    width: 100%;
    background: rgb(255, 255, 255);
}

/*parametre de identique*/
.identite,.echeance,.choix,.projet,.tpderep
{
    background: grey;
    border-radius: 20px;
}
/*fin */

.container 
{   
    display: grid;
    grid-template-columns: 40% 60%;
    height: 500px; 
    width: 600px; 
    border-radius: 20px 0px;
    background: rgb(0 0 0 / 3%);
    box-shadow: 0 0 5px black;
}

.right
{
    display: flex;
    align-items: center;
}

    </style>

</head>
<body>

<?php

// vérifie si la page a été accédée avec la mhetode post 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $email = $_POST["email"];
    $intituler = $_POST["intituler"];
    $description = $_POST["description"];
    $echeance = $_POST["echeance"];
    $choix = isset($_POST["choix"]) ? $_POST["choix"] : array();
    $rpSouhaite = $_POST["rpSouhaité"];

    // Afficher les données du formulaire avec les classes CSS
    echo "<div class =\"container\">";

        echo "<div class =\"left\">";   

            echo "<h1 class=\"intituler\">$intituler</h1>"; // céer des classe pour voir styliser avec du css
        
            echo "<div class=\"identite\">"; 
                echo "<p class=\"nom\">A la demande de <br>  $prenom $nom <br>  $email</p>"; 
            echo "</div>"; // Fin identite
//   ------------------------------------------------------------------ 
            echo "<p class=\"echeance\">Echéance : $echeance</p>"; 
//   ------------------------------------------------------------------      
            echo "<div class =\"choix\">";

            // verifie si ma variable existe dans le formulaire 
            if (isset($_POST["choix1"])){
                $choix1 = $_POST["choix1"];
                echo "Nature de la demande : " . $choix1 . "<br>";
            }
            if (isset($_POST["choix2"])){
                $choix2 = $_POST["choix2"];
                echo "Nature de la demande : " . $choix2;
            }
            
            echo "</div>"; 
//   ------------------------------------------------------------------ 
            echo "<p class=\"tpderep\">Réponse souhaitée : $rpSouhaite</p>"; 

        echo "</div>"; 
//   ------------------------------------------------------------------         
        echo "<div class =\"right\">"; 

            echo "<p class=\"projet\">Description du projet : $description</p>";
        
        echo "</div>";  
        
    echo "</div>";  
}

 
?>

</body>
</html>