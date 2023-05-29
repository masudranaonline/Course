<?php

    include('connection.php');

    if(isset($_POST['submit'])){
        $Name   = $_POST['name'];
        $Roll   = $_POST['roll'];
        $Number = $_POST['number'];
        $Email  = $_POST['email'];

         $Query = "INSERT INTO students2(name, roll, number, email) VALUES('$Name', '$Roll', '$Number', '$Email')";
         $Result = mysqli_query($Connection, $Query);

         if($Result){
            echo "Data Insert successfully";
         }else{
            echo "Something went rong";
         }
    }



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Registration page</title>
</head>
<body>
    <a href="view.php">View list</a>
    <div class="mx-auto m-5 p-5 bg-info" style="width: 400px;">
        <form action="index.php" method="post" enctype="multipart/form-data">
            <label for="name">Name</label><br>
            <input type="text" name="name" class="form-control"><br>

            <label for="roll">Roll</label><br>
            <input type="number" name="roll" class="form-control"><br>

            <label for="number">Number</label><br>
            <input type="number" name="number" class="form-control"><br>

            <label for="email">Email</label><br>
            <input type="email" name="email" class="form-control"><br>

            <input type="submit" name="submit" value="Register now" class="btn btn-success btn-lg mb-1">
        </form>
    </div>
    
</body>
</html>