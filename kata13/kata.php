<?php

function nb_year($p0, $percent, $aug, $p){
    $years = 0;
    $population = $p0;

    while ($population < $p){
        $population = floor($population + ($population * $percent / 100) + $aug);
        $years++;
    }
    return $years;
}