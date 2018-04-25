<?php
//in php, functions are defined by calling function, then a function name, followed by a code block to be executed.
//function myFunction(){ code block to execute}
//there are no real standards for naming functions in php, myFunction or my_function will work the same.
//pass data to a function using arguments or parameters.
//pass values to the arguments when the function is called. 
//can call arguments with default values. these default values can be overwritten by passing a different value to the argument
//to access data from outside of a function, we must return that data. any code after the return statement is not executed.
//assign a returned value to a new variable in order to access it after it has been returned from the function.
//if the function argument is a boolean value, multiple returns can be used within an if/else statement.

function showMessage($morning){
    if($morning){
        return 'Good Morning';
    }else{
        return 'Good Afternoon';
    };
};

$value = showMessage(true);
echo $value;


