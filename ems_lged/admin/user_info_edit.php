<!DOCTYPE html>
<html lang="en">

<?php
	include('connection.php');
  include('function.php');
  
  $role_list = role_list();
?>

<head>
  <?php include('header_resources.php');   ?>
</head>

<body>
  <section id="container">
    <?php  
      include('header.php');  
      include('nav.php');  

      if(isset($_GET['user_id']))
      {
          $user_id = $_GET['user_id'];
          $sql = "SELECT * FROM user_info where user_id = '$user_id' ";
          $result = $conn->query($sql);

          if($row = mysqli_fetch_array($result))
          {   
              $user_id                = $row['user_id'];
              $user_name              = $row['user_name'];
              $user_designation       = $row['user_designation'];
              $user_division_id       = $row['user_division_id'];
              $user_district_id       = $row['user_district_id'];
              $user_upazila_id        = $row['user_upazila_id'];
              $user_email             = $row['user_email'];
              $user_password          = $row['user_password'];
              $user_mobile_no         = $row['user_mobile_no'];
              $role_id                = $row['role_id'];
          }
      }


      $sql2 = "select * from divisions where division_id='$user_division_id' ";
      $rec2 = $conn->query($sql2);
      $j=0;
      while($row2 = mysqli_fetch_array($rec2))
      {
        $j++;
        $user_division 	 			 = $row2['division_name'];
      }

      $sql3 = "select * from districts where district_id='$user_district_id' ";
      $rec3 = $conn->query($sql3);
      $k=0;
      while($row3 = mysqli_fetch_array($rec3))
      {
        $k++;
        $user_district 	 			 = $row3['district_name'];
      }

      $sql4 = "select * from upazilas where upazila_id='$user_upazila_id' ";
      $rec4 = $conn->query($sql4);
      $m=0;
      while($row4 = mysqli_fetch_array($rec4))
      {
        $m++;
        $user_upazila 	 			 = $row4['upazila_name'];
      }


      if(isset($_POST['update']))
      {   
          $user_id              = $_POST['user_id'];
          $user_name            = $_POST['user_name'];
          $user_password        = $_POST['user_password'];
          $user_mobile_no       = $_POST['user_mobile_no'];
          $role_id              = $_POST['role_id'];

          
          if ($_POST['user_password'] != $_POST['confirm_user_password']) 
          {
            echo "<script>alert('Passwords do no match')</script>";
            exit();
          }
          else 
          {
            $sql = "UPDATE user_info SET user_name ='$user_name', user_password = '$user_password', user_mobile_no = '$user_mobile_no', role_id = '$role_id' where user_id = $user_id";
            $result = $conn->query($sql);
            
            if($result)
            {
             
    ?>
                <script>
							          window.location.href = 'user_info_list_view.php';
					      </script>
    <?php
            }
          }
      }

    ?>

    <style>
      @import url('https://fonts.googleapis.com/css2?family=Fugaz+One&family=Righteous&family=Roboto+Condensed&family=Squada+One&display=swap');

      h4 
      {
        font-family: 'Righteous', cursive;
        font-size: 20px;
        font-weight: bolder;
        color: blue;
        letter-spacing: 1px;
        margin-left: 0px;
      }
      label
      {
        font-family: 'Roboto Condensed', sans-serif;
        font-size: 16px;
        color: black;
        margin-left: 0px;
      }

      input
      {
        font-family: 'Roboto Condensed', sans-serif;
        font-size: 16px;
        color: black;
        margin-left: 0px;
      }
      .btn-success
      {
        font-family: 'Righteous', cursive;
        font-size: 17px;
        font-weight: bold;
        color: black;
        letter-spacing: 1px;
      }
    </style>
    
   
    <section id="main-content">
      <section class="wrapper">
        <div class="row mt">
          <div class="col-lg-12">
            <div class="form-panel">
              <h4 class="mb" align="center"> Update User Information</h4>


              
              <form class="form-horizontal style-form" action="user_info_edit.php" method="post" enctype="multipart/form-data">
 
                <div class="form-group">
                  <label class="col-sm-2 control-label">User Name <span style="color:red">*</span></label>
                  <div class="col-sm-10">
                    <input type="text" name="user_name" value="<?php echo $user_name; ?>" class="form-control" required>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Designation <span style="color:red">*</span></label>
                  <div class="col-sm-10">
                    <input type="text" name="user_designation" value="<?php echo $user_designation; ?>" class="form-control" readonly>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Division <span style="color:red">*</span></label>
                  <div class="col-sm-10">
                    <input type="text" name="user_division" value="<?php echo $user_division; ?>" class="form-control" readonly>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">District <span style="color:red">*</span></label>
                  <div class="col-sm-10">
                    <input type="text" name="user_district" value="<?php echo $user_district; ?>" class="form-control" readonly>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Upazila <span style="color:red">*</span></label>
                  <div class="col-sm-10">
                    <input type="text" name="user_upazila" value="<?php echo $user_upazila; ?>" class="form-control" readonly>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Email <span style="color:red">*</span></label>
                  <div class="col-sm-10">
                    <input type="email" name="user_email" value="<?php echo $user_email; ?>" class="form-control" readonly>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Password <span style="color:red">*</span></label>
                  <div class="col-sm-10">
                    <input type="password" name="user_password" placeholder="Enter password" class="form-control" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^\w]).{8,}" title="Password must contain at least one uppercase and one lowercase letter, one special character, one number, and at least 8 characters" required>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Confirm Password <span style="color:red">*</span></label>
                  <div class="col-sm-10">
                    <input type="password" name="confirm_user_password" placeholder="Confirm password" class="form-control" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^\w]).{8,}" title="Password must contain at least one uppercase and one lowercase letter, one special character, one number, and at least 8 characters" required>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Mobile No </label>
                  <div class="col-sm-10">
                    <input type="text" name="user_mobile_no" value="<?php echo $user_mobile_no; ?>" class="form-control">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">User Role </label>
                  <div class="col-sm-10">
                    <!-- <input type="text" name="user_role" value="<?php echo $user_role; ?>" class="form-control"> -->
                    <select name="role_id" style="height:30px; width:600px;">
                      <option value="" disabled selected hidden>Select User Role</option>
                          <?php
                              foreach($role_list as $key => $value)
                              {
                                  if($role_id==$key)
                                  {
                                      echo "<option value='$key' selected>$value</option>";
                                  }
                                  else
                                  {
                                      echo "<option value='$key'>$value</option>";
                                  }
                              }
                          ?>
					          </select>
                  </div>
                </div>

                <div class="form-group">
                  <div class="col-sm-12" align="center">
                    <input type="submit" class="btn btn-primary" name="update" value="Update">
                    <input type="hidden" name="user_id" value="<?php echo $user_id;?>" />
                  </div>
                </div>   

              </form>
            </div>
          </div>
        </div>
    </section>
  </section>
  
  <?php   include('footer_resources.php');   ?>
</body>

</html>