<?php

function varchar($variable)
{
    return '"' . $variable . '"';
}
 $coded = $_POST['coded'];
 $nomed= $_POST['nomed'];
 $pays =$_POST['pays'];
 
try{
    //Se connecter à notre base de données
	$database = new PDO("mysql:host=localhost; dbname=gdb; charset=utf8",'root','');
    //$database->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);//voir les erreurs et  nous les avertir
    echo "Enregistrement effectué avec succès.";
    $requete = "INSERT INTO editeur SET coded = " . varchar($coded) . ", nomed= " . varchar($nomed) . 
    ", pays= " . varchar($pays) ."";
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






























