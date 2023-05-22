  <?php
        $page_title="Display Students"; 
        session_start();
        if(!isset($_SESSION["librarian"]))
         {
  ?>
            <script type="text/javascript">
                  window.location="login.php";
            </script>
  <?php
         }
       
         include('header.php');
         include('database.php'); 

  ?>
            
              <div class="container-fluid pt-1 px-1">
                <div class="row g-4">
                  <div class="col-sm-12 col-xl-12">
                    <div class="bg-secondary rounded h-100 p-2">
                      <div class="table-responsive">
                        <div class="row">
                          <div class="col-6 col-sm-6 text-right text-sm-start">
                           <h4 class="mb-1">Student Lists</h4>
                          </div>
                          <div class="col-6 col-sm-6 text-center text-sm-end">
                            <a href="../student/registration.php"><button class="btn btn-primary" style="margin: 5px">Add New Student</button></a>
                            <a href="report_students.php" target="blank"><button class="btn btn-primary">Report of All students</button></a>
                          </div>
                          <div>
  <?php                    
                               date_default_timezone_set('Asia/Dhaka');
                               $date = date('m/d/Y h:i:s a', time()); 
                               echo $date;
  ?>
                          </div>
                        </div>

                                <table class="table">
                                    <thead>
                                        <tr>
                                           <th class="col">Sl</th>
                                            <th scope="col">Image</th>
                                            <th scope="col">F.Name</th>
                                            <th scope="col">L.Name</th>
                                            <th scope="col">SId</th>
                                            <th scope="col">User</th>
                                            <th scope="col">Contact</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Enroll</th>
                                            <th scope="col">yes/no</th>
                                            <th scope="col">action-</th>
                                            <th scope="col">Live</th>
                                            <th scope="col">Pword</th>
                                            <th scope="col">Login</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>

                    <?php
                           $sql=mysqli_query($conn,"SELECT * from student_registration");
                           $sl=1;
                           while($res=mysqli_fetch_array($sql)){
                    ?>       
                           

                                        <tr>
                                            <td> <?php echo $sl ?></td>
                                            <td><img src="../student/<?php echo $res['image']; ?>" height="50" width="50"></td>
                                            <td><?php echo $res['firstname'] ?></td>
                                            <td><?php echo $res['lastname'] ?></td>
                                            <td><?php echo $res['sid'] ?></td>
                                            <td><?php echo $res['username'] ?></td>
                                            <td><?php echo $res['contact'] ?></td>
                                            <td><?php echo $res['email'] ?></td>
                                            <td><?php echo $res['enrollment'] ?></td>
                                            <td><?php echo $res['status'] ?></td>
                                            <td><a  href="approve.php?id=<?php echo $res['id']; ?>"class='btn btn-success'style="padding:1px;font-size: 13px;margin-top: 1px" onclick="return cheq1()">yes</a><a  href="notapprove.php?id=<?php echo $res['id']; ?>"class='btn btn-danger'style="padding:1px;font-size: 13px;margin: 1px" onclick="return cheq2()">No</a><a  href="delete_student.php?id=<?php echo $res['id']; ?>&filename=<?php echo $res['image']  ?>"class='btn btn-primary'style="padding:3px;font-size: 13px" onclick="return cheq3()">Delete</a></td>
                                            <td><?php echo $res['login'] ?></td>
                                            <td><?php echo $res['password'] ?></td>
                                            
                                            
                                        </tr>
                                 <?php
                                      $sl=$sl+1;
                                 }
                                 ?>       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Table End -->
<script type="text/javascript">
    function cheq1()
    {
        return confirm("Are you sure to approve");
    }
      function cheq2()
    {
        return confirm("Are you sure to notapprove");
    }
     function cheq3()
    {
        return confirm("Are you sure to delete");
    }
</script>

            <!-- Footer Start -->
            <?php

            include('footer.php');
            ?>