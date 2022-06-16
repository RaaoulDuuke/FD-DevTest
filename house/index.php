<?php 
require_once('./models/MyHouse.php'); 
require_once('./models/MyHouse1.php'); 
require_once('./models/MyHouse2.php'); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/css/style.css">
    <title>My House</title>
</head>
<body>
    
    <header class="header">
        <h1>Maisons bleues et maisons vertes</h1>
    </header>
    <main class="container">
        <form action="" method="POST">
            <div>
                <label for="blue">Combien voulez-vous de maison en bleu ?</label>
                <input type="number" id="blue" name="blue">
            </div>
            <div>
                <label for="green">Combien voulez-vous de maison en vert ?</label>
                <input type="number" id="green" name="green">
            </div>
            <input type="submit" value="Enregistrer">
        </form>
        <?php
		if (isset($_POST['blue']) && !empty($_POST['blue']) && isset($_POST['green']) && !empty($_POST['green']) ) {
            // Partage des données entre myhouse1 et myhouse2 sans que le paramètre size soit obligatoire (création d'un nouvel objet)
        }
        ?>
    </main>
    <script src="./public/js/script.js"></script>
</body>
</html>