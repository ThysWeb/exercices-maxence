<?php
class CommandeManager
{
    public static function add(Commande $obj)
    {
        $db = DbConnect::getDb();
        $q = $db->prepare("INSERT INTO commandes (dateCommande,sommeCommande,idClient) VALUES (:dateCommande,:sommeCommande,:idClient)");
        $q->bindValue(":dateCommande", $obj->getDateCommande());
        $q->bindValue(":idClient", $obj->getidClient());
        $q->bindValue(":sommeCommande", $obj->getSommeCommande());
        $q->execute();
    }

    public static function update(Commande $obj)
    {
        $db = DbConnect::getDb();
        $q = $db->prepare("UPDATE commandes SET dateCommande=:dateCommande, sommeCommande=:sommeCommande, idClient=:idClient WHERE idCommande=:idCommande");
        $q->bindValue(":dateCommande", $obj->getDateCommande());
        $q->bindValue(":sommeCommande", $obj->getSommeCommande());
        $q->bindValue(":idClient", $obj->getidClient());
        $q->bindValue(":idCommande", $obj->getIdCommande());
        $q->execute();
    }

    public static function delete(Commande $obj)
    {
        $db = DbConnect::getDb();
        $db->exec("DELETE FROM commandes WHERE idCommande=" . $obj->getIdCommande());
    }

    public static function findById($id)
    {
        $db = DbConnect::getDb();
        $id = (int) $id;
        $q = $db->query("SELECT * FROM commandes WHERE idCommande=$id");
        $results = $q->fetch(PDO::FETCH_ASSOC);
        if ($results != false) {
            return new Commande($results);
        } else {
            return false;
        }
    }

    public static function getList()
    {
        $db = DbConnect::getDb();
        $tab = [];
        $q = $db->query("SELECT * FROM commandes");
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
            if ($donnees != false) {
                $tab[] = new Commande($donnees);
            }
        }
        return $tab;
    }

    public static function getListById($id)
    {
        $db = DbConnect::getDb();
        $tab = [];
        $q = $db->query("SELECT * FROM commandes WHERE idClient=$id");
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
            if ($donnees != false) {
                $tab[] = new Commande($donnees);
            }
        }
        return $tab;
    }

    public static function getList3()
    {
        $db = DbConnect::getDb();
        $tab = [];
        $q = $db->query("SELECT * FROM commandes LIMIT 3");
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
            if ($donnees != false) {
                $tab[] = new Commande($donnees);
            }
        }
        return $tab;
    }
}
