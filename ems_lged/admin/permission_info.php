<!DOCTYPE html>
<html lang="en">

<?php
	include('connection.php');
	include('function.php');
	
	$user_list = user_list();
	$role_list = role_list();
		
	if(isset($_POST['save']))
	{
    $user_id = $_POST['user_id'];
		$role_id = $_POST['role_id'];

    $sql = "insert into permission_info(user_id, role_id) values ('$user_id', '$role_id')";                                                                           
		$result = $conn->query($sql);
		
		if($result == 1)
		{			
			echo "Successfully Inserted!";
			header("Location: permission_info_list_view.php");
		}
	}
?>

<head>
  <?php    include('header_resources.php');   ?>
</head>

<body>
  <section id="container">
    <?php  
         include('header.php');    
         include('nav.php');  
    ?>

     <style>
        @import url('https://fonts.googleapis.com/css2?family=Fugaz+One&family=Righteous&family=Roboto+Condensed&family=Squada+One&display=swap');
        
        h4 
        {  
          /* font-family: 'Righteous', cursive; */
          font-size: 20px;
          font-weight: bolder;
          color: blue;
          letter-spacing: 1px;
          margin-left: 0px;
        }

        label
        {
          /* font-family: 'Roboto Condensed', sans-serif; */
          font-size: 16px;
          color: black;
          margin-left: 0px;
        }

        input
        {
          font-family: 'Roboto Condensed', sans-serif;
          font-size: 16px;
          color: black;
          margin-left: 0px;
        }

        .btn-success
        {
          font-family: 'Righteous', cursive;
          font-size: 17px;
          font-weight: bold;
          color: black;
          letter-spacing: 1px;
        }
      </style>

    
    <section id="main-content">
      <section class="wrapper">
        <div class="row mt">
          <div class="col-lg-12">
            <div class="form-panel">
              <h4 class="mb" align="center"> Permission Information</h4>
              <form class="form-horizontal style-form" action="permission_info.php" method="post">
                <div class="form-group">
                  <label class="col-sm-2 control-label">User Name <span style="color:red">*</span></label>
                  <div class="col-sm-10">
                    <select name="user_id" class="form-control"">

                          <?php
                            foreach($user_list as $key => $value)
                            {
                              echo "<option value='$key'>$value</option>";
                            }
                          ?>
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Role Name</label>
                  <div class="col-sm-10">
                    <select name="role_id" class="form-control">
                          <?php
                            foreach($role_list as $key => $value)
                            {
                              echo "<option value='$key'>$value</option>";
                            }
                          ?>
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <div class="col-sm-12" align="center">
                    <input type="submit" class="btn btn-success" name="save" value="Submit">
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>
    </section>
  </section>

  <?php   include('footer_resources.php');   ?>

</body>

</html>