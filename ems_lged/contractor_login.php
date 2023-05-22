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
				$(document).ready(function() 
				{
					$('.slideshow').cycle({
						fx: 'fade' // choose your transition type, ex: fade, scrollUp, shuffle, etc...
					});
				});
			</script>

    		
            <?php 
                include('connection.php');

                session_start(); 

                if(isset($_POST['login']))
                {
                    $contractor_user_id   = $_POST['contractor_user_id'];
                    $contractor_password  = $_POST['contractor_password'];
                    
                    
                    $select = "SELECT * FROM  contractor_info WHERE contractor_email = '$contractor_user_id' and contractor_password = '$contractor_password' ";

                    $result = mysqli_query($conn, $select);

                    if(mysqli_num_rows($result)>0)
                    {

                        $row = mysqli_fetch_array($result);

                        $_SESSION['contractor_user_id']  = $row['contractor_email'];
                        $_SESSION['contractor_name']     = $row['contractor_name'];
                        $_SESSION['contractor_address']  = $row['contractor_address'];
                        $_SESSION['contractor_id']       = $row['contractor_id'];
                        $_SESSION['district_id']         = $row['district_id'];
                        $_SESSION['active_status']       = $row['active_status'];
                        
                        /*echo "<script>alert('Welcome! Login Success')</script>";*/
            ?>
					<script>
							window.location.href = 'contractor_dashboard.php';
					</script>
            <?php 

                    }
                    else  
                    {  
                        echo "<script>alert('User ID or Password is incorrect!')</script>";  
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



	<style>
 
		@import url('https://fonts.googleapis.com/css?family=Raleway:400,700');

		* {
			box-sizing: border-box;
			margin: 0;
			padding: 0;	
			font-family: Raleway, sans-serif;
		}

		body {
			background: linear-gradient(90deg, #C7C5F4, #776BCC);		
		}

		.container {
			display: flex;
			align-items: center;
			justify-content: center;
			min-height: 100vh;
		}

		.screen {		
			background: linear-gradient(90deg, #5D54A4, #7C78B8);		
			position: relative;	
			height: 600px;
			width: 360px;	
			box-shadow: 0px 0px 24px #5C5696;
		}

		.screen__content {
			z-index: 1;
			position: relative;	
			height: 100%;
		}

		.screen__background {		
			position: absolute;
			top: 0;
			left: 0;
			right: 0;
			bottom: 0;
			z-index: 0;
			-webkit-clip-path: inset(0 0 0 0);
			clip-path: inset(0 0 0 0);	
		}

		.screen__background__shape {
			transform: rotate(45deg);
			position: absolute;
		}

		.screen__background__shape1 {
			height: 520px;
			width: 520px;
			background: #FFF;	
			top: -50px;
			right: 120px;	
			border-radius: 0 72px 0 0;
		}

		.screen__background__shape2 {
			height: 220px;
			width: 220px;
			background: #6C63AC;	
			top: -172px;
			right: 0;	
			border-radius: 32px;
		}

		.screen__background__shape3 {
			height: 540px;
			width: 190px;
			background: linear-gradient(270deg, #5D54A4, #6A679E);
			top: -24px;
			right: 0;	
			border-radius: 32px;
		}

		.screen__background__shape4 {
			height: 400px;
			width: 200px;
			background: #7E7BB9;	
			top: 420px;
			right: 50px;	
			border-radius: 60px;
		}

		.login {
			width: 320px;
			padding: 30px;
			padding-top: 156px;
		}

		.login__field {
			padding: 20px 0px;	
			position: relative;	
		}

		.login__icon {
			position: absolute;
			top: 30px;
			color: #7875B5;
		}

		.login__input {
			border: none;
			border-bottom: 2px solid #D1D1D4;
			background: none;
			padding: 10px;
			padding-left: 24px;
			font-weight: 700;
			width: 75%;
			transition: .2s;
		}

		.login__input:active,
		.login__input:focus,
		.login__input:hover {
			outline: none;
			border-bottom-color: #6A679E;
		}

		.login__submit {
			background: #fff;
			font-size: 14px;
			margin-top: 30px;
			padding: 16px 20px;
			border-radius: 26px;
			border: 1px solid #D4D3E8;
			text-transform: uppercase;
			font-weight: 700;
			display: flex;
			align-items: center;
			width: 100%;
			color: #4C489D;
			box-shadow: 0px 2px 2px #5C5696;
			cursor: pointer;
			transition: .2s;
		}

		.login__submit:active,
		.login__submit:focus,
		.login__submit:hover {
			border-color: #6A679E;
			outline: none;
		}

		.button__icon {
			font-size: 24px;
			margin-left: auto;
			color: #7875B5;
		}

		.social-login {	
			position: absolute;
			height: 140px;
			width: 160px;
			text-align: center;
			bottom: 0px;
			right: 0px;
			color: #fff;
		}

		.social-icons {
			display: flex;
			align-items: center;
			justify-content: center;
		}

		.social-login__icon {
			padding: 20px 10px;
			color: #fff;
			text-decoration: none;	
			text-shadow: 0px 0px 8px #7875B5;
		}

		.social-login__icon:hover {
			transform: scale(1.5);	
		}
	</style>


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
			<script type="text/javascript" src="/LGEDAboutUS.php?_TSM_HiddenField_=ctl00_ToolkitScriptManager1_HiddenField&amp;_TSM_CombinedScripts_=%3b%3bAjaxControlToolkit%2c+Version%3d3.0.30512.32943%2c+Culture%3dneutral%2c+PublicKeyToken%3d28f01b0e84b6d53e%3aen-US%3ab0c95330-b069-4689-bee2-146971cb82a5%3a865923e8%3a411fea1c%3ae7c87f07%3a91bd373d%3afc56e238" ></script>
			
			
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
				window.location = 'Search.php?q='
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
                        <a id="ctl00_Header1_hylnkProjectList" href="ProjectList.php">Projects </a>
                    </li>
                    <li>
                        <a id="ctl00_Header1_hylnkDigitalMap" href="ViewMap.php">Digital Map </a>
                    </li>
                    <li>
                        <a id="ctl00_Header1_hylnkRoadDB" href="ViewRoad2.php">Road & Market Database </a>
                    </li>
                    
					<li>
                        <a id="ctl00_Header1_hylnkRoadDB" href="contractors_registration.php">Registration </a>
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
                <li><a target="_blank" href="UnitHome.php?unitID=15">
                    <span class="bullet"></span>Administrative Unit</a></li>
                <li><a target="_blank" href="UnitHome.php?unitID=1">
                    <span class="bullet"></span>Planning Section</a></li>
                <li><a target="_blank" href="UnitHome.php?unitID=2">
                    <span class="bullet"></span>Monitoring &amp; Evalutation Section</a></li>
                <li><a target="_blank" href="UnitHome.php?unitID=3">
                   <span class="bullet"></span>Human Resources Development, Quality Control & Environment</a></li>
                <li>
                    <a href="#"> <span class="bullet"></span>Design Unit</a>        
                    <ul style="width: 400px">
                        <li><a target="_blank" href="UnitHome.php?unitID=4">
                        <span class="bullet"></span>Road & Building Design Section</a></li>
                        <li><a target="_blank" href="UnitHome.php?unitID=41">
                           <span class="bullet"></span>Bridge Design Section</a></li>
                    </ul>
                </li>
                   
                <li><a href="#"> <span class="bullet"></span> ICT Unit</a>
                    <ul style="width: 400px">
                        <li><a target="_blank" href="UnitHome.php?unitID=5">
                            <span class="bullet"></span>ICT Unit (GIS Section)</a></li>
                        <li><a target="_blank" href="UnitHome.php?unitID=6">
                           <span class="bullet"></span> ICT Unit (MIS Section)</a></li>
                    </ul>
                </li>

                <li><a target="_blank" href="UnitHome.php?unitID=7">
                    <span class="bullet"></span>Road &amp; Bridge Maintenance Unit</a></li>
                <li><a target="_blank" href="UnitHome.php?unitID=9">
                    <span class="bullet"></span>Procurement Section</a></li>
                <li><a target="_blank" href="UnitHome.php?unitID=10">
                    <span class="bullet"></span>Urban Management Unit</a></li>
                <li><a href="#"><span class="bullet"></span>IWRM Unit</a>
                    <ul style="width: 400px">
                        <li><a target="_blank" href="UnitHome.php?unitID=11">
                            <span class="bullet"></span>Water Resources Maintenance Section</a></li>
                        <li><a target="_blank" href="UnitHome.php?unitID=17">
                            <span class="bullet"></span>Water Resources Infrustructure Planning Section</a></li>
                    </ul>
                </li>

                <li><a target="_blank" href="UnitHome.php?unitID=13">
                    <span class="bullet"></span>Quality Control Section</a></li>
                
                <li><a target="_blank" href="UnitHome.php?unitID=12">
                    <span class="bullet"></span>Audit Unit</a></li>
            </ul>
        </li>

        <li><a href="ProjectList.php"><span class="bullet"></span>Projects</a></li>
        <li><a href="ViewMap.php"><span class="bullet"></span>Digital Map</a></li>
        <li><a href="ViewRoad2.php"><span class="bullet"></span>Road Database</a></li>
        <li><a href="DownloadNOCNew.php"><span class="bullet"></span>NOC & GO</a></li>
        <li><a href=""><span class="bullet"></span>Documents & Forms</a>
            <ul>
                <li><a href="DownloadForms.php?formType=1"><span class="bullet"></span>Forms</a></li>
                <li><a href="DownloadForms.php?formType=2"><span class="bullet"></span>Documents</a></li>
                <li><a href="DownloadForms.php?formType=3"><span class="bullet"></span>Manuals</a></li>
            </ul>
        </li>

        <li><a href="DevelopmentFairView.php"><span class="bullet"></span>Unnayan Mela 2022 (Folder)</a></li>
        
      </ul>
	</div>

				<div id="menu3" class="verticalmenu-v">
					<ul>
						<li></li>
					</ul>
				</div>
                    
                </div>
                <div class="mid">
                    
    <div id="ctl00_ContentPlaceHolder1_dvEng">
        <h2 class="headline2">
            <span>Contractor Login</span></h2>
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

	  <div class="container">
	    <div class="screen">
		  <div class="screen__content">
			<form class="login" action="contractor_login.php" method="post">
				<div class="login__field">
					<i class="login__icon fas fa-user"></i>
					<input type="email" name="contractor_user_id" class="login__input" placeholder="Enter Email">
				</div>
				<div class="login__field">
					<i class="login__icon fas fa-lock"></i>
					<input type="password" name="contractor_password" class="login__input" placeholder="Enter Password">
				</div>
				<div> 
				     <input type="submit" name="login" class="button login__submit" value="Log in">
	            </div>
				<!-- <button class="button login__submit">
					<span class="button__text">Log In Now</span>
					<i class="button__icon fas fa-chevron-right"></i>
				</button>				 -->
			</form>
			<div class="social-login">
				<h3><a href="recover_password.php" ><span style='color:white;'>Forgot password?</span></a></h3>
			</div>
		</div>
		<div class="screen__background">
			<span class="screen__background__shape screen__background__shape4"></span>
			<span class="screen__background__shape screen__background__shape3"></span>		
			<span class="screen__background__shape screen__background__shape2"></span>
			<span class="screen__background__shape screen__background__shape1"></span>
		</div>		
	</div>
</div>

      </section>
    </section>
  </section>  

  		           
            <br />
            
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
                             <a id="ctl00_HyperLink2" href="AboutLGRDMinister.php"><img id="ctl00_Image3" src="images/min_TajulIslam.jpg" style="height:110px;width:90px;border-width:0px;margin: Center;" /></a>
                             <br />
                             <a id="ctl00_HyperLink3" href="AboutLGRDMinister.php"><span id="ctl00_lblMinister" class="label" style="font-size:15px;">Mr. Md Tazul Islam,  MP</span></a>
                             <br />
                             <a id="ctl00_HyperLink6" href="AboutLGRDMinister.php"><span id="ctl00_lblMinisterDetail" class="label">Details</span></a>
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
                              <a id="ctl00_HyperLink7" href="AboutLGRDStateMinister.php"><img id="ctl00_Image4" src="images/min_State.jpg" style="height:110px;width:90px;border-width:0px;margin: Center;" /></a><br />
                              <a id="ctl00_HyperLink8" href="AboutLGRDStateMinister.php"><span id="ctl00_lblStateMinister" class="label" style="font-size:15px;">Mr. Swapan  Bhattacharjee, MP</span></a><br />
                              <a id="ctl00_HyperLink9" href="AboutLGRDStateMinister.php"><span id="ctl00_lblStateMinisterDetail" class="label">Details</span></a>
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
                                <img id="ctl00_Image5" src="images/Secretary-Ibrahim.jpg" style="height:110px;width:90px;border-width:0px;margin: Center;" />
                                <br />
                                <span id="ctl00_lblSecretary" class="label" style="font-size:15px;"> Mr. Muhammad Ibrahim </span>
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
							<li><a href="PrivacyPolicy.php" id="ctl00_Footer1_anchPrivacy">Privacy Policy</a>&nbsp;|&nbsp;</li>
							<li><a href="TermsOfUse.php" id="ctl00_Footer1_anchTerms">Terms of Use</a>&nbsp;|&nbsp;</li>
							<li><a href="UnderDevelopment.php?pageID=Sitemap" id="ctl00_Footer1_anchSiteMap">
								Sitemap</a>&nbsp;|&nbsp;</li>
							<li><a href="https://mail.lged.gov.bd" id="ctl00_Footer1_anchWebmail" target="_blank">
								Webmail</a>&nbsp;|&nbsp;</li>
							
						</ul>
			        </div>

			        <div class="foot1">
				         Copyright LGED, 2020 | All Rights Reserved | Powered By: <a title="ICT" class="primeLink"
						 href="../UnitHome.php?unitID=6">ICT Unit, LGED</a>
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