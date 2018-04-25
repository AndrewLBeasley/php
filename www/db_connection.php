<?php 
//requires database connection information
//allows for the database connection to be established only when it is needed.
require 'includes/database.php';

$conn = getDB();

//creates variable with initial SQL query
$sql = 'SELECT*
        FROM article
        ORDER BY published_at;'
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
    //sets the $articles variable to the response from the database on a successful query.
    //passing MYSQLI_ASSOC into the fetch function will return the array as an associative array.
    $articles = mysqli_fetch_all($results, MYSQLI_ASSOC);
    // var_dump($articles);
}
?>
<!-- requires header.php -->
<?php require './includes/header.php';?>

<!-- checks to see if there is any content to post. if there is not, the message will display -->
    <?php if(empty($articles)):?>
        <p> No articles found </p>
    <?php else: ?>
            <!-- loops over returned information from the database and displays it in html -->
            <ul>
                <?php foreach($articles as $article): ?>
                    <li>
                        <article>
                            <h2><a href='article.php?id=<?= $article['id'];?>'><?=$article['title'];?></a></h2>
                            <h4><?=$article['content'];?></h4>
                        </article>
                    </li>
                <?php endforeach; ?>
            </ul>   
    <?php endif; ?>
<!-- requires footer.php -->
    <?php require './includes/footer.php';?>

<!-- DB Quiz and recap -->
<!-- data in a relational database is represented in tables -->
<!-- use sql SELECT to select data from a database -->
<!-- use WHERE to specify a condition when selecting data with an SQL query -->
<!-- use ORDER BY to change the order in which information is returned from the database -->
<!-- hostname, database name, username, and password are the four pieces of data required to connect to a database using PHP -->
<!-- query results from a database are returned in an array -->
<!-- PHP sends SQL to the database, which returns data, and HTML is used to format this data in the browser -->
