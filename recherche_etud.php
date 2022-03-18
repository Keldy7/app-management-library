
<?php 
    

    
$pdo = new PDO("mysql:host=localhost; dbname=gdb; charset=utf8",'root','');
$req = 'SELECT * FROM etudiant ORDER BY nometu ASC';
$etudiants = $pdo -> query($req);
if (isset($_GET['nometu']) AND !empty($_GET['nometu'])){
    $recherche = htmlspecialchars($_GET['nometu']);
    $etudiants = $pdo -> query('SELECT * FROM etudiant WHERE nometu LIKE "%'.$recherche.'%" ORDER BY nometu ASC '); 
}
    
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Rechercher des etudiants</title>
</head>
<body>
    <form method="GET">
    <fieldset>
        <legend>Rechercher un etudiant</legend>
            <label for="nometu">Nom de l'etudiant</label>
            <input type="search" name="nometu" placeholder="Ex:Aka" autocomplete="off">
            <br><br>
            <input type="submit" value="Rechercher">
    </fieldset>
    </form>
    <section class="afficher">
    <table>
    <thead>
        <tr>
            <th><th>Matricule</th></th>
            <th><th>Nom </th></th>
            <th><th>Prenom(s) </th></th>
            <th><th>Sexe </th></th>
            <th><th>Téléphone </th></th>
        </tr>
        </thead>
        <?php
            if ($etudiants -> rowCount() > 0){
                while ($etud = $etudiants -> fetch()){
                    ?>
                    <tr>
                    <td><td><?= $etud['codetu']; ?></td></td>
                    <td><td><?= $etud['nometu']; ?></td></td>
                    <td><td><?= $etud['prenometu']; ?></td></td>
                    <td><td><?= $etud['sexe']; ?></td></td>
                    <td><td><?= $etud['cel']; ?></td></td>
                    </tr>
                    <?php
                }
            }else{
                ?>
                <p>Aucun etudiant trouvé</p>
                <?php
            }   
        ?>

    </section>
    <section>
    <button><a href="form_etudiant.html">Retour au FORMULAIRE ETUDIANT</a></button>
    <br>
    <button><a href="index.html">Retour au Menu </a></button></section>

</body>
</html>