<?php

function square_sum($numbers) {
    $result = 0;
    foreach ($numbers as $number) {
        $result += $number * $number;
    }
    return $result;
}

