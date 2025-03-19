<?php

// istanzio tre oggetti Genre (classe che estende Movie) e li assegno all'array films:
$films = [
    new Genre("Inception", "Christopher Nolan", 2010, 148, "Inglese", "Inception è un film di Christopher Nolan in cui un ladro di sogni (Leonardo DiCaprio) deve impiantare un'idea nella mente di qualcuno, sfidando i confini tra realtà e sogno.", ["Sci-Fi"]),

    new Genre("Pulp Fiction", "Quentin Tarantino", 1994, 154, "Inglese", "Pulp Fiction di Quentin Tarantino è un cult movie che intreccia storie di gangster, pugili e criminali con dialoghi brillanti, violenza stilizzata e una struttura narrativa non lineare.", ["Crime", "Azione"]),
    
    new Genre("The Matrix", "Lana & Lilly Wachowski", 1999, 136, "Inglese", "The Matrix è un film di fantascienza in cui un hacker, Neo (Keanu Reeves), scopre che la realtà è una simulazione creata dalle macchine e si unisce alla resistenza per combatterle.", ["Sci-Fi", "Azione", "Fantascenza"])
];

/* DOPO AVER ASSEGNATO IL TRAITS VOTES ALLA CLASSE MOVIES LO SETTO: */
// Assegno un voto alle istanze (l'attributo vote fa parte del "trait Votes" che è usato nella "classe Movies"):
$films[0]->setRating(8.8);
$films[1]->setRating(8.9);
$films[2]->setRating(9.8);
