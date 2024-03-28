<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     <style>
        body{
            background-color: lightblue;
        }
        .center{
            margin-left: 550px;
        }
        .fa{
            color: black;
            font-size: 25px;
        }
     </style>

</head>
<body>
    <div class="container mt-5">
         <h1 class="text-center">Student Form</h1> 
         <hr width="200px" class="center"> 
        <table class="table table-striped table-hover table-success">
            <thead class="table-dark">
            <a href="insert_controllar.php"><button type="button" class="btn btn-primary mb-5 rounded-pill">User add / Create</button></a>
            <tr>
                <th>id</th>
                <th>Name</th>
                <th>Age</th>
                
                <th>Place</th>
                <th>Qualification</th>
               
                <th>UPDATE</th>
                <th>DELETE</th>
            </tr>
            </thead>
            <tbody>
               <?php
               $server_name="localhost";
               $user_name="root";
               $password="";
               $database_name="student1";
               $conn =new mysqli($server_name,$user_name,$password,$database_name);
               
            //    if(!$conn){
            //     die("Connection failer".mysqli_connect_error());
            //    }else{
            //     echo "Connection Successfully";
            //    }
                $sql = "SELECT * FROM `student11`";
                $result =$conn->query($sql);
                if($result->num_rows > 0){
                    while($row=$result->fetch_assoc()){
                        ?>
                        
                        
                        <tr>
                        
                            <td><?php echo ($row['id']);?></td>
                            <td><?php echo ($row['Name']);?></td>
                            <td><?php echo ($row['Age']);?></td>
                            <td><?php echo ($row['Place']);?></td>
                            <td><?php echo ($row['Qualification']);?></td>

                            <td><a href="./update_controllar.php?id=<?php echo ($row['id']);?>"><i class="fa fa-pencil" aria-hidden="true"></i></a></td>
                            <td><a href="./delete1.php?id=<?php echo ($row['id']);?>" onclick="return confirm('Are you sure you want to deleted this student?');"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
                         </tr>
                      
                       <?php         
                    }

                }

               ?>
             

                
            </tbody>
           

        </table>
    
    
    </div>
    
</body>
</html>