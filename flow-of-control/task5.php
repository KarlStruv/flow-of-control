<?php
//On your phone keypad, the alphabets are mapped to digits
// as follows: ABC(2), DEF(3), GHI(4), JKL(5), MNO(6), PQRS(7), TUV(8), WXYZ(9).
//
//Write a program called PhoneKeyPad, which prompts user for
// a String (case-insensitive), and converts to a sequence of keypad digits.
//
//Use:
//
//a "nested-if" statement
//a "switch-case-default" statement
//Hint: In switch-case, you can handle multiple cases by omitting the break statement, e.g.,
//
//© 2021 GitHub, Inc.

$input = (string)readline("Enter a text: ");

echo "" . PHP_EOL;
echo "You would need to press: ";

if(strlen($input) <= 0){
    echo "Enter a proper text!" . PHP_EOL;
    exit;
}else{
    $count = strlen($input);
    $inputUpperCase = strtoupper($input);
    $array = str_split($inputUpperCase);

    for ($i = 0; $i < $count; $i++){
        switch($array[$i]){
            case "A":
            case "B":
            case "C":
                echo "2 ";
                break;
            case "D":
            case "E":
            case "F":
                echo "3 ";
                break;
            case "G":
            case "H":
            case "I":
                echo "4 ";
                break;
            case "J":
            case "K":
            case "L":
                echo "5 ";
                break;
            case "M":
            case "N":
            case "O":
                echo "6 ";
                break;
            case "P":
            case "Q":
            case "R":
            case "S":
                echo "7 ";
                break;
            case "T":
            case "U":
            case "V":
                echo "8 ";
                break;
            case "W":
            case "X":
            case "Y":
            case "Z":
                echo "9 ";
                break;
            case " ":
                echo "0 ";
                break;
            default:
                exit;


        }
    }
}
echo "" . PHP_EOL;
echo "" . PHP_EOL;



