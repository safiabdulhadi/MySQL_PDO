<!DOCTYPE html>
<html>
<head>
<title>MySQLi</title>
</head>

<body>

<h1>MySQLi - Check Connection</h1>

<?php

// $dns = "mysql:host=localhost;dbname=schooldb";
$hostname = "localhost";
$dbname = "schooldb";
$username = "root";
$password = "Safi1994?";


try{
    // Establish the connection
    $db = new mysqli($hostname, $username , $password,$dbname);

    // Check the connecdtion
    if($db->connect_error){
        die("Connection Failed " . $db->connect_error);
    }
    // Close the connection
    $db->close();

}catch(Exception $e){
$error_message = $e->getMessage();

echo "<p> Error Message : $error_message</p>";
}
?>
</body>

</html>