<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
$server_name="localhost";
$user_name="root";
$password="";
$database_name="student1";
$conn =new mysqli($server_name,$user_name,$password,$database_name);

                $id =$_GET['id'];

                $name =$_GET['Name'];
                $age =$_GET['Age'];
                $place =$_GET['Place'];
                $qualification =$_GET['Qualification'];
 $sql = "UPDATE `student11` SET `Name`='$name',`Age`='$age',`Place`='$place',`Qualification`='$qualification' WHERE `id` =$id";
 $result =$conn->query($sql);

header("Location: ./index.php");




?>
    
</body>
</html>