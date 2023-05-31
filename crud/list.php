<?php
    include('connection.php');

    if(isset($_POST['submit'])){
        if($_POST['submit'] == 'Delete'){
            $id = $_POST['id'];

            $Query = "DELETE FROM students WHERE id = $id";
            $Result = mysqli_query($Connection,$Query);
            if($Result){
                echo "Data Delete Successfully";
            }else{
                echo "Something went rong !";
            }
            

        }
    }
    
    $Query = "SELECT * FROM students";
    $Result = mysqli_query($Connection,$Query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Data View</title>
</head>
<body>
    <a href="index.php">Home</a>
    <table class="table">
        <h2>View of Student</h2>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Roll</th>
                <th>Number</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php while($Data = mysqli_fetch_assoc($Result)){ ?>
                <tr>
                    <td><?php echo $Data['id']; ?></td>
                    <td><?php echo $Data['name']; ?></td>
                    <td><?php echo $Data['roll']; ?></td>
                    <td><?php echo $Data['number']; ?></td>
                    <td><?php echo $Data['email']; ?></td>
                    <td><a href="edit.php?action=edit&id=<?php echo $Data['id']; ?>">Edit</a></td>
                    <td><form action="list.php" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?php echo $Data['id']; ?>">
                        <input type="submit" name="submit" value="Delete">
                    </form></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

    
</body>
</html>