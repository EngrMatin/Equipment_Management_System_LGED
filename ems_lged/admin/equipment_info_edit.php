<!DOCTYPE html>
 <html lang="en">

  <?php
	    include('connection.php');
       include('function.php');
       include_once("db.php");
	    include_once("response.php");
	
	    $category_list = category_list();
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

		
      if(isset($_GET['equip_id']))
      {
        $equip_id = $_GET['equip_id'];

        $sql = "select * from equipment_info where equip_id = '$equip_id'";
        $result = $conn->query($sql);

        if($row = mysqli_fetch_array($result))
        {
              $division_id 	             = $row['division_id'];
              $district_id 	             = $row['district_id'];
              $category_id 	             = $row['category_id'];
              $equipment_id 	             = $row['equipment_id'];
              $equipment_brand 	          = $row['equipment_brand'];
              $equipment_model 	          = $row['equipment_model'];
              $equipment_weight 	          = $row['equipment_weight'];
              $year_of_manufacture         = $row['year_of_manufacture'];
              $source 	                   = $row['source'];
              $hire_charge 	             = $row['hire_charge'];
              $physical_status 	          = $row['physical_status'];
              $equip_id 	                = $row['equip_id'];
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
         //  $division_id 	   	       = $_POST['division_id'];
         //  $district_id 	   	       = $_POST['district_id'];
          $category_id 	   	       = $_POST['category_id'];
          $equipment_id              = $_POST['equipment_id'];
          $equipment_brand 	       = $_POST['equipment_brand'];
          $equipment_model 	       = $_POST['equipment_model'];
          $equipment_weight 	       = $_POST['equipment_weight'];
          $year_of_manufacture       = $_POST['year_of_manufacture'];
          $source 	                = $_POST['source'];
          $hire_charge 	             = $_POST['hire_charge'];
          $physical_status 	       = $_POST['physical_status'];
          $equip_id 	                = $_POST['equip_id'];
        
          
          $sql = "update equipment_info set category_id='$category_id', equipment_id='$equipment_id', equipment_brand='$equipment_brand', equipment_model='$equipment_model', equipment_weight='$equipment_weight', year_of_manufacture='$year_of_manufacture', source='$source', hire_charge='$hire_charge', physical_status='$physical_status' where equip_id=$equip_id";
          //echo $sql; exit('OK');
          $result = $conn->query($sql);
          
          if($result)
          {
               $message = "Updated Successfully!";
               

  ?>
          <script>
                  window.location.href = 'equipment_list_view.php';
          </script>
  <?php
          }
      }
		  
	?>

    
    <section id="main-content">
      <section class="wrapper">
        <h3 align="center"> Update Equipment Information</h3>
         <div class="row mt">
          <div class="col-lg-12">
            <div class="form-panel">
              
              <form class="form-horizontal style-form" action="equipment_info_edit.php" method="post">  

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
                  <label class="col-sm-2 col-sm-2 control-label">Equipment Type <span style="color:#FF0000">*</span></label>
                  <div class="col-sm-6">
                     <select name="category_id" style="height:30px; width:500px;">
                        <option value="" disabled selected hidden>Select Equipment Type</option>
                          <?php
                                foreach($category_list as $key => $value)
                                {
                                    if($category_id==$key)
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
                  <label class="col-sm-2 col-sm-2 control-label">Equipment ID Number<span style="color:#FF0000">*</span></label>
                   <div class="col-sm-6">
                      <input type="text" name="equipment_id" value="<?php echo $equipment_id;  ?>" class="form-control" readonly>
                   </div>
                </div>
				
				        <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Brand</label>
                   <div class="col-sm-6">
                      <input type="text" name="equipment_brand" value="<?php echo $equipment_brand;  ?>" class="form-control">
                   </div>
                </div>
				
				        <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Model</label>
                   <div class="col-sm-6">
                      <input type="text" name="equipment_model" value="<?php echo $equipment_model;  ?>" class="form-control">
                   </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Weight</label>
                   <div class="col-sm-6">
                      <input type="text" name="equipment_weight" value="<?php echo $equipment_weight;  ?>" class="form-control">
                   </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Year of Manufacture</label>
                   <div class="col-sm-6">
                      <input type="text" name="year_of_manufacture" value="<?php echo $year_of_manufacture;  ?>" class="form-control">
                   </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Source</label>
                   <div class="col-sm-6">
                      <input type="text" name="source" value="<?php echo $source;  ?>" class="form-control">
                   </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Hire Charge</label>
                   <div class="col-sm-6">
                      <input type="text" name="hire_charge" value="<?php echo $hire_charge;  ?>" class="form-control">
                   </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Physical Status<span style="color:#FF0000">*</span></label>
                   <div class="col-sm-6">
                      <!-- <input type="text" name="physical_status" value="<?php echo $physical_status;  ?>" class="form-control"> -->
                      <select name="physical_status" class="form-control" required>
                          <!-- <option selected>Select an option</option> -->
                          <option value="Running" selected>Running</option>
                          <option value="Under_repair">Under repair</option>
                          <option value="Repairable">Repairable</option>
                          <option value="Damaged">Damaged</option>
                      </select>
                   </div>
                </div>
				      
                <div class="form-group">
                   <div class="col-sm-8" align="center">
                     <input type="submit" name="update" class="btn btn-primary" value="Update">
					          <input type="hidden" name="equip_id" value= "<?php echo $equip_id; ?>">
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
