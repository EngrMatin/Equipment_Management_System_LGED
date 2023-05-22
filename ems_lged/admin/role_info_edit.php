<!DOCTYPE html>
 <html lang="en">

    <?php
      include('connection.php');
      
      if(isset($_GET['role_id']))
      {
        $role_id = $_GET['role_id'];
        $sql = "select * from role_info where role_id = '$role_id'";
        $result = $conn->query($sql);
        if($row = mysqli_fetch_array($result))
        {
          $role_name 	= $row['role_name'];
          $role_id 	= $row['role_id'];
        }
      }
      if(isset($_POST['update']))
      {
        $role_name = $_POST['role_name'];
        $role_id = $_POST['role_id'];
        $sql = "update role_info set role_name='$role_name' where role_id=$role_id";
        $result = $conn->query($sql);
        
        if($result)
        {
          echo "Update Successfully!";
          echo "<meta http-equiv='refresh' content='1;url=role_info_list_view.php'>";
        }
      }
    ?>

  <head>
    <?php include('header_resources.php'); ?>
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
              <h4 class="mb" align="center"> Update Role Information</h4>
              <form class="form-horizontal style-form" action="role_info_edit.php" method="post">
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Role Name</label>
                  <div class="col-sm-10">
                    <input type="text" name="role_name" value="<?php echo $role_name;   ?>" class="form-control">
                  </div>
                </div>

                <div class="form-group">
                  <div class="col-sm-12" align="center">
                    <input type="submit" class="btn btn-primary" name="update" value="Update">
                    <input type="hidden" name="role_id" value="<?php echo $role_id;?>" />
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