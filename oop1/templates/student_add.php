
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
                  <label for="inputNanme4" class="form-label">Your Name</label>
                  <input type="text" name="name" class="form-control" id="inputNanme4">
                </div>
                <div class="col-12">
                  <label for="inputEmail4" class="form-label">Roll</label>
                  <input type="number" name="roll" class="form-control" id="inputEmail4">
                </div>
                <div class="col-12">
                  <label for="inputPassword4" class="form-label">Number</label>
                  <input type="number" name="number" class="form-control" id="inputPassword4">
                </div>
                <div class="col-12">
                  <label for="inputSubject" class="form-label">Subject</label>
                  <input type="text" name="subject" class="form-control" id="inputSubject">
                </div>
                <div class="col-12">
                  <label for="inputAddress" class="form-label">Address</label>
                  <textarea name="address" class="form-control" id="inputAddress" cols="30" rows="5"></textarea>
                </div>
                <div class="text-center">
                  <button type="submit" name="submit" value="Submit" class="btn btn-primary">Submit</button>
                </div>
              </form><!-- Vertical Form -->

            </div>
    </div>
  </div>
</section>

</main><!-- End #main -->
