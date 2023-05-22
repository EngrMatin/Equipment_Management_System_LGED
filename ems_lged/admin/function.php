<?php

	function category_list()
	{
		include('connection.php');
		$sql = 'select * from equipment_category order by category_id asc';
		$result = $conn->query($sql);
		
		$category_array = array();
		
		while($row = mysqli_fetch_array($result))
		{
			$category_id                  = $row['category_id'];
			$equipment_type               = $row['equipment_type'];
			$category_array[$category_id] = $equipment_type; 
		}
		
		return $category_array;
	}

	
	function equipment_id_list()
	{
		include('connection.php');
		session_start();
		$user_district_id = $_SESSION['user_district_id'];
		//$sql = "select * from equipment_info as ei where ei.district='$district' order by equipment_id asc";
		$sql = "select * from equipment_info as ei where ei.district_id='$user_district_id' and physical_status='Running' and allotment_status=1 order by equipment_id asc";
		$result = $conn->query($sql);
		
		$equipment_id_array = array();
		
		while($row = mysqli_fetch_array($result))
		{
			$equip_id                      = $row['equip_id'];
			$equipment_id                  = $row['equipment_id'];
			$equipment_id_array[$equip_id] = $equipment_id; 
		}
		
		return $equipment_id_array;
	}
	
	
	function user_list()
	{
		include('connection.php');
		$sql = "select * from user_info order by user_name";
		$result = $conn->query($sql);
		
		$user_array = array();
		
		while($row = mysqli_fetch_array($result))
		{
			$user_id 	= $row['user_id'];
			$user_name 	= $row['user_name'];
			$user_list[$user_id] = $user_name;
		}
		return $user_list;
	}


	function role_list()
	{
		include('connection.php');
		$sql = "select * from role_info order by role_name";
		$result = $conn->query($sql);

		$role_array = array();
		
		while($row = mysqli_fetch_array($result))
		{
			$role_id 	= $row['role_id'];
			$role_name 	= $row['role_name'];
			$role_list[$role_id] = $role_name;
		}
		return $role_list;
	}

	function equipment_id_list2()
	{
		include('connection.php');
		session_start();
		$user_district_id = $_SESSION['user_district_id'];
		//$sql = "select * from equipment_info as ei where ei.district='$district' order by equipment_id asc";
		$sql = "select * from equipment_info as ei where ei.district_id='$user_district_id' order by equipment_id asc";
		$result = $conn->query($sql);
		
		$equipment_id_array = array();
		
		while($row = mysqli_fetch_array($result))
		{
			$equip_id                      = $row['equip_id'];
			$equipment_id                  = $row['equipment_id'];
			$equipment_id_array[$equip_id] = $equipment_id; 
		}
		
		return $equipment_id_array;
	}

	// function equipment_id_list3()
	// {
	// 	include('connection.php');
		
	// 	$district_id = $row['district_id'];
	// 	//$sql = "select * from equipment_info as ei where ei.district='$district' order by equipment_id asc";
	// 	$sql = "select * from equipment_info as ei where ei.district_id='$district_id' order by equipment_id asc";
	// 	$result = $conn->query($sql);
		
	// 	$equipment_id_array = array();
		
	// 	while($row = mysqli_fetch_array($result))
	// 	{
	// 		$equip_id                      = $row['equip_id'];
	// 		$equipment_id                  = $row['equipment_id'];
	// 		$equipment_id_array[$equip_id] = $equipment_id; 
	// 	}
		
	// 	return $equipment_id_array;
	// }




?>