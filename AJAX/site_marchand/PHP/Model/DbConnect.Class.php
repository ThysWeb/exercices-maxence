<?php
    class DbConnect {
    
        private static $db;
        
        public static function getDb() 
        {
            return DbConnect::$db;
        }
    
        public static function init()
        {
            $host = Parametre::getHost();
            $base = Parametre::getDb();
            $user = Parametre::getUser();
            $pass = Parametre::getPass();
    
            try {
                self::$db = new PDO('mysql:host=' . $host . '; charset=utf8; dbname=' . $base, $user, $pass);
                self::$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (Exception $e) {
                echo "Error : " . $e->getMessage() . "<br />";
                echo "N° : " . $e->getCode();
                die("End");
            }
        }
    }