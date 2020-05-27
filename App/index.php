<?php

$timeZone = 'Europe/Prague';
date_default_timezone_set($timeZone);


//$date = date_create();

$tomorrow  = mktime(0, 0, 0, date("m")  , date("d")+1, date("Y"));
$lastMonth = mktime(0, 0, 0, date("m")-1, date("d"),   date("Y"));
$nextYear  = mktime(0, 0, 0, date("m"),   date("d"),   date("Y")+1);

echo($tomorrow) . '<br>';
echo($lastMonth) . '<br>';
echo($nextYear) . '<br>';

$datetime1 = new DateTime('2009-10-11');
$datetime2 = new DateTime('2009-10-15');
$interval = $datetime1->diff($datetime2);

echo $interval->format('%R%a days') . "<br>";

$date1 = new DateTime("now");
$date2 = new DateTime("tomorrow");

if ($date1 != $date2) {
    echo('what the fuck is this?'.PHP_EOL.PHP_OS.PHP_EOL);
} else {
    echo('Everything is ok'. PHP_EOL);
}
var_dump($date1 < $date2);
echo('<br>');
print_r($date1);
print_r($date2);
var_dump($date1 > $date2);

var_dump($_SERVER['DOCUMENT_ROOT']);
