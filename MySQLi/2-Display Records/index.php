<!DOCTYPE html>
<html>
<head>
<title>MySQL PDO</title>
</head>

<body>

<h1>PDO - Check Connection</h1>

<?php
$query = "SELECT * FROM student;";
$dns = "mysql:host=localhost;dbname=schooldb";
$username = "root";
$password = "Safi1994?";


try{
    $db = new PDO($dns , $username , $password);
    // Prepared Statement

    $statement = $db->prepare($query);

    // Execute the Query
    $statement->execute();
    // Loop the records
    while($student = $statement->fetch() ){
        echo " ID: " . $student["ID"] . "<br>";
        echo " NAME: " . $student["NAME"] . "<br>";
    }
    // Close the Statement
    $statement->closeCursor();
}catch(Exception $e){
$error_message = $e->getMessage();

echo "<p> Error Message : $error_message</p>";
}
?>
</body>

</html>