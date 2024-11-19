<?php
function square_sum($numbers) {
    $sum = 0; 

    foreach ($numbers as $number) {
        $sum += $number ** 2; 
    }

    return $sum;
}

$inputArray = [1, 2, 3, 4];
$outputSum = square_sum($inputArray);

echo "Сумма квадратов: " . $outputSum; 
?>