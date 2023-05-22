<!DOCTYPE html>
 <html lang="en">

   <?php include('connection.php'); ?>

   <head>
  		<?php  include('header_resources.php');  ?>
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

			while($row = $result->fetch_assoc())
			{
				$division_id 	       	= $row['division_id'];
				$district_id 	       	= $row['district_id'];
				$driver_id 	    		= $row['driver_id'];
				$driver_name 	        = $row['driver_name'];
				$driver_address 	    = $row['driver_address'];
				$driver_mobile_no       = $row['driver_mobile_no'];
				$driver_nid_no       	= $row['driver_nid_no'];
				$driver_dob       	    = $row['driver_dob'];
				$appointment_type       = $row['appointment_type'];
				$equipment_id 			= $row['equipment_id'];
				$dri_id 	    		= $row['dri_id'];
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
		
	?>
   
	<style>
		.div1
		{
			width:80%;
			display:inline-block;
			font-weight:bold;
			font-size:24px;
			color:#3d5170;
		}
			
		.div2
		{
			width:17%;
			display:inline-block;
		}
			
		.button1 
		{
		  background-color: #4CAF50; 
		  border: none;
		  color: white;
		  padding: 8px 20px;
		  text-align: center;
		  text-decoration: none;
		  display: inline-block;
		  font-size: 16px;
		  margin: 4px 2px;
		  cursor: pointer;
		  border-radius: 8px;
		}
		
		.button2 
		{
		  background-color: #008CBA;
		  border: none;
		  color: white;
		  padding: 4px 14px;
		  text-align: center;
		  text-decoration: none;
		  display: inline-block;
		  font-size: 12px;
		  margin: 4px 2px;
		  cursor: pointer;
		  border-radius: 8px;
		}
		
		.button3 
		{
		  background-color: purple;
		  border: none;
		  color: white;
		  padding: 4px 14px;
		  text-align: center;
		  text-decoration: none;
		  display: inline-block;
		  font-size: 12px;
		  margin: 4px 2px;
		  cursor: pointer;
		  border-radius: 8px;
		}
		
		.table,tr,td
		{
			border: 1px solid black;
			border-collapse:collapse;
			height:50px;
		}
		.table
		{
			width:70%;
			margin-left:200px;
			max-width:100%;
			margin-bottom:1px;
		}
		
		.content-panel 
		{
			background: #ffffff;
			box-shadow: 0px 3px 2px #aab2bd;
			padding-top: 15px;
			padding-bottom: 5px;
			height: 600px;
		}		
	
	</style>
	
    <section id="main-content">
      <section class="wrapper">
	  	<div>
			<div class="div1" align="center">View Driver Information</div>
			<div class="div2" align="right">
				<a href="driver_list_view.php" class="button1">Back to Driver List</a>
			</div>
		</div>
	  
        
        <div class="row">
          <div class="col-md-12">
            <div class="content-panel">
              
			  	<div class="table">
					<table border="1" width="100%" cellpadding="0" cellspacing="0">
						
						<tr style="height:40px;color:#000000">
							<th width="200px" style="text-align:Left; padding-left:15px;">Division:</th>
							<td style="padding-left:15px;"><?php  echo $division;  ?></td>
						</tr>

						<tr style="height:40px;color:#000000">
							<th width="200px" style="text-align:Left; padding-left:15px;">District:</th>
							<td style="padding-left:15px;"><?php  echo $district;  ?></td>
						</tr>
						<tr>
							<th width="200px;" style="text-align:Left; padding-left:15px;">Driver ID Number :</th>
							<td style="padding-left:15px;"><?php echo $driver_id;  ?></td>
						</tr>
						<tr>
							<th width="200px;" style="text-align:Left; padding-left:15px;">Name :</th>
							<td style="padding-left:15px;"><?php echo $driver_name;  ?></td>
						</tr>
						<tr>
							<th width="200px;" style="text-align:Left; padding-left:15px;">Address :</th>
							<td style="padding-left:15px;"><?php echo $driver_address;  ?></td>
						</tr>
						
						<tr>
							<th width="200px;" style="text-align:Left; padding-left:15px;">Mobile No :</th>
							<td style="padding-left:15px;"><?php echo $driver_mobile_no;  ?></td>
						</tr>

						<tr>
							<th width="200px;" style="text-align:Left; padding-left:15px;">NID No :</th>
							<td style="padding-left:15px;"><?php echo $driver_nid_no;  ?></td>
						</tr>

						<tr>
							<th width="200px;" style="text-align:Left; padding-left:15px;">Date of Birth :</th>
							<td style="padding-left:15px;"><?php echo $driver_dob;  ?></td>
						</tr>

						<tr>
							<th width="200px;" style="text-align:Left; padding-left:15px;">Appointment Type :</th>
							<td style="padding-left:15px;"><?php echo $appointment_type;  ?></td>
						</tr>

						<tr>
							<th width="200px;" style="text-align:Left; padding-left:15px;">Equipment ID Number :</th>
							<td style="padding-left:15px;"><?php echo $equipment_id;  ?></td>
						</tr>
						
					</table>
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
