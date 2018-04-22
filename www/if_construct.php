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
    // echo 'age is true';
}else{
    // echo 'age is false';
}


//the whileloop can be used for any code, not just for looping arrays.
//runs code continuously while a condition is true. 
    // while(condition){
    //     code to run while condition is true;
    // }
//condition must change to false at some point or else the loop will run forever. 

$month = 1;

//while loop with the condition of variable $month being less than or equal to twelve.
//checks the condition upon each iteration. 
//will echo the value of $month, and add one to the value of $month each time the loop executes.
//the loop will exit once the condition is false, and the value of $month is greater than 12.
// while($month<=12){
//     echo $month . ', ';
//     $month = $month + 1;
// }

//forloop will execute code a specific number of times, when you know in advance how many times you want the loop to run . 
//the for loop is based on a counter. the counter dictates how many times the code in the loop is executed. 
    //initiate the for loop with an initial value of the counter. 
    //specify a test for the loop. if the test restult is true, the code block is executed. 
    //add a change statement which changes the counters value after each iteration of the loop
        // for(init; test; change){
        //     code to run while test is true;
        // }

//counter initialized at 1, test to see if the counter is less than or equal to 10, add 1 to the counter each time the loop iterates. 
//print the value of $i each time the loop is executed. 
for($i = 1; $i<=10; $i++){
    echo $i . ', ';
}

//the else/if construct allows for the further expansion of the if construct.



//elseif allows for several different blocks to be executed depending on the result of the condition.
//makes a check-down of the elseif statements, and only executes blocks that meet the given condition.
//the elseif will not continue to run after a block has met the given condition. 
//can include as many different elseif conditions as you like, the final else is optional . 
$hour = 14;

 if($hour<12){
     echo 'good morning';
 }elseif($hour<18){
     echo 'good afternoon';
 }elseif($hour<22){
     echo 'good evening';
 }else{
     echo 'good night';
 }


//the switch statement can compare a variable or value to many different valeus, and will execute code based on that comparison. 
//establish a switch statement by passing a condition into switch($condition).
    //follow this with a case to be met by the condition, case 'condition'
    //and then a block of code to be executed if that case is met, echo 'condition'

//once a case within the switch statement has been met, the code will execute for every other case that comes after the met case. 
//to exit the switch statement once a case has been met, at a break statement to the end of each code block. 
//give the switch statement a default case that will execute if no other case in the statement has been met. 

$day = 'Tue';
switch($day){
    case 'Mon';
        echo 'Monday';
        break;

    case 'Tue';
        echo 'Tue';
        break;

    case 'Wed';
        echo 'Wed';
        break;

    case 'Thu';
        echo 'Thu';
        break;

    case 'Fri';
        echo 'Fri';
        break;
    
    default:
        echo 'no information';
        break;
}