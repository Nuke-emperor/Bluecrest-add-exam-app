  <?php include_once("include/nav.php");?>


    <!-- ======= Header ======= -->
  
    <main id="main" class="main">

      <div class="pagetitle">
        <h1>Add Student</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item">Student</li> 
            <li class="breadcrumb-item active">Add </li>
          </ol>
        </nav>
      </div><!-- End Page Title -->

      <!-- NETWORKING STUDENTS REPORT -->

      <section class="section profile">
        <div class="row">
          <div class="col-xl-3">

            <div class="card">
              <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

                
                <h2 class="text-danger">NETWORKING</h2>
                
              </div>
            </div>

          </div>

          <div class="col-xl-8">

            <div class="card">
              <div class="card-body pt-3">
                <!-- Bordered Tabs -->
                <ul class="nav nav-tabs nav-tabs-bordered">

                  <li class="nav-item">
                    <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#semester-1">ADD SEM 1</button>
                  </li>

                  <li class="nav-item">
                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#semester-2">ADD SEM 2</button>
                  </li>

                

                  <li class="nav-item">
                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#semester-3">ADD SEM 3</button>
                  </li>

                  <li class="nav-item">
                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#semester-4">ADD SEM 4</button>
                  </li>

                </ul>

                <!-- add semester 1 networking -->
                <div class="tab-content pt-2">        
                  <div class="tab-pane show active fade pt-3" id="semester-1">
                    
                <form  method="post">
                    <div class="row gy-4">
                  <div class="col-md-6 ">
                    <input type="text" class="form-control" name="roll_number" placeholder="Roll Number" require>
                  </div>

                  <div class="col-md-6">
                    <input type="text" name="name" class="form-control" placeholder="Full Name" >
                  </div>

                    
                  <div class="col-md-6 ">
                    <input type="text" class="form-control" name="module_1_exam" placeholder="module 1 grade"  >
                  </div>

                  <div class="col-md-6 ">
                    <input type="text" class="form-control" name="module_2_exam" placeholder="module 2 grade"  >
                  </div>

                  <div class="col-md-12 ">
                    <input type="text" class="form-control" name="module_3_exam" placeholder="module 3 grade"  >
                  </div>

                

                  <div class="col-md-12 text-center">
                    <input type="submit" name="sem1_btn_networking" class="btn btn-primary" value="Add Student">
                  </div>

                </form>
              </div>
            </div>

                <!-- add semester 2 networking -->
                  <div class="tab-pane fade pt-3" id="semester-2">
                    <!-- Change Password Form -->
                <form method="post">
                  <div class="row gy-4">


                  <div class="col-md-6 ">
                    <input type="text" class="form-control" name="roll_number" placeholder="Roll Number" >
                  </div>

                  <div class="col-md-6">
                    <input type="text" name="name" class="form-control" placeholder="Full Name" >
                  </div>

                    
                  <div class="col-md-6 ">
                    <input type="text" class="form-control" name="module_1_exam" placeholder="module 1 grade"  >
                  </div>

                    <div class="col-md-6 ">
                    <input type="text" class="form-control" name="module_2_exam" placeholder="module 2 grade"  >
                  </div>

                    <div class="col-md-12 ">
                    <input type="text" class="form-control" name="module_3_exam" placeholder="module 3 grade"  >
                  </div>

                

                  <div class="col-md-12 text-center">
                   <input type="submit" name="sem2_btn_networking" class="btn btn-primary" value="Add Student">
                  </div>

                </div>
              </form>

                </div>

                
                            <!-- add semester 3 networking -->
                  <div class="tab-pane fade pt-3" id="semester-3">
                    
                  <form  method="post">
                <div class="row gy-4">


                  <div class="col-md-6 ">
                    <input type="text" class="form-control" name="roll_number" placeholder="Roll Number" >
                  </div>

                  <div class="col-md-6">
                    <input type="text" name="name" class="form-control" placeholder="Full Name" >
                  </div>

                    
                  <div class="col-md-6 ">
                    <input type="text" class="form-control" name="module_1_exam" placeholder="module 1 grade"  >
                  </div>

                    <div class="col-md-6 ">
                    <input type="text" class="form-control" name="module_2_exam" placeholder="module 2 grade"  >
                  </div>

                    <div class="col-md-12 ">
                    <input type="text" class="form-control" name="module_3_exam" placeholder="module 3 grade"  >
                  </div>

                

                  <div class="col-md-12 text-center">
                   <input type="submit" name="sem3_btn_networking" class="btn btn-primary" value="Add Student">
                  </div>

                </div>
              </form>

                </div>



                            <!-- add semester 4 networking -->
                  <div class="tab-pane fade pt-3" id="semester-4">
                    <!-- Change Password Form -->
                  <form method="post">
                <div class="row gy-4">


                  <div class="col-md-6 ">
                    <input type="text" class="form-control" name="roll_number" placeholder="Roll Number" >
                  </div>

                  <div class="col-md-6">
                    <input type="text" name="name" class="form-control" placeholder="Full Name" >
                  </div>

                    
                  <div class="col-md-6 ">
                    <input type="text" class="form-control" name="module_1_exam" placeholder="module 1 grade"  >
                  </div>

                    <div class="col-md-6 ">
                    <input type="text" class="form-control" name="module_2_exam" placeholder="module 2 grade"  >
                  </div>

                    <div class="col-md-12 ">
                    <input type="text" class="form-control" name="module_3_exam" placeholder="module 3 grade"  >
                  </div>

                

                  <div class="col-md-12 text-center">
                   <input type="submit" name="sem4_btn_networking" class="btn btn-primary" value="Add Student">
                  </div>
                </div>
              </form>

                </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>






      <!-- SOFTWARE STUDENTS TABLES -->

      <section class="section profile mt-4 ">
        <div class="row">
          <div class="col-xl-3">

            <div class="card">
              <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

                
                <h2 class="text-success">SOFTWARE</h2>
                
              </div>
            </div>

          </div>

          <div class="col-xl-8">

            <div class="card">
              <div class="card-body pt-3">
                <!-- Bordered Tabs -->
                <ul class="nav nav-tabs nav-tabs-bordered">

                  <li class="nav-item">
                    <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#software-1">ADD SEM 1</button>
                  </li>

                  <li class="nav-item">
                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#software-2">ADD SEM 2</button>
                  </li>

                

                  <li class="nav-item">
                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#software-3">ADD SEM 3</button>
                  </li>

                  <li class="nav-item">
                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#software-4">ADD SEM 4</button>
                  </li>

                </ul>

                <div class="tab-content pt-2">

                            <!-- add semester 1 software -->
                  <div class="tab-pane  fade pt-3" id="software-1">
              
                  <form method="post">
                <div class="row gy-4">


                  <div class="col-md-6 ">
                    <input type="text" class="form-control" name="roll_number" placeholder="Roll Number" >
                  </div>

                  <div class="col-md-6">
                    <input type="text" name="name" class="form-control" placeholder="Full Name" >
                  </div>

                    
                  <div class="col-md-6 ">
                    <input type="text" class="form-control" name="module_1_exam" placeholder="module 1 grade"  >
                  </div>

                    <div class="col-md-6 ">
                    <input type="text" class="form-control" name="module_2_exam" placeholder="module 2 grade"  >
                  </div>

                    <div class="col-md-12 ">
                    <input type="text" class="form-control" name="module_3_exam" placeholder="module 3 grade"  >
                  </div>

                

                  <div class="col-md-12 text-center">
                     <input type="submit" name="sem1_btn_software" class="btn btn-primary" value="Add Student">
                  </div>

                </div>
              </form>

                </div>




              <!-- add semester 2 software -->
                  <div class="tab-pane fade pt-3" id="software-2">
                  <form  method="post">
                <div class="row gy-4">


                  <div class="col-md-6 ">
                    <input type="text" class="form-control" name="roll_number" placeholder="Roll Number" >
                  </div>

                  <div class="col-md-6">
                    <input type="text" name="name" class="form-control" placeholder="Full Name" >
                  </div>

                    
                  <div class="col-md-6 ">
                    <input type="text" class="form-control" name="module_1_exam" placeholder="module 1 grade"  >
                  </div>

                    <div class="col-md-6 ">
                    <input type="text" class="form-control" name="module_2_exam" placeholder="module 2 grade"  >
                  </div>

                    <div class="col-md-12 ">
                    <input type="text" class="form-control" name="module_3_exam" placeholder="module 3 grade"  >
                  </div>

                

                  <div class="col-md-12 text-center">
                        <input type="submit" name="sem2_btn_software" class="btn btn-primary" value="Add Student">
                  </div>
                </div>
              </form>
             </div>

                
                          <!-- add semester 3 software -->
              <div class="tab-pane fade pt-3" id="software-3">
                  <form  method="post">
                    <div class="row gy-4">


                      <div class="col-md-6 ">
                        <input type="text" class="form-control" name="roll_number" placeholder="Roll Number" >
                      </div>

                      <div class="col-md-6">
                        <input type="text" name="name" class="form-control" placeholder="Full Name" >
                      </div>

                      
                      <div class="col-md-6 ">
                        <input type="text" class="form-control" name="module_1_exam" placeholder="module 1 grade"  >
                      </div>

                      <div class="col-md-6 ">
                        <input type="text" class="form-control" name="module_2_exam" placeholder="module 2 grade"  >
                      </div>

                      <div class="col-md-12 ">
                        <input type="text" class="form-control" name="module_3_exam" placeholder="module 3 grade"  >
                      </div>

                  

                      <div class="col-md-12 text-center">
                            <input type="submit" name="sem3_btn_software" class="btn btn-primary" value="Add Student">
                      </div>
                    </div>
                  </form>
                  </div>  
                </div>




                            <!-- add semester 4 software -->
                  <div class="tab-pane fade pt-3" id="software-4">
                  <form  method="post">
                <div class="row gy-4">


                  <div class="col-md-6 ">
                    <input type="text" class="form-control" name="roll_number" placeholder="Roll Number" >
                  </div>

                  <div class="col-md-6">
                    <input type="text" name="name" class="form-control" placeholder="Full Name" >
                  </div>

                    
                  <div class="col-md-6 ">
                    <input type="text" class="form-control" name="module_1_exam" placeholder="module 1 grade"  >
                  </div>

                    <div class="col-md-6 ">
                    <input type="text" class="form-control" name="module_2_exam" placeholder="module 2 grade"  >
                  </div>

                    <div class="col-md-12 ">
                    <input type="text" class="form-control" name="module_3_exam" placeholder="module 3 grade"  >
                  </div>

                  <div class="col-md-12 text-center">
                    <input type="submit" name="sem4_btn_software" class="btn btn-primary" value="Add Student">
                   </div>
                </div>
              </form>
                </div>
                </div>
          </div>
        </div>
        <!-- end of section -->
      </section>

      
    </main>
    <!-- End #main -->
  <?php include_once("include/footer.php");?>