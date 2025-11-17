<?php

function lovefunc($flower1, $flower2) : bool{
    return ($flower1 % 2 == 0 && $flower2 % 2 == 1) || ($flower1 % 2 == 1 && $flower2 % 2 == 0);
}