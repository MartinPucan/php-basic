<?php

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

$input = [100=>"red", 'yellow', 2=>"green", 3=>"blue", 4=>"yellow"];
var_dump(array_slice($input, 0, 1)[0]);
var_dump($input);
var_dump(array_merge($input, [124, 125, 125,125,125, 12,5125]));

$a = array_fill(5, 6, 'banana');
$b = array_fill(-2, 4, 'pear');
print_r($a);
print_r($b);
