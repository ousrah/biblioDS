<?php
// 1. Inclure la configuration
require_once 'config.php';

// 2. Inclure l'en-tête (adapté)
require_once './layout/header.php';

// 3. Inclure les parties du contenu
// Note: Ces fichiers seront créés ensuite
require_once './partials/partie_collections.php';
require_once './partials/partie_deployment.php';
require_once './partials/partie_documentation.php';
require_once './partials/partie_1.php';
require_once './partials/partie_2.php';


// 4. Inclure le pied de page (adapté)
require_once './layout/footer.php';
?>
