<?php
function highAndLow($numbers){
    $numbersArray = explode(" ", $numbers);
    $max = max($numbersArray);
    $min = min($numbersArray);
    
    return "$max $min";
}