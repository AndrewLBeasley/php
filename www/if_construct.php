<?php

//by using the if control structure we can perform different actions based on different conditions.

// if(condition){
    //the condition is a boolean value. if the condition is true, the code block is executed. if false, the block is not executed. 
//     code to run if the passed in condition is true
// }

if(false){
    echo 'the condition is true';
    //message will echo if the condition passed in is true.
    //if the condition is set to false, we will not see the message.
}

//in practice, you would never pass a strict boolean value.
//the condition would be a variable, or the result of a comparison made prior to the if statement.
//curly braces can be omitted if there is only one condition in the code block
    //if(condition) code block

$articles = ['first'];
//the empty function will return a boolean value based on whether the passed in variable is empty or not. 
// var_dump(empty($articles)); results in true
if(empty($articles)){
    echo 'the array is empty';
    //executes code block because the array is empty, resulting in a true condition.
    //adding elements to the array will result in a false condition, and the code block will not execute.
}

//can use else to extend an if statement if the passed in condition is false.
    // if(condition){
    //     code to run on true
    // }else{
    //     code to run on false
    // }

    if(empty($articles)){
        echo 'the array is empty';

    }else{
        echo 'the array is not empty';
        //block will execute if the passed in variable is not empty
    }

//comparison operators are used to compare two values.
//comparisons always result in a value of true or false. 

//compares the values of two and four, returns a boolean based on the result of the comparison.
    // equal == operator will return true if two values are equal.
    // not equal != operator will return true if two values are not equal.
    // less than < operator will return true if one value is less than another.
    // greater than > operator will return true if one value is greater than another. 
    // greater/less than or equal to will return true if one value is greater/less than or equal to another. 

var_dump(2==4);//will return false, because two is not equal to four. 
var_dump(3==3);//will return true, because three is equal to three.
var_dump(3!=4);// will return true, three is not equal to 4.
var_dump(3<4);//will return true, three is less than 4.

$age = 21;

//if statement using comparison as a condition.
//code will execute based on comparison of age.
if($age == 21){
    echo 'age is true';
}else{
    echo 'age is false';
}