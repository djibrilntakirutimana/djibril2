<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Section</title>
    <link rel="stylesheet"href="styles.css">
</head>
<body>
    <?php
    include"header.php";
    ?>
  <h2>Section</h2>
    <form action="Section.php"method="POST">
        <label>Nom:</label><br>
        <input type="text"name="nom"required><br>
        <label>Annee:</label><br>
        <input type="text"name="annee"required><br>
       
        
        <button type="submit">Ajouter</button>
        <button type="submit">Modifier</button>
        <button type="submit">Visualiser</button>
        


    </form> 
</body>
</html>