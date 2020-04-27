<?php
$var = new Gerant($_POST);

switch ($_GET["m"])
{
    case "1":
        $var->setPassGerant(md5($var->getPassGerant()));
        GerantManager::add($var);
        break;

    case "2":   
        if ($var->getPassGerant() == null) {
            $original = GerantManager::findById($var->getIdGerant());
            $var->setPassGerant($original->getPassGerant());
        }
        else {
            $var->setPassGerant(md5($var->getPassGerant()));
        }       
        GerantManager::update($var);
        break;

    case "3":
        GerantManager::delete($var);
        break; 
}

header("location:index.php?a=adminListeGerants");