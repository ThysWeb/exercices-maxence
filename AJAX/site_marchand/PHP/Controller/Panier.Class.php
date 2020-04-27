<?php
class Panier
{
    /*******************************Attributs*******************************/
    private $_idPanier;
    private $_idProduit;
    private $_idClient;
    private $_quantiteCommande;

    /******************************Accesseurs*******************************/
    public function getIdPanier()
    {
        return $this->_idPanier;
    }
    public function setIdPanier($_idPanier)
    {
        return $this->_idPanier = $_idPanier;
    }
    public function getIdProduit()
    {
        return $this->_idProduit;
    }
    public function setIdProduit($_idProduit)
    {
        return $this->_idProduit = $_idProduit;
    }
    public function getIdClient()
    {
        return $this->_idClient;
    }
    public function setIdClient($_idClient)
    {
        return $this->_idClient = $_idClient;
    }
    public function getQuantiteCommande()
    {
        return $this->_quantiteCommande;
    }
    public function setQuantiteCommande($_quantiteCommande)
    {
        return $this->_quantiteCommande = $_quantiteCommande;
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
        return $this->getIdPanier . $this->getIdProduit . $this->getIdClient;
    }
}
