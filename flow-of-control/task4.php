<?php
//Write a program which prints “Sunday”, “Monday”, ... “Saturday” if
// the int variable "dayNumber" is 0, 1, ..., 6, respectively.
// Otherwise, it shall print "Not a valid day".
//
//Use:
//
//a "nested-if" statement
//a "switch-case-default" statement.

$dayNumber = (int)readline("Enter the number of the day(0-6): ");

switch ($dayNumber){
    case 0:
        echo"That is Sunday" . PHP_EOL;
        exit;
    case 1:
        echo"That is Monday" . PHP_EOL;
        exit;
    case 2:
        echo"That is Tuesday" . PHP_EOL;
        exit;
    case 3:
        echo"That is Wednesday" . PHP_EOL;
        exit;
    case 4:
        echo"That is Thursday" . PHP_EOL;
        exit;
    case 5:
        echo"That is Friday" . PHP_EOL;
        exit;
    case 6:
        echo"That is Saturday" . PHP_EOL;
        exit;
    default:
        echo "Not a valid day" . PHP_EOL;
        exit;
}

