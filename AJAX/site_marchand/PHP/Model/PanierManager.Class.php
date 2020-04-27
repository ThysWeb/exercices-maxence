<?php
class PanierManager
{
    public static function add(Panier $obj)
    {
        $db = DbConnect::getDb();
        $q = $db->prepare("INSERT INTO paniers (idProduit,idClient,quantiteCommande) VALUES (:idProduit,:idClient,:quantiteCommande)");
        $q->bindValue(":idProduit", $obj->getIdProduit());
        $q->bindValue(":quantiteCommande", $obj->getQuantiteCommande());
        $q->bindValue(":idClient", $obj->getIdClient());
        $q->execute();
    }

    public static function update(Panier $obj)
    {
        $db = DbConnect::getDb();
        $q = $db->prepare("UPDATE paniers SET idProduit=:idProduit, idClient=:idClient, quantiteCommande=:quantiteCommande WHERE idPanier=:idPanier");
        $q->bindValue(":idProduit", $obj->getIdProduit());
        $q->bindValue(":idClient", $obj->getIdClient());
        $q->bindValue(":quantiteCommande", $obj->getQuantiteCommande());
        $q->bindValue(":idPanier", $obj->getIdPanier());
        $q->execute();
    }

    public static function delete(Panier $obj)
    {
        $db = DbConnect::getDb();
        $db->exec("DELETE FROM paniers WHERE idPanier=" . $obj->getIdPanier());
    }

    public static function deleteClient($id)
    {
        $db = DbConnect::getDb();
        $db->exec("DELETE FROM paniers WHERE idClient=$id");
    }

    public static function findById($id)
    {
        $db = DbConnect::getDb();
        $id = (int) $id;
        $q = $db->query("SELECT * FROM paniers WHERE idPanier=$id");
        $results = $q->fetch(PDO::FETCH_ASSOC);
        if ($results != false) {
            return new Panier($results);
        } else {
            return false;
        }
    }

    public static function getList()
    {
        $db = DbConnect::getDb();
        $tab = [];
        $q = $db->query("SELECT * FROM paniers");
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
            if ($donnees != false) {
                $tab[] = new Panier($donnees);
            }
        }
        return $tab;
    }

    public static function getListById($id)
    {
        $db = DbConnect::getDb();
        $tab = [];
        $q = $db->query("SELECT * FROM paniers WHERE idClient=$id");
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
            if ($donnees != false) {
                $tab[] = new Panier($donnees);
            }
        }
        return $tab;
    }
}
