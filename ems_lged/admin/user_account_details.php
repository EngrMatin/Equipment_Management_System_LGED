<!DOCTYPE html>
<html lang="en">
<?php  
	include('connection.php');  
	include('function.php');

	$role_list = role_list();
?>

<head>
	<?php  include('header_resources.php');   ?>
</head>

<body>
	<section id="container">
		<?php
		include('header.php');
		include('nav.php');

		$roles = array();
		$sql5 = "select * from role_info";
		$result5 = $conn->query($sql5);
		while($row5 = mysqli_fetch_array($result5))
		{
			$roles[$row5['role_id']] = $row5['role_name'];
		}
		
        $user_id = $_SESSION['user_id'];
		
        $sql = "select * from user_info where user_id = '$user_id'";
        $result = $conn->query($sql);

        $i=0;
        while($row = $result->fetch_assoc())
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
        }
        
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
				text-align: Left;
				text-decoration: none;
				display: inline-block;
			}

			.button2 
			{
				background-color: #4CAF50;
				border: none;
				color: white;
				padding: 8px 20px;
				text-align: Left;
				text-decoration: none;
				display: inline-block;
				font-size: 14px;
				margin: 4px 2px;
				border-radius: 8px;
			}

			.content-panel 
			{
			background-color: white;
			padding: 10px 5px 10px 5px !important;
			}

			th, thead
			{
				font-family: 'Roboto Condensed', sans-serif;
				font-size: 16px;
				font-weight: bold;
				text-align: Left;
				color: blue;
			}
			td
			{
				font-family: 'Roboto Condensed', sans-serif;
				font-size: 16px;
				text-align: Left;
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
					<div class="div1" align="center">Personal Information</div>
					<!-- <div class="div2" align="right">
						<a href="user_account_edit.php" class="button1">Edit </a>
					</div> -->
				</div>

				<div class="row" >
					<div class="col-md-12" >
						<div class="content-panel">
							<div> 
								<table border="1" width="100%" cellpadding="0" cellspacing="0"
									style="background-color:white">
									
									<tr style="height:40px;color:#000000">
										<th width="200px" style="text-align:Left; padding-left:15px;">User Name:</th>
										<td style="padding-left:15px;"><?php  echo $user_name;  ?></td>
									</tr>
									<tr style="height:40px;color:#000000">
										<th width="200px" style="text-align:Left; padding-left:15px;">Designation:</th>
										<td style="padding-left:15px;"><?php  echo $user_designation;  ?></td>
									</tr>
									<tr style="height:40px;color:#000000">
										<th width="200px" style="text-align:Left; padding-left:15px;">Division:</th>
										<td style="padding-left:15px;"><?php  echo $user_division;  ?></td>
									</tr>
									<tr style="height:40px;color:#000000">
										<th width="200px" style="text-align:Left; padding-left:15px;">District:</th>
										<td style="padding-left:15px;"><?php  echo $user_district;  ?></td>
									</tr>
									<tr style="height:40px;color:#000000">
										<th width="200px" style="text-align:Left; padding-left:15px;">Upazila:</th>
										<td style="padding-left:15px;"><?php  echo $user_upazila;  ?></td>
									</tr>
									<tr style="height:40px;color:#000000">
										<th width="200px" style="text-align:Left; padding-left:15px;">Email:</th>
										<td style="padding-left:15px;"><?php  echo $user_email;  ?></td>
									</tr>
									<tr style="height:40px;color:#000000">
										<th width="200px" style="text-align:Left; padding-left:15px;">Password:</th>
										<td style="padding-left:15px;"><?php  echo $user_password;  ?></td>
									</tr>
									<tr style="height:40px;color:#000000">
										<th width="200px" style="text-align:Left; padding-left:15px;">Mobile No:</th>
										<td style="padding-left:15px;"><?php  echo $user_mobile_no;  ?></td>
									</tr>

									<tr style="height:40px;color:#000000">
										<th width="200px" style="text-align:Left; padding-left:15px;">User Role:</th>
										<td style="padding-left:15px;"><?php  echo $role_list[$role_id];  ?></td>
									</tr>
									
								</table>
							</div>
						</div>
                        <div class="div3" align="center">
						     <a href="user_account_edit.php" class="button1">Edit Name or Mobile No</a>
					    </div>
					</div>
				</div>
			</section>
		</section>
	</section>
	<?php   include('footer_resources.php');  ?>
</body>
</html>

