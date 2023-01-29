<?php
require 'models/stagiaire.php';


$stagiaire = new Stagiaire();

$stagiaire->delete(3);
var_dump ($stagiaire->edit(2));
$stagiaire->setPassword(12);
$stagiaire->setAge(88);





?>