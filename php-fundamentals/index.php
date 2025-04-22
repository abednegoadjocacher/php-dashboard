<?php 

declare(strict_types=1); // This enables PHP to check for valid input types of data. If for instance, a function expects an integer argument to be passed and a string is rather given the above line produce an error.
echo '<h1>Hello World</h1>';

// This is single line comment.
# this is also a single line comment.
/*
this is multiline comments
you  can write more comments */
echo "My name is Abednego ";
$age = 9_000_000; # this is a variable that stores a value. The underscore is just for clarity readability.
// echo $age; # this line show the value in the browser

var_dump($age);//the var_dump is function in php that allows developers to debug. It shows the data type of a variable.
$data = null;//This store a null
var_dump($data);
$isLoggedIn  = true; // This is a boolean data type
var_dump($isLoggedIn);

$price = 890.95;
var_dump($price);

$firstName ='Abednego'; //This is of type string
var_dump($firstName);

@var_dump(
(string) [1]
); //The @ is used to suppress the error of typecasting casting an array too string 


const FULL_NAME = 'ADJOCACHER ABEDNEGO';
$message = 'Hello, my name is ';
$message .= FULL_NAME; #This is string concatenating
var_dump($message);

//Control statement in PHP.
// The if statement
$score = 99;
if ($score >= 90) {
    var_dump('A');
}
else if ($score >= 80) {
    var_dump('B');
}
else if ($score >= 70) {
    var_dump('C');
}

// Switch statement can also be used check flow.
switch($score){
    case 90:
        var_dump('A');
        break;
    case 80:
        var_dump('B');
        break;
    default:
    var_dump('You failed');
}

// Match is also keyword that works like switch but it has value it returns when the match is true. Unlike switch does not have any return value.

$permission = 1;
$result = match($permission){
    1 => 'Permission granted',
    2 => 'Permission denied',
    default => 'Unknown'
};
var_dump($result);

// Functions

function getPermission(){
        $permission = 2;
        $result = match($permission){
        1 => 'Permission granted',
        2 => 'Permission denied',
        default => 'Unknown'
    };
var_dump($result);

}
getPermission();// function calling Or invoking of a function

