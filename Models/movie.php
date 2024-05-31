<?php
require_once 'genere.php';

class Movie {
    public string $title;
    public string $date;
    public int $time_duration;
    public string $country;
    public Genre $genre;

    public function __construct(string $title, string $date, string $time_duration, string $country, Genre $genre){
        $this ->  title            = $title;
        $this ->  date             = $date;
        $this ->  time_duration    = $time_duration;
        $this ->  country          = $country;
        $this->   genre            = $genre; 
    }


}