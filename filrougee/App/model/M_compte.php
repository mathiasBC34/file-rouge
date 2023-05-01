<?php

include './App/controleur/c_compte.php';

class M_compte
{
    public static function inscriptionCompte($Nom, $Prenom, $Mail, $Mdp, $tel)
    {
        $Mdp = password_hash($Mdp, PASSWORD_DEFAULT);
        $req = "INSERT INTO client (`nom`,`prenom`,`email`,`telephone`,`mot_de_passe`) VALUES ('$Nom','$Prenom','$Mail','$tel','$Mdp')";
        $res = AccesDonnee::exec($req);
        $tab = $res;
        return $tab;
    }

    public static function connectionCompte(string $Mail, string $Mdp)
    {
        $req = "SELECT 1 FROM client";
        $req .= "WHERE mail = :mail AND mots_de_passe =: mots_de_passe ";

        $statement = AccesDonnee::prepare($req);
        $statement->bindParam(":mail", $Mail);
        $statement->bindParam(":mots_de_passe", $Mdp);
        $statement->execute();

        if ($statement->rowCount() > 0) {
            $existe = true;
        } else {
            $existe = false;
        }
        return (bool) $existe;
    }

    public static function checkPassword(string $Mail, string $mdp)
    {
        $existe=false;

        $sql = "SELECT id, mail, mdp FROM client WHERE mail = :mail";

        $statement = AccesDonnee::prepare($sql);
        $statement->bindParam(":mail", $Mail);

        $statement->execute();

        if ($statement->rowCount() > 0) {
            $data = $statement->fetch();
            $mdp_bdd = $data['mdp'];
        }
        if ($statement->rowCount() == 0) {
                afficheMessage("mail ou mot de passe inconnu");
            die;
        }

        if (password_verify($mdp, $mdp_bdd)) {
            $id = $data['id'];
            $_SESSION["id"] = $id;
            $_SESSION["mail"] = $data['mail'];
            $existe=true;
            // return $id_utilisateur;
        }
        return $existe;
    }
}