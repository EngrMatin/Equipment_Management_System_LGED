<!DOCTYPE html>
 <html lang="en">

  <?php
    include('connection.php');
    include('function.php');
    
    $user_list = user_list();
    $role_list = role_list();
    
    if(isset($_GET['permission_id']))
    {
      $permission_id = $_GET['permission_id'];
      
      $sql = "select * from permission_info where permission_id = '$permission_id'";
      $result = $conn->query($sql);
      if($row = mysqli_fetch_array($result))
      {
        $user_id 		    = $row['user_id'];
        $role_id 		    = $row['role_id'];
        $permission_id 	= $row['permission_id'];
      }
    }
      
    if(isset($_POST['update']))
    {
      $user_id  		    =  $_POST['user_id'];
      $role_id  		    =  $_POST['role_id'];
      $permission_id   =  $_POST['permission_id'];
      
      $sql = "update permission_info set user_id='$user_id', role_id='$role_id' where permission_id=$permission_id";
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

    <section id="main-content">
      <section class="wrapper">
        <div class="row mt">
          <div class="col-lg-12">
            <div class="form-panel">
              <h4 class="mb" align="center">Update Permission Information</h4>
              <form class="form-horizontal style-form" action="permission_info_edit.php" method="post">
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">User Name <span style="color:red">*</span></label>
                  <div class="col-sm-10">
                    <select name="user_id" style="height:30px; width:600px;">
                        <?php
                          foreach($user_list as $key => $value)
                          {
                            if($user_id==$key) 
                            {
                              echo "<option value='$key' selected>$value</option>";
                            } 
                            else 
                            {
                              echo "<option value='$key'>$value</option>";
                            }
                          }						
                        ?>
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Role Name</label>
                  <div class="col-sm-10">
                    <select name="role_id" style="height:30px; width:600px;">
                        <?php
                          foreach($role_list as $key => $value)
                          {
                            if($role_id==$key) 
                            {
                              echo "<option value='$key' selected>$value</option>";
                            } 
                            else 
                            {
                              echo "<option value='$key'>$value</option>";
                            }
                          }						
                        ?>
                    </select>
                  </div>
                </div>
                
                <div class="form-group">
                  <div class="col-sm-12" align="center">
                    <input type="submit" class="btn btn-primary" name="update" value="Update">
                    <input type="hidden" name="permission_id" value="<?php echo $permission_id;  ?>" />
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