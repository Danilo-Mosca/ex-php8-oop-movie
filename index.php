<?php

// creo la classe Movie
class Movie
{
    // variabili d'istanza per l'oggetto Movie:
    public $title;
    public $director;
    public $releaseYear;
    public $rating;
    public $duration;
    public $language;

    // creo il costruttore
    function __construct($_title, $_director, $_releaseYear, $_rating, $_duration, $_language)
    {
        $this->title = $_title;
        $this->director = $_director;
        $this->releaseYear = $_releaseYear;
        $this->rating = $_rating;
        $this->duration = $_duration;
        $this->language = $_language;
    }

    // metodi getter:
    public function getTitle()
    {
        return $this->title;
    }

    public function getDirector()
    {
        return $this->director;
    }

    public function getReleaseYear()
    {
        return $this->releaseYear;
    }

    public function getRating()
    {
        return $this->rating;
    }

    public function getDuration()
    {
        return $this->duration;
    }

    public function getLanguage()
    {
        return $this->language;
    }

    // metodi setter:
    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function setDirector($director)
    {
        $this->director = $director;
    }

    public function setReleaseYear($releaseYear)
    {
        $this->releaseYear = $releaseYear;
    }

    public function setRating($rating)
    {
        $this->rating = $rating;
    }

    public function setDuration($duration)
    {
        $this->duration = $duration;
    }

    public function setLanguage($language)
    {
        $this->language = $language;
    }
}

// istanzio due oggetti movie:
$inception = new Movie("Inception", "Christopher Nolan", 2010, 8.8, 148, "Inglese");
$pulpFiction = new Movie(
    "Pulp Fiction",
    "Quentin Tarantino",
    1994,
    8.9,
    154,
    "Inglese",
);

// stampo a schermo i valori delle due proprietà:
var_dump($inception);
var_dump($pulpFiction);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Collego bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Programmazione orientata agli oggetti OOP in PHP classi pertinenti a Film e generi cinematografici</title>
</head>

<body>

</body>

</html>