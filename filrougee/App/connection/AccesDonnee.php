<?php
class AccesDonnee{

    private static $serveur = "mysql:host=localhost";
    private static $bdd = "dbname=project_fil_rouge";
    private static $user = "root";
    private static $mdp = "";

    /**
     * Undocumented variable
     *
     * @var PDO
     */ 
    private static $monPdo;
    
    /**
     * Undocumented function
     *
     * @return PDO
     */
    public static function getpdo()
    {
        if (AccesDonnee::$monPdo == null) {
            AccesDonnee::$monPdo = new PDO(AccesDonnee::$serveur . ';' . AccesDonnee::$bdd, AccesDonnee::$user, AccesDonnee::$mdp);
            AccesDonnee::$monPdo->query("SET CHARACTER SET utf8");
        }
        return AccesDonnee::$monPdo;
    }

    /**
     * Undocumented function
     * @param string $requete_sql
     * 
     */
    public static function query(string $requete_sql)
    {
        return AccesDonnee::getpdo()->query($requete_sql);   
    }

    /**
     * Undocumented function
     * @param string $requete_sql
     * @return int
     */
    public static function exec(string $requete_sql)
    {
        return AccesDonnee::getpdo()->exec($requete_sql);   
    }

    public static function prepare(string $requete_sql)
    {
        return AccesDonnee::getpdo()->prepare($requete_sql);   
    }

}

?>