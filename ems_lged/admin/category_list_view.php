<!DOCTYPE html>
<html lang="en">
<?php 
	include('connection.php');   
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
   
    
    <!--main content start-->
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
			<div class="div1" align="center">Equipment Type</div>
			<div class="div2" align="right"> 
			<?php
				//session_start();
				$user_district_id = $_SESSION['user_district_id']; 
				$role_id          = $_SESSION['role_id'];

				if ($role_id == 3 or $role_id == 13)
				{
					echo '<a href="category_info.php" class="button1">Add New Category</a>';
				}
			?>	
			</div>
		</div>

	    	          
        <div class="row">
          <div class="col-md-12">
            <div class="content-panel"><span style="color:#00CC66"><?php   ?></span> 
              
				<?php
			
					if(isset($_GET['category_id']))
					{
						$category_id = $_GET['category_id'];
						$sql = "delete from equipment_category where category_id = '$category_id'";
						
						//echo $sql;
						
						$result = $conn->query($sql);
						
						if($result)
						{
							echo "Successfully Deleted";
							//header("Location: category_list_view.php?message=".$message);
							//exit();
						}
					}

				?>

						  
			  <?php

			  	$sql = "select * from equipment_category";
				$rec = $conn->query($sql);
				
				echo "<table border='1' cellpadding='0' align='center'>";
				echo "<thead>";
                echo "<tr style='background-color:#66cccc; height:30px; text-align:center; color:black; font-weght:bold;'>
                      <th> Sl No </th>
					  <th style='text-align:center'>Equipment Type</th>";

					if ($role_id == 3 or $role_id == 13)
					{
						echo "<th style='text-align:center'>Action</th>";
					}
					
                echo "</tr>
                	</thead>";
				echo "<tbody style='height:400px; overflow-y:scroll'>";
				
				$i=0;
				while($row = mysqli_fetch_array($rec))
				{
					$i++;
					$equipment_type = $row['equipment_type'];
					$category_id 	= $row['category_id'];
					
					
					echo "<tr>
						<td style='text-align:center'>$i</td>
						<td style='text-align:center'>$equipment_type</td>";
						

					if ($role_id == 3 or $role_id == 13)
					{
					echo "<td>
					         <a href='category_info_edit.php?category_id=$category_id' class='button2'>Edit</a> |
					         <a href='$_SERVER[SCRIPT_NAME]?category_id=$category_id' class='button3' onClick=\"return confirm('Are you sure to delete?')\">Delete</a>
					      </td>";
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
    <!-- /MAIN CONTENT -->
    <!--main content end-->
    <!--footer start-->
    
    <!--footer end-->
  </section>
  
  
  <?php  include('footer_resources.php');  ?>
  
  
</body>

</html>
