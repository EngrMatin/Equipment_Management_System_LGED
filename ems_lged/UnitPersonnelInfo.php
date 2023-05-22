
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><title>
	Unit Personnel Info
</title><link rel="shortcut icon" href="App_Themes/Default/_lib/common/favicon.ico" /><link rel="icon" type="image/gif" href="App_Themes/Default/_lib/common/animated_favicon1.gif" /><link href="App_Themes/Default/_lib/css/style.css" rel="stylesheet" type="text/css" />
    
    
    <script src="App_Themes/Default/_lib/js/jquery-1.4.2.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="App_Themes/Default/_lib/js/vmenu.js"></script>
    <script type="text/javascript" src="App_Themes/Default/_lib/js/jquery_cycle.js"></script>
    <script src="App_Themes/Default/_lib/js/AC_RunActiveContent.js" type="text/javascript"></script>

    

    <script type="text/javascript" src="App_Themes/Default/_lib/js/jquery-easing-1.3.pack.js"></script>

    <script type="text/javascript" src="App_Themes/Default/_lib/js/jquery-easing-compatibility.1.2.pack.js"></script>

    <script type="text/javascript" src="App_Themes/Default/_lib/js/coda-slider.1.1.1.pack.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('.slideshow').cycle({
                fx: 'fade' // choose your transition type, ex: fade, scrollUp, shuffle, etc...
            });
        });
    </script>

    

    <script type="text/javascript">
        $(document).ready(function() {
            var toggle = $('#toggle').click(function() {
                var paused = slideshow.is(':paused');
                slideshow.cycle(paused ? 'resume' : 'pause', true);
            });

            var slideshow = $('.slideshow2').cycle({
                pause: true,
                delay: 8000,
                fx: 'scrollUp',

                paused: function(cont, opts, byHover) {
                    !byHover && toggle.html('Resume');
                    //$('#status').html('paused');
                },
                resumed: function(cont, opts, byHover) {
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

.rslides {
  position: relative;
  list-style: none;
  overflow: hidden;
  width: 100%;
  padding: 0;
  margin: 0;
  }

.rslides li {
  -webkit-backface-visibility: hidden;
  position: absolute;
  display: none;
  width: 100%;
  left: 0;
  top: 0;
  }

.rslides li:first-child {
  position: relative;
  display: block;
  float: left;
  }

.rslides img {
  display: block;
  height: auto;
  float: left;
  width: 100%;
  border: 0;
  }
.rslides img{height:220px}
    </style>
    <script src="App_Themes/Default/_lib/js/responsiveslides.min.js"></script>
    <script>
        $(function() {
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
    
    
    
<link href="App_Themes/Default/_lib/css/ie.css" type="text/css" rel="stylesheet" /><link href="App_Themes/Default/_lib/css/jquery.fancybox-1.3.1.css" type="text/css" rel="stylesheet" /><link href="App_Themes/Default/_lib/css/lightbox.css" type="text/css" rel="stylesheet" /><link href="App_Themes/Default/_lib/css/Print.css" type="text/css" rel="stylesheet" /><link href="App_Themes/Default/_lib/css/style.css" type="text/css" rel="stylesheet" /></head>
<body>
    <div id="ctl00_divBody" style="font-family:Verdana,Arial, Helvetica, sans-serif;font-size:12px;">
        <form name="aspnetForm" method="post" action="UnitPersonnelInfo.php?UnitID=15" id="aspnetForm">
<div>
<input type="hidden" name="ctl00_ToolkitScriptManager1_HiddenField" id="ctl00_ToolkitScriptManager1_HiddenField" value="" />
<input type="hidden" name="__EVENTTARGET" id="__EVENTTARGET" value="" />
<input type="hidden" name="__EVENTARGUMENT" id="__EVENTARGUMENT" value="" />
<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="/wEPDwUKMTYzNjE4MDk3OQ8WBB4GVW5pdElEAg8eCFVuaXROYW1lBQphZG1pbiB1bml0FgJmDw8WCh8BBRNBZG1pbmlzdHJhdGlvbiBVbml0HwACDx4LVW5pdEFkZHJlc3MFR0xldmVsLTUsIExHRUQgQmhhYmFuLCBMR0VELCBBZ2FyZ2FvbiwgU2hlci1FLUJhbmdsYSBOYWdhciwgIERoYWthLTEyMDcuHgtVbml0Q29udGFjdAUPKzg4MC0yLTU4MTUxNDEwHg1Vbml0U2hvcnROYW1lBQphZG1pbiB1bml0ZBYCAgMPFgIeBXN0eWxlBUBmb250LWZhbWlseTpWZXJkYW5hLEFyaWFsLCBIZWx2ZXRpY2EsIHNhbnMtc2VyaWY7Zm9udC1zaXplOjEycHg7FgICAQ9kFhACAw9kFgICAQ9kFgQCAQ8WAh4FY2xhc3MFBmJhbm5lcmQCCQ8WAh4HVmlzaWJsZWhkAgUPFgIeCWlubmVyaHRtbAUTQWRtaW5pc3RyYXRpb24gVW5pdGQCBw8WAh8FBQ9mb250LXNpemU6MTBweDsWBAIDDxYCHwdoZAIFDxYCHwdoZAIJDxYCHwdoZAILD2QWBgIBDw8WAh4EVGV4dAUMIEtleSBQZXJzb25zZGQCAw9kFgICAQ8UKwACDxYEHgtfIURhdGFCb3VuZGceC18hSXRlbUNvdW50AgZkZBYCZg9kFgwCAw9kFgICAQ9kFghmD2QWAgIBDw8WAh8JBQExZGQCAQ9kFgICAQ8PFgYfCQUTTWQuIFNoYWZpcXVyIFJhaG1hbh4LQ29tbWFuZE5hbWUFDmVtcGxveWVlVXBkYXRlHg9Db21tYW5kQXJndW1lbnQFBDE5NThkZAICD2QWAgIBDw8WAh8JBRdTdXBlcmludGVuZGluZyBFbmdpbmVlcmRkAgMPZBYCAgEPDxYCHwkFFHNlLmFkbWluQGxnZWQuZ292LmJkZGQCBA9kFgICAQ9kFghmD2QWAgIBDw8WAh8JBQEyZGQCAQ9kFgICAQ8PFgYfCQUPIEFobWVkIEFiZHVsbGFoHwwFDmVtcGxveWVlVXBkYXRlHw0FBDIxMzVkZAICD2QWAgIBDw8WAh8JBRJFeGVjdXRpdmUgRW5naW5lZXJkZAIDD2QWAgIBDw8WAh8JBRd4ZW4uZmluYW5jZUBsZ2VkLmdvdi5iZGRkAgUPZBYCAgEPZBYIZg9kFgICAQ8PFgIfCQUBM2RkAgEPZBYCAgEPDxYGHwkFEE1kLiBTaGFyaWYgVWRkaW4fDAUOZW1wbG95ZWVVcGRhdGUfDQUDODU0ZGQCAg9kFgICAQ8PFgIfCQUSRXhlY3V0aXZlIEVuZ2luZWVyZGQCAw9kFgICAQ8PFgIfCQUYeGVuLmFkbWluLmRpQGxnZWQuZ292LmJkZGQCBg9kFgICAQ9kFghmD2QWAgIBDw8WAh8JBQE0ZGQCAQ9kFgICAQ8PFgYfCQUqTWQuIE1vc2Fycm9mIEhvc3NhaW4gICAgICAgICAgICAgICAgICAgICAgHwwFDmVtcGxveWVlVXBkYXRlHw0FAzI5OWRkAgIPZBYCAgEPDxYCHwkFEkV4ZWN1dGl2ZSBFbmdpbmVlcmRkAgMPZBYCAgEPDxYCHwkFFyB4ZW4uYWRtaW5AbGdlZC5nb3YuYmQgZGQCBw9kFgICAQ9kFghmD2QWAgIBDw8WAh8JBQE1ZGQCAQ9kFgICAQ8PFgYfCQUPTWQgTmF6bXVsIEhhcXVlHwwFDmVtcGxveWVlVXBkYXRlHw0FBDMwMzBkZAICD2QWAgIBDw8WAh8JBRlTZW5pb3IgQXNzaXN0YW50IEVuZ2luZWVyZGQCAw9kFgICAQ8PFgIfCQUXc3IuYWUuYWRtaW5AbGdlZC5nb3YuYmRkZAIID2QWAgIBD2QWCGYPZBYCAgEPDxYCHwkFATZkZAIBD2QWAgIBDw8WBh8JBRdNb2hhbW1hZCBLaGF5cm9sIEJhc2hlch8MBQ5lbXBsb3llZVVwZGF0ZR8NBQQzNjE0ZGQCAg9kFgICAQ8PFgIfCQUZU2VuaW9yIEFzc2lzdGFudCBFbmdpbmVlcmRkAgMPZBYCAgEPDxYCHwkFGnNyLmFlLmFkbWluLmRpQGxnZWQuZ292LmJkZGQCBQ8WAh8HaBYCAgEPFCsAAmRkZAIND2QWBgIDDw8WBB4ISW1hZ2VVcmwFFH4vaW1hZ2VzL2xnZWRfaHEuanBnHg1BbHRlcm5hdGVUZXh0BQphZG1pbiB1bml0ZGQCBQ8WAh8IBZsBPHN0cm9uZz5Mb2NhbCBHb3Zlcm5tZW50IEVuZ2luZWVyaW5nIERlcGFydG1lbnQgKExHRUQpPC9zdHJvbmc+PGJyIC8+TGV2ZWwtNSwgTEdFRCBCaGFiYW4sIExHRUQsIEFnYXJnYW9uLCBTaGVyLUUtQmFuZ2xhIE5hZ2FyLCAgRGhha2EtMTIwNy4rODgwLTItNTgxNTE0MTBkAgcPFgIfB2hkAg8PFgIfB2hkAhEPZBYCAgIPFgIfB2hkGAMFHl9fQ29udHJvbHNSZXF1aXJlUG9zdEJhY2tLZXlfXxYBBRdjdGwwMCRIZWFkZXIxJGJ0bkJhbmdsYQUmY3RsMDAkQ29udGVudFBsYWNlSG9sZGVyMSRsdkVtcGxveWVlQk4PZ2QFJGN0bDAwJENvbnRlbnRQbGFjZUhvbGRlcjEkbHZFbXBsb3llZQ88KwAKAgc8KwAGAAgCBmSOK/g68dVtJugAe/ECOqQ37Wo9aA==" />
</div>

<script type="text/javascript">
//<![CDATA[
var theForm = document.forms['aspnetForm'];
if (!theForm) {
    theForm = document.aspnetForm;
}
function __doPostBack(eventTarget, eventArgument) {
    if (!theForm.onsubmit || (theForm.onsubmit() != false)) {
        theForm.__EVENTTARGET.value = eventTarget;
        theForm.__EVENTARGUMENT.value = eventArgument;
        theForm.submit();
    }
}
//]]>
</script>


<script src="/WebResource.axd?d=YN5gnEfZxDkA49dIhgSfDHUKmEgHpsoIicKwFp_v1Ud27FOO-ui3T36G94q9NXvyFuA34OLrDvWnWdsiZlR64KD_dC41&amp;t=636041026940000000" type="text/javascript"></script>


<script src="/ScriptResource.axd?d=Sb863ajsgbyzrfR_TcR4aBDu95CGZmhW9xE4JcKkBA7Jz6lvx4_ULF2OtFoTxaL2-YpFxrs1VRLOLK5FkaAnF9FqEZet-k41IT9iqO65kF2ZPNxZPCamLrIIRrC69Fy38aL1rUWz8itbxd2Chtg5q89OmbNTLUGgtS_XW6D6a5wm_TCh0&amp;t=3f4a792d" type="text/javascript"></script>
<script type="text/javascript">
//<![CDATA[
if (typeof(Sys) === 'undefined') throw new Error('ASP.NET Ajax client-side framework failed to load.');
//]]>
</script>

<script src="/ScriptResource.axd?d=ndEpl9cFF6FMAhLjgawei269iEfygVnPcNBuJkLOGvd0oBtlsQyXeJPXPRrY1eiXk8IaDUSkwOYAibwWIgbvxwP6JvtEWwR1v4RSIlNW4R1G7mmJ2IXrkNp8-tncUTnsdx4St8NmxOWyFSFnwYnJDEnjs37F9yUTQKzoDYXVj5YlZ3F50&amp;t=3f4a792d" type="text/javascript"></script>
<script src="App_Themes/Default/_lib/js/jquery-1.4.2.min.js" type="text/javascript"></script>
<script src="App_Themes/Default/_lib/js/nav.js" type="text/javascript"></script>
<script src="App_Themes/Default/_lib/js/vmenu.js" type="text/javascript"></script>
<script src="App_Themes/Default/_lib/js/jquery_cycle.js" type="text/javascript"></script>
<script src="App_Themes/Default/_lib/js/AC_RunActiveContent.js" type="text/javascript"></script>
<script src="/UnitPersonnelInfo.php?_TSM_HiddenField_=ctl00_ToolkitScriptManager1_HiddenField&amp;_TSM_CombinedScripts_=%3b%3bAjaxControlToolkit%2c+Version%3d3.0.30512.32943%2c+Culture%3dneutral%2c+PublicKeyToken%3d28f01b0e84b6d53e%3aen-US%3ab0c95330-b069-4689-bee2-146971cb82a5%3a865923e8%3a411fea1c%3ae7c87f07%3a91bd373d%3afc56e238" type="text/javascript"></script>
<div>

	<input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="CC9C9F28" />
</div>
        <script type="text/javascript">
//<![CDATA[
Sys.WebForms.PageRequestManager._initialize('ctl00$ToolkitScriptManager1', document.getElementById('aspnetForm'));
Sys.WebForms.PageRequestManager.getInstance()._updateControls([], [], [], 90);
//]]>
</script>

        

        <script type="text/javascript">
            $(document).ready(function() {
                $('.slideshow').cycle({
                    fx: 'fade' // choose your transition type, ex: fade, scrollUp, shuffle, etc...
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

        <div id="ctl00_Div1" class="header">
            

<link rel="stylesheet" href="//www.google.com/cse/style/look/default.css" type="text/css" />
<link href="App_Themes/Default/_lib/css/style.css" rel="stylesheet" type="text/css" />

<style>
    * {
        box-sizing: border-box;
    }

    body {
        font-family: Verdana, sans-serif;
    }

    .mySlides {
        display: none;
    }

    img {
        vertical-align: middle;
    }
    /* Slideshow container */ .slideshow-container {
        max-width: 1000px;
        position: relative;
        margin: auto;
    }
    /* Caption text */ .text {
        color: #f2f2f2;
        font-size: 15px;
        padding: 8px 12px;
        position: absolute;
        bottom: 8px;
        width: 100%;
        text-align: center;
    }
    /* Number text (1/3 etc) */ .numbertext {
        color: #f2f2f2;
        font-size: 12px;
        padding: 8px 12px;
        position: absolute;
        top: 0;
    }
    /* The dots/bullets/indicators */ .dot {
        height: 15px;
        width: 15px;
        margin: 0 2px;
        background-color: #bbb;
        border-radius: 50%;
        display: inline-block;
        transition: background-color 0.6s ease;
    }

    .active {
        background-color: #717171;
    }
    /* Fading animation */ .fade {
        -webkit-animation-name: fade;
        -webkit-animation-duration: 2s;
        animation-name: fade;
        animation-duration: 4s;
    }

    @-webkit-keyframes
    @-webkit-keyframes

    @-webkit-keyframesfade {
        from {
            opacity: .4;
        }

        to {
            opacity: 1;
        }
    }

    @keyframesfade {
        from {
            opacity: .4;
        }

        to {
            opacity: 1;
        }
    }
    /* On smaller screens, decrease text size */

    @mediaonlyscreenand(max-width:300px) {
        .text {
            font-size: 11px;
        }
</style>

<script>
    var slideIndex = 0;
    showSlides();

    function showSlides() {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) { slideIndex = 1 }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
        setTimeout(showSlides, 4000); // Change image every 2 seconds
    }
</script>

<script src="//www.google.com/jsapi" type="text/javascript"></script>

<script type="text/javascript">
    google.load('search', '1', { language: 'en' });
    function inputFocus() {

        document.getElementById('query-input').style['background'] = '';
    }

    function inputBlur() {
        var queryInput = document.getElementById('query-input');
        if (!queryInput.value) {
            queryInput.style['background'] =
              'white url(http://www.google.com/coop/images/'
              + 'google_custom_search_watermark.gif) no-repeat 0% 50%';
        }
    }

    function init() {
        google.search.CustomSearchControl.attachAutoCompletion(
            '001745425941308551654:ov1iqxskx10',
            document.getElementById('query-input'),
            'two-page-form');
        inputBlur();
    }

    function submitQuery() {
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
        function OnClientPopulating(sender, e) {
            sender._element.className = "loading";
        }
        function OnClientCompleted(sender, e) {
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
                <input type="image" name="ctl00$Header1$btnBangla" id="ctl00_Header1_btnBangla" src="App_Themes/Default/_lib/common/btnBangla.png" style="border-width:0px;float: right;" />
                
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
                        <a id="ctl00_Header1_HyperLink5" href="Admin/Login.php" target="_blank">Admin_Login  </a>
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
                <div class="boxheaderName">
                    <h2 class="headline2" style="text-align: center; padding-top: 2px; font-weight: bold;
                        font-size: 16px;">
                        <span id="ctl00_lblProjectTitleheader">Administration Unit</span>
                    </h2>
                </div>
                <div class="left">                                      
                    <div id="ctl00_dvEng" style="font-size:10px;">
                        <div class="boxheader5">
                            <div>
                                
                                Menu</div>
                        </div>
                        <div id="ctl00_dvUnit" class="verticalmenu-v">
                            <ul>
                                <li><a href="UnitHome.php?UnitID=15"><span class="bullet"></span>
                                    
                                    Home</a> </li>
                                
                                <li><a href="UnitFunction.php?UnitID=15"><span class="bullet"></span>
                                    
                                    Functions</a> </li>
                                
                                <li><a href="UnitPersonnelInfo.php?UnitID=15"><span class="bullet">
                                </span>Key Persons</a></li>
                                <li><a href="UnitPublication.php?UnitID=15"><span class="bullet"></span>
                                    Documents</a></li>
                                <li><a href="UnitAchivments.php?UnitID=15"><span class="bullet"></span>
                                    Achievements</a></li>
                                <li><a href="UnitNoticeBoard.php?UnitID=15"><span class="bullet"></span>
                                    Notice Board</a></li>
                                <li><a href="UnitPhotoGallery.php?UnitID=15"><span class="bullet">
                                </span>Photo Gallery</a></li>
                                <li><a href="UnitContactUS.php?UnitID=15"><span class="bullet"></span>
                                    Contact us</a></li>
                            </ul>
                        </div>
                        
                        
                    </div>
                    
                </div>
                <div class="mid">
                    
    <h2 class="headline2">
        <span id="ctl00_ContentPlaceHolder1_lblPageHeader" class="label"> Key Persons</span>
    </h2>
    <div id="ctl00_ContentPlaceHolder1_divEnglish" class="mid_wrap3" style="width: 490px; margin-top: 0px;">
        
                <table border="0" cellpadding="0" cellspacing="1" width="100%" style="border-style: none">
                    <tr id="ctl00_ContentPlaceHolder1_lvEmployee_tr1" class="dGridHeaderClass">
	<th align="center">
                            Sl.
                        </th>
	<th align="center">
                            Name
                        </th>
	<th align="center">
                            Designation
                        </th>
	<th align="center">
                            Email
                        </th>
</tr>

                    
                <tr id="ctl00_ContentPlaceHolder1_lvEmployee_ctrl0_trBody" class="dGridRowClass">
	<td align="center">
                        <span id="ctl00_ContentPlaceHolder1_lvEmployee_ctrl0_lblSerial" class="label">1</span>
                    </td>
	<td align="left">
                        <a id="ctl00_ContentPlaceHolder1_lvEmployee_ctrl0_lnkEmployee" href="javascript:__doPostBack('ctl00$ContentPlaceHolder1$lvEmployee$ctrl0$lnkEmployee','')">Md. Shafiqur Rahman</a>
                    </td>
	<td align="left">
                        <span id="ctl00_ContentPlaceHolder1_lvEmployee_ctrl0_lblDesignation" class="label">Superintending Engineer</span>
                    </td>
	<td align="left">
                        <span id="ctl00_ContentPlaceHolder1_lvEmployee_ctrl0_lblEmail" class="label">se.admin@lged.gov.bd</span>
                    </td>
</tr>

            
                <tr id="ctl00_ContentPlaceHolder1_lvEmployee_ctrl1_trBody" class="dGridAltRowClass">
	<td align="center">
                        <span id="ctl00_ContentPlaceHolder1_lvEmployee_ctrl1_lblSerial" class="label">2</span>
                    </td>
	<td align="left">
                        <a id="ctl00_ContentPlaceHolder1_lvEmployee_ctrl1_lnkEmployee" href="javascript:__doPostBack('ctl00$ContentPlaceHolder1$lvEmployee$ctrl1$lnkEmployee','')"> Ahmed Abdullah</a>
                    </td>
	<td align="left">
                        <span id="ctl00_ContentPlaceHolder1_lvEmployee_ctrl1_lblDesignation" class="label">Executive Engineer</span>
                    </td>
	<td align="left">
                        <span id="ctl00_ContentPlaceHolder1_lvEmployee_ctrl1_lblEmail" class="label">xen.finance@lged.gov.bd</span>
                    </td>
</tr>

            
                <tr id="ctl00_ContentPlaceHolder1_lvEmployee_ctrl2_trBody" class="dGridRowClass">
	<td align="center">
                        <span id="ctl00_ContentPlaceHolder1_lvEmployee_ctrl2_lblSerial" class="label">3</span>
                    </td>
	<td align="left">
                        <a id="ctl00_ContentPlaceHolder1_lvEmployee_ctrl2_lnkEmployee" href="javascript:__doPostBack('ctl00$ContentPlaceHolder1$lvEmployee$ctrl2$lnkEmployee','')">Md. Sharif Uddin</a>
                    </td>
	<td align="left">
                        <span id="ctl00_ContentPlaceHolder1_lvEmployee_ctrl2_lblDesignation" class="label">Executive Engineer</span>
                    </td>
	<td align="left">
                        <span id="ctl00_ContentPlaceHolder1_lvEmployee_ctrl2_lblEmail" class="label">xen.admin.di@lged.gov.bd</span>
                    </td>
</tr>

            
                <tr id="ctl00_ContentPlaceHolder1_lvEmployee_ctrl3_trBody" class="dGridAltRowClass">
	<td align="center">
                        <span id="ctl00_ContentPlaceHolder1_lvEmployee_ctrl3_lblSerial" class="label">4</span>
                    </td>
	<td align="left">
                        <a id="ctl00_ContentPlaceHolder1_lvEmployee_ctrl3_lnkEmployee" href="javascript:__doPostBack('ctl00$ContentPlaceHolder1$lvEmployee$ctrl3$lnkEmployee','')">Md. Mosarrof Hossain                      </a>
                    </td>
	<td align="left">
                        <span id="ctl00_ContentPlaceHolder1_lvEmployee_ctrl3_lblDesignation" class="label">Executive Engineer</span>
                    </td>
	<td align="left">
                        <span id="ctl00_ContentPlaceHolder1_lvEmployee_ctrl3_lblEmail" class="label"> xen.admin@lged.gov.bd </span>
                    </td>
</tr>

            
                <tr id="ctl00_ContentPlaceHolder1_lvEmployee_ctrl4_trBody" class="dGridRowClass">
	<td align="center">
                        <span id="ctl00_ContentPlaceHolder1_lvEmployee_ctrl4_lblSerial" class="label">5</span>
                    </td>
	<td align="left">
                        <a id="ctl00_ContentPlaceHolder1_lvEmployee_ctrl4_lnkEmployee" href="javascript:__doPostBack('ctl00$ContentPlaceHolder1$lvEmployee$ctrl4$lnkEmployee','')">Md Nazmul Haque</a>
                    </td>
	<td align="left">
                        <span id="ctl00_ContentPlaceHolder1_lvEmployee_ctrl4_lblDesignation" class="label">Senior Assistant Engineer</span>
                    </td>
	<td align="left">
                        <span id="ctl00_ContentPlaceHolder1_lvEmployee_ctrl4_lblEmail" class="label">sr.ae.admin@lged.gov.bd</span>
                    </td>
</tr>

            
                <tr id="ctl00_ContentPlaceHolder1_lvEmployee_ctrl5_trBody" class="dGridAltRowClass">
	<td align="center">
                        <span id="ctl00_ContentPlaceHolder1_lvEmployee_ctrl5_lblSerial" class="label">6</span>
                    </td>
	<td align="left">
                        <a id="ctl00_ContentPlaceHolder1_lvEmployee_ctrl5_lnkEmployee" href="javascript:__doPostBack('ctl00$ContentPlaceHolder1$lvEmployee$ctrl5$lnkEmployee','')">Mohammad Khayrol Basher</a>
                    </td>
	<td align="left">
                        <span id="ctl00_ContentPlaceHolder1_lvEmployee_ctrl5_lblDesignation" class="label">Senior Assistant Engineer</span>
                    </td>
	<td align="left">
                        <span id="ctl00_ContentPlaceHolder1_lvEmployee_ctrl5_lblEmail" class="label">sr.ae.admin.di@lged.gov.bd</span>
                    </td>
</tr>

            
                </table>
            
    </div>



                </div>
                <div class="right">
                    <div id="ctl00_dvEngRight">
                        <div id="ctl00_dvUnitContact" class="boxheader5">
                            <div>
                                LGED,
                                admin unit</div>
                        </div>
                        <div class="box">
                            <img id="ctl00_imgLgedUnit" src="images/lged_hq.jpg" alt="admin unit" style="border-width:0px;width: 187px;" />
                            
                            <div id="ctl00_divUnitAddress" class="lged_info" style="font-size: 10px;"><strong>Local Government Engineering Department (LGED)</strong><br />Level-5, LGED Bhaban, LGED, Agargaon, Sher-E-Bangla Nagar,  Dhaka-1207.+880-2-58151410</div>
                            
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
</form>
    </div>
</body>
</html>
