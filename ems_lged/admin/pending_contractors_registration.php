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
			<div class="div1" align="center">Contractors Waiting for Registration</div>
			<div class="div2" align="right"> 
				<!-- <a href="requisition_info.php" class="button1">Submit Requisition</a> -->
			</div>
		</div>

	    	          
        <div class="row">
          <div class="col-md-12">
            <div class="content-panel">
              
					  
			  <?php

			  	//session_start();

				$user_division_id  = $_SESSION['user_division_id']; 
				$user_district_id  = $_SESSION['user_district_id']; 
				$user_upazila_id   = $_SESSION['user_upazila_id']; 
				$role_id           = $_SESSION['role_id']; 
			  
				if ($role_id == 3 or $role_id==13)
				{
					$sql = "select * from temp_con_info";
				}
				else if($role_id == 21 or $role_id == 23)
				{
					$sql = "select * from temp_con_info as tci where tci.district_id='$user_district_id'";
				}
			  	
			  	
				$rec = $conn->query($sql);
				
				echo "<table border='1' cellpadding='0' align='center'>";
				echo "<thead>";
                echo "<tr style='background-color:#66cccc; height:30px; color:black;'>
                    <th style='padding-left:5px; padding-right:5px;'> Sl No </th>";

					if ($role_id == 3 or $role_id==13)
					{
						echo "<th style='text-align:Center; padding-left:5px; padding-right:5px;'>Division</th>
						    <th style='text-align:Center; padding-left:5px; padding-right:5px;'>District</th>";
					}
					
                    echo "<th style='text-align:Center; padding-left:5px; padding-right:5px;'>Name of Contractor</th>
					<th style='text-align:Center; padding-left:5px; padding-right:5px;'>Address</th>
					<th style='text-align:Center; padding-left:5px; padding-right:5px;'>Mobile</th>
					<th style='text-align:Center; padding-left:5px; padding-right:5px;'>Email</th>
					<th style='text-align:Center; padding-left:5px; padding-right:5px;'>Package No.</th>
                    <th style='text-align:Center; padding-left:5px; padding-right:5px;'>Road ID No.</th>
                    <th style='text-align:Center; padding-left:5px; padding-right:5px;'>Name of Road</th>
					<th style='text-align:Center; padding-left:5px; padding-right:5px;'>Upazila</th>";

					if ($role_id == 21 or $role_id == 23)
					{
						echo "<th style='text-align:Center; padding-left:5px; padding-right:5px;'>Action</th>";
					} 
					
            echo "</tr>
                </thead>";
				echo "<tbody style='height:400px; overflow:auto'>";
				
				$i=0;
				while($row = mysqli_fetch_array($rec))
				{
					$i++;
					$division_id 	 			 = $row['division_id'];
					$district_id 	 			 = $row['district_id'];
					$temp_con_name 	 			 = $row['temp_con_name'];
					$temp_con_address 	 		 = $row['temp_con_address'];
					$temp_con_mobile 	     	 = $row['temp_con_mobile'];
					$temp_con_email 	     	 = $row['temp_con_email'];
					$package_no 	     	     = $row['package_no'];
					$road_id 	     		     = $row['road_id'];
					$road_name 	             	 = $row['road_name'];
					$upazila_id 				 = $row['upazila_id'];
					$temp_con_id 				 = $row['temp_con_id'];
					
					

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


					echo "<tr style='color:black; '>
						<td style='text-align:Left; padding-left:5px; padding-right:5px;'> $i</td>";

						if ($role_id == 3 or $role_id==13)
						{
							echo "<td style='text-align:Left; padding-left:5px; padding-right:5px;'> $division</td>
							<td style='text-align:Left; padding-left:5px; padding-right:5px;'> $district</td>";
						}
						
						echo "<td style='text-align:Left; padding-left:5px; padding-right:5px;'> $temp_con_name</td>
						<td style='text-align:Left; padding-left:5px; padding-right:5px;'> $temp_con_address</td>
						<td style='text-align:Left; padding-left:5px; padding-right:5px;'> $temp_con_mobile</td>
						<td style='text-align:Left; padding-left:5px; padding-right:5px;'> $temp_con_email</td>
						<td style='text-align:Left; padding-left:5px; padding-right:5px;'> $package_no</td>
						<td style='text-align:Left; padding-left:5px; padding-right:5px;'> $road_id</td>
						<td style='text-align:Left; padding-left:5px; padding-right:5px;'> $road_name</td>
						<td style='text-align:Left; padding-left:5px; padding-right:5px;'> $upazila</td>
						<td>";
						
						if($role_id == 21 or $role_id == 23)
						{
						 	echo "<a href='contractors_registration_approval.php? temp_con_id=$temp_con_id' class='button3'> Approve </a>";
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
