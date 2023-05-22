<!DOCTYPE html>
<html>
<head>

    <?php
        // require_once("config.php");
        include('../connection.php');
        
        if(!empty($_POST["division_id"]))
        {
            $query =mysqli_query($con,"SELECT * FROM district_list WHERE division_id = '" . $_POST["division_id"] . "'");
    ?>
        <option value="">Select District</option>
    <?php
        while($row=mysqli_fetch_array($query))
        {
    ?>
        <option value="<?php echo $row["district_name"]; ?>"><?php echo $row["district_name"]; ?></option>
    <?php
        }
        }
    ?>

    <script>
        function getdistrict(val){
            $.ajax({
            type: "POST",
            url: "dependent_dropdown1.php",
            data:'division_id='+val,
            success: function(data){
                        $("#district_list-list").html(data);
                    }
            });
        }
    </script>

</head>

<body>
    <form name="insert" action="" method="post">
      <table width="100%" height="117"  border="0">
       <tr>
        <th width="27%" height="63" scope="row">Division :</th>
         <td width="73%">
          <select onChange="getdistrict(this.value);"  name="division" id="division" class="form-control" >
           <option value="">Select</option>
            <?php 
               $query =mysqli_query($con,"SELECT * FROM division_list");
                while($row=mysqli_fetch_array($query))
                { 
            ?>
                <option value="<?php echo $row['division_id'];?>"><?php echo $row['division_name'];?></option>
            <?php
                }
            ?>
          </select>
         </td>
      </tr>
      <tr>
       <th scope="row">District :</th>
        <td>
          <select name="district" id="district_list-list" class="form-control">
           <option value="">Select</option>
          </select>
        </td>
      </tr>
     </table>
    </form>

</body>

</html>
	