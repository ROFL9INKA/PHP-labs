<?php
function enough($cap, $on, $wait) {
    $remaining_space = $cap - $on;
    
    if ($remaining_space >= $wait) {
        return 0;
    } else {
        return $wait - $remaining_space;
    }
}

echo enough(10, 5, 5);  
echo "\n";
echo enough(100, 60, 50); 
echo "\n";
echo enough(50, 30, 25); 
?>