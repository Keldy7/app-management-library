<?php

function varchar($variable)
{
    return '"' . $variable . '"';
}

 $codetu = $_POST['codetu'];
 $nometu = $_POST['nometu'];
 $prenometu = $_POST['prenometu'];
 $sexe =$_POST['sexe'];
 $photoetu = $_POST['photoetu'];  
 $cel = $_POST['cel'];
try{
    //Se connecter à notre base de données
	$database = new PDO("mysql:host=localhost; dbname=gdb; charset=utf8",'root','');
    //$database->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);//voir les erreurs et  nous les avertir
    echo "Enregistrement effectué avec succès.";
    $requete = "INSERT INTO etudiant SET codetu = " . varchar($codetu) . ", nometu = " . varchar($nometu) . 
    ", prenometu = " . varchar($prenometu) . ", sexe = " . varchar($sexe) . ", photoetu = " . varchar($photoetu) . 
    ", cel = " . varchar($cel) . "";
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






























