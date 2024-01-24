<?php
// defining database configuration properties
$localhost = "localhost"; // we can also define 127.0.0.1
$user = "root"; // database user
$password = ""; // database user password

// establishing database connection
$connection = mysqli_connect($localhost, $user, $password);

// here $connection is the connection object
if($connection){
    // building database create sql query in string
    $sql = "CREATE DATABASE project_ims_test";
    
    // executing sql query with connection object
    // mysqli_query() takes
    // first arg as connection
    // secong arg as query string
    $respone = mysqli_query($connection, $sql);
    echo "Database created succesfully";
    
    if($dbCreate){
        $useDbSql = "USE project_tms_test";
        $useDb = 

        // database name
        $dbName = "project_ims_test";
        // instead of doing this we can create new connection object
        $imsConnection = mysqli_connect($localhost, $user, $password, $dbName);

        // creatiing database tables
        // 1. usertype
        $utSql = "CREATE TABLE ims_usertype(
            ut_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
            userytype VARCHAR(200) NOT NULL,
            is_removed TINYINT NOT NULL DEFAULT 0,
            is_created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
            is_updated_at DATETIME NULL,
            is_removed_at DATETIME NULL
        )";
        $utCreate = mysqli_query($imsConnection, $utSql);
    }
} else {
    echo "No connection found!";
    exit();
}
?>