<?php

require_once('./App/model/M_compte.php');
require_once('./util/fonctions.inc.php');

switch($action){
    case 'insertCompte':
        $Nom = filter_input(INPUT_POST, 'Nom');
        $Prenom = filter_input(INPUT_POST, "Prenom");
        $Mail = filter_input(INPUT_POST, "Mail");
        $tel = filter_input(INPUT_POST, "telephone");
        $Mdp = filter_input(INPUT_POST, "Mdp");
        $val = M_compte::inscriptionCompte($Nom, $Prenom, $Mail, $Mdp, $tel);
        if ($val == true) {
            afficheMessage('le compte a bien etait enregistré');
        } else {
            afficheMessage("erreur lord de l'inscription");
        }
        break;
        default:
        break;
}
