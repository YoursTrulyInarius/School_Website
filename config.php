<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'school_db');

/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD);

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Create database if not exists
$sql = "CREATE DATABASE IF NOT EXISTS " . DB_NAME;
if(mysqli_query($link, $sql)){
    mysqli_select_db($link, DB_NAME);
} else {
    die("ERROR: Could not create database. " . mysqli_error($link));
}

// Function to safely handle database queries
function db_query($query) {
    global $link;
    return mysqli_query($link, $query);
}

// Function to escape strings
function db_escape($str) {
    global $link;
    return mysqli_real_escape_string($link, $str);
}
?>
