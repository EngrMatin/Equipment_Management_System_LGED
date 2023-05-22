<!DOCTYPE html>
 <html lang="en">

  <?php
	  include('connection.php');
      include('function.php');
	  
      $equipment_id_list2 = equipment_id_list2()
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

        
          
          $sql = "select * from requisition_info where approval_status=1";
          $result = $conn->query($sql);
          
          if($row = mysqli_fetch_array($result))
          {
              $division_id 	 			      = $row['division_id'];
              $district_id 	 			      = $row['district_id'];
              $equipment_id 	              = $row['equipment_id'];
              $allotment_from_date 	          = $row['requisition_from_date'];
              $allotment_to_date 	          = $row['requisition_to_date'];
              $equipment_restore_date 	      = $row['equipment_restore_date'];
              
              
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
            $report_start_date     = $_POST['report_start_date'];
            $report_end_date       = $_POST['report_end_date'];
			      $equipment_id          = $_POST['equipment_id'];
            $report_date           = date('Y-m-d H:i:s');
            
            $sql = "update requisition_info set equipment_type='$equipment_type', requisition_from_date='$requisition_from_date', requisition_to_date='$requisition_to_date', equipment_id='$equipment_id', allotment_no='$allotment_no', allotment_date='$allotment_date', approval_note='$approval_note', approval_status=1 where requisition_id=$requisition_id";
            
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
        <h3 align="center"> Allotment History of Equipments </h3>
        
        <div class="row mt">
          <div class="col-lg-12">
            <div class="form-panel">
              <form class="form-horizontal style-form" action="allotment_history_report3.php" method="post">  

                 <!-- <div class="form-group">
                   <label class="col-sm-2 col-sm-2 control-label">Division </label>
                     <div class="col-sm-3">
                       <input type="text" name="division" value="<?php echo $division;  ?>" class="form-control" readonly>
                     </div>
                 
                  <label class="col-sm-2 col-sm-2 control-label">District </label>
                   <div class="col-sm-3">
                    <input type="text" name="district" value="<?php echo $district;  ?>" class="form-control" readonly>
                   </div>
                </div> -->
				
                <div class="form-group">
				          <label class="col-sm-2 col-sm-2 control-label">Equipment ID No.</label>
				            <div class="col-sm-3">
                      <select name="equipment_id" style="height:30px; width:235px;">
                         <option value="" disabled selected hidden>Select Equipment ID No.</option>
                            <?php
                        
                                foreach($equipment_id_list2 as $key => $value)
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
                  <label class="col-sm-2 col-sm-2 control-label">Report Start Date <span style="color:#FF0000">*</span></label>
                  <div class="col-sm-3">
                    <input type="date" name="report_start_date" value="<?php echo $report_start_date;  ?>" class="form-control" required>
                  </div>
                <!-- </div> -->
				
				<!-- <div class="form-group"> -->
                  <label class="col-sm-2 col-sm-2 control-label">Report End Date <span style="color:#FF0000">*</span></label>
                  <div class="col-sm-3">
                    <input type="date" name="report_end_date" value="<?php echo $report_end_date;  ?>" class="form-control" required>
                  </div>
                </div>
				      
                <div class="form-group">
                  
                   <div class="col-sm-8" align="center">
                    
                     <input type="submit" name="print_report" class="btn btn-primary" value="Print Report">
					           <!-- <input type="hidden" name="requisition_id" value="<?php echo $requisition_id; ?>"> -->
                     <div style='text-align:center;'><button class='button1' onclick=\"print('report_content')\">Print Report</button></div>
                     <div class="col-sm-8" align="center">
                     <input type="submit" name="generate_report" class="btn btn-primary" value="Generate Report">
					           <!-- <input type="hidden" name="requisition_id" value="<?php echo $requisition_id; ?>"> -->
                     
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
