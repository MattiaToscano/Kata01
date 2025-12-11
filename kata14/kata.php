<?php

function solution($str, $ending){
    if ($ending ===""){
        return true;
    }
    return substr($str, -strlen($ending)) === $ending;
}