
<?php 
    

    
    $pdo = new PDO("mysql:host=localhost; dbname=gdb; charset=utf8",'root','');
    $req = 'SELECT * FROM livre ORDER BY titreliv ASC';
    $livres = $pdo -> query($req);
    if (isset($_GET['titreliv']) AND !empty($_GET['titreliv'])){
        $recherche = htmlspecialchars($_GET['titreliv']);
        $livres = $pdo -> query('SELECT * FROM livre WHERE titreliv LIKE "%'.$recherche.'%" ORDER BY titreliv ASC '); 
    }
        
    ?>
    <!DOCTYPE html>
    <html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="styles.css">
        <title>Rechercher des livres</title>
    </head>
    <body>
        <form method="GET">
        <fieldset>
            <legend>Rechercher un livre</legend>
                <label for="titreliv">Titre du livre</label>
                <input type="search" name="titreliv" placeholder="Ex:La poupée" autocomplete="off">
                <br><br>
                <input type="submit" value="Rechercher">
        </fieldset>
        </form>
        <section class="afficher">
        <table>
        <thead>
            <tr>
                <th><th>Code du livre</th></th>
                <th><th>Code de l'auteur</th></th>
                <th><th>Code de l'editeur</th></th>
                <th><th>Titre du livre</th></th>
                <th><th>Date de parution</th></th>
            </tr>
            </thead>
            <?php
                if ($livres -> rowCount() > 0){
                    while ($liv = $livres -> fetch()){
                        ?>
                        <tr>
                        <td><td><?= $liv['codeliv']; ?></td></td>
                        <td><td><?= $liv['codeaut']; ?></td></td>
                        <td><td><?= $liv['coded']; ?></td></td>
                        <td><td><?= $liv['titreliv']; ?></td></td>
                        <td><td><?= $liv['dateliv']; ?></td></td>
                        </tr>
                        <?php
                    }
                }else{
                    ?>
                    <p>Aucun livre trouvé</p>
                    <?php
                }   
            ?>
    
        </section>
        <section>
        <button><a href="form_livre.html">Retour au FORMULAIRE LIVRE</a></button>
        <br>
        <button><a href="index.html">Retour au Menu </a></button></section>
    
    </body>
    </html>