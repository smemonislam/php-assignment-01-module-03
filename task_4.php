<?php

$studentGrades = [
    ["math" => 95, "english" => 90, "science" => 85],
    ["math" => 90, "english" => 80, "science" => 70],
    ["math" => 95, "english" => 90, "science" => 85],
];


function studentGrade($studentGrades)
{
    foreach ($studentGrades as $studentGrade) {
        $total = 0;
        $count = 0;
        foreach ($studentGrade as $grade) {
            $total += $grade;
            $count++;
        }
        $average = $total / $count;

        echo "Average grade for this student: {$average} \n";
    }
}

studentGrade($studentGrades);
