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
		  	background-color: red;
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
		
		.button4 
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
	
	</style>
	
    <script>
			function print(parameter) 
			{
				var prtContent = document.getElementById(parameter).innerHTML;
				var WinPrint = window.open('', '', 'left=0,top=0,width=1200,height=900,toolbar=0,scrollbars=0,status=0');
				WinPrint.document.write(prtContent);
				WinPrint.document.close();
				WinPrint.focus();
				WinPrint.print();
				WinPrint.close();
			}
	</script>

    <section id="main-content">
      <section class="wrapper">
	  	<div>
			<div class="div1" align="center"></div>
			<div class="div2" align="right"> 
			</div>
		</div>
	    	          
        <div class="row">
          <div class="col-md-12">
            <div class="content-panel">

			  <?php

			  	//session_start();

				$user_division_id   = $_SESSION['user_division_id']; 
				$user_district_id   = $_SESSION['user_district_id']; 
				$user_upazila_id    = $_SESSION['user_upazila_id']; 
				$role_id            = $_SESSION['role_id'];  
			  
				if(isset($_GET['requisition_id']))
				{
					$requisition_id = $_GET['requisition_id'];
					$sql = "SELECT ri.district_id, ri.allotment_no, ri.allotment_date, ri.package_no, ri.upazila_id, ri.road_id, ri.road_name, ri.chainage, ri.layer, ri.length, ri.width, ri.thickness, ri.requisition_from_date, ri.requisition_to_date, ri.contractor_name, ri.contractor_address, ri.equipment_type, ri.equipment_return_status, ri.equipment_restore_status, ri.equipment_restore_date, ei.equipment_id, ei.equipment_brand, ei.equipment_model, ei.equipment_weight, ei.hire_charge, rll.roller_hire_rate, rll.unit
                        	FROM requisition_info as ri, equipment_info as ei, road_layer_list as rll 
                        	WHERE rll.layer_name=ri.layer and ei.equip_id=ri.equipment_id and ri.requisition_id='$requisition_id'";
					$result = $conn->query($sql);
					
				}
		
				$i=0;
				while($row = mysqli_fetch_array($result))
				{
					$i++;
					$equipment_return_status 	= $row['equipment_return_status'];
					$district_id 	 			= $row['district_id'];
					$allotment_no 	     	 	= $row['allotment_no'];
					$allotment_date 	     	= $row['allotment_date'];
					$package_no 	 	     	= $row['package_no'];
					$upazila_id 	         	= $row['upazila_id'];
					$road_id 	     		 	= $row['road_id'];
					$road_name 	             	= $row['road_name'];
					$chainage 	             	= $row['chainage'];
					$layer 					 	= $row['layer'];
					$length 				 	= $row['length'];
					$width 					 	= $row['width'];
					$thickness 			     	= $row['thickness'];
					$allotment_from_date 	 	= $row['requisition_from_date'];
					$allotment_to_date 		 	= $row['requisition_to_date'];
					$allotment_to_date 		 	= $row['requisition_to_date'];
					$contractor_name 		 	= $row['contractor_name'];
					$contractor_address 		= $row['contractor_address'];
					$equipment_type 	     	= $row['equipment_type'];
					$equipment_id 	         	= $row['equipment_id'];
					$equipment_brand 	     	= $row['equipment_brand'];
					$equipment_model 	     	= $row['equipment_model'];
					$equipment_weight 	     	= $row['equipment_weight'];
					$hire_charge 	     	    = $row['hire_charge'];
					$roller_hire_rate 	     	= $row['roller_hire_rate'];
					$unit 	     	            = $row['unit'];
					$equipment_restore_status 	= $row['equipment_restore_status'];
					$equipment_restore_date 	= $row['equipment_restore_date'];
					
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
				
                $date1 = date_create($allotment_from_date);
                $date2 = date_create($equipment_restore_date);
                if($equipment_restore_status == 0)
                {
                    $date2 = date_create($allotment_to_date);
                    $interval = date_diff($date1, $date2);
                    $equipment_used_days = $interval->format('%R%a') + 1;
                }
                else
                {
                    $interval = date_diff($date1, $date2);
                    $equipment_used_days = $interval->format('%R%a') + 1;
                }

                $hire_charge_by_time = $equipment_used_days * $hire_charge;


				$area = $length * $width;
				$volume = $length * $width * $thickness/1000;

				if ($unit == 'cum')
				{
					$quantity = $volume;
				}
				else if ($unit == 'sqm')
				{
					$quantity = $area;
				}

				$hire_charge_by_quantity = $quantity * $roller_hire_rate;
				

				if ($hire_charge_by_time > $hire_charge_by_quantity)
				{
					$hire_charge_payable = $hire_charge_by_time;
				}
				else
				{
					$hire_charge_payable = $hire_charge_by_quantity;
				}

				echo "<div style='text-align:right;'><button class='button1' onclick=\"print('report_content')\">Print Bill</button></div>";
				echo "<div id='report_content'>";
				echo "<div style='text-align:Center; text-decoration:underline; font-size:25px; font-weight:bold; color:blue;'>Details of Equipment Hire Charge Bill</div>";
			  
			  ?>

					<style>
						.th
						{
							max-width:40%; 
							height:30px;
							text-align:Left; 
							padding-left:15px; 
							font-size: 14px;
							color:#000000;
						}

						.td
						{
							width:auto;
							padding-left:15px; 
							color:#000000; 
							font-size: 14px;
						}
					</style>
          
                
					<table border="1" cellpadding="0" cellspacing="0" style='margin:20px; width:95%;'>

						<tr>
							<th class="th">Authority:</th>
							<td class="td"><?php  echo "Executive Engineer, LGED, " , $district;  ?></td>
						</tr>

						<tr>
							<th class="th">Allotment Order No:</th>
							<td class="td"><?php  echo $allotment_no;  ?></td>
						</tr>

						<tr>
							<th class="th">Date of Allotment Order:</th>
							<td class="td"><?php  echo $allotment_date;  ?></td>
						</tr>

						<tr>
							<th class="th">Name of Contractor:</th>
							<td style="color: blue; font-weight: bold;" class="td"><?php  echo $contractor_name;  ?></td>
						</tr>

						<tr>
							<th class="th">Address of Contractor:</th>
							<td class="td"><?php  echo $contractor_address;  ?></td>
						</tr>

						<tr>
							<th class="th">Equipment Type :</th>
							<td class="td"><?php echo $equipment_type;  ?></td>
						</tr>
						<tr>
							<th class="th">Equipment ID Number :</th>
							<td class="td"><?php echo $equipment_id;  ?></td>
						</tr>
						<tr>
							<th class="th">Brand :</th>
							<td class="td"><?php echo $equipment_brand;  ?></td>
						</tr>
						
						<tr>
							<th class="th">Model :</th>
							<td class="td"><?php echo $equipment_model;  ?></td>
						</tr>

						<tr>
							<th class="th">Weight :</th>
							<td class="td"><?php echo $equipment_weight;  ?></td>
						</tr>

						<tr>
							<th class="th">Allotment from (date):</th>
							<td class="td"><?php  echo $allotment_from_date;  ?></td>
						</tr>

						<tr>
							<th class="th">Allotment to (date):</th>
							<td class="td"><?php  echo $allotment_to_date;  ?></td>
						</tr>
						
						<tr>
							<th class="th">Equipment restored (date) :</th>
							<td class="td"><?php echo $equipment_restore_date;  ?></td>
						</tr>

						<tr>
							<th class="th"> No. of days used :</th>
							<td class="td"><?php echo $equipment_used_days;  ?></td>
						</tr>

						<tr>
							<th class="th">Rate of hire charge per day :</th>
							<td class="td"><?php echo $hire_charge;  ?></td>
						</tr>

						<tr>
							<th style="color: blue;" class="th"> Hire Charge according to used-days :</th>
							<td style="color: blue; font-weight: bold;" class="td"><?php echo $hire_charge_by_time;  ?></td>
						</tr>

						<tr>
							<th class="th">Contract Package Number:</th>
							<td class="td"><?php  echo $package_no;  ?></td>
						</tr>

						<tr>
							<th class="th">Upazila:</th>
							<td class="td"><?php  echo $upazila;  ?></td>
						</tr>

						<tr>
							<th class="th">Road ID Number:</th>
							<td class="td"><?php  echo $road_id;  ?></td>
						</tr>

						<tr>
							<th class="th">Name of the Road:</th>
							<td class="td"><?php  echo $road_name;  ?></td>
						</tr>

						<tr>
							<th class="th">Chainage:</th>
							<td class="td"><?php  echo $chainage;  ?></td>
						</tr>

						<tr>
							<th class="th">Layer:</th>
							<td class="td"><?php  echo $layer;  ?></td>
						</tr>

						<tr>
							<th class="th">Effective Length (in meter):</th>
							<td class="td"><?php  echo $length;  ?></td>
						</tr>

						<tr>
							<th class="th">Pavement Width (in meter):</th>
							<td class="td"><?php  echo $width;  ?></td>
						</tr>

						<tr>
							<th class="th">Thickness of the Layer (in mm):</th>
							<td class="td"><?php  echo $thickness;  ?></td>
						</tr>

						<tr>
							<th class="th">Work done quantity:</th>
							<td class="td"><?php  echo $quantity.' '.$unit;  ?></td>
						</tr>

						<tr>
							<th class="th">Rate of hire charge per unit quantity:</th>
							<td class="td"><?php  echo $roller_hire_rate;  ?></td>
						</tr>

						<tr>
							<th style="color: blue;"class="th"> Hire Charge according to work done quantity :</th>
							<td style="color: blue; font-weight: bold;" class="td"><?php echo $hire_charge_by_quantity;  ?></td>
						</tr>

						<tr>
							<th style="color: red; font-size: 16px;" class="th"> Hire Charge to be paid (in BDT) :</th>
							<td style="color: red; font-size: 16px; font-weight: bold;" class="td"><?php echo $hire_charge_payable;  ?></td>
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
