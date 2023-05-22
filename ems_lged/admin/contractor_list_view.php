<!DOCTYPE html>
 <html lang="en">

	<?php 
		include('connection.php');
		include_once("db.php");
	    include_once("response.php"); 
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
			<div class="div1" align="center">Contractor List</div>
			<div class="div2" align="right"> 
				 
			</div>
		  </div>

	    	          
        <div class="row">
          <div class="col-md-12">
            <div class="content-panel"> 

			<?php

				//session_start();

				$user_district_id = $_SESSION['user_district_id']; 
				$role_id          = $_SESSION['role_id'];

				if ($role_id==3 or $role_id==13)
				{
			?>
			      <table border='0' cellspacing='1' align='center' >
				   <form action='contractor_list_view.php' method='post'> 

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

					<tr bgcolor=''>
					  <td><input style='margin:10px 10px;' class='button1' type='submit' name='filter' value='Filter'></td>
					</tr>
			
				   </form>
			      </table>
			<?php
				}
            ?>  

				<?php
			
				    if(isset($_GET['contractor_id']))
					{
						$contractor_id = $_GET['contractor_id'];
						$sql = "update contractor_info set active_status=0 where contractor_id = '$contractor_id'";
						
						$result = $conn->query($sql);
						
						if($result)
						{
							echo "Successfully Deactivated";
						}
					}
				    
				?>
						  
			  <?php

				if(isset($_POST['filter'])) 
				{
					$division_id 	     = $_POST['division_id'];
        			$district_id 	     = $_POST['district_id'];
                }

				if ($role_id==3 or $role_id==13)
				{
					$sql = "select * from contractor_info as ci ";
					if(!empty($district_id)) $sql .= "where ci.district_id='$district_id' ";
				}
				else if ($role_id==21 or $role_id==23 or $role_id==31)
				{
					$sql = "select * from contractor_info as ci where ci.district_id='$user_district_id'";
				}


				$rec = $conn->query($sql);
				
				echo "<table border='1' cellpadding='0' align='center'>";
				echo "<thead>";
                echo "<tr style='background-color:#66cccc; height:30px; text-align:center; color:black; font-weght:bold;'>
                    <th> Sl No </th>
                    <th style='text-align:Center; padding-left:5px; padding-right:5px;'> Name </th>
                    <th style='text-align:Center; padding-left:5px; padding-right:5px;'> Address </th>
                    <th style='text-align:Center; padding-left:5px; padding-right:5px;'> Mobile </th>
					<th style='text-align:Center; padding-left:5px; padding-right:5px;'> E-mail </th>
					<th style='text-align:Center; padding-left:5px; padding-right:5px;'> Registered under </th>	";

					if($role_id==3)
					{
						echo "<th style='text-align:Center; padding-left:5px; padding-right:5px;'> Password </th>";
					}

					if($role_id==3 or $role_id == 13 or $role_id==21)
					{
						echo "<th style='text-align:Center; padding-left:5px; padding-right:5px;'> Action </th>";
					}
					
                echo "</tr>
                     </thead>";
				echo "<tbody style='height:400px; overflow-y:scroll'>";
				
				$i=0;
				while($row = mysqli_fetch_array($rec))
				{
					$i++;
					$contractor_name 	    = $row['contractor_name'];
					$contractor_address 	= $row['contractor_address'];
					$contractor_mobile 		= $row['contractor_mobile'];
					$contractor_email      	= $row['contractor_email'];
					$contractor_password 	= $row['contractor_password'];
					$district_id 	        = $row['district_id'];
					$active_status 	        = $row['active_status'];
					$contractor_id 	        = $row['contractor_id'];

					$sql3 = "select * from districts where district_id='$district_id' ";
					$rec3 = $conn->query($sql3);
					$k=0;
					while($row3 = mysqli_fetch_array($rec3))
					{
						$k++;
						$district 	 			 = $row3['district_name'];
					}
					
					
					echo "<tr style='color:black;'>
						<td style='text-align:center'>$i</td>
						<td style='text-align:Left; padding-left:5px; padding-right:5px;'>$contractor_name</td>
						<td style='text-align:Left; padding-left:5px; padding-right:5px;'>$contractor_address</td>
						<td style='text-align:Left; padding-left:5px; padding-right:5px;'>$contractor_mobile</td>
						<td style='text-align:Left; padding-left:5px; padding-right:5px;'>$contractor_email</td>
						<td style='text-align:Left; padding-left:5px; padding-right:5px;'>$district</td>";

						if($role_id==3)
						{
							echo "<td style='text-align:Left; padding-left:5px; padding-right:5px;'>$contractor_password</td>";
						}

						if($role_id==3 or $role_id == 13 or $role_id==21)
						{
							if($active_status==0)
							{
								echo "<td><a href='' class='button2'>Activate</a></td>";
							}
							else if($active_status==1)
							{
								echo "<td><a href='$_SERVER[SCRIPT_NAME]? contractor_id=$contractor_id' class='button3' onClick=\"return confirm('Are you sure to deactivate?')\">Deactivate </a></td>";
							}
						}
						
					echo "</tr>";

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
