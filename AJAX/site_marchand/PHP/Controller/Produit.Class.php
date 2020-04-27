<?php
class Produit
{
    /*******************************Attributs*******************************/
    private $_idProduit;
    private $_libelleProduit;
    private $_photoProduit;
    private $_prixProduit;
    private $_quantiteProduit;
    private $_descriptionProduit;
    private $_idCategorie;
    private $_libelleCategorie;

    /******************************Accesseurs*******************************/
    public function getIdProduit()
    {
        return $this->_idProduit;
    }
    public function setIdProduit($_idProduit)
    {
        return $this->_idProduit = $_idProduit;
    }
    public function getLibelleProduit()
    {
        return $this->_libelleProduit;
    }
    public function setLibelleProduit($_libelleProduit)
    {
        return $this->_libelleProduit = $_libelleProduit;
    }
    public function getPhotoProduit()
    {
        return $this->_photoProduit;
    }
    public function setPhotoProduit($_photoProduit)
    {
        return $this->_photoProduit = $_photoProduit;
    }
    public function getPrixProduit()
    {
        return $this->_prixProduit;
    }
    public function setPrixProduit($_prixProduit)
    {
        return $this->_prixProduit = $_prixProduit;
    }
    public function getQuantiteProduit()
    {
        return $this->_quantiteProduit;
    }
    public function setQuantiteProduit($_quantiteProduit)
    {
        return $this->_quantiteProduit = $_quantiteProduit;
    }
    public function getDescriptionProduit()
    {
        return $this->_descriptionProduit;
    }
    public function setDescriptionProduit($_descriptionProduit)
    {
        return $this->_descriptionProduit = $_descriptionProduit;
    }
    public function getIdCategorie()
    {
        return $this->_idCategorie;
    }
    public function setIdCategorie($_idCategorie)
    {
        $this->_idCategorie = $_idCategorie;
        $c = CategorieManager::findById($_idCategorie);
        $this->setLibelleCategorie($c);
    }
    public function getLibelleCategorie()
    {
        return $this->_libelleCategorie;
    }
    public function setLibelleCategorie($_libelleCategorie)
    {
        return $this->_libelleCategorie = $_libelleCategorie;
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
        return $this->getIdProduit . $this->getLibelleProduit . $this->getPhotoProduit . $this->getPrixProduit . $this->getQuantiteProduit . $this->getDescriptionProduit . $this->getIdCategorie . $this->getLibelleCategorie;
    }
}
