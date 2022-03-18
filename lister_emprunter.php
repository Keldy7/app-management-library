<?php 

$pdo = new PDO("mysql:host=localhost; dbname=gdb; charset=utf8",'root','');
$liste = $pdo -> prepare('SELECT * FROM emprunt ORDER BY codeliv');

$emprunts = $liste -> execute();
$list_emp = $liste -> fetchAll();


?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Emprunts</title>
</head>
<body>
    <h1><legend>Liste des emprunts </legend></h1>
    <fieldset>
        <table>
         <thead>
            <tr>
                <th><th>Code du livre </th></th>
                <th><th>Date de début </th></th>
                <th><th>Matricule de l'etudiant </th></th>
                <th><th>Date de fin</th></th>
                <th><th>Rendu/Non-rendu</th></th>
            </tr>
         </thead>
                <tbody>
	            <?php foreach ($list_emp as $row ):?>
	        <tr>
                <td><td><?php echo htmlspecialchars($row['codeliv']);?></td></td>
                <td><td><?php echo htmlspecialchars($row['datedeb']);?></td></td>
                <td><td><?php echo htmlspecialchars($row['codetu']);?></td></td>
                <td><td><?php echo htmlspecialchars($row['datefin']);?></td></td>
                <td><td><?php echo htmlspecialchars($row['statutliv']);?></td></td>
	        </tr>
	            <?php endforeach ?>
                </tbody>
        </table>
    </fieldset>        

</body>
<section>
<button><a href="form_emprunter.html">Retour au FORMULAIRE EMPRUNT</a></button>
<br>
<button><a href="index.html">Retour au Menu </a></button></section>
</html>