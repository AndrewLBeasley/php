<?php

require 'includes/database.php';
require 'includes/article.php';

$conn = getDB();

if(isset($_GET['id'])){
    //calls the getArticle function from the article.php script
    //no longer needs to check is_numeric because we are using a prepared statement. 
    $article = getArticle($conn, $_GET['id']);

    //if $article is true, assign values to these variables
    //if false, kill the script and tell the user that the article is not found. 
    if($article){
        $title = $article['title'];
        $content = $article['content'];
        $published_at = $article['published_at'];
    }else{
        die('article not found');
    };

}else{
    die('id not supplied, article not found');
};

if($_SERVER['REQUEST_METHOD'] == 'POST'){
        
    //assigns the data from the post array to respective variables.
    $title = $_POST['title'];
    $content = $_POST['content'];
    $published_at = $_POST['published_at'];

        
        $errors = validateArticle($title, $content, $published_at);

if(empty($errors)){
        die('Form is valid');
};

?>
<?php require 'includes/header.php'; ?>

<h2> Edit Article </h2>

<?php require 'includes/article_form.php'; ?>

<?php require 'includes/footer.php'; ?>