<?php if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true && $_SESSION["Orga"] === true) { ?>
<div class="container">
    <div class="header" style="text-align: center;">
        <h1>Organisateur</h1>
        <p>Bienvenue sur la page de l'organisateur. Ici, vous pouvez gérer vos compétitions.</p>
    </div>
    <div class="spacer"></div>
    <div class="content">
        <h2>Gérer mes compétitions</h2>
        <table>
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Lieu</th>
                    <th>Date</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Finale Nationale G1</td>
                    <td>Wattrelos</td>
                    <td>01 janvier 2026</td>
                    <td>
                        <button>Modifier</button>
                        <button>Supprimer</button>
                    </td>
                </tr>
            </tbody>
        </table>
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