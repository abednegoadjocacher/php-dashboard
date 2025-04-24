<?php
declare(strict_types=1); 

use App\Utility;// This enables PHP to check for valid input types of data. If for instance, a function expects an integer argument to be passed and a string is rather given the above line produce an error.



#To autoload classes;
spl_autoload_register(function($class) {
    $formattedClass = str_replace("\\", "/", $class);
    $path = "{$formattedClass}.php";
    require_once $path;
});


// require_once 'App\SocialMedia.php';
// require_once 'App\Account.php';# This is line load the account class
#use App\Account, App\Accounts;//This line of code help to import a class from a namespace. Or you can also use this below👇👇👇
use App\{Account, Accounts, SocialMedia, Utilities, ToasterPremium, AbstractProduct, RestaurantOne, RestaurantTwo, FoodApp};


$myAccount = new Account('Abed', 400000);
$solosAccount = new Account('Solomon', 30000);
$princeAccount = /*null*/new Accounts('Prince', 89900)/* I have commented this part of the code to test for the null safe operator*/;


// '?'-> IS called the null safe operator. It first checks if the value of the object is null before running. 
$princeAccount?->deposit(90)->deposit(87)->deposit(28);//THIS IS CALLED METHOD CHAINING.
var_dump($solosAccount) . "<br>";
var_dump($myAccount) . "<br>";
//var_dump($princeAccount);

Utilities::printArray([45,53,21,44,55,77]);
$emeliaAccount = new Accounts('Emelia', 50);
echo $emeliaAccount->getBalance();

#Class inheritance
#I have class called ToasterPremium.
$myToaster = new ToasterPremium(8);

$myToaster->toast();//The function toast is inherit from the Toast class

$restaurant = new FoodApp(
    new RestaurantTwo()
);





















echo '<h1>Hello World</h1>';


include_once 'nav.php'; // The include_once is used to link one file to another. There are other ways of load files to another file. You can used the require keyword like how I used the include_one. Moreover, we have include itself which does the same thing but will allow include one file multiple time which can sometimes result in problems.


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

//Loops in PHP
$a = 1;
while($a <= 20){
    echo $a . "<br>";
    $a++;
}

// Do while loop
do{
echo $a . "<br>";
$a++;
}while($a <= 15);


// For loop
for($i = 1; $i <= 30; $i++){
    echo $i . "<br>";
}

//foreach is used to loop through arrays.
$names = ['Abed', 'Jane', 'Judith', 'Solomon', 'Prince', 'Emelia'];
foreach($names as $key => $name){
    var_dump($key);
    var_dump($name);
}
//PHP CONSTANTS
echo PHP_VERSION;
echo PHP_INT_MAX;
//PHP has MAGIC CONSTANTS. THEY START WITH TWO UNDERSCORES AND END WITH THE SAME NUMBER OF UNDERSCORE
echo __DIR__ . "<br>";
echo __FILE__;

//To free memory space in PHP use the unset function
// It can be used for deleting items in an array.
//After deleting items from the array the indexes does will no longer be order.
//There to orderly arrange the indexes, use the function 'array_values(//Pass the name of the array)'
// E.g
$foodItems = ['Gari', 'Milo','Banku', 'Sugar', 'Maize'];
print_r($foodItems) . "<br>";//The print_r prints the values without their data types unlike var_dump function.
unset($foodItems[1]); // The item at index 1 is deleted

print_r($foodItems) . "<br>";
$foodItems = array_values($foodItems);//To re-index the items
print_r($foodItems);


//A variadic function accept unlimited number of argument
// The values passed to variadic function is store as an array.
function sum(int|float ...$nums){
    return array_sum($nums);//The array_sum loops through the arguments and adds them. This function is useful because you do not have to manual write your own loop to do that.
}
echo sum(79,56,45,453,3332);


//working with files in php
$folder = scandir(__DIR__);
    print_R($folder);

//Check for file existence
if (file_exists('example.txt')){
    echo 'File found!' . "<br>";
    echo filesize('example.txt') . "<br>";//Check file size
    file_put_contents('example.txt','Hello Abednego');//Write content into file
   
    clearstatcache();//To clear cache status
    echo filesize('example.txt') . "<br>";
    echo file_get_contents('example.txt');//To get the content written into the file.
}


?>
