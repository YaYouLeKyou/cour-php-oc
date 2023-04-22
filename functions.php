<!-- fonctions php : https://www.php.net/manual/fr/funcref.php -->

<!-- Manipulez du texte avec les fonctions -->



<!-- Calculez la longueur d'une chaîne de caractères avec strlen -->

<?php
$recipe = 'Etape 1 : des flageolets ! Etape 2 : de la saucisse toulousaine';
$length = strlen($recipe);
 
 
echo 'La phrase ci-dessous comporte ' . $length . ' caractères :' . PHP_EOL . $recipe; ?>


<!-- Recherchez et remplacez une chaîne de caractères avec str_replace 

On a besoin d'indiquer trois paramètres :
La chaîne qu'on recherche – ici, les « c » (on aurait pu rechercher un mot aussi).
La chaîne qu'on veut mettre à la place – ici, on met des « C » à la place des « c ».
La chaîne dans laquelle on doit faire la recherche.

Ce qui nous donne « le Cassoulet, C'est très bon ».-->

<?php
echo str_replace('c', 'C', 'le cassoulet, c\'est très bon');?>

<!-- Formatez une chaîne de caractères avec sprintf -->

<?php
$recipe = [
    'title' => 'Salade Romaine',
    'recipe' => 'Etape 1 : Lavez la salade ; Etape 2 : euh ...',
    'author' => 'laurene.castor@exemple.com',
];

echo sprintf(
    '%s par "%s" : %s',
    $recipe['title'],
    $recipe['author'],
    $recipe['recipe']
);?>

<!-- Récupérez la date 

H
Heure

i
Minute

d
Jour

m
Mois

Y
Année-->


<?php
$year = date('Y');
echo $year;?>

<?php
// Enregistrons les informations de date dans des variables

$day = date('d');
$month = date('m');
$year = date('Y');

$hour = date('H');
$minut = date('i');

// Maintenant on peut afficher ce qu'on a recueilli
echo 'Bonjour ! Nous sommes le ' . $day . '/' . $month . '/' . $year . 'et il est ' . $hour. ' h ' . $minut;
?>

<!-- Créer une fonction -->

<!-- pour -->
<?php

$recipe = [
    'title' => 'Salade Romaine',
    'recipe' => 'Etape 1 : Lavez la salade ; Etape 2 : euh ...',
    'author' => 'laurene.castor@exemple.com',
    'is_enabled' => true,
];

// au minimum
if ($recipe['is_enabled']) {
    return true;
} else {
    return false;
}

// mieux
$isEnabled = $recipe['is_enabled'];

// encore mieux !
if (array_key_exists('is_enabled', $recipe)) {
    $isEnabled = $recipe['is_enabled'];
} else {
    $isEnabled = false;
}
?>

<!-- on crée la fonction -->

<?php

function isValidRecipe(array $recipe) : bool
{
    if (array_key_exists('is_enabled', $recipe)) {
        $isEnabled = $recipe['is_enabled'];
    } else {
        $isEnabled = false;
    }

    return $isEnabled;
}?>


<!-- Exemple Récupérer la recette valide -->

<?php


function getRecipes(array $recipes) : array
{
    $validRecipes = [];

    foreach($recipes as $recipe) {
        if (isValidRecipe($recipe)) {
            $validRecipes[] = $recipe;
        }
    }

    return $validRecipes;
}

// construire l'affichage HTML des recettes
foreach(getRecipes($recipes) as $recipe) {
    // echo $recipe['title'] .. 
}?>

<!-- https://www.php.net/manual/en/index.php -->
