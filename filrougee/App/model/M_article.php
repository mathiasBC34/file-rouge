<?php


class M_article
{
    /**
     * Undocumented function
     *
     * @param [type] $idCategorie
     * @return void
     */
    public static function trouveLesArticleDeFleur()
    {
        $req = "SELECT * FROM articles";
        $res = AccesDonnee::query($req);
        $lesLignes = $res->fetchAll(PDO::FETCH_OBJ);
        return $lesLignes;
        
    }

}

?>