<?php
function arrayStoring($grades)
{
    rsort($grades);
    var_dump($grades);
}

$grades  = [85, 92, 78, 88, 95];
arrayStoring($grades);
