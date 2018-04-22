<?php
    //declare variable of name for use in the HTML below. 
    $name = 'Andrew';
    $hour = 12;
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
</body>
</html>