<?php
class Gerant
{
    /*******************************Attributs*******************************/
    private $_idGerant;
    private $_pseudoGerant;
    private $_passGerant;
    private $_mailGerant;
    private $_roleGerant;

    /******************************Accesseurs*******************************/
    public function getIdGerant()
    {
        return $this->_idGerant;
    }
    public function setIdGerant($_idGerant)
    {
        return $this->_idGerant = $_idGerant;
    }
    public function getPseudoGerant()
    {
        return $this->_pseudoGerant;
    }
    public function setPseudoGerant($_pseudoGerant)
    {
        return $this->_pseudoGerant = $_pseudoGerant;
    }
    public function getPassGerant()
    {
        return $this->_passGerant;
    }
    public function setPassGerant($_passGerant)
    {
        return $this->_passGerant = $_passGerant;
    }
    public function getMailGerant()
    {
        return $this->_mailGerant;
    }
    public function setMailGerant($_mailGerant)
    {
        return $this->_mailGerant = $_mailGerant;
    }
    public function getRoleGerant()
    {
        return $this->_roleGerant;
    }
    public function setRoleGerant($_roleGerant)
    {
        return $this->_roleGerant = $_roleGerant;
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
        return $this->getIdGerant . $this->getPseudoGerant . $this->getPassGerant . $this->getMailGerant . $this->getRoleGerant;
    }
}
