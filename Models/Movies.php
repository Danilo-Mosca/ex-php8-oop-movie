<?php

// creo la classe Movie
class Movie
{
    // variabili d'istanza per l'oggetto Movie:
    public $title;
    public $director;
    public $releaseYear;
    public $duration;
    public $language;
    public $description;

    // con l'istruzione: use Nome_Traits specifico che la "classe Movies" deve utilizzare il trait "Votes":
    use Votes;

    // creo il costruttore
    function __construct($_title, $_director, $_releaseYear, $_duration, $_language, $_description)
    {
        $this->title = $_title;
        $this->director = $_director;
        $this->releaseYear = $_releaseYear;
        $this->duration = $_duration;
        $this->language = $_language;
        $this->description = $_description;
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

    public function getDuration()
    {
        return $this->duration;
    }

    public function getLanguage()
    {
        return $this->language;
    }

    public function getDescription() {
        return $this->description;
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
    
    public function setDuration($duration)
    {
        $this->duration = $duration;
    }

    public function setLanguage($language)
    {
        $this->language = $language;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    // Stampo a schermo le informazioni del film:
    public function getInfoMovie()
    {
        return "Titolo: " . $this->title
            . "<br>Regista: " . $this->director
            . "<br>Anno di uscita: " . $this->releaseYear
            . "<br>Voto: " . $this->getRating()
            . "<br>Durata film: " . $this->duration
            . "<br>Lingua film: " . $this->language;
    }
}
