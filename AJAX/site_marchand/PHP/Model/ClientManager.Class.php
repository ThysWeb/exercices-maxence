<?php
class ClientManager
{
    public static function add(Client $obj)
    {
        $db = DbConnect::getDb();
        $q = $db->prepare("INSERT INTO clients (nomClient,prenomClient,mailClient,passClient,adresseClient,villeClient,dateAjout) VALUES (:nomClient,:prenomClient,:mailClient,:passClient,:adresseClient,:villeClient,:dateAjout)");
        $q->bindValue(":nomClient", $obj->getNomClient());
        $q->bindValue(":prenomClient", $obj->getPrenomClient());
        $q->bindValue(":mailClient", $obj->getMailClient());
        $q->bindValue(":passClient", $obj->getPassClient());
        $q->bindValue(":adresseClient", $obj->getAdresseClient());
        $q->bindValue(":villeClient", $obj->getVilleClient());
        $q->bindValue(":dateAjout", $obj->getDateAjout());
        $q->execute();
    }

    public static function update(Client $obj)
    {
        $db = DbConnect::getDb();
        $q = $db->prepare("UPDATE clients SET nomClient=:nomClient, prenomClient=:prenomClient, mailClient=:mailClient, passClient=:passClient, adresseClient=:adresseClient, villeClient=:villeClient WHERE idClient=:idClient");
        $q->bindValue(":nomClient", $obj->getNomClient());
        $q->bindValue(":prenomClient", $obj->getPrenomClient());
        $q->bindValue(":mailClient", $obj->getMailClient());
        $q->bindValue(":passClient", $obj->getPassClient());
        $q->bindValue(":adresseClient", $obj->getAdresseClient());
        $q->bindValue(":villeClient", $obj->getVilleClient());
        $q->bindValue(":idClient", $obj->getIdClient());
        $q->execute();
    }

    public static function delete(Client $obj)
    {
        $db = DbConnect::getDb();
        $db->exec("DELETE FROM clients WHERE idClient=" . $obj->getIdClient());
    }

    public static function findById($id)
    {
        $db = DbConnect::getDb();
        $id = (int) $id;
        $q = $db->query("SELECT * FROM clients WHERE idClient=$id");
        $results = $q->fetch(PDO::FETCH_ASSOC);
        if ($results != false) {
            return new Client($results);
        } else {
            return false;
        }
    }

    public static function getList()
    {
        $db = DbConnect::getDb();
        $tab = [];
        $q = $db->query("SELECT * FROM clients");
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
            if ($donnees != false) {
                $tab[] = new Client($donnees);
            }
        }
        return $tab;
    }

    static public function getByMail($mail) {
		$db = DbConnect::getDb (); 
		$q = $db->prepare ("SELECT * FROM clients WHERE mailClient = :mail");
		$q->bindValue (':mail', $mail);
		$q->execute ();
		$donnees = $q->fetch ( PDO::FETCH_ASSOC );
		$q->CloseCursor ();
		if ($donnees == false) {
			return new Client();
		} else {
			return new Client($donnees);
		}
    }
}
