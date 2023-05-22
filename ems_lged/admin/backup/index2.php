<?php
		include('connection.php');
		if(isset($_POST['login'])) 
		{
			$user_name  = $_POST['user_name'];
			$password   = $_POST['password'];

			$sql = "SELECT * FROM user_info WHERE UserName='$user_name' AND UserPassword='$password'";
      
			$result = $conn->query($sql);
			$row = mysqli_fetch_array($result);
			$found = $result->num_rows;
			
		if($found==1) 
			{
        //echo "OK";die;
        session_start();
        $_SESSION['login'] 			= 'loginDone';
        $_SESSION['UserName'] 	= $row['UserName'];
        $_SESSION['UserID'] 		= $row['UserID'];
        header("Location: dashboard.php");
			}
      else 
      {
			  echo "<span style='color: black; font-size: large; font-weight: bolder; text-align: center'>Invalid Login Information!</span>";
			}
		}
?>


<!DOCTYPE html>
<html lang="en">

<head>

  <?php  include('header_resources.php');  ?>
  
</head>

<body>
  <section id="container">
    
	<?php  
		include('header.php'); 
		include('nav.php');  
	?>
    
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <?php  include('footer_resources.php');  ?>
  
  <script type="application/javascript">
    $(document).ready(function() {
      $("#date-popover").popover({
        html: true,
        trigger: "manual"
      });
      $("#date-popover").hide();
      $("#date-popover").click(function(e) {
        $(this).hide();
      });

      $("#my-calendar").zabuto_calendar({
        action: function() {
          return myDateFunction(this.id, false);
        },
        action_nav: function() {
          return myNavFunction(this.id);
        },
        ajax: {
          url: "show_data.php?action=1",
          modal: true
        },
        legend: [{
            type: "text",
            label: "Special event",
            badge: "00"
          },
          {
            type: "block",
            label: "Regular event",
          }
        ]
      });
    });

    function myNavFunction(id) {
      $("#date-popover").hide();
      var nav = $("#" + id).data("navigation");
      var to = $("#" + id).data("to");
      console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
    }
  </script>
</body>

</html>
