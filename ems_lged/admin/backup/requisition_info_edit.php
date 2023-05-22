<!DOCTYPE html>
 <html lang="en">

  <?php
	  include('connection.php');
    include('function.php');
	
	  $category_list = category_list();
  ?>

  <head>
	    <?php  include('header_resources.php');  ?>
  </head>

  <body>
    <section id="container">
  
    <?php
        include('header.php'); 
        include('nav.php');
    
		if(isset($_GET['requisition_id']))
		{
			$requisition_id = $_GET['requisition_id'];
			$sql = "select * from requisition_info where requisition_id = '$requisition_id'";
			$result = $conn->query($sql);
      
			if($row = mysqli_fetch_array($result))
			{
          $division 	 			       = $row['division'];
          $district 	 			       = $row['district'];
					$upazila 	     		       = $row['upazila'];
					$road_name 	             = $row['road_name'];
					$chainage 	             = $row['chainage'];
					$layer 					         = $row['layer'];
					$equipment_type 	       = $row['equipment_type'];
					$requisition_from_date 	 = $row['requisition_from_date'];
					$requisition_to_date 	   = $row['requisition_to_date'];
					$request_date 	         = $row['request_date'];
					$name 	                 = $row['name'];
					$address 	               = $row['address'];
					$requisition_id 	    	 = $row['requisition_id'];
			}
		}
		
		if(isset($_POST['update']))
		{
				$division                  = $_POST['division'];
        $district                  = $_POST['district'];
				$upazila                   = $_POST['upazila'];
				$road_name                 = $_POST['road_name'];
				$chainage                  = $_POST['chainage'];
				$layer                     = $_POST['layer'];
				$equipment_type            = $_POST['equipment_type'];
				$requisition_from_date     = $_POST['requisition_from_date'];
				$requisition_to_date       = $_POST['requisition_to_date'];
				$request_date              = $_POST['request_date'];
				$name                      = $_POST['name'];
				$address                   = $_POST['address'];
      	$requisition_id 	      	 = $_POST['requisition_id'];
			
			$sql = "update requisition_info set division='$division', district='$district', upazila='$upazila', road_name='$road_name', chainage='$chainage', layer='$layer', equipment_type='$equipment_type', requisition_from_date='$requisition_from_date', requisition_to_date='$requisition_to_date', request_date='$request_date', name='$name', address='$address' where requisition_id=$requisition_id";
			//echo $sql; exit('OK');
			$result = $conn->query($sql);
			
			if($result)
			{
				$message = "Updated Successfully!";
        header("Location: requisition_list_view.php?message=".$message);
				//echo "<meta http-equiv='refresh' content='1;url=requisition_list_view.php'>";
				exit();
			}
		}
		  
	?>


    <section id="main-content">
      <section class="wrapper">
        <h3 align="center"> Update Requisition Information</h3>
        <div class="row mt">
          <div class="col-lg-12">
            <div class="form-panel">
              <form class="form-horizontal style-form" action="requisition_info_edit.php" method="post">  

                 <div class="form-group">
                   <label class="col-sm-2 col-sm-2 control-label">Division<span style="color:#FF0000">*</span></label>
                     <div class="col-sm-6">
                       <input type="text" name="division" value="<?php echo $division;  ?>" class="form-control" required>
                     </div>
                 </div>
				
				        <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">District<span style="color:#FF0000">*</span></label>
                   <div class="col-sm-6">
                    <input type="text" name="district" value="<?php echo $district;  ?>" class="form-control" required>
                   </div>
                </div>
				
				        <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Upazila</label>
                  <div class="col-sm-6">
                    <input type="text" name="upazila" value="<?php echo $upazila;  ?>" class="form-control">
                  </div>
                </div>
				
				        <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Name of Road</label>
                  <div class="col-sm-6">
                    <input type="text" name="road_name" value="<?php echo $road_name;  ?>" class="form-control">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Chainage</label>
                  <div class="col-sm-6">
                    <input type="text" name="chainage" value="<?php echo $chainage;  ?>" class="form-control">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Layer</label>
                  <div class="col-sm-6">
                    <input type="text" name="layer" value="<?php echo $layer;  ?>" class="form-control">
                  </div>
                </div>
				
				        <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Equipment Type</label>
                  <div class="col-sm-6">
                    <input type="text" name="equipment_type" value="<?php echo $equipment_type;  ?>" class="form-control">
                  </div>
                </div>
				
				        <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Requisition From</label>
                  <div class="col-sm-6">
                    <input type="text" name="requisition_from_date" value="<?php echo $requisition_from_date;  ?>" class="form-control">
                  </div>
                </div>
				
				        <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Requisition To</label>
                  <div class="col-sm-6">
                    <input type="text" name="requisition_to_date" value="<?php echo $requisition_to_date;  ?>" class="form-control">
                  </div>
                </div>
				
				        <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Date of Request</label>
                  <div class="col-sm-6">
                    <input type="text" name="request_date" value="<?php echo $request_date;  ?>" class="form-control">
                  </div>
                </div>
				
				        <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Name of Contractor</label>
                  <div class="col-sm-6">
                    <input type="text" name="name" value="<?php echo $name;  ?>" class="form-control">
                  </div>
                </div>
				
				        <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Address of Contractor</label>
                  <div class="col-sm-6">
                    <input type="text" name="address" value="<?php echo $address;  ?>" class="form-control">
                  </div>
                </div>
				      
                <div class="form-group">
                   <div class="col-sm-8" align="center">
                     <input type="submit" name="update" class="btn btn-primary" value="Update">
					           <input type="hidden" name="requisition_id" value="<?php echo $requisition_id; ?>">
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
