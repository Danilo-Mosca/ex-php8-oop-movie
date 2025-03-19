<?php

// Prima importo il trait:
require_once 'Traits/Votes.php';

// Poi importo le classi:
require_once 'Models/Movies.php';
require_once 'Models/Genre.php';

// importo gli array di oggetti che conterranno i dati:
require_once './db.php';



// -------------------------------- PROVE PRIMA DEL LAYOUT --------------------------------

// istanzio due oggetti Genre (classe che estende Movie):
// $inception = new Genre("Inception", "Christopher Nolan", 2010, 148, "Inglese", ["Sci-Fi"]);
// $pulpFiction = new Genre("Pulp Fiction", "Quentin Tarantino", 1994, 154, "Inglese", ["Crime", "Azione"]);

/* DOPO AVER ASSEGNATO IL TRAITS VOTES ALLA CLASSE MOVIES LO SETTO: */
// Assegno un voto alle istanze (l'attributo vote fa parte del "trait Votes" che è usato nella "classe Movies"):
// $inception->setRating(8.8);
// $pulpFiction->setRating(8.9);

// Ora lo visualizzo singolarmente:
// echo "<strong>Visualizzo il traits di Votes con la classe getRating():</strong><br>";
// echo "Rating Inception: <strong>" . $inception->getRating() . "</strong><br>";
// echo "Rating Pulp Fiction: <strong>" . $pulpFiction->getRating() . "</strong><br>";
/* ------------------------------ FINE TRAITS ------------------------------ */

// stampo a schermo i valori di entrambi gli oggetti con var_dump():
// var_dump($inception);
// var_dump($pulpFiction);

// stampo a schermo il singolo valore genre (specifico della classe Genre):
// echo "------------------<br><strong>Valore 'genre' specifico dell'oggetto/istanza della classe Genre con metodo getGenre():</strong><br>";
// echo "<br>Genere Inception: " . $inception->getGenre() . "<br>";
// echo "<br>Genere Pulp Fiction: " . $pulpFiction->getGenre() . "<br>";
// echo "------------------<br>";

// stampo a schermo i valori degli attributi dell'istanza richiamando la funzione getInfoMovieWithGenre():
// echo "<br><strong>Valore 'genre' specifico dell'oggetto/istanza della classe Genre con metodo getInfoMovieWithGenre():</strong><br>";
// echo "<br>------------------<br>" . $inception->getInfoMovieWithGenre();
// echo "<br>------------------<br>" . $pulpFiction->getInfoMovieWithGenre();

// -------------------------------- FINE PROVE PRIMA DEL LAYOUT --------------------------------

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Collego bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Collego il file css -->
    <link rel="stylesheet" href="css/style.css">

    <title>Programmazione orientata agli oggetti OOP in PHP</title>
</head>

<body>

    <h1 class="text-center pt-3 mb-5">Film e generi cinematografici</h1>

    <div class="container">
        <div class="row">

            <?php
            foreach ($films as $film) {
            ?>

                <div class="col-sm-12 col-md-6 col-lg-4 d-flex justify-content-center my-3">
                    <div class="card">
                        <div class="card-header text-center">
                            <strong>Film</strong>
                        </div>

                        <ul class="list-group list-group-flush text-center">
                            <li class="list-group-item"><?php echo "Titolo: <strong>" . $film->getTitle() . "</strong>"; ?></li>
                            <li class="list-group-item"><?php echo "Regista: <strong>" . $film->getDirector() . "</strong>"; ?></li>
                            <li class="list-group-item"><?php echo "Anno di uscita: <strong>" . $film->getReleaseYear() . "</strong>"; ?></li>
                            <li class="list-group-item"><?php echo "Durata: <strong>" . $film->getDuration() . "</strong> min"; ?></li>
                            <li class="list-group-item"><?php echo "Descrizione:<br><strong>" . $film->getLanguage() . "</strong>"; ?></li>
                            <li class="list-group-item"><?php echo "Lingua originale: <strong>" . $film->getDescription() . "</strong>"; ?></li>
                            <li class="list-group-item"><?php echo "Genere: <strong>" . $film->getGenre() . "</strong>"; ?></li>
                            <li class="list-group-item"><?php echo "Voto: <strong>" . $film->getRating() . "</strong>"; ?></li>
                        </ul>

                    </div>
                </div>
            <?php
            }
            ?>

        </div>
    </div>

</body>

</html>