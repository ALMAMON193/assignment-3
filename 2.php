<?php
function removeEvenNumber($numbers)
{
    foreach ($numbers as $key => $value) {
        if ($value % 2 == 0) {
            unset($numbers[$key]);
        }
    }
    print_r($number);
}
$numbers = range(1, 10);
removeEvenNumber($numbers);
