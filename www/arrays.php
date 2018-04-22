<?php

//an array is a list of values. 
//a single variable containing an array can contain as many values as you want. 
//can create an array in php using bracket notation, or by calling the array() function followed by values.
//each value in an array is known as an array element.
    //each element has a value, an index starting at 0


$articles = ['first', 'second', 'third'];

//cannot use echo to display arrays.
//using var_dump will list the array values, their index, and their type.
var_dump($articles); //array(3) { [0]=> string(5) "first" [1]=> string(6) "second" [2]=> string(5) "third" }

//access individual elements using bracket notation and the elements index.
//accessing an array element with an invalid index will cause an error.
var_dump($articles[0]);



//can manually specify indexes before creating an array.
//indexes can be any whole number, and do not have to be sequential.
//indexes do not have to be manually assigned, and any elements that are not assigned will be given an index that reflects the previous.
//array indexes can also be assigned with strings. known as associative arrays.
//if using a combination of strings and integers to index, integer indexed elements following a string indexed element will
    //be automatically assigned an integer index that follows the most previous integer indexed element.
//elements indexed with a string are also accessed using bracket notation, ['three'].  
$articles_two = [1=>'first', 
                'three'=>'second', 
                'third'];//'third' will be assigned index of 2.

var_dump($articles_two['three']);//prints element with index of 'three'.

