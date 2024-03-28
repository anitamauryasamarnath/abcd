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
               
            if(!$conn){
             die("Connection failer".mysqli_connect_error());
                }else{
                 echo "Connection Successfully";
                }
                $id =$_GET['id'];
                $name =$_GET['Name'];
                $age =$_GET['Age'];
                $place =$_GET['Place'];
                $qualification =$_GET['Qualification'];

                $stmt = $conn -> prepare("INSERT INTO `student11`(id,Name, Age,Place,Qualification) VALUES (?,?,?,?,?)");
                $stmt ->bind_param("isdss",$id,$name,$age,$place,$qualification);

                $stmt -> execute();
                header("Location: ./index.php");

                ?>
    
</body>
</html>