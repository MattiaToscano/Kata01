<?php

function century($year) {
    return ceil($year / 100);
}

// Test con gli esempi del README
echo "Test 1: century(1705) = " . century(1705) . " (atteso: 18)\n";
echo "Test 2: century(1900) = " . century(1900) . " (atteso: 19)\n";
echo "Test 3: century(1601) = " . century(1601) . " (atteso: 17)\n";
echo "Test 4: century(2000) = " . century(2000) . " (atteso: 20)\n";
echo "Test 5: century(2742) = " . century(2742) . " (atteso: 28)\n";
