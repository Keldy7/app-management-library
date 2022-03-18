<?php

function varchar($variable)
{
    return '"' . $variable . '"';
}

 $codeliv = $_POST['codeliv'];
 $codeaut = $_POST['codeaut'];
 $coded =$_POST['coded'];
 $titreliv = $_POST['titreliv'];
 $dateliv = $_POST['dateliv'];
 
try{
    //Se connecter à notre base de données
	$database = new PDO("mysql:host=localhost; dbname=gdb; charset=utf8",'root','');
    //$database->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);//voir les erreurs et  nous les avertir
    echo "Enregistrement effectué avec succès. ";
    $requete = "INSERT INTO livre SET codeliv = " . varchar($codeliv) . ", codeaut = " . varchar($codeaut) . 
    ", coded = " . varchar($coded) . ", titreliv = " . varchar($titreliv) . ", dateliv = " . varchar($dateliv) . "";
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






























