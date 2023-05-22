<!DOCTYPE html>
<html lang="en">
<?php

	  include('connection.php');
    include('function.php');
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

    
	  if(isset($_POST['submit']))
	  {
		    $division_id 	          = $_POST['division_id'];
        $district_id 	          = $_POST['district_id'];   
        $driver_id 		          = $_POST['driver_id'];
		    $driver_name            = $_POST['driver_name'];
		    $driver_address 	      = $_POST['driver_address'];
		    $driver_mobile_no 	    = $_POST['driver_mobile_no'];
		    $driver_nid_no 	        = $_POST['driver_nid_no'];
		    $driver_dob 	          = $_POST['driver_dob'];
		    $appointment_type 	    = $_POST['appointment_type'];
    	  $equipment_id 	        = $_POST['equipment_id'];
		
	
		    $sql = "insert into driver_info (division_id, district_id, driver_id, driver_name, driver_address, driver_mobile_no, driver_nid_no, driver_dob, appointment_type, equipment_id) values ('$division_id', '$district_id', '$driver_id', '$driver_name', '$driver_address', '$driver_mobile_no', '$driver_nid_no', '$driver_dob', '$appointment_type', '$equipment_id')";
		    //echo $sql; exit('OK');
		    $result = $conn->query($sql);

        if($result == 1)
        {
              // $message = "Successfully Inserted";
              // header("Location: driver_list_view.php?message=".$message);
  ?>
              <script>
                      window.location.href = 'driver_list_view.php';
              </script>
  <?php

        }
	  }

	?>
      
    
    <section id="main-content">
      <section class="wrapper">
        <h3 align="center"> Driver Information</h3>
        <div class="row mt">
          <div class="col-lg-12">
            <div class="form-panel">
              <form class="form-horizontal style-form" action="driver_info.php" method="post">

                <div class="form-group">
                    <label for="division" class="col-sm-2 control-label"> Division <span style="color:#FF0000">*</span></label>
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
                  <label for="division" class="col-sm-2 control-label"> District <span style="color:#FF0000">*</span></label>
                    <select class="col-sm-6" name="district_id" id="district" style="height:30px; width:500px;" required>
                        <option value="">Select District</option>
                    </select>
                </div>

			          <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Driver ID Number <span style="color:#FF0000">*</span></label>
                  <div class="col-sm-6">
                    <input type="text" name="driver_id" class="form-control" required>
                  </div>
                </div>
				
				
				        <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Name <span style="color:#FF0000">*</span></label>
                  <div class="col-sm-6">
                    <input type="text" name="driver_name" class="form-control" required>
                  </div>
                </div>
				
				        <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Address <span style="color:#FF0000">*</span></label>
                  <div class="col-sm-6">
                    <input type="text" name="driver_address" class="form-control" required>
                  </div>
                </div>


                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Mobile No <span style="color:#FF0000">*</span></label>
                  <div class="col-sm-6">
                    <input type="text" name="driver_mobile_no" class="form-control" required>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">NID No <span style="color:#FF0000">*</span></label>
                  <div class="col-sm-6">
                    <input type="text" name="driver_nid_no" class="form-control" required>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Date of Birth <span style="color:#FF0000">*</span></label>
                  <div class="col-sm-6">
                    <input type="date" name="driver_dob" class="form-control" required>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Appointment Type <span style="color:#FF0000">*</span></label>
                    <div class="col-sm-6">
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
                    <input type="text" name="equipment_id" class="form-control" required>
                  </div>
                </div>
				
				
				<div class="form-group">
                  <div class="col-sm-8" align="center">
                    <input type="submit" name="submit" class="btn btn-primary" value="Submit">
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
        </div>
      </section>
    </section>
  </section>
  
  <?php  include('footer_resources.php');  ?>

</body>

</html>
