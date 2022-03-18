
<?php

function varchar($variable)
{
    return '"' . $variable . '"';
}

 $codetu = $_POST['codetu'];
 $nometu = $_POST['nometu'];
 $prenometu = $_POST['prenometu'];
 $photoetu = $_POST['photoetu'];
 $cel = $_POST['cel'];
 $new_codetu = $_POST['new_codetu'];
try{
    //Se connecter à notre base de données
	$database = new PDO("mysql:host=localhost; dbname=gdb; charset=utf8",'root','');
    //$database->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);//voir les erreurs et  nous les avertir
    echo "Modification effectuée avec succès. ";
    $requete = "UPDATE etudiant SET codetu = ".varchar($new_codetu).", nometu = ".varchar($nometu).", prenometu = ".varchar($prenometu).", photoetu = ".varchar($photoetu).", cel= ".varchar($cel)." WHERE codetu = ".varchar($codetu)."";
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






























