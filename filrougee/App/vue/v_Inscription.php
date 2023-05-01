<body>
    <section class="cadre-inscription">
        <form class="insertCompte" name="fos" method="post" action="index.php?uc=connection&action=insertCompte">
            <h1 class="titre-inscription">Inscription</h1>
            <div class="cadre-information-client">
                <label class="titre-input-info-client" for="">Nom :
                    <input type="text" name="Nom" class="vue_inscrip" style="margin-top: 15px; width:70%;" placeholder="nom"></label>

                <label class="titre-input-info-client" for="">Prenom :
                    <input type="text" name="Prenom" class="vue_inscrip" style="margin-top: 15px; width:70%;" placeholder="prenom"></label>

                <label class="titre-input-info-client" for="">Mail :
                    <input type="text" name="Mail" class="vue_inscrip" style="margin-top: 15px; width:70%;" placeholder="mail ex: j.simpson@gmail.com"></label>

                <label class="titre-input-info-client" for="">téléphone :
                    <input type="text" name="telephone" class="vue_inscrip" style="margin-top: 15px; width:70%; " placeholder="ville"></label>

                <label class="titre-input-info-client" for="">Mdp :
                    <input type="text" name="Mdp" class="vue_inscrip" style="margin-top: 15px; width:70%; " placeholder="mots de passe"></label>
            </div>
            <div class="cadre-bouton-inscription">
                <p class="bouton-inscription">
                    <input type="submit" name="action" value="créer compte" class="vue_inscrip" style="margin-top: 15px;">
                </p>
                <p class="bouton-inscription">
                    <a href="index.php?uc=compte" class="button-retour">retour</a>
                </p>
            </div>
        </from>
    </section>
</body>
