<?php

// выводит сколько студентов на учебе с правильным окончанием
$studentsCount = rand(0, 1000);
$modStudentCount = $studentsCount % 10;

$lastDigit = $studentsCount % 10;
$lastTwoDigit = $studentsCount % 100;

if ($lastDigit >= 5 || $lastDigit == 0 || ($lastTwoDigit >= 11 && $lastTwoDigit <= 14 )) {
    echo "на учебе " . $studentsCount . " студентов";
} elseif ($studentsCount % 10 == 1) {
    echo "на учебе " . $studentsCount . " студент";
} else {
    echo "на учебе " . $studentsCount . " студентa";
}