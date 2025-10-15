<?php if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true && $_SESSION["admin"] === true) { ?>
<div class="container">
    <!-- contenu de la page -->

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