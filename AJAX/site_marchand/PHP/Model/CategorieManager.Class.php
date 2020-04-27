<?php
class CategorieManager
{
    public static function add(Categorie $obj)
    {
        $db = DbConnect::getDb();
        $q = $db->prepare("INSERT INTO categories (libelleCategorie) VALUES (:libelleCategorie)");
        $q->bindValue(":libelleCategorie", $obj->getLibelleCategorie());
        $q->execute();
    }

    public static function update(Categorie $obj)
    {
        $db = DbConnect::getDb();
        $q = $db->prepare("UPDATE categories SET libelleCategorie=:libelleCategorie WHERE idCategorie=:idCategorie");
        $q->bindValue(":libelleCategorie", $obj->getLibelleCategorie());
        $q->bindValue(":idCategorie", $obj->getIdCategorie());
        $q->execute();
    }

    public static function delete(Categorie $obj)
    {
        $db = DbConnect::getDb();
        $db->exec("DELETE FROM categories WHERE idCategorie=" . $obj->getIdCategorie());
    }

    public static function findById($id)
    {
        $db = DbConnect::getDb();
        $id = (int) $id;
        $q = $db->query("SELECT * FROM categories WHERE idCategorie=$id");
        $results = $q->fetch(PDO::FETCH_ASSOC);
        if ($results != false) {
            return new Categorie($results);
        } else {
            return false;
        }
    }

    public static function getList()
    {
        $db = DbConnect::getDb();
        $tab = [];
        $q = $db->query("SELECT * FROM categories");
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
            if ($donnees != false) {
                $tab[] = new Categorie($donnees);
            }
        }
        return $tab;
    }
}
