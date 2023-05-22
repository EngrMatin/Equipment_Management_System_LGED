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
		
		if(isset($_GET['contractor_id']))
		{
			$contractor_id = $_GET['contractor_id'];
			$sql = "select * from contractor_info where contractor_id = '$contractor_id'";
			$result = $conn->query($sql);

			while($row = $result->fetch_assoc())
			{
				$contractor_name 	    = $row['contractor_name'];
				$contractor_address 	= $row['contractor_address'];
				$contractor_mobile 		= $row['contractor_mobile'];
				$contractor_email      	= $row['contractor_email'];
				$contractor_password 	= $row['contractor_password'];
				$contractor_id 	    	= $row['contractor_id'];
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
			<div class="div1" align="center">View Contractor Information</div>
			<div class="div2" align="right">
				<a href="contractor_list_view.php" class="button1">Back to Contractor List</a>
			</div>
		</div>
        
        <div class="row">
          <div class="col-md-12">
            <div class="content-panel">
              
			  	<div class="table">
					<table border="1" width="100%" cellpadding="0" cellspacing="0">
						<tr>
							<th width="200px;" style="text-align:center">Name :</th>
							<td><?php echo $contractor_name;  ?></td>
						</tr>
						<tr>
							<th width="200px;" style="text-align:center">Address :</th>
							<td><?php echo $contractor_address;  ?></td>
						</tr>
						<tr>
							<th width="200px;" style="text-align:center">Mobile :</th>
							<td><?php echo $contractor_mobile;  ?></td>
						</tr>
						
						<tr>
							<th width="200px;" style="text-align:center">E-mail :</th>
							<td><?php echo $contractor_email;  ?></td>
						</tr>

						<tr>
							<th width="200px;" style="text-align:center">Password :</th>
							<td><?php echo $contractor_password;  ?></td>
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
