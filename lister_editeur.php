<?php 

$pdo = new PDO("mysql:host=localhost; dbname=gdb; charset=utf8",'root','');
$liste = $pdo -> prepare('SELECT * FROM editeur ORDER BY coded');

$editeurs = $liste -> execute();
$list_edi = $liste -> fetchAll();


?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Editeurs</title>
</head>
<body>
    <h1><legend>Liste des editeurs enregistrés </legend></h1>
    <fieldset>
        <table>
             <thead>
                <tr>
                    <th><th>Code </th></th>
                    <th><th>Nom </th></th>
                    <th><th>Pays d'origine </th></th>
                </tr>
             </thead>
                    <tbody>
	                <?php foreach ($list_edi as $row ):?>
	            <tr>
                    <td><td><?php echo htmlspecialchars($row['coded']);?></td></td>
                    <td><td><?php echo htmlspecialchars($row['nomed']);?></td></td>
                    <td><td><?php echo htmlspecialchars($row['pays']);?></td></td>
                </tr>
	                <?php endforeach ?>
                    </tbody>
        </table>
    </fieldset>
           

</body>
<section>
<button><a href="form_editeur.html">Retour au FORMULAIRE EDITEUR</a></button>
<br>
<button><a href="index.html">Retour au Menu </a></button></section>
</html>