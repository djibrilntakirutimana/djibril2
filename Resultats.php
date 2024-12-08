<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultats</title>
    <link rel="stylesheet"href="styles.css">
</head>
<body>
    <?php
    include"connexion.php";
    include"header.php";
    $affichageRecl = $bdd->query("Select * from resultats");
    ?>
    <?php
    
    $pdo = new PDO('mysql:host=localhost;dbname=orientation_bd;charset=utf8', 'root', '');
        
    ?>
    
    <h1>inscrivez-vous</h1>
    <meta charset="utf_8"/>
    </head>
    <body>
    
    <form method="POST" action="">
    <table>
    
    
    <tr> <th>id_etudiant</th>
    <td> <input type="text" name="id_etudiant"/> </td>
    </tr>
    <tr> <th>concours</th>
    <td> <input type="text" name="concours"/> </td>
    </tr>
    <tr> <th>note</th>
    <td> <input type="text" name="note"/> </td>
    </tr>
    <tr> <th>rang</th>
    <td> <input type="text" name="rang"/> </td>
    </tr>
    <tr> <th> </th>
    <td> <input type="submit" name="envoyer" value ="s'inscrire"/>
       <input type="reset" value="supprimer"/>
       </td>
     </tr>
     </table>
     </from>
    
    </body>
    </html>
    <?php
    if(isset($_POST["envoyer"]))
    {
    //$recupId=$_POST["numero_resultats"];
    $recupetud=$_POST["id_etudiant"];
    $recupconc=$_POST["concours"];
    $recupnot=$_POST["note"];
    $recuprang=$_POST["rang"];
    $Insertionresultats ="INSERT INTO resultats (id_etudiant,concours,note,rang) VALUES('$recupetud','$recupconc','$recupnot','$recuprang')";
    $bdd->exec($Insertionresultats);
    
    }
    ?>
    <h1>Affichage</h1>
            <table  border="1" cellpadding="1" cellspacing="1" align="center" bgcolor = "white">
                <tr>
                    <th>id_etudiant</th>
                    <th>concours</th>
                    <th>note</th>
                    <th>rang</th>
                    
    
                    
                </tr>
                <?php 
                    while ( $resultatsRecup = $affichageRecl->fetch()) {         
                ?>
                    <tr>
                        <td ><?php echo $resultatsRecup ["id_etudiant"]; ?></td>
                        <td><?php echo $resultatsRecup ["concours"]; ?></td>
                         <td><?php echo $resultatsRecup ["note"]; ?></td>
                        <td><?php echo $resultatsRecup ["rang"]; ?></td>
                        
                    </tr>
                <?php } ?>
            </table>
  <h2>resultats</h2>
    <form action="resultats.php"method="POST">
        <label>Etudiant:</label><br>
        <input type="text"name="etudiant"required><br>
        <label>Annee de Concours:</label><br>
        <input type="text"name="prenom"required><br>
        <label>Note:</label><br>
        <input type="text"name="note"required><br>
        <label>Place:</label><br>
        <input type="rang"name="rang"required><br>
        
        <button type="submit">Ajouter</button>
        <button type="submit">Modifier</button>
        <button type="submit">Visualiser</button>
        


    </form> 
</body>
</html>