

<?php

function varchar($variable)
{
    return '"' . $variable . '"';
}

 $codeliv = $_POST['codeliv'];
 $codetu= $_POST['codetu'];
 $batedeb = $_POST['datedeb'];
try{
    //Se connecter à notre base de données
	$database = new PDO("mysql:host=localhost; dbname=gdb; charset=utf8",'root','');
    //$database->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);//voir les erreurs et  nous les avertir
    echo "Suppression effectuée avec succès. ";
    $requete = "DELETE FROM emprunter WHERE codeliv = " .varchar($codeliv).",codetu = ".varchar($codetu).",datedeb = ".varchar($datedeb)."";
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






























