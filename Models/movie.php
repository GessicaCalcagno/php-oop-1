<?php

class Movie {
    public string $title;
    public string $date;
    public int $time_duration;
    public string $country;
    private string $genre;

    public function __construct(string $title, string $date, string $time_duration, string $country){
        $this ->  title            = $title;
        $this ->  date             = $date;
        $this ->  time_duration    = $time_duration;
        $this ->  country          = $country;
    }

     public function getgenre(string $genre){

        return $this->genre = $genre;
     }



}