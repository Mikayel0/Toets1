<?php
for ($x = 1; $x <= 12; $x++) {
   
    for ($y = 1; $y <= 12; $y++) {
        $result = $x * $y;
        echo ($x . " X " . $y . " = " . $result . PHP_EOL);    
    }
    echo(PHP_EOL);
}
?>
