

<?php

function varchar($variable)
{
    return '"' . $variable . '"';
}

 $codetu = $_POST['codeliv'];
 $codeaut = $_POST['codeaut'];
 $coded = $_POST['coded'];
 $dateliv = $_POST['dateliv'];
 $titreliv = $_POST['titreliv'];
 $new_codeliv = $_POST['new_codeliv'];
try{
    //Se connecter à notre base de données
	$database = new PDO("mysql:host=localhost; dbname=gdb; charset=utf8",'root','');
    //$database->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);//voir les erreurs et  nous les avertir
    echo "Modification effectuée avec succès. ";
    $requete = "UPDATE livre SET codeliv = ".varchar($new_codeliv).", codeaut = ".varchar($codeaut).", coded = ".varchar($coded).", titreliv= ".varchar($titreliv).", dateliv= ".varchar($dateliv)." WHERE codetu = ".varchar($codetu)."";
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






























