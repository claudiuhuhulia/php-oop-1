<?php

require __DIR__ . '/models/Actor.php';
require __DIR__ . '/models/Movie.php';

require __DIR__ . '/db/data.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <section id="movies">

        <?php foreach ($films as $movie) : ?>
            <h1>Titolo: <?= $movie['title'] ?></h1>
            <h3>Genere: <?= $movie['genre'] ?></h3>
        <?php endforeach ?>

    </section>


</body>

</html>