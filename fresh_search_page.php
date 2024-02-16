
<section class="search_table">
      <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="fresh_search_page.php" action="search.php">
        <input type="text" name="search" placeholder="Search" title="Search For Studen">
        <button type="submit" title="Search" name="search_btn"><i class="bi bi-search"></i>Search</button>
      </form>
    </div>

    <table>
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

                   
if(isset($_POST['search_btn'])){

    $search_data_input = $_POST['search'];
  include("connection/connection.php");
  
    $tables =  "SELECT * FROM `networking_sem_1` WHERE 
    student_name  LIKE '%$search_data_input%' ";
  $result_search_09 =   mysqli_query($connection, $tables);
     $checking = mysqli_num_rows($result_search_09);

}
                      ?>
                      <?php if($checking > 0):?>
                        <?php while($networking_sem_ = mysqli_fetch_assoc($result_search_09)):?>
            <tr>
                <td><?=$networking_sem_['ROLL_NUMBER'];?></td>
            </tr>
            <tr>
                <td><?=$networking_sem_['STUDENT_NAME'];?></td>
            </tr>
             <tr>
                <td><?=$networking_sem_['MODULE_1'];?></td>
            </tr>
             <tr>
                <td><?=$networking_sem_['MODULE_2'];?></td>
            </tr>
             <tr>
                <td><?=$networking_sem_['MODULE_3'];?></td>
            </tr>
             <?php endwhile;?>
                      <?php else:?>
                        <center>
                          <p> No Record Found</p>
                        </center>
                      <?php endif;?>
        </tbody>
    </table>
</section>