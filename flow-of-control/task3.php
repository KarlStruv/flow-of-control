<?php
//Write a program that reads an positive integer and count the number of digits the number has.


$first = (int)readline("Enter the number: ");
$length = strlen((string)abs($first));

echo $length . PHP_EOL;