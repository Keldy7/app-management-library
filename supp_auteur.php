
<?php

function varchar($variable)
{
    return '"' . $variable . '"';
}

 $codeaut = $_POST['codeaut'];
try{
    //Se connecter à notre base de données
	$database = new PDO("mysql:host=localhost; dbname=gdb; charset=utf8",'root','');
    //$database->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);//voir les erreurs et  nous les avertir
    echo "Suppression effectuée avec succès. ";
    $requete = "DELETE FROM auteur WHERE codeaut = " . varchar($codeaut) ."";
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






























