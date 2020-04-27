<?php
$mode=$_GET["m"];

if($mode!="1")
{
    $id=$_GET["id"];
    $var=GerantManager::findById($id);
}

switch ($mode)
{
    case "1" :
        $texteBouton = "Ajouter";
        break;
    case "2" :
        $texteBouton = "Modifier";
        break;
    case "3" :
        $texteBouton = "Supprimer";
        break;
}
?>

<div id="conteneur">
    <form action="index.php?a=actionGerant&m=<?php echo $mode; ?>" method="POST">
        <?php
        if ($mode != "1") {
        ?>
        <input type="hidden" name="idGerant" value="<?php echo $var->getIdGerant(); ?>">
        <?php
        }
        ?>
        <div class="Bloc">
            <div class="sousbloc">
                <label for="pseudoGerant">Pseudo</label>
                <input type="text" name="pseudoGerant" placeholder="Entrez votre pseudo" autofocus required <?php if ($mode==3){echo "readonly";} ?> value="<?php if ($mode !="1") {echo $var->getPseudoGerant();} ?>" >
            </div>

            <div class="sousbloc">
                <label for="mailGerant">Courriel</label>
                <input type="text" name="mailGerant" placeholder="Entrez votre courriel" autofocus required <?php if ($mode==3){echo "readonly";} ?> value="<?php if ($mode !="1") {echo $var->getMailGerant();} ?>" >
            </div>

            <div class="sousbloc">
                <label for="passGerant">Mot de Passe</label>
                <input type="password" name="passGerant" placeholder="Entrez votre Mot de Passe" <?php if ($mode == 1) { echo "required"; } ?>>
            </div>

            <div class="sousbloc">
                <label for="confirm">Confirmation </label>
                <input type="password" name="confirm" placeholder="Confirmez votre Mot de Passe" <?php if ($mode == 1) { echo "required"; } ?>>
            </div>

            <div class="sousbloc">
                <label for="roleGerant">Rôle </label>
                <select name="roleGerant">
                    <option value="1">Gérant</option>
                    <option value="2">Admin</options>
                </select>
            </div>

        </div>
            <div class="bouton">
                <input type="submit" value="<?php echo $texteBouton; ?>">
            </div>
    </form>
</div>
