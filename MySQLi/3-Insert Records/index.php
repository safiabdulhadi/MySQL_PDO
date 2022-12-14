<!DOCTYPE html>
<html>
<head>
<title>MySQL PDO</title>
</head>

<body>

<h1>PDO - Check Connection</h1>

<?php
$query = "INSERT INTO `student`(`ID`,`NAME`) VALUES (:ID, :NAME)";
$dns = "mysql:host=localhost;dbname=schooldb";
$username = "root";
$password = "Safi1994?";


try{
    $db = new PDO($dns , $username , $password);
    // Prepared Statement
    $statement = $db->prepare($query);

    $statement->bindValue(':ID', 5, PDO::PARAM_INT);
    $statement->bindValue(':NAME', 'WENDY', PDO::PARAM_STR);

    // Execute the Query
    if($statement->execute() ){
        echo "Records Insert Succesfully!";
    }else {
        echo "Unable to insert records!";
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