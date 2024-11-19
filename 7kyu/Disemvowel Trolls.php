<?php
function disemvowel($input) {
    $vowels = 'aeiouAEIOU';
    
    $output = str_replace(str_split($vowels), '', $input);
    
    return $output;
}

$comment = "Этот сайт для неудачников LOL!";
$result = disemvowel($comment);
echo $result; 
?>