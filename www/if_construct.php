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