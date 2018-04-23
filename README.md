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
                