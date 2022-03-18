
<?php

function varchar($variable)
{
    return '"' . $variable . '"';
}

 $codeaut = $_POST['codeaut'];
 $nomaut = $_POST['nomaut'];
 $prenomaut = $_POST['prenomaut'];
 $pays = $_POST['pays'];
 $new_codeaut = $_POST['new_codeaut'];
try{
    //Se connecter à notre base de données
	$database = new PDO("mysql:host=localhost; dbname=gdb; charset=utf8",'root','');
    //$database->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);//voir les erreurs et  nous les avertir
    echo "Modification effectuée avec succès. ";
    $requete = "UPDATE auteur SET codeaut = ".varchar($new_codeaut).", nomaut = ".varchar($nomaut).", prenomaut = ".varchar($prenomaut).", pays = ".varchar($pays)." WHERE codeaut = ".varchar($codeaut)."";
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






























