<?php
    include_once("db.php");
    //include_once('connection.php');

    if (!empty($_POST["id"])) 
    {
        $id = $_POST['id'];
        $query = "select * from districts where division_id=$id";
        $result = mysqli_query($con, $query);
        if ($result->num_rows > 0) 
        {
            echo '<option value="">Select District</option>';
            while ($row = mysqli_fetch_assoc($result)) 
            {
                echo '<option value="' . $row['district_id'] . '">' . $row['district_name'] . '</option>';
            }
        }
    } 
    elseif (!empty($_POST['uid'])) 
    {
        $id = $_POST['uid'];
        $query1 = "select * from upazilas where district_id=$id";
        $result1 = mysqli_query($con, $query1);
        if ($result1->num_rows > 0) 
        {
            echo '<option value="">Select Upazila</option>';
            while ($row = mysqli_fetch_assoc($result1)) 
            {
                echo '<option value="' . $row['upazila_id'] . '">' . $row['upazila_name'] . '</option>';
            }
        }
    }

?>