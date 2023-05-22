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
		
		
		$category = array();
		$sql5 = "select * from equipment_category";
		$result5 = $conn->query($sql5);

		while($row5 = mysqli_fetch_array($result5))
		{
			$category[$row5['category_id']] = $row5['equipment_type'];
		}
		
		if(isset($_GET['equip_id']))
		{
			$equip_id = $_GET['equip_id'];
			
			$sql = "select * from equipment_info where equip_id = '$equip_id'";
			$result = $conn->query($sql);

			while($row = $result->fetch_assoc())
			{
				$division_id 	       	   	= $row['division_id'];
				$district_id 	       	   	= $row['district_id'];
				$category_id 	       		= $row['category_id'];
				$equipment_id 	       		= $row['equipment_id'];
				$equipment_brand 	        = $row['equipment_brand'];
				$equipment_model 	        = $row['equipment_model'];
				$equipment_weight 	        = $row['equipment_weight'];
				$year_of_manufacture   		= $row['year_of_manufacture'];
				$source 	           		= $row['source'];
				$hire_charge 	           	= $row['hire_charge'];
				$physical_status 	        = $row['physical_status'];
				$allotment_status 	        = $row['allotment_status'];
				$allotment_to_date 	        = $row['allotment_to_date'];
				$location 	                = $row['location'];
				$equip_id 	           		= $row['equip_id'];
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
			height:40px;
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
			<div class="div1" align="center">View Equipment Information </div>
			<div class="div2" align="right">
				<a href="equipment_status_report.php" class="button1">Back to Equipment Status</a>
			</div>
		</div>
	  
        
        <div class="row">
          <div class="col-md-12">
            <div class="content-panel">
              
			  	<div class="table">
					<table border="1" width="100%" cellpadding="0" cellspacing="0">

						<tr style="height:35px;color:#000000">
							<th width="200px" style="text-align:Left; padding-left:15px;">Division:</th>
							<td style="padding-left:15px;"><?php  echo $division;  ?></td>
						</tr>

						<tr style="height:35px;color:#000000">
							<th width="200px" style="text-align:Left; padding-left:15px;">District:</th>
							<td style="padding-left:15px;"><?php  echo $district;  ?></td>
						</tr>

						<tr style="height:35px;color:#000000">
							<th width="200px;" style="text-align:Left; padding-left:15px;">Equipment Type :</th>
							<td style="padding-left:15px;"><?php echo $category[$category_id];  ?></td>
						</tr>
						<tr style="height:35px;color:#000000">
							<th width="200px;" style="text-align:Left; padding-left:15px;">Equipment ID Number :</th>
							<td style="padding-left:15px;"><?php echo $equipment_id;  ?></td>
						</tr>
						<tr style="height:35px;color:#000000">
							<th width="200px;" style="text-align:Left; padding-left:15px;">Brand :</th>
							<td style="padding-left:15px;"><?php echo $equipment_brand;  ?></td>
						</tr>
						
						<tr style="height:35px;color:#000000">
							<th width="200px;" style="text-align:Left; padding-left:15px;">Model :</th>
							<td style="padding-left:15px;"><?php echo $equipment_model;  ?></td>
						</tr>

						<tr style="height:35px;color:#000000">
							<th width="200px;" style="text-align:Left; padding-left:15px;">Weight :</th>
							<td style="padding-left:15px;"><?php echo $equipment_weight;  ?></td>
						</tr>

						<tr style="height:35px;color:#000000">
							<th width="200px;" style="text-align:Left; padding-left:15px;">Year of Manufacture :</th>
							<td style="padding-left:15px;"><?php echo $year_of_manufacture;  ?></td>
						</tr>

						<tr style="height:35px;color:#000000">
							<th width="200px;" style="text-align:Left; padding-left:15px;">Source :</th>
							<td style="padding-left:15px;"><?php echo $source;  ?></td>
						</tr>

						<tr style="height:35px;color:#000000">
							<th width="200px;" style="text-align:Left; padding-left:15px;">Hire Charge :</th>
							<td style="padding-left:15px;"><?php echo $hire_charge;  ?></td>
						</tr>

						<tr style="height:35px;color:#000000">
							<th width="200px;" style="text-align:Left; padding-left:15px;">Physical Status :</th>
							<td style="padding-left:15px;"><?php echo $physical_status;  ?></td>
						</tr>

						<tr style="height:35px;color:#000000">
							<th width="200px;" style="text-align:Left; padding-left:15px;">Allotment Status :</th>
							<td style="padding-left:15px;">
								<?php 
								if($allotment_status==1)
								{
									echo "<span style='color:blue; font-weight:bold;'>Unallotted</span>";
								}
								else if($allotment_status==2)
								{
									echo "<span style='color:red; font-weight:bold;'>Allotted</span>";
								}  
								?>
							</td>
						</tr>

						<tr style="height:35px;color:#000000">
							<th width="200px;" style="text-align:Left; padding-left:15px;">Allotment To (date) :</th>
							<td style="padding-left:15px;"><?php echo $allotment_to_date;  ?></td>
						</tr>

						<tr style="height:35px;color:#000000">
							<th width="200px;" style="text-align:Left; padding-left:15px;"> Location :</th>
							<td style="padding-left:15px;"><?php echo $location;  ?></td>
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
