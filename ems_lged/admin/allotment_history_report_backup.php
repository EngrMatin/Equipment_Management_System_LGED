<!DOCTYPE html>
<html lang="en">

    <?php  
		include('connection.php');
		include('function.php');
		
		$equipment_id_list2 = equipment_id_list2(); 
    ?>

<head>
    <?php  
	     include('header_resources.php');   
	?>
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
				width: 80%;
				height: 40px;
				margin: 15px;
				font-size: 24px;
				font-weight: bold;
				color: #3d5170;
				display: inline-block;
				
			}
			.button1 
			{
				background-color: #4CAF50;
				/* Green */
				border: none;
				color: black;
				padding: 8px 20px;
				text-align: center;
				text-decoration: none;
				display: inline-block;
				font-size: 16px;
				margin: 4px 2px;
				border-radius: 8px;
			}
			.title_css 
			{
				color: blue;
				font-size: 16px;
			}
		</style>

		
		<section id="main-content">
			<section class="wrapper">

				<div>
					<div class="div1" align="center"> Allotment History and Revenue Reports </div>
				</div>
				<div class="row" >
					<div class="col-md-12" >
						<div class="content-panel" >
				<?php
					echo "<table border='0' cellspacing='1' align='center' >";
					echo "<form action='$_SERVER[SCRIPT_NAME]' method='post'>";
					// echo "<form action='allotment_history_report.php' method='post'>";
					

                    echo "<tr style='height:20px;'></tr>
					<tr bgcolor='#87CEFA'>
                    <td style='width:100px; font-weight:bold; color:black; padding:20px;'> Report Start Date: </td>
					<td>";
				?>

					<div class="input-box">
					    <input type="date" name="report_start_date" class="form-control" required>
				    </div>
					
				<?php
					echo "</td>
					<td style='width:150px; font-weight:bold; color:black; padding:20px;'> Report End Date: </td>
					<td>";
				?>

					<div class="input-box">
					    <input type="date" name="report_end_date"  class="form-control" required>
				    </div>
					
				<?php
					
					echo "</td>
					<td style='width:150px; font-weight:bold; color:black; padding:20px;'>Equipment ID No: </td>
					<td>";
				?>
					
				    <div class="col-sm-2">
				      <select name="equipment_id" style="height:30px; width:180px;">
					    <option value="" disabled selected hidden>Select Equipment ID No.</option>
			    <?php
				 
						 foreach($equipment_id_list2 as $key => $value)
						 {
						   echo "<option value='$key'>$value</option>";
						 }
			   
			    ?>
					  </select>
				    </div>
				   
				<?php
					echo "</td>
					</tr>";

					echo "<tr style='height:20px;'></tr>
					<tr bgcolor='#87CEFA'>
                    <td style='width:100px; font-weight:bold; color:black; padding:20px;'> Road ID No: </td>
					<td>";
				?>

					<div class="input-box" style="height:30px; width:150px;">
					    <input type="text" name="road_id" class="form-control" >
				    </div>
					
				<?php
					echo "</td>
					<td style='width:100px; font-weight:bold; color:black; padding:20px;'> Contractor: </td>
					<td>";
				?>

					<div class="input-box" style="height:30px; width:180px;">
					    <input type="text" name="contractor_name"  class="form-control" >
				    </div>
					
				<?php
					
					echo "</td>
					</tr>
					<tr style='height:20px;'></tr>
					<tr bgcolor=''>
					<td><input style='margin:10px 10px;' class='button1' type='submit' name='generate_report' value='Generate Report'></td>
					
					</tr>
					<tr style='height:20px;'></tr>
			
				</form>";


				//session_start();

				$user_division_id   = $_SESSION['user_division_id']; 
				$user_district_id   = $_SESSION['user_district_id']; 
				$role_id            = $_SESSION['role_id'];


				if(isset($_POST['generate_report'])) 
				{
					$report_start_date   = $_POST['report_start_date'];
					$report_end_date     = $_POST['report_end_date'];
					$equipment_id        = $_POST['equipment_id'];
					$road_id             = $_POST['road_id'];
					$contractor_name     = $_POST['contractor_name'];

					if($role_id==3 or $role_id == 13)
					{
						$sql = "SELECT * FROM requisition_info as ri, equipment_info as ei where ei.equip_id=ri.equipment_id and ri.approval_status=1 and ri.requisition_to_date between '$report_start_date' and '$report_end_date' ";
					}
					else if($role_id==21 or $role_id==23)
					{
						$sql = "SELECT * FROM requisition_info as ri, equipment_info as ei where ei.equip_id=ri.equipment_id and ri.approval_status=1 and ri.division_id=$user_division_id and ri.district_id=$user_district_id and ri.requisition_to_date between '$report_start_date' and '$report_end_date' ";
					}
					
					if(!empty($equipment_id)) $sql .= "and ri.equipment_id='$equipment_id'";	
					if(!empty($road_id)) $sql .= "and ri.road_id='$road_id'";	
					if(!empty($contractor_name)) $sql .= "and ri.contractor_name='$contractor_name'";

					$record = $conn->query($sql);
					
					
					echo "<body>";
					echo "<div style='text-align:right;'><button class='button1' onclick=\"print('report_content')\">Print Report</button></div><br>";
					echo "<div id='report_content'>";
					echo "<table border='0' cellpadding='0' align='left' style='margin-left:110px; margin-bottom:20px;'>";
					echo "<tbody style='height:35px; '>";
					echo "<tr style='text-align:center; color:black; font-size:18px; font-weight:bold;'>
							<td style='padding-left:5px; padding-right:5px; background-color:#66cccc;'> Reporting Period: </td>
							<td style='padding-left:5px; padding-right:5px;'> FROM: </td>
							<td style='padding-left:5px; padding-right:5px;'> $report_start_date </td>
							<td style='padding-left:5px; padding-right:5px;'> TO: </td>
							<td style='padding-left:5px; padding-right:5px;'> $report_end_date </td>
							<td style='padding-left:5px; padding-right:5px;'>  </td>
							</tr>";
					echo "</tbody>";
					echo "</table> <br>";

					

					echo "<table border='1' cellpadding='0' align='center'>";
					echo "<thead>";
					echo "<tr style='background-color:#66cccc; height:30px; color:black; font-weight:bold;'>
						<th> Sl No </th>
						<th style='text-align:Center; padding-left:5px; padding-right:5px;'> District </th>
						<th style='text-align:Center; padding-left:5px; padding-right:5px;'> Equipment ID </th>
						<th style='text-align:Center; padding-left:5px; padding-right:5px;'> Road ID No. </th>
						<th style='text-align:Center; padding-left:5px; padding-right:5px;'> Contractor </th>
						<th style='text-align:Center; padding-left:5px; padding-right:5px; width:85px;'> Allotment From (date) </th>
						<th style='text-align:Center; padding-left:5px; padding-right:5px; width:85px;'> Allotment To (date) </th>
						<th style='text-align:Center; padding-left:5px; padding-right:5px; width:85px;'> Equipment Restore date </th>
						<th style='text-align:Center; padding-left:5px; padding-right:5px;'> Used Days </th>
						<th style='text-align:Center; padding-left:5px; padding-right:5px;'> Hire Charge </th>
						
					
                		</tr>
                		</thead>";
					echo "<tbody style='height:400px; overflow-y:scroll'>";
					
					$i=0;
					$grand_total_used_days = 0;
					$grand_total_hire_charge = 0;
					while($row = mysqli_fetch_array($record))
					{
						$i++;
						$division_id 	     	 	= $row['division_id'];
						$district_id 	     	    = $row['district_id'];
						$equipment_id 	         	= $row['equipment_id'];
						$hire_charge 	         	= $row['hire_charge'];
						$road_id 	         	    = $row['road_id'];
						$contractor_name 	        = $row['contractor_name'];
						$allotment_from_date 	 	= $row['requisition_from_date'];
						$allotment_to_date 		 	= $row['requisition_to_date'];
						$equipment_restore_date 	= $row['equipment_restore_date'];
						
					
  
						$date1 = date_create($allotment_from_date);
						$date2 = date_create($equipment_restore_date);
						if($equipment_restore_date == NULL)
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
						
						
						
						$hire_charge = $equipment_used_days * $hire_charge;


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

						$sql4 = "select * from equipment_info where equip_id='$equipment_id' ";
						$rec4 = $conn->query($sql4);
						$k=0;
						while($row4 = mysqli_fetch_array($rec4))
						{
							$k++;
							$equipment_id 	 			 = $row4['equipment_id'];
						}

						echo "<tr style='height:30px; text-align:center; color:black; '>
							<td style='padding-left:5px; padding-right:5px; '> $i </td>
							<td style='padding-left:5px; padding-right:5px; '> $district</td>
							<td style='padding-left:5px; padding-right:5px; '> $equipment_id</td>
							<td style='padding-left:5px; padding-right:5px; '> $road_id</td>
							<td style='padding-left:5px; padding-right:5px; '> $contractor_name</td>
							<td style='padding-left:5px; padding-right:5px; '> $allotment_from_date</td>
							<td style='padding-left:5px; padding-right:5px; '> $allotment_to_date</td>
							<td style='padding-left:5px; padding-right:5px; '> $equipment_restore_date</td>		
							<td style='padding-left:5px; padding-right:5px; '> $equipment_used_days</td>		
							<td style='padding-left:5px; padding-right:5px; '> $hire_charge</td>	
						
							</tr>";

							$grand_total_used_days += $equipment_used_days;
							$grand_total_hire_charge += $hire_charge;
					}

					echo "<tr style='height:40px; text-align:center; color:red; '>
					<td > </td>
					<td > </td>
					<td colspan=6 style='font-size: 14px; font-weight:bold; '> Total </td>
					<td style='font-size: 14px; font-weight:bold; '> $grand_total_used_days </td>		
					<td style='font-size: 14px; font-weight:bold; '> $grand_total_hire_charge </td>	
				
					</tr>";

						echo "</tbody>";
						echo "</table>";
						echo "</div>";
				    
				}
					echo "</body>";
				
			?>
						</div>
					</div>
				</div>
			</section>
		</section>


		<!--footer end-->
	</section>

	<?php include('footer_resources.php');  ?>

</body>

</html>