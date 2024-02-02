 <?php include_once("include/nav.php");?>


  <main id="main" class="main container">

    <div class="pagetitle container">
      <h1>Add Student</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Pages</li>
          <li class="breadcrumb-item active">Add Student</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section contact ">

      

        <div class="col-xl-6">
          <div class="card p-4">
            <form action="form" method="post" class="php-email-form">
              <div class="row gy-4">


                <div class="col-md-6 ">
                  <input type="text" class="form-control" name="roll_number" placeholder="Roll Number" required>
                </div>

                <div class="col-md-6">
                  <input type="text" name="name" class="form-control" placeholder="Full Name" required>
                </div>

                  <div class="col-md-6 ">
                  <input type="text" class="form-control" name="semester" placeholder="module 1 grade"  required>
                </div>


                
                <div class="col-md-6 ">
                  <input type="text" class="form-control" name="module_1_exam" placeholder="module 1 grade"  required>
                </div>

                  <div class="col-md-6 ">
                  <input type="text" class="form-control" name="module_2_exam" placeholder="module 2 grade"  required>
                </div>

                  <div class="col-md-6 ">
                  <input type="text" class="form-control" name="module_3_exam" placeholder="module 3 grade"  required>
                </div>

              



                <div class="col-md-12 text-center">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <button type="submit">Add Student</button>
                </div>

              </div>
            </form>
          </div>

        </div>
    </section>

  </main>



