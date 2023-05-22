<!DOCTYPE html>
<html lang="en">
<?php

	include('connection.php');

	if(isset($_POST['submit']))
	{
    	$equipment_type 	= $_POST['equipment_type'];
		
    	//exit('OK');
    
		$sql = "insert into equipment_category (equipment_type) values ('$equipment_type')";
		
		//echo $sql; exit('OK');
		
		$result = $conn->query($sql);
		if($result == 1)
		{
			$message = "Successfully Inserted";
      		header("Location: category_list_view.php?message=".$message);
		}
	
	}
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
    <section id="main-content">
      <section class="wrapper">
        <h3> Equipment Category</h3>
        <!-- BASIC FORM ELELEMNTS -->
        <div class="row mt">
          <div class="col-lg-12">
            <div class="form-panel">
              
              <form class="form-horizontal style-form" action="category_info.php" method="post">
			          <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Equipment Type<span style="color:#FF0000">*</span></label>
                  <div class="col-sm-6">
                    <input type="text" name="equipment_type" class="form-control" required>
                  </div>
                </div>
				
				        <div class="form-group">
                  
                  <div class="col-sm-8" align="center">
                    <input type="submit" name="submit" class="btn btn-primary" value="Submit">
					
                  </div>
                </div>
                		
                
              </form>
            </div>
          </div>
        </div>
        </div>
        <!-- /row -->
      </section>
      <!-- /wrapper -->
    </section>
   
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  
  <?php  include('footer_resources.php');  ?>

</body>

</html>
