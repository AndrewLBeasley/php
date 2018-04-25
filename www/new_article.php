<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        //must include the database connection wherever you are going to be making calls to the database
        $database = include('./includes/config.php');
            $db_host = $database['host'];
            $db_name = $database['name'];
            $db_user = $database['user'];
            $db_pass = $database['pass'];

            $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

            if(mysqli_connect_error()){
                echo mysqli_connect_error();
                exit;
                //calling exit will stop the script from firing.
                //if the connection fails we dont want to continue executing the script. 
            };
        //use the mysqli_escape_string function to avoid sql injections.
        //good for use with short sql statements
        //to use prepared statements, change the SQL statement to use placeholders
        $insert = "INSERT INTO article (title, content, published_at)
                    VALUES(?, ?, ?)";
        
        //to use prepared statements, change the mysqli_query to use mysqli_prepare
        $stmt = mysqli_prepare($conn, $insert);

            if($stmt === false){
                echo mysqli_error($conn);
            }else{
                //binds params to our established placeholders
                //parameters are inserted via SQL on the database server, not in php
                mysqli_stmt_bind_param($stmt, 'sss', $_POST['title'], $_POST['content'], $_POST['published_at']);

                //executes prepared statement
                if(mysqli_stmt_execute($stmt)){
                    $id = mysqli_insert_id($conn);
                    echo "inserted record with ID: $id";
                }else{
                    echo mysqli_error($stmt);
                };
            };
    };

    //SQL insert into statement
    //declare table in which to insert
    //can also specify exact columns in which to insert
    //followed by the values that you want to insert into the table
    //can also insert multiple values at once into specified columns by continuing to specify values
    //VALUES(1, 2), (3, 4), etc...
    //allows the user to insert multiple values with one insert statement
   
    //Quiz and recap for inserting data into the database
    //use $_SERVER['REQUEST_METHOD'] to check which method a form is using to interact with the database
    //insert multiple records at once by calling VALUES(1, 2), (3, 4), etc
    //to get the id of a newly inserted record, use mysqli_insert_id
    //sql injection attacks occur when values are inserted into an SQL string that contains quotes. 
    //question marks are used as placeholders in MYSQLI prepared statements.
    //
?>

<?php require 'includes/header.php'; ?>

    <h2> New Article </h2>

    <form method='post'>
    <div>
        <label for='title'> Title </label>
        <input name='title' id='title' placeholder='Article Title'>
    </div>

    <div>
        <label for='content'> Content </textarea>
        <textarea name='content' rows='4' cols='40' id='content' placeholder='Article Content'></textarea>
    </div>

    <div>
        <label for='published_at'> Publication date and time</label>
        <input type='datetime-local' name='published_at' id='published_at'>
    </div>

        <button> Add </button>
    </form>

<?php require 'includes/footer.php'; ?>