<?php 

require_once "aula7.php";

$l = array();

$l[0] = new Lutador("Pretty Boy", "França", 31, 1.75, 68.9, 11, 3, 1);

$l[1] = new Lutador("Putscript", "Brasil", 29, 1.68, 57.8, 14, 2, 3);

$l[2] = new Lutador("Snapshadow", "Estados Unidos", 35, 1.65, 80.9, 12, 2, 1);

$l[3] = new Lutador("Dead Code", "Australia", 28, 1.93, 81.6, 13, 0, 2);

$l[4] = new Lutador("Ufocobol", "Brazil", 37, 1.70, 119.3, 5, 4, 3);

$l[5] = new Lutador("Nerdaard", "Estados Unidos", 30, 1.81, 105.7, 12, 2, 4);

$l[3]->perder();
$l[3]->apresentar();
$l[3]->status();

?>