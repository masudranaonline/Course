<?php

    include('model/Db.php');
    include('model/Student.php');

    if(isset($_POST['submit'])){
        if($_POST['submit'] == 'Edit'){
            $id = $_POST['id'];

            $obj = new Student();
            $Data = $obj->getByPk($id);
            var_dump($Data);
        }
    }


?>
<main id="main" class="main">

<div class="pagetitle">
  <h1>Student Page</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.php">Home</a></li>
      <li class="breadcrumb-item">Student add</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section">
  <div class="row">
    <div class="col-lg-8 offset-lg-2">

      <div class="card">
      <div class="card-body">
              <h5 class="card-title">Student Form</h5>

              <!-- Vertical Form -->
              <form class="row g-3" action="controller/student_controller.php" method="post" enctype="multipart/form-data">
                <div class="col-12">
                    <input type="hidden" name="id" value="<?php echo $Data[0]['id']; ?>">
                  <label for="inputNanme4" class="form-label">Your Name</label>
                  <input type="text"  name="name" class="form-control" id="inputNanme4" value="<?php echo $Data[0]['name']; ?>">
                </div>
                <div class="col-12">
                  <label for="inputEmail4" class="form-label">Roll</label>
                  <input type="number" name="roll" value="<?php echo $Data[0]['roll']; ?>" class="form-control" id="inputEmail4">
                </div>
                <div class="col-12">
                  <label for="inputPassword4" class="form-label">Number</label>
                  <input type="number" name="number" value="<?php echo $Data[0]['number']; ?>" class="form-control" id="inputPassword4">
                </div>
                <div class="col-12">
                  <label for="inputSubject" class="form-label">Subject</label>
                  <input type="text" name="subject" value="<?php echo $Data[0]['subject']; ?>" class="form-control" id="inputSubject">
                </div>
                <div class="col-12">
                  <label for="inputAddress" class="form-label">Address</label>
                  <textarea name="address" class="form-control" id="inputAddress" cols="30" rows="5">
                    <?php echo $Data[0]['address']; ?>
                  </textarea>
                </div>
                <div class="text-center">
                  <button type="submit" name="submit" value="Update" class="btn btn-primary">Update</button>
                </div>
              </form><!-- Vertical Form -->

            </div>
    </div>
  </div>
</section>

</main><!-- End #main -->
