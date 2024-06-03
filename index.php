<?php
// importiamo le classi
require_once __DIR__ . "/Models/genere.php";
require_once __DIR__ . "/Models/movie.php";

// Creazione di oggetti Genere
$genereAzione = new Genre("Azione");
$genereCommedia = new Genre("Commedia");

//senza setter questa azione mi dà errore
// $genereAzione -> setName("Pippo");
//Creo prima istanza

$movie1 = new Movie("Magic Mike", "USA", 110, "2012", $genereCommedia);
$movie2 = new Movie("Barbie", "USA", 114, "2023", $genereAzione);

var_dump($movie1);
var_dump($movie2);

 //echo 