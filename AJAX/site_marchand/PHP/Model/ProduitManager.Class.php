<?php
class ProduitManager
{
    public static function add(Produit $obj)
    {
        $db = DbConnect::getDb();
        $q = $db->prepare("INSERT INTO produits (libelleProduit,photoProduit,prixProduit,quantiteProduit,descriptionProduit,idCategorie) VALUES (:libelleProduit,:photoProduit,:prixProduit,:quantiteProduit,:descriptionProduit,:idCategorie)");
        $q->bindValue(":libelleProduit", $obj->getLibelleProduit());
        $q->bindValue(":photoProduit", $obj->getPhotoProduit());
        $q->bindValue(":prixProduit", $obj->getPrixProduit());
        $q->bindValue(":quantiteProduit", $obj->getQuantiteProduit());
        $q->bindValue(":descriptionProduit", $obj->getDescriptionProduit());
        $q->bindValue(":idCategorie", $obj->getIdCategorie());
        $q->execute();
    }

    public static function update(Produit $obj)
    {
        $db = DbConnect::getDb();
        $q = $db->prepare("UPDATE produits SET libelleProduit=:libelleProduit, photoProduit=:photoProduit, prixProduit=:prixProduit, quantiteProduit=:quantiteProduit, descriptionProduit=:descriptionProduit, idCategorie=:idCategorie WHERE idProduit=:idProduit");
        $q->bindValue(":libelleProduit", $obj->getLibelleProduit());
        $q->bindValue(":photoProduit", $obj->getPhotoProduit());
        $q->bindValue(":prixProduit", $obj->getPrixProduit());
        $q->bindValue(":quantiteProduit", $obj->getQuantiteProduit());
        $q->bindValue(":descriptionProduit", $obj->getDescriptionProduit());
        $q->bindValue(":idCategorie", $obj->getIdCategorie());
        $q->bindValue(":idProduit", $obj->getIdProduit());
        $q->execute();
    }

    public static function delete(Produit $obj)
    {
        $db = DbConnect::getDb();
        $db->exec("DELETE FROM produits WHERE idProduit=" . $obj->getIdProduit());
    }

    public static function findById($id)
    {
        $db = DbConnect::getDb();
        $id = (int) $id;
        $q = $db->query("SELECT * FROM produits WHERE idProduit=$id");
        $results = $q->fetch(PDO::FETCH_ASSOC);
        if ($results != false) {
            return new Produit($results);
        } else {
            return false;
        }
    }

    public static function getList()
    {
        $db = DbConnect::getDb();
        $tab = [];
        $q = $db->query("SELECT * FROM produits");
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
            if ($donnees != false) {
                $tab[] = new Produit($donnees);
            }
        }
        return $tab;
    }

    public static function getList4()
    {
        $db = DbConnect::getDb();
        $tab = [];
        $q = $db->query("SELECT * FROM produits LIMIT 4");
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
            if ($donnees != false) {
                $tab[] = new Produit($donnees);
            }
        }
        return $tab;
    }

    public static function getListRand()
    {
        $db = DbConnect::getDb();
        $tab = [];
        $q = $db->query("SELECT DISTINCT * FROM produits ORDER BY RAND() LIMIT 4");
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
            if ($donnees != false) {
                $tab[] = new Produit($donnees);
            }
        }
        return $tab;
    }
}
