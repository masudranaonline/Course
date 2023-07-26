<?php
    include('model/Db.php');
    include('model/Student.php');

    $obj = new Student();
    $Data = $obj->getAll();
    // var_dump($Data);

?>
<main id="main" class="main">

<div class="pagetitle">
  <h1>Blank Page</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
      <li class="breadcrumb-item">Pages</li>
      <li class="breadcrumb-item active">Blank</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section">
  <div class="row">
    <div class="col-lg-12>
      <div class="card">
      <div class="card-body">
              <h5 class="card-title">Table with stripped rows</h5>

              <!-- Table with stripped rows -->
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Roll</th>
                    <th scope="col">Number</th>
                    <th scope="col">Subject</th>
                    <th scope="col">Address</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                    <?php foreach($Data as $Student){ ?>
                  <tr>
                    <td><?php echo $Student['id']; ?></td>
                    <td><?php echo $Student['name']; ?></td>
                    <td><?php echo $Student['roll']; ?></td>
                    <td><?php echo $Student['number']; ?></td>
                    <td><?php echo $Student['subject']; ?></td>
                    <td><?php echo $Student['address']; ?></td>
                    <td><form action="index.php?page=student_edit" method="post">
                        <input type="hidden" name="id" value="<?php echo $Student['id']; ?>">
                        <button type="submit" value="Edit" name="submit" class="btn btn-warning"><i class="bi bi-pencil-square"></i></button>
                    </form></td>
                    <td><form action="controller/student_controller.php" method="post">
                        <input type="hidden" name="id" value="<?php echo $Student['id']; ?>">
                        <button type="submit" value="Delete" name="submit" class="btn btn-danger"><i class="bi bi-trash"></i></button>
                    </form></td>
                  </tr>
                     <?php } ?>
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
      </div>

    </div>
    </div>
  </div>
</section>

</main><!-- End #main -->
