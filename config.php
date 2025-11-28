<?php
// Configuration générale du cours Data Science
define('COURSE_TITLE', 'Introduction aux Bibliothèques Data Science avec Python');
define('COURSE_AUTHOR', 'P. Rahmouni Oussama');
define('COURSE_LAST_UPDATE', 'Novembre 2025');

// Structure du cours
$course_parts = [
    "Partie 1 : Bases & Environnement" => [
        ['id' => 'modules', 'title' => "Chapitre 1 : Manipulation des Modules"],
        ['id' => 'bibliotheques', 'title' => "Chapitre 2 : Manipulation des Bibliothèques (Pip)"],
        ['id' => 'intro-ds', 'title' => "Chapitre 3 : Panorama des Bibliothèques Data Science"]
    ],
    "Partie 2 : Calcul Scientifique avec NumPy" => [
        ['id' => 'numpy-intro', 'title' => "Chapitre 1 : Introduction et Fondamentaux"],
        ['id' => 'numpy-creation', 'title' => "Chapitre 2 : Création de Tableaux"],
        ['id' => 'numpy-attributes', 'title' => "Chapitre 3 : Inspection des Tableaux"],
        ['id' => 'numpy-indexing', 'title' => "Chapitre 4 : Indexation et Slicing"],
        ['id' => 'numpy-manipulation', 'title' => "Chapitre 5 : Manipulation Avancée"],
        ['id' => 'numpy-masking', 'title' => "Chapitre 6 : Masquage (Indexation Booléenne)"],
        ['id' => 'numpy-ops', 'title' => "Chapitre 7 : Opérations et Broadcasting"],
        ['id' => 'numpy-stats', 'title' => "Chapitre 8 : Statistiques (Moyenne, Médiane, Pondérée)"],
        ['id' => 'numpy-glossary', 'title' => "Chapitre 9 : Glossaire des Fonctions"],
        ['id' => 'numpy-exercise', 'title' => "Chapitre 10 : Exercice Récapitulatif"]
    ]
];
?>
