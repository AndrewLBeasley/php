<?php 

// all of the information needed to connect to the local db
//use include to save the DB information from the config file to a variable for use in the current file. 
$database = include('./includes/config.php');

$db_host = $database['host'];
$db_name = $database['name'];
$db_user = $database['user'];
$db_pass = $database['pass'];

// establishes connection to the DB using the mysqli_connect method.
// connects to the db and returns a variable that represents a connection to the db server.
//mysqli_connect parameters must be passed in IN THE ORDER BELOW
$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

//use the mysqli_connect_error method to check your new connection.
//returns a string if the connection fail, and returns null if the connection was successful.
//an error will return a string with info about the error, therefor firing the conditional and printing the error message.
if(mysqli_connect_error()){
    echo mysqli_connect_error();
    exit;
    //calling exit will stop the script from firing.
    //if the connection fails we dont want to continue executing the script. 
}
echo 'connected successfully';

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
