<?php

/*
$userAge = '21';
$minimumAge = 18;

if ((int) $userAge >= $minimumAge) {
    echo "Vote Accepted";
} else {

    echo "Sorry";
}
*/

/// converting values to boolean

$bool = "string"; // true
$bool = ""; // false
$bool = []; // false
$bool = 0; // false
$bool = false; // false
$bool = true; // true
$bool = 0.0; // false
$bool = "false"; // true
$bool = -1; // true
$bool = 1; // true
$bool = null; // false
$bool = 'null'; // true
// echo var_dump((bool)$bool);

/// converting values to integer

$int = false; // 0
$int = true; // 1
$int = 12.85; // 12
$int = "200 tesla cars"; // 200
$int = "Hello World"; // 0
$int = "22"; // 22
$int = 20; // 20
// echo var_dump((int) $int);


/// converting values to float

$number = (float) '10.5'; // float(10.5)
$number = (float) 10.5; // float(10.5)
// echo var_dump($number);

/// converting values to string

$string = (string) 200; // '200'
$string = (string) '200'; // '200'
$string = (string) "string"; // "string"
$string = (string) true; // "1"
$string = (string) false; // ""
$string = (string) null; // ""
$string = (string) ""; // ""
$string = (string) [34, "arif", true]; //  "Array"
// echo var_dump($string);