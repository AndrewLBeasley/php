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
