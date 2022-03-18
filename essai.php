<?php
function varchar($variable)
{
    return '"' . $variable . '"';
}


try{
    //Se connecter à notre base de données
	$database = new PDO("mysql:host=localhost; dbname=gdb; charset=utf8",'root','');
    //$requete = "SELECT * FROM etudiant ORDER BY codetu";
    //$nbModifications = $database->exec($requete);
    //var_dump($nbModifications);
    if (isset($_GET['nometu']) AND !empty($_GET['nometu'])){
        $recherche = htmlspecialchars($_GET['nometu']);
        $recherche = trim($recherche);
        $recherche = strip_tags($recherche);
        if (isset($recherche)){
            $recherche =strtolower($recherche);
            $req = "SELECT nometu FROM etudiant WHERE nometu LIKE "%".$recherche."%"";
            $selection = $database->prepare($req);
            $recup = $selection->execute();
        }else{
            echo "Vous devez entrer une requete dans la barre de recherche svp";
        }     
    } 
    die();   
} 

catch (Exception $e) {
	die("Connexion Echouée : ".$e->getMessage());
}//redirection vers la page du dbname:cloceCursor()
//$ins->closeCursor();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css"/>
    <title>Rechercher des utilisateurs</title>
</head>
<body>
    <form method="GET">
        <fieldset>
            <legend>Rechercher un etudiant</legend>
            <input type="search" name="nometu" placeholder="Entrez un nom">
            <br><br>
            <input type="submit" value="Rechercher">
        </fieldset>
    </form>
    <section class="affichage">
        <?php if($selection->rowCount() > 0){ ?>
            <?php while ($recup = $selection->fetch()): ?>
                <p><?php echo htmlspecialchars($recup['nometu']);?></p>
            <?php endwhile ?>
        <?php } ?>
        <?php { ?>
            <p>Aucun etudiant trouvé</p>    
        <?php } ?>
    </section>
</body>
</html>













































