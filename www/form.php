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

    <!-- input elements with no type specified are simple text bodxes. must specify a type to establish what type of input controll is shown -->
    <!-- if no type is specified, your input defaults to single line text field -->
    <!-- inputs have to have a name so that the data they send can be indexed and accessed on the server -->
    <!-- hidden input types can be assigned a value using 'value=123'. the value will not be displayed, but will be recorded on the server -->
    <!-- to provide the user with a multi-line text-input field, use the text-area element -->
    <!-- textareas do not need a value, but do need a name so that their content can be submitted with the form -->
    <!-- can initialize the size of a text area using the rows and columns attributes -->
    <!-- the select element provides the user with a list of controls -->
    <!-- wrap the select element around various options elements to provide controls to the user -->
    <!-- the select wrapper needs a name, and the options elements need a value which is the value that is submitted upon choosing that option -->
    <!-- can add the multiple option to the select wrapper which enables the slection of multiple options -->
    <!-- in order to be able to access multiple values after multiple options are submitted, add [] to the end of a selectors name -->
    <!-- in order to group multiple options, wrap the options in the optgroup element -->
    <!-- add a label to the optgroup element to signify each group -->
    <!-- to set a default value for selection, add the selected attribute to the option which you want to default. can add multiple selected attributes -->
    <!-- use checkboxes to provide users with a binary choice. checkbox is an input element with the type checkbox -->
    <!-- supply a name to the checkbox to get the value of the checkbox when it is submitted. returns the name of the checkbox with the value of 'on' -->
    <!-- can specify a value to be submitted when a checkbox is submitted. can also default the box to 'checked' using the checked attribute-->
    <!-- to add a label to the checkbox, add text to the end of the element -->
    <!-- can also add [] to the end of checked, 'checked[]', and a value to send information about the box instead of adding a name -->
    <!-- to provide the user with an option where only one value can be selected, use a radio button. cannot toggle on/off -->
    <!-- add a name to radio button elements to make them work properly. add a value to be returned when the button is submitted. can also add checked -->
    
    <form  method='post'>
        <input name='username' />
        <input name='password' type='password'/>
        <textarea name='content'>Hello</textarea>
            <select name='cars[]' multiple>
                <optgroup label = 'companies'>
                    <option value='bmw'> BMW </option>
                    <option value='ford'> Ford </option>
                    <option value='chevy' selected>Chevy </option>
                </optgroup>
            </select>
        <input type='checkbox'  'checked[]' value='yes' /> check me out
        <input name='red' value='red' type='radio'/>
        <button>send</button>
    </form>
</body>
</html>