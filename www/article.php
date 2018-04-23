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