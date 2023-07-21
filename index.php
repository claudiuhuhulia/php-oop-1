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
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
</head>

<body>
    <section id="movies">

    </section>
</body>

</html>