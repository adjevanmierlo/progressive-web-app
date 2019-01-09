<?php
$servername = "localhost"; /*dit is je servernaam (mamp) */
$username = "root";        /*dit is je root   (mamp) */             
$password = "root";            /*dit is je pasword   (mamp) */
$database = "woordspel";  /*dit is de naam van je database (mamop)  */
try {
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connected successfully: <br>"; 
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
    
?>