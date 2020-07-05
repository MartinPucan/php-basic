<?php

$myArray = [
    'courseId' => '303',
    'courseName' => 'PHP',
    'duratuon' => '6 Months',
    'length' => '7 months'
];


function dd($value)
{
    echo '<pre>';
        die(var_dump($value));
    echo '</pre>';
}

dd($myArray);

//echo $output;