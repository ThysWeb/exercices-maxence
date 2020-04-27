<?php
$var = new Client($_POST);

switch ($_GET["m"])
{
    case "1":
        ClientManager::add($var);
    case "2":
        if ($var->getPassClient() == null) {
            $original = ClientManager::findById($var->getIdClient());
            $var->setPassClient($original->getPassClient());
        }
        else {
            $var->setPassClient(md5($var->getPassClient()));
        }
        ClientManager::update($var);
    break;
}

if (isset($_SESSION['gerantId'])) {
    header("location:index.php?a=adminListeClients");
}
else {
    header("location:index.php?a=compte");
}
