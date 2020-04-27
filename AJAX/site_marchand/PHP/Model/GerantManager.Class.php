<?php
class GerantManager
{
    public static function add(Gerant $obj)
    {
        $db = DbConnect::getDb();
        $q = $db->prepare("INSERT INTO gerants (pseudoGerant,passGerant,mailGerant,roleGerant) VALUES (:pseudoGerant,:passGerant,:mailGerant,:roleGerant)");
        $q->bindValue(":pseudoGerant", $obj->getPseudoGerant());
        $q->bindValue(":passGerant", $obj->getPassGerant());
        $q->bindValue(":mailGerant", $obj->getMailGerant());
        $q->bindValue(":roleGerant", $obj->getRoleGerant());
        $q->execute();
    }

    public static function update(Gerant $obj)
    {
        $db = DbConnect::getDb();
        $q = $db->prepare("UPDATE gerants SET pseudoGerant=:pseudoGerant, passGerant=:passGerant, mailGerant=:mailGerant, roleGerant=:roleGerant WHERE idGerant=:idGerant");
        $q->bindValue(":pseudoGerant", $obj->getPseudoGerant());
        $q->bindValue(":passGerant", $obj->getPassGerant());
        $q->bindValue(":mailGerant", $obj->getMailGerant());
        $q->bindValue(":roleGerant", $obj->getRoleGerant());
        $q->bindValue(":idGerant", $obj->getIdGerant());
        $q->execute();
    }

    public static function delete(Gerant $obj)
    {
        $db = DbConnect::getDb();
        $db->exec("DELETE FROM gerants WHERE idGerant=" . $obj->getIdGerant());
    }

    public static function findById($id)
    {
        $db = DbConnect::getDb();
        $id = (int) $id;
        $q = $db->query("SELECT * FROM gerants WHERE idGerant=$id");
        $results = $q->fetch(PDO::FETCH_ASSOC);
        if ($results != false) {
            return new Gerant($results);
        } else {
            return false;
        }
    }

    public static function getList()
    {
        $db = DbConnect::getDb();
        $tab = [];
        $q = $db->query("SELECT * FROM gerants");
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
            if ($donnees != false) {
                $tab[] = new Gerant($donnees);
            }
        }
        return $tab;
    }

    static public function getByPseudo($pseudo) {
		$db = DbConnect::getDb (); 
		$q = $db->prepare ("SELECT * FROM gerants WHERE pseudoGerant = :pseudo");
		$q->bindValue (':pseudo', $pseudo);
		$q->execute ();
		$donnees = $q->fetch ( PDO::FETCH_ASSOC );
		$q->CloseCursor ();
		if ($donnees == false) {
			return new Gerant();
		} else {
			return new Gerant($donnees);
		}
    }
}
