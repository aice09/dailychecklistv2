<?php
session_start();

// Connection variables 
$host= getenv('DB_HOST');
$user= getenv('DB_USERNAME');
$password= getenv('DB_PASSWORD');
$database= getenv('DB_DATABASE');
$port= getenv('DB_PORT');

// Connection variables  2
$host_impex= getenv('DB_HOST_IMPEX');
$user_impex= getenv('DB_USERNAME_IMPEX');
$password_impex= getenv('DB_PASSWORD_IMPEX');
$database_impex= getenv('DB_DATABASE_IMPEX');
$port_impex= getenv('DB_PORT_IMPEX');


// Connect to MySQL Database 
$db = mysqli_connect($host, $user, $password,$database,$port) or die("Could not connect to database");
$db_impex = mysqli_connect($host_impex, $user_impex, $password_impex,$database_impex,$port_impex) or die("Could not connect to database");

date_default_timezone_set(getenv('DB_TIMEZONE')); //Default Timezone
$currentdate = date('m/d/Y H:i:s'); //Current Date
$currentdate2 = date('m/d/Y h:i A', strtotime($currentdate)); //Current Date With AM & PM

?> 