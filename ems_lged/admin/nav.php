
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">

    <?php
		$user_district_id = $_SESSION['user_district_id']; 
		$role_id          = $_SESSION['role_id']; 
    ?>
                    
          <li class="mt">
             <a class="active" href="dashboard.php"><i class="fa fa-dashboard"></i><span style='font-size: 13px; color: white; font-weight: bold;'>Dashboard</span></a>
          </li>
                    
          <li class="sub-menu"><a href="javascript:;"><i class="fa fa-tasks"></i><span style='font-size: 13px; color: white; font-weight: bold;'>Master Setup</span></a>
           		<ul class="sub">
			      <li><a href="category_list_view.php">Equipment Category</a></li>
                  <li><a href="equipment_list_view.php">Equipment Information</a></li>
                  <li><a href="driver_list_view.php">Driver/Operator Information</a></li>
              </ul>
          </li>
		  
		      <li class="sub-menu"><a href="javascript:;"><i class="fa fa-tasks"></i><span style='font-size: 13px; color: white; font-weight: bold;'>Admin Panel</span></a>
           		<ul class="sub">
			            <li><a href="pending_contractors_registration.php">Pending Registration</a></li>
			            <li><a href="contractor_list_view.php">Contractor Information</a></li>
                  <li><a href="pending_requisition_list_view.php">Pending Requisition List</a></li>
                  <li><a href="forwarded_requisition_list_view.php">Forwarded Requisition List</a></li>
                  <li><a href="processed_requisition_list_view.php">Processed Requisition List</a></li>
                  <li><a href="approved_requisition_list_view.php">Approved Requisition List</a></li>
                  <li><a href="rejected_requisition_list_view.php">Rejected Requisition List</a></li>
                  <li><a href="equipment_return_request.php">Equipment Return Requests</a></li>
                  <li><a href="allotment_archives.php">Allotment Archives</a></li>
              </ul>
          </li>

  <?php

        if ($role_id == 3 or $role_id==13 or $role_id == 21 or $role_id == 23)
        {
  ?>
		      <li class="sub-menu"><a href="javascript:;"><i class="fa fa-tasks"></i><span style='font-size: 13px; color: white; font-weight: bold;'>Report Generation</span></a>
           		<ul class="sub">
  <?php
                  if ($role_id==3 or $role_id==13)
                  {
  ?>
                      <li><a href="equipment_status_report.php">Equipment Status</a></li>
                      <li><a href="driver_status.php">Driver Status</a></li>
  <?php
                  }
  ?> 
			           <li><a href="allotment_status.php">Allotment Status</a></li>
			           <li><a href="allotment_history_report.php">Allotment History</a></li>
  
              </ul>
          </li>
  <?php
        }
  ?>
            <li class="sub-menu"><a href="javascript:;"><i class="fa fa-tasks"></i><span style='font-size: 13px; color: white; font-weight: bold;'>User Section</span></a>
                <ul class="sub">
                   <li><a href="user_account_details.php">Account Details</a></li>
                   <li><a href="change_user_password.php">Change Password</a></li>
  <?php
                    if ($role_id==3)
                    {
  ?>
                       <li><a href="user_info_list_view.php">User Information</a></li>
                       <li><a href="role_info_list_view.php">Role Information</a></li>
                       <li><a href="permission_info_list_view.php">User Permission</a></li>
  <?php
                    }
  ?>                 
                </ul>
            </li>
  
        </ul>
         
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    