<?php
    include('connection.php');


    if(isset($_REQUEST['action'])){
        if($_REQUEST['action'] == 'edit'){
            $id = $_REQUEST['id'];
            $Query = "SELECT * FROM students2 WHERE id = $id LIMIT 1 ";
            $Result = mysqli_query($Connection, $Query);
            $Data = mysqli_fetch_assoc($Result);
            // var_dump($Data);
        }
        if($_REQUEST['action'] == 'Update'){
            $id = $_REQUEST['id'];
            $name = $_POST['name'];
            $roll = $_POST['roll'];
            $number = $_POST['number'];
            $email = $_POST['email'];      
            
            echo $Query = "UPDATE students2 SET name = '$name', roll='$roll', number = '$number', email = '$email' WHERE id = $id ";
            $Result = mysqli_query($Connection, $Query);
            if($Result){
                echo "Updated successfully";
            }else{
                echo "Error";
            }
        }
       
    }


    // if(isset($_POST['submit'])){
    //     if($_POST['submit'] == 'Update'){
    //         $id = $_POST['id'];
    //         $name = $_POST['name'];
    //         $roll = $_POST['roll'];
    //         $number = $_POST['number'];
    //         $email = $_POST['email'];

    //          echo $Query = "UPDATE students2 SET name = '$name', roll='$roll', number = '$number', email = '$email' WHERE id = '$id '";
    //         $Result = mysqli_query($Connection, $Query);
    //         if($Result){
    //             echo "Updated";
    //         }else{
    //             echo "Error";
    //         }
    //     }
    // }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit</title>
</head>
<body>
    <div class="mx-auto m-5 p-5 bg-info" style="width: 400px;">
            <form action="edit.php?action=Update&id=<?php echo $Data['id']; ?> " method="post" enctype="multipart/form-data">
                <label for="name">Name</label><br>
                <input type="text" name="name" value="<?php echo $Data['name']; ?>" class="form-control"><br>

                <label for="roll">Roll</label><br>
                <input type="number" name="roll" value="<?php echo $Data['roll']; ?>" class="form-control"><br>

                <label for="number">Number</label><br>
                <input type="number" name="number" value="<?php echo $Data['number']; ?>" class="form-control"><br>

                <label for="email">Email</label><br>
                <input type="email" name="email" value="<?php echo $Data['email']; ?>" class="form-control"><br>

                <input type="submit" name="submit" value="Update" class="btn btn-success btn-lg mb-1">
            </form>
        </div>
</body>
</html>