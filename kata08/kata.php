<?php

function paperwork(int $n , int $m) : int {
    if($n < 0 || $m < 0)
    {
        return 0;
    }

    else {
        return $n * $m;
    }
}