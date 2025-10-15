<?php if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true && isset($_SESSION["club"]) && $_SESSION["club"] !== "") { ?>
<div class="container">
    <div class="header">
        <h1>Bienvenue sur la page de votre club</h1>
        <p>Vous allez pouvoir le gérer.</p>
    </div>

    <div class="content">
        <div class="bento-grid">

            <!-- Carte 1 -->
            <div class="card card-2x2 cardClub">
                <img src="https://patriotewattrelos.fr/img/pwos_logo.jpg" class="logoClub" width="150px" alt="">
                <h4>Informations du club</h4>
                <ul>
                    <li>Nom : <span>La Patriote de Wattrelos</span></li>
                    <li>Email : <span>infos@patriotewattrelos.fr</span></li>
                    <li>Site web : <span><a href="https://patriotewattrelos.fr">https://patriotewattrelos.fr</a></span>
                    </li>
                </ul>
            </div>

            <!-- Carte 2 -->
            <div class="card card-1x1">
                <h4>Nombre de licencié</h4>
                <p class="nb">150</p>
            </div>

            <!-- Carte 3 -->
            <div class="card card-1x1">
                <h4>Nombre de juges</h4>
                <p class="nb">25</p>
            </div>
            <!-- Carte 4 -->
            <div class="card card-1x1">
                <h4>Nombre d'équipes</h4>
                <p class="nb">13</p>
            </div>











        </div>
    </div>
</div>
<?php } else { ?>
<div class="container">
    <div class="header">
        <h1>Accès refusé</h1>
        <p>Vous devez être connecté pour accéder à cette page.</p>
        <a href="/layout_login.php" class="btn">Se connecter</a>
        <style>
        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #e4334f;
            color: #fff;
            border: none;
            border-radius: 5px;
            text-decoration: none;
        }

        .btn:hover {
            background-color: #e4334fcc;
            transition: 0.4s ease;
        }
        </style>
    </div>
</div>
<?php } ?>