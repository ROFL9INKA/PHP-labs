<?php
function removeEveryOther($array) {
    $result = []; 

    foreach ($array as $key => $value) {
        if ($key % 2 === 0) {
            $result[$key] = $value; 
        }
    }

    return $result; 
}


$inputArray = [1, 2, 3, 4, 5, 6, 7, 8, 9];
$outputArray = removeEveryOther($inputArray);

print_r($outputArray); 
?>