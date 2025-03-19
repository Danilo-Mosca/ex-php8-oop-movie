<?php

// creo la classe Genre
class Genre extends Movie
{
    // variabili d'istanza per l'oggetto Genre:
    private $genre = [];     // ora genre è un array quindi posso assegnargli più valori

    // creo il costruttore
    function __construct($_title, $_director, $_releaseYear, $_duration, $_language, $_genre)
    {
        // richiamo il costruttore genitore (Movie) e gli passo i parametri richiesti per istanziare una sua classe
        parent::__construct($_title, $_director, $_releaseYear, $_duration, $_language);

        // assegno un valore all'attributo $genre (specifico della classe Genre):
        $this->genre = $_genre;
    }

    // metodi getter:
    public function getGenre()
    {
        // PER OTTENERE TUTTI I VALORI DELL'ARRAY genre DEVO CICLARE QUEST'ULTIMO E CONTATENARE TUTTI I SUOI VALORI AD UNA VARIABILE, PER FARE QUESTO ESEGUO I SEGUENTI STEP:

        // prima assegno ad una variabile di appoggio "$values" i valori di tutti i generi presenti nell'array (inizializzandola a vuota ''):
        $values = '';
        // poi assegno ad una variabile di appoggio di nome $length la lunghezza dell'array $genre[], attraverso la funzione count() che ritorna il numero degli elementi in un array:
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
