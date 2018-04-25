<?php
    //requires database connection information
    //allows for the database connection to be established only when it is needed.
    require 'includes/database.php';

    //creates variable to hold error messages
    $error = [];

    //sets global values to hold data returned from the post array.
    //this data can then be used throughout the script using these variables
    $title = '';
    $content ='';
    $published_at = '';
     
    //checks the request method
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        
        //assigns the data from the post array to respective variables.
        $title = $_POST['title'];
        $content = $_POST['content'];
        $published_at = $_POST['published_at'];

            
            //error will be submitted if no data for title is supplied
            if($title == ''){
                //appends error message to the $error variable using the $error[] method.
                $error[] = 'Title is required';
            };

            //error will be submitted if no data for content is supplied.
            if($content == ''){
                $error[] = 'Content is required';
            };

    if(empty($errors)){

        //calls the database function from database.php only when it is needed.
        //assigns the DB connection information to a variable so that it can be used throughout the script. 
        $conn = getDB();
        
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
                mysqli_stmt_bind_param($stmt, 'sss', $title, $content, $published_at);

                //executes prepared statement
                if(mysqli_stmt_execute($stmt)){
                    $id = mysqli_insert_id($conn);
                    echo "inserted record with ID: $id";
                }else{
                    echo mysqli_error($stmt);
                };
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

    <!-- dumps error messages -->
    <?php if(! empty($error)): ?>
        <ul>
            <?php foreach ($error as $errors):?>
                <li> <?=$errors?></li>
            <?php endforeach ?>
        </ul>
    <?php endif; ?>

    <form method='post'>
    <div>
        <label for='title'> Title </label>
        <input name='title' id='title' placeholder='Article Title' value="<?=$title; ?>"
    </div>

    <div>
        <label for='content'> Content </textarea>
        <textarea name='content' rows='4' cols='40' id='content' placeholder='Article Content'><?=$content; ?></textarea>
    </div>

    <div>
        <label for='published_at'> Publication date and time</label>
        <input type='datetime-local' name='published_at' id='published_at' value="<?=$published_at; ?>">
    </div>

        <button> Add </button>
    </form>

<?php require 'includes/footer.php'; ?>