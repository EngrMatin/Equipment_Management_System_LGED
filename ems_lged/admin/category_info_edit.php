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

  <?php  
		
		if(isset($_GET['category_id']))
		{
			$id = $_GET['category_id'];
			$sql = "select * from equipment_category where category_id = '$category_id'";
			$result = $conn->query($sql);
			if($row = mysqli_fetch_array($result))
			{
					$equipment_type 	= $row['equipment_type'];
          			$category_id 	    = $row['category_id'];
			}
		}
		
		if(isset($_POST['update']))
		{
      		$equipment_type   = $_POST['equipment_type'];
      		$category_id      = $_POST['category_id'];
			
			$sql = "update equipment_category set equipment_type='$equipment_type' where category_id=$category_id";
			//echo $sql; exit('OK');
			$result = $conn->query($sql);
			
			if($result)
			{
				$message = "Updated Successfully!";
        		header("Location: category_list_view.php?message=".$message);
				//echo "<meta http-equiv='refresh' content='1;url=equipment_list_view.php'>";
				exit();
			}
		}
		  
	?>
    
    
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <h3> Update Equipment Category</h3>
        <!-- BASIC FORM ELELEMNTS -->
        <div class="row mt">
          <div class="col-lg-12">
            <div class="form-panel">
              
              <form class="form-horizontal style-form" action="category_info_edit.php" method="post">  
				        <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Equipment Type<span style="color:#FF0000">*</span></label>
                  <div class="col-sm-6">
                    <input type="text" name="equipment_type" value="<?php echo $equipment_type;  ?>" class="form-control" required>
                  </div>
                </div>
				      
                <div class="form-group">
                   <div class="col-sm-8" align="center">
                    <input type="submit" name="update" class="btn btn-primary" value="Update">
					          <input type="hidden" name="category_id" value="<?php echo $category_id; ?>"
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
