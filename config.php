<?php
// Configuration générale du cours Data Science
define('COURSE_TITLE', 'Introduction aux Bibliothèques Data Science avec Python');
define('COURSE_AUTHOR', 'P. Rahmouni Oussama');
define('COURSE_LAST_UPDATE', 'Novembre 2025');

// Structure du cours
$course_parts = [
    "Partie 1 : Déploiement et Packaging" => [
        ['id' => 'deployment-defs', 'title' => "Définitions Fondamentales"],
        ['id' => 'python-packaging', 'title' => "Le Packaging en Python"],
        ['id' => 'setuptools', 'title' => "Setuptools"],
        ['id' => 'testpypi', 'title' => "Publication sur TestPyPI"],
        ['id' => 'pypi', 'title' => "Publication officielle sur PyPI"],
        ['id' => 'pyinstaller', 'title' => "PyInstaller : Exécutables autonomes"]
    ],
    "Partie 2 : Documentation du Programme" => [
        ['id' => 'doc-defs', 'title' => "Définitions et Outils"],
        ['id' => 'sphinx-workflow', 'title' => "Workflow de Création"],
        ['id' => 'sphinx-example', 'title' => "Exemple Concret : Projet 'Bonjour'"]
    ],
    "Partie 3 : Bases & Environnement" => [
        ['id' => 'modules', 'title' => "Chapitre 1 : Manipulation des Modules"],
        ['id' => 'bibliotheques', 'title' => "Chapitre 2 : Manipulation des Bibliothèques (Pip)"],
        ['id' => 'intro-ds', 'title' => "Chapitre 3 : Panorama des Bibliothèques Data Science"]
    ],
    "Partie 4 : Module Collections" => [
        ['id' => 'collections-intro', 'title' => "Introduction aux Collections"],
        ['id' => 'namedtuple', 'title' => "namedtuple"],
        ['id' => 'deque', 'title' => "deque (Double Ended Queue)"],
        ['id' => 'chainmap', 'title' => "ChainMap"],
        ['id' => 'counter', 'title' => "Counter"],
        ['id' => 'ordereddict', 'title' => "OrderedDict"],
        ['id' => 'defaultdict', 'title' => "defaultdict"]
    ],
    "Partie 5 : Calcul Scientifique avec NumPy" => [
        ['id' => 'numpy-intro', 'title' => "Chapitre 1 : Introduction et Fondamentaux"],
        ['id' => 'numpy-creation', 'title' => "Chapitre 2 : Création de Tableaux"],
        ['id' => 'numpy-attributes', 'title' => "Chapitre 3 : Inspection des Tableaux"],
        ['id' => 'numpy-indexing', 'title' => "Chapitre 4 : Indexation et Slicing"],
        ['id' => 'numpy-manipulation', 'title' => "Chapitre 5 : Manipulation Avancée"],
        ['id' => 'numpy-masking', 'title' => "Chapitre 6 : Masquage (Indexation Booléenne)"],
        ['id' => 'numpy-ops', 'title' => "Chapitre 7 : Opérations et Broadcasting"],
        ['id' => 'numpy-stats', 'title' => "Chapitre 8 : Statistiques"],
        ['id' => 'numpy-glossary', 'title' => "Chapitre 9 : Glossaire des Fonctions"],
        ['id' => 'numpy-exercise', 'title' => "Chapitre 10 : Exercice Récapitulatif"]
    ],
    "Partie 6 : Bibliothèques du Calcul Scientifique SciPy" => [
        ['id' => 'scipy-intro', 'title' => "Chapitre 1 : Introduction et Objectif"],
        ['id' => 'scipy-org', 'title' => "Chapitre 2 : Organisation de SciPy"],
        ['id' => 'scipy-io', 'title' => "Chapitre 3 : Entrée et Sortie (IO)"],
        ['id' => 'scipy-stats', 'title' => "Chapitre 4 : Distributions Statistiques"]
    ],
    "Partie 7 : Bibliothèques de Manipulation des Données Pandas" => [
        ['id' => 'pandas-intro', 'title' => "Chapitre 1 : Introduction et Concepts Clés"],
        ['id' => 'pandas-series', 'title' => "Chapitre 2 : La Structure de Données Series"],
        ['id' => 'pandas-dataframe', 'title' => "Chapitre 3 : La Structure de Données DataFrame"]
    ],
    "Partie 8 : Bibliothèques de Visualisation" => [
        ['id' => 'viz-matplotlib', 'title' => "Chapitre 1 : Matplotlib"],
        ['id' => 'viz-seaborn', 'title' => "Chapitre 2 : Seaborn"],
        ['id' => 'viz-others', 'title' => "Chapitre 3 : Autres Outils"]
    ],
    "Partie 9 : Machine Learning (Scikit-learn)" => [
        ['id' => 'ml-intro', 'title' => "Chapitre 1 : Introduction à Scikit-learn"],
        ['id' => 'ml-algos', 'title' => "Chapitre 2 : Algorithmes et Fonctions Clés"],
        ['id' => 'ml-workflow', 'title' => "Chapitre 3 : Les Étapes d'un Projet ML"],
        ['id' => 'ml-others', 'title' => "Chapitre 4 : Autres Bibliothèques"]
    ],
    "Partie 10 : Traitement de Langage Naturel (TALN)" => [
        ['id' => 'taln-intro', 'title' => "Chapitre 1 : NLTK (Natural Language Toolkit)"],
        ['id' => 'taln-modules', 'title' => "Chapitre 2 : Sous-modules et Fonctionnalités Clés"],
        ['id' => 'taln-tokenization', 'title' => "Chapitre 3 : Exemple Détaillé - La Tokenisation"]
    ]
];
?>
