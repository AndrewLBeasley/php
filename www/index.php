<?php
    //declare variable of name for use in the HTML below. 
    $name = 'Andrew';
    $hour = 12;

    $articles = [
        ['title' => 'first', 'content' => 'first post'], 
        ['title' => 'second', 'content' => 'second post'],
        ['title' => 'third', 'content' => 'third post']
        
    ];

    // all of the information needed to connect to the local db
    $db_host = 'localhost';
    $db_name = 'cms';
    $db_user = 'cms_www';
    $db_pass = 'andrew22';

    // establishes connection to the DB using the mysqli_connect method.
    // connects to the db and returns a variable that represents a connection to the db server.
    //mysqli_connect parameters must be passed in IN THE ORDER BELOW
    $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

    //use the mysqli_connect_error method to check your new connection.
    //returns a string if the connection fail, and returns null if the connection was successful.
    //an error will return a string with info about the error, therefor firing the conditional and printing the error message.
    if(mysqli_connect_error()){
        echo mysqli_connect_error();
        exit;
        //calling exit will stop the script from firing.
        //if the connection fails we dont want to continue executing the script. 
    }
    echo 'connected successfully';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test Website</title>
</head>
<body>
    
<!-- to write php inside of html, declare php using the php tag -->
<!-- can use the short echo tag to print php inside of your html -->
    <p> Hello, <?= $name;?>!</p>

<!-- to use php controll structures inside of html, declare each part of the structure as php -->
<!-- instead of echoing the result after the code block, leave if out of the php tag to be rendered as html -->
<!-- to end the controll strucutre inside the html, use endif, endwhile, or endfor -->
<!-- the echod portion of the control structure can also be manipulated as html. echod strings can become <h2> etc -->
        <?php if($hour<12): ?>
            good morning
        <?php elseif($hour<18): ?>
            good afternoon
        <?php elseif($hour<22): ?>
            good evening
        <?php else: ?>
            good night
        <?php endif; ?>

        <!-- Quiz and recap -->
        <!-- to close an open php tag, use ?> -->
        <!-- to echo a php message with shorthand, use the php echo shorthand -->
        <!-- to use php alternative syntax in html, enclose control structure in a php tag, and end the structure with a : -->


        <!-- example of how to use php to loop over arrays and display the array content in html -->
        <ul>
        <?php foreach($articles as $article): ?>
            <li>
                <article>
                    <h2><?=$article['title'];?></h2>
                    <h2><?=$article['content'];?></h2>
                </article>
            </li>
            <?php endforeach; ?>
        </ul>   


</body>
</html>