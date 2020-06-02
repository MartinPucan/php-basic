<?php

require 'App/functions/dump.php';

$drc = $_SERVER['DOCUMENT_ROOT'];
var_dump($drc);

$array = [
    'else',
    'non',
    'good',
    'great',
    'great',
    'non',
];

$result = array_unique($array);
var_dump($result);

$input = [100=>'red', 'yellow', 2=>'green', 3=>'blue', 4=>'yellow'];
var_dump(array_slice($input, 0, 1)[0]);
var_dump($input);
var_dump(array_merge($input, [124, 120, 128, 125]));

$bananas = array_fill(5, 4, 'banana');
$pears = array_fill(2, 4, 'pear');
print_r($bananas);
print_r($pears);

function show_Spanish($n, $m)
{
    return "The number {$n} is called {$m} in Spanish";
}

function map_Spanish($n, $m)
{
    return [$n => $m];
}

$numbers = [1, 2, 3, 4, 5];
$words = ['uno', 'dos', 'tres', 'cuatro', 'cinco'];

$newNumbers = array_map('show_Spanish', $numbers, $words);
// dd($newNumbers);

$newWords = array_map('map_Spanish', $numbers , $words);
// dd($newWords);
