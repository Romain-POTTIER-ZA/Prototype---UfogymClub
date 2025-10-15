<?php if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) { ?>
<div class="container action-bar">

    <?php if ($pageToInclude == 'mon_club' &&   isset($_SESSION["club"]) && $_SESSION["club"] !== "") { ?>
    <div class="boxActionBar forMonClub">
        <ul>
            <li>
                <a href="/?page=mon_club&subpage=gymnastes">
                    <span class="material-symbols-outlined">groups</span>
                    <p>Gymnastes</p>
                </a>
            </li>
            <li>
                <a href="/?page=mon_club&subpage=equipes">
                    <span class="material-symbols-outlined">groups</span>
                    <p>Equipes</p>
                </a>
            </li>
            <li>
                <a href="/?page=mon_club&subpage=trampolinistes">
                    <span class="material-symbols-outlined">groups</span>
                    <p>Trampolinistes</p>
                </a>
            </li>
            <li>
                <a href="/?page=mon_club&subpage=equipes_trampo">
                    <span class="material-symbols-outlined">groups</span>
                    <p>Equipe trampoliniste</p>
                </a>
            </li>
            <li>
                <a href="/?page=mon_club&subpage=mes_juges">
                    <span class="material-symbols-outlined">note_alt</span>
                    <p>Mes juges</p>
                </a>
            </li>
            <li>
                <a href="/?page=mon_club&subpage=gestion_acces">
                    <span class="material-symbols-outlined">lock</span>
                    <p>Gestion des accès</p>
                </a>
            </li>
            <li>
                <a href="/?page=mon_club&subpage=gestion_acces">
                    <span class="material-symbols-outlined">edit</span>
                    <p>Modifier</p>
                </a>
            </li>
        </ul>
    </div>
    <?php } ?>

    <?php if ($pageToInclude == 'mon_compte') { ?>
    <div class="boxActionBar forMonCompte">
        <ul>
            <li>
                <a href="/?page=mon_compte&subpage=modifier">
                    <span class="material-symbols-outlined">edit</span>
                    <p>Modifier</p>
                </a>
            </li>
            <?php if (isset($_SESSION['juge']) && $_SESSION['juge'] === true) { ?>
            <li>
                <a href="/?page=mon_compte&subpage=infos_juge">
                    <span class="material-symbols-outlined">groups</span>
                    <p>Informations juges</p>
                </a>
            </li>
            <li>
                <a href="/?page=mon_compte&subpage=juger_competition">
                    <span class="material-symbols-outlined">groups</span>
                    <p>Juger sur une compétition</p>
                </a>
            </li>
            <?php } ?>
        </ul>
    </div>
    <?php } ?>

    <?php if ($pageToInclude == 'organisateur') { ?>
    <div class="boxActionBar forOrganisateur">
        <ul>
            <li>
                <a href="/?page=organisateur&subpage=creer_compet">
                    <span class="material-symbols-outlined">groups</span>
                    <p>Organiser une compétition</p>
                </a>
            </li>
        </ul>
    </div>
    <?php } ?>

    <?php if ($pageToInclude == 'resp_juge') { ?>
    <div class="boxActionBar forRespJuge">
        <ul>
            <li>
                <a href="/?page=resp_juge&subpage=acces_competition">
                    <span class="material-symbols-outlined">groups</span>
                    <p>Accéder aux compétitions</p>
                </a>
            </li>
            <li>
                <a href="/?page=resp_juge&subpage=listing_juges">
                    <span class="material-symbols-outlined">groups</span>
                    <p>Listings des juges</p>
                </a>
            </li>
            <li>
                <a href="/?page=resp_juge&subpage=gestion_juges">
                    <span class="material-symbols-outlined">groups</span>
                    <p>Gestions des juges</p>
                </a>
            </li>
            <li>
                <a href="/?page=resp_juge&subpage=juges_invalides">
                    <span class="material-symbols-outlined">groups</span>
                    <p>Juges mal validés</p>
                </a>
            </li>
        </ul>
    </div>
    <?php } ?>

    <?php if ($pageToInclude == 'admin' && (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true && $_SESSION["admin"] === true)) { ?>
    <div class="boxActionBar forAdmin">
        <ul>
            <li>
                <a href="/?page=admin&subpage=liste_responsables">
                    <span class="material-symbols-outlined">groups</span>
                    <p>Listes des responsables</p>
                </a>
            </li>
            <li>
                <a href="/?page=admin&subpage=acces_engagements">
                    <span class="material-symbols-outlined">groups</span>
                    <p>Accès engagements</p>
                </a>
            </li>
            <li>
                <a href="/?page=admin&subpage=liste_competitions">
                    <span class="material-symbols-outlined">groups</span>
                    <p>Listes des compétitions</p>
                </a>
            </li>
            <li>
                <a href="/?page=admin&subpage=utilisateurs">
                    <span class="material-symbols-outlined">groups</span>
                    <p>Utilisateurs</p>
                </a>
            </li>
            <li>
                <a href="/?page=admin&subpage=niveaux_admin">
                    <span class="material-symbols-outlined">groups</span>
                    <p>Niveau administration</p>
                </a>
            </li>
        </ul>
    </div>
    <?php } ?>

</div>
<?php } ?>