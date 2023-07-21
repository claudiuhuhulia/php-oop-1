<?php

include __DIR__ . './models/movie.php';
include __DIR__ . './db/movies.php'

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
        <?php foreach ($movies as $movie) : ?>
            <h1>Titolo: <?= $movie['title'] ?></h1>
            <h3>Genere: <?= $movie['genre'] ?></h3>
        <?php endforeach ?>
    </section>
</body>

</html>