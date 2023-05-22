<!DOCTYPE html>
<html lang="en">

<?php

	  include('connection.php');
    include('function.php');
	
	$category_list = category_list();

	if(isset($_POST['submit']))
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
    
		$sql ="insert into requisition_info(division, district, upazila, road_name, chainage, layer, equipment_type, requisition_from_date, requisition_to_date, request_date, name, address) values('$division', '$district', '$upazila', '$road_name', '$chainage', '$layer', '$equipment_type', '$requisition_from_date', '$requisition_to_date', '$request_date', '$name', '$address')";
		
		//echo $sql; exit('OK');
		
		$result = $conn->query($sql);
		if($result == 1)
		{
		  	$message = "Requisition received successfully";
            //header("Location: LGEDAboutUS.php?message=".$message);
			  header("Location: requisition_list_view.php?message=".$message);
		}
	
	}
?>

<head>
	<?php  include('header_resources.php');  ?>
</head>

<body>
  <section id="container">
  
  <?php  
		include('header.php'); 
		include('nav.php');  
	?>
      
    
    <section id="main-content">
      <section class="wrapper">
        <h3 align="center"> Requisition Information</h3>
        <div class="row mt">
          <div class="col-lg-12">
            <div class="form-panel">
              
              <form class="form-horizontal style-form" action="requisition_info.php" method="post">
			  
                <div class="form-group">
                   <label class="col-sm-2 col-sm-2 control-label">Division<span style="color:#FF0000">*</span></label>
                     <div class="col-sm-6">
                       <input type="text" name="division" class="form-control" required>
                     </div>
                 </div>

			  	      <div class="form-group">
                   <label class="col-sm-2 col-sm-2 control-label">District<span style="color:#FF0000">*</span></label>
                     <div class="col-sm-6">
                       <input type="text" name="district" class="form-control" required>
                     </div>
                 </div>
			  
			  	      <div class="form-group">
                   <label class="col-sm-2 col-sm-2 control-label">Upazila<span style="color:#FF0000">*</span></label>
                     <div class="col-sm-6">
                       <input type="text" name="upazila" class="form-control" required>
                     </div>
                 </div>
				
			          <div class="form-group">
                   <label class="col-sm-2 col-sm-2 control-label">Name of Road<span style="color:#FF0000">*</span></label>
                     <div class="col-sm-6">
                       <input type="text" name="road_name" class="form-control" required>
                     </div>
                 </div>
				
				
				        <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Chainage<span style="color:#FF0000">*</span></label>
                      <div class="col-sm-6">
                        <input type="text" name="chainage" class="form-control" required>
                      </div>
                  </div>
				
				        <div class="form-group">
                   <label class="col-sm-2 col-sm-2 control-label">Layer<span style="color:#FF0000">*</span></label>
                     <div class="col-sm-6">
                         <input type="text" name="layer" class="form-control" required>
                     </div>
                  </div>


                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Equipment Type<span style="color:#FF0000">*</span></label>
                  <div class="col-sm-6">
                  <input type="text" name="equipment_type" class="form-control" required>
                  </div>
                </div>


                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Requisition From<span style="color:#FF0000">*</span></label>
                  <div class="col-sm-6">
                    <input type="date" name="requisition_from_date" class="form-control" required>
                  </div>
                </div>
				
				        <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Requisition To<span style="color:#FF0000">*</span></label>
                  <div class="col-sm-6">
                    <input type="date" name="requisition_to_date" class="form-control" required>
                  </div>
                </div>
				
				
				        <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Date of Request</label>
                  <div class="col-sm-6">
                    <input type="date" name="request_date" class="form-control" required>
                  </div>
                 </div>
				 
				        <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Name of Contractor</label>
                  <div class="col-sm-6">
                    <input type="text" name="name" class="form-control" required>
                  </div>
                 </div>
				 
				        <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Address of Contractor</label>
                  <div class="col-sm-6">
                    <input type="text" name="address" class="form-control" required>
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
