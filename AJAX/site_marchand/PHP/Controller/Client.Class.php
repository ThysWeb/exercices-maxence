<?php
class Client
{
    /*******************************Attributs*******************************/
    private $_idClient;
    private $_nomClient;
    private $_prenomClient;
    private $_mailClient;
    private $_passClient;
    private $_adresseClient;
    private $_villeClient;
    private $_dateAjout;

    /******************************Accesseurs*******************************/
    public function getIdClient()
    {
        return $this->_idClient;
    }
    public function setIdClient($_idClient)
    {
        return $this->_idClient = $_idClient;
    }
    public function getNomClient()
    {
        return $this->_nomClient;
    }
    public function setNomClient($_nomClient)
    {
        return $this->_nomClient = $_nomClient;
    }
    public function getPrenomClient()
    {
        return $this->_prenomClient;
    }
    public function setPrenomClient($_prenomClient)
    {
        return $this->_prenomClient = $_prenomClient;
    }
    public function getMailClient()
    {
        return $this->_mailClient;
    }
    public function setMailClient($_mailClient)
    {
        return $this->_mailClient = $_mailClient;
    }
    public function getPassClient()
    {
        return $this->_passClient;
    }
    public function setPassClient($_passClient)
    {
        return $this->_passClient = $_passClient;
    }
    public function getAdresseClient()
    {
        return $this->_adresseClient;
    }
    public function setAdresseClient($_adresseClient)
    {
        return $this->_adresseClient = $_adresseClient;
    }
    public function getVilleClient()
    {
        return $this->_villeClient;
    }
    public function setVilleClient($_villeClient)
    {
        return $this->_villeClient = $_villeClient;
    }
    public function getDateAjout()
    {
        return $this->_dateAjout;
    }
    public function setDateAjout($_dateAjout)
    {
        return $this->_dateAjout = $_dateAjout;
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
        return $this->getIdClient . $this->getNomClient . $this->getPrenomClient . $this->getMailClient . $this->getPassClient . $this->getAdresseClient . $this->getVilleClient . $this->getDateAjout;
    }
}
