<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="U-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
      body{
        background-image: linear-gradient(to right,white,lightpink);
      }
      .j{
      width: 400px;
      }
      .c{
        margin-left: 600px;
      }
      .u{
        margin-left: 100px;
        background-color: blue;
        color: white;
      }
    </style>
</head>
<body>
  <div class="container mt-5 c">
    <div class="row">
      <div class="jumbotron bg-light p-5 m-5 j rounded">

    <?php
     $server_name="localhost";
     $user_name="root";
     $password="";
     $database_name="student1";
     $conn =new mysqli($server_name,$user_name,$password,$database_name);
     
    $id =$_GET['id']; 

      $sql = "SELECT * FROM student11 WHERE `student11`.`id` =$id";
      $result =$conn->query($sql);

      if($result->num_rows > 0){
        while($row =$result->fetch_assoc()){
            ?>
            
             <form action="./update_model1.php" method="get">
          id:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="number" name="id" value="<?php echo ($row['id']);?>"><br><br>
          Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="Name" value="<?php echo ($row['Name']);?>"><br><br>
          Age :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="date" name="Age" value="<?php echo ($row['Age']);?>"><br><br>
          Place: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="Place" value="<?php echo ($row['Place']);?>"><br><br>
          Qualification: <input type="text" name="Qualification" value="<?php echo ($row['Qualification']);?>"><br><br>
          <input type="submit" value="Update" class="u">
              
       </form>  
            <?php
        }
      }
    
    ?>    
    </div>
    </div>
</div>
    
</body>
</html>