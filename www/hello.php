<?php // ?php opening tag that tells the web server that the code we are writing is in php.

//using the $ declares a variable used to store information for the program to use. 
//the message variable is assign hello again.
//can use camelCase, full lowercase, numbers, and names including underscores eg Full_Name.
//cannot use hyphens to create variable names.
//php is case sensitive. $message!=$Message.

$message = 'Hello again!'; //type string, value Hello again.'

//type number.
//positive or negative numbers.

//numbers can be whole integers with no decimal part. 
$count = 10;

//decimal parts of numbers are known as floats. floats can also be negative.
$price = 0.23;




// echo tag tells web server that whatever follows should be printed to the browser.
echo $message;


//var_dump is a php function that prints a number value with it's details, eg integer or float.
//useful if you want to see what a variable contains.
var_dump($count);
var_dump($price);


//php is a loosely typed language. you do not have to declare a variables type. php interprets the type itself.
