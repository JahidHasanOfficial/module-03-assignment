<?php

// Task 4: Multidimensional Array

// Create a multidimensional array called $studentGrades to store the grades of three students. Each student has grades for three subjects: Math, English, and Science. Write a PHP function which takes "$studentGrades" as an argument to calculate and print the average grade for each student.


$studentGrades = array(
    array("Math" => 85, "English" => 78, "Science" => 92),
    array("Math" => 90, "English" => 88, "Science" => 95),
    array("Math" => 75, "English" => 82, "Science" => 79)
);

function calculateAverageGrades($grades) {
    foreach ($grades as $student => $subjectGrades) {
        $total = array_sum($subjectGrades);
        $count = count($subjectGrades);
        $average = $total / $count;
        
        echo "Student " . ($student + 1) . " - Average Grade: " . $average . PHP_EOL;
    }
}

calculateAverageGrades($studentGrades);

?>
