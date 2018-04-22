<?php
    //declare variable of name for use in the HTML below. 
    $name = 'Andrew';
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
</body>
</html>