<?php
function solve($str) {
    $vowels = ['a', 'e', 'i', 'o', 'u'];
    $maxValue = 0;
    $currentValue = 0;

    $chars = str_split($str);

    foreach ($chars as $char) {
        if (!in_array($char, $vowels)) {
            $currentValue += ord($char) - ord('a') + 1;
        } else {
            if ($currentValue > $maxValue) {
                $maxValue = $currentValue;
            }
            $currentValue = 0;
        }
    }

    if ($currentValue > $maxValue) {
        $maxValue = $currentValue;
    }

    return $maxValue;
}

echo solve("zodiac") . "\n";   
echo solve("strength") . "\n"; 
echo solve("chocolate") . "\n"; 
?>
