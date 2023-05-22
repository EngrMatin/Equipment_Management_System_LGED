<!DOCTYPE html>
<html lang="en">

<head>

  <?php  include('header_resources.php');  ?>

  <style>

      body
      {
        background: #eeeeee url("img/waterbg.gif") repeat fixed right top;
      }

			.div1 
			{
				width: 80%;
				height: 40px;
				margin: 15px;
				font-size: 24px;
				font-weight: bold;
				color: #3d5170;
				display: inline-block;
			}
      #green_bold
      {
        color:green; 
        font-weight:bold;
      }
      #blue_bold
      {
        color:blue; 
        font-weight:bold;
      }
      #red_bold
      {
        color:red; 
        font-weight:bold;
      }
  </style>

</head>

<body>
  <section id="container">
    
	<?php  
		include('header.php'); 
		include('nav.php');  
    
	?>
    
    <section id="main-content">
      <section class="wrapper">
	  	<div>
			<div class="div1" align="center"> Instructions </div>
			<!-- <div class="div2" align="right">
				<a href="driver_list_view.php" class="button1">Back to Driver List</a>
			</div> -->
		</div>
	  
        
        <div class="row">
          <div class="col-md-12">
            <div class="content-panel">
        <?php

          $role_id            = $_SESSION['role_id'];

          if ($role_id==3)
          {
              echo "<ol style='color:black; font-size: 14px;'>
                <li> Go to <span id='green_bold'>Master Setup</span> -> <span id='green_bold'>Equipment Information</span> to view any equipment information </li>
                <li> Go to <span id='green_bold'>Master Setup</span> -> <span id='green_bold'>Driver Information</span> to view any driver information </li>
                <li> Go to <span id='green_bold'>Admin Panel</span> -> <span id='green_bold'>Pending Registration</span> to view the list of contractors waiting for approval of registration </li>
                <li> Go to <span id='green_bold'>Admin Panel</span> -> <span id='green_bold'>Contractor Information</span> to view Contractors information </li>
                <li> Go to <span id='green_bold'>Admin Panel</span> -> <span id='green_bold'>Pending Requisition List</span> to view Requisition Requests submitted by the Contractors </li>
                <li> Go to <span id='green_bold'>Admin Panel</span> -> <span id='green_bold'>Forwarded Requisition List</span> to view Requisition Requests forwarded by the Upazila Engineers. </li>
                <li> Go to <span id='green_bold'>Admin Panel</span> -> <span id='green_bold'>Processed Requisition List</span> to view Requisition Requests processed by the Mechanical Foreman.   </li>
                <li> Go to <span id='green_bold'>Admin Panel</span> -> <span id='green_bold'>Approved Requisition List</span> to view Requisition Requests approved by the Executive Engineers. </li>
                <li> Go to <span id='green_bold'>Admin Panel</span> -> <span id='green_bold'>Rejected Requisition List</span> to view Requisition Requests rejected by the Executive Engineers.  </li>
                <li> Go to <span id='green_bold'>Admin Panel</span> -> <span id='green_bold'>Equipment Return Requests</span> to view Equipment Return Requests submitted by the Contractors. </li>
                <li> Go to <span id='green_bold'>Admin Panel</span> -> <span id='green_bold'>Allotment Archives</span> to view archived allotments as well as the <span id='green_bold'>Bill Details</span>. </li>
                <li> Go to <span id='blue_bold'>Report Generation</span> -> <span id='blue_bold'>Equipment Status</span> to view the current status of all the equipments . </li>
                <li> Go to <span id='blue_bold'>Report Generation</span> -> <span id='blue_bold'>Driver Status</span> to view the current status of all the drivers . </li>
                <li> Go to <span id='blue_bold'>Report Generation</span> -> <span id='blue_bold'>Allotment Status</span> to view the current allotment status of all the equipments . </li>
                <li> Go to <span id='blue_bold'>Report Generation</span> -> <span id='blue_bold'>Allotment History</span> to view and print the allotment history and revenue reports </li>
                <li> Go to <span id='blue_bold'>User Section</span> -> <span id='blue_bold'>Account Details</span> -> <span id='blue_bold'>Edit Name or Mobile No</span> to change the user name or mobile number </li>
                <li> Go to <span id='blue_bold'>User Section</span> -> <span id='blue_bold'>Change Password</span> to change the current password </li>
                <li> Go to <span id='blue_bold'>User Section</span> -> <span id='blue_bold'>User Information</span> to to add or edit any User information </li>
                <li> Go to <span id='blue_bold'>User Section</span> -> <span id='blue_bold'>Role Information</span> to to add or edit Role information </li>
                <li> Go to <span id='blue_bold'>User Section</span> -> <span id='blue_bold'>User Permission</span> to to add or edit Permission information </li>
              </ol>";
          }
          else if ($role_id == 13)
          {
              echo "<ol style='color:black; font-size: 14px;'>
                <li> Go to <span id='green_bold'>Master Setup</span> -> <span id='green_bold'>Equipment Information</span> to view any equipment information </li>
                <li> Go to <span id='green_bold'>Master Setup</span> -> <span id='green_bold'>Driver Information</span> to view any driver information </li>
                <li> Go to <span id='green_bold'>Admin Panel</span> -> <span id='green_bold'>Pending Registration</span> to view the list of contractors waiting for approval of registration </li>
                <li> Go to <span id='green_bold'>Admin Panel</span> -> <span id='green_bold'>Contractor Information</span> to view Contractors information </li>
                <li> Go to <span id='green_bold'>Admin Panel</span> -> <span id='green_bold'>Pending Requisition List</span> to view Requisition Requests submitted by the Contractors </li>
                <li> Go to <span id='green_bold'>Admin Panel</span> -> <span id='green_bold'>Forwarded Requisition List</span> to view Requisition Requests forwarded by the Upazila Engineers. </li>
                <li> Go to <span id='green_bold'>Admin Panel</span> -> <span id='green_bold'>Processed Requisition List</span> to view Requisition Requests processed by the Mechanical Foreman.   </li>
                <li> Go to <span id='green_bold'>Admin Panel</span> -> <span id='green_bold'>Approved Requisition List</span> to view Requisition Requests approved by the Executive Engineers. </li>
                <li> Go to <span id='green_bold'>Admin Panel</span> -> <span id='green_bold'>Rejected Requisition List</span> to view Requisition Requests rejected by the Executive Engineers.  </li>
                <li> Go to <span id='green_bold'>Admin Panel</span> -> <span id='green_bold'>Equipment Return Requests</span> to view Equipment Return Requests submitted by the Contractors. </li>
                <li> Go to <span id='green_bold'>Admin Panel</span> -> <span id='green_bold'>Allotment Archives</span> to view archived allotments as well as the <span id='green_bold'>Bill Details</span>. </li>
                <li> Go to <span id='blue_bold'>Report Generation</span> -> <span id='blue_bold'>Equipment Status</span> to view the current status of all the equipments . </li>
                <li> Go to <span id='blue_bold'>Report Generation</span> -> <span id='blue_bold'>Driver Status</span> to view the current status of all the drivers . </li>
                <li> Go to <span id='blue_bold'>Report Generation</span> -> <span id='blue_bold'>Allotment Status</span> to view the current allotment status of all the equipments . </li>
                <li> Go to <span id='blue_bold'>Report Generation</span> -> <span id='blue_bold'>Allotment History</span> to view and print the allotment history and revenue reports </li>
                <li> Go to <span id='blue_bold'>User Section</span> -> <span id='blue_bold'>Account Details</span> -> <span id='blue_bold'>Edit Name or Mobile No</span> to change the user name or mobile number </li>
                <li> Go to <span id='blue_bold'>User Section</span> -> <span id='blue_bold'>Change Password</span> to change the current password </li>
                
              </ol>";
          }
			    else if ($role_id==21)
          {
              echo "<ol style='color:black; font-size: 14px;'>
                <li> Go to <span id='blue_bold'>Master Setup</span> -> <span id='blue_bold'>Equipment Information</span> to add or edit any equipment information </li>
                <li> Go to <span id='blue_bold'>Master Setup</span> -> <span id='blue_bold'>Driver Information</span> to add or edit any driver information </li>
                <li> Go to <span id='green_bold'>Admin Panel</span> -> <span id='red_bold'>Pending Registration</span> to view the list of contractors waiting for approval of registration </li>
                <li> Go to <span id='green_bold'>Admin Panel</span> -> <span id='green_bold'>Contractor Information</span> to view Contractors information </li>
                <li> Go to <span id='green_bold'>Admin Panel</span> -> <span id='green_bold'>Pending Requisition List</span> to view Requisition Requests submitted by the Contractors </li>
                <li> Go to <span id='green_bold'>Admin Panel</span> -> <span id='green_bold'>Forwarded Requisition List</span> to view Requisition Requests forwarded by the Upazila Engineers. </li>
                <li> Go to <span id='blue_bold'>Admin Panel</span> -> <span id='red_bold'>Processed Requisition List</span> to view Requisition Requests processed by the Mechanical Foreman.<br> You will get an <span style='background-color:lightpink; font-weight:bold;'>Approve</span> button to proceed to Approval Process  </li>
                <li> Go to <span id='green_bold'>Admin Panel</span> -> <span id='green_bold'>Approved Requisition List</span> to view Requisition Requests approved by you.<br> You will get a <span style='background-color:lightblue; font-weight:bold;'>Restore Equipment</span> button to proceed to Restore Equipment Process which you can use in case of Emergency </li>
                <li> Go to <span id='green_bold'>Admin Panel</span> -> <span id='green_bold'>Rejected Requisition List</span> to view Requisition Requests rejected by you.  </li>
                <li> Go to <span id='blue_bold'>Admin Panel</span> -> <span id='blue_bold'>Equipment Return Requests</span> to view Equipment Return Requests submitted by the Contractors.<br> You will get a <span style='background-color:lightpink; font-weight:bold;'>Restore Equipment</span> button to proceed to Restore Equipment Process. </li>
                <li> Go to <span id='green_bold'>Admin Panel</span> -> <span id='green_bold'>Allotment Archives</span> to view archived allotments as well as the <span id='green_bold'>Bill Details</span>. </li>
                <li> Go to <span id='blue_bold'>Report Generation</span> -> <span id='blue_bold'>Allotment Status</span> to view the current allotment status of all the equipments . </li>
                <li> Go to <span id='blue_bold'>Report Generation</span> -> <span id='blue_bold'>Allotment History</span> to view and print the allotment history and revenue reports </li>
                <li> Go to <span id='blue_bold'>User Section</span> -> <span id='blue_bold'>Account Details</span> -> <span id='blue_bold'>Edit Name or Mobile No</span> to change the user name or mobile number </li>
                <li> Go to <span id='blue_bold'>User Section</span> -> <span id='blue_bold'>Change Password</span> to change the current password </li>
              </ol>";
          }
          else if ($role_id==23)
          {
              echo "<ol style='color:black; font-size: 14px;'>
                <li> Go to <span id='blue_bold'>Master Setup</span> -> <span id='blue_bold'>Equipment Information</span> to add or edit any equipment information </li>
                <li> Go to <span id='blue_bold'>Master Setup</span> -> <span id='blue_bold'>Driver Information</span> to add or edit any driver information </li>
                <li> Go to <span id='green_bold'>Admin Panel</span> -> <span id='green_bold'>Pending Registration</span> to view the list of contractors waiting for approval of registration </li>
                <li> Go to <span id='green_bold'>Admin Panel</span> -> <span id='green_bold'>Contractor Information</span> to view Contractors information </li>
                <li> Go to <span id='green_bold'>Admin Panel</span> -> <span id='green_bold'>Pending Requisition List</span> to view Requisition Requests submitted by the Contractors </li>
                <li> Go to <span id='blue_bold'>Admin Panel</span> -> <span id='red_bold'>Forwarded Requisition List</span> to view Requisition Requests forwarded by the Upazila Engineers. <br> You will get a <span style='background-color:lightpink; font-weight:bold;'>Proceed</span> button to proceed to Approval Process </li>
                <li> Go to <span id='green_bold'>Admin Panel</span> -> <span id='green_bold'>Processed Requisition List</span> to view Requisition Requests processed by you.  </li>
                <li> Go to <span id='blue_bold'>Admin Panel</span> -> <span id='blue_bold'>Approved Requisition List</span> to view Requisition Requests approved by the Executive Engineer. </li>
                <li> Go to <span id='blue_bold'>Admin Panel</span> -> <span id='blue_bold'>Rejected Requisition List</span> to view Requisition Requests rejected by the Executive Engineer. </li>
                <li> Go to <span id='blue_bold'>Admin Panel</span> -> <span id='blue_bold'>Equipment Return Requests</span> to view Equipment Return Requests submitted by the Contractors. <br> You will get a <span style='background-color:lightpink; font-weight:bold;'>Restore Equipment</span> button to proceed to Restore Equipment Process.  </li>
                <li> Go to <span id='green_bold'>Admin Panel</span> -> <span id='green_bold'>Allotment Archives</span> to view archived allotments as well as the <span id='green_bold'>Bill Details</span>. </li>
                <li> Go to <span id='blue_bold'>Report Generation</span> -> <span id='blue_bold'>Allotment Status</span> to view the current allotment status of all the equipments . </li>
                <li> Go to <span id='blue_bold'>Report Generation</span> -> <span id='blue_bold'>Allotment History</span> to view and print the allotment history and revenue reports </li>
                <li> Go to <span id='blue_bold'>User Section</span> -> <span id='blue_bold'>Account Details</span> -> <span id='blue_bold'>Edit Name or Mobile No</span> to change the user name or mobile number </li>
                <li> Go to <span id='blue_bold'>User Section</span> -> <span id='blue_bold'>Change Password</span> to change the current password </li>
              </ol>";
          }
          else if ($role_id==31)
          {
              echo "<ol style='color:black; font-size: 14px;'>
                <li> Go to <span id='green_bold'>Master Setup</span> -> <span id='green_bold'>Equipment Information</span> to view equipment information </li>
                <li> Go to <span id='green_bold'>Master Setup</span> -> <span id='green_bold'>Driver Information</span> to view driver information </li>
                <li> Go to <span id='green_bold'>Admin Panel</span> -> <span id='green_bold'>Pending Registration</span> to view the list of contractors waiting for approval of registration </li>
                <li> Go to <span id='green_bold'>Admin Panel</span> -> <span id='green_bold'>Contractor Information</span> to view Contractors information </li>
                <li> Go to <span id='blue_bold'>Admin Panel</span> -> <span id='red_bold'>Pending Requisition List</span> to view Requisition Requests submitted by the Contractors. <br> You will get a <span style='background-color:lightpink; font-weight:bold;'>Forward</span> button to proceed to the Forwarding Process  </li>
                <li> Go to <span id='green_bold'>Admin Panel</span> -> <span id='green_bold'>Forwarded Requisition List</span> to view Requisition Requests forwarded by the Upazila Engineers. </li>
                <li> Go to <span id='green_bold'>Admin Panel</span> -> <span id='green_bold'>Processed Requisition List</span> to view Requisition Requests processed by the Mechanical Foreman.  </li>
                <li> Go to <span id='green_bold'>Admin Panel</span> -> <span id='green_bold'>Approved Requisition List</span> to view Requisition Requests approved by the Executive Engineer. </li>
                <li> Go to <span id='green_bold'>Admin Panel</span> -> <span id='green_bold'>Rejected Requisition List</span> to view Requisition Requests rejected by the Executive Engineer.  </li>
                <li> Go to <span id='green_bold'>Admin Panel</span> -> <span id='green_bold'>Equipment Return Requests</span> to view Equipment Return Requests submitted by the Contractors. </li>
                <li> Go to <span id='green_bold'>Admin Panel</span> -> <span id='green_bold'>Allotment Archives</span> to view archived allotments as well as the <span id='green_bold'>Bill Details</span>. </li>
                <li> Go to <span id='blue_bold'>User Section</span> -> <span id='blue_bold'>Account Details</span> -> <span id='blue_bold'>Edit Name or Mobile No</span> to change the user name or mobile number </li>
                <li> Go to <span id='blue_bold'>User Section</span> -> <span id='blue_bold'>Change Password</span> to change the current password </li>
                
              </ol>";
          }


        ?>
            </div>
          </div>
        
        </div>
        
      </section>
    </section>
    
  </section>
  
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
