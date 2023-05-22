<!DOCTYPE html>
 <html lang="en">
  <?php 
	 include('connection.php');
	 include('function.php');
	 include_once("db.php");
	 include_once("response.php");
	
	 $category_list = category_list();
  ?>

  <head>
       <?php  include('header_resources.php');  ?>

	   <!-- jquery cdn DivisionDistrictUpazila Dropdown -->
	   <script src="jquery-3.6.0.min.js"></script>
      
	  <script>
	  $(document).ready(function() 
	  {
		  $("#division").on('change', function() 
		  {
			  var divisionid = $(this).val();

			  $.ajax({
				  method: "POST",
				  url: "response.php",
				  data: 
				  {
					  id: divisionid
				  },
				  datatype: "html",
				  success: function(data) 
				  {
					  $("#district").html(data);
					  $("#upazila").html('<option value="">Select Upazila</option');
				  }
			  });
		  });

		  $("#district").on('change', function() 
		  {
			  var districtid = $(this).val();
			  $.ajax({
				  method: "POST",
				  url: "response.php",
				  data: 
				  {
					  uid: districtid
				  },
				  datatype: "html",
				  success: function(data) 
				  {
					  $("#upazila").html(data);
				  }
			  });
		  });
	  });
    </script>
  </head>

  <body>
   <section id="container">
  
  	<?php  
		include('header.php'); 
		include('nav.php'); 	
	?>
   
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

	<style>
		.div1
		{
			width:80%;
			height:40px;
			margin:10px;
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
		  <!--<div class="div1" align="center">Current Status of Equipments</div>
			 <div class="div2" align="right"> 	
			</div> -->
		</div>
	    	          
        <div class="row">
          <div class="col-md-12">
            <div class="content-panel"> 
	  
	<?php   
		if ($role_id==3 or $role_id==13)
		{
	?>    
	     <div style='width:83%; display:inline-block; margin-left:20px'>
		  <table border='0' cellspacing='1' align='left' >
		   <form action='allotment_status.php' method='post'> 

			
			<tr bgcolor='#87CEFA'>
			  <td style='width:80px; font-weight:bold; color:black; padding:10px;'> Division: </td>
			  <td>
				<select class="col-sm-2" id="division" name="division_id" style="height:30px; width:190px;">
					<option value=""> Select Division</option>
						<?php
							$query = "select * from divisions";
							$result = $con->query($query);
							if ($result->num_rows > 0) 
							{
								while ($row = mysqli_fetch_assoc($result)) 
								{
						?>
									<option value="<?php echo $row['division_id']; ?>"><?php echo $row['division_name']; ?></option>
						<?php
								}
							}
						?>
				</select>
			  </td>
			  <td style='width:80px; font-weight:bold; color:black; padding:20px;'> District: </td>
			  <td> 
				 <select class="col-sm-2" name="district_id" id="district" style="height:30px; width:180px; margin-right:10px;">
					<option value="">Select District</option>
				 </select> 
			  </td>
			  <td><input style='margin:10px 10px;' class='button1' type='submit' name='filter' value='Filter'></td>
			</tr>

		   </form>
		  </table>
		</div>
	<?php
		}
	?>  


			  <?php

				//session_start();
				$user_district_id   = $_SESSION['user_district_id']; 
				$role_id            = $_SESSION['role_id'];

				if(isset($_POST['filter']))
				{
					$division_id 	          = $_POST['division_id'];
        			$district_id 	          = $_POST['district_id'];
				}

				if ($role_id==3 or $role_id == 13)
				{
					$sql = "SELECT ei.equip_id, ei.division_id, ei.district_id, ei.equipment_id, ei.physical_status, ei.allotment_status, ei.location, di.driver_id, di.driver_name, ri.requisition_id, ri.upazila_id, ri.road_name, ri.requisition_from_date, ri.requisition_to_date, ri.contractor_name
                    FROM equipment_info AS ei
                    INNER JOIN driver_info AS di
                    ON ei.equipment_id = di.equipment_id
					AND ei.physical_status='Running'
                    LEFT OUTER JOIN requisition_info AS ri
                    ON ei.equip_id = ri.equipment_id
                    AND ei.allotment_status=2
					AND ri.approval_status=1
					AND ri.equipment_restore_status=0 ";

					if(!empty($district_id)) $sql .= "HAVING ei.district_id='$district_id'";
				}
				else if ($role_id==21 or $role_id==23)
				{
					$sql = "SELECT ei.equip_id, ei.division_id, ei.district_id, ei.equipment_id, ei.physical_status, ei.allotment_status, ei.location, di.driver_id, di.driver_name, ri.requisition_id, ri.upazila_id, ri.road_name, ri.requisition_from_date, ri.requisition_to_date, ri.contractor_name
                    FROM equipment_info AS ei
                    INNER JOIN driver_info AS di             -- RIGHT OUTER JOIN also gives the same output
                    ON ei.equipment_id = di.equipment_id
					AND ei.physical_status='Running'
                    LEFT OUTER JOIN requisition_info AS ri
                    ON ei.equip_id = ri.equipment_id
                    AND ei.allotment_status=2
					AND ri.approval_status=1
					AND ri.equipment_restore_status=0
                    HAVING ei.district_id='$user_district_id' ";
				}

				// echo $sql; exit('OK');
				$rec = $conn->query($sql);
			  

			  	$category = array();
				$sql2 = "select * from equipment_category";
				$result2 = $conn->query($sql2);
				while($row2 = mysqli_fetch_array($result2))
				{
					$category[$row2['category_id']] = $row2['equipment_type'];
				}
				
				echo "<div style='width:13%; display:inline-block; text-align:right;'><button class='button1' onclick=\"print('report_content')\">Print Report</button></div>";
				echo "<div id='report_content'>";
				echo "<div style='text-align:Center; text-decoration:underline; font-size:25px; font-weight:bold; color:blue;'>Allotment Status of Equipments</div><br>";
				echo "<table border='1' cellpadding='0' align='center'>";
				echo "<thead>";
                echo "<tr style='background-color:#66cccc; height:30px; text-align:center; color:black; font-weght:bold;'>
						<th> Sl No </th>";

						if ($role_id==3 or $role_id == 13)
						{
							echo" <th style='text-align:Center; padding-left:5px; padding-right:5px;'> Division </th>
							      <th style='text-align:Center; padding-left:5px; padding-right:5px;'> District </th>";
						}

				    echo "
						<th style='text-align:Center; padding-left:5px; padding-right:5px;'> Equipment ID Number </th>
						<th style='text-align:Center; padding-left:5px; padding-right:5px; width:130px;'> Driver </th>
						<th style='text-align:Center; padding-left:5px; padding-right:5px; width:80px;'> Allotment Status </th>
						<th style='text-align:Center; padding-left:5px; padding-right:5px; width:85px;'> Allotment From (date) </th>
						<th style='text-align:Center; padding-left:5px; padding-right:5px; width:85px;'> Allotment To (date) </th>
						<th style='text-align:Center; padding-left:5px; padding-right:5px; width:110px;'> Location </th>
						<th style='text-align:Center; padding-left:5px; padding-right:5px;'> Road Name </th>
						<th style='text-align:Center; padding-left:5px; padding-right:5px; width:140px;'> Contractor </th>
						
                  	  </tr>
                	</thead>";
				echo "<tbody style='height:400px; overflow-y:scroll'>";
				
				$i=0;
				while($row = mysqli_fetch_array($rec))
				{
					$i++;
					$division_id 	        = $row['division_id'];
					$district_id 	        = $row['district_id'];
					$equipment_id 	     	= $row['equipment_id'];
					$driver_name 	     	= $row['driver_name'];
					$allotment_status 	    = $row['allotment_status'];
					$allotment_from_date 	= $row['requisition_from_date'];
					$allotment_to_date 	    = $row['requisition_to_date'];
					$upazila_id 	        = $row['upazila_id'];
					$location 	            = $row['location'];
					$road_name 	            = $row['road_name'];
					$contractor_name 	    = $row['contractor_name'];
					$equip_id 	            = $row['equip_id'];
					$requisition_id 	    = $row['requisition_id'];
					
					
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


					echo "<tr>
							<td style='text-align:center; color:black;'> $i </td>";

							if ($role_id==3 or $role_id == 13)
							{
								echo "<td style='text-align:Left; padding-left:5px; padding-right:5px; color:black;'> $division </td>
								      <td style='text-align:Left; padding-left:5px; padding-right:5px; color:black;'> $district </td>";
							}
							
						echo "
							<td style='text-align:Left; padding-left:5px; padding-right:5px; color:black;'> $equipment_id </td>
							<td style='text-align:Left; padding-left:5px; padding-right:5px; color:black;'> $driver_name </td>
							<td style='text-align:Left; padding-left:5px; padding-right:5px; color:black;'>"; 
                            
                            if($allotment_status==1)
                            {
                                echo "<span style='color:blue; font-weight:bold;'>Unallotted</span>";
                            }
                            else if($allotment_status==2)
                            {
                                echo "<span style='color:red; font-weight:bold;'>Allotted</span>";
                            } 
                            
                        echo "</td>
							<td style='text-align:Left; padding-left:5px; padding-right:5px; color:black;'> $allotment_from_date </td>
							<td style='text-align:Left; padding-left:5px; padding-right:5px; color:black;'> $allotment_to_date </td>
							<td style='text-align:Left; padding-left:5px; padding-right:5px; color:black;'> $location </td>
							<td style='text-align:Left; padding-left:5px; padding-right:5px; color:black;'> $road_name </td>
							<td style='text-align:Left; padding-left:5px; padding-right:5px; color:black;'> $contractor_name </td>
							
					      </tr>";
				 }
				
				echo "</tbody>";
				echo "</table>";
			  
			  ?>
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
