<?php

require __DIR__ . '/../vendor/autoload.php';


$source = \Rx\Observable::range(0, 5)->delay(1000);

/** @var Generator $generator */
$generator = \Rx\await($source);


echo $generator->current(), PHP_EOL; //0

$generator->next();
echo $generator->current(), PHP_EOL; //1

$generator->next();
echo $generator->current(), PHP_EOL; //2

$generator->next();
echo $generator->current(), PHP_EOL; //3

$generator->next();
echo $generator->current(), PHP_EOL; //4


echo "DONE";
