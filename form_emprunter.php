<?php

function varchar($variable)
{
    return '"' . $variable . '"';
}

 $codeliv = $_POST['codeliv'];
 $datedeb = $_POST['datedeb'];
 $codetu =$_POST['codetu'];
 $datefin = $_POST['datefin'];
 $statutliv = $_POST['statutliv'];
 
try{
    //Se connecter à notre base de données
	$database = new PDO("mysql:host=localhost; dbname=gdb; charset=utf8",'root','');
    //$database->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);//voir les erreurs et  nous les avertir
    echo "Enregistrement effectué avec succès. ";
    $requete = "INSERT INTO emprunt SET codeliv = " . varchar($codeliv) . ", datedeb = " . date_format($datedeb) . 
    ", codetu = " . varchar($codetu) . ", datefin = " . date_format($datefin) . ", statutliv = " . varchar($statutliv) . "";
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






























