<?php
if(isset($_POST['login'])){
    // taking user input parameter
    $inputUsername = "";
    $inputPassword = "";
    $errorMsg = array();
    if(isset($_POST['username'])){
        $inputUsername = $_POST['username'];
    } else {
        // associative
        $errorMsg = [
            "username" => "field required"
        ];
    }

    if(isset($_POST['password'])) {
        $inputPassword = $_POST["password"];
    } else {
        $errorMsg = [
            "password" => "field required"
        ];
    }

    // fetching data from database according to username
    $connection = doConnection();

    // response data
    $dbData = getUserByUsername($connection, $inputUsername);
}
?>