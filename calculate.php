<?php
/* 
   Définition de la fonction Calculate avec trois paramètres 
   récupérer à l'aide de la superglobal $_GET
   lors de la soumission du formulaire

   Cette fonction va permettre d'afficher a l'utilisateur
   des calculs simple tel que (addition, soustraction, etc..)

   ces calculs lui seront ensuite afficher

   cette fonction contient aussi des error handlers afin que l'utilisateur
   n'ai jamais à voir de message d'erreur php.
*/

function Calculate($nb01, $operation, $nb02)
{
    if (
        ($_GET["nb01"] == null)
        ||
        ($_GET["nb02"] == null)
        ||
        ($_GET["nb01"] == null)
        and
        ($_GET["nb02"] == null)
    ) {
        print "<h2>Vous devez renseigner deux nombres </h2>";
        exit();
    } else {
        switch ($operation) {
                // Si $operation est "add", alors effectuer une addition
            case "add":
                $sum = $nb01 + $nb02;
                break;
                // Si $operation est "sub", alors effectuer une soustraction
            case "sub":
                $sum = $nb01 - $nb02;
                break;
                // Si $operation est "mul", alors effectuer une multiplication
            case "mul":
                $sum = $nb01 * $nb02;
                break;
                // Si $operation est "div", alors effectuer une division
            case "div":
                $sum = $nb01 / $nb02;
                break;
                // Si $operation n'est ni "additionner" ni "soustraire" ni "multiplier" ni "diviser", afficher un message d'erreur et sortir de la fonction
            default:
                // Affichage d'un message d'erreur avec le type d'opération choisi
                print "<h2>Erreur lors du calcule</h2> <br> <p>Vous devez choisir un type d'opération</p>";
                print "<p>Type d'opération actuel : " . $operation . "</p>";
                break;
        }
    }
    // Si la variable $sum n'a pas été initialisée
    if (!isset($sum)) {
        // Sortir de la fonction
        exit();
        // Sinon, retourner la valeur calculée
    } else {
        return $sum;
    }
}

// Récupération des paramètres passés dans l'URL de la requête à l'aide de la superglobale $_GET
$nb01 = $_GET["nb01"];
$operation = $_GET["operation"];
$nb02 = $_GET["nb02"];

// Inclusion du fichier "index.php"
include "index.php";

// Affichage du résultat du calcul à l'aide de la fonction Calculate
print " <h2>Réponse : " . Calculate($nb01, $operation, $nb02) . "</h2>";
