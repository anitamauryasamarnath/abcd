
    <?php
     
     $server_name="localhost";
     $user_name="root";
     $password="";
     $database_name="student1";
     $conn =new mysqli($server_name,$user_name,$password,$database_name);

     $id =$_GET['id'];
      $sql ="DELETE FROM student11 WHERE id =$id";
      $result =$conn->query($sql);

      if($conn->query($sql) === TRUE){
        echo "<script> 
        alert('Record deleted successfully');
        window.location.href='index.php';
        </script>";

      }
    $conn->close();

     
    ?>

