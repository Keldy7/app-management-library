<?php 

$pdo = new PDO("mysql:host=localhost; dbname=gdb; charset=utf8",'root','');
$liste = $pdo -> prepare('SELECT * FROM etudiant ORDER BY nometu');

$etudiants = $liste -> execute();
$list_etu = $liste -> fetchAll();


?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Liste des etudiants</title>
</head>
<body>
    <h1><legend>Liste des étudiants </legend></h1>
    <fieldset>
        <table>
         <thead>
            <tr>
                <th><th>Matricule </th></th>
                <th><th>Nom </th></th>
                <th><th>Prénom(s) </th></th>
                <th><th>Sexe  </th></th>
                <th><th>Téléphone </th></th>
                <th><th>Photo </th></th>
            </tr>
         </thead>
                <tbody>
	            <?php foreach ($list_etu as $row ):?>
                    <tr>
                    <td><td><?php echo htmlspecialchars($row['codetu']);?></td></td>
                    <td><td><?php echo htmlspecialchars($row['nometu']);?></td></td>
                    <td><td><?php echo htmlspecialchars($row['prenometu']);?></td></td>
                    <td><td><?php echo htmlspecialchars($row['sexe']);?></td></td>
                    <td><td><?php echo htmlspecialchars($row['cel']);?></td></td>
                    <td><td><?php echo htmlspecialchars($row['photoetu']);?></td></td>
                    </tr>
                <?php endforeach ?>
                </tbody>
        </table>
    </fieldset>
</body>
<section>
    <button><a href="form_etudiant.html">Retour au FORMULAIRE ETUDIANT</a></button>
    <br>
    <button><a href="index.html">Retour au Menu </a></button></section>
</html>