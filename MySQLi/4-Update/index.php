<!DOCTYPE html>
<html>
<head>
<title>MySQL PDO</title>
</head>

<body>

<h1>PDO - Check Connection</h1>

<?php
$query = " DELETE FROM `student` WHERE `ID` :ID";
$dns = "mysql:host=localhost;dbname=schooldb";
$username = "root";
$password = "Safi1994?";


try{
    $db = new PDO($dns , $username , $password);
    // Prepared Statement
    $statement = $db->prepare($query);
    $statement->bindValue(':ID', '4',   PDO::PARAM_INT);

    // Execute the Query
    if($statement->execute() ){
        echo "Records Deleted Succesfully!";
    }else {
        echo "Unable to Delete records!";
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