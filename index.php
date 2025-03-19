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

    // Stampo a schermo le informazioni del film:
    public function getInfoMovie()
    {
        return "Titolo: " . $this->title
            . "<br>Regista: " . $this->director
            . "<br>Anno di uscita: " . $this->releaseYear
            . "<br>Voto: " . $this->rating
            . "<br>Durata film: " . $this->duration
            . "<br>Lingua film: " . $this->language;
    }
}

// creo la classe Genre
class Genre extends Movie
{
    // variabili d'istanza per l'oggetto Genre:
    public $genre = [];     // ora genre è un array quindi posso assegnargli più valori

    // creo il costruttore
    function __construct($_title, $_director, $_releaseYear, $_rating, $_duration, $_language, $_genre = [])
    {
        // richiamo il costruttore genitore (Movie) e gli passo i parametri richiesti per istanziare una sua classe
        parent::__construct($_title, $_director, $_releaseYear, $_rating, $_duration, $_language);

        // assegno un valore all'attributo $genre (specifico della classe Genre):
        $this->genre = $_genre;
    }

    // metodi getter:
    public function getGenre()
    {
        // PER OTTENERE TUTTI I VALORI DELL'ARRAY genre DEVO CICLARE QUEST'ULTIMO E CONTATENARE TUTTI I SUOI VALORI AD UNA VARIABILE, PER FARE QUESTO ESEGUO I SEGUENTI STEP:

        // prima assegno ad una variabile di appoggio "$values" i valori di tutti i generi presenti nell'array (inizializzandola a vuota ''):
        $values = '';
        // poi assegno ad una variabile di appoggio di nome $length la lunghezza dell'array $genre[]:
        $length = count($this->genre);
        // Poi devo ciclare nell'array genre con un for, un while, un do...while o un foreach, in questo caso utilizzo il for:
        for ($i = 0; $i < $length; $i++) {
            // ora assegno concatenando tutti i valori contenuti nell'attributo genre alla variabile $values:
            $values .= $this->genre[$i];

            // Infine controllo se il contatore $i è minore di soltanto 1 valore della lunghezza di length - 1 e in tal caso aggiungo un separatore, nel momento in cui in contatore $i sarà uguale a length-1 significa che il ciclo sta per terminare e che non ci sono più generi da aggiungere alla variabile $values, quindi non ho bisogno di aggiungere altri separatori:
            if ($i < $length - 1) {
                $values .= " - ";
            }
        }
        
        // Infine ritorno la variabile $values con tutti i suoi valori:
        return $values;
    }

    // metodi setter:
    public function setGenre($genre)
    {
        $this->genre = $genre;
    }

    // stampo a schermo le informazioni del film e il genere:
    public function getInfoMovieWithGenre()
    {
        return "Titolo: " . $this->title
            . "<br>Regista: " . $this->director
            . "<br>Anno di uscita: " . $this->releaseYear
            . "<br>Genere: " . $this->getGenre()
            . "<br>Voto: " . $this->rating
            . "<br>Durata film: " . $this->duration
            . "<br>Lingua film: " . $this->language;
    }
}

// istanzio due oggetti movie:
// $inception = new Movie("Inception", "Christopher Nolan", 2010, "Sci-Fi", 8.8, 148, "Inglese");
// $pulpFiction = new Movie("Pulp Fiction", "Quentin Tarantino", 1994, "Crime", 8.9, 154, "Inglese");

// istanzio due oggetti Genre (classe che estende Movie):
$inception = new Genre("Inception", "Christopher Nolan", 2010, 8.8, 148, "Inglese", ["Sci-Fi"]);
$pulpFiction = new Genre("Pulp Fiction", "Quentin Tarantino", 1994, 8.9, 154, "Inglese", ["Crime", "Azione"]);

// stampo a schermo i valori di entrambi gli oggetti con var_dump():
var_dump($inception);
var_dump($pulpFiction);

// stampo a schermo il singolo valore genre (specifico della classe Genre):
echo "------------------<br><strong>Valore 'genre' specifico dell'oggetto/istanza della classe Genre:</strong><br>";
echo $inception->getGenre();
echo $pulpFiction->getGenre();


// Mentre inception posso visualizzarlo tranquillamente senza ciclo perchè possiede un solo genre:
echo "<br>Genere Inception: " . $inception->getGenre() . "<br>";
echo "------------------<br>";

// stampo a schermo i valori degli attributi dell'istanza richiamando la funzione getInfoMovieWithGenre():
echo "<br>------------------<br>" . $inception->getInfoMovieWithGenre();
echo "<br>------------------<br>" . $pulpFiction->getInfoMovieWithGenre();

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