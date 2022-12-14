<!DOCTYPE html>
<html>
<head>
<title>MySQLi</title>
</head>

<body>

<h1>MySQLi - Check Display</h1>

<?php

// $dns = "mysql:host=localhost;dbname=schooldb";
$query = "SELECT * FROM student;";
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
    $result = $db->query($query);

    while($student = $result->fetch_assoc() ){
        echo " ID: " . $student["ID"] . "<br>";
        echo " NAME: " . $student["NAME"] . "<br>";
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