<?php

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

/// converting values to array

$array = (array) "apple"; // array(1) { [0]=> string(5) "apple" }
$array = (array) true; // array(1) { [0]=> bool(true) }
$array = (array) false; // array(1) { [0]=> bool(false) }
$array = (array) 500; // array(1) { [0]=> int(500) }
$array = (array) null; // array(0) { }
$array = (array) ''; // array(1) { [0]=> string(0) "" }

// echo var_dump($array);
// print_r($array);

/// converting object to array

class Twitter
{
    public $username;
    protected $tweet;
    private $joiningDate;
}

// var_dump((array) new Twitter());
// Ans ==> array(3) { ["username"]=> NULL ["*tweet"]=> NULL ["TwitterjoiningDate"]=> NULL }

/// converting array to object

$details = (object) ["married" => false, "name" => "arif", "age" => 25];
// var_dump($details);
// Ans ==> object(stdClass)#1 (3) { ["married"]=> bool(false) ["name"]=> string(4) "arif" ["age"]=> int(25) }

var_dump($details -> name); // string(4) "arif"
