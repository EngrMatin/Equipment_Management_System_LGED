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
	

    <section id="main-content">
      <section class="wrapper">
	  	<div>
			<div class="div1" align="center">Equipment Return Requests</div>
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
			  
				if ($role_id == 3 or $role_id == 13)
				{
					$sql = "SELECT ri.requisition_id, ri.district_id, ri.allotment_no, ri.allotment_date, ri.requisition_from_date, ri.requisition_to_date, ri.equipment_type, ei.equipment_id, ri.road_name, ri.upazila_id, ri.contractor_name, di.driver_name 
                            FROM requisition_info as ri, equipment_info as ei, driver_info as di 
                            WHERE di.equipment_id=ei.equipment_id and ei.equip_id=ri.equipment_id and ri.equipment_return_status=1";
				}
				else
				{
					$sql = "SELECT ri.requisition_id, ri.district_id, ri.allotment_no, ri.allotment_date, ri.requisition_from_date, ri.requisition_to_date, ri.equipment_type, ei.equipment_id, ri.road_name, ri.upazila_id, ri.contractor_name, di.driver_name
                            FROM requisition_info as ri, equipment_info as ei, driver_info as di 
                            WHERE di.equipment_id=ei.equipment_id and ei.equip_id=ri.equipment_id and ri.district_id='$user_district_id' and ri.equipment_return_status=1";
				}
			  	
                
				$rec = $conn->query($sql);
				
				echo "<table border='1' cellpadding='0' align='center'>";
				echo "<thead>";
                echo "<tr style='background-color:#66cccc; height:30px; text-align:center; color:black; font-weght:bold;'>
                    <th> Sl No </th>
                    <th style='text-align:Center; padding-left:5px; padding-right:5px;'>District</th>
                    <th style='text-align:Center; padding-left:5px; padding-right:5px;'>Allotment No</th>
                    <th style='text-align:Center; padding-left:5px; padding-right:5px;'>Allotment Date</th>
                    <th style='text-align:Center; padding-left:5px; padding-right:5px;'>Allotment From (Date)</th>
                    <th style='text-align:Center; padding-left:5px; padding-right:5px;'>Allotment To (Date)</th>
					<th style='text-align:Center; padding-left:5px; padding-right:5px;'>Equipment Type</th>
					<th style='text-align:Center; padding-left:5px; padding-right:5px;'>Equipment ID</th>
					<th style='text-align:Center; padding-left:5px; padding-right:5px;'>Name of Road</th>
					<th style='text-align:Center; padding-left:5px; padding-right:5px;'>Upazila</th>
					<th style='text-align:Center; padding-left:5px; padding-right:5px;'>Name of Contractor</th>
					<th style='text-align:Center; padding-left:5px; padding-right:5px;'>Driver Name</th>";

					if ($role_id == 21 or $role_id == 23)
					{
						echo "<th style='text-align:Center; padding-left:5px; padding-right:5px;'>Action</th>";
					} 
					
            echo "</tr>
                </thead>";
				echo "<tbody style='height:400px; overflow-y:scroll'>";
				
				$i=0;
					while($row = mysqli_fetch_array($rec))
					{
						$i++;
						$district_id 	 		 = $row['district_id'];
						$allotment_no 	     	 = $row['allotment_no'];
						$allotment_date 	     = $row['allotment_date'];
						$allotment_from_date 	 = $row['requisition_from_date'];
						$allotment_to_date 		 = $row['requisition_to_date'];
						$equipment_type 	     = $row['equipment_type'];
						$equipment_id 	         = $row['equipment_id'];
						$road_name 	             = $row['road_name'];
						$upazila_id 	         = $row['upazila_id'];
						$contractor_name 	     = $row['contractor_name'];
						$driver_name 	         = $row['driver_name'];
						$requisition_id 	     = $row['requisition_id'];
					
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
					
					echo "<tr style='color:black;'>
                    <td style='text-align:Left; padding-left:5px; padding-right:5px;'> $i</td>
					<td style='text-align:Left; padding-left:5px; padding-right:5px;'> $district</td>
					<td style='text-align:Left; padding-left:5px; padding-right:5px;'> $allotment_no</td>
					<td style='text-align:Left; padding-left:5px; padding-right:5px;'> $allotment_date</td>
					<td style='text-align:Left; padding-left:5px; padding-right:5px;'> $allotment_from_date</td>
					<td style='text-align:Left; padding-left:5px; padding-right:5px;'> $allotment_to_date</td>
					<td style='text-align:Left; padding-left:5px; padding-right:5px;'> $equipment_type</td>
					<td style='text-align:Left; padding-left:5px; padding-right:5px;'> $equipment_id</td>
					<td style='text-align:Left; padding-left:5px; padding-right:5px;'> $road_name</td>
					<td style='text-align:Left; padding-left:5px; padding-right:5px;'> $upazila</td>
					<td style='text-align:Left; padding-left:5px; padding-right:5px;'> $contractor_name</td>
					<td style='text-align:Left; padding-left:5px; padding-right:5px;'> $driver_name</td>
                    <td style='text-align:Left; padding-left:5px; padding-right:5px;'>";
						
						if ($role_id == 21 or $role_id == 23)
						{
							// echo "<a href='restore_equipment.php? equipment_id=$equipment_id' class='button3'> Restore Equipment </a>";
							echo "<a href='restore_equipment.php? requisition_id=$requisition_id' class='button3'> Restore Equipment </a>";
						}
						 
				  echo "</td>
					</tr>";
				}

				echo "</tbody>";
				echo "</table>";
			  
			  ?>
            </div>
          </div>
        </div>
      </section>
    </section>
  </section>
  
  <?php  include('footer_resources.php');  ?>
  
 </body>
</html>
