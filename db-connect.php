<?php 
// Hostname
$host = "e-conrol-db.c9kqumu24jgr.us-west-2.rds.amazonaws.com";
// Username
$uname = "admin";
// Password
$pw = "Training123";
// Database Name
$dbname = "simple_attendance_db";

try{
    $conn = new MySQLi($host, $uname, $pw, $dbname);
}catch(Exception $e){
    echo "Database Connection Failed: <br>";
    print_r($e->getMessage());
    exit;
}
?>