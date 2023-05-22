<?php
    include("database.php"); 

	$id=$_GET ["id"];

	mysqli_query($conn, "UPDATE student_registration SET status='yes' where id=$id");

	$to="musfik.bbn@gmail.com";
	$subject="xyz";
	$message="Hello you are approved for your request";
	$from="feedback@musfiktech.com";
	$header="From: $from";
	if(mail($to,$subject,$message,$header))
	{
		echo "mail sent";
	}
	else
	{
		echo "mail not sent";
	}

?>
	<script type="text/javascript">
		window.location="display_student.php";
	</script>
