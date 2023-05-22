
<?php
		include('connection.php');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
		<meta charset="UTF-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<link a href="https://fonts.googleapis.com/css2? family=Lato:wght@300;700&display=swap" rel="stylesheet"/>
		<link rel="stylesheet" href="css/FormStyle.css"/> 
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		
  </head> 

  <body>

	<div class="login-div">
	  <form action="#" method="POST">
		<div class="logo"><img src="GoB logo.png"></div>
		<div class="title">Equipment Management System, LGED</div>
		<div class="fields">
		    <div class="fields">
                <div class="username">
                  <i class="fa fa-user fa-3x center"></i>
                    <input type="email" name="user_email"class="user-input" placeholder="Enter E-mail ID">
                </div>
                <div class="password">
                  <i class="fa fa-lock fa-3x center"></i> 
                    <input i type="password" name="user_password" class="pass-input" placeholder="Enter Password">
                </div>
			  </div>
			</div>
			<div>
				<?php
					if(isset($_POST['login'])) 
					{
						$user_email        = $_POST['user_email'];
						$user_password     = $_POST['user_password'];
			
						$sql = "SELECT * FROM user_info WHERE user_email='$user_email' AND user_password='$user_password'";
						$result = $conn->query($sql);
						$row = mysqli_fetch_array($result);
						$found = $result->num_rows;
						
						if($found==1) 
						{
							session_start();
			
							$_SESSION['login'] 					= 'loginDone';
							$_SESSION['user_email'] 			= $row['user_email'];
							$_SESSION['user_id'] 				= $row['user_id'];
							$_SESSION['user_name'] 	    		= $row['user_name'];
							$_SESSION['user_division_id'] 		= $row['user_division_id'];
							$_SESSION['user_district_id'] 		= $row['user_district_id'];
							$_SESSION['user_upazila_id'] 		= $row['user_upazila_id'];
							$_SESSION['user_mobile_no'] 		= $row['user_mobile_no'];
							$_SESSION['role_id'] 				= $row['role_id'];
			
							header("Location: dashboard.php");
						}
						else 
						{
							echo "<span style='color: red; font-size: large; font-weight: bold; text-align: center'>Invalid Login Information!</span>";
						}
					}

				?>
            </div>
        <button type="submit" name="login" class="signin-button">Log in</button>
	</div>
	
  </body>
</html>




