<?php
function square_digits($num) {
    $digits = str_split(abs($num)); 
    $square_digits = [];

    foreach ($digits as $digit) {
        $square_digits[] = $digit * $digit;
    }

    return (int) implode('', $square_digits);
}

echo square_digits(9119); 
echo "\n";
echo square_digits(765);  
?>