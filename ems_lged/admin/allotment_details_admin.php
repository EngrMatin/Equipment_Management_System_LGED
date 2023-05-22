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
		  	font-size: 13px;
		  	margin: 10px 0px;
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
	
			<?php
	            //session_start();

				$user_division_id   = $_SESSION['user_division_id']; 
				$user_district_id   = $_SESSION['user_district_id']; 
				$user_upazila_id    = $_SESSION['user_upazila_id']; 
				$user_email         = $_SESSION['user_email']; 
				$user_mobile_no     = $_SESSION['user_mobile_no']; 
				$role_id            = $_SESSION['role_id']; 
			  
			  	
                if(isset($_GET['requisition_id']))
				{
					$requisition_id = $_GET['requisition_id'];
					$sql = "SELECT * 
                        FROM requisition_info as ri, equipment_info as ei, driver_info as di 
                        WHERE di.equipment_id=ei.equipment_id and ei.equip_id=ri.equipment_id and ri.requisition_id='$requisition_id'";
					$result = $conn->query($sql);
				}

				$i=0;
				while($row = mysqli_fetch_array($result))
				{
					$i++;
					$district_id 	     	 	= $row['district_id'];
					$upazila_id 	     	 	= $row['upazila_id'];
					$road_name 	     	 	    = $row['road_name'];
					$chainage 	     	 	    = $row['chainage'];
					$layer 	     	 	        = $row['layer'];
					$allotment_no 	     	 	= $row['allotment_no'];
					$allotment_date 	     	= $row['allotment_date'];
					$allotment_from_date 	 	= $row['requisition_from_date'];
					$allotment_to_date 		 	= $row['requisition_to_date'];
					$request_date 		 	    = $row['request_date'];
					$equipment_type 	     	= $row['equipment_type'];
					$equipment_id 	         	= $row['equipment_id'];
					$equipment_brand 	     	= $row['equipment_brand'];
					$equipment_model 	     	= $row['equipment_model'];
					$equipment_weight 	     	= $row['equipment_weight'];
					$hire_charge 	     	    = $row['hire_charge'];
					$contractor_name 	     	= $row['contractor_name'];
					$contractor_address 	    = $row['contractor_address'];
					$driver_name 	         	= $row['driver_name'];
					$driver_mobile_no 	     	= $row['driver_mobile_no'];
					$equipment_return_status 	= $row['equipment_return_status'];
					// $requisition_id 	     	= $row['requisition_id'];
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

				//$allotment_date1 = $allotment_date.ToShortDateString();
				//$allotment_date1 = $allotment_date.ToString("dd/MM/yyyy");
				$allotment_date1 = date_create($allotment_date);
				$allotment_date2 = date_format($allotment_date1,"d-m-Y");

				$request_date1 = date_create($request_date);
				$request_date2 = date_format($request_date1,"d-m-Y");

				$allotment_from_date1 = date_create($allotment_from_date);
				$allotment_from_date2 = date_format($allotment_from_date1,"d-m-Y");

				$allotment_to_date1 = date_create($allotment_to_date);
				$allotment_to_date2 = date_format($allotment_to_date1,"d-m-Y");

				$date1 = date_create($allotment_from_date);
                $date2 = date_create($allotment_to_date);
                $interval = date_diff($date1, $date2);
                $no_of_days = $interval->format('%R%a') + 1;                
            ?>

		<section id="main-content">
		  <section class="wrapper">
			<div>
				<div class="div1" align="center" margin="10px">Allotment Details</div>
				<div class="div2" align="right"> 
					<?php 
						if ($role_id == 21 and $equipment_return_status !=2 )
						{
							echo "<a href='restore_equipment.php? requisition_id=$requisition_id' class='button3'> Restore Equipment </a>";
						}   
					?>
				</div>
			</div>

	    	          
        <div class="row">
          <div class="col-md-12">
            <div class="content-panel">
	<?php
		echo "<div style='text-align:right; margin-right:20px;'><button class='button1' onclick=\"print('report_content')\">Print</button></div>";
		echo "<div id='report_content' style='margin:10px 20px; max-width:100%; color:black;'>";
	?>

	
            <table border="0" cellpadding="0" cellspacing="0" style='width:100%; '>
	          <tr>
		        <td rowspan="2" style="width:25%;"> 
		           <img src="img/50-years-of-bangladesh-logo.png" style="margin-left:10%; width:55%" alt="Golden-jubilee_of_Bangladesh_logo"> 
		        </td>
		        <td rowspan="2" style="width:50%; text-align: center; font-size:16px; font-weight:bold;">
			      <p>Government of the People's Republic of Bangladesh<br>
				     Local Government Engineering Department<br>  
					   Office of the Executive Engineer <br>
						 District: <?php echo $district; ?> <br>
						   <u>www.lged.gov.bd </u><p>

		        </td>
		        <td style="width:25%;">
		           <img src="img/100-years-of-Mujib-logo.png" style="float:right; margin-right:10%; width:50%" alt="100-years-of-Mujib-logo"> 
		        </td>
	          </tr>
	          <tr>
		        <td >
		           <img src="img/slogan.jpg" style="float:right; margin-right:10%; width:50%" alt="Honorable Prime Minister's Slogan"> 
		        </td>
	          </tr>
            </table>

            <table border="0" cellpadding="0" cellspacing="0" style='margin:10px 0px; width:100%; '>
	          <tr>
		        <td style="width:10%;">Memo No:</td>
		        <td style="width:73%;">46.02.1900.000.26.500.20-21</td>
		        <td style="width:4%;">Date:</td>
		        <td style="width:13%;"><?php echo $allotment_date2; ?> </td>
	          </tr>
            </table>
            <table border="0" cellpadding="0" cellspacing="0" style='margin:10px 0px; width:100%; '>
	          <tr>
		        <td style="width:6%;">To</td>
		        <td></td>
	          </tr>
	          <tr>
		        <td></td>
		        <td> <?php echo $contractor_name; ?> <br> <?php echo $contractor_address; ?> <br></td>
	          </tr>
            </table>
            <table border="0" cellpadding="0" cellspacing="0" style='margin:10px 0px; width:100%; '>
	          <tr>
		        <td style="width:6%; font-weight:bold">Subject</td>
		        <td style="width:1%; font-weight:bold;">:</td>
		        <td><b>Allotment of <?php echo $equipment_type; ?></b></td>
	          </tr>
	          <tr>
				<td style="width:6%;">Ref.</td>
				<td style="width:1%; font-weight:bold;">:</td>
				<td >Your request for requisition dated on <?php echo $request_date2; ?> </td>
			  </tr>
			</table>
			<table border="0" cellpadding="0" cellspacing="0" style='margin:10px 0px; width:100%; '>
			  <tr>
				<?php echo '<td style="text-indent:60px;">With reference to the above subject and reference, it is hereby informed you that a <b>'.$equipment_type.'</b>, with an equipment ID number <b>'.$equipment_id.'</b> is allotted to you for <b>'.$no_of_days.' days</b> from <b>'.$allotment_from_date2.'</b> to <b>'.$allotment_to_date2.'</b> for the compaction work of the '.$layer.' layer of <b>'.$road_name.'</b> at chainage '.$chainage.' under '.$upazila.' upazila upon the following condition<b>:</b> </td>'; ?>
			  </tr>
			</table>
			<table border="0" cellpadding="0" cellspacing="0" style='margin:10px 0px; width:100%; '>
			  <tr>
				<td><b>Conditions:</b></td>
				<td></td>
			  </tr>
			</table>
			<table border="0" cellpadding="0" cellspacing="0" style='margin:10px 0px; width:100%; '>
			  <tr>
				<td style="width:4%;">01.</td>
				<td style="width:2%;"></td>
				<td>All kinds of fuel costs and carrying cost including carrying to road site and return to office have to be paid by you.</td>
			  </tr>
			  <tr>
				<td>02.</td>
				<td></td>
				<td>The equipment cannot be used beyond the allotted period without prior approval of the undersigned. Otherwise, double hire charge will be applicable for the unapproved period.</td>
			  </tr>
			  <tr>
				<td>03.</td>
				<td></td>
				<td>You must receive the equipment at running condition and return it at running condition as well.</td>
			  </tr>
			  <tr>
				<td>04.</td>
				<td></td>
				<td>You will be liable for any kind of damage of the equipment within this period.</td>
			  </tr>
			  <tr>
				<td>05.</td>
				<td></td>
				<td>You have to pay the pretty repair cost (if any) upto 10,000.00 BDT. </td>
			  </tr>
			  <tr>
				<td>06.</td>
				<td></td>
				<td>The minimum hire charge of the equipment is <?php echo $hire_charge; ?> BDT per day. </td>
			  </tr>
			  <tr>
				<td>07.</td>
				<td></td>
				<td>The payable hire charge will be derived from the maximum amount between the daily based hire charge and the work done quantity based hire charge.</td>
			  </tr>
			  <tr>
				<td>08.</td>
				<td></td>
				<td>You have not to pay the payable hire charge directly. Rather, it will be deducted from your bill of development/maintenance work.</td>
			  </tr>
			</table>
			<table border="0" cellpadding="0" cellspacing="0" style='margin:35px 0px 10px 0px; width:100%; '>
			  <tr>
				<td style="width:70%;"></td>
				<td style="width:250px; text-align:center;">(Signed digitally)<br><br><b>Executive Engineer</b><br>LGED, <?php echo $district; ?><br>Phone: <?php echo $user_mobile_no; ?> <br>Email: <?php echo $user_email; ?> </td>
				<td></td>
			  </tr>
			</table>
			<table border="0" cellpadding="0" cellspacing="0" style='margin:10px 0px; width:100%; '>
			  <tr>
				<td><b>Copy:</b></td>
				<td></td>
			  </tr>
			</table>
			<table border="0" cellpadding="0" cellspacing="0" style='margin:10px 0px; width:100%; '>
			  <tr>
				<td style="width:4%;">01.</td>
				<td style="width:2%;"></td>
				<td>Senior Assistant Engineer/Assistant Engineer/Assistant Engineer(Mech), LGED, <?php echo $district; ?>.</td>
			  </tr>
			  <tr>
				<td>02.</td>
				<td></td>
				<td>Upazila Engineer, LGED, <?php echo $upazila.', '.$district; ?>.</td>
			  </tr>
			  <tr>
				<td>03.</td>
				<td></td>
				<td>Accountant, LGED, <?php echo $district; ?>.</td>
			  </tr>
			  <tr>
				<td>04.</td>
				<td></td>
				<td>Mechanical Foreman, LGED, <?php echo $district; ?>.</td>
			  </tr>
			  <tr>
				<td>05.</td>
				<td></td>
				<td>Mr. <?php echo $driver_name; ?>, Driver/Operator, LGED, <?php echo $district; ?>. Mobile No: <?php echo $driver_mobile_no; ?>.</td>
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
