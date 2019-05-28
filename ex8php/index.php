<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="script.css">
    <title>Ex8 php</title>
</head>
<body>
    <div class="container text-center">

        <h1 class="jumbotron">Créer 3 variables.
            Dans la première mettre le résultat de l'opération 3 + 4.
            Dans la deuxième mettre le résultat de l'opération 5 * 20.
            Dans la troisième mettre le résultat de l'opération 45 / 5.
            Afficher le contenu des variables.</h1>


            <?php
            $addition= 3 + 4;
            $multiplication= 5 * 20;
            $division= 45 / 5;
            echo "<p>3 + 4 = $addition</p>";
            echo "<p>5 * 20 = $multiplication</p>";
            echo "<p>45 / 5 = $division</p>";
            ?>



        </div>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    </body>
    </html>
