<!DOCTYPE html>
 <html lang="en">

  <?php
	  include('connection.php');
  ?>

  <head>
	    <?php  include('header_resources.php');  ?>
  </head>

  <body>
    <section id="container">
  
    <?php
        include('header.php'); 
        include('nav.php');
        date_default_timezone_set('Asia/Dhaka');

		if(isset($_GET['requisition_id']))
		{
			$requisition_id = $_GET['requisition_id'];
			$sql = "select * from requisition_info where requisition_id = '$requisition_id'";
			$result = $conn->query($sql);
      
			if($row = mysqli_fetch_array($result))
			{
          $division_id 	 			     = $row['division_id'];
          $district_id 	 			     = $row['district_id'];
          $package_no 	 			     = $row['package_no'];
					$upazila_id 	     		   = $row['upazila_id'];
					$road_id 	     		       = $row['road_id'];
					$road_name 	             = $row['road_name'];
					$chainage 	             = $row['chainage'];
					$layer 					         = $row['layer'];
					$length 					       = $row['length'];
					$width 					         = $row['width'];
					$thickness 					     = $row['thickness'];
					$equipment_type 	       = $row['equipment_type'];
					$requisition_from_date 	 = $row['requisition_from_date'];
					$requisition_to_date 	   = $row['requisition_to_date'];
					$request_date 	         = $row['request_date'];
					$contractor_name 	       = $row['contractor_name'];
					$contractor_address 	   = $row['contractor_address'];
					$requisition_id 	    	 = $row['requisition_id'];
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

    $sql4 = "select * from upazilas where upazila_id='$upazila_id' ";
    $rec4 = $conn->query($sql4);
    $m=0;
    while($row4 = mysqli_fetch_array($rec4))
    {
      $m++;
      $upazila 	 			 = $row4['upazila_name'];
    }


		
		if(isset($_POST['update']))
		{
				$package_no                = $_POST['package_no'];
				$road_id                   = $_POST['road_id'];
				$road_name                 = $_POST['road_name'];
				$chainage                  = $_POST['chainage'];
				$layer                     = $_POST['layer'];
				$length                    = $_POST['length'];
				$width                     = $_POST['width'];
				$thickness                 = $_POST['thickness'];
				$equipment_type            = $_POST['equipment_type'];
				$requisition_from_date     = $_POST['requisition_from_date'];
				$requisition_to_date       = $_POST['requisition_to_date'];
				$forwarding_note           = $_POST['forwarding_note'];
				$date_of_forwarding        = date('Y-m-d H:i:s');
      	$requisition_id 	      	 = $_POST['requisition_id'];
			
        $sql ="update requisition_info set package_no='$package_no', road_id='$road_id', road_name='$road_name', chainage='$chainage', layer='$layer', length='$length', width='$width', thickness='$thickness', equipment_type='$equipment_type', requisition_from_date='$requisition_from_date', requisition_to_date='$requisition_to_date', forwarding_note='$forwarding_note', date_of_forwarding='$date_of_forwarding', forwarding_status=1 where requisition_id=$requisition_id";

        //echo $sql; exit('OK');
			$result = $conn->query($sql);
			
			if($result)
			{
          //  header("Location: pending_requisition_list_view.php");

  ?>
          <script>
                  window.location.href = 'pending_requisition_list_view.php';
          </script>
  <?php

			}
		}
		  
	?>


    <section id="main-content">
      <section class="wrapper">
        <h3 align="center"> Equipment Requisition Verification </h3>
        <div class="row mt">
          <div class="col-lg-12">
            <div class="form-panel">
              <form class="form-horizontal style-form" action="requisition_verification.php" method="post">  

                 <div class="form-group">
                   <label class="col-sm-2 col-sm-2 control-label">Division </label>
                     <div class="col-sm-6">
                       <input type="text" name="division" value="<?php echo $division;  ?>" class="form-control" readonly>
                     </div>
                 </div>
				
				        <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">District </label>
                   <div class="col-sm-6">
                    <input type="text" name="district" value="<?php echo $district;  ?>" class="form-control" readonly>
                   </div>
                </div>

				        <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Package No </label>
                   <div class="col-sm-6">
                    <input type="text" name="package_no" value="<?php echo $package_no;  ?>" class="form-control" >
                   </div>
                </div>
				
				        <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Upazila </label>
                  <div class="col-sm-6">
                    <input type="text" name="upazila" value="<?php echo $upazila;  ?>" class="form-control" readonly>
                  </div>
                </div>
				
				        <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Road ID No. <span style="color:#FF0000">*</span></label>
                  <div class="col-sm-6">
                    <input type="text" name="road_id" value="<?php echo $road_id;  ?>" class="form-control" >
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Name of Road <span style="color:#FF0000">*</span></label>
                  <div class="col-sm-6">
                    <input type="text" name="road_name" value="<?php echo $road_name;  ?>" class="form-control" >
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Chainage <span style="color:#FF0000">*</span></label>
                  <div class="col-sm-6">
                    <input type="text" name="chainage" value="<?php echo $chainage;  ?>" class="form-control" >
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Layer <span style="color:#FF0000">*</span></label>
                  <div class="col-sm-6">
                    <input type="text" name="layer" value="<?php echo $layer;  ?>" class="form-control" >
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Effective Length <span style="color:#FF0000">*</span></label>
                  <div class="col-sm-6">
                    <input type="text" name="length" value="<?php echo $length;  ?>" class="form-control" >
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Pavement Width <span style="color:#FF0000">*</span></label>
                  <div class="col-sm-6">
                    <input type="text" name="width" value="<?php echo $width;  ?>" class="form-control" >
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Layer Thickness<span style="color:#FF0000">*</span></label>
                  <div class="col-sm-6">
                    <input type="text" name="thickness" value="<?php echo $thickness;  ?>" class="form-control" >
                  </div>
                </div>
				
				        <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Equipment Type <span style="color:#FF0000">*</span></label>
                  <div class="col-sm-6">
                    <input type="text" name="equipment_type" value="<?php echo $equipment_type;  ?>" class="form-control" >
                  </div>
                </div>

				
				        <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Requisition From <span style="color:#FF0000">*</span></label>
                  <div class="col-sm-6">
                    <input type="date" name="requisition_from_date" value="<?php echo $requisition_from_date;  ?>" class="form-control" >
                  </div>
                </div>
				
				        <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Requisition To <span style="color:#FF0000">*</span></label>
                  <div class="col-sm-6">
                    <input type="date" name="requisition_to_date" value="<?php echo $requisition_to_date;  ?>" class="form-control" >
                  </div>
                </div>
				
				        <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Date of Request</label>
                  <div class="col-sm-6">
                    <input type="datetime" name="request_date" value="<?php echo $request_date;  ?>" class="form-control" readonly>
                  </div>
                </div>
				
				        <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Name of Contractor</label>
                  <div class="col-sm-6">
                    <input type="text" name="contractor_name" value="<?php echo $contractor_name;  ?>" class="form-control" readonly>
                  </div>
                </div>
				
				        <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Address of Contractor</label>
                  <div class="col-sm-6">
                    <input type="text" name="contractor_address" value="<?php echo $contractor_address;  ?>" class="form-control" readonly>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Forwarding Note <span style="color:#FF0000">*</span></label>
                  <div class="col-sm-6">
                    <input type="text" name="forwarding_note"  class="form-control" required>
                  </div>
                </div>

                
				      
                <div class="form-group">
                   <div class="col-sm-8" align="center">
                     <input type="submit" name="update" class="btn btn-primary" value="Forward">
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
