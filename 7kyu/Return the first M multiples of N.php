<?php
function multiples($m, $n) {
    $multiples = []; 

    for ($i = 1; $i <= $m; $i++) {
        $multiples[] = $i * $n;
    }

    return $multiples; 
}

$m = 5; 
$n = 3;

$result = multiples($m, $n);
print_r($result); 
?>