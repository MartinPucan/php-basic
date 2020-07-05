<?php

$ids = range(6, 70);

// print_r($ids);
for ($id = 6; $id <= 40; $id++) {

    $kilometer = rand(90000, 230000);
    $price = rand(100000, 700000);
    $name = "";
    $year = rand(2009, 2019);
    $fuelType = "Diesel";
    $brandId = 1;
    if ($id > 15) {
        $name = "BMW";
        $brandId = 4;
        if ($id & 1) {
            $fuelType = "Benzine";
        }
    }

    if ($id > 25) {
        $name = "Mercedes";
        $fuelType = "Benzine";
        $brandId = 5;
        if ($id & 1) {
            $fuelType = "Diesel";
        }
    }

    echo "(" . $id . ", '" . $name . "', " . $price . ", " . $kilometer . ", " . $year . ", '" . $fuelType . "', " . $brandId . "),<br>";
}
