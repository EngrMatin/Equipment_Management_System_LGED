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
		
		if(isset($_GET['requisition_id']))
		{
			$requisition_id = $_GET['requisition_id'];
			$sql = "select * from requisition_info where requisition_id = '$requisition_id'";
			$result = $conn->query($sql);
			while($row = $result->fetch_assoc())
			{
				    $division 	 			   = $row['division'];
                    $district 	 			   = $row['district'];
					$upazila 	     		   = $row['upazila'];
					$road_name 	               = $row['road_name'];
					$chainage 	               = $row['chainage'];
					$layer 					   = $row['layer'];
					$equipment_type 	       = $row['equipment_type'];
					$requisition_from_date 	   = $row['requisition_from_date'];
					$requisition_to_date 	   = $row['requisition_to_date'];
					$request_date 	           = $row['request_date'];
					$name 	                   = $row['name'];
					$address 	               = $row['address'];
					$requisition_id 	       = $row['requisition_id'];
			}
		}		
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
			
			.table,tr,td
			{
				border: 1px solid black;
				border-collapse:collapse;
				height:50px;
			}

			.table
			{
				width:70%;
				margin-left:200px;
				max-width:100%;
				margin-bottom:1px;
			}
			
			.content-panel 
			{
				background: #ffffff;
				box-shadow: 0px 3px 2px #aab2bd;
				padding-top: 15px;
				padding-bottom: 5px;
				height: 600px;
			}		
		
		</style>
	
    <section id="main-content">
      <section class="wrapper">
	  	<div>
			<div class="div1" align="center">View Requisition Information</div>
			<div class="div2" align="right">
				<a href="requisition_list_view.php" class="button1">Back to Requisition List</a>
			</div>
		</div>
        
        <div class="row">
          <div class="col-md-12">
            <div class="content-panel">
              
			  	<div class="table">
					<table border="1" width="100%" cellpadding="0" cellspacing="0">
					    <tr>
							<th width="200px;" style="text-align:center">Division :</th>
							<td><?php echo $division;  ?></td>
						</tr>
						<tr>
							<th width="200px;" style="text-align:center">District :</th>
							<td><?php echo $district;  ?></td>
						</tr>
						<tr>
							<th width="200px;" style="text-align:center">Upazila :</th>
							<td><?php echo $upazila;  ?></td>
						</tr>
						<tr>
							<th width="200px;" style="text-align:center">Name of Road :</th>
							<td><?php echo $road_name;  ?></td>
						</tr>
						
						<tr>
							<th width="200px;" style="text-align:center">Chainage :</th>
							<td><?php echo $chainage;  ?></td>
						</tr>

						<tr>
							<th width="200px;" style="text-align:center">Layer :</th>
							<td><?php echo $layer;  ?></td>
						</tr>
						<tr>
							<th width="200px;" style="text-align:center">Equipment Type :</th>
							<td><?php echo $equipment_type;  ?></td>
						</tr>
						<tr>
							<th width="200px;" style="text-align:center">Requisition From :</th>
							<td><?php echo $requisition_from_date;  ?></td>
						</tr>
						<tr>
							<th width="200px;" style="text-align:center">Requisition To :</th>
							<td><?php echo $requisition_to_date;  ?></td>
						</tr>
						<tr>
							<th width="200px;" style="text-align:center">Date of Request :</th>
							<td><?php echo $request_date;  ?></td>
						</tr>
						<tr>
							<th width="200px;" style="text-align:center">Name of Contractor :</th>
							<td><?php echo $name;  ?></td>
						</tr>
						<tr>
							<th width="200px;" style="text-align:center">Address of Contractor :</th>
							<td><?php echo $address;  ?></td>
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
