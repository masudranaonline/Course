<?php
    include('connection.php');

    if(isset($_POST['submit'])){
        if($_POST['submit'] == 'Update'){
            $id = $_POST['id'];
            $name = $_POST['name'];
            $roll = $_POST['roll'];
            $number = $_POST['number'];
            $email = $_POST['email'];

             $Query = "UPDATE students SET name = '$name', roll = '$roll', number = '$number', email = '$email' WHERE id = $id";
             
             
            $Result = mysqli_query($Connection, $Query);
            if($Result){
                echo "Updated successfully";
            }else{
                echo "something went rong";
            }

        }
    }

    if(isset($_REQUEST['action'])){
        if($_REQUEST['action'] == 'edit'){
              $id = $_REQUEST['id'];

            $Query = "SELECT * FROM students WHERE id = $id LIMIT 1";
            
            $Result = mysqli_query($Connection, $Query);
            $Data = mysqli_fetch_assoc($Result);


        }
    }





?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Hello, world!</title>
	<title>Student Registration Page</title>
</head>
<body>
	
	<div class="mx-auto m-5 p-5 bg-info" style="width: 400px;">
		<form action="edit.php?action=edit&id=<?php echo $Data['id']; ?>" method="post" enctype="multipart/form-data">
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