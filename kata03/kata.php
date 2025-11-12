<?php 

function countBy($x, $n){
    $result = [];

    for ($i = 1; $i <= $n; $i++){
         $result[] = $x * $i;
    }
      
    return $result;
}


//Testiamo la funzione
echo "Test 1: countBy(1, 10)\n";
print_r(countBy(1, 10));

echo "\nTest 2: countBy(2, 5)\n";
print_r(countBy(2, 5));

echo "File PHP eseguito correttamente!\n";