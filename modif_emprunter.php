
<?php

function varchar($variable)
{
    return '"' . $variable . '"';
}

 $codeliv = $_POST['codeliv'];
 $datedeb = $_POST['datedeb'];
 $codetu = $_POST['codetu'];
 $datefin = $_POST['datefin'];
 $statutliv = $_POST['statutliv'];
 $new_codeliv = $_POST['new_codeliv'];
 $new_datedeb= $_POST['new_datedeb'];
 $new_codetu = $_POST['new_codetu'];
try{
    //Se connecter à notre base de données
	$database = new PDO("mysql:host=localhost; dbname=gdb; charset=utf8",'root','');
    //$database->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);//voir les erreurs et  nous les avertir
    echo "Modification effectuée avec succès. ";
    $requete = "UPDATE emprunt SET codeliv = ".varchar($new_codeliv).", codetu = ".varchar($new_codetu).",datedeb = ".varchar($new_datedeb).",datefin = ".varchar($datefin).", statutliv= ".varchar($statutliv)." WHERE codeliv = ".varchar($codeliv).",codetu = ".varchar($codetu).",datedeb = ".varchar($datedeb)."";
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






























