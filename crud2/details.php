<?php
    include('connection.php');

    if(isset($_REQUEST['action'])){
        if($_REQUEST['action'] == 'details'){
             $id = $_REQUEST['id'];

             $Query = "SELECT * FROM students2 WHERE id = $id";
             $Result = mysqli_query($Connection, $Query);
             $Data = mysqli_fetch_assoc($Result);
            //  var_dump($Data);
        }
    }



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details</title>
</head>
<body>

    <table>
        <thead>
            <tr>
                <th>Attribute</th>
                <th>Values</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Id : </td>
                <td><?php echo $Data['id']; ?></td>
            </tr>
            <tr>
                <td>Name : </td>
                <td><?php echo $Data['name']; ?></td>
            </tr>
            <tr>
                <td>Roll : </td>
                <td><?php echo $Data['roll']; ?></td>
            </tr>
            <tr>
                <td>Number : </td>
                <td><?php echo $Data['number']; ?></td>
            </tr>
            <tr>
                <td>Email : </td>
                <td><?php echo $Data['email']; ?></td>
            </tr>

        </tbody>
    </table>
    
</body>
</html>