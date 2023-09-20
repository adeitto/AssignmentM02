<?php
//for loop
function printEvenNumbersUsingForLoop($start, $end, $step) {
    for ($i = $start; $i <= $end; $i += $step) {
        echo $i . " ";
    }
}
printEvenNumbersUsingForLoop(2, 20, 2);

echo"</br>";


//while loop

function printEvenNumbersUsingWhileLoop($start, $end, $step) {
    while ($start <= $end) {
        echo $start . " ";
        $start += $step;
    }
}
printEvenNumbersUsingWhileLoop(2, 20, 2);

echo"</br>";

//do while loop
function printEvenNumbersUsingDoWhileLoop($start, $end, $step) {
    do {
        echo $start . " ";
        $start += $step;
    } while ($start <= $end);
}

printEvenNumbersUsingDoWhileLoop(2, 20, 2);


