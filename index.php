<?php

//déclaration de la fonction
function sexAge($age, $genre) {
    if ($age > 0 && ($genre == 'Homme' || $genre == 'Femme')) {
        if ($genre == 'Homme') {
            $genre = 1;
        } else {
            $genre = 2;
        }
        if ($age >= 18 && $genre == 1) {
            return'Vous êtes un Homme et vous êtes majeur';
        } elseif ($age >= 18 && $genre == 2) {
            return 'Vous êtes une Femme et vous êtes majeure';
        } elseif ($age < 18 && $genre == 1) {
            return 'Vous êtes un Homme et vous êtes mineur';
        } elseif ($age < 18 && $genre == 2) {
            return 'Vous êtes une Femme et vous êtes mineure';
        }
    } else {
        return 'Merci de saisir les bonnes informations';
    }
}
?>
<!DOCTYPE html>
<html lang="FR">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <title>PHP Partie 4 exercice 7</title>
    </head>
    <body>
        <div align="center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <h1 align="center">PHP Partie 4 exercice 7</h1>
                    </div>
                </div>
                <div align="center">
                    <p class="text">Faire une fonction qui prend deux paramètres : l'âge et le genre d'une personne. Le genre peut être :</p>
                    <li>Homme</li>
                    <li>Femme</li>
                    <p class="text">La fonction doit renvoyer en fonction des paramètres :</p>
                    <li>Vous êtes un homme et vous êtes majeur</li>
                    <li>Vous êtes un homme et vous êtes mineur</li>
                    <li>Vous êtes une femme et vous êtes majeur</li>
                    <li>Vous êtes une femme et vous êtes mineur</li>
                    <p class="text">Gérer tous les cas.</p>
                </div>
                <?= sexAge(18, 'Homme');
                ?>
            </div>
        </div>
    </div>
</body>
</html>

