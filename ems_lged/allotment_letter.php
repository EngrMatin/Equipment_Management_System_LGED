<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head id="ctl00_Head1">
		<title> Allotment Letter </title>
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


@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins',sans-serif;
}
body{
  height: 100vh;
  display: ;
  justify-content: center;
  align-items: center;
  padding: 10px;
  background: linear-gradient(135deg, #71b7e6, #9b59b6);
}
.container2{
  max-width: 700px;
  width: 100%;
  background-color: #fff;
  padding: 25px 30px;
  border-radius: 5px;
  box-shadow: 0 5px 10px rgba(0,0,0,0.15);
}
.container2.title{
  font-size: 25px;
  font-weight: 500;
  position: relative;
}
.container2.title::before{
  content: "";
  position: absolute;
  left: 0;
  bottom: 0;
  height: 3px;
  width: 30px;
  border-radius: 5px;
  background: linear-gradient(135deg, #71b7e6, #9b59b6);
}
.content form .user-details{
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  margin: 20px 0 12px 0;
}
form .user-details .input-box{
  margin-bottom: 15px;
  width: calc(100% - 20px);
}
form .input-box span.details{
  display: block;
  font-weight: 500;
  margin-bottom: 5px;
}
.user-details .input-box input{
  height: 45px;
  width: 100%;
  outline: none;
  font-size: 12px;
  border-radius: 5px;
  padding-left: 15px;
  border: 1px solid #ccc;
  border-bottom-width: 2px;
  transition: all 0.3s ease;
}
.user-details .input-box input:focus,
.user-details .input-box input:valid{
  border-color: #9b59b6;
}
 form .gender-details .gender-title{
  font-size: 20px;
  font-weight: 500;
 }
 form .category{
   display: flex;
   width: 80%;
   margin: 14px 0 ;
   justify-content: space-between;
 }
 form .category label{
   display: flex;
   align-items: center;
   cursor: pointer;
 }
 form .category label .dot{
  height: 18px;
  width: 18px;
  border-radius: 50%;
  margin-right: 10px;
  background: #d9d9d9;
  border: 5px solid transparent;
  transition: all 0.3s ease;
}
 #dot-1:checked ~ .category label .one,
 #dot-2:checked ~ .category label .two,
 #dot-3:checked ~ .category label .three{
   background: #9b59b6;
   border-color: #d9d9d9;
 }
 form input[type="radio"]{
   display: none;
 }
 form .button{
   height: 45px;
   margin: 35px 0
 }
 form .button input{
   height: 100%;
   width: 100%;
   border-radius: 5px;
   border: none;
   color: #fff;
   font-size: 18px;
   font-weight: 500;
   letter-spacing: 1px;
   cursor: pointer;
   transition: all 0.3s ease;
   background: linear-gradient(135deg, #71b7e6, #9b59b6);
 }
 form .button input:hover{
  /* transform: scale(0.99); */
  background: linear-gradient(-135deg, #71b7e6, #9b59b6);
  }
 @media(max-width: 584px){
 .container2{
  max-width: 100%;
}
form .user-details .input-box{
    margin-bottom: 15px;
    width: 100%;
  }
  form .category{
    width: 100%;
  }
  .content form .user-details{
    max-height: 300px;
    overflow-y: scroll;
  }
  .user-details::-webkit-scrollbar{
    width: 5px;
  }
  }
  @media(max-width: 459px){
  .container2.content .category{
    flex-direction: column;
  }
}



     </style>

	<style>

.button1 
		{
		  background-color: #4CAF50; 
		  border: none;
		  color: white;
		  padding: 8px 20px;
		  text-align: center;
		  text-decoration: none;
		  display: inline-block;
		  font-size: 16px;
		  margin: 4px 2px;
		  cursor: pointer;
		  border-radius: 8px;
		}
		
		.button2 
		{
		  background-color: #008CBA;
		  border: none;
		  color: white;
		  padding: 4px 14px;
		  text-align: center;
		  text-decoration: none;
		  display: inline-block;
		  font-size: 12px;
		  margin: 4px 2px;
		  cursor: pointer;
		  border-radius: 8px;
		}
		
		.button3 
		{
		  background-color: red;
		  border: none;
		  color: white;
		  padding: 4px 14px;
		  text-align: center;
		  text-decoration: none;
		  display: inline-block;
		  font-size: 12px;
		  margin: 4px 2px;
		  cursor: pointer;
		  border-radius: 8px;
		}
		
		.button4 
		{
		  background-color: purple;
		  border: none;
		  color: white;
		  padding: 4px 14px;
		  text-align: center;
		  text-decoration: none;
		  display: inline-block;
		  font-size: 12px;
		  margin: 4px 2px;
		  cursor: pointer;
		  border-radius: 8px;
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
                        <a id="ctl00_Header1_hylnkRoadDB" href="logout.php">Log out </a>
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
            <div class="main" >
                <div  >
                    <div class="boxheader5">
                        <div>
                            <a href="contractor_dashboard.php"><span id="ctl00_lblMainMenuTitle" class="label" >Dashboard</span></a>
                        </div>
                    </div>
				
                    
	<!-- <div id="menu2" class="verticalmenu-v">
    
	</div> -->

	<!-- <div id="menu3" class="verticalmenu-v">
					
	</div> -->
                    
    <!-- </div> -->



	<script>
			function print(parameter) 
			{
				var prtContent = document.getElementById(parameter).innerHTML;
				var WinPrint = window.open('', '', 'left=0,top=0,width=1200,height=900,toolbar=0,scrollbars=0,status=0');
				WinPrint.document.write(prtContent);
				WinPrint.document.close();
				WinPrint.focus();
				WinPrint.print();
				WinPrint.close();
			}
	</script>
	
			<?php
	            //session_start();

				$contractor_user_id 	= $_SESSION['contractor_user_id']; 
				$contractor_name 		= $_SESSION['contractor_name']; 
				$contractor_address 	= $_SESSION['contractor_address']; 
			  
			  	
                if(isset($_GET['requisition_id']))
				{
					$requisition_id = $_GET['requisition_id'];
					$sql = "SELECT * 
                        FROM requisition_info as ri, equipment_info as ei, driver_info as di, user_info as ui 
                        WHERE ui.user_district_id=ri.district_id and ui.role_id=21 and di.equipment_id=ei.equipment_id and ei.equip_id=ri.equipment_id and ri.requisition_id='$requisition_id'";
					$result = $conn->query($sql);
				}

				$i=0;
				while($row = mysqli_fetch_array($result))
				{
					$i++;
					$district_id 	     	 	= $row['district_id'];
					$upazila_id 	     	 	= $row['upazila_id'];
					$road_name 	     	 	    = $row['road_name'];
					$chainage 	     	 	    = $row['chainage'];
					$layer 	     	 	        = $row['layer'];
					$allotment_no 	     	 	= $row['allotment_no'];
					$allotment_date 	     	= $row['allotment_date'];
					$allotment_from_date 	 	= $row['requisition_from_date'];
					$allotment_to_date 		 	= $row['requisition_to_date'];
					$request_date 		 	    = $row['request_date'];
					$equipment_type 	     	= $row['equipment_type'];
					$equipment_id 	         	= $row['equipment_id'];
					$equipment_brand 	     	= $row['equipment_brand'];
					$equipment_model 	     	= $row['equipment_model'];
					$equipment_weight 	     	= $row['equipment_weight'];
					$hire_charge 	     	    = $row['hire_charge'];
					$user_email 	     	    = $row['user_email'];
					$user_mobile_no 	        = $row['user_mobile_no'];
					$driver_name 	         	= $row['driver_name'];
					$driver_mobile_no 	     	= $row['driver_mobile_no'];
					$equipment_return_status 	= $row['equipment_return_status'];
					$requisition_id 	     	= $row['requisition_id'];
				}

				$sql3 = "select * from districts where district_id='$district_id' ";
				$rec3 = $conn->query($sql3);
				$k=0;
				while($row3 = mysqli_fetch_array($rec3))
				{
					$k++;
					$district 	 			 = $row3['district_name'];
				}

				$sql4 = "select * from upazilas where upazila_id='$upazila_id' ";
				$rec4 = $conn->query($sql4);
				$m=0;
				while($row4 = mysqli_fetch_array($rec4))
				{
					$m++;
					$upazila 	 			 = $row4['upazila_name'];
				}

				//$allotment_date1 = $allotment_date.ToShortDateString();
				//$allotment_date1 = $allotment_date.ToString("dd/MM/yyyy");
				$allotment_date1 = date_create($allotment_date);
				$allotment_date2 = date_format($allotment_date1,"d-m-Y");

				$request_date1 = date_create($request_date);
				$request_date2 = date_format($request_date1,"d-m-Y");

				$allotment_from_date1 = date_create($allotment_from_date);
				$allotment_from_date2 = date_format($allotment_from_date1,"d-m-Y");

				$allotment_to_date1 = date_create($allotment_to_date);
				$allotment_to_date2 = date_format($allotment_to_date1,"d-m-Y");

				$date1 = date_create($allotment_from_date);
                $date2 = date_create($allotment_to_date);
                $interval = date_diff($date1, $date2);
                $no_of_days = $interval->format('%R%a') + 1;
                
            ?>




    <div class="mid" style="width:96%;">
                    
    <div id="ctl00_ContentPlaceHolder1_dvEng">
        <div style="width:40%; float:left;">
			<h2><span> <?php  echo $contractor_name;  ?> </span><br>
                <span> <?php  echo $contractor_address; ?> </span> </h2>
		</div>
		<div style="width:50%; float:right;">
		    <?php 
			    if($equipment_return_status==0)
				{
					echo "<a href='return_equipment.php? requisition_id=$requisition_id' class='button3' style='float:right;'> Return Equipment </a>
			              <a href='delay_report.php? requisition_id=$requisition_id' class='button2' style='float:right;'> Delay Report </a>"; 
				}      
			?>
		</div>
            
        <!-- <div class="mid_wrap3" style="margin-top: 0px; width: 490px;"> -->
        <br>
		

<!-- <section id="container"> -->
    <!-- <section id="main-content"> -->
      <!-- <section class="wrapper"> -->

      <?php
      
	      echo "<div style='text-align:right; margin-right:20px;'><button class='button1' onclick=\"print('report_content')\">Print</button></div>";
	      echo "<div id='report_content' style='margin:10px 20px; max-width:100%; color:black;'>";
		  
	  ?>

<table border="0" cellpadding="0" cellspacing="0" style='width:100%; '>
	<tr>
		<td rowspan="2" style="width:25%;"> 
		   <img src="images/50-years-of-bangladesh-logo.png" style="margin-left:10%; width:55%" alt="Golden-jubilee_of_Bangladesh_logo"> 
		</td>
		<td rowspan="2" style="width:50%; text-align:center; font-size:16px; font-weight:bold;">
			<h4> Government of the People's Republic of Bangladesh </h4>
			  <h4> Local Government Engineering Department </h4>  
			    <h4> Office of the Executive Engineer </h4>
			      <h4> District: <?php echo $district; ?> </h4>
			        <h4><u> www.lged.gov.bd </u></h4>

			<!-- <p>Government of the People's Republic of Bangladesh<br>
				   Local Government Engineering Department<br>  
					Office of the Executive Engineer <br>
						District: <?php echo $district; ?> <br>
						 <u>www.lged.gov.bd </u><p> -->

		</td>
		<td style="width:25%;">
		  <img src="images/100-years-of-Mujib-logo.png" style="float:right; margin-right:10%; width:50%" alt="100-years-of-Mujib-logo"> 
		</td>
	</tr>
	<tr>
		<td >
		    <img src="images/slogan.jpg" style="float:right; margin-right:10%; width:50%" alt="Honorable Prime Minister's Slogan"> 
		</td>
	</tr>
</table>

<table border="0" cellpadding="0" cellspacing="0" style='margin:10px 0px; width:100%; '>
	<tr>
		<td style="width:10%;">Memo No:</td>
		<td style="width:73%;">46.02.1900.000.26.500.20-21</td>
		<td style="width:4%;">Date:</td>
		<td style="width:13%;"><?php echo $allotment_date2; ?> </td>
	</tr>
</table>
<table border="0" cellpadding="0" cellspacing="0" style='margin:10px 0px; width:100%; '>
	<tr>
		<td style="width:6%;">To</td>
		<td></td>
	</tr>
	<tr>
		<td></td>
		<td> <?php echo $contractor_name; ?> <br> <?php echo $contractor_address; ?> <br></td>
	</tr>
</table>
<table border="0" cellpadding="0" cellspacing="0" style='margin:10px 0px; width:100%; '>
	<tr>
		<td style="width:6%; font-weight:bold">Subject</td>
		<td style="width:1%; font-weight:bold;">:</td>
		<td><b>Allotment of <?php echo $equipment_type; ?></b></td>
	</tr>
	<tr>
		<td style="width:6%;">Ref.</td>
		<td style="width:1%; font-weight:bold;">:</td>
		<td >Your request for requisition dated on <?php echo $request_date2; ?> </td>
	</tr>
</table>
<table border="0" cellpadding="0" cellspacing="0" style='margin:10px 0px; width:100%; '>
	<tr>
		<?php echo '<td style="text-indent:60px;">With reference to the above subject and reference, it is hereby informed you that a <b>'.$equipment_type.'</b>, with an equipment ID number <b>'.$equipment_id.'</b> is allotted to you for <b>'.$no_of_days.' days</b> from <b>'.$allotment_from_date2.'</b> to <b>'.$allotment_to_date2.'</b> for the compaction work of the '.$layer.' layer of <b>'.$road_name.'</b> at chainage '.$chainage.' under '.$upazila.' upazila upon the following condition<b>:</b> </td>'; ?>
	</tr>
</table>
<table border="0" cellpadding="0" cellspacing="0" style='margin:10px 0px; width:100%; '>
	<tr>
		<td><b>Conditions:</b></td>
		<td></td>
	</tr>
</table>
<table border="0" cellpadding="0" cellspacing="0" style='margin:10px 0px; width:100%; '>
	<tr>
		<td style="width:4%;">01.</td>
		<td style="width:2%;"></td>
		<td>All kinds of fuel costs and carrying cost including carrying to road site and return to office have to be paid by you.</td>
	</tr>
	<tr>
		<td>02.</td>
		<td></td>
		<td>The equipment cannot be used beyond the allotted period without prior approval of the undersigned. Otherwise, double hire charge will be applicable for the unapproved period.</td>
	</tr>
	<tr>
		<td>03.</td>
		<td></td>
		<td>You must receive the equipment at running condition and return it at running condition as well.</td>
	</tr>
	<tr>
		<td>04.</td>
		<td></td>
		<td>You will be liable for any kind of damage of the equipment within this period.</td>
	</tr>
	<tr>
		<td>05.</td>
		<td></td>
		<td>You have to pay the pretty repair cost (if any) upto 10,000.00 BDT. </td>
	</tr>
	<tr>
		<td>06.</td>
		<td></td>
		<td>The minimum hire charge of the equipment is <?php echo $hire_charge; ?> BDT per day. </td>
	</tr>
	<tr>
		<td>07.</td>
		<td></td>
		<td>The payable hire charge will be derived from the maximum amount between the daily based hire charge and the work done quantity based hire charge.</td>
	</tr>
	<tr>
		<td>08.</td>
		<td></td>
		<td>You have not to pay the payable hire charge directly. Rather, it will be deducted from your bill of development/maintenance work.</td>
	</tr>
</table>
<table border="0" cellpadding="0" cellspacing="0" style='margin:35px 0px 10px 0px; width:100%; '>
	<tr>
		<td style="width:70%;"></td>
		<td style="width:250px; text-align:center;">(Signed digitally)<br><br><b>Executive Engineer</b><br>LGED, <?php echo $district; ?><br>Phone: <?php echo $user_mobile_no; ?> <br>Email: <?php echo $user_email; ?> </td>
		<td></td>
	</tr>
</table>
<table border="0" cellpadding="0" cellspacing="0" style='margin:10px 0px; width:100%; '>
	<tr>
		<td>Copy:</td>
		<td></td>
	</tr>
</table>
<table border="0" cellpadding="0" cellspacing="0" style='margin:10px 0px; width:100%; '>
	<tr>
		<td style="width:4%;">01.</td>
		<td style="width:2%;"></td>
		<td>Senior Assistant Engineer/Assistant Engineer/Assistant Engineer(Mech), LGED, <?php echo $district; ?>.</td>
	</tr>
	<tr>
		<td>02.</td>
		<td></td>
		<td>Upazila Engineer, LGED, <?php echo $upazila.', '.$district; ?>.</td>
	</tr>
	<tr>
		<td>03.</td>
		<td></td>
		<td>Accountant, LGED, <?php echo $district; ?>.</td>
	</tr>
	<tr>
		<td>04.</td>
		<td></td>
		<td>Mechanical Foreman, LGED, <?php echo $district; ?>.</td>
	</tr>
	<tr>
		<td>05.</td>
		<td></td>
		<td>Mr. <b><?php echo $driver_name; ?></b>, Driver/Operator, LGED, <?php echo $district; ?>. <b>Mobile No: <?php echo $driver_mobile_no; ?></b>.</td>
	</tr>
</table>


</div>

            </div>
          </div>
        </div>
      </section>
    </section>
  </section>
        

	
  <!-- </div> -->
  

      <!-- </section> -->
    <!-- </section> -->
  <!-- </section>   -->

  		

		    
			
            
            <br />
            
          </div>
       <!-- </div> -->
    

       <!-- </div> -->
            <!-- <div id="ctl00_rightDiv" class="right"> -->
				
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