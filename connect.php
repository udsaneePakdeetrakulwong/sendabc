<?php
$serverName = 'localhost';
$userName = 'root';
$userPassword = ''; 
$dbname = 'sendabc';

try {
    $conn = new PDO(
        "mysql:host=localhost;dbname=$dbname;charset=UTF8",
         $userName,
         $userPassword 
    );

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo 'You are now connecting to database!';

} catch (PDOException $e) {
    echo 'Sorry! You cannot connect to database: ' . $e->getMessage();
}
?>