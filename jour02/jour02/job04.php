<?php 
for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        // multiplication par 3 et par 5
        echo "fizzbuzz";
    } elseif ($i % 3 == 0) {
        //multiplication par 3
        echo "fizz";
    } elseif ($i % 5 == 0) {
        //multiplication par 5
        echo "buzz";
    } else {
        //autre nombres
        echo "$i<br>";


    }
}
?>