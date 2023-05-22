<?php
    $username = "root";
    $password = "";
    $hostname = "localhost"; 
    $db = "reg";
    //connection to the database
    //$dbhandle = mysql_connect($hostname, $username, $password) or die("Unable to connect to MySQL");
    //mysql_select_db($db,$dbhandle) or die('cannot select db');

if(isset($_POST['submit'])) 
{

     $name        = $_POST['name'];
     $username    = $_POST['username'];
     $password    = $_POST['password'];
     $cpassword   = $_POST['cpassword'];

     if($name=='')
     {
        echo "<script>alert('Please enter Name')</script>";
        exit();
     }

     if($username=='')
     {
        echo "<script>alert('Please enter Username')</script>";
        exit();
     }

     if($password=='' && $password<6)
     {
        echo "<script>alert('Please enter  Password')</script>";
        exit();
     }

     if($cpassword=='')
     {
        echo "<script>alert('Please enter Confirm Password')</script>";
     }



    $check_name="select * from registration where username='$username'";
    $run=mysql_query($check_name);

     if(mysql_num_rows($run)>0)
     {
        echo "<script>alert('Username $username already exits in our database. Please try with Another!')</script>";
     }

     elseif($password != $cpassword)
     {
       echo "<script>alert('passwords doesn't match')</script>";
     }
     else
     {
          $query = "INSERT INTO `registration` (name,username, password,cpassword) VALUES ('$name','$username', '$password', '$cpassword')";
          $run1=mysql_query($query);

          if($run1)
          {
              echo "<script>window.open('register.html','_self')</script>";
          }
     }
}

?> 

<html>
    <form name="register"  action="register.php" method="POST" id="register" style="font-family:ff-meta-web,Arial,sans-serif;text-align:justify;line-height:25px; font-size:12px;">
    
        <label style="margin-right:30px;"> <b> Name : </b></label>
        <input type="text" name="name" id="name" style="width:200px;" />  <br /> <br />

        <label> <b> User Name : </b></label>
        <input type="text" name="username" id="username" style="width:200px;" /> <br/><br/>

        <label> <b> Password : </b></label> 
        <input type="password" name="password" id="password" style="width:200px;" /> <br /> <br />

        <label> <b>Confirm Password : </b></label> 
        <input type="password" name="cpassword" id="cpassword" style="width:200px;" /> <br /> <br /> 

        <input type="submit" name="submit" value="Submit" style="background-color:#005797; color:#fff; border:0px; padding:5px 10px;" /> 

    </form>
</html>