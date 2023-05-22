<!DOCTYPE html>
 <html lang="en">

  <?php
	    include('connection.php');
      include('function.php');
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

        if(isset($_GET['temp_con_id']))
        {
          $temp_con_id = $_GET['temp_con_id'];
          $sql = "select * from temp_con_info where temp_con_id = '$temp_con_id'";
          $result = $conn->query($sql);
          
          if($row = mysqli_fetch_array($result))
          {
              
              $temp_con_name 	         = $row['temp_con_name'];
              $temp_con_address 	     = $row['temp_con_address'];
              $temp_con_mobile 	       = $row['temp_con_mobile'];
              $temp_con_email 	       = $row['temp_con_email'];
              $division_id 	 			     = $row['division_id'];
              $district_id 	 			     = $row['district_id'];
              $package_no 	           = $row['package_no'];
              $road_id 	     		       = $row['road_id'];
              $road_name 	             = $row['road_name'];
              $upazila_id 	     		   = $row['upazila_id'];
              $temp_con_password 	     = $row['temp_con_password'];
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
            $temp_con_email 	              = $_POST['temp_con_email'];  
            $check_name = "select * from contractor_info where contractor_email='$temp_con_email'";
            $run = $conn->query($check_name);
          
            if(mysqli_num_rows($run)>0)
            {
                $temp_con_id = $_POST['temp_con_id'];

                //$sql = "UPDATE contractor_info SET contractor_address='$temp_con_address', contractor_mobile='$temp_con_mobile', contractor_password='$temp_con_password', division_id='$division_id', district_id='$district_id', package_no='$package_no', road_id='$road_id', road_name='$road_name', upazila_id='$upazila_id', active_status=1 WHERE contractor_email='$temp_con_email'";
                $sql = "UPDATE contractor_info AS ci INNER JOIN temp_con_info AS tci ON ci.contractor_email=tci.temp_con_email SET ci.contractor_address=tci.temp_con_address, ci.contractor_mobile=tci.temp_con_mobile, ci.contractor_password=tci.temp_con_password, ci.division_id=tci.division_id, ci.district_id=tci.district_id, ci.package_no=tci.package_no, ci.road_id=tci.road_id, ci.road_name=tci.road_name, ci.upazila_id=tci.upazila_id, ci.active_status=1 ";
                $result = $conn->query($sql);
            }
            else
            {
                $temp_con_id = $_POST['temp_con_id'];

                $sql = "INSERT INTO contractor_info(contractor_name, contractor_address, contractor_mobile, contractor_email, contractor_password, division_id, district_id, package_no, road_id, road_name, upazila_id) SELECT temp_con_name, temp_con_address, temp_con_mobile, temp_con_email, temp_con_password, division_id, district_id, package_no, road_id, road_name, upazila_id FROM temp_con_info WHERE temp_con_id=$temp_con_id";
                $result = $conn->query($sql);
            }
          
            if($result)
            {
                $sql2 = "delete from temp_con_info where temp_con_id = '$temp_con_id'";
                $result2 = $conn->query($sql2);
                
                $from = "system.admin_ems@lged.gov.bd";
                $to = $temp_con_email;
                $subject = "Your Registration Request has been Approved ";
                $message = "Your User ID : ".$temp_con_email. " and Password: ".$temp_con_password;
                $headers = "From: " . $from;
                if(mail($to, $subject, $message, $headers)) 
                {
                  echo "The email message was sent.";
                } 
                else 
                {
                  echo "The email message was not sent.";
                }
    
    ?>
                <script>
							          window.location.href = 'pending_contractors_registration.php';
					      </script>
    <?php
          
            }
          }

          if(isset($_POST['reject']))
          {
            $temp_con_id 	              = $_POST['temp_con_id'];
          
            $sql = "delete from temp_con_info where temp_con_id = '$temp_con_id'";
            $result = $conn->query($sql);
            
            if($result)
            {
              $from = "system.admin_ems@lged.gov.bd";
              $to = $temp_con_email;
              $subject = "Your Registration Request has NOT been approved. ";
              $message = "You have no active contract with the Executive Engineer, LGED, ".$district;
              $headers = "From: " . $from;
              if(mail($to, $subject, $message, $headers)) 
              {
                echo "The email message was sent.";
              } 
              else 
              {
                echo "The email message was not sent.";
              }
    ?>
                <script>
							          window.location.href = 'pending_contractors_registration.php';
					      </script>
    <?php
          
            }
          }

      
	  ?>
   
    <section id="main-content">
      <section class="wrapper">
        <h3 align="center"> Contractors Registration Approval </h3>
        
        <div class="row mt">
          <div class="col-lg-12">
            <div class="form-panel">
              <form class="form-horizontal style-form" action="contractors_registration_approval.php" method="post">  

                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Name of Contractor </label>
                  <div class="col-sm-6">
                    <input type="text" name="temp_con_name" value="<?php echo $temp_con_name;  ?>" class="form-control" readonly>
                  </div>
                </div>
				
				        <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Address of Contractor</label>
                  <div class="col-sm-6">
                    <input type="text" name="temp_con_address" value="<?php echo $temp_con_address;  ?>" class="form-control" readonly>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Mobile Number</label>
                  <div class="col-sm-6">
                    <input type="text" name="temp_con_mobile" value="<?php echo $temp_con_mobile;  ?>" class="form-control" readonly>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Email</label>
                  <div class="col-sm-6">
                    <input type="email" name="temp_con_email" value="<?php echo $temp_con_email;  ?>" class="form-control" readonly>
                  </div>
                </div>

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
                    <input type="text" name="package_no" value="<?php echo $package_no;  ?>" class="form-control" readonly>
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
                  <label class="col-sm-2 col-sm-2 control-label">Upazila </label>
                  <div class="col-sm-6">
                    <input type="text" name="upazila" value="<?php echo $upazila;  ?>" class="form-control" readonly>
                  </div>
                </div>
				
				         <!-- <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Password </label>
                  <div class="col-sm-6">
                    <input type="hidden" name="temp_con_password" value="<?php $temp_con_password  ?>" class="form-control" readonly>
                  </div>
                </div> -->
                

                <!--<div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Approval Note <span style="color:#FF0000">*</span></label>
                  <div class="col-sm-6">
                    <input type="text" name="approval_note"  class="form-control" required>
                  </div>
                </div>-->
				      
                <div class="form-group">
                   <div class="col-sm-8" align="center">
                     <input type="submit" name="reject" class="btn btn-danger" value="Reject">
					           <input type="hidden" name="temp_con_id" value="<?php echo $temp_con_id; ?>">

                     <div class="col-sm-8" align="center">
                     <input type="submit" name="approve" class="btn btn-primary" value="Approve">
					           <input type="hidden" name="temp_con_id" value="<?php echo $temp_con_id; ?>">
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
