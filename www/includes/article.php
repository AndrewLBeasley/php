<?
//stores all functions relating to articles. 


//gets single record based on passed id
function getArticle($conn, $id){
    //sql statement selecting the article with the given id
    $sql = "SELECT *
            FROM article
            WHERE id = ?";

    //assigns the value of $stmt to a prepared statement
    $stmt = mysqli_prepare($conn, $sql);

    //if the statement is returned as false, an error is echoed
    //else, the returned value is assigned to the prepared statement and bound as an integer
    if($stmt === false){
        echo mysqli_error($conn);
    }else{
        //binds ther returned article to $stmt as an integer
        mysqli_stmt_bind_param($stmt, 'i', $id);

        //executes the statement, assigns value of $result to the return from $stmt
        //returns $result as an associative array
        if(mysqli_stmt_execute($stmt)){
            $result = mysqli_stmt_get_result($stmt);
            return mysqli_fetch_array($result, MYSQLI_ASSOC);
        };
    };
};


//function that validates article properties
function validateArticle($title, $content, $published_at){
    $error = [];
    if($title == ''){
        //appends error message to the $error variable using the $error[] method.
        $error[] = 'Title is required';
    };

    //error will be submitted if no data for content is supplied.
    if($content == ''){
        $error[] = 'Content is required';
    };

    //checks to make sure value for $published_at is in the correct format.
    if($published_at != ''){
        //if $published_at is not empty, creates new date and time format.
        $date_time = date_create_from_format('Y-m-d H:i:s', $published_at);

        //if $date_time is false, submits an error to the error array.
        if($date_time == false){
            $error[] = 'Invalid date and time';
        }else{
            $date_errors = date_get_last_errors();

            var_dump($date_errors); exit;
        }
    };
    return $error;
};