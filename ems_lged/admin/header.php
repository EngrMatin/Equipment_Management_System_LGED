<header class="header black-bg">
	  <div class="sidebar-toggle-box">
		<div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
	  </div>
	     <!--logo start-->
	  <a href="dashboard.php" class="logo"><b>Equipment Management System,<span> LGED</span></b></a>
	  <!--logo end-->
	  <div class="nav notify-row" id="top_menu" >
		 <!--  notification start -->
		 
		 <div style="display:inline; ">
            <!-- User Name: <?php session_start(); echo $_SESSION['user_name'];  ?> -->
            <b>User Name: </b><span style='font-size: 15px; color: white; font-weight: bold;'><?php echo $_SESSION['user_name'];  ?>
        </div>
		
		 <!--  notification end -->
	  </div>
	  <div class="top-menu">
		<ul class="nav pull-right top-menu">
		  <li>
			<a class="logout" href="logout.php">Log out</a>
		  </li>
		</ul>
	  </div>
</header>
	 <!--header end-->