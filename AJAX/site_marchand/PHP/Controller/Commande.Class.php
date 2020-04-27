<?php
class Commande
{
    /*******************************Attributs*******************************/
    private $_idCommande;
    private $_dateCommande;
    private $_sommeCommande;
    private $_idClient;

    /******************************Accesseurs*******************************/
    public function getIdCommande()
    {
        return $this->_idCommande;
    }
    public function setIdCommande($_idCommande)
    {
        return $this->_idCommande = $_idCommande;
    }
    public function getDateCommande()
    {
        return $this->_dateCommande;
    }
    public function setDateCommande($_dateCommande)
    {
        return $this->_dateCommande = $_dateCommande;
    }
    public function getSommeCommande()
    {
        return $this->_sommeCommande;
    }
    public function setSommeCommande($_sommeCommande)
    {
        return $this->_sommeCommande = $_sommeCommande;
    }
    public function getidClient()
    {
        return $this->_idClient;
    }
    public function setidClient($_idClient)
    {
        return $this->_idClient = $_idClient;
    }

    /*******************************Construct*******************************/
    public function __construct(array $options = [])
    {
        if (!empty($options)) {
            $this->hydrate($options);
        }
    }

    public function hydrate($data)
    {
        foreach ($data as $key => $value) {
            $methode = "set" . ucfirst($key);
            if (is_callable(([$this, $methode]))) {
                $this->$methode($value);
            }
        }
    }

    /****************************Autres méthodes****************************/
    public function toString()
    {
        return $this->getIdCommande . $this->getDateCommande . $this->getSommeCommande;
    }
}
