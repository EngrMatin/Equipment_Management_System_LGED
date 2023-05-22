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
			height:55px;
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
		  <div class="div1" align="center" >Equipment Status Reports</div>
			<!-- <div class="div2" align="right"> 
				<a href="equipment_info.php" class="button1">Add New Equipment</a>
			</div> -->
		</div>

	    	          
        <div class="row">
          <div class="col-md-12">
            <div class="content-panel"> 

            <table border='0' cellspacing='1' align='center' >
				   <form action='equipment_status_report.php' method='post'> 

					<tr style='height:20px;'></tr>
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
					</tr>

                    <tr style='height:20px;'></tr>
					<tr bgcolor='#87CEFA'>
                      <td style='width:80px; font-weight:bold; color:black; padding:10px;'> Physical Status: </td>
					  <td>
					     <div class="input-box">
					        <select name="physical_status" style="height:30px; width:190px;">
                                <option value="" selected>Select an option</option>
                                <option value="Running">Running</option>
                                <option value="Under_repair">Under repair</option>
                                <option value="Repairable">Repairable</option>
                                <option value="Damaged">Damaged</option>
                            </select>
				         </div>
				      </td>
					  <td style='width:150px; font-weight:bold; color:black; padding:20px;'> Allotment Status: </td>
					  <td>
					     <div class="input-box" style='margin-right:10px;'>
                            <select name="allotment_status" style="height:30px; width:180px;">
                                <option value="" selected>Select an option</option>
                                <option value="1">Unallotted</option>
                                <option value="2">Allotted</option>
                            </select>
				         </div>
				      </td>
					</tr>
	
					<tr style='height:20px;'></tr>
					<tr bgcolor='#87CEFA'>
					  <td style='font-weight:bold; color:black; padding:10px;'>Equipment Type: </td>
					  <td>
				         <div class="col-sm-2">
				           <select name="equipment_id" style="height:30px; ">
					         <option value="" disabled selected hidden>Select Equipment ID No.</option>
			                   <?php
				 
									foreach($equipment_id_list2 as $key => $value)
									{
									     echo "<option value='$key'>$value</option>";
									}
			   
			    			   ?>
					       </select>
				         </div>
				      </td>
                      <td style='width:100px; font-weight:bold; color:black; padding:20px;'> Brand: </td>
					  <td>
					     <div class="input-box" style="height:30px; width:150px;">
					       <input type="text" name="road_id" class="form-control" >
				         </div>
				      </td>
					  
					  
					</tr>
					<tr style='height:20px;'></tr>
					<tr bgcolor=''>
					  <td><input style='margin:10px 10px;' class='button1' type='submit' name='generate_report' value='Generate Report'></td>
					  <td><input style='margin:10px 10px;' class='button1' type='reset' name='reset' value='Reset'></td>
					</tr>
			
				   </form>
			      </table>
              
			  <?php
				    if(isset($_GET['equip_id']))
					{
						$equip_id = $_GET['equip_id'];
						$sql = "delete from equipment_info where equip_id = '$equip_id'";
						$result = $conn->query($sql);
						
						if($result)
						{
							echo "Successfully Deleted";
						}
					}
			  ?>
			 
			  	  
			  <?php

				//session_start();

				$user_district_id = $_SESSION['user_district_id']; 
				$role_id          = $_SESSION['role_id']; 

                if(isset($_POST['generate_report'])) 
				{
					$division_id 	     = $_POST['division_id'];
        			$district_id 	     = $_POST['district_id'];
        			$physical_status 	 = $_POST['physical_status'];
        			$allotment_status 	 = $_POST['allotment_status'];
                }

				if ($role_id==3 or $role_id==13)
				{
					$sql = "select * from equipment_info as ei where ei.equipment_id IS NOT NULL ";
				}
				else if ($role_id==21 or $role_id==23 or $role_id==31)
				{
					$sql = "select * from equipment_info as ei where ei.district_id='$user_district_id' ";
				}

                if(!empty($district_id)) $sql .= "AND ei.district_id='$district_id' ";
                if(!empty($physical_status)) $sql .= "AND ei.physical_status='$physical_status' ";
                if(!empty($allotment_status)) $sql .= "AND ei.allotment_status='$allotment_status' ";

                //echo "$sql"; exit("OK");
				$rec = $conn->query($sql);

			  	$category = array();
				$sql5 = "select * from equipment_category";
				$result5 = $conn->query($sql5);
				while($row5 = mysqli_fetch_array($result5))
				{
					$category[$row5['category_id']] = $row5['equipment_type'];
				}
				
				echo "<div style='text-align:right;'><button class='button1' onclick=\"print('report_content')\">Print Report</button></div>";
				echo "<div id='report_content'>";
				echo "<div style='text-align:Center; text-decoration:underline; font-size:25px; font-weight:bold; color:blue;'>Equipment Status Reports</div><br>";
				echo "<table border='1' cellpadding='0' align='center'>";
				echo "<thead>";
                echo "<tr style='background-color:#66cccc; color:black; '>
						<th style='text-align:Center; padding-left:5px; padding-right:5px; height:40px;'> Sl No </th>";

						if ($role_id==3 or $role_id==13)
						{
							echo" <th style='text-align:Center; padding-left:5px; padding-right:5px;'> Division </th>
							      <th style='text-align:Center; padding-left:5px; padding-right:5px;'> District </th>";
						}

				    echo "
						<th style='text-align:Center; padding-left:5px; padding-right:5px;'> Equipment Type </th>
						<th style='text-align:Center; padding-left:5px; padding-right:5px;'> Equipment ID Number </th>
						<th style='text-align:Center; padding-left:5px; padding-right:5px;'> Brand </th>
						<th style='text-align:Center; padding-left:5px; padding-right:5px;'> Model </th>
						<th style='text-align:Center; padding-left:5px; padding-right:5px; width:90px;'> Physical Status </th>
						<th style='text-align:Center; padding-left:5px; padding-right:5px; width:75px;'> Allotment Status </th>
						<th style='text-align:Center; padding-left:5px; padding-right:5px; width:85px;'> Allotment To (date) </th>
						<th style='text-align:Center; padding-left:5px; padding-right:5px;'> Location </th>
						<th style='text-align:Center; padding-left:5px; padding-right:5px;'> Action </th>";
						
						
                echo "</tr>
                	</thead>";
				echo "<tbody style='height:400px; overflow-y:scroll'>";
				
				$i=0;
				while($row = mysqli_fetch_array($rec))
				{
					$i++;
					$division_id 	         	= $row['division_id'];
					$district_id 	         	= $row['district_id'];
					$category_id 	     		= $row['category_id'];
					$equipment_id 	     		= $row['equipment_id'];
					$equipment_brand 	    	= $row['equipment_brand'];
					$equipment_model 	    	= $row['equipment_model'];
					$equipment_weight 	    	= $row['equipment_weight'];
					$year_of_manufacture 		= $row['year_of_manufacture'];
					$source 	         		= $row['source'];
					$physical_status 	    	= $row['physical_status'];
					$allotment_status 	    	= $row['allotment_status'];
					$allotment_to_date 	    	= $row['allotment_to_date'];
					$location 	    	        = $row['location'];
					$equip_id 	            	= $row['equip_id'];
					

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

					

					echo "<tr style='color:black;'>
							<td style='text-align:center;'> $i </td>";

							if ($role_id==3 or $role_id==13)
							{
								echo "<td style='text-align:Left; padding-left:5px; padding-right:5px;'> $division </td>
								      <td style='text-align:Left; padding-left:5px; padding-right:5px;'> $district </td>";
							}
							
						echo "
							<td style='text-align:Left; padding-left:5px; padding-right:5px;'> $category[$category_id] </td>
							<td style='text-align:Left; padding-left:5px; padding-right:5px;'> $equipment_id </td>
							<td style='text-align:Left; padding-left:5px; padding-right:5px;'> $equipment_brand </td>
							<td style='text-align:Left; padding-left:5px; padding-right:5px;'> $equipment_model </td>
							<td style='text-align:Left; padding-left:5px; padding-right:5px;'> $physical_status </td>
							<td style='text-align:Left; padding-left:5px; padding-right:5px;'>"; 
                            
                            if($allotment_status==1)
                            {
                                echo "<span style='color:blue; font-weight:bold;'>Unallotted</span>";
                            }
                            else if($allotment_status==2)
                            {
                                echo "<span style='color:red; font-weight:bold;'>Allotted</span>";
                            } 
                            
                        echo "</td>
							<td style='text-align:Left; padding-left:5px; padding-right:5px;'> $allotment_to_date </td>
							<td style='text-align:Left; padding-left:5px; padding-right:5px;'> $location </td>
							<td>";
							
								echo "<a href='equipment_view_report.php? equip_id=$equip_id' class='button4'>View</a>";
							
							if($role_id==21 or $role_id==23)
							{
								echo " | <a href='equipment_info_edit.php? equip_id=$equip_id' class='button2'>Edit</a> |
						             <a href='$_SERVER[SCRIPT_NAME]? equip_id=$equip_id' class='button3' onClick=\"return confirm('Are you sure to delete?')\">Delete </a>";
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
