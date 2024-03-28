<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
    body{
        background-image: linear-gradient(to right,white,lightpink);
    }
    .i{
        margin-left: 600px;
    }
    .s{
        margin-left: 100px;
        background-color: blue;
        color: white;
    }
    .j{
        width: 500px;
    }

    </style>
</head>
<body>
    <div class="container mt-5 i">
        <div class="row">
            <div class="jumbotron bg-light mt-5 p-5 j rounded">
               
            
       <form action="./insert_model.php" method="get">
          Sid: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" name="id"><br><br>
          Name: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="Name"><br><br>
          Age :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="date" name="Age"><br><br>
          Place:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="Place"><br><br>
          Qualification: <input type="text" name="Qualification"><br><br>
          <input type="submit" value="Insert" class="s">
              



       </form>
            </div>  
        
    </div>
    </div>
    
</body>
</html>