<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/style.css" type="text/css">
    <title>acceuil</title>
</head>

<body>
    <main class="main-accueil">
        <section class="cadre-fete-des-meres">
            <img class="img-accueil-fete-des-meres" src="public/image/mère.jpg" alt="">
            <div class="cadre-accroche">
                <p>Pour la fête des mères le dimanche 4 juin </p>
                <p>découvrez nos bouquet printaniers !</p>
            </div>
            <div class="cadre-text">
                <p class="paragrphe-1">La fête des Mères</p>
                <p class="paragrphe-2">
                    Nos sélections surprennent toujours</p>
                <p class="paragrphe-3"><a href="">Voir l'évènement</a></p>
            </div>
        </section>
        <section class="top-vente">
            <h1 class="titre-top-des-ventes">Top des ventes</h1>
            <div class="cadre-article">
                <div class="article">
                    <img class="images-article" src="public/image/fleure.png" alt="">
                    <div class="cadre-info">
                        <p>Nom :</p>
                        <p>Prix :</p>
                        <p>Description :</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="top-vente">
            <h1 class="titre-top-des-ventes">Nos nouveautés</h1>
            <?php
            foreach ($lesArticle as $article) :
            ?>
                <div class="cadre-article">
                    <div class="article">
                        <img class="images-article" src="public/image/fleure.png" alt="">
                        <div class="cadre-info">
                            <p>Nom :<?= $article->nom ?></p>
                            <p>Prix :<?= $article->prix_unitaire ?></p>
                            <p>Description :<?= $article->description ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </section>
    </main>
</body>

</html>