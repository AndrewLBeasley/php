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
        $id = $article['id'];
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
     
    //use the mysqli_escape_string function to avoid sql injections.
    //good for use with short sql statements
    //to use prepared statements, change the SQL statement to use placeholders
    $update = "UPDATE 
                SET title = ?,
                    content = ?,
                    published_at = ?
                WHERE id = ?";
    
    //to use prepared statements, change the mysqli_query to use mysqli_prepare
    $stmt = mysqli_prepare($conn, $update);

        if($stmt === false){
            echo mysqli_error($conn);
        }else{

            //if the given value for $published_at is empty, assigns value of null to the variable. 
            if($published_at == ''){
                $published_at = null;
            };

            //binds params to our established placeholders
            //parameters are inserted via SQL on the database server, not in php
            mysqli_stmt_bind_param($stmt, 'sssi', $title, $content, $published_at, $id);

            //executes prepared statement
            if(mysqli_stmt_execute($stmt)){
                

                //checks for the servers protocol
                if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off'){
                    $protocol = 'https';
                }else{
                    $protocol = 'http';
                };

                //uses the header function to take the returned id and redirect the user to the recently submitted article.
                //takes information regarding server protocol and host to redirect using the direct url.
                header("Location:$protocol://" . $_SERVER['HTTP_HOST'] . "/article.php?id=$id");
                exit;

            }else{
                echo mysqli_error($stmt);
            };
        };
    };
};

?>
<?php require 'includes/header.php'; ?>

<h2> Edit Article </h2>

<?php require 'includes/article_form.php'; ?>

<?php require 'includes/footer.php'; ?>