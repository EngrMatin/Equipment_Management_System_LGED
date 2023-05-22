<!DOCTYPE html>
<html lang="en">

   <?php 	
        include('connection.php'); 
        include_once("db.php");
	      include_once("response.php");
   ?>

   <head> 	
   		<?php  include('header_resources.php');  ?> 

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
  	
		
		if(isset($_GET['dri_id']))
		{
			$dri_id = $_GET['dri_id'];

			$sql = "select * from driver_info where dri_id = '$dri_id'";
			$result = $conn->query($sql);

			if($row = mysqli_fetch_array($result))
			{
				  $division_id 	        = $row['division_id'];
          $district_id 	        = $row['district_id'];  
          $driver_id 	          = $row['driver_id'];
					$driver_name 	        = $row['driver_name'];
					$driver_address 	    = $row['driver_address'];
					$driver_mobile_no     = $row['driver_mobile_no'];
					$driver_nid_no        = $row['driver_nid_no'];
					$driver_dob           = $row['driver_dob'];
					$appointment_type     = $row['appointment_type'];
					$equipment_id 	      = $row['equipment_id'];
          $dri_id 	            = $row['dri_id'];
			}
		}


      $sql2 = "select * from divisions where division_id='$division_id' ";
      $rec2 = $conn->query($sql2);
      $j=0;
      while($row2 = mysqli_fetch_array($rec2))
      {
         $j++;
         $division 	 			 = $row2['division_name'];
      }

      $sql3 = "select * from districts where district_id='$district_id' ";
      $rec3 = $conn->query($sql3);
      $k=0;
      while($row3 = mysqli_fetch_array($rec3))
      {
         $k++;
         $district 	 			 = $row3['district_name'];
      }

		
		if(isset($_POST['update']))
		{
          // $division_id 	   	      = $_POST['division_id'];
          // $district_id 	   	      = $_POST['district_id'];
          $driver_id 		          = $_POST['driver_id'];
		      $driver_name 	          = $_POST['driver_name'];
		      $driver_address 	      = $_POST['driver_address'];
      		$driver_mobile_no 	    = $_POST['driver_mobile_no'];
      		$driver_nid_no 	        = $_POST['driver_nid_no'];
      		$driver_dob 	          = $_POST['driver_dob'];
      		$appointment_type 	    = $_POST['appointment_type'];
      		$equipment_id           = $_POST['equipment_id'];
      		$dri_id                 = $_POST['dri_id'];
			
			//$sql = "update driver_info set division='$division', district='$district', driver_id='$driver_id', driver_name='$driver_name', driver_address='$driver_address', driver_mobile_no='$driver_mobile_no', equipment_id = '$equipment_id' where dri_id=$dri_id";
			$sql = "update driver_info set driver_id='$driver_id', driver_name='$driver_name', driver_address='$driver_address', driver_mobile_no='$driver_mobile_no', driver_nid_no='$driver_nid_no', driver_dob='$driver_dob', appointment_type='$appointment_type', equipment_id = '$equipment_id' where dri_id=$dri_id";
			//echo $sql; exit('OK');
			$result = $conn->query($sql);
			
			if($result)
			{
				  // $message = "Updated Successfully!";
        	// header("Location: driver_list_view.php?message=".$message);
				 
  ?>
          <script>
                  window.location.href = 'driver_list_view.php';
          </script>
  <?php

			}
		}
		  
	?>
    
    
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <h3 align="center"> Update Driver Information</h3>
        <!-- BASIC FORM ELELEMNTS -->
        <div class="row mt">
          <div class="col-lg-12">
            <div class="form-panel">
              
              <form class="form-horizontal style-form" action="driver_info_edit.php" method="post">  

              <!-- <div class="form-group">
                    <label for="division" class="col-sm-2 control-label"> Division</label>
                      <select class="col-sm-6" id="division" name="division_id" style="height:30px; width:500px;" required>
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
                  <label for="division" class="col-sm-2 control-label"> District</label>
                    <select class="col-sm-6" name="district_id" id="district" style="height:30px; width:500px;" required>
                        <option value="">Select District</option>
                    </select>
                </div>

                <div class="form-group">
                  <label for="division" class="col-sm-2 control-label"> Upazila</label>
                    <select class="col-sm-6" name="upazila_id" id="upazila" style="height:30px; width:500px;" required>
                        <option class="form-control" value="">Select Upazila</option>
                    </select>
                </div> -->

              <div class="form-group">
                  <label class="col-sm-2 control-label">Division<span style="color:red">*</span></label>
                  <div class="col-sm-6">
                    <input type="text" name="division" value="<?php echo $division; ?>" class="form-control" readonly>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">District<span style="color:red">*</span></label>
                  <div class="col-sm-6">
                    <input type="text" name="district" value="<?php echo $district; ?>" class="form-control" readonly>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Driver ID Number <span style="color:#FF0000">*</span></label>
                  <div class="col-sm-6">
                    <input type="text" name="driver_id" value="<?php echo $driver_id;  ?>" class="form-control" required>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Name <span style="color:#FF0000">*</span></label>
                  <div class="col-sm-6">
                    <input type="text" name="driver_name" value="<?php echo $driver_name;  ?>" class="form-control">
                  </div>
                </div>
				
				        <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Address <span style="color:#FF0000">*</span></label>
                  <div class="col-sm-6">
                    <input type="text" name="driver_address" value="<?php echo $driver_address;  ?>" class="form-control">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Mobile No <span style="color:#FF0000">*</span></label>
                  <div class="col-sm-6">
                    <input type="text" name="driver_mobile_no" value="<?php echo $driver_mobile_no;  ?>" class="form-control">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">NID No </label>
                  <div class="col-sm-6">
                    <input type="text" name="driver_nid_no" value="<?php echo $driver_nid_no;  ?>" class="form-control">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Date of Birth </label>
                  <div class="col-sm-6">
                    <input type="date" name="driver_dob" value="<?php echo $driver_dob;  ?>" class="form-control">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Appointment Type <span style="color:#FF0000">*</span></label>
                  <div class="col-sm-6">
                    <!-- <input type="text" name="appointment_type" value="<?php echo $appointment_type;  ?>" > -->
                    <select name="appointment_type" style="height:30px; width:500px;" required>
                            <option value="" selected>Select an option</option>
                            <option value="GoB">GoB</option>
                            <option value="Master_Role">Master Role</option>
                            <option value="Outsourcing">Outsourcing</option>
                            <option value="Project">Project</option>
                        </select>
                  </div>
                </div>
				
				        <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Equipment ID Number <span style="color:#FF0000">*</span></label>
                  <div class="col-sm-6">
                    <input type="text" name="equipment_id" value="<?php echo $equipment_id;  ?>" class="form-control" required>
                  </div>
                </div>
				      
                <div class="form-group">
                   <div class="col-sm-8" align="center">
                    <input type="submit" name="update" class="btn btn-primary" value="Update">
					          <input type="hidden" name="dri_id" value="<?php echo $dri_id; ?>"
                   </div>
                </div>
                
              </form>
            </div>
          </div>
        </div>
        </div>
        <!-- /row -->
      </section>
      <!-- /wrapper -->
    </section>
   
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  
  <?php  include('footer_resources.php');  ?>

</body>

</html>
