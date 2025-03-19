<?php

// Prima importo il trait:
require_once 'Traits/Votes.php';
// Poi importo le classi:
require_once 'Models/Movies.php';
require_once 'Models/Genre.php';


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



// istanzio due oggetti Genre (classe che estende Movie):
$inception = new Genre("Inception", "Christopher Nolan", 2010, 148, "Inglese", ["Sci-Fi"]);
$pulpFiction = new Genre("Pulp Fiction", "Quentin Tarantino", 1994, 154, "Inglese", ["Crime", "Azione"]);
$matrix = new Genre("The Matrix", "Lana & Lilly Wachowski", 1999, 136, "Inglese", ["Sci-Fi", "Azione", "Fantascenza"]);

/* DOPO AVER ASSEGNATO IL TRAITS VOTES ALLA CLASSE MOVIES LO SETTO: */
// Assegno un voto alle istanze (l'attributo vote fa parte del "trait Votes" che è usato nella "classe Movies"):
$inception->setRating(8.8);
$pulpFiction->setRating(8.9);
$matrix->setRating(9.8);

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

            <div class="col-sm-12 col-md-6 col-lg-4 d-flex justify-content-center my-3">
                <div class="card">
                    <div class="card-header text-center">
                        <strong>Film</strong>
                    </div>
                    <ul class="list-group list-group-flush text-center">

                        <li class="list-group-item"><?php echo "Titolo: <strong>" . $inception->getTitle() . "</strong>"; ?></li>
                        <li class="list-group-item"><?php echo "Regista: <strong>" . $inception->getDirector() . "</strong>"; ?></li>
                        <li class="list-group-item"><?php echo "Data di uscita: <strong>" . $inception->getReleaseYear() . "</strong>"; ?></li>
                        <li class="list-group-item"><?php echo "Durata: <strong>" . $inception->getDuration() . "</strong>"; ?></li>
                        <li class="list-group-item"><?php echo "Lingua: <strong>" . $inception->getLanguage() . "</strong>"; ?></li>
                        <li class="list-group-item"><?php echo "Genere: <strong>" . $inception->getGenre() . "</strong>"; ?></li>
                        <li class="list-group-item"><?php echo "Voto: <strong>" . $inception->getRating() . "</strong>"; ?></li>

                    </ul>
                </div>
            </div>

            <div class="col-sm-12 col-md-6 col-lg-4 d-flex justify-content-center my-3">
                <div class="card">
                    <div class="card-header text-center">
                        <strong>Film</strong>
                    </div>
                    <ul class="list-group list-group-flush text-center">

                        <li class="list-group-item"><?php echo "Titolo: <strong>" . $pulpFiction->getTitle() . "</strong>"; ?></li>
                        <li class="list-group-item"><?php echo "Regista: <strong>" . $pulpFiction->getDirector() . "</strong>"; ?></li>
                        <li class="list-group-item"><?php echo "Data di uscita: <strong>" . $pulpFiction->getReleaseYear() . "</strong>"; ?></li>
                        <li class="list-group-item"><?php echo "Durata: <strong>" . $pulpFiction->getDuration() . "</strong>"; ?></li>
                        <li class="list-group-item"><?php echo "Lingua: <strong>" . $pulpFiction->getLanguage() . "</strong>"; ?></li>
                        <li class="list-group-item"><?php echo "Genere: <strong>" . $pulpFiction->getGenre() . "</strong>"; ?></li>
                        <li class="list-group-item"><?php echo "Voto: <strong>" . $pulpFiction->getRating() . "</strong>"; ?></li>

                    </ul>
                </div>
            </div>

            <div class="col-sm-12 col-md-6 col-lg-4 d-flex justify-content-center my-3">
                <div class="card">
                    <div class="card-header text-center">
                        <strong>Film</strong>
                    </div>
                    <ul class="list-group list-group-flush text-center">

                        <li class="list-group-item"><?php echo "Titolo: <strong>" . $matrix->getTitle() . "</strong>"; ?></li>
                        <li class="list-group-item"><?php echo "Regista: <strong>" . $matrix->getDirector() . "</strong>"; ?></li>
                        <li class="list-group-item"><?php echo "Data di uscita: <strong>" . $matrix->getReleaseYear() . "</strong>"; ?></li>
                        <li class="list-group-item"><?php echo "Durata: <strong>" . $matrix->getDuration() . "</strong>"; ?></li>
                        <li class="list-group-item"><?php echo "Lingua: <strong>" . $matrix->getLanguage() . "</strong>"; ?></li>
                        <li class="list-group-item"><?php echo "Genere: <strong>" . $matrix->getGenre() . "</strong>"; ?></li>
                        <li class="list-group-item"><?php echo "Voto: <strong>" . $matrix->getRating() . "</strong>"; ?></li>

                    </ul>
                </div>
            </div>
        </div>
    </div>

</body>

</html>