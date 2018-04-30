<?php

require 'includes/database.php';
require 'includes/article.php';

$conn = getDB();

if(isset($_GET['id'])){
    //calls the getArticle function from the article.php script
    //no longer needs to check is_numeric because we are using a prepared statement. 
    $article = getArticle($conn, $_GET['id']);

}else{
    $articles = null;
}

var_dump($article);