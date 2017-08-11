<?php

/*$x = 1000;
while($x > 0) {
    
    echo ($x % 10) . PHP_EOL;
    $x = floor($x / 10);
}
*/

$n = 5;
for ($i = 1; $i < $n; $i++) {
    for($j = 1; $j < ($n - $i); $j++) {
        echo "" . PHP_EOL;
    }

    for($k = 1; $k < $i; $k++) {
        echo "X" . PHP_EOL;
    }
    
    
    echo PHP_EOL; 
}