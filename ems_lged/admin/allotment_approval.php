<!DOCTYPE html>
 <html lang="en">

  <?php
	    include('connection.php');
      include('function.php');
	
	    $category_list = category_list();
      $equipment_id_list = equipment_id_list()
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
              $division_id 	 			           = $row['division_id'];
              $district_id 	 			           = $row['district_id'];
              $package_no 	 			           = $row['package_no'];
              $upazila_id 	     		         = $row['upazila_id'];
              $road_id 	     		             = $row['road_id'];
              $road_name 	                   = $row['road_name'];
              $chainage 	                   = $row['chainage'];
              $layer 					               = $row['layer'];
              $length 					             = $row['length'];
					    $width 					               = $row['width'];
					    $thickness 					           = $row['thickness'];
              $equipment_type 	             = $row['equipment_type'];
              $requisition_from_date 	       = $row['requisition_from_date'];
              $requisition_to_date 	         = $row['requisition_to_date'];
              $request_date 	               = $row['request_date'];
              $contractor_name 	             = $row['contractor_name'];
              $contractor_address 	         = $row['contractor_address'];
              $forwarding_note 	             = $row['forwarding_note'];
              $date_of_forwarding 	         = $row['date_of_forwarding'];
              $equipment_id 	               = $row['equipment_id'];
              $allotment_no 	               = $row['allotment_no'];
              $allotment_date 	             = $row['allotment_date'];
              $proposer_note 	               = $row['proposer_note'];
              $date_of_proposal 	           = $row['date_of_proposal'];
              $requisition_id 	    	       = $row['requisition_id'];
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

        
        if(isset($_POST['approve']))
        {
              $equipment_type                 = $_POST['equipment_type'];
              $requisition_from_date          = $_POST['requisition_from_date'];
              $requisition_to_date            = $_POST['requisition_to_date'];
              $equipment_id                   = $_POST['equipment_id'];
              $allotment_no                   = $_POST['allotment_no'];
              $allotment_date                 = date('Y-m-d H:i:s');
              $approval_note                  = $_POST['approval_note'];
              $location 	                    = $_POST['upazila'];
              $requisition_id 	              = $_POST['requisition_id'];
          
            
            $sql = "update requisition_info set equipment_type='$equipment_type', requisition_from_date='$requisition_from_date', requisition_to_date='$requisition_to_date', equipment_id='$equipment_id', allotment_no='$allotment_no', allotment_date='$allotment_date', approval_note='$approval_note', approval_status=1 where requisition_id=$requisition_id";
            
            $result = $conn->query($sql);
            
            if($result)
            {
                $sql2 = "update equipment_info set allotment_status=2, allotment_to_date='$requisition_to_date', location='$location' where equip_id=$equipment_id";
                // echo $sql2; exit('OK');
                $result2 = $conn->query($sql2);
                
                //header("Location: pending_requisition_list_view.php");
    
    ?>
                <script>
							          window.location.href = 'processed_requisition_list_view.php';
					      </script>
    <?php
          
            }
        }

        if(isset($_POST['reject']))
        {
              $allotment_date                 = date('Y-m-d H:i:s');
              $approval_note                  = $_POST['approval_note'];
              $requisition_id 	              = $_POST['requisition_id'];
          
            
            $sql = "update requisition_info set allotment_date='$allotment_date', approval_note='$approval_note', approval_status=2 where requisition_id=$requisition_id";
            
            $result = $conn->query($sql);
            
            if($result)
            {
                
    ?>
                <script>
							          window.location.href = 'processed_requisition_list_view.php';
					      </script>
    <?php
          
            }
        }


	  ?>
   
    <section id="main-content">
      <section class="wrapper">
        <h3 align="center"> Equipment Allotment Approval </h3>
        
        <div class="row mt">
          <div class="col-lg-12">
            <div class="form-panel">
              <form class="form-horizontal style-form" action="allotment_approval.php" method="post">  

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
                  <label class="col-sm-2 col-sm-2 control-label">Road ID No.</label>
                  <div class="col-sm-6">
                    <input type="text" name="road_id" value="<?php echo $road_id;  ?>" class="form-control" readonly>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Name of Road</label>
                  <div class="col-sm-6">
                    <input type="text" name="road_name" value="<?php echo $road_name;  ?>" class="form-control" readonly>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Chainage</label>
                  <div class="col-sm-6">
                    <input type="text" name="chainage" value="<?php echo $chainage;  ?>" class="form-control" readonly>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Layer</label>
                  <div class="col-sm-6">
                    <input type="text" name="layer" value="<?php echo $layer;  ?>" class="form-control" readonly>
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
                    <input type="text" name="equipment_type" value="<?php echo $equipment_type;  ?>" class="form-control" required>
                  </div>
                </div>

				
				         <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Requisition From <span style="color:#FF0000">*</span></label>
                  <div class="col-sm-6">
                    <input type="date" name="requisition_from_date" value="<?php echo $requisition_from_date;  ?>" class="form-control" required>
                  </div>
                </div>
				
				         <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Requisition To <span style="color:#FF0000">*</span></label>
                  <div class="col-sm-6">
                    <input type="date" name="requisition_to_date" value="<?php echo $requisition_to_date;  ?>" class="form-control" required>
                  </div>
                </div>
				
				         <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Date of Request </label>
                  <div class="col-sm-6">
                    <input type="datetime" name="request_date" value="<?php echo $request_date;  ?>" class="form-control" readonly>
                  </div>
                </div>
				
				         <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Name of Contractor </label>
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
                  <label class="col-sm-2 col-sm-2 control-label">Forwarding Note</label>
                  <div class="col-sm-6">
                    <input type="text" name="forwarding_note"  value="<?php echo $forwarding_note;  ?>"  class="form-control" readonly>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Date of Forwarding</label>
                  <div class="col-sm-6">
                    <input type="datetime" name="date_of_forwarding" value="<?php echo $date_of_forwarding;  ?>" class="form-control" readonly>
                  </div>
                </div>

                <div class="form-group">
				          <label class="col-sm-2 col-sm-2 control-label">Equipment ID No.</label>
				            <div class="col-sm-6">
                      <select name="equipment_id" style="height:30px; width:500px;">
                         <option value="" disabled selected hidden>Select Equipment ID No.</option>
                            <?php
                        
                                foreach($equipment_id_list as $key => $value)
                                {
                                    if($equipment_id==$key)
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
                  <label class="col-sm-2 col-sm-2 control-label">Allotment Order No. <span style="color:#FF0000">*</span></label>
                  <div class="col-sm-6">
                    <input type="text" name="allotment_no"  value="<?php echo $allotment_no;  ?>"  class="form-control" required>
                  </div>
                </div>


                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Proposer Note</label>
                  <div class="col-sm-6">
                    <input type="text" name="proposer_note"  value="<?php echo $proposer_note;  ?>"  class="form-control" readonly>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Date of Proposal</label>
                  <div class="col-sm-6">
                    <input type="datetime" name="date_of_proposal"  value="<?php echo $date_of_proposal;  ?>"  class="form-control" readonly>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Approval Note <span style="color:#FF0000">*</span></label>
                  <div class="col-sm-6">
                    <input type="text" name="approval_note"  class="form-control" required>
                  </div>
                </div>
				      
                <div class="form-group">
                   <div class="col-sm-8" align="center">
                     <input type="submit" name="reject" class="btn btn-danger" value="Reject">
					           <input type="hidden" name="requisition_id" value="<?php echo $requisition_id; ?>">

                     <div class="col-sm-8" align="center">
                     <input type="submit" name="approve" class="btn btn-primary" value="Approve">
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
