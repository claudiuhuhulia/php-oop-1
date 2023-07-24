<?php
require_once __DIR__ . './Actor.php';
class Film
{

    public $title;
    public $genre;
    private array $cast;

    public function __construct($title, $genre,)
    {
        $this->title = $title;
        $this->genre = $genre;
    }

    public function setCast(array $actors)
    {
        $this->cast = $actors;
    }

    public function getCast()
    {
        return $this->cast;
    }
}
