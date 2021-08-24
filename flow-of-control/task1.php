<?php

//todo print the largest number

/*

$first = (int)readline("Input the 1st number: ");
$second = (int)readline("Input the 2nd number: ");
$third = (int)readline("Input the 3rd number: ");

if($first > $second && $first > $third){
    echo $first . PHP_EOL;
} elseif ($second > $first && $second > $third){
    echo $second . PHP_EOL;
} else{
    echo $third . PHP_EOL;
}

 */


$amount = (int)readline("Enter how many numbers: ");

$numbers = [];

for($i = 1; $i < $amount+1; $i++){
    $number = readline("Enter the $i. number: ") .PHP_EOL;
    $numbers[] = $number;
}

$largestNumber = max($numbers);

echo "The largest number is: $largestNumber" . PHP_EOL;