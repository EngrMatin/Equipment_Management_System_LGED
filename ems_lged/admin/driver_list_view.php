<!DOCTYPE html>
<html lang="en">
   <?php 	include('connection.php');   ?>

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
			<div class="div1" align="center">Driver/Operator List</div>
			<div class="div2" align="right"> 
				<a href="driver_info.php" class="button1">Add New Driver</a>
			</div>
		</div>

	    	          
        <div class="row">
          <div class="col-md-12">
            <div class="content-panel"><span style="color:#00CC66"><?php   ?></span> 
              
				<?php
			
					if(isset($_GET['dri_id']))
					{
						$dri_id = $_GET['dri_id'];
						$sql = "delete from driver_info where dri_id = '$dri_id'";
						
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

				if ($role_id==3 or $role_id == 13)
				{
					$sql = "select * from driver_info";
				}
				else if ($role_id==21 or $role_id==23 or $role_id==31)
				{
					$sql = "select * from driver_info as di where di.district_id='$user_district_id'";
				}

				$rec = $conn->query($sql);
				
				echo "<table border='1' cellpadding='0' align='center'>";
				 echo "<thead>";
                  echo "<tr style='background-color:#66cccc; height:30px; text-align:center; color:black; font-weght:bold;'>
                         <th> Sl No </th>";

						 if ($role_id==3 or $role_id == 13)
						 {
							 echo" <th style='text-align:Center; padding-left:5px; padding-right:5px;'> Division </th>
								   <th style='text-align:Center; padding-left:5px; padding-right:5px;'> District </th>";
						 }

                   echo "<th style='text-align:Center; padding-left:5px; padding-right:5px;'>Driver ID Number</th>
                         <th style='text-align:Center; padding-left:5px; padding-right:5px;'>Name</th>
					     <th style='text-align:Center; padding-left:5px; padding-right:5px;'>Address</th>
					     <th style='text-align:Center; padding-left:5px; padding-right:5px;'>Mobile No</th>
					     <th style='text-align:Center; padding-left:5px; padding-right:5px;'>Equipment ID Number</th>
						 <th style='text-align:Center; padding-left:5px; padding-right:5px;'> Action </th>";
						
                echo "</tr>
                      </thead>";
				
				 echo "<tbody style='height:400px; overflow-y:scroll'>";
				
				$i=0;
				while($row = mysqli_fetch_array($rec))
				{
					$i++;
					$division_id 	        = $row['division_id'];
					$district_id 	        = $row['district_id'];
					$driver_id 	    		= $row['driver_id'];
					$driver_name 	        = $row['driver_name'];
					$driver_address 	    = $row['driver_address'];
					$driver_mobile_no       = $row['driver_mobile_no'];
					$driver_nid_no       	= $row['driver_nid_no'];
					$driver_dob       	    = $row['driver_dob'];
					$appointment_type       = $row['appointment_type'];
					$equipment_id 			= $row['equipment_id'];
					$dri_id 	    		= $row['dri_id'];
					
					
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


					echo 
					"<tr style='color:black;'>
						<td style='text-align:center'>$i</td>";

						if ($role_id==3 or $role_id == 13)
						{
							echo "<td style='text-align:Left; padding-left:5px; padding-right:5px;'> $division </td>
								  <td style='text-align:Left; padding-left:5px; padding-right:5px;'> $district </td>";
						}

					echo "<td style='text-align:Left; padding-left:5px; padding-right:5px;'>$driver_id</td>
						<td style='text-align:Left; padding-left:5px; padding-right:5px;'>$driver_name</td>
						<td style='text-align:Left; padding-left:5px; padding-right:5px;'>$driver_address</td>
						<td style='text-align:Left; padding-left:5px; padding-right:5px;'>$driver_mobile_no</td>
						<td style='text-align:Left; padding-left:5px; padding-right:5px;'>$equipment_id</td>
						<td> <a href='driver_view.php? dri_id=$dri_id' class='button4'>View</a>";

						if($role_id==21 or $role_id==23)
						{
							echo " | <a href='driver_info_edit.php? dri_id=$dri_id' class='button2'>Edit</a> |
							      <a href='$_SERVER[SCRIPT_NAME]? dri_id=$dri_id' class='button3' onClick=\"return confirm('Are you sure to delete?')\">Delete </a>";
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
