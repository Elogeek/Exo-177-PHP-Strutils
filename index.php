<?php

// TODO n'oubliez pas de créer votre classe dans le dossier classes.

include "./class.php";

$str1 = new StrUtils("Une chaîne de caractère !");

//bold
$str1->bold($str1);

//italique
$str1->ital($str1);

//texte souligné
$str1->underline($str1);

//1 lettre en majuscule
$str1->caps($str1);

//en 1 * (gras, italique,souligné)

$str1->uglify($str1);

//tout en majuscule
$str1->uppercase($str1);
