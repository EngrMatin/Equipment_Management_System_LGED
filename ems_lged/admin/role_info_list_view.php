<!DOCTYPE html>
 <html lang="en">

    <?php  include('connection.php');  ?>

  <head>
	   <?php  include('header_resources.php');   ?>
  </head>

  <body>
	<section id="container">

	<?php
		include('header.php');
		include('nav.php');
		
		if(isset($_GET['role_id']))
		{
			$role_id = $_GET['role_id'];
			$sql = "delete from role_info where role_id = '$role_id'";
			$conn->query($sql);
			header("Location: role_info_list_view.php");
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
					<div class="div1" align="center">Role List</div>
					<div class="div2" align="right">
						<a href="role_info.php" class="button1">Add New Role</a>
					</div>
				</div>

				<div class="row">
					<div class="col-md-12">
						<div class="content-panel">

				<?php
					$sql = "select * from role_info";
					$rec = $conn->query($sql);
					
					// echo "<table border='1' class='table' cellpadding='0' align='center'>";
					echo "<table class='table' style='margin-bottom:10px';>";
					echo "<thead>
					<tr class='title_css'>
					<th>SL</th>
					<th>Role Name</th>
					<th>Action</th>
					</tr>
					</thead>";
					
					echo "<tbody>";
					
					$i=0;
					while($row = mysqli_fetch_array($rec))
					{
						$i++;
						$role_name 	= $row['role_name'];
						$role_id 	= $row['role_id'];
						
						echo "<tr>
						<td>$i</td>
						<td style='text-align:left;'>$role_name</td>
						<td>
							<a href='role_info_edit.php? role_id=$role_id' class='btn btn-primary'>Update</a> |
							<a href='$_SERVER[SCRIPT_NAME]? role_id=$role_id' class='btn btn-danger' onClick=\"return confirm('Are You sure to Delete?')\">Delete</a>
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