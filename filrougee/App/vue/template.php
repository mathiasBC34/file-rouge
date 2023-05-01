<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/style.css" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <title>la fleure</title>
</head>

<header>
    <nav>
        <div class="logo">
            <img class="nav-img" src="public/image/logodusitefleure.png" alt="" />
        </div>
        <div class="toggle">
            <i class="bi bi-x-lg fermer"></i>
            <i class="bi bi-list ouvrir"></i>
        </div>
        <ul class="menu">
            <li><a href="index.php?uc=accueil&action=article">Accueil</a></li>
            <li><a href="index.php?uc=boutique">Boutique</a></li>
            <li><a href="">Blog</a></li>
            <li><a href="index.php?uc=apropos">A propos</a></li>
        </ul>
        <div class="icon-connection">
            <a class="icon" href="index.php?uc=compte"><svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                    <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z" />
                </svg>
            </a>
        </div>
    </nav>
</header>
            

           
<?php

$SessionClient = [];
if (!empty($_SESSION['id'])) {
    $SessionClient = $_SESSION['id'];
}


if (!$uc) {
    $uc = 'accueil';
}
?>
<main>
    <?php
    switch ($uc) {
        case 'accueil':
            /*include 'ici le controleur';*/
            include 'App/vue/v_Acceuil.php';
            break;
        case 'apropos':
            include 'App/vue/v_Apropos.php';
            break;
        case 'boutique':
            include 'App/vue/v_Boutique.php';
            break;
        case 'compte':
            include 'App/vue/v_Compte.php';
            break;
        case 'inscription':
            include 'App/vue/V_Inscription.php';
            break;
        case 'panier':
            include 'App/vue/v_Son_panier.php';
            break;
        case 'validation':
            include 'App/vue/v_Validation.php';
            break;
        case 'evenement':
            include 'App/vue/v_Evenement.php';
            break;
        case 'Recap':
            include 'App/vue/v_Recap_panier.php';
            break;
        case 'fleure_bouquet':
            include 'App/vue/v_Fleure_bouquet.php';
            break;
        case 'connection':
            include 'App/vue/v_connection.php';
            break;
        default:
            break;
    }
    ?>
</main>

<footer class="mise-footer">
    <img class="img-footer" src="public/image/fleur_footer.jpg" alt="">
    <div class="mise-forme-reseau">
        <div class="reseau-footer">
            <p class="titre-reseau">Nos réseaux </p>
            <img src="public/image/Facebook_icon.png" alt="" style="height: 63px;">
            <img src="public/image/twitter.png" alt="" style=" height: 80px;">
            <img src="public/image/insta.png" alt="" style="height: 90px;">
        </div>
        <div class="ligne-footer">
            <span class="line_vert"></span>
        </div>
        <div class="mail-footer">
            <p class="titre-footer">Nous contacter </p>
            <img class="mail-footer" src="public/image/email.png" alt="">
        </div>
    </div>
    <span class="line_hor"></span>
    <div class="p-message-footer">
        <p>La fleure que du bonheur - tous droit de réserver</p>
    </div>
</footer>
</body>

<script src="public/main.js"></script>

</html>