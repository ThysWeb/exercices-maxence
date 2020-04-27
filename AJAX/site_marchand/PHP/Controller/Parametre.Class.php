<?php
class Parametre
{
    /*******************************Attributs*******************************/
    private static $_host;
    private static $_db;
    private static $_user;
    private static $_pass;

    /******************************Accesseurs*******************************/
    public static function getHost()
    {
        return self::$_host;
    }
    public static function getDb()
    {
        return self::$_db;
    }
    public static function getUser()
    {
        return self::$_user;
    }
    public static function getPass()
    {
        return self::$_pass;
    }

    public static function init()
    {
        $fichier = 'parametres.ini';
        $flux = fopen($fichier, "r");

        while (!feof($flux)) {
            $ligne = fgets($flux, 4096);
            if ($ligne) {
                $info = explode(":", $ligne);
                $param[$info[0]] = rtrim($info[1]);
            }
        }

        self::$_host = $param["host"];
        self::$_db = $param["db"];
        self::$_user = $param["user"];
        self::$_pass = $param["pass"];
    }
}
