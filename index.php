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
}

$movie_1 = new Movie('Titanic', 'Drama', 1);

$movie_2 = new Movie('Madagascar', 'Animation', 2)

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
</head>

<body>

</body>

</html>