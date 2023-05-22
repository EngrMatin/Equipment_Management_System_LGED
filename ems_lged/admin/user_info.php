<!DOCTYPE html>
 <html lang="en">

  

<?php
	include('connection.php');
	include('function.php');
  include_once("db.php");
	include_once("response.php");

  $role_list = role_list();
	
?>

<head>
  <?php include('header_resources.php'); ?>

  <!-- jquery cdn DivisionDistrictUpazila Dropdown -->
  <script src="jquery-3.6.0.min.js"></script>
  <script>
        $(document).ready(function() 
        {
            $("#division").on('change', function() 
            {
                var divisionid = $(this).val();

                $.ajax({
                    method: "POST",
                    url: "response.php",
                    data: 
                    {
                        id: divisionid
                    },
                    datatype: "html",
                    success: function(data) 
                    {
                        $("#district").html(data);
                        $("#upazila").html('<option value="">Select Upazila</option');

                    }
                });
            });

            $("#district").on('change', function() 
            {
                var districtid = $(this).val();
                $.ajax({
                    method: "POST",
                    url: "response.php",
                    data: 
                    {
                        uid: districtid
                    },
                    datatype: "html",
                    success: function(data) 
                    {
                        $("#upazila").html(data);

                    }

                });
            });
        });
    </script>
  
</head>

<body>
  <section id="container">
    <?php  
       include('header.php');  
       include('nav.php');  

       if(isset($_POST['save']))
       {
          $user_name              = $_POST['user_name'];
          $user_designation       = $_POST['user_designation'];
          $user_division_id       = $_POST['division_id'];
          $user_district_id       = $_POST['district_id'];
          $user_upazila_id        = $_POST['upazila_id'];
          $user_email             = $_POST['user_email'];
          $user_password          = $_POST['user_password'];
          $user_mobile_no         = $_POST['user_mobile_no'];	
          $role_id                = $_POST['role_id'];	

          $check_name = "select * from user_info where user_email = '$user_email'";
          $run = $conn->query($check_name);
        
          if(mysqli_num_rows($run)>0)
          {
            echo "<script>alert('This email ($user_email) already exits in our database. Please try with Another!')</script>";
          }
          else if ($_POST['user_password'] != $_POST['confirm_user_password']) 
          {
            echo "<script>alert('Passwords do no match')</script>";
          }
          else 
          {
              $InsertQuery = "INSERT INTO user_info(user_name, user_designation, user_division_id, user_district_id, user_upazila_id, user_email, user_password, user_mobile_no, role_id) values ('$user_name', '$user_designation', '$user_division_id', '$user_district_id', '$user_upazila_id', '$user_email', '$user_password', '$user_mobile_no', '$role_id')";
              $data = mysqli_query($conn, $InsertQuery);
      
              if($data == 1)
              {
                  //  echo "Successfully Inserted!";
                  //  header("Location: user_info_list_view.php");
    ?>
                  <script>
                          window.location.href = 'user_info_list_view.php';
                  </script>
    <?php
              }
          }
       }

    ?>
        

    <section id="main-content">
      <section class="wrapper">
       <h3 align="center"> User Information</h3>
        <div class="row mt">
          <div class="col-lg-12">
            <div class="form-panel">
              
              <form class="form-horizontal style-form" action="user_info.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <label class="col-sm-2 control-label">User Name <span style="color:red">*</span></label>
                  <div class="col-sm-6">
                    <input type="text" name="user_name" class="form-control" required>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Designation <span style="color:red">*</span></label>
                  <div class="col-sm-6">
                    <input type="text" name="user_designation" class="form-control" required>
                  </div>
                </div>

                

            <!-- <div class="container col-md-8"> -->
                <div class="form-group">
                    <label for="division" class="col-sm-2 control-label"> Division </label>
                      <select class="col-sm-6" id="division" name="division_id" style="height:30px; width:500px;">
                        <option value=""> Select Division</option>
                        <?php
                            $query = "select * from divisions";
                            $result = $con->query($query);
                            if ($result->num_rows > 0) 
                            {
                                while ($row = mysqli_fetch_assoc($result)) 
                                {
                        ?>
                                    <option value="<?php echo $row['division_id']; ?>"><?php echo $row['division_name']; ?></option>
                        <?php
                                }
                            }
                        ?>
                      </select>
                </div>

                <div class="form-group">
                  <label for="division" class="col-sm-2 control-label"> District </label>
                    <select class="col-sm-6" name="district_id" id="district" style="height:30px; width:500px;">
                        <option value="">Select District</option>
                    </select>
                </div>

                <div class="form-group">
                  <label for="division" class="col-sm-2 control-label"> Upazila </label>
                    <select class="col-sm-6" name="upazila_id" id="upazila" style="height:30px; width:500px;">
                        <option class="form-control" value="">Select Upazila</option>
                    </select>
                </div>

            <!-- </div> -->

                <div class="form-group">
                  <label class="col-sm-2 control-label">Email <span style="color:red">*</span></label>
                  <div class="col-sm-6">
                    <input type="email" name="user_email" class="form-control" required>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Password<span style="color:red">*</span></label>
                  <div class="col-sm-6">
                    <input type="password" name="user_password" class="form-control" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^\w]).{8,}" title="Password must contain at least one uppercase and one lowercase letter, one special character, one number, and at least 8 characters" required>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Confirm Password<span style="color:red">*</span></label>
                  <div class="col-sm-6">
                    <input type="password" name="confirm_user_password" class="form-control" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^\w]).{8,}" title="Password must contain at least one uppercase and one lowercase letter, one special character, one number, and at least 8 characters" required>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Mobile No </label>
                  <div class="col-sm-6">
                    <input type="text" name="user_mobile_no" class="form-control">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">User Role <span style="color:#FF0000">*</span></label>
                  <div class="col-sm-6">
                    <!-- <input type="text" name="user_role" class="form-control"> -->
                    <select name="role_id" style="height:30px; width:500px;" required>
                      <option value="" disabled selected hidden>Select User Role</option>
                          <?php
                              foreach($role_list as $key => $value)
                              {
                                  echo "<option value='$key'>$value</option>";
                              }
                          ?>
					          </select>
                  </div>
                </div>
                
                <div class="form-group">
                  <div class="col-sm-12" align="center">
                    <input type="submit" class="btn btn-success" name="save" value="Submit">
                  </div>
                </div>
              </form>
            </div>
          </div>
          
        </div>
      </section>
    </section>
  </section>
  
  <?php include('footer_resources.php'); ?>

</body>
</html>