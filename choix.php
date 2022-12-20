<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>


<!-- Font -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Patrick+Hand&display=swap" rel="stylesheet"> 
<link rel="stylesheet" href="style.css">
    <title>Lancé de dés</title>
</head>
<body>
    <?php
    include 'header.php';

    ?>
    
    <section>
        <div id="choix">
            <h3>Lancé de dé</h3>
            <p>Choisissez votre dé :</p>
            <div>
                <a href="index.php"><button type="submit" class="btn btn-outline-warning ">Dé à 6 faces</button></a>
                <a href="huit.php"><button type="submit" class="btn btn-outline-warning" >Dé à 8 faces</button></a>
                <a href="dix.php"><button type="submit" class="btn btn-outline-warning" >Dé à 10 faces</button></a>
                <a href="vingt.php"><button type="submit" class="btn btn-outline-warning" >Dé à 20 faces</button></a>
                <a href="choix.php"><button type="submit" class="btn btn-outline-warning active" >Au choix</button></a>
            </div>
        </div>

        <form action="choix.php" method="post">
            <label for="exampleInputEmail1" class="form-label" >Valeur maximale du dé :</label>
            <input type="text" class="form-control" name="valeur-de">


            <select class="form-select" name="nombre">
                <option selected>Nombre de dés</option>
                <option value="1">Un</option>
                <option value="2">Deux</option>
                <option value="3">Trois</option>
            </select>
            <button type="submit" class="btn btn-success">Lancer le(s) dé(s)</button>

        </form>

        
        <div class="nombre">
        <?php 
        
        if (isset($_POST['valeur-de'])) {
            $valeur_de = $_POST['valeur-de'];
        }
        
        if (isset($_POST['nombre']) && $_POST['nombre'] == 1) {
                        echo "<p>";
                        echo rand(1, $valeur_de);
                        echo "</p>";
                    }
                    elseif (isset($_POST['nombre']) && $_POST['nombre'] == 2) {
                        for ($i = 1; $i <= 2; $i++) {
                        echo "<p>";
                        echo rand(1, $valeur_de);
                        echo "</p>";
                    }
                    }

                    elseif (isset($_POST['nombre']) && $_POST['nombre'] == 3) {
                        for ($i = 1; $i <= 3; $i++) {
                        echo "<p>";
                        echo rand(1, $valeur_de);
                        echo "</p>";
                    }
                }
                    
                ?>
            </div>
    </section>


    <?php
    include 'footer.php';

    ?>

</body>
</html>