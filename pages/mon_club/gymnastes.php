<?php if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true && $_SESSION["club"] !== "") { ?>
<div class="container">
    <div class="header" style="text-align: center;">
        <h1>Gymnastes</h1>
        <p>Bienvenue sur la page de gestion des gymnastes.</p>
    </div>
    <div class="spacer"></div>
    <div class="content">
        <table>
            <tr>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Année de naissance</th>
                <th>N° licence</th>
            </tr>
            <tr>
                <td>Dupont</td>
                <td>Jean</td>
                <td>2010</td>
                <td>059_00000000</td>
            </tr>
        </table>
    </div>
</div>


<?php } else { ?>
<div class=" container">
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