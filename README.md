# php
Follows Udemy php for beginners course step by step.

    1. Declaring php, variables, types, operators, var_dump function, and echo.
    2. Arrays in php.
        a. creating arrays/accessing elements.
        b. multidimensional arrays/accessing nested elements
        c. loops
            1c. the foreach loop
    3. The if construct and other operation constructs 
        a. if statement and control structure
            1a. conditions and executeable code block.
        b. empty() function.
        c. else for false conditions
        d. conditional operators and their use as if/else statement conditions
        e. the while loop
        f. the for loop
        g.the else/if construct
        h. switch statement

    4. Basic HTML
    5. PHP & HTML
        a. basics of using php inside html
        b. using php control structures inside of html.
        c. whitespace and comments inside of html
        d. comments and coding standards within php.

    6. introduction to databases
        a. intro, displaying array data in html.
        b. database interaction with mySQL/mariaDB
            To manage your databases if using xxamp, use phpmyadmin.
            1. From the phpadmin home screen, click databases.
                2a. enter a name, and choose a collation. a collation is a set of rules for how the db server compares strings of text. 
                3b. choosing utf8mb4_unicode_ci provides the widest range of comaprison sets in every language.
                4c. choose your collation, and then click create to create a new DB.
            2. create a new secure user account that can work with the DB
        c. creating the database structure
            1. database structure is created using tables, each table is made with rows.
            2. each row represents a record or item. 
            3. each row is divided into columns, and each column represents a particular piece of information about the row. 
            4. the information within columns can be represented using various data types. 
            5. each row has a specific ID column that is usually an integer, known as a primary key.
                5a. ids are used to specifically reference that row. 
            6. to create a table, navigate to the new database, enter a table name, and click create table. 
                1. the id column should be integer, with an index of primary key, and auto incrementing.
                2. columns that will hold strings should be varchar, or text, with a dilineated length provided. 
                3. columns assigned as TEXT do not have to have a provided max length. 
                4. columns that can accept no values should be designated as such
        d. SQL
        e. Making queries faster
            When making a selection using SQL the entire database is scanned for the data being requested.
            Indexes can be used to make certain data easier to find because the entire DB doesnt need to be scanned during a query. 
            DB servers maintain indexes in the background. Once an index is defined, the user doesn need to worry about it anymore. 
                If an index for a column is created, a query of the DB will automatically search the index as opposed to the entire DB.
            Indexes also offer a quicker way to return ordered data. Query by index can return data in ascending or descending order. 
            
        f. connect to the DB using php
            To connect to the DB from php, you need 4 pieces of information
                1. the address or host of the server.
                2. the name of the DB.
                3. the username.
                4. the password.
            use the MySQL Improved extension mysqli_connect

        g. query the database

    7. multiple pages in php
       a.  creates a copy of the initial db connection and only renders the data of one return
       b.  passing data in the url 
            b1.using the query string, which is whatever follows ?
       c. Avoiding SQL injection.
       d. extract repeated code. 
            1. include or require files that might be used repeatedly throughout code. 
                Quiz and recap for this section
                    The query string is the part of the URL that comes after the ?, ?=3.
                    The superglobal method $_GET returns an array that contains key value pairs from the query string.
                    All data within a query string is just a string.
                    Require will stop a script when a file isnt found, include will keep executing the script forever. 
                    The web server can be configured using directives in .htaccess files

    8. HTML Forms
        a. Getting data from the user
        b. get v post
        c. basic input types
        d. multi-line text controll with text-area element
        e. the select element
        f. checkboxes