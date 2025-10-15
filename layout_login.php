<?php
// Démarrer la session au tout début du script
session_start();

// Si l'utilisateur est déjà connecté, on le redirige vers index.php
if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
    header("location: index.php");
    exit;
}

$username = $password = "";
$error_message = "";

// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // --- SIMULATION DE VÉRIFICATION ---
    // Dans une vraie application, vous vérifieriez les identifiants dans une base de données.
    // Ici, nous utilisons des identifiants prédéfinis.
    $valid_username = "059-94044962";
    $valid_password = "gym";

    $username_input = $_POST["username"];
    $password_input = $_POST["password"];

    if (empty(trim($username_input))) {
        $error_message = "Veuillez entrer un nom d'utilisateur.";
    } elseif (empty(trim($password_input))) {
        $error_message = "Veuillez entrer un mot de passe.";
    } else {
        // Vérification des identifiants
        if ($username_input == $valid_username && $password_input == $valid_password) {
            // Les identifiants sont corrects, on démarre une nouvelle session

            // Stocker les données dans les variables de session
            $_SESSION["loggedin"] = true;
            $_SESSION["username"] = $username_input;
            $_SESSION["email"] = "romain@pottier.fr";
            $_SESSION["name"] = "POTTIER";
            $_SESSION["firstname"] = "Romain";
            $_SESSION["juge"] = True;
            $_SESSION["RespJuge"] = True;
            $_SESSION["Orga"] = True;
            $_SESSION["admin"] = True;
            $_SESSION["club"] = "La Patriote de Wattrelos";



            // Rediriger l'utilisateur vers la page d'accueil
            header("location: /");
        } else {
            // Les identifiants sont incorrects, afficher un message d'erreur
            $error_message = "Le nom d'utilisateur ou le mot de passe est incorrect.";
        }
    }
}
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
    <style>
    body {
        background: linear-gradient(to bottom, #ba3184, #e4334f);
        text-align: center;
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
    }

    .col {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        flex: 1;
        height: 100vh;

    }

    h1 {
        color: white;

    }

    form {
        max-width: 400px;
        margin: 50px auto;
        padding: 20px;

        border-radius: 5px;

        background: rgba(255, 255, 255, 0.2);
        border-radius: 16px;
        box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
        backdrop-filter: blur(5px);
        -webkit-backdrop-filter: blur(5px);
        border: 1px solid rgba(255, 255, 255, 0.3);
    }

    label {
        display: block;
        margin-bottom: 8px;
        font-weight: bold;
        color: white;
    }

    input[type="text"],
    input[type="password"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 20px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        font-size: 16px;
        text-align: center;
    }

    button {
        width: 70%;
        padding: 10px;
        background-color: white;
        color: #e4334f;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 16px;
    }

    button:hover {
        background-color: #24a49d;
        color: white;
        transition: 0.4s;
        width: 80%;
    }

    /* .svgImg {
        width: 60%;
        height: auto;
        max-width: 300px;

    } */
    </style>
</head>

<body>
    <div class="col">

    </div>
    <div class="col">
        <img src="img/hautResponsive.png" class=" logo" alt="">
        <h1 style="padding-top:25px;">Connexion à UfolepGym</h1>
        <form action="" method="post">
            <label for="username">Nom d'utilisateur (pseudo) :</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Mot de passe :</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">Se connecter</button>
        </form>
    </div>
    <div class="col">



    </div>
</body>

</html>