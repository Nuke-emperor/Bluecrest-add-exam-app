 <?php include_once("include/nav.php");?>




  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Admin Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12 md-6 sm-3">
          <div class="row">

            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>SEM 1</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">SEM 2</a></li>
                    <li><a class="dropdown-item" href="#">SEM 3</a></li>
                    <li><a class="dropdown-item" href="#">SEM 4</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">NETWORK <span>| SEM 1</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                      <h6>145</h6>
                      <!-- <span class="text-success small pt-1 fw-bold">12</span>  -->
                      <span class="text-muted small pt-2 ps-1">students</span>

                    </div>
                  </div>
                </div>

                

              </div>
            </div>

          
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card revenue-card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">SEM 2</a></li>
                    <li><a class="dropdown-item" href="#">SEM 3</a></li>
                    <li><a class="dropdown-item" href="#">SEM 4</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">SOFTWARE <span>| SEM 1</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                      <h6>264</h6>
                      <!-- <span class="text-success small pt-1 fw-bold">8%</span> -->
                       <span class="text-muted small pt-2 ps-1">students</span>

                    </div>
                  </div>
                </div>

              </div>
            </div>

            <!-- students statistics -->
            <div class="col-xxl-4 col-xl-12">
              <div class="card info-card customers-card">
                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6></h6>
                    </li>

                    <li><a class="dropdown-item" href="#">SEM 1</a></li>
                    <li><a class="dropdown-item" href="#">SEM 2</a></li>
                    <li><a class="dropdown-item" href="#">SEM 3</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">TOTAL STUDENTS <span>| This Year</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                      <h6>1244</h6>
                      <!-- <span class="text-danger small pt-1 fw-bold">12%</span> -->
                       <span class="text-muted small pt-2 ps-1">students</span>

                    </div>
                  </div>

                </div>
              </div>

            </div><!-- End Customers Card -->

            
            <div class="col-12">
              <div class="card recent-sales overflow-auto">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>
                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">NETWORKING SEM 1 <span>| Teacher name</span></h5>

                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">ROLL#</th>
                        <th scope="col">STUDENT NAME</th>
                        <th scope="col">MODULE 1 GRADE</th>
                        <th scope="col">MODULE 2 GRADE</th>
                        <th scope="col">MODULE 3 GRADE</th>
                        <th scope="col">TEACHER</th>
                        <th scope="col">STATUS</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php 

                      $table = "SELECT * FROM `networking_sem_1`";
                      $result = mysqli_query($connection, $table) or die(mysqli_error($connection));
                      $checking = mysqli_num_rows($result);

                      ?>
                      <?php if($checking > 0):?>
                        <?php while($networking_sem_1 = mysqli_fetch_assoc($result)):?>
                      <tr>
                        <th scope="row"><a href="#"><?=$networking_sem_1['ROLL_NUMBER'];?></a></th>
                        <td><?=$networking_sem_1['STUDENT_NAME'];?></td>
                        <td><a href="#" class="text-primary"><?=$networking_sem_1['MODULE_1'];?></a></td>
                        <td><a href="#" class="text-primary"><?=$networking_sem_1['MODULE_2'];?></a></td>
                        <td><a href="#" class="text-primary"><?=$networking_sem_1['MODULE_3'];?></a></td>
                        <td></td>
                        <td><span class="badge bg-success">Approved</span></td>
                      </tr>
                      <?php endwhile;?>
                      <?php else:?>
                        <center>
                          <p> No Record Found</p>
                        </center>
                      <?php endif;?>
                    </tbody>
                  </table>

                </div>

              </div>
            </div>

                      
                      

            <div class="col-12">
              <div class="card recent-sales overflow-auto">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">NETWORKING SEM 2 <span>| Teacher name</span></h5>

                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">ROLL#</th>
                        <th scope="col">STUDENT NAME</th>
                        <th scope="col">MODULE 1 GRADE</th>
                        <th scope="col">MODULE 2 GRADE</th>
                        <th scope="col">MODULE 3 GRADE</th>
                        <th scope="col">TEACHER</th>
                        <th scope="col">STATUS</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php 

                      $table = "SELECT * FROM `networking_sem_2`";
                      $result = mysqli_query($connection, $table) or die(mysqli_error($connection));
                      $checking = mysqli_num_rows($result);

                      ?>
                      <?php if($checking > 0):?>
                        <?php while($networking_sem_2 = mysqli_fetch_assoc($result)):?>
                      <tr>
                        <th scope="row"><a href="#"><?=$networking_sem_2['ROLL_NUMBER'];?></a></th>
                        <td><?=$networking_sem_2['STUDENT_NAME'];?></td>
                        <td><a href="#" class="text-primary"><?=$networking_sem_2['MODULE_1'];?></a></td>
                        <td><a href="#" class="text-primary"><?=$networking_sem_2['MODULE_2'];?></a></td>
                        <td><a href="#" class="text-primary"><?=$networking_sem_2['MODULE_3'];?></a></td>
                        <td></td>
                        <td><span class="badge bg-success">Approved</span></td>
                      </tr>
                      <?php endwhile;?>
                      <?php else:?>
                        <center>
                          <p> No Record Found</p>
                        </center>
                      <?php endif;?>
                    </tbody>
                  </table>

                </div>

              </div>
            </div>


            <div class="col-12">
              <div class="card recent-sales overflow-auto">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">NETWORKING SEM 3 <span>| Teacher name</span></h5>

                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">ROLL#</th>
                        <th scope="col">STUDENT NAME</th>
                        <th scope="col">MODULE #</th>
                        <th scope="col">MARK</th>
                        <th scope="col">STATUS</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row"><a href="#">#2457</a></th>
                        <td>Brandon Jacob</td>
                        <td><a href="#" class="text-primary">At praesentium minu</a></td>
                        <td>64</td>
                        <td><span class="badge bg-success">Approved</span></td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#">#2147</a></th>
                        <td>Bridie Kessler</td>
                        <td><a href="#" class="text-primary">Blanditiis dolor omnis similique</a></td>
                        <td>47</td>
                        <td><span class="badge bg-warning">Pending</span></td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#">#2049</a></th>
                        <td>Ashleigh Langosh</td>
                        <td><a href="#" class="text-primary">At recusandae consectetur</a></td>
                        <td>47</td>
                        <td><span class="badge bg-success">Approved</span></td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#">#2644</a></th>
                        <td>Angus Grady</td>
                        <td><a href="#" class="text-primar">Ut voluptatem id earum et</a></td>
                        <td>67</td>
                        <td><span class="badge bg-danger">Rejected</span></td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#">#2644</a></th>
                        <td>Raheem Lehner</td>
                        <td><a href="#" class="text-primary">Sunt similique distinctio</a></td>
                        <td>65</td>
                        <td><span class="badge bg-success">Approved</span></td>
                      </tr>
                    </tbody>
                  </table>

                </div>

              </div>
            </div><!-- End Recent Sales -->

                        <!-- Recent Sales -->
            <div class="col-12">
              <div class="card recent-sales overflow-auto">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">NETWORKING SEM 4 <span>| Teacher name</span></h5>

                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">ROLL#</th>
                        <th scope="col">STUDENT NAME</th>
                        <th scope="col">MODULE #</th>
                        <th scope="col">MARK</th>
                        <th scope="col">STATUS</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row"><a href="#">#2457</a></th>
                        <td>Brandon Jacob</td>
                        <td><a href="#" class="text-primary">At praesentium minu</a></td>
                        <td>64</td>
                        <td><span class="badge bg-success">Approved</span></td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#">#2147</a></th>
                        <td>Bridie Kessler</td>
                        <td><a href="#" class="text-primary">Blanditiis dolor omnis similique</a></td>
                        <td>47</td>
                        <td><span class="badge bg-warning">Pending</span></td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#">#2049</a></th>
                        <td>Ashleigh Langosh</td>
                        <td><a href="#" class="text-primary">At recusandae consectetur</a></td>
                        <td>47</td>
                        <td><span class="badge bg-success">Approved</span></td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#">#2644</a></th>
                        <td>Angus Grady</td>
                        <td><a href="#" class="text-primar">Ut voluptatem id earum et</a></td>
                        <td>67</td>
                        <td><span class="badge bg-danger">Rejected</span></td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#">#2644</a></th>
                        <td>Raheem Lehner</td>
                        <td><a href="#" class="text-primary">Sunt similique distinctio</a></td>
                        <td>65</td>
                        <td><span class="badge bg-success">Approved</span></td>
                      </tr>
                    </tbody>
                  </table>

                </div>

              </div>
            </div><!-- End Recent Sales -->




        
       

        

       

      </div>
    </section>

  </main><!-- End #main -->



  <?php include_once("include/footer.php");?>