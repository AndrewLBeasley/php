<?php

//using the superglobal $_SERVER variable, dumps the value of the query string. 
//initial call will result in a string(0), because there was no query string provided.
var_dump($_SERVER["QUERY_STRING"]);

//superglobal $_GET variable returns an associative array of any data related to the query string. 
var_dump($_GET);