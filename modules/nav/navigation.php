<div class="navigation">
    <div class="boxLogo">
        <img src="../../img/hautResponsive.png" class="logo" alt="">
    </div>
    <div>
        <h4 style="color:white; text-align: center; margin-top: 10px; margin-bottom: 10px;">
            <?php echo isset($_SESSION['firstname']) ? 'Bonjour ' . $_SESSION['firstname'] . ' !' : ' '; ?>
        </h4>
    </div>
    <div class="boxNav">
        <ul>

            <li class="btnNav">
                <a href="/" class="linkNav">
                    <span class="material-symbols-outlined">home</span>
                    <p class="textNav">Accueil</p>
                </a>
            </li>
            <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) { ?>
            <li class="btnNav">
                <a href="/?page=mon_compte" class="linkNav">
                    <span class="material-symbols-outlined">account_circle</span>
                    <p class="textNav">Mon compte</p>
                </a>
            </li>

            <li class="btnNav">
                <?php if (isset($_SESSION['juge']) && $_SESSION['juge'] === true) { ?>
                <a href="/?page=qcm" class="linkNav">
                    <span class="material-symbols-outlined">check_box</span>
                    <p class="textNav">QCM Jugement</p>
                </a>
                <?php } ?>
            </li>

            <li class="btnNav">
                <?php if (isset($_SESSION['RespJuge']) && $_SESSION['RespJuge'] === true) { ?>
                <a href="/?page=resp_juge" class="linkNav">
                    <span class="material-symbols-outlined">sports</span>
                    <p class="textNav">Responable Juge</p>
                </a>
                <?php } ?>
            </li>
            <?php if (isset($_SESSION['club']) && $_SESSION['club'] !== "") { ?>
            <li class="btnNav">
                <a href="/?page=mon_club " class="linkNav">
                    <span class="material-symbols-outlined">favorite</span>
                    <p class="textNav"><?php echo ($_SESSION['club']); ?>
                    </p>
                </a>
            </li>
            <?php } ?>
            <li class="btnNav">
                <?php if (isset($_SESSION['Orga']) && $_SESSION['Orga'] === true) { ?>
                <a href="/?page=organisateur" class="linkNav">
                    <span class="material-symbols-outlined">dashboard</span>
                    <p class="textNav">Organisateur</p>
                </a>
                <?php } ?>
            </li>
            <li class="btnNav">
                <?php if (isset($_SESSION['admin']) && $_SESSION['admin'] === true) { ?>
                <a href="/?page=admin" class="linkNav">
                    <span class="material-symbols-outlined">settings</span>
                    <p class="textNav">Administration</p>
                </a>
                <?php } ?>
            </li>

            <?php } ?>

            <div class="spacer" style="background-color: white;"></div>

            <li class="btnNav">
                <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) { ?>
                <a href="modules/settings/logout.php" class="linkNav">
                    <span class="material-symbols-outlined">logout</span>
                    <p class="textNav">Se déconnecter</p>
                </a>

                <?php } else { ?>

                <a href="/layout_login.php" class="linkNav">
                    <span class="material-symbols-outlined">login</span>
                    <p class="textNav">Se connecter</p>
                </a>

                <?php } ?>
            </li>
        </ul>
        <ul class="credit">
            <li class="btnNav">
                <a href="/?page=contact" class="linkNav">
                    <p>Contacter moi</p>
                </a>
            </li>
            <li class="btnNav">
                <a href="/" class="linkNav">
                    <p>Clubs UfolepGym</p>
                </a>
            </li>
            <li class="btnNav">

                <p>&copy; 2007 / 2025</p>

            </li>
        </ul>

    </div>
</div>