<?php

//start session
    session_start();
    //create constants to non repeating values
    define('SITEURL','http://localhost/symbiote/');
    define('LOCALHOST','localhost');
    define('DB_USERNAME' ,'root');
    define('DB_PASSWORD','');
    define('DB_NAME','symbiote');

    //execute and save in db
    $conn = mysqli_connect(LOCALHOST,DB_USERNAME,DB_PASSWORD) or die(mysqli_error());
    $db_select = mysqli_select_db($conn,DB_NAME) or die(mysqli_error());
    
?>