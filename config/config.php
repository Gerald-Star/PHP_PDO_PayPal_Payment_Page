<?php 


//host name
define('HOST', 'localhost');

//dbname 
define('DBNAME', 'db_paypal_payment_page');

//username
define('USERNAME', 'root');

//password
define('PASSWORD', '');

//create object to connect database using PDO
try {
    $pdo = new PDO("mysql:host=" . HOST . ";dbname=" . DBNAME, USERNAME, PASSWORD);
    // set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch (PDOException $e) {
    die("ERROR: Could not connect. " . $e->getMessage());
}








?>