<?php 
//requires database connection information
//allows for the database connection to be established only when it is needed.
require 'includes/database.php';
require 'includes/article.php';
$conn = getDB();

//creates variable with SQL query that pulls one article from the database that matches the query.
//uses superglobal $_GET to find values with queried id
//checks that passed in id is a numeric value to help avoid SQL injections. 
//if the passed id is not numeric, no article will be retrieved.
//use the isset function to determine whether a variable is set and not null. 
//if the query string is set, and is numeric, the GET array will make a valid return

if(isset($_GET['id'])){
    //calls the getArticle function from the article.php script
    //no longer needs to check is_numeric because we are using a prepared statement. 
    $article = getArticle($conn, $_GET['id']);

}else{
    $articles = null;
}

?>
<!-- requires header.php -->
<?php require './includes/header.php';?>

<!-- checks to see if there is any content to post. if there is not, the message will display -->
    <?php if($article === null):?>
        <p> Article not found </p>
    <?php else: ?>
                    <!-- renders the article to html -->
                        <article>
                            <h2><?= htmlspecialchars($article['title']);?></h2>
                            <p><?= htmlspecialchars($article['content']);?></p>
                        </article>

                        <a href="edit_article.php?id=<?= $article['id'];?>" Edit </a>
                   
    <?php endif; ?>
<!-- requires footer.php -->
    <?php require './includes/footer.php';?>