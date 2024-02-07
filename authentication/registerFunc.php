<?php
// user registration
if(isset($_POST['register'])){
    // database connection 
    include_once("../database/config.php");

    // user input 
    $inputEmail = $_POST['email'];
    $inputUsername = $_POST['username'];
    $inputPasskey = $_POST['passkey'];
    $inputUserType = $_POST['usertype'];

    $connection = doConnection();

    if(getUserByUsername($connection, $inputUsername) == null){
        // hashing password 
        $hashPasskey = password_hash($inputPasskey, PASSWORD_BCRYPT);
    }
}
?>