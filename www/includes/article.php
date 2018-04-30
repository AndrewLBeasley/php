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