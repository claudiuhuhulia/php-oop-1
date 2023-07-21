<?php

class Movie
{
    public $title;
    public $genre;
    public $id;

    public function __construct($title, $genre, $id)
    {
        $this->title = $title;
        $this->genre = $genre;
        $this->id = $id;
    }
    public function getTitle_Genre()
    {
        return $this->title . '<br><br>' . $this->genre;
    }
    /*     public function getCast(){
        if
    } */
}
