<?php

require_once 'Personne.php';
require_once 'AfficheurDePersonne.php';

$p1 = new Personne("Aimarre");
$p2 = new Personne("Netta");

echo $p1 . "<br>";
echo $p2 . "<br>";

echo "==============================================<br>";

$afficheur = new AfficheurDePersonne($p1);
echo $afficheur -> vueCourte();
echo $afficheur -> vueDetail();

echo "==============================================<br>";

$p1 -> age = 100;
$p1 -> compter();

$p2 -> punir("Je n'imiterai plus Yolande en cours",100);

echo "==============================================<br>";

echo $p1 -> ageFutur(2030);