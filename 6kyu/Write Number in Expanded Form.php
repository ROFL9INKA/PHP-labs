<?php
function expanded_form($num) {
    $numStr = strval($num);
    $length = strlen($numStr);
    $expandedParts = [];

    for ($i = 0; $i < $length; $i++) {
        $digit = (int)$numStr[$i];
        if ($digit !== 0) {
            $expandedParts[] = $digit * pow(10, $length - 1 - $i);
        }
    }

    return implode(' + ', $expandedParts);
}

echo expanded_form(12);     
echo "\n";
echo expanded_form(45);   
echo "\n";
echo expanded_form(70304); 
?>