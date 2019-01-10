<?php

require_once 'classes.php';

$invent = new Invent('Колесо');
$contract = new Contract('Договор аренды');


$layer = new Layer('Боб', 'Чепески', '80', '185', [$invent]);
$scientist = new Scientist('Тёрман', 'Мёрман', '80', '165', [$contract]);

//echo $layer->getFullName();
$contract = $layer->makeContract();
$technology = $scientist->inventTechnology();

$nation = new Nation();
$nation->add($layer);
$nation->add($scientist);
$nation->remove($layer);
echo $nation->getFullInfo($layer);
//
//echo $nation->getFullInfoAboutAllPopulation();
