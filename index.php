<?php

session_start();

// --- DÉBUT DU ROUTEUR MIS À JOUR (page + subpage) ---

// 1. Récupérer les paramètres 'page' et 'subpage' de l'URL.
$page = $_GET['page'] ?? 'home'; 
$subpage = $_GET['subpage'] ?? 'default';

// 2. Définir la nouvelle "liste blanche" sécurisée.
// La clé est la 'page', et le tableau contient les 'subpage' autorisées.
$allowed = [
    'home' => ['default'],
    'mon_club' => ['gymnastes', 'equipes', 'trampolinistes', 'equipes_trampo', 'mes_equipes', 'mes_juges', 'gestion_acces', 'default'],
    'mon_compte' => ['modifier', 'infos_juge', 'juger_competition', 'default'],
    'organisateur' => ['creer_compet', 'default'],
    'resp_juge' => ['acces_competitions', 'listing_juges', 'gestion_juges', 'juges_invalides', 'default'],
    'admin' => ['liste_responsables', 'acces_engagements', 'liste_competitions', 'utilisateurs', 'niveaux_admin', 'default'],
    
    // Pages simples 
    'qcm' => ['default'],
    'creer_compet' => ['default'], 
    'new_account' => ['default'],
    'lost_id' => ['default'],
    'contact' => ['default'],
    '404' => ['default']
];

// 3. Valider la page et la sous-page demandées
$fileToInclude = './pages/404.php'; // Fichier par défaut en cas d'erreur
$pageToInclude = '404'; // Variable pour la barre d'action, par défaut '404'
http_response_code(404); // On envoie le code 404 par défaut.

// On vérifie si la 'page' demandée existe comme clé dans notre liste blanche
if (isset($allowed[$page]) && in_array($subpage, $allowed[$page])) {
    
    // On construit le chemin potentiel du fichier
    // Pour les pages avec sous-menus : /pages/page/subpage.php
    $potentialFile = "./pages/{$page}/{$subpage}.php";
    
    // Pour les pages simples (subpage = 'default') : /pages/page.php
    if ($subpage === 'default') {
        $potentialFile = "./pages/{$page}.php";
    }

    // On vérifie que le fichier correspondant existe bien
    if (file_exists($potentialFile)) {
        $fileToInclude = $potentialFile; // Le chemin du fichier à inclure est validé
        $pageToInclude = $page; // Le nom de la page pour l'actionBar est validé
        http_response_code(200); // Tout est OK, on envoie le code 200
    }
}

// À la fin, $fileToInclude contient le chemin complet vers le bon fichier PHP (ou la page 404).
// Et $pageToInclude contient le nom de la page pour que l'action-bar affiche les bons boutons.

// --- FIN DU ROUTEUR MIS À JOUR ---
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="favicon" href="img/logo_ufolep.jpeg" type="image/x-icon">
    <link rel="stylesheet" href="style/main.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Symbols+Outlined" rel="stylesheet">
    <title>UFOLEP Gymnastique Artistique</title>
</head>

<body>
    <div class="buttonToggle">
        <span class="material-symbols-outlined btnMenu">menu</span>
    </div>
    <nav>
        <?php include_once "./modules/nav/navigation.php"; ?>
    </nav>

    <main>
        <?php 
        // Cette inclusion ne change pas. Votre fichier actionBar.php utilisera
        // la variable $pageToInclude que nous avons préparée juste au-dessus.
        include_once "./modules/nav/actionBar.php"; 
        
        // ** MODIFICATION IMPORTANTE ICI **
        // On inclut directement la variable $fileToInclude qui contient le chemin complet
        // et validé par notre routeur.
        include_once $fileToInclude;
        ?>
    </main>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        // 1. On sélectionne les éléments dont on a besoin
        const menuButton = document.querySelector('.btnMenu');
        const nav = document.querySelector('nav');

        // 2. On vérifie que les éléments existent bien pour éviter les erreurs
        if (menuButton && nav) {
            // 3. On écoute l'événement 'click' sur le bouton
            menuButton.addEventListener('click', () => {
                // 4. On ajoute ou on enlève la classe 'nav-active' sur la balise <nav>
                nav.classList.toggle('nav-active');
            });
        }
    });
    </script>

</body>


</html>
