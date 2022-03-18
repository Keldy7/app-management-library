<?php 

$pdo = new PDO("mysql:host=localhost; dbname=gdb; charset=utf8",'root','');
$liste = $pdo -> prepare('SELECT * FROM livre ORDER BY codeliv');

$livres = $liste -> execute();
$list_liv = $liste -> fetchAll();


?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Livres</title>
</head>
<body>
    <h1><legend>Liste des livres enregistrés </legend></h1>
    <fieldset>
        <table>
         <thead>
            <tr>
                <th><th>Code du livre </th></th>
                <th><th>Matricule de l'auteur </th></th>
                <th><th>Matricule de l'editeur </th></th>
                <th><th>Titre du livre </th></th>
                <th><th>Date de parution </th></th>
            </tr>
         </thead>
                <tbody>
                <?php foreach ($list_liv as $row ):?>
            <tr>
                <td><td><?php echo htmlspecialchars($row['codeliv']);?></td></td>
                <td><td><?php echo htmlspecialchars($row['codeaut']);?></td></td>
                <td><td><?php echo htmlspecialchars($row['coded']);?></td></td>
                <td><td><?php echo htmlspecialchars($row['titreliv']);?></td></td>
                <td><td><?php echo htmlspecialchars($row['dateliv']);?></td></td>
            </tr>
    
	            <?php endforeach ?>
                </tbody>
        </table>
                    
    </fieldset>
            
    
        <button><a href="form_livre.html" >Retour au FORMULAIRE LIVRE</a></button>
        <br>
        <button><a href="index.html">Retour au Menu </a></button>
    
</body>

</html>