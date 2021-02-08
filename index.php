<?php

// TODO n'oubliez pas de créer votre classe dans le dossier classes.

include "./class.php";

$str1 = new StrUtils("Une chaîne de caractère !");

$str1->bold($str1);
echo "<br>";
$str1->ital($str1);
echo "<br>";
$str1->underline($str1);
$str1->caps($str1);
$str1->uglify($str1);