
<?php

function varchar($variable)
{
    return '"' . $variable . '"';
}

 $coded = $_POST['coded'];
 $nomed= $_POST['nomed'];
 $pays = $_POST['pays'];
 $new_coded = $_POST['new_coded'];
try{
    //Se connecter à notre base de données
	$database = new PDO("mysql:host=localhost; dbname=gdb; charset=utf8",'root','');
    //$database->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);//voir les erreurs et  n 
    echo "Modification effectuée avec succès. ";
    $requete = "UPDATE editeur SET coded = ".varchar($new_coded).", nomed = ".varchar($nomed).", pays = ".varchar($pays)." WHERE coded = ".varchar($coded)."";
    $nbModifications = $database->exec($requete);
    //echo $requete;
    var_dump($nbModifications);
    die();   
} 

catch (Exception $e) {
	die("Connexion Echouée : ".$e->getMessage());
}//redirection vers la page du dbname:cloceCursor()
$ins->closeCursor();
?>






























