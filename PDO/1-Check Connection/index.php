<!DOCTYPE html>
<html>
<head>
<title>MySQL PDO</title>
</head>

<body>

<h1>PDO - Check Connection</h1>

<?php

$dns = "mysql:host=localhost;dbname=schooldb";
$username = "root";
$password = "Safi1994?";


try{
    $db = new PDO($dns , $username , $password);

}catch(Exception $e){
$error_message = $e->getMessage();

echo "<p> Error Message : $error_message</p>";
}
?>
</body>

</html>