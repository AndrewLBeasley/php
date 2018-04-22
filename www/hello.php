<?php // ?php opening tag that tells the web server that the code we are writing is in php.

//using the $ declares a variable used to store information for the program to use. 
//the message variable is assign hello again.
//can use camelCase, full lowercase, numbers, and names including underscores eg Full_Name.
//cannot use hyphens to create variable names.
//php is case sensitive. $message!=$Message.

//type string, value Hello again.'
// can use \ to escape the string and add special characters such as \n to add a space between string characters.
$message = 'Hello again!'; 

//type number.
//positive or negative numbers.

//numbers can be whole integers with no decimal part. 
$count = 10;

//decimal parts of numbers are known as floats. floats can also be negative.
$price = 0.23;


// echo tag tells web server that whatever follows should be printed to the browser.
echo $message;


//var_dump is a php function that prints a variable value with its details.
//useful if you want to see what a variable contains.
var_dump($count);
var_dump($price);


//php is a loosely typed language. you do not have to declare a variables type. php interprets the type itself.
//variables can also contain boolean values: true or false.
//useful for controlling program flow.
// variables can also be null. variables that have no values, or have not been assigned values.

$is_admin = true;
$data = null;

//can pass multiple variables into the var_dump function.
var_dump($is_admin, $data);


//php also uses typical mathematical operators such as * + /
//var_dump will automatically evaluate values after operations. This operation will resolve to float after an integer and a float have been multiplied
var_dump($count*$price);


//php uses the . operator to concatenate string values. Unlike javascript which uses + to concatenate.
//can use the . operator more than once. 
//can also concatenate literal strings and variables. 
//use "" to insert variables directly into a string. This is called variable interpolation.
$name = 'Andrew';
echo $message .''. $name;
echo 'Hello ' . $name;
echo "Hello $name"; //variable interpolation.
echo "Hello {$name}";//use curly braces if you are not sure where the variable ends.

//when performing operations on variables with different values, php will type juggle the result to try to determine the new type.
//this operation will result in a new value of int, and reassign the value of $int_string to the type of int.
$int_string = '150';
$quantity = 3;
$int_string = $int_string*$quantity;
var_dump($int_string);

//php will re-assign boolean values using !.
//var_dump(!is_editor) will re-assign the value of $is_editor to false.
//php also uses and, or, xor to evaluate boolean values.
//var_dump($is_editor or &is_administrator) will evaluate true.
$is_editor = true;
$is_administrator = false;
var_dump($is_editor);


