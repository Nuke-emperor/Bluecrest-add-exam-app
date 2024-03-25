<?php include_once("include/nav.php");?>  
<br>
<br>       
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
                  <h5 class="card-title text-center">NETWORKING SEM 1 <span>| Teacher name</span></h5>

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



            <!-- network sem 2 -->
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
                  <h5 class="card-title text-center">NETWORKING SEM 2 <span>| Teacher name</span></h5>

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
                        <?php while($networking_sem_1 = mysqli_fetch_assoc($result)):?>
                      <tr>
                        <th scope="row"><a href="#"><?=$networking_sem_1['ROLL_NUMBER'];?></a></th>
                        <td><?=$networking_sem_1['STUDENT_NAME'];?></td>
                        <td><a href="#" class="text-primary"><?=$networking_sem_1['MODULE_1'];?></a></td>
                        <td><a href="#" class="text-primary"><?=$networking_sem_1['MODULE_2'];?></a></td>
                        <td><a href="#" class="text-primary"><?=$networking_sem_1['MODULE_3'];?></a></td>
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


            <!-- network sem3 -->
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
                  <h5 class="card-title text-center">NETWORKING SEM 3 <span>| Teacher name</span></h5>

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

                      $table = "SELECT * FROM `networking_sem_3`";
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



            <!-- network sem 4 -->
                  <div class="card recent-sales overflow-auto ">
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
                  <h5 class="card-title text-center">SOFTWARE SEM 1 <span>| Teacher name</span></h5>

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

                      $table = "SELECT * FROM `software_sem_1`";
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




    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Datatables</h5>
              
              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th>
                      <b>N</b>ame
                    </th>
                    <th>Ext.</th>
                    <th>City</th>
                    <th data-type="date" data-format="YYYY/DD/MM">Start Date</th>
                    <th>Completion</th>
                  </tr>
                </thead>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>
          






            


 <?php include_once("include/footer.php");?>
