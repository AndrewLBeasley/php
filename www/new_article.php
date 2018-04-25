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

        $insert = "INSERT INTO article (title, content, published_at)
                    VALUES('" . $_POST['title'] . "','"
                              . $_POST['content'] . "','"
                              . $_POST['published_at'] . "')";
        

        $results = mysqli_query($conn, $insert);

            if($results === false){
                echo mysqli_error($conn);
            }else{
                $id = mysqli_insert_id($conn);
                echo "inserted record with ID: $id";
            };
    };

    //SQL insert into statement
    //declare table in which to insert
    //can also specify exact columns in which to insert
    //followed by the values that you want to insert into the table
    //can also insert multiple values at once into specified columns by continuing to specify values
    //VALUES(1, 2), (3, 4), etc...
    //allows the user to insert multiple values with one insert statement
   
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