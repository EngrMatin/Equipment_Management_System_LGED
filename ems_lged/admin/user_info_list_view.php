<!DOCTYPE html>
 <html lang="en">
   <?php  
   		include('connection.php');
   		include('function.php');

  		$role_list = role_list();
   ?>

  <head>
	  <?php  include('header_resources.php'); ?>
  </head>

  <body>
	<section id="container">
	<?php
		include('header.php');
		include('nav.php');
		
		if(isset($_GET['user_id']))
		{
			$user_id = $_GET['user_id'];
			$sql = "delete from user_info where user_id = '$user_id'";
			$conn->query($sql);
			header("Location: user_info_list_view.php");
		}
	?>
		
		<style>
			@import url('https://fonts.googleapis.com/css2?family=Fugaz+One&family=Righteous&family=Roboto+Condensed&family=Squada+One&display=swap');
			.div1 
			{
				width: 80%;
				/* font-family: 'Righteous', cursive !important; */
				font-size: 20px;
				font-weight: bold;
				color: blue;
				letter-spacing: 1px;
				margin-top: 5px;
				display: inline-block;
			}

			.div2 
			{
				width: 20%;
				float: right;
				margin-bottom: 10px;
			}

			.button1 
			{
				background-color: #449D44;
				/* font-family: 'Righteous', cursive; */
				font-size: 17px;
				font-weight: bold;
				letter-spacing: 1px;
				color: black;
				border-radius: 5px;
				padding: 5px 5px;
				margin: 4px 2px;
				text-align: center;
				text-decoration: none;
				display: inline-block;
			}

			.button2 
			{
				background-color: #4CAF50;
				border: none;
				color: white;
				padding: 8px 20px;
				text-align: center;
				text-decoration: none;
				display: inline-block;
				font-size: 14px;
				margin: 4px 2px;
				border-radius: 8px;
			}

			.content-panel 
			{
				background-color: white;
				padding: 5px !important;
				padding-top: 15px !important;
			}

			th, thead
			{
				font-family: 'Roboto Condensed', sans-serif;
				font-size: 16px;
				font-weight: bold;
				text-align: center;
				color: blue;
			}
			td
			{
				font-family: 'Roboto Condensed', sans-serif;
				font-size: 16px;
				text-align: center;
				color: black;
			}
			table, thead, th, tr, td, tbody
			{
				border: 1px solid black;
			}

			.title_css 
			{
				background-color: white;
				font-family: 'Roboto Condensed', sans-serif;
				padding: 5px;
				margin: 5px;
				border: 1px solid black;
			}  
		</style>

		
		<section id="main-content">
			<section class="wrapper">
				<div>
					<div class="div1" align="center">User List</div>
					<div class="div2" align="right">
						<a href="user_info.php" class="button1">Add New User</a>
					</div>
				</div>

			<div class="row">
				<div class="col-sm-12">
					<div class="content-panel">
						<div class="table-responsive">
						<?php

							$roles = array();
							$sql5 = "select * from role_info";
							$result5 = $conn->query($sql5);
							while($row5 = mysqli_fetch_array($result5))
							{
								$roles[$row5['role_id']] = $row5['role_name'];
							}

							$sql = "select * from user_info";
							$rec = $conn->query($sql);
							
							echo "<table class='table' style='margin-bottom:10px';>";
							echo "<thead>
							<tr class='title_css'>
								<th> Sl No. </th> 
								<th> User Name </th>	
								<th> Designation </th>	
								<th> District </th>	
								<th> Upazila </th>	
								<th> Email </th>	
								<th> Password </th>
								<th> Mobile No. </th>
								<th> User Role </th>
								<th> Action </th>
							</tr>
							</thead>";
							
							echo "<tbody>";

							$i=0;
							while($row = mysqli_fetch_array($rec))
							{
								$i++;
								$user_name           	= $row['user_name'];
								$user_designation    	= $row['user_designation'];
								$user_division_id       = $row['user_division_id'];
								$user_district_id       = $row['user_district_id'];
								$user_upazila_id        = $row['user_upazila_id'];
								$user_email          	= $row['user_email'];
								$user_password       	= $row['user_password'];
								$user_mobile_no      	= $row['user_mobile_no'];
								$role_id             	= $row['role_id'];
								$user_id             	= $row['user_id'];
								

								$sql2 = "select * from divisions where division_id='$user_division_id' ";
								$rec2 = $conn->query($sql2);
								$j=0;
								while($row2 = mysqli_fetch_array($rec2))
								{
									$j++;
									$user_division 	 			 = $row2['division_name'];
								}

								$sql3 = "select * from districts where district_id='$user_district_id' ";
								$rec3 = $conn->query($sql3);
								$k=0;
								while($row3 = mysqli_fetch_array($rec3))
								{
									$k++;
									$user_district 	 			 = $row3['district_name'];
								}

								$sql4 = "select * from upazilas where upazila_id='$user_upazila_id' ";
								$rec4 = $conn->query($sql4);
								$m=0;
								while($row4 = mysqli_fetch_array($rec4))
								{
									$m++;
									$user_upazila 	 			 = $row4['upazila_name'];
								}

								echo "<tr class = 'Output'>
								<td style = 'text-align:center; vertical-align: middle;'>$i</td>
								<td style = 'text-align:left; vertical-align: middle;'>$user_name</td>
								<td style = 'text-align:left; vertical-align: middle;'>$user_designation</td>
								<td style = 'text-align:left; vertical-align: middle;'>$user_district</td>
								<td style = 'text-align:left; vertical-align: middle;'>$user_upazila</td>
								<td style = 'text-align:left; vertical-align: middle;'>$user_email</td>
								<td style = 'text-align:center; vertical-align: middle;'>$user_password</td>
								<td style = 'text-align:center; vertical-align: middle;'>$user_mobile_no</td>
								<td style = 'text-align:center; vertical-align: middle;'>$role_list[$role_id]</td>
								<td style = 'text-align:center; vertical-align: middle;'> 
									<a href='user_info_view.php? user_id=$user_id' class='btn btn-success'>View</a> |
									<a href='user_info_edit.php? user_id=$user_id' class='btn btn-primary'>Update</a> |
									<a href='$_SERVER[SCRIPT_NAME]? user_id=$user_id' class='btn btn-danger' onClick=\"return confirm('Are You sure to Delete?')\">Delete</a>
								</td>
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
	<?php include('footer_resources.php'); ?>
 </body>
</html>

