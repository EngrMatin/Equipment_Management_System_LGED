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
			<div class="div1" align="center">Requisition List</div>
			<div class="div2" align="right"> 
				<a href="requisition_info.php" class="button1">Submit Requisition</a>
			</div>
		</div>

	    	          
        <div class="row">
          <div class="col-md-12">
            <div class="content-panel"><span style="color:#00CC66"><?php  echo $_GET['message']; ?></span> 
              
				<?php
			
				if(isset($_GET['requisition_id']))
					{
						$requisition_id = $_GET['requisition_id'];
						$sql = "delete from requisition_info where requisition_id = '$requisition_id'";
						
						//echo $sql;
						
						$result = $conn->query($sql);
						
						if($result)
						{
							echo "Successfully Deleted";
							//header("Location: requisition_list_view.php?message=".$message);
							//exit();
						}
					}
				
				?>
			<hr>			  
			  <?php
			  	$sql = "select * from requisition_info";
				$rec = $conn->query($sql);
				
				echo "<table border='1' cellpadding='0' align='center'>";
				echo "<thead>";
                echo "<tr style='background-color:#66cccc; height:30px; text-align:center; color:black; font-weght:bold;'>
                    <th> Sl No </th>
                    <th style='text-align:center'>Division</th>
					<th style='text-align:center'>District</th>
                    <th style='text-align:center'>Upazila</th>
                    <th style='text-align:center'>Name of Road</th>
					<th style='text-align:center'>Chainage</th>
					<th style='text-align:center'>Layer</th>
					<th style='text-align:center'>Equipment Type</th>
					<th style='text-align:center'>Requisition From</th>
					<th style='text-align:center'>Requisition To</th>
					<th style='text-align:center'>Date of Request</th>
					<th style='text-align:center'>Name of Contractor</th>
					<th style='text-align:center'>Address</th>
					<th style='text-align:center'>Action</th>
                  </tr>
                </thead>";
				echo "<tbody style='height:400px; overflow-y:scroll'>";
				
				$i=0;
				while($row = mysqli_fetch_array($rec))
				{
					$i++;
					$division 	 			 = $row['division'];
					$district 	 			 = $row['district'];
					$upazila 	     		 = $row['upazila'];
					$road_name 	             = $row['road_name'];
					$chainage 	             = $row['chainage'];
					$layer 					 = $row['layer'];
					$equipment_type 	     = $row['equipment_type'];
					$requisition_from_date 	 = $row['requisition_from_date'];
					$requisition_to_date 	 = $row['requisition_to_date'];
					$request_date 	         = $row['request_date'];
					$name 	                 = $row['name'];
					$address 	             = $row['address'];
					$requisition_id 	     = $row['requisition_id'];
					
					
					echo "<tr>
						<td style='text-align:center'>$i</td>
						<td style='text-align:center'>$division</td>
						<td style='text-align:center'>$district</td>
						<td style='text-align:center'>$upazila</td>
						<td style='text-align:center'>$road_name</td>
						<td style='text-align:center'>$chainage</td>
						<td style='text-align:center'>$layer</td>
						<td style='text-align:center'>$equipment_type</td>
						<td style='text-align:center'>$requisition_from_date</td>
						<td style='text-align:center'>$requisition_to_date</td>
						<td style='text-align:center'>$request_date</td>
						<td style='text-align:center'>$name</td>
						<td style='text-align:center'>$address</td>
						<td>
						<a href='requisition_info_edit.php? requisition_id=$requisition_id' class='button2'>Edit</a> |
						<a href='requisition_view.php? requisition_id=$requisition_id' class='button4'>View</a>|
						<a href='$_SERVER[SCRIPT_NAME]? requisition_id=$requisition_id' class='button3' onClick=\"return confirm('Are you sure to delete?')\">Delete</a>
					
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
  
  <?php  include('footer_resources.php');  ?>
  
 </body>
</html>
