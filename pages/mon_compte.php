<?php if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true ) { ?>
<div class="container">
    <div class="header">
        <h1>Mon compte</h1>
        <p>Vous allez pouvoir gérer vos informations personnelles.</p>
    </div>
    <div class="content">
        <div class="bento-grid">
            <div class="card card-1x2">
                <ul>
                    <h4>Mes informations</h4>
                    <li>Nom:
                        <strong>
                            <?php echo isset($_SESSION['username']) ?  $_SESSION['username']  : ''; ?>
                        </strong>
                    </li>
                    <li>Email:
                        <strong>
                            <a
                                href="mailto:<?php echo isset($_SESSION['email']) ?  $_SESSION['email']  : 'N/A@N/A.fr '; ?>"><?php echo isset($_SESSION['email']) ?  $_SESSION['email']  : 'N/A@N/A.fr '; ?></a>
                        </strong>
                    </li>
                    <li>Téléphone:
                        <strong>
                            <?php echo isset($_SESSION['phone']) ?  $_SESSION['phone']  : 'N/A'; ?>
                        </strong>
                    </li>
                </ul>
            </div>



            <div class="card card-1x1">
                <h4>Niveau GAF</h4>
                <p class="nb">N/A</p>
            </div>
            <div class="card card-1x1">
                <h4>Niveau GAM</h4>
                <p class="nb">BF2 N2 (non recyclé)</p>
            </div>

        </div>


    </div>

</div>
<div class="container">
    <div class="content">
        <div class="bento-grid">
            <div class="card card-4x2">
                <h4>Mon historique</h4>
                <table>
                    <thead>
                        <tr>
                            <th>Date</th>
                            <th>Compétition</th>
                            <th>Agrès</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>01/01/2023</td>
                            <td>Finale Jeune G1 </td>
                            <td>Sol </td>
                        </tr>
                        <tr>
                            <td>15/02/2023</td>
                            <td>Finale Nationale</td>
                            <td>Barre</td>
                        </tr>
                        <tr>
                            <td>15/02/2023</td>
                            <td>Finale Nationale</td>
                            <td>Barre</td>
                        </tr>

                    </tbody>
                </table>
                <a href="#">Voir tout</a>
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