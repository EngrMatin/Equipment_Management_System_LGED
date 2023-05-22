<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head id="ctl00_Head1">
		<title> Contractors Registration </title>
			<meta name="viewport" content="width=device-width, initial-scale=1.0" />
			<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
			<meta name="description" content="Bangladesh, LGED, Bangladesh LGED, Local Government Engineering Department, Local Government Engineering Department (LGED) " />
			<meta name="keywords" content="Bangladesh, LGED, Bangladesh LGED, Local Government Engineering Department, Local Government Engineering Department (LGED) " />
			<meta name="distribution" content="Global" />
			<meta name="language" content="en-gb" />
			<meta name="copyright" content="Copyright LGED, 2019" />
			<meta name="rating" content="General" />
			<meta name="audience" content="All" />
			<meta name="DevelopedBy" content="PRIME TECH , www.primetechbd.com" />
			<meta name="doc-type" content="Web Page," />
			<meta name="doc-class" content="Published" />
			<link rel="shortcut icon" href="App_Themes/Default/_lib/common/favicon.ico" />
			<link rel="icon" type="image/gif" href="App_Themes/Default/_lib/common/animated_favicon1.gif" />
			<link href="App_Themes/Default/_lib/css/style.css" rel="stylesheet" type="text/css" />

    		<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
		
			<script type="text/javascript" src="js/vmenu.js" ></script>
		
			<script type="text/javascript" src="js/jquery_cycle.js" ></script>
		
			<script type="text/javascript" src="js/AC_RunActiveContent.js"></script>
		
			<script type="text/javascript" src="js/jquery-easing-1.3.pack.js" ></script>
		
			<script type="text/javascript" src="js/jquery-easing-compatibility.1.2.pack.js" ></script>
		
			<script type="text/javascript" src="js/coda-slider.1.1.1.pack.js" ></script>
		
			<script type="text/javascript">
				$(document).ready(function() {
					$('.slideshow').cycle({
						fx: 'fade' // choose your transition type, ex: fade, scrollUp, shuffle, etc...
					});
				});
			</script>

    		
    <?php
	  include('connection.php');

	  $division = $district = $upazila = $road_name = $chainage = $layer = $equipment_type = $requisition_from_date = $requisition_to_date = $request_date = $name = $address = '';

		$divisions = array(); 
		$districts = array();
		$upazilas  = array();

		if($_SERVER['REQUEST_METHOD'] == "GET")
		{
			// Data Dropdown for Division . . . . . . . . . . .
			$sql = "SELECT * FROM division_list Order By division_name"; 
			$result = mysqli_query($conn, $sql);
			while($row = mysqli_fetch_assoc($result))
			{
				array_push($divisions, $row['division_name']);
			}

			// Data Dropdown for Division . . . . . . . . . . .
			$sql = "SELECT * FROM district_list Order By district_name"; 
			$result = mysqli_query($conn, $sql);
			while($row = mysqli_fetch_assoc($result))
			{
				array_push($districts, $row['district_name']);
			}

			// Data Dropdown for Division . . . . . . . . . . .
			$sql = "SELECT * FROM upazila_list Order By upazila_name"; 
			$result = mysqli_query($conn, $sql);
			while($row = mysqli_fetch_assoc($result))
			{
				array_push($upazilas, $row['upazila_name']);
			}
			mysqli_close($conn);
		}
	  
	  if(isset($_POST['submit']))
	  {
	  
		$division                  = $_POST['division'];
		$district                  = $_POST['district'];
		$upazila                   = $_POST['upazila'];
		$road_name                 = $_POST['road_name'];
		$chainage                  = $_POST['chainage'];
		$layer                     = $_POST['layer'];
		$equipment_type            = $_POST['equipment_type'];
		$requisition_from_date     = $_POST['requisition_from_date'];
		$requisition_to_date       = $_POST['requisition_to_date'];
		$request_date              = $_POST['request_date'];
		$name                      = $_POST['name'];
		$address                   = $_POST['address'];
		
		
		$sql ="insert into requisition_info(division, district, upazila, road_name, chainage, layer, equipment_type, requisition_from_date, requisition_to_date, request_date, name, address) values('$division', '$district', '$upazila', '$road_name', '$chainage', '$layer', '$equipment_type', '$requisition_from_date', '$requisition_to_date', '$request_date', '$name', '$address')";
		
		//echo $sql; exit("OK");
		
		$result = $conn->query($sql);
		if($result == 1)
		{
		  	$message = "Request received successfully";
            header("Location: LGEDAboutUS.php?message=".$message);
		}
		 
	  }
	?>
			
	  
			
			<script type="text/javascript">
				$(document).ready(function() 
				{
					var toggle = $('#toggle').click(function() 
					{
						var paused = slideshow.is(':paused');
						slideshow.cycle(paused ? 'resume' : 'pause', true);
					});
		
					var slideshow = $('.slideshow2').cycle({
						pause: true,
						delay: 8000,
						fx: 'scrollUp',
		
						paused: function(cont, opts, byHover) 
						{
							!byHover && toggle.html('Resume');
							//$('#status').html('paused');
						},
						resumed: function(cont, opts, byHover) 
						{
							!byHover && toggle.html('Pause');
							//$('#status').html('running');
						}
					});
				});
			</script>

			<script type="text/javascript">
				verticalmenu.init({
					mainmenuid: "menu2", //Menu DIV id
					orientation: 'v', //Horizontal or vertical menu: Set to "h" or "v"
					classname: 'verticalmenu-v', //class added to menu's outer DIV
					//customtheme: ["#804000", "#482400"],
					contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
				})
		
			</script>
		
			<script type="text/javascript">
				verticalmenu.init({
					mainmenuid: "menu3", //Menu DIV id
					orientation: 'v', //Horizontal or vertical menu: Set to "h" or "v"
					classname: 'verticalmenu-v', //class added to menu's outer DIV
					//customtheme: ["#804000", "#482400"],
					contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
				})
		
			</script>

    

		<style>
			/*! http://responsiveslides.com v1.54 by @viljamis */
			.rslides
			{
				position: relative;
				list-style: none;
				overflow: hidden;
				width: 100%;
				padding: 0;
				margin: 0;
			}

			.rslides li
			{
				-webkit-backface-visibility: hidden;
				position: absolute;
				display: none;
				width: 100%;
				left: 0;
				top: 0;
			}

			.rslides li:first-child
			{
				position: relative;
				display: block;
				float: left;
			}

			.rslides img
			{
				display: block;
				height: auto;
				float: left;
				width: 100%;
				border: 0;
			}

			.rslides img
			{
				height: 220px;
			}
		</style>
	
		<script src="App_Themes/Default/_lib/js/responsiveslides.min.js"></script>
	
		<script>
			$(function() 
			{
				$("#front-image-slider").responsiveSlides({
					auto: true,
					pager: false,
					nav: true,
					speed: 2000,
					maxwidth: 960,
					namespace: "callbacks"
				});
			});
		</script>

		<link href="App_Themes/Default/_lib/css/ie.css" type="text/css" rel="stylesheet" />
		<link href="css/jquery.fancybox-1.3.1.css" type="text/css" rel="stylesheet" />
		<link href="App_Themes/Default/_lib/css/lightbox.css" type="text/css" rel="stylesheet" />
		<link href="App_Themes/Default/_lib/css/Print.css" type="text/css" rel="stylesheet" />
		<link href="App_Themes/Default/_lib/css/style.css" type="text/css" rel="stylesheet" />
	</head>
	
	<body>
    	<div id="ctl00_divBody" style="font-family:Verdana,Arial, Helvetica, sans-serif;font-size:11px;">
        	
			<script type="text/javascript">
				//<![CDATA[
				var theForm = document.forms['aspnetForm'];
				if (!theForm) 
				{
					theForm = document.aspnetForm;
				}
				function __doPostBack(eventTarget, eventArgument) 
				{
					if (!theForm.onsubmit || (theForm.onsubmit() != false)) 
					{
						theForm.__EVENTTARGET.value = eventTarget;
						theForm.__EVENTARGUMENT.value = eventArgument;
						theForm.submit();
					}
				}
				//]]>
			</script>


			<script type="text/javascript" src="/WebResource.axd?d=YN5gnEfZxDkA49dIhgSfDHUKmEgHpsoIicKwFp_v1Ud27FOO-ui3T36G94q9NXvyFuA34OLrDvWnWdsiZlR64KD_dC41&amp;t=636041026940000000" ></script>


			<script type="text/javascript" src="/ScriptResource.axd?d=Sb863ajsgbyzrfR_TcR4aBDu95CGZmhW9xE4JcKkBA7Jz6lvx4_ULF2OtFoTxaL2-YpFxrs1VRLOLK5FkaAnF9FqEZet-k41IT9iqO65kF2ZPNxZPCamLrIIRrC69Fy38aL1rUWz8itbxd2Chtg5q89OmbNTLUGgtS_XW6D6a5wm_TCh0&amp;t=3f4a792d" ></script>
			
			<script type="text/javascript">
				//<![CDATA[
				if (typeof(Sys) === 'undefined') throw new Error('ASP.NET Ajax client-side framework failed to load.');
				//]]>
			</script>

			<script type="text/javascript" src="/ScriptResource.axd?d=ndEpl9cFF6FMAhLjgawei269iEfygVnPcNBuJkLOGvd0oBtlsQyXeJPXPRrY1eiXk8IaDUSkwOYAibwWIgbvxwP6JvtEWwR1v4RSIlNW4R1G7mmJ2IXrkNp8-tncUTnsdx4St8NmxOWyFSFnwYnJDEnjs37F9yUTQKzoDYXVj5YlZ3F50&amp;t=3f4a792d" ></script>
			<script type="text/javascript" src="/LGEDAboutUS.aspx?_TSM_HiddenField_=ctl00_ToolkitScriptManager1_HiddenField&amp;_TSM_CombinedScripts_=%3b%3bAjaxControlToolkit%2c+Version%3d3.0.30512.32943%2c+Culture%3dneutral%2c+PublicKeyToken%3d28f01b0e84b6d53e%3aen-US%3ab0c95330-b069-4689-bee2-146971cb82a5%3a865923e8%3a411fea1c%3ae7c87f07%3a91bd373d%3afc56e238" ></script>
			
			
			<div>
				<input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="ABCC502D" />
			</div>
        
			<script type="text/javascript">
				//<![CDATA[
				Sys.WebForms.PageRequestManager._initialize('ctl00$ToolkitScriptManager1', document.getElementById('aspnetForm'));
				Sys.WebForms.PageRequestManager.getInstance()._updateControls([], [], [], 90);
				//]]>
			</script>

        <div id="ctl00_Div1" class="header">     

		<link rel="stylesheet" href="//www.google.com/cse/style/look/default.css" type="text/css" />
		<link href="App_Themes/Default/_lib/css/style.css" rel="stylesheet" type="text/css" />       <!-- White Background !!!!!! -->
	
		<style>
			* 
			{
				box-sizing: border-box;
			}
		
			body 
			{
				font-family: Verdana, sans-serif;
			}
		
			.mySlides 
			{
				display: none;
			}
		
			img 
			{
				vertical-align: middle;
			}
			/* Slideshow container */ 
			.slideshow-container 
			{
				max-width: 1000px;
				position: relative;
				margin: auto;
			}
			/* Caption text */ 
			.text 
			{
				color: #f2f2f2;
				font-size: 15px;
				padding: 8px 12px;
				position: absolute;
				bottom: 8px;
				width: 100%;
				text-align: center;
			}
			/* Number text (1/3 etc) */ 
			.numbertext 
			{
				color: #f2f2f2;
				font-size: 12px;
				padding: 8px 12px;
				position: absolute;
				top: 0;
			}
			/* The dots/bullets/indicators */ 
			.dot 
			{
				height: 15px;
				width: 15px;
				margin: 0 2px;
				background-color: #bbb;
				border-radius: 50%;
				display: inline-block;
				transition: background-color 0.6s ease;
			}
		
			.active 
			{
				background-color: #717171;
			}
			/* Fading animation */ 
			.fade 
			{
				-webkit-animation-name: fade;
				-webkit-animation-duration: 2s;
				animation-name: fade;
				animation-duration: 4s;
			}
		
			@-webkit-keyframes
			@-webkit-keyframes
		
			@-webkit-keyframesfade 
			{
				from 
				{
					opacity: .4;
				}
		
				to 
				{
					opacity: 1;
				}
			}
		
			@keyframesfade 
			{
				from 
				{
					opacity: .4;
				}
		
				to 
				{
					opacity: 1;
				}
			}
			/* On smaller screens, decrease text size */
		
			@mediaonlyscreenand(max-width:300px) 
			{
				.text 
				{
					font-size: 11px;
				}
			}
		</style>

		<script>
			var slideIndex = 0;
			showSlides();
		
			function showSlides() 
			{
				var i;
				var slides = document.getElementsByClassName("mySlides");
				var dots = document.getElementsByClassName("dot");
				for (i = 0; i < slides.length; i++) 
				{
					slides[i].style.display = "none";
				}
				slideIndex++;
				if (slideIndex > slides.length) { slideIndex = 1 }
				for (i = 0; i < dots.length; i++) 
				{
					dots[i].className = dots[i].className.replace(" active", "");
				}
				slides[slideIndex - 1].style.display = "block";
				dots[slideIndex - 1].className += " active";
				setTimeout(showSlides, 4000); // Change image every 2 seconds
			}
		</script>

		<script src="//www.google.com/jsapi" type="text/javascript"></script>  <!--//https://www.gstatic.com/charts/loader.js--> <!--loader.js-->

		<script type="text/javascript">
			google.load('search', '1', { language: 'en' });
			function inputFocus() 
			{
		
				document.getElementById('query-input').style['background'] = '';
			}
		
			function inputBlur() 
			{
				var queryInput = document.getElementById('query-input');
				if (!queryInput.value) 
				{
					queryInput.style['background'] =
					  'white url(http://www.google.com/coop/images/'
					  + 'google_custom_search_watermark.gif) no-repeat 0% 50%';
				}
			}
		
			function init() 
			{
				google.search.CustomSearchControl.attachAutoCompletion(
					'001745425941308551654:ov1iqxskx10',
					document.getElementById('query-input'),
					'two-page-form');
				inputBlur();
			}
		
			function submitQuery() 
			{
				window.location = 'Search.aspx?q='
					+ encodeURIComponent(
						document.getElementById('query-input').value);
				return false;
			}
			google.setOnLoadCallback(init);
		
			//  google.setOnLoadCallback(function() {
			//    var customSearchControl = new google.search.CustomSearchControl('001745425941308551654:8cttf6krfrs');
			//    customSearchControl.setResultSetSize(google.search.Search.FILTERED_CSE_RESULTSET);
			//    customSearchControl.draw('cse');
			//  }, true);
		</script>


	<div class="casing">

		<script type="text/javascript">
			function OnClientPopulating(sender, e) 
			{
				sender._element.className = "loading";
			}
			function OnClientCompleted(sender, e) 
			{
				sender._element.className = "";
			}
	
		</script>


		<div id="ctl00_Header1_dvBanner" class="banner">
			
			<ul class="rslides" id="front-image-slider">
				<li>
					<img src="images/pm_pic_banner3.jpg" />
				</li>
				<li>
					<img src="images/Road.jpg" />
				</li>
				<li>
					<img src="images/Bridge.jpg" />
				</li>
				<li>
					<img src="images/Khal.jpg" />
				</li>
				<li>
					<img src="images/FlyOver.jpg" />
				</li>
				<li>
					<img src="images/FlyOver2.jpg" />
				</li>
				<li>
					<img src="images/Pic_1.jpg" />
				</li>
				<li>
					<img src="images/Pic_2.jpg" />
				</li>
				<li>
					<img src="images/Pic_3.jpg" />
				</li>
				<li>
					<img src="images/Pic_4.jpg" />
				</li>
				<li>
					<img src="images/Pic_6.jpg" />
				</li>
				<li>
					<img src="images/Rubber_Dum.jpg" />
				</li>           
				
			</ul>
		</div>
		
    	<div class="main">
          <div class="mid_head">
            <span class="toggleBtn">
                <input type="image" name="ctl00$Header1$btnBangla" id="ctl00_Header1_btnBangla" src="images/btnBangla.png" style="border-width:0px;float: right;" />
                
                <ul id="ctl00_Header1_ulEn" class="top_nav">
                    
                    <li>
                        <a id="ctl00_Header1_hylnkHome" href="LGEDAboutUS.php">Home</a></li>
                    <li>
                        <a id="ctl00_Header1_hylnkProjectList" href="ProjectList.aspx">Projects </a>
                    </li>
                    <li>
                        <a id="ctl00_Header1_hylnkDigitalMap" href="ViewMap.aspx">Digital Map </a>
                    </li>
                    <li>
                        <a id="ctl00_Header1_hylnkRoadDB" href="ViewRoad2.aspx">Road & Market Database </a>
                    </li>
						
					<li>
						<a id="ctl00_Header1_hylnkRoadDB" href="equipment_requisition.php">Requisition Form </a>
					</li>

                    <li>
                        <a id="ctl00_Header1_hylnkRoadDB" href="LGEDAboutUS.php">Log out </a>
                    </li>
					
                    <li>
                        <a id="ctl00_Header1_HyperLink5" href="Admin/Login.aspx" target="_blank">Admin_Login  </a>
                    </li>
                    
                    
                </ul>
                
             </span>
          </div>
       </div>
	   
    	<div id="ctl00_Header1_UpdateProgress1" style="visibility:hidden;display:block;">
		
            <p class="Progress">
                Loading...
                <img src="images/ajax-loader.gif" id="ctl00_Header1_imgLoder" />  
            </p>
		</div>
    
    
	</div>

        </div>
        <div class="casing">
            <div class="main">
                <div class="left">
                    <div class="boxheader5">
                        <div>
                            <span id="ctl00_lblMainMenuTitle" class="label">Main Menu</span>
                        </div>
                    </div>
                    
	<div id="menu2" class="verticalmenu-v">
    
    <ul id="ctl00_ctlLGEDMenu1_dvEn" style="font-size:10px;">      
        <li><a href="LGEDAboutUS.php"><span class="bullet"></span>Home</a></li>  
        <li><a href="#"><span class="bullet"></span>Units of LGED</a>
            <ul class="second_big">
                <li><a target="_blank" href="UnitHome.aspx?unitID=15">
                    <span class="bullet"></span>Administrative Unit</a></li>
                <li><a target="_blank" href="UnitHome.aspx?unitID=1">
                    <span class="bullet"></span>Planning Section</a></li>
                <li><a target="_blank" href="UnitHome.aspx?unitID=2">
                    <span class="bullet"></span>Monitoring &amp; Evalutation Section</a></li>
                <li><a target="_blank" href="UnitHome.aspx?unitID=3">
                   <span class="bullet"></span>Human Resources Development, Quality Control & Environment</a></li>
                <li>
                    <a href="#"> <span class="bullet"></span>Design Unit</a>        
                    <ul style="width: 400px">
                        <li><a target="_blank" href="UnitHome.aspx?unitID=4">
                        <span class="bullet"></span>Road & Building Design Section</a></li>
                        <li><a target="_blank" href="UnitHome.aspx?unitID=41">
                           <span class="bullet"></span>Bridge Design Section</a></li>
                      
                    </ul>
                
                </li>
                   
                <li><a href="#"> <span class="bullet"></span> ICT Unit</a>
                    <ul style="width: 400px">
                        <li><a target="_blank" href="UnitHome.aspx?unitID=5">
                            <span class="bullet"></span>ICT Unit (GIS Section)</a></li>
                        <li><a target="_blank" href="UnitHome.aspx?unitID=6">
                           <span class="bullet"></span> ICT Unit (MIS Section)</a></li>
                        
                    </ul>
                </li>
                <li><a target="_blank" href="UnitHome.aspx?unitID=7">
                    <span class="bullet"></span>Road &amp; Bridge Maintenance Unit</a></li>
                <li><a target="_blank" href="UnitHome.aspx?unitID=9">
                    <span class="bullet"></span>Procurement Section</a></li>
                <li><a target="_blank" href="UnitHome.aspx?unitID=10">
                    <span class="bullet"></span>Urban Management Unit</a></li>
                <li><a href="#"><span class="bullet"></span>IWRM Unit</a>
                    <ul style="width: 400px">
                        
                        <li><a target="_blank" href="UnitHome.aspx?unitID=11">
                            <span class="bullet"></span>Water Resources Maintenance Section</a></li>
                        <li><a target="_blank" href="UnitHome.aspx?unitID=17">
                            <span class="bullet"></span>Water Resources Infrustructure Planning Section</a></li>
                    </ul>
                </li>
                <li><a target="_blank" href="UnitHome.aspx?unitID=13">
                    <span class="bullet"></span>Quality Control Section</a></li>
                
                
                <li><a target="_blank" href="UnitHome.aspx?unitID=12">
                    <span class="bullet"></span>Audit Unit</a></li>
               
                
            </ul>
        </li>
        <li><a href="ProjectList.aspx"><span class="bullet"></span>Projects</a></li>
        <li><a href="ViewMap.aspx"><span class="bullet"></span>Digital Map</a></li>
        <li><a href="ViewRoad2.aspx"><span class="bullet"></span>Road Database</a></li>
        <li><a href="DownloadNOCNew.aspx"><span class="bullet"></span>NOC & GO</a></li>
        <li><a href=""><span class="bullet"></span>Documents & Forms</a>
            <ul>
                <li><a href="DownloadForms.aspx?formType=1"><span class="bullet"></span>Forms</a></li>
                <li><a href="DownloadForms.aspx?formType=2"><span class="bullet"></span>Documents</a></li>
                <li><a href="DownloadForms.aspx?formType=3"><span class="bullet"></span>Manuals</a></li>
            </ul>
        </li>
        <li><a href="DevelopmentFairView.aspx"><span class="bullet"></span>Unnayan Mela 2022 (Folder)</a></li>
        
      </ul>
	</div>

				<div id="menu3" class="verticalmenu-v">
					
				</div>
                    
                </div>

                <div class="mid">
                    
                <div class="mid">           
    	<div id="ctl00_ContentPlaceHolder1_dvEng">
        <h2 class="headline2">
            <span>Requisition for Equipment</span></h2>
        <div class="mid_wrap3" style="margin-top: 0px; width: 490px;">
		
		
		
	<script>

		function validation()
		{
			if(document.myform.name.value=="")
			{
				alert("Pls input your name");
		 		document.myform.name.focus();
		  		return false;
			}  
		  	return true;
		}

	</script>

	
	<section id="container">
    <section id="main-content">
      <section class="wrapper">
        <h3> Requisition Form</h3>
        <div class="row mt">
          <div class="col-lg-12">
            <div class="form-panel">
              
              <form class="form-horizontal style-form" action="equipment_requisition.php" method="post">
			  
			  	<div class="form-group">
                   <label class="col-sm-2 col-sm-2 control-label">Division<span style="color:#FF0000">*</span></label>
                     <div class="col-sm-6">
                       <!--<input type="text" name="division" class="form-control" required>-->
					    <select class="form-select form-control" name="division" id="division" required>
						  <option value="" disabled selected hidden>Select Division</option> 
							<?php 
								foreach($divisions as $division_name)
								{
									echo "<option value=\"$division_name\">$division_name</option>";
								}
							?>
					    </select>
                     </div>
                </div>
								
				<div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">District<span style="color:#FF0000">*</span></label>
                    <div class="col-sm-6">
                       <!--<input type="text" name="district" class="form-control" required>-->
					    <select class="form-select form-control" name="district" id="district" required>
						  <option value="" disabled selected hidden>Select District</option> 
							<?php 
								foreach($districts as $district_name)
								{
									echo "<option value=\"$district_name\">$district_name</option>";
								}
							?>
						</select>
                     </div>
                </div>
			  
			  	<div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Upazila<span style="color:#FF0000">*</span></label>
                      <div class="col-sm-6">
                        <!--<input type="text" name="upazila" class="form-control" required>-->
					      <select class="form-select form-control" name="upazila" id="upazila" required>
							<option value="" disabled selected hidden>Select Upazila</option> 
							  <?php 
								foreach($upazilas as $upazila_name)
								{
									echo "<option value=\"$upazila_name\">$upazila_name</option>";
								}
							  ?>
						  </select>
                      </div>
                </div>
				
			     <div class="form-group">
                   <label class="col-sm-2 col-sm-2 control-label">Name of Road<span style="color:#FF0000">*</span></label>
                     <div class="col-sm-6">
                       <input type="text" name="road_name" class="form-control" required>
                     </div>
                 </div>
				
				
				  <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Chainage<span style="color:#FF0000">*</span></label>
                      <div class="col-sm-6">
                        <input type="text" name="chainage" class="form-control" required>
                      </div>
                  </div>
				
				  <div class="form-group">
                   <label class="col-sm-2 col-sm-2 control-label">Layer<span style="color:#FF0000">*</span></label>
                     <div class="col-sm-6">
                         <input type="text" name="layer" class="form-control" required>
                     </div>
                  </div>


				<div class="form-group">
				  <label class="col-sm-2 col-sm-2 control-label">Equipment Type<span style="color:#FF0000">*</span></label>
				  <div class="col-sm-6">
					<input type="text" name="equipment_type" class="form-control" required>
				  </div>
				</div>


                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Requisition From<span style="color:#FF0000">*</span></label>
                  <div class="col-sm-6">
                    <input type="date" name="requisition_from_date" class="form-control" required>
                  </div>
                </div>
				
				<div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Requisition To<span style="color:#FF0000">*</span></label>
                  <div class="col-sm-6">
                    <input type="date" name="requisition_to_date" class="form-control" required>
                  </div>
                </div>
				
				
				 <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Date of Request</label>
                  <div class="col-sm-6">
                    <input type="date" name="request_date" class="form-control" required>
                  </div>
                 </div>
				 
				 <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Name of Contractor</label>
                  <div class="col-sm-6">
                    <input type="text" name="name" class="form-control" required>
                  </div>
                 </div>
				 
				 <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Address of Contractor</label>
                  <div class="col-sm-6">
                    <input type="text" name="address" class="form-control" required>
                  </div>
                 </div>
				
				 <div class="form-group">
                  <div class="col-sm-8" align="center">
                    <input type="submit" name="submit" class="btn btn-primary" value="Submit">
                  </div>
                 </div>
                		
              </form>
            </div>
          </div>
        </div>
        </div>
        <!-- /row -->
      </section>
      <!-- /wrapper -->
    </section>
   
  </section>
  
  
  

			
            
            <br />

            <br />
            <br />
            
            <br />
            
            <div class="widget">
                <div class="statement" style="padding: 10px;">
                    <h2>
                        Mission of LGED</h2>
                    <p style="line-height: 21px !important;">
                        Development and management of local infrastructure for increasing farm/non-farm
                        production, generating employment, improving socio-economic condition, promoting
                        local governance, reducing poverty and acting as agent of change at the local level.</p>
                </div>
                <div class="statement" style="padding: 10px;">
                    <h2>
                        Vision of LGED</h2>
                    <p style="line-height: 21px !important;">
                        LGED would continue to remain professionally competent, efficient and effective
                        public sector agency for performing the interrelated and complementary functions
                        of:</p>
                    
                    <div class="miss_vis">
                        <div class="bullet">
                        </div>
                        <div class="miss_div">
                            Developing, maintaining and managing transport, trading and small scale water resources
                            infrastructure at the local level by ensuring LGI and community participation and
                            taking care of environmental and social issues.</div>
                    </div>
                    <div class="miss_vis">
                        <div class="bullet">
                        </div>
                        <div class="miss_div">
                            Providing technical and institutional support to strengthen the local government
                            institutions and serving local communities and other stakeholders.</div>
                    </div>
                </div>
             </div>
            
          </div>
       </div>
    

       </div>
            <div id="ctl00_rightDiv" class="right">
                    
                <div class="boxheader5">
                   <div id="ctl00_div2">
                      <span id="ctl00_lblMinisterHeader" class="label">Hon'ble Minister</span>
                    </div>
                 </div>
                  <div class="box2">
                     <div style="margin-top: 4px; height: 140px;">
                         <div class="news_title" style="margin: 0; text-align: center;">
                             <br />
                             <a id="ctl00_HyperLink2" href="AboutLGRDMinister.aspx"><img id="ctl00_Image3" src="images/min_TajulIslam.jpg" style="height:110px;width:90px;border-width:0px;margin: Center;" /></a>
                             <br />
                             <a id="ctl00_HyperLink3" href="AboutLGRDMinister.aspx"><span id="ctl00_lblMinister" class="label" style="font-size:15px;">Mr. Md Tazul Islam,  MP</span></a>
                             <br />
                             <a id="ctl00_HyperLink6" href="AboutLGRDMinister.aspx"><span id="ctl00_lblMinisterDetail" class="label">Details</span></a>
						   </div>
                      </div>
                  </div>
                    
                  <div class="boxheader5">
                     <div id="ctl00_div3">
                         <span id="ctl00_lblStateMinisterHeader" class="label">Hon'ble State Minister</span></div>
                    </div>
                    <div class="box2">
                       <div style="margin-top: 4px; height: 160px;">
                           <div class="news_title" style="margin: 0; text-align: center;">
                              <br />
                              <a id="ctl00_HyperLink7" href="AboutLGRDStateMinister.aspx"><img id="ctl00_Image4" src="images/min_State.jpg" style="height:110px;width:90px;border-width:0px;margin: Center;" /></a><br />
                              <a id="ctl00_HyperLink8" href="AboutLGRDStateMinister.aspx"><span id="ctl00_lblStateMinister" class="label" style="font-size:15px;">Mr. Swapan  Bhattacharjee, MP</span></a><br />
                              <a id="ctl00_HyperLink9" href="AboutLGRDStateMinister.aspx"><span id="ctl00_lblStateMinisterDetail" class="label">Details</span></a>
							</div>
                        </div>
                    </div>
                    
                    <div class="boxheader5">
                        <div id="ctl00_div4">
                            <span id="ctl00_lblSecterayHeader" class="label">Senior Secretary</span>
						</div>
                    </div>
                    <div class="box2">
                        <div style="margin-top: 4px; height: 160px;">
                            <div class="news_title" style="margin: 0; text-align: center;">
                                <br />
                                <img id="ctl00_Image5" src="images/Secretary_Mesbah_uddin_Chow.jpg" style="height:110px;width:90px;border-width:0px;margin: Center;" />
                                <br />
                                <span id="ctl00_lblSecretary" class="label" style="font-size:15px;"> Mr. Mohammed Mezbah Uddin Chowdhury</span>
                                <br />
                                
                            </div>
                        </div>
                    </div>
                    <div class="boxheader5">
                        <div id="ctl00_divChiefEng">
                            <span id="ctl00_lblChiefEngineerHeader" class="label">Chief Engineer, LGED</span></div>
                    </div>
                    <div class="box2">
                        
                        
                        <div style="margin-top: 4px; height: 160px;">
                            <div class="news_title" style="margin: 0; text-align: center;">
                                <img id="ctl00_Image1" src="images/Sk-Md-Mohsin.jpg" style="height:110px;width:90px;border-width:0px;margin: Center;" />
                                <br />
                                <span id="ctl00_lblChiefName" class="label" style="font-size:15px;">Sk. Md. Mohsin</span>
                                <br />
                                
                            </div>
                        </div>
                    </div>
                </div>
				
                <div class="footer">
                    <div id="ctl00_Footer1_dvEn" class="foot2" style="font-size: 11px;">
						<ul>
							<li><a href="LGEDAboutUS.php" id="ctl00_Footer1_anchHome" title="Home">Home</a>&nbsp;|&nbsp;</li>
							<li><a href="PrivacyPolicy.aspx" id="ctl00_Footer1_anchPrivacy">Privacy Policy</a>&nbsp;|&nbsp;</li>
							<li><a href="TermsOfUse.aspx" id="ctl00_Footer1_anchTerms">Terms of Use</a>&nbsp;|&nbsp;</li>
							<li><a href="UnderDevelopment.aspx?pageID=Sitemap" id="ctl00_Footer1_anchSiteMap">
								Sitemap</a>&nbsp;|&nbsp;</li>
							<li><a href="https://mail.lged.gov.bd" id="ctl00_Footer1_anchWebmail" target="_blank">
								Webmail</a>&nbsp;|&nbsp;</li>
							
						</ul>
			        </div>

			        <div class="foot1">
				         Copyright LGED, 2020 | All Rights Reserved | Powered By: <a title="ICT" class="primeLink"
						 href="../UnitHome.aspx?unitID=6">ICT Unit, LGED</a>
				         <br />
				
			        </div>

                </div>
          </div>
        

		<script type="text/javascript">
			//<![CDATA[
			Sys.Application.initialize();
			Sys.Application.add_init(function() {
				$create(Sys.UI._UpdateProgress, {"associatedUpdatePanelId":null,"displayAfter":500,"dynamicLayout":false}, null, null, $get("ctl00_Header1_UpdateProgress1"));
			});
			Sys.Application.add_init(function() {
				$create(AjaxControlToolkit.AlwaysVisibleControlBehavior, {"HorizontalSide":1,"id":"ctl00_Header1_AlwaysVisibleControlExtender1"}, null, null, $get("ctl00_Header1_UpdateProgress1"));
			});
			//]]>
		</script>

    </div>
  </body>
</html>