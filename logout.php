<?php

include 'config/constants.php';
//1.destroy the session
session_destroy();//unset $_SESSION['user]

//redirect to login
header('location:'.SITEURL.'login.php');

?>