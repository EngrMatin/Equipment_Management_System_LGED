<!DOCTYPE html>
 <html lang="en">

    <?php
      include('connection.php');
      
      if(isset($_POST['save']))
      {
        $role_name = $_POST['role_name'];
        $sql = "INSERT INTO role_info(role_name) values ('$role_name')";
        $result = $conn->query($sql);
        
        if($result == 1)
        {
          echo "Successfully Inserted!";
          header("Location: role_info_list_view.php");
        }
      }
    ?>

  <head>
      <?php include('header_resources.php');   ?>
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
              <h4 class="mb" align="center"> Role Information</h4>

              <form class="form-horizontal style-form" action="role_info.php" method="post">
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Role Name <span style="color:red">*</span></label>
                  <div class="col-sm-10">
                    <input type="text" name="role_name" class="form-control" required>
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
  
  <?php include('footer_resources.php'); ?>
</body>
</html>