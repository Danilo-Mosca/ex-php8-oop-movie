<?php

// Mi creo un trait di tipo Votes. Con i traits (tratti) abbiamo la possibilità di dare a delle classi delle eredità parziali, cioè assegnare a determinate classi solo dei metodi e delle proprietà precise, che permettono a quella classe di avere un'ulteriore caratteristica
trait Votes
{
    protected $rating;

    // metodo setter:
    public function setRating($rating) {
        $this->rating = $rating;
    }

    // metodo getter:
    public function getRating()
    {
        return $this->rating;
    }
}
