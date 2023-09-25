<?php
function calculateAverageGrades($studentGrades)
{
    foreach ($studentGrades as $student => $grades) {
        $length = count($grades);
        $total = array_sum($grades);
        $average = $total / $length;

        echo "Student $student has an average grade of $average.\n";
    }
}

$studentGrades = [
    "student1" => ["math" => 86, "English" => 79, "science" => 88],
    "student2" => ["math" => 66, "English" => 65, "science" => 88],
    "student3" => ["math" => 84, "English" => 67, "science" => 80],
];

calculateAverageGrades($studentGrades);
