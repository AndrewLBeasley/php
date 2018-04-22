<?php

//an array is a list of values. 
//a single variable containing an array can contain as many values as you want. 
//can create an array in php using bracket notation, or by calling the array() function followed by values.
//each value in an array is known as an array element.
    //each element has a value, an index starting at 0


$articles = ['first', 'second', 'third'];

//cannot use echo to display arrays.
//using var_dump will list the array values, their index, and their type.
// var_dump($articles); //array(3) { [0]=> string(5) "first" [1]=> string(6) "second" [2]=> string(5) "third" }

//access individual elements using bracket notation and the elements index.
//accessing an array element with an invalid index will cause an error.
// var_dump($articles[0]);



//can manually specify indexes before creating an array.
//indexes can be any whole number, and do not have to be sequential.
//indexes do not have to be manually assigned, and any elements that are not assigned will be given an index that reflects the previous.
//array indexes can also be assigned with strings. known as associative arrays.
//if using a combination of strings and integers to index, integer indexed elements following a string indexed element will
    //be automatically assigned an integer index that follows the most previous integer indexed element.
//elements indexed with a string are also accessed using bracket notation, ['three'].  
// $articles_two = [1=>'first', 
//                 'three'=>'second', 
//                 'third'];//'third' will be assigned index of 2.

//var_dump($articles_two['three']);//prints element with index of 'three'.


//array elements can have values of any type.
//can also assign other variables as elements of an array.

$count = 3;
$price = 9.99;
$values = [
    'message' => 'Hello world', 
    'count' => 150,
    'pi' => 3.14,
    'status' => false, 
    'result' => null,
    $count, 
    $price
];
//  var_dump($values);

//elements of an array can also be other arrays.
//multidimensional arrays are useful for representing tables of data.
//can create an array using a variable for each array element, $people = [$Lucy, $Andrew, $Imo];
    //each of these elements represents a previously created array of that persons data.
    //could create the same $people array using each individuals array.
//to access elements in multidimensional arrays, use double bracket notation
    //the first bracket represents the parents element, the second represents the child element
    // $people[2]['name] would return the child element of 'name' from the parent element 'Imo'.

$articles_three = [
    ['title' => 'first post', 'content' => 'this is the first post'], 
    ['title' => 'second post', 'content' => 'this is the second post'],
    ['title' => 'third post', 'content' => 'this is the third post']
];

//var_dump($articles_three[1]['title']); //will return string(11) "second post".

//Loops allow us to run code on each element of an array, regardless of how many elements it has
//for arrays in php, the simplest loop to execute is the foreach loop

$articles_four = [
    'first',
    'second',
    'third'
];

//to create a foreach loop, first pass in the array, and then the name of a variable that each element will be assigned to during each loop iteration.
    //then assign some code that will execute upon each iteration.

//Read as: for each element($article_name) in the array($articles_four) execute the given code block.
foreach($articles_four as $article_name){
    //use the given variable name to assign desired action.
    //code block that will add a comma after each element of the array.
    echo $article_name, ', ';
}//do not need a semi-colon after a code block.