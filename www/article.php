<?php 
//requires database connection information
//allows for the database connection to be established only when it is needed.
require 'includes/database.php';

$conn = getDB();

//creates variable with SQL query that pulls one article from the database that matches the query.
//uses superglobal $_GET to find values with queried id
//checks that passed in id is a numeric value to help avoid SQL injections. 
//if the passed id is not numeric, no article will be retrieved.
//use the isset function to determine whether a variable is set and not null. 
//if the query string is set, and is numeric, the GET array will make a valid return

if(isset($_GET['id']) && is_numeric($_GET['id'])){
$sql = 'SELECT*
        FROM article
        WHERE id = ' . $_GET['id'];
    ;



//creates $results variable which will hold the results of the above query.
//passes in connnection variable and sql statement.
//will return false if there is an error retrieving the data. 
$results = mysqli_query($conn, $sql);

//if the query returns false, php will echo the error message.
//must use strictly equals to perform the comparison to avoid edge cases of false being returned for values of null or empty arrays.
if($results === false){
    echo mysqli_error($conn);
}else{
    //uses mysqli_fetch_assoc to pull one row from the db table
    $article = mysqli_fetch_assoc($results);
    // var_dump($articles);
}

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
                            <h2><?=$article['title'];?></h2>
                            <p><?=$article['content'];?></p>
                        </article>
                   
    <?php endif; ?>
<!-- requires footer.php -->
    <?php require './includes/footer.php';?>