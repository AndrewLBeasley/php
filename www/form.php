<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        var_dump($_POST);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <!-- specifying an action in a form can link it to other php scripts, action='process_form.php' -->
    <!-- specifying a method as get, or not specifying at all, will send data in the query string -->
    <!-- the post method does not send data in the query string -->
    <!-- using post, data becomes available in the post array -->
    <!-- can check which method a form used using the REQUEST_METHOD from the $_SERVER super global -->
    <!-- use get when you want to send a lot of data that you dont mind being public -->
    <!-- use post for sensitive data. there is no size limit to data you can send with the post method. -->
    <!-- if you are just retrieving data from the web server, use get. -->
    <!-- if you are changing data on the server, use post -->
    <form  method='post'>
        <input name='username' />
        <input name='password' type='password'/>
        <button>send</button>
    </form>
</body>
</html>