<?php
require_once __DIR__ . '../models/Actor.php';
require_once __DIR__ . '../models/Movie.php';




$dicaprio = new Actor('Leonardo', 'Di Caprio', 43);
$tom_cruise = new Actor('Tom', 'Cruise', 36);
$lino_banfi = new Actor('Lino', 'banfi', 87);
$jennifer_aniston = new Actor('Jennifer', 'Aniston', 35);
$brad_pit = new Actor('Brad', 'Pit', 46);

$titanic = new Film('Titanic', 'Drama',);
$madagascar = new Film('Madagascar', 'Animation',);
$transfrormes = new Film('Transformers', 'Action',);


$titanic->setCast([$dicaprio, $lino_banfi]);
$madagscar->setCast([$tom_cruise]);
$transfrormes->setCast([$jennifer_aniston, $brad_pit]);

$actors = [$dicaprio, $tom_cruise, $lino_banfi, $jennifer_aniston, $brad_pit];


return $films = [$titanic, $madagascar, $transfrormes];
