<!DOCTYPE html>
<html lang="en">

<?php
	include('connection.php');
?>

<head>
  <?php include('header_resources.php');   ?>
</head>

<body>
  <section id="container">

    <?php  
      include('header.php');  
      include('nav.php');  

      $user_id = $_SESSION['user_id'];

      
        $sql = "SELECT * FROM user_info where user_id = '$user_id' ";
        $result = $conn->query($sql);

        if($row = mysqli_fetch_array($result))
        {   
            $user_id                = $row['user_id'];
            $user_name              = $row['user_name'];
            $user_mobile_no         = $row['user_mobile_no'];
        }
      

      if(isset($_POST['update']))
      {   
          $user_id              = $_POST['user_id'];
          $user_name            = $_POST['user_name'];
          $user_mobile_no       = $_POST['user_mobile_no'];
      
          
          $sql = "UPDATE user_info SET user_name ='$user_name', user_mobile_no = '$user_mobile_no' where user_id = $user_id";
          $result = $conn->query($sql);
          
          if($result)
          {
              
    ?>
                <script>
						window.location.href = 'user_account_details.php';
				</script>
    <?php
          }
      }

    ?>

    <style>
      @import url('https://fonts.googleapis.com/css2?family=Fugaz+One&family=Righteous&family=Roboto+Condensed&family=Squada+One&display=swap');

      h4 
      {
        font-family: 'Righteous', cursive;
        font-size: 20px;
        font-weight: bolder;
        color: blue;
        letter-spacing: 1px;
        margin-left: 0px;
      }
      label
      {
        font-family: 'Roboto Condensed', sans-serif;
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
              <h4 class="mb" align="center"> Update User Information</h4>
              <form class="form-horizontal style-form" action="user_account_edit.php" method="post" enctype="multipart/form-data">
 
                <div class="form-group">
                  <label class="col-sm-2 control-label">User Name<span style="color:red">*</span></label>
                  <div class="col-sm-10">
                    <input type="text" name="user_name" value="<?php echo $user_name; ?>" class="form-control" required>
                  </div>
                </div>


                <div class="form-group">
                  <label class="col-sm-2 control-label">Mobile No</label>
                  <div class="col-sm-10">
                    <input type="text" name="user_mobile_no" value="<?php echo $user_mobile_no; ?>" class="form-control">
                  </div>
                </div>


                <div class="form-group">
                  <div class="col-sm-12" align="center">
                    <input type="submit" class="btn btn-primary" name="update" value="Update">
                    <input type="hidden" name="user_id" value="<?php echo $user_id;?>" />
                  </div>
                </div>   

              </form>
            </div>
          </div>
        </div>
    </section>
  </section>
  
  <?php   include('footer_resources.php');   ?>
</body>

</html>