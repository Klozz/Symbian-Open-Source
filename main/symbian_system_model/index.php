

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="imagetoolbar" content="no" />
<title>Symbian^3 system model</title> 
<meta http-equiv="Content-Language" content="en" />
<link type="text/css" rel="stylesheet" href="/min/?f=css/sIFR-screen.css" media="screen"/>
<link type="text/css" rel="stylesheet" href="/min/?f=css/system_model_browser.css" media="screen"/>
<link type="text/css" rel="stylesheet" href="/min/?f=css/common.css" media="screen"/>
<link type="text/css" rel="stylesheet" href="/min/?f=css/print.css" media="print"/>
<link type="text/css" rel="stylesheet" href="/min/?f=css/sIFR-screen.css" media="screen"/>
<link type="text/css" rel="stylesheet" href="/css/dropdown.css" media="screen"/>
	<link href="/includes/dso_opensearch.xml" rel="search" type="application/opensearchdescription+xml" title="developer.symbian.org" />
<!--[if IE]>
<link href="/min/?f=css/iefix.css" rel="stylesheet" type="text/css" /> 
<![endif]-->

<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
<script type="text/javascript" src="/min/?g=dev_j"></script>
<script type="text/javascript" src="/js/jquery.cookie.js"></script>


<script type="text/javascript" src="/js/jquery.tools.min.js"></script>

<script type="text/javascript">
$(document).ready(function() {
$(".package").tooltip ();

});

</script>
</head>

<body>

  <!--START of header-->
  <!--googleoff: all-->
<div id="topannounce" class="announce" style="display:none;">
This website closing in December: <a href = "/wiki/Symbian_Foundation_web_sites_to_shut_down">Read more</a>
	<a href = "#" onclick = "$.cookie('notificationBar', 'closed', { expires: 30} ); $('#topannounce').slideUp('fast')" class="rightCloseButton" title = "Click to close this notification">X</a>   
</div>

<script type="text/javascript">
$(document).ready(function(){
	if ($.cookie('notificationBar') != 'closed') {
		$('#topannounce').fadeIn('slow');
	}
});	
</script>
<div id="site_top">
  <div id="global_links">
    <div id="bookmark_share"><a class="addthis_button" href="https://www.addthis.com/bookmark.php">Bookmark &amp; share</a>
      <script type="text/javascript" >
var addthis_config =
{
   data_use_cookies: false,
   data_use_flash: false
};</script>
      <script type="text/javascript" src="https://s7.addthis.com/js/250/addthis_widget.js?pub=xa-4aa66a0a5f0b282c">
</script>
<script type="text/javascript" src="http://m.developer.symbian.org/mobify/redirect.js"></script>
<script type="text/javascript">try{_mobify("http://m.developer.symbian.org/");} catch(err) {};</script>
    </div>
    <div id="our_sites">
      <ul id="sites1">
        <li><a id="our_sites_list" href="#">Our sites</a></li>
        <li>
          <ul id="our-sites-box">
            <li class="header">Symbian's other sites...</li>
            <li><a href="http://www.symbian.org" target="_blank">Symbian.org</a></li>
            <li><a href="http://ideas.symbian.org" target="_blank">Ideas</a></li>
            <li><a href="http://horizon.symbian.org" target="_blank">Horizon</a></li>
            <li><a href="http://symbiansigned.com" target="_blank">Signed</a></li>
            <li><a href="http://blog.symbian.org" target="_blank">Blog</a></li>
            <li><a href="http://blogcn.symbian.org" target="_blank">中文博客 (Chinese blog)</a></li>
            <li><a href="http://www2.symbian.org/cn/" target="_blank">中文网站 (Chinese)</a></li>
            <li><a href="http://blogjp.symbian.org" target="_blank">日本語ブログ (Japanese blog)</a></li>
            <li><a href="http://www.symbian.org/jp/" target="_blank">日本語サイト (Japanese)</a></li>
            <li class="footer">&#160;</li>
          </ul>
        </li>
      </ul>
    </div>
   
    
    <div id="international">
      <ul><li><a href="/">English</a></li>
      <li><a href="/jp/" title="日本語">日本語</a></li>
      <li class="last"><a id="china" href="/cn/" title="中文">中文</a></li>
      </ul>
 
    </div>
 
   <div id="login_bar">
      	
      <div id="signed_out">
        <form name="frmLogin" id="frmLogin" action="https://developer.symbian.org/main/user_profile/login.php" method="post">				      
          <label for="username">Username</label>
          <div class="fieldHolder">
            <input type="text" name="username" id="username" class="textInput"  />
          </div>
          <label for="password">Password</label>
          <div class="fieldHolder">
            <input type="password" name="password" id="password" class="textInput" />
          </div>
          <span class="login_button">[</span><input type="submit" name="submit" id="submit" value="Log in" /><span class="closing_bracket">]</span>
	 <a id="register" href="https://developer.symbian.org/main/user_profile/register.php">Register</a>	
	 <a id="forgot_password" href="https://developer.symbian.org/main/user_profile/forgot_password.php">Forgot password?</a>
        
	</form>
	  
	  <div class="clear">&#160;</div>
	</div>  
      </div>
      <!-- end login section -->
     
            
            
      </div>
  <div class="clear">&#160;</div>
  </div><!-- end login section -->

<div id="container">
    <div id="devnet_header"><a id="home" href="/"><span>Symbian developer community</span></a>
<!--START of Search Form-->		
			<div id="searchForm" class="right">				
				<form name="frmSearch" action="/search/search_results.php" method="get">
					<label for="txtSearch">Search</label>
		<div class="fieldHolder">
		<input type="text" name="txtSearch" id="txtSearch" class="textInput"
		value="Search" 
                onfocus="if(this.value == this.defaultValue) this.value = ''" />
					
    <input type="image" id="SearchButton" src="/img/skin1009/search_button.png" style="width:46px; height:47px" />
					</div>
					<br class="clear" />					
				</form>
			</div>
    
    </div>

	<div id="portal_nav">
		<ul id="dropmenu">
					<li id="m_item1" ><a href="/index.php" >Home</a>			
				
								
							</li>
						<li id="m_item2" ><a href="/main/source/index.php" >Source</a>			
				
								
				<ul>				
								
				<li><a href="/main/source/technology_domains/index.php">Technology domains</a></li>
								
								
				<li><a href="/main/source/packages/index.php">Packages</a></li>
								
								
				<li><a href="/main/symbian_system_model/index.php">System Model</a></li>
								
								
				<li><a href="/main/source/browse/index.php">Browse code</a></li>
								
								
				<li><a href="/bugs">Bug tracker</a></li>
								
								
				<li><a href="/wiki/index.php/Roadmap_for_the_Symbian_Platform">Roadmap</a></li>
								
								
				<li class="last"><a href="/main/source/ctd/">Collaborative Testing</a></li>
				</ul>			</li>
						<li id="m_item3" ><a href="/main/tools_and_kits/index.php" >Tools &amp; Kits</a>			
				
								
							</li>
						<li id="m_item4" ><a href="/main/documentation/index.php" >Documentation</a>			
				
								
				<ul>				
								
				<li><a href="/main/documentation/reference/s3/sdk/">Application reference Symbian^3</a></li>
								
								
				<li><a href="/main/documentation/reference/s3/pdk/">Product reference Symbian^3</a></li>
								
								
				<li><a href="/main/documentation/reference/s^2/doc_source/">Product reference Symbian^2</a></li>
								
								
				<li><a href="/wiki/">Wiki</a></li>
								
								
				<li class="last"><a href="/main/documentation/books/index.php">Books</a></li>
				</ul>			</li>
						<li id="m_item5" ><a href="/forum" >Forums</a>			
				
								
							</li>
						<li id="m_item6" ><a href="/main/services/index.php" >Services</a>			
				
								
				<ul>				
								
				<li><a href="http://horizon.symbian.org/">Symbian Horizon</a></li>
								
								
				<li><a href="/main/services/symbian_signed/index.php">Symbian Signed</a></li>
								
								
				<li><a href="/main/services/professional_services/index.php">Professional Services</a></li>
								
								
				<li><a href="/main/services/tech_support/index.php">Tech Support</a></li>
								
								
				<li class="last"><a href="/main/services/training/index.php">Training</a></li>
				</ul>			</li>
						<li id="m_item7" class="last"><a href="/main/about/index.php" >About</a>			
				
								
				<ul>				
								
				<li><a href="/main/about/going_open_source/index.php">Going Open Source</a></li>
								
								
				<li><a href="/main/about/councils/index.php">Councils</a></li>
								
								
				<li class="last"><a href="/main/about/get_involved/index.php">Get involved</a></li>
				</ul>			</li>
						
    </ul>

 
<script type="text/javascript">
// document ready
    $(document).ready(function(){
		highlightMenu('m_item2');			   
        $("#ArticleList").accordion({autoHeight: false});
        $("#colcontainer1").equalHeights(true);
        $("#colcontainer2").equalHeights(true);
        $("#dropmenu ul").css({display: "none"}); // Opera Fix
        $("#dropmenu li").hover(function(){
                $(this).find('ul:first').css({visibility: "visible",display: "none"}).show(225);
                },function(){
                $(this).find('ul:first').css({visibility: "hidden"});
                });
    });

</script>
	<div class="clear">&#160;</div>
  </div>
 <!--googleon: all-->
	
  <!--END of header-->
<div class="clear20"></div>
    </div>
    
<div id="contentContainer">
<div id="system-model-container">
	
<div id="smb-top">
<h1><span class="hidden">Symbian^3 System Model</span></h1>
</div>

<div class="horizontal-line"></div>
<table id="frame"><tr><td class="border-left"></td>
<td>

<div class="clear20"></div>
<div class="packages">
<table class="package-table">
<tr>
<td id="app" style="padding:0;background-color:#FFFFFF" >
<div class="package"><h5><span>Location</span></h5></div>
<div class="tooltip">
<div class="tooltip_top"></div>	
<div class="tooltip_mid">
<img src="/img/smb/FFFFFF.png" class="left" />    
<h2><a href="/main/source/packages/location">Location</a></h2>
<div class="tooltip-line"></div>
<p><strong>Summary</strong>
Contains applications primarily associated with navigation, mapping and location based services</p>
<div class="tooltip-line"></div>
<!--<p><strong>Package owner</strong> Lyrki Hoisko</p>-->
<p><strong>Links</strong> <a href="/wiki/index.php/Gsprofilesrv/Backlog">Backlog</a> <a href="/wiki/index.php/Gsprofilesrv">Wiki</a> <a href="/forum/forumdisplay.php?f=34">Forum</a> <a href="/mailman/listinfo/td-device_management-dev">Mailing List</a> <a href="/oss/MCL/sf/mw/gsprofilesrv">MCL</a>  <a href="/main/source/packages/location">Package</a>
</div>
<div class="tooltip_bottom"></div>	
</div>
</td>
<td id="app1" style="padding:0;background-color:#C7E347" rowspan="2">
<div class="package"><h5><span>Phone</span></h5></div>
<div class="tooltip">
<div class="tooltip_top"></div>	
<div class="tooltip_mid">
<img src="/img/smb/C7E347.png" class="left" />    
<h2><a href="/main/source/packages/phone">Phone</a></h2>
<div class="tooltip-line"></div>
<p><strong>Summary</strong>
Phone provides the native telephony functionality, from which the main feature is to enable user to manage phone calls</p>
<div class="tooltip-line"></div>
<!--<p><strong>Package owner</strong> Lyrki Hoisko</p>-->
<p><strong>Links</strong> <a href="/wiki/index.php/Imsrv_Package">Wiki</a> <a href="/forum/forumdisplay.php?f=39">Forum</a> <a href="/mailman/listinfo/imsrv-dev">Mailing List</a> <a href="/oss/MCL/sf/mw/imsrv/">MCL</a> <a href="/wiki/index.php/Wild_ducks_project">Wild Ducks Wiki</a> <a href="/forum/forumdisplay.php?f=62">Community Projects Forum</a> <a href="/mailman/listinfo/wild-ducks">Wild ducks developer mailing list</a> <a href="/wiki/index.php/Category:Wild_Ducks">Wild Ducks Articles</a> <a href="/wiki/index.php/Wild_ducks_project/Hardware">Wild Ducks Hardware</a> <a href="/wiki/index.php/Wild_ducks_project/Symbian">Wild Ducks Software</a> <a href="/wiki/index.php/Wild_ducks_project/Mentions">Wild Ducks Press</a> <a href="http://beagleboard.org/">Beagleboard.org</a> <a href="/oss/FCL/sf/incubator/wildducks/">FCL</a>  <a href="/main/source/packages/phone">Package</a>
</div>
<div class="tooltip_bottom"></div>	
</div>
</td>
<td id="app2" style="padding:0;background-color:#C7E347" >
<div class="package"><h5><span>Video Telephony</span></h5></div>
<div class="tooltip">
<div class="tooltip_top"></div>	
<div class="tooltip_mid">
<img src="/img/smb/C7E347.png" class="left" />    
<h2><a href="/main/source/packages/videotelephony">Video Telephony</a></h2>
<div class="tooltip-line"></div>
<p><strong>Summary</strong>
Package contains the functionality allowing the user to make and receive video calls.</p>
<div class="tooltip-line"></div>
<!--<p><strong>Package owner</strong> Lyrki Hoisko</p>-->
<p><strong>Links</strong> <a href="/mailman/listinfo/td-tools-dev">Tools mailing list</a> <a href="/oss/MCL/sftools/ana/staticanaapps/">MCL Static Analysis Apps</a> <a href="/oss/MCL/sftools/ana/staticanamdw/">MCL Static Analysis Middleware</a> <a href="/mailman/listinfo/comptana-dev">Package mailing list</a> <a href="/oss/MCL/sftools/ana/compatanaapps/">MCL Compatibility Analysis Apps</a> <a href="/oss/MCL/sftools/ana/compatanamdw/">MCL Compatibility Analysis MW</a> <a href="/wiki/index.php/Staticana">Staticana wiki</a> <a href="/wiki/index.php/Staticana/backlog">Package Backlog</a> <a href="http://developer.symbian.org/forum/forumdisplay.php?f=42">Forum</a>  <a href="/main/source/packages/videotelephony">Package</a>
</div>
<div class="tooltip_bottom"></div>	
</div>
</td>
<td id="app3" style="padding:0;background-color:#C7E347" >
<div class="package"><h5><span>PoC</span></h5></div>
<div class="tooltip">
<div class="tooltip_top"></div>	
<div class="tooltip_mid">
<img src="/img/smb/C7E347.png" class="left" />    
<h2><a href="/main/source/packages/poc">PoC</a></h2>
<div class="tooltip-line"></div>
<p><strong>Summary</strong>
The package provides Push-to-Talk Over Cellular (PoC) functionality. It offers the APIs for the client for initiating e.g.PoC calls.</p>
<div class="tooltip-line"></div>
<!--<p><strong>Package owner</strong> Lyrki Hoisko</p>-->
<p><strong>Links</strong> <a href="/forum/forumdisplay.php?f=42">Forum</a> <a href="/mailman/listinfo/eclipseenv-dev">Eclipseenv mailing list</a> <a href="/oss/MCL/sftools/dev/eclipseenv/eclipse/">MCL Eclipse Environment</a> <a href="/mailman/listinfo/ide-dev">Ide mailing list</a> <a href="/sfl/MCL/sftools/dev/ide/">MCL IDE</a> <a href="http://nokiacarbideoneclipse.blogspot.com/">Nokia Carbide.c++ on Eclipse Blog</a> <a href="http://www.eclipse.org">Eclipse.org</a> <a href="http://www.eclipse.org/projects/project_summary.php?projectid=tools.cdt">C/C++ Developer Tools project</a> <a href="http://www.eclipse.org/projects/project_summary.php?projectid=dsdp.dd">Device Debugging subproject of the Device Software Development Platform project</a> <a href="http://www.eclipse.org/projects/project_summary.php?projectid=modeling">Eclipse Modeling Project</a> <a href="http://www.eclipse.org/projects/project_summary.php?projectid=tools.gef">Graphical Editor Framework project</a> <a href="http://www.eclipse.org/projects/project_summary.php?projectid=eclipse.platform">Eclipse Platform project</a> <a href="/wiki/index.php/Ide">Ide wiki</a>  <a href="/main/source/packages/poc">Package</a>
</div>
<div class="tooltip_bottom"></div>	
</div>
</td>
<td id="app4" style="padding:0;background-color:#C7E347" >
<div class="package"><h5><span>IP Telephony</span></h5></div>
<div class="tooltip">
<div class="tooltip_top"></div>	
<div class="tooltip_mid">
<img src="/img/smb/C7E347.png" class="left" />    
<h2><a href="/main/source/packages/iptelephony">IP Telephony</a></h2>
<div class="tooltip-line"></div>
<p><strong>Summary</strong>
The package provides SIP (Session Initiation Protocol) based Voice-over-IP (VoIP) functionality.</p>
<div class="tooltip-line"></div>
<!--<p><strong>Package owner</strong> Lyrki Hoisko</p>-->
<p><strong>Links</strong> <a href="/forum/forumdisplay.php?f=42">Forum</a> <a href="/mailman/listinfo/td-tools-dev">Tools mailing list</a> <a href="/sfl/MCL/sftools/depl/sdkcreationmdw/">MCL SDK Creation Middleware</a> <a href="/wiki/index.php/Sdkcreation/Backlog">Backlog</a> <a href="/wiki/index.php/Sdkcreation">Sdkcreation wiki</a>  <a href="/main/source/packages/iptelephony">Package</a>
</div>
<div class="tooltip_bottom"></div>	
</div>
</td>
<td id="app5" style="padding:0;background-color:#F5B3D3" >
<div class="package"><h5><span>Files</span></h5></div>
<div class="tooltip">
<div class="tooltip_top"></div>	
<div class="tooltip_mid">
<img src="/img/smb/F5B3D3.png" class="left" />    
<h2><a href="/main/source/packages/files">Files</a></h2>
<div class="tooltip-line"></div>
<p><strong>Summary</strong>
The Files package includes applications for viewing and managing user data on the device</p>
<div class="tooltip-line"></div>
<!--<p><strong>Package owner</strong> Lyrki Hoisko</p>-->
<p><strong>Links</strong> <a href="/wiki/index.php/Organizer_Package/Backlog">Backlog</a> <a href="/wiki/index.php/Organizer_Package">Wiki</a> <a href="/forum/forumdisplay.php?f=39">Forum</a> <a href="/mailman/listinfo/organizer-dev">Mailing List</a> <a href="/oss/MCL/sf/app/organizer/">MCL</a> <a href="/oss/FCL/sf/incubator/python">FCL for Python </a> <a href="/forum/forumdisplay.php?f=13">Forum</a> <a href="http://croozeus.com/blogs/">Python Community Blog</a> <a href="/wiki/index.php/File:Python_2.0.0_symbian_signed.zip">Download Python 2.0.0</a> <a href="/wiki/index.php/Python">Python wiki</a>  <a href="/main/source/packages/files">Package</a>
</div>
<div class="tooltip_bottom"></div>	
</div>
</td>
<td id="app6" style="padding:0;background-color:#F5B3D3" rowspan="2">
<div class="package"><h5><span>Contacts</span></h5></div>
<div class="tooltip">
<div class="tooltip_top"></div>	
<div class="tooltip_mid">
<img src="/img/smb/F5B3D3.png" class="left" />    
<h2><a href="/main/source/packages/contacts">Contacts</a></h2>
<div class="tooltip-line"></div>
<p><strong>Summary</strong>
The contacts package offers services for managing contacts related data.</p>
<div class="tooltip-line"></div>
<!--<p><strong>Package owner</strong> Lyrki Hoisko</p>-->
<p><strong>Links</strong> <a href="/wiki/index.php/Messaging_Middleware">Wiki</a> <a href="/forum/forumdisplay.php?f=39">Forum</a> <a href="/mailman/listinfo/td-productivity-dev">Mailing List</a> <a href="/oss/MCL/sf/mw/messagingmw/">MCL</a> <a href="/wiki/index.php/Messaging_Middleware/Backlog">Backlog</a> <a href="/forum/forumdisplay.php?f=61">Forum</a> <a href="/mailman/listinfo/td-tools-dev">Tools mailing list</a> <a href="/mailman/listinfo/raptor-dev">raptor-dev mailing list (for SBSv2)</a> <a href="/oss/MCL/sftools/dev/build/">MCL Build</a> <a href="/wiki/index.php/Symbian_Build_System_v2">Symbian Build System v2 (SBSv2) documentation</a> <a href="/wiki/index.php/Introduction_to_Developing_Raptor_%28SBSv2%29">Introduction to Developing Raptor (SBSv2)</a> <a href="/oss/MCL/sf/os/buildtools/">MCL Build Tools (deprecated)</a> <a href="/oss/MCL/sftools/dev/hostenv">MCL Host Environment</a> <a href="/wiki/index.php/Build">Build wiki</a> <a href="/wiki/index.php/Build/Backlog">Backlog</a>  <a href="/main/source/packages/contacts">Package</a>
</div>
<div class="tooltip_bottom"></div>	
</div>
</td>
<td id="app7" style="padding:0;background-color:#F5B3D3" rowspan="2">
<div class="package"><h5><span>Organizer</span></h5></div>
<div class="tooltip">
<div class="tooltip_top"></div>	
<div class="tooltip_mid">
<img src="/img/smb/F5B3D3.png" class="left" />    
<h2><a href="/main/source/packages/organizer">Organizer</a></h2>
<div class="tooltip-line"></div>
<p><strong>Summary</strong>
Applications associated with PIM functionality, including Calendar, Clock, Notepad and Search</p>
<div class="tooltip-line"></div>
<!--<p><strong>Package owner</strong> Lyrki Hoisko</p>-->
<p><strong>Links</strong> <a href="/wiki/index.php/DLNA_Services_Package/Backlog">Backlog</a> <a href="/wiki/index.php/DLNA_Services_Package">Wiki</a> <a href="/forum/forumdisplay.php?f=33">Forum</a> <a href="/mailman/listinfo/td-device_connectivity-dev">Mailing List</a> <a href="/oss/MCL/sf/mw/dlnasrv/">MCL</a> <a href="/wiki/index.php/Helix_Package_Backlog">Backlog</a> <a href="/wiki/index.php/helix_Package">Wiki</a> <a href="/forum/forumdisplay.php?f=36">Forum</a> <a href="/mailman/listinfo/td-multimedia-dev">Mailing List</a> <a href="/oss/MCL/sf/mw/helix">MCL</a>  <a href="/main/source/packages/organizer">Package</a>
</div>
<div class="tooltip_bottom"></div>	
</div>
</td>
<td id="app8" style="padding:0;background-color:#F5B3D3" rowspan="2">
<div class="package"><h5><span>Messaging</span></h5></div>
<div class="tooltip">
<div class="tooltip_top"></div>	
<div class="tooltip_mid">
<img src="/img/smb/F5B3D3.png" class="left" />    
<h2><a href="/main/source/packages/messaging">Messaging</a></h2>
<div class="tooltip-line"></div>
<p><strong>Summary</strong>
The Messaging package provides the Messaging Center application, Messaging Viewers and Editors for supported (SMS/ MMS/ Email etc) message types, MMS Engine, UI/ UI data Message Type Modules and other related UI utilities.</p>
<div class="tooltip-line"></div>
<!--<p><strong>Package owner</strong> Lyrki Hoisko</p>-->
<p><strong>Links</strong> <a href="/wiki/index.php/lbs_backlog">Backlog</a> <a href="/forum/forumdisplay.php?f=35">Forum</a> <a href="/mailman/listinfo/td-location-dev">Mailing List</a> <a href="/oss/MCL/sf/os/lbs/">MCL</a> <a href="/wiki/index.php/LBS">Wiki</a>  <a href="/main/source/packages/messaging">Package</a>
</div>
<div class="tooltip_bottom"></div>	
</div>
</td>
<td id="app9" style="padding:0;background-color:#F5B3D3" >
<div class="package"><h5><span>Email</span></h5></div>
<div class="tooltip">
<div class="tooltip_top"></div>	
<div class="tooltip_mid">
<img src="/img/smb/F5B3D3.png" class="left" />    
<h2><a href="/main/source/packages/commonemail">Email</a></h2>
<div class="tooltip-line"></div>
<p><strong>Summary</strong>
The package contains a plug-in framework for email protocol implementations, an email application built on the top of the framework, plug-in implementations for IMAP4, POP3 and SMTP protocols, a message store service for email messages and some services...</p>
<div class="tooltip-line"></div>
<!--<p><strong>Package owner</strong> Lyrki Hoisko</p>-->
<p><strong>Links</strong> <a href="/wiki/index.php/Devicedbgsrvs/Backlog">Backlog</a> <a href="/wiki/index.php/Devicedbgsrvs">Devicedbgsrvs wiki</a> <a href="/forum/forumdisplay.php?f=42">Forum</a> <a href="/mailman/listinfo/devicedbgsrvs-dev">Devicedbgsrvs mailing list</a> <a href="/oss/MCL/sftools/dev/devicedbgsrvs/">MCL</a> <a href="/wiki/index.php/Wrttools">Wrttools wiki</a> <a href="/forum/forumdisplay.php?f=42">Forum</a> <a href="/mailman/listinfo/td-tools-dev">Tools mailing list</a> <a href="/oss/FCL/sftools/dev/eclipseenv/wrttools">FCL</a> <a href="/wiki/index.php/File:WRT_Tools_Developers_Guide_20090112.doc">Additional documentation</a>  <a href="/main/source/packages/commonemail">Package</a>
</div>
<div class="tooltip_bottom"></div>	
</div>
</td>
<td id="app10" style="padding:0;background-color:#F5B3D3" >
<div class="package"><h5><span>Conversation Apps</span></h5></div>
<div class="tooltip">
<div class="tooltip_top"></div>	
<div class="tooltip_mid">
<img src="/img/smb/F5B3D3.png" class="left" />    
<h2><a href="/main/source/packages/conversations">Conversation Apps</a></h2>
<div class="tooltip-line"></div>
<p><strong>Summary</strong>
This is a UI front end to the imsrv package. This provides a phonebook integrated IM/Presence/VoIP experience.</p>
<div class="tooltip-line"></div>
<!--<p><strong>Package owner</strong> Lyrki Hoisko</p>-->
<p><strong>Links</strong> <a href="/wiki/index.php/Printing_backlog">Backlog</a> <a href="/wiki/index.php/Printing_package">Wiki</a> <a href="/forum/forumdisplay.php?f=33">Forum</a> <a href="/mailman/listinfo/td-device_connectivity-dev">Mailing List</a> <a href="/oss/MCL/sf/app/printing/">MCL</a> <a href="/wiki/index.php/Graphics">Wiki</a> <a href="/forum/forumdisplay.php?f=43">Forum</a> <a href="/mailman/listinfo/td-user_interface-dev">Mailing List</a> <a href="/oss/MCL/sf/os/graphics/">MCL</a> <a href="http://developer.symbian.org/main/documentation/reference/s%5E3/doc_source/guide/guide/index.html">More graphics documentation</a> <a href="/wiki/index.php/Graphics_Package/Backlog">Graphics Backlog</a>  <a href="/main/source/packages/conversations">Package</a>
</div>
<div class="tooltip_bottom"></div>	
</div>
</td>
<td id="app11" style="padding:0;background-color:#F5B3D3" >
<div class="package"><h5><span>Instant Messenger</span></h5></div>
<div class="tooltip">
<div class="tooltip_top"></div>	
<div class="tooltip_mid">
<img src="/img/smb/F5B3D3.png" class="left" />    
<h2><a href="/main/source/packages/im">Instant Messenger</a></h2>
<div class="tooltip-line"></div>
<p><strong>Summary</strong>
The im package provides an IM client that uses the IMPS protocol.</p>
<div class="tooltip-line"></div>
<!--<p><strong>Package owner</strong> Lyrki Hoisko</p>-->
<p><strong>Links</strong>  <a href="/main/source/packages/im">Package</a>
</div>
<div class="tooltip_bottom"></div>	
</div>
</td>
<td id="app12" style="padding:0;background-color:#DF00BA" >
<div class="package"><h5><span>Camera</span></h5></div>
<div class="tooltip">
<div class="tooltip_top"></div>	
<div class="tooltip_mid">
<img src="/img/smb/DF00BA.png" class="left" />    
<h2><a href="/main/source/packages/camera">Camera</a></h2>
<div class="tooltip-line"></div>
<p><strong>Summary</strong>
A UI application for capturing still images and recording video clips.</p>
<div class="tooltip-line"></div>
<!--<p><strong>Package owner</strong> Lyrki Hoisko</p>-->
<p><strong>Links</strong> <a href="/wiki/index.php/Connectivity_Tools_Package/Backlog">Backlog</a> <a href="/wiki/index.php/Connectivity_Tools_Package">Wiki</a> <a href="/forum/forumdisplay.php?f=32">Forum</a> <a href="/oss/MCL/sf/app/conntools/">MCL</a> <a href="/wiki/index.php/SDK_Creation_Middleware">Wiki</a> <a href="/mailman/listinfo/td-tools-dev">Mailing List</a> <a href="/sfl/MCL/sftools/depl/sdkcreationmdw/">MCL</a>  <a href="/main/source/packages/camera">Package</a>
</div>
<div class="tooltip_bottom"></div>	
</div>
</td>
<td id="app13" style="padding:0;background-color:#DF00BA" >
<div class="package"><h5><span>Image Editor</span></h5></div>
<div class="tooltip">
<div class="tooltip_top"></div>	
<div class="tooltip_mid">
<img src="/img/smb/DF00BA.png" class="left" />    
<h2><a href="/main/source/packages/imgeditor">Image Editor</a></h2>
<div class="tooltip-line"></div>
<p><strong>Summary</strong>
The Image Editor package provides the image editor application.</p>
<div class="tooltip-line"></div>
<!--<p><strong>Package owner</strong> Lyrki Hoisko</p>-->
<p><strong>Links</strong>  <a href="/main/source/packages/imgeditor">Package</a>
</div>
<div class="tooltip_bottom"></div>	
</div>
</td>
<td id="app14" style="padding:0;background-color:#DF00BA" >
<div class="package"><h5><span>Video Editor</span></h5></div>
<div class="tooltip">
<div class="tooltip_top"></div>	
<div class="tooltip_mid">
<img src="/img/smb/DF00BA.png" class="left" />    
<h2><a href="/main/source/packages/videoeditor">Video Editor</a></h2>
<div class="tooltip-line"></div>
<p><strong>Summary</strong>
Video Editor package provides video editor application.</p>
<div class="tooltip-line"></div>
<!--<p><strong>Package owner</strong> Lyrki Hoisko</p>-->
<p><strong>Links</strong> <a href="/wiki/index.php/PoC_roadmap">Backlog</a> <a href="/forum/forumdisplay.php?f=38">Forum</a> <a href="/mailman/listinfo/td-personal_communications-dev">Mailing List</a> <a href="/sfl/MCL/sf/app/poc">MCL for Symbian^2</a>  <a href="/main/source/packages/videoeditor">Package</a>
</div>
<div class="tooltip_bottom"></div>	
</div>
</td>
<td id="app15" style="padding:0;background-color:#DF00BA" >
<div class="package"><h5><span>Media Gallery</span></h5></div>
<div class="tooltip">
<div class="tooltip_top"></div>	
<div class="tooltip_mid">
<img src="/img/smb/DF00BA.png" class="left" />    
<h2><a href="/main/source/packages/gallery">Media Gallery</a></h2>
<div class="tooltip-line"></div>
<p><strong>Summary</strong>
Gallery package provides all local multimedia content browsing applications.</p>
<div class="tooltip-line"></div>
<!--<p><strong>Package owner</strong> Lyrki Hoisko</p>-->
<p><strong>Links</strong> <a href="/wiki/index.php/Phone_backlog">Backlog</a> <a href="/wiki/index.php/Phone_package">Wiki</a> <a href="/forum/forumdisplay.php?f=38">Forum</a> <a href="/mailman/listinfo/td-personal_communications-dev">Mailing List</a> <a href="/oss/MCL/sf/app/phone">MCL</a> <a href="/oss/FCL/sf/app/phone">FCL</a>  <a href="/main/source/packages/gallery">Package</a>
</div>
<div class="tooltip_bottom"></div>	
</div>
</td>
<td id="app16" style="padding:0;background-color:#DF00BA" >
<div class="package"><h5><span>Video Player</span></h5></div>
<div class="tooltip">
<div class="tooltip_top"></div>	
<div class="tooltip_mid">
<img src="/img/smb/DF00BA.png" class="left" />    
<h2><a href="/main/source/packages/videoplayer">Video Player</a></h2>
<div class="tooltip-line"></div>
<p><strong>Summary</strong>
The Video Player package contains platform's video player applications and video playback related application layer components.</p>
<div class="tooltip-line"></div>
<!--<p><strong>Package owner</strong> Lyrki Hoisko</p>-->
<p><strong>Links</strong> <a href="/wiki/index.php/Metadatasrv_Package/Backlog">Backlog</a> <a href="/wiki/index.php/Metadatasrv_Package">Wiki</a> <a href="/forum/forumdisplay.php?f=36">Forum</a> <a href="/mailman/listinfo/metadatasrv-dev">Mailing List</a> <a href="/oss/MCL/sf/mw/metadatasrv/">MCL</a>  <a href="/main/source/packages/videoplayer">Package</a>
</div>
<div class="tooltip_bottom"></div>	
</div>
</td>
<td id="app17" style="padding:0;background-color:#DF00BA" >
<div class="package"><h5><span>Photos</span></h5></div>
<div class="tooltip">
<div class="tooltip_top"></div>	
<div class="tooltip_mid">
<img src="/img/smb/DF00BA.png" class="left" />    
<h2><a href="/main/source/packages/photos">Photos</a></h2>
<div class="tooltip-line"></div>
<p><strong>Summary</strong>
Photos package provides the visual experience for exploring, discovering, relieving and sharing imaging content.</p>
<div class="tooltip-line"></div>
<!--<p><strong>Package owner</strong> Lyrki Hoisko</p>-->
<p><strong>Links</strong> <a href="/wiki/index.php/Input_Methods_Package">Wiki</a> <a href="/forum/forumdisplay.php?f=42">Forum</a> <a href="/mailman/listinfo/td-user_interface-dev">Mailing List</a> <a href="/oss/MCL/sf/mw/inputmethods/">MCL</a>  <a href="/main/source/packages/photos">Package</a>
</div>
<div class="tooltip_bottom"></div>	
</div>
</td>
<td id="app18" style="padding:0;background-color:#DF00BA" >
<div class="package"><h5><span>Video Center</span></h5></div>
<div class="tooltip">
<div class="tooltip_top"></div>	
<div class="tooltip_mid">
<img src="/img/smb/DF00BA.png" class="left" />    
<h2><a href="/main/source/packages/videocenter">Video Center</a></h2>
<div class="tooltip-line"></div>
<p><strong>Summary</strong>
Contains Video Center application and user interfaces for viewing and management of videos and online video feeds.</p>
<div class="tooltip-line"></div>
<!--<p><strong>Package owner</strong> Lyrki Hoisko</p>-->
<p><strong>Links</strong> <a href="/wiki/index.php/XML_Services_Package/Backlog">Backlog</a> <a href="/wiki/index.php/XML_Services_Package">Wiki</a> <a href="/forum/forumdisplay.php?f=40">Forum</a> <a href="/mailman/listinfo/td-runtimes_and_web-dev">Mailing List</a> <a href="/oss/MCL/sf/os/xmlsrv/">MCL</a>  <a href="/main/source/packages/videocenter">Package</a>
</div>
<div class="tooltip_bottom"></div>	
</div>
</td>
<td id="app19" style="padding:0;background-color:#DF00BA" >
<div class="package"><h5><span>Music Player</span></h5></div>
<div class="tooltip">
<div class="tooltip_top"></div>	
<div class="tooltip_mid">
<img src="/img/smb/DF00BA.png" class="left" />    
<h2><a href="/main/source/packages/musicplayer">Music Player</a></h2>
<div class="tooltip-line"></div>
<p><strong>Summary</strong>
The musicplayer package contains the source code for the S60 Music Player application and related components.</p>
<div class="tooltip-line"></div>
<!--<p><strong>Package owner</strong> Lyrki Hoisko</p>-->
<p><strong>Links</strong> <a href="/wiki/index.php/Location_Apps_Backlog">Backlog</a> <a href="/forum/forumdisplay.php?f=35">Forum</a> <a href="/mailman/listinfo/td-location-dev">Mailing List</a> <a href="/oss/MCL/sf/app/location/">MCL</a> <a href="/wiki/index.php/Location_Package">Wiki</a> <a href="/wiki/index.php/Multimedia_Video_Package">Wiki</a> <a href="/forum/forumdisplay.php?f=21">Forum</a> <a href="/mailman/listinfo/td-multimedia-dev">Multimedia Tech Domain List</a> <a href="/oss/MCL/sf/os/mmvideo/">MCL</a> <a href="/oss/FCL/sf/os/mmvideo/">FCL</a> <a href="http://symbianmultimedia.wordpress.com/">Symbian Multimedia Blog</a>  <a href="/main/source/packages/musicplayer">Package</a>
</div>
<div class="tooltip_bottom"></div>	
</div>
</td>
<td id="app20" style="padding:0;background-color:#DF00BA" >
<div class="package"><h5><span>Radio</span></h5></div>
<div class="tooltip">
<div class="tooltip_top"></div>	
<div class="tooltip_mid">
<img src="/img/smb/DF00BA.png" class="left" />    
<h2><a href="/main/source/packages/radio">Radio</a></h2>
<div class="tooltip-line"></div>
<p><strong>Summary</strong>
The radio package contains the source code for S60 fm radio application and related components.</p>
<div class="tooltip-line"></div>
<!--<p><strong>Package owner</strong> Lyrki Hoisko</p>-->
<p><strong>Links</strong>  <a href="/main/source/packages/radio">Package</a>
</div>
<div class="tooltip_bottom"></div>	
</div>
</td>
<td id="app21" style="padding:0;background-color:#DF00BA" >
<div class="package"><h5><span>Voice Recorder</span></h5></div>
<div class="tooltip">
<div class="tooltip_top"></div>	
<div class="tooltip_mid">
<img src="/img/smb/DF00BA.png" class="left" />    
<h2><a href="/main/source/packages/voicerec">Voice Recorder</a></h2>
<div class="tooltip-line"></div>
<p><strong>Summary</strong>
The voicerec package contains the Voice Recorder application.</p>
<div class="tooltip-line"></div>
<!--<p><strong>Package owner</strong> Lyrki Hoisko</p>-->
<p><strong>Links</strong> <a href="/wiki/index.php/Securitysrv_package">Wiki</a> <a href="/forum/forumdisplay.php?f=41">Forum</a> <a href="/mailman/listinfo/securitysrv-dev">Mailing List</a> <a href="/oss/MCL/sf/mw/securitysrv/">MCL</a> <a href="/wiki/index.php/Security_Services_Package/Backlog">Backlog</a> <a href="/forum/forumdisplay.php?f=21">Forum</a> <a href="/mailman/listinfo/td-multimedia-dev">Mailing List</a> <a href="/oss/MCL/sf/adaptation/openmaxil.adapt/">MCL</a> <a href="/oss/FCL/sf/adaptation/openmaxil.adapt/">FCL</a>  <a href="/main/source/packages/voicerec">Package</a>
</div>
<div class="tooltip_bottom"></div>	
</div>
</td>
<td id="app22" style="padding:0;background-color:#FFC64A" >
<div class="package"><h5><span>Screen Saver</span></h5></div>
<div class="tooltip">
<div class="tooltip_top"></div>	
<div class="tooltip_mid">
<img src="/img/smb/FFC64A.png" class="left" />    
<h2><a href="/main/source/packages/screensaver">Screen Saver</a></h2>
<div class="tooltip-line"></div>
<p><strong>Summary</strong>
Screensaver monitors the system for user inactivity and displays graphical objects in case of prolonged inactivity.</p>
<div class="tooltip-line"></div>
<!--<p><strong>Package owner</strong> Lyrki Hoisko</p>-->
<p><strong>Links</strong> <a href="/wiki/index.php/Files_Package">Wiki</a> <a href="/forum/forumdisplay.php?f=39">Forum</a> <a href="/mailman/listinfo/td-productivity-dev">Mailing List</a> <a href="/oss/MCL/sf/app/files">MCL</a>  <a href="/main/source/packages/screensaver">Package</a>
</div>
<div class="tooltip_bottom"></div>	
</div>
</td>
<td id="app23" style="padding:0;background-color:#FFC64A" >
<div class="package"><h5><span>Home Screen</span></h5></div>
<div class="tooltip">
<div class="tooltip_top"></div>	
<div class="tooltip_mid">
<img src="/img/smb/FFC64A.png" class="left" />    
<h2><a href="/main/source/packages/homescreen">Home Screen</a></h2>
<div class="tooltip-line"></div>
<p><strong>Summary</strong>
Provides Homescreen and Menu applications, that enable the user to manage and use widgets and launch other applications.</p>
<div class="tooltip-line"></div>
<!--<p><strong>Package owner</strong> Lyrki Hoisko</p>-->
<p><strong>Links</strong> <a href="/wiki/index.php/Host_Environment_Package">Wiki</a> <a href="/forum/forumdisplay.php?f=42">Forum</a> <a href="/mailman/listinfo/td-tools-dev">Mailing List</a> <a href="/forum/showthread.php?t=6433">The project proposal discussion</a> <a href="http://OpenMAR.org">OpenMAR.org</a> <a href="/wiki/index.php/OpenMAR">OpenMAR Project Wiki</a> <a href="http://openmar.org/forum">OpenMAR discussion board</a> <a href="/oss/FCL/sf/incubator/openmar/">Code repository</a> <a href="/mailman/listinfo/other-commit">Commit mailing list</a> <a href="http://developer.symbian.org/forum/forumdisplay.php?f=62">Symbian Community Project Forum</a>  <a href="/main/source/packages/homescreen">Package</a>
</div>
<div class="tooltip_bottom"></div>	
</div>
</td>
<td id="app24" style="padding:0;background-color:#FFC64A" >
<div class="package"><h5><span>Profile</span></h5></div>
<div class="tooltip">
<div class="tooltip_top"></div>	
<div class="tooltip_mid">
<img src="/img/smb/FFC64A.png" class="left" />    
<h2><a href="/main/source/packages/profile">Profile</a></h2>
<div class="tooltip-line"></div>
<p><strong>Summary</strong>
An application allowing the user to modify the profile settings and the active profile.</p>
<div class="tooltip-line"></div>
<!--<p><strong>Package owner</strong> Lyrki Hoisko</p>-->
<p><strong>Links</strong> <a href="/wiki/index.php/DRM_Package/Backlog">Backlog</a> <a href="/wiki/index.php/DRM_Package">Wiki</a> <a href="/forum/forumdisplay.php?f=41">Forum</a> <a href="/mailman/listinfo/drm-dev">Mailing List</a> <a href="/oss/MCL/sf/mw/drm/">MCL</a> <a href="/wiki/index.php/DRM_Package_Scorecard">Package scorecard</a> <a href="/forum/forumdisplay.php?f=21">Forum</a> <a href="/mailman/listinfo/td-multimedia-dev">Mailing List</a> <a href="/oss/MCL/sf/os/mmcamera/">MCL</a> <a href="/oss/FCL/sf/os/mmcamera/">FCL</a>  <a href="/main/source/packages/profile">Package</a>
</div>
<div class="tooltip_bottom"></div>	
</div>
</td>
<td id="app25" style="padding:0;background-color:#FFC64A" rowspan="2">
<div class="package"><h5><span>Help</span></h5></div>
<div class="tooltip">
<div class="tooltip_top"></div>	
<div class="tooltip_mid">
<img src="/img/smb/FFC64A.png" class="left" />    
<h2><a href="/main/source/packages/helps">Help</a></h2>
<div class="tooltip-line"></div>
<p><strong>Summary</strong>
The Helps package provides all help application and help API, including context sensitive help.</p>
<div class="tooltip-line"></div>
<!--<p><strong>Package owner</strong> Lyrki Hoisko</p>-->
<p><strong>Links</strong> <a href="/wiki/index.php/Settings_UIs/Backlog">Backlog</a> <a href="/wiki/index.php/Settings_UIs">Wiki</a> <a href="/forum/forumdisplay.php?f=34">Forum</a> <a href="/mailman/listinfo/td-device_management-dev">Mailing List</a> <a href="/oss/MCL/sf/app/settingsuis/">MCL</a>  <a href="/main/source/packages/helps">Package</a>
</div>
<div class="tooltip_bottom"></div>	
</div>
</td>
<td id="app26" style="padding:0;background-color:#FFC64A" rowspan="2">
<div class="package"><h5><span>Techview</span></h5></div>
<div class="tooltip">
<div class="tooltip_top"></div>	
<div class="tooltip_mid">
<img src="/img/smb/FFC64A.png" class="left" />    
<h2><a href="/main/source/packages/techview">Techview</a></h2>
<div class="tooltip-line"></div>
<p><strong>Summary</strong>
This contains test applications and user interface to be used on legacy symbian hardware reference platforms</p>
<div class="tooltip-line"></div>
<!--<p><strong>Package owner</strong> Lyrki Hoisko</p>-->
<p><strong>Links</strong>  <a href="/main/source/packages/techview">Package</a>
</div>
<div class="tooltip_bottom"></div>	
</div>
</td>
</tr>

<tr>
<td id="app27" style="background-color:#C7E347" >

<div class="package"><h5><span>Multi Media Sharing UIs</span></h5></div>
<div class="tooltip" style="clear:both;top:300px">
<div class="tooltip_top"></div>	
<div class="tooltip_mid">
<img src="/img/smb/C7E347.png" class="left" /> 
<h2><a href="/main/source/packages/mmsharinguis">Multi Media Sharing UIs</a></h2>
<div class="tooltip-line"></div>
<p><strong>Summary</strong>
The package provides unidirectional peer-to-peer media streaming also known as Real-Time Media Sharing i.e. sharing the camera view or the clip from file during the cellular call to the remote user.</p>
<div class="tooltip-line"></div>
<!--<p><strong>Package owner</strong> Lyrki Hoisko</p>-->
<p><strong>Links</strong> <a href="/wiki/index.php/Conversations_Package">Wiki</a> <a href="/forum/forumdisplay.php?f=39">Forum</a> <a href="/mailman/listinfo/td-productivity-dev">Mailing List</a> <a href="/oss/MCL/sf/app/conversations/">MCL</a> <a href="/forum/forumdisplay.php?f=62">Community projects forum</a> <a href="/mailman/listinfo/compiler-compatibility">Discuss issues on the mailing list </a> <a href="/wiki/index.php/One_Step_Closer_To_Freedom_-_GCCE_Compatibility_Fix_Walkthrough">Walk-through the steps to get up and running</a> <a href="/wiki/index.php/Compiler_Compatibility">Compiler Compatibility Wiki: general info about getting Symbian working with different compilers</a> <a href="/wiki/index.php/Software_Freedom_Fighters_project">Project Wiki</a> <a href="/wiki/index.php/Compiler_Compatibility/Branch_and_Build">How the foundation helps with builds</a> <a href="/oss/FCL/sf/incubator/freedomfighters">Repo for examples and scripts</a>  <a href="/main/source/packages/mmsharinguis">Package</a>
</div>
<div class="tooltip_bottom"></div>	
</div>
</td>
<td id="app28" style="background-color:#00B14D" >

<div class="package"><h5><span>Settings UIs</span></h5></div>
<div class="tooltip" style="clear:both;top:300px">
<div class="tooltip_top"></div>	
<div class="tooltip_mid">
<img src="/img/smb/00B14D.png" class="left" /> 
<h2><a href="/main/source/packages/settingsuis">Settings UIs</a></h2>
<div class="tooltip-line"></div>
<p><strong>Summary</strong>
The SettingsUIs package includes applications for managing UI settings</p>
<div class="tooltip-line"></div>
<!--<p><strong>Package owner</strong> Lyrki Hoisko</p>-->
<p><strong>Links</strong> <a href="/wiki/index.php/Build_Package">Wiki</a> <a href="/forum/forumdisplay.php?f=61">Forum</a> <a href="/mailman/listinfo/td-tools-dev">td-tools-dev mailing list</a> <a href="/oss/MCL/sftools/dev/build/">MCL</a> <a href="http://developer.symbian.org/wiki/index.php/Symbian_Build_System_v2">Symbian Build System v2 documentation</a> <a href="/mailman/listinfo/raptor-dev">raptor-dev mailing list (for SBSv2)</a> <a href="/oss/FCL/sftools/dev/build/">FCL</a> <a href="http://developer.symbian.org/wiki/index.php/Introduction_to_Developing_Raptor_%28SBSv2%29">Introduction to Developing Raptor (SBSv2)</a> <a href="/mailman/listinfo/td-tools-dev">Tools mailing list</a> <a href="/oss/MCL/sf/tools/swconfigtools">MCL Software Config Tools</a> <a href="/forum/forumdisplay.php?f=42">Forum</a> <a href="/mailman/listinfo/swconfigmdw-dev">swconfigmdw-dev mailing list</a> <a href="/oss/MCL/sftools/depl/swconfigapps">MCL SW Configuration Apps</a> <a href="/oss/MCL/sftools/depl/swconfigmdw/">MCL SW Configuration Middleware</a> <a href="/wiki/index.php/Swconfig">Swconfig wiki</a>  <a href="/main/source/packages/settingsuis">Package</a>
</div>
<div class="tooltip_bottom"></div>	
</div>
</td>
<td id="app29" style="background-color:#00B14D" >

<div class="package"><h5><span>Content Control</span></h5></div>
<div class="tooltip" style="clear:both;top:300px">
<div class="tooltip_top"></div>	
<div class="tooltip_mid">
<img src="/img/smb/00B14D.png" class="left" /> 
<h2><a href="/main/source/packages/contentcontrol">Content Control</a></h2>
<div class="tooltip-line"></div>
<p><strong>Summary</strong>
OMA Data Synchronization</p>
<div class="tooltip-line"></div>
<!--<p><strong>Package owner</strong> Lyrki Hoisko</p>-->
<p><strong>Links</strong>  <a href="/main/source/packages/contentcontrol">Package</a>
</div>
<div class="tooltip_bottom"></div>	
</div>
</td>
<td id="app30" style="background-color:#00B14D" >

<div class="package"><h5><span>Device Control</span></h5></div>
<div class="tooltip" style="clear:both;top:300px">
<div class="tooltip_top"></div>	
<div class="tooltip_mid">
<img src="/img/smb/00B14D.png" class="left" /> 
<h2><a href="/main/source/packages/devicecontrol">Device Control</a></h2>
<div class="tooltip-line"></div>
<p><strong>Summary</strong>
This package contains mostly the user interface sources for Device Manager, Application Management, Device Diagnostics, PnP Mobile Services, along with some DM standard management object.</p>
<div class="tooltip-line"></div>
<!--<p><strong>Package owner</strong> Lyrki Hoisko</p>-->
<p><strong>Links</strong> <a href="/wiki/index.php/RnD_Tools_Package/Backlog">Backlog</a> <a href="/wiki/index.php/RnD_Tools_package">Wiki</a> <a href="/forum/forumdisplay.php?f=42">Forum</a> <a href="/mailman/listinfo/td-tools-dev">Mailing List</a> <a href="/oss/MCL/sf/app/rndtools">MCL in app layer</a> <a href="/wiki/index.php/Graphics_UIs_Package">Wiki</a> <a href="/mailman/listinfo/td-user_interface-dev">Mailing List</a> <a href="/oss/MCL/sf/app/graphicsuis/">MCL</a>  <a href="/main/source/packages/devicecontrol">Package</a>
</div>
<div class="tooltip_bottom"></div>	
</div>
</td>
<td id="app31" style="background-color:#FF5F00" >

<div class="package"><h5><span>Printing</span></h5></div>
<div class="tooltip" style="clear:both;top:300px">
<div class="tooltip_top"></div>	
<div class="tooltip_mid">
<img src="/img/smb/FF5F00.png" class="left" /> 
<h2><a href="/main/source/packages/printing">Printing</a></h2>
<div class="tooltip-line"></div>
<p><strong>Summary</strong>
The printing package contains applications used for printing images. The applications support printers using PictBridge, Bluetooth, DPOF or UPnP (WLAN). The printing application implements AIW plug-in so it can be started from any application.</p>
<div class="tooltip-line"></div>
<!--<p><strong>Package owner</strong> Lyrki Hoisko</p>-->
<p><strong>Links</strong> <a href="/wiki/index.php/DeviceControl_Package/Backlog">Backlog</a> <a href="/wiki/index.php/DeviceControl_Package">Wiki</a> <a href="/forum/forumdisplay.php?f=34">Forum</a> <a href="/mailman/listinfo/td-device_management-dev">Mailing List</a> <a href="/oss/MCL/sf/app/devicecontrol/">MCL</a>  <a href="/main/source/packages/printing">Package</a>
</div>
<div class="tooltip_bottom"></div>	
</div>
</td>
<td id="app32" style="background-color:#F5B3D3" >

<div class="package"><h5><span>Dictionary</span></h5></div>
<div class="tooltip" style="clear:both;top:300px">
<div class="tooltip_top"></div>	
<div class="tooltip_mid">
<img src="/img/smb/F5B3D3.png" class="left" /> 
<h2><a href="/main/source/packages/dictionary">Dictionary</a></h2>
<div class="tooltip-line"></div>
<p><strong>Summary</strong>
This is a Japanese user dictionary for Japanese input.</p>
<div class="tooltip-line"></div>
<!--<p><strong>Package owner</strong> Lyrki Hoisko</p>-->
<p><strong>Links</strong> <a href="/wiki/index.php/Iptelephony_backlog">Backlog</a> <a href="/wiki/index.php/Iptelephony_package">Wiki</a> <a href="/forum/forumdisplay.php?f=38">Forum</a> <a href="/mailman/listinfo/td-personal_communications-dev">Mailing List</a> <a href="/oss/MCL/sf/app/iptelephony">MCL</a>  <a href="/main/source/packages/dictionary">Package</a>
</div>
<div class="tooltip_bottom"></div>	
</div>
</td>
<td id="app33" style="background-color:#DF00BA" >

<div class="package"><h5><span>Image Viewer UI</span></h5></div>
<div class="tooltip" style="clear:both;top:300px">
<div class="tooltip_top"></div>	
<div class="tooltip_mid">
<img src="/img/smb/DF00BA.png" class="left" /> 
<h2><a href="/main/source/packages/imgvieweruis">Image Viewer UI</a></h2>
<div class="tooltip-line"></div>
<p><strong>Summary</strong>
Image Viewer Application, intended for viewing purposes only and it is launched as an embedded application.</p>
<div class="tooltip-line"></div>
<!--<p><strong>Package owner</strong> Lyrki Hoisko</p>-->
<p><strong>Links</strong> <a href="/wiki/index.php/Mmsharinguis_backlog">Backlog</a> <a href="/wiki/index.php/Mmsharinguis_package">Wiki</a> <a href="/forum/forumdisplay.php?f=38">Forum</a> <a href="/mailman/listinfo/td-personal_communications-dev">Mailing List</a> <a href="/oss/MCL/sf/app/mmsharinguis">MCL</a>  <a href="/main/source/packages/imgvieweruis">Package</a>
</div>
<div class="tooltip_bottom"></div>	
</div>
</td>
<td id="app34" style="background-color:#FFC64A" >

<div class="package"><h5><span>Graphics UIs</span></h5></div>
<div class="tooltip" style="clear:both;top:300px">
<div class="tooltip_top"></div>	
<div class="tooltip_mid">
<img src="/img/smb/FFC64A.png" class="left" /> 
<h2><a href="/main/source/packages/graphicsuis">Graphics UIs</a></h2>
<div class="tooltip-line"></div>
<p><strong>Summary</strong>
</p>
<div class="tooltip-line"></div>
<!--<p><strong>Package owner</strong> Lyrki Hoisko</p>-->
<p><strong>Links</strong> <a href="/wiki/index.php/Ipappsrv_backlog">Backlog</a> <a href="/wiki/index.php/Ipappsrv_package">Wiki</a> <a href="/forum/forumdisplay.php?f=38">Forum</a> <a href="/mailman/listinfo/td-personal_communications-dev">Mailing List</a> <a href="/oss/MCL/sf/mw/ipappsrv">MCL</a>  <a href="/main/source/packages/graphicsuis">Package</a>
</div>
<div class="tooltip_bottom"></div>	
</div>
</td>
<td id="app35" style="background-color:#FFC64A" >

<div class="package"><h5><span>Speech Services</span></h5></div>
<div class="tooltip" style="clear:both;top:300px">
<div class="tooltip_top"></div>	
<div class="tooltip_mid">
<img src="/img/smb/FFC64A.png" class="left" /> 
<h2><a href="/main/source/packages/speechsrv">Speech Services</a></h2>
<div class="tooltip-line"></div>
<p><strong>Summary</strong>
Provides speech synthesis and recognition related services.</p>
<div class="tooltip-line"></div>
<!--<p><strong>Package owner</strong> Lyrki Hoisko</p>-->
<p><strong>Links</strong> <a href="/wiki/index.php/Remote_Storage_Package/Backlog">Backlog</a> <a href="/wiki/index.php/Remote_Storage_Package">Wiki</a> <a href="/forum/forumdisplay.php?f=33">Forum</a> <a href="/mailman/listinfo/td-device_connectivity-dev">Mailing List</a> <a href="/oss/MCL/sf/mw/remotestorage">MCL</a>  <a href="/main/source/packages/speechsrv">Package</a>
</div>
<div class="tooltip_bottom"></div>	
</div>
</td>
<td id="app36" style="background-color:#0097D9" >

<div class="package"><h5><span>Web UIs</span></h5></div>
<div class="tooltip" style="clear:both;top:300px">
<div class="tooltip_top"></div>	
<div class="tooltip_mid">
<img src="/img/smb/0097D9.png" class="left" /> 
<h2><a href="/main/source/packages/webuis">Web UIs</a></h2>
<div class="tooltip-line"></div>
<p><strong>Summary</strong>
The webuis package contains the application-side source code for Nokia&rsquo;s S60 Browser and related applications.In addition to the Browser app, these include the PushMTM message viewer, a collection of Browser plugins, Video Services and OperatorM.</p>
<div class="tooltip-line"></div>
<!--<p><strong>Package owner</strong> Lyrki Hoisko</p>-->
<p><strong>Links</strong>  <a href="/main/source/packages/webuis">Package</a>
</div>
<div class="tooltip_bottom"></div>	
</div>
</td>
<td id="app37" style="background-color:#0097D9" >

<div class="package"><h5><span>Java</span></h5></div>
<div class="tooltip" style="clear:both;top:300px">
<div class="tooltip_top"></div>	
<div class="tooltip_mid">
<img src="/img/smb/0097D9.png" class="left" /> 
<h2><a href="/main/source/packages/jrt">Java</a></h2>
<div class="tooltip-line"></div>
<p><strong>Summary</strong>
This package is a Mobile Runtime for Java Applications (abbreviated jrt) under the Runtimes technology domain.</p>
<div class="tooltip-line"></div>
<!--<p><strong>Package owner</strong> Lyrki Hoisko</p>-->
<p><strong>Links</strong>  <a href="/main/source/packages/jrt">Package</a>
</div>
<div class="tooltip_bottom"></div>	
</div>
</td>
<td id="app38" style="background-color:#C6C5C6" >

<div class="package"><h5><span>R &amp; D Tools</span></h5></div>
<div class="tooltip" style="clear:both;top:300px">
<div class="tooltip_top"></div>	
<div class="tooltip_mid">
<img src="/img/smb/C6C5C6.png" class="left" /> 
<h2><a href="/main/source/packages/wrttools">R &amp; D Tools</a></h2>
<div class="tooltip-line"></div>
<p><strong>Summary</strong>
Tools needed to build and debug Web Runtime (WRT) applications</p>
<div class="tooltip-line"></div>
<!--<p><strong>Package owner</strong> Lyrki Hoisko</p>-->
<p><strong>Links</strong> <a href="/forum/forumdisplay.php?f=37">Forum</a> <a href="/mailman/listinfo/td-multimedia_apps-dev">MM Apps Mailing List</a> <a href="/oss/MCL/sf/app/imgeditor/">MCL</a>  <a href="/main/source/packages/wrttools">Package</a>
</div>
<div class="tooltip_bottom"></div>	
</div>
</td>
</tr>


<tr>
<td colspan="27" class="top">
<div class="packages-top">
<h3>Applications</h3>
</div>
</td></tr>
</table>	
</div>


<div class="clear20"></div>

<div class="packages">
<table class="package-table">
<tr>
<td id="app39" style="background-color:#FFFFFF" >

<div class="package"><h5><span>Location Service</span></h5></div>
<div class="tooltip">
<div class="tooltip_top"></div>	
<div class="tooltip_mid">
<img src="/img/smb/FFFFFF.png" class="left" /> 
<h2><a href="/main/source/packages/locationsrv">Location Service</a></h2>
<div class="tooltip-line"></div>
<p><strong>Summary</strong>
The Locating Services package in the MW layer provides enablers to process the location request received from locationFW in the OS Layer.</p>
<div class="tooltip-line"></div>
<!--<p><strong>Package owner</strong> Lyrki Hoisko</p>-->
<p><strong>Links</strong>  <a href="/main/source/packages/locationsrv">Package</a>
</div>
<div class="tooltip_bottom"></div>	
</div>
</td>
<td id="app40" style="background-color:#8469B1" >

<div class="package"><h5><span>Wireless Access</span></h5></div>
<div class="tooltip">
<div class="tooltip_top"></div>	
<div class="tooltip_mid">
<img src="/img/smb/8469B1.png" class="left" /> 
<h2><a href="/main/source/packages/wirelessacc">Wireless Access</a></h2>
<div class="tooltip-line"></div>
<p><strong>Summary</strong>
The package contains WLAN related collections for connection and settings management.</p>
<div class="tooltip-line"></div>
<!--<p><strong>Package owner</strong> Lyrki Hoisko</p>-->
<p><strong>Links</strong> <a href="/wiki/index.php/Screensaver_Package">Wiki</a> <a href="/forum/forumdisplay.php?f=43">Forum</a> <a href="/mailman/listinfo/td-user_interface-dev">Mailing List</a> <a href="/oss/MCL/sf/app/screensaver/">MCL</a> <a href="/wiki/index.php/Screensaver_Package/Backlog">Backlog</a>  <a href="/main/source/packages/wirelessacc">Package</a>
</div>
<div class="tooltip_bottom"></div>	
</div>
</td>
<td id="app41" style="background-color:#8469B1" >

<div class="package"><h5><span>VPN Client</span></h5></div>
<div class="tooltip">
<div class="tooltip_top"></div>	
<div class="tooltip_mid">
<img src="/img/smb/8469B1.png" class="left" /> 
<h2><a href="/main/source/packages/vpnclient">VPN Client</a></h2>
<div class="tooltip-line"></div>
<p><strong>Summary</strong>
Vpnclient provides support for virtual private network (VPN) connections.</p>
<div class="tooltip-line"></div>
<!--<p><strong>Package owner</strong> Lyrki Hoisko</p>-->
<p><strong>Links</strong> <a href="/forum/forumdisplay.php?f=31">Forum</a> <a href="/mailman/listinfo/td-os_base_services-dev">Mailing List</a> <a href="/oss/MCL/sf/os/boardsupport/">MCL</a> <a href="/wiki/index.php/RemoteMgmt_Package/Backlog">Backlog</a> <a href="/wiki/index.php/RemoteMgmt_Package">Wiki</a> <a href="/forum/forumdisplay.php?f=34">Forum</a> <a href="/mailman/listinfo/td-device_management-dev">Mailing List</a> <a href="/oss/MCL/sf/mw/remotemgmt/">MCL</a> <a href="/mailman/listinfo/radio-dev">Mailing List</a> <a href="/oss/MCL/sf/app/radio/">MCL</a>  <a href="/main/source/packages/vpnclient">Package</a>
</div>
<div class="tooltip_bottom"></div>	
</div>
</td>
<td id="app42" style="background-color:#C7E347" >

<div class="package"><h5><span>IP App Services</span></h5></div>
<div class="tooltip">
<div class="tooltip_top"></div>	
<div class="tooltip_mid">
<img src="/img/smb/C7E347.png" class="left" /> 
<h2><a href="/main/source/packages/ipappsrv">IP App Services</a></h2>
<div class="tooltip-line"></div>
<p><strong>Summary</strong>
Provides services for establishing, modifying and terminating IP based multimedia sessions and traversing through network address translators.</p>
<div class="tooltip-line"></div>
<!--<p><strong>Package owner</strong> Lyrki Hoisko</p>-->
<p><strong>Links</strong> <a href="/wiki/index.php/Generic_Applications_Support_Package/Backlog">Backlog</a> <a href="/wiki/index.php/Generic_Applications_Support_Package">Wiki</a> <a href="/forum/forumdisplay.php?f=40">Forum</a> <a href="/mailman/listinfo/td-runtimes_and_web-dev">Mailing List</a> <a href="/oss/MCL/sf/mw/appsupport/">MCL</a> <a href="/forum/forumdisplay.php?f=42">Forum</a> <a href="/mailman/listinfo/td-tools-dev">Tools mailing list</a> <a href="/oss/MCL/sftools/ana/testcreationandmgmt/">MCL Test Creation and Management</a> <a href="/oss/MCL/sftools/ana/testexec/">MCL Test Execution</a> <a href="/oss/MCL/sftools/ana/testfw/">MCL Test Frameworks</a> <a href="/wiki/index.php/Test">Test package wiki</a> <a href="/wiki/index.php/Test_Package_Backlog">Backlog</a>  <a href="/main/source/packages/ipappsrv">Package</a>
</div>
<div class="tooltip_bottom"></div>	
</div>
</td>
<td id="app43" style="background-color:#C7E347" >

<div class="package"><h5><span>Telephony &amp; SIM</span></h5></div>
<div class="tooltip">
<div class="tooltip_top"></div>	
<div class="tooltip_mid">
<img src="/img/smb/C7E347.png" class="left" /> 
<h2><a href="/main/source/packages/phonesrv">Telephony &amp; SIM</a></h2>
<div class="tooltip-line"></div>
<p><strong>Summary</strong>
Provides middleware services to telephony-enabled applications by building on cellular abstraction APIs. Includes call engine, CBS and SIM application toolkit.</p>
<div class="tooltip-line"></div>
<!--<p><strong>Package owner</strong> Lyrki Hoisko</p>-->
<p><strong>Links</strong> <a href="/forum/forumdisplay.php?f=42">Forum</a> <a href="/mailman/listinfo/td-tools-dev">Tools mailing list</a> <a href="/oss/MCL/sftools/ana/dynaanaapps/">MCL Dynamic Analysis Apps</a> <a href="/oss/MCL/sftools/ana/dynaanamdw/">MCL Dynamic Analysis Middleware</a> <a href="/oss/MCL/sftools/ana/dynaanactrlandcptr/">MCL Dynamic Analysis Control and Capture</a> <a href="/oss/MCL/sf/os/osrndtools">MCL OS RnD Tools in OS layer</a> <a href="/oss/MCL/sf/mw/platformtools">MCL Platform Tools in MW layer</a> <a href="/oss/MCL/sf/app/rndtools">MCL RnD Tools in APP layer</a> <a href="/wiki/index.php/Dynaana">Dynaana wiki</a>  <a href="/main/source/packages/phonesrv">Package</a>
</div>
<div class="tooltip_bottom"></div>	
</div>
</td>
<td id="app44" style="background-color:#F5B3D3" >

<div class="package"><h5><span>Messaging Middleware</span></h5></div>
<div class="tooltip">
<div class="tooltip_top"></div>	
<div class="tooltip_mid">
<img src="/img/smb/F5B3D3.png" class="left" /> 
<h2><a href="/main/source/packages/messagingmw">Messaging Middleware</a></h2>
<div class="tooltip-line"></div>
<p><strong>Summary</strong>
Messaging Middleware is a package under the Productivity tech-domain, that handles the processing of various types of Messages such as SMS, MMS and Email. It offers middleware level services that are used by the Messaging client applications.</p>
<div class="tooltip-line"></div>
<!--<p><strong>Package owner</strong> Lyrki Hoisko</p>-->
<p><strong>Links</strong> <a href="/sfl/MCL/sftools/dev/ui">MCL</a> <a href="/forum/forumdisplay.php?f=42">Forum</a> <a href="/mailman/listinfo/ui-dev">ui-dev mailing list</a> <a href="/mailman/listinfo/td-tools-dev">Tools mailing list</a> <a href="/wiki/index.php/Ui">Ui package wiki</a>  <a href="/main/source/packages/messagingmw">Package</a>
</div>
<div class="tooltip_bottom"></div>	
</div>
</td>
<td id="app45" style="background-color:#58D0F4" >

<div class="package"><h5><span>Video Utils</span></h5></div>
<div class="tooltip">
<div class="tooltip_top"></div>	
<div class="tooltip_mid">
<img src="/img/smb/58D0F4.png" class="left" /> 
<h2><a href="/main/source/packages/videoutils">Video Utils</a></h2>
<div class="tooltip-line"></div>
<p><strong>Summary</strong>
Videoutils package contains middleware components for Video Center and Video Player</p>
<div class="tooltip-line"></div>
<!--<p><strong>Package owner</strong> Lyrki Hoisko</p>-->
<p><strong>Links</strong> <a href="/wiki/index.php/Test_Execution_Package/Backlog">Backlog</a> <a href="/wiki/index.php/Test_Execution_Package">Wiki</a> <a href="/forum/forumdisplay.php?f=42">Forum</a> <a href="/mailman/listinfo/td-tools-dev">Mailing List</a> <a href="/sfl/MCL/sftools/ana/testexec/">MCL</a> <a href="/wiki/index.php/Stubs">Stubs wiki</a> <a href="/mailman/listinfo/td-tools-dev">Tools mailing list</a> <a href="/oss/MCL/sf/adaptation/stubs/">MCL</a> <a href="/forum/forumdisplay.php?f=42">Forum</a>  <a href="/main/source/packages/videoutils">Package</a>
</div>
<div class="tooltip_bottom"></div>	
</div>
</td>
<td id="app46" style="background-color:#F5B3D3" >

<div class="package"><h5><span>IM &amp; Presence</span></h5></div>
<div class="tooltip">
<div class="tooltip_top"></div>	
<div class="tooltip_mid">
<img src="/img/smb/F5B3D3.png" class="left" /> 
<h2><a href="/main/source/packages/imsrv">IM &amp; Presence</a></h2>
<div class="tooltip-line"></div>
<p><strong>Summary</strong>
The IMSRV package provides a framework to manage different protocols that provide Presence and IM, and also support VoIP. The framework provides session management, protocol instantiation and management of features.</p>
<div class="tooltip-line"></div>
<!--<p><strong>Package owner</strong> Lyrki Hoisko</p>-->
<p><strong>Links</strong> <a href="/wiki/index.php/Doctools/Backlog">Backlog</a> <a href="/wiki/index.php/Doctools">Doctools wiki</a> <a href="/mailman/listinfo/td-tools-dev">Tools mailing list</a> <a href="/oss/MCL/sftools/depl/doctools/">MCL</a> <a href="/wiki/index.php/Information_about_the_C%2B%2B_Developer_Libraries">Information about the C++ Developer Libraries</a>  <a href="/main/source/packages/imsrv">Package</a>
</div>
<div class="tooltip_bottom"></div>	
</div>
</td>
<td id="app47" style="background-color:#F5B3D3" >

<div class="package"><h5><span>Legacy Presence</span></h5></div>
<div class="tooltip">
<div class="tooltip_top"></div>	
<div class="tooltip_mid">
<img src="/img/smb/F5B3D3.png" class="left" /> 
<h2><a href="/main/source/packages/legacypresence">Legacy Presence</a></h2>
<div class="tooltip-line"></div>
<p><strong>Summary</strong>
Implementation of the SIMPLE (Session initiation protocol for Instant Messaging and Presence Leveraging Extensions) protocol.</p>
<div class="tooltip-line"></div>
<!--<p><strong>Package owner</strong> Lyrki Hoisko</p>-->
<p><strong>Links</strong>  <a href="/main/source/packages/legacypresence">Package</a>
</div>
<div class="tooltip_bottom"></div>	
</div>
</td>
<td id="app48" style="background-color:#F5B3D3" >

<div class="package"><h5><span>Open Services</span></h5></div>
<div class="tooltip">
<div class="tooltip_top"></div>	
<div class="tooltip_mid">
<img src="/img/smb/F5B3D3.png" class="left" /> 
<h2><a href="/main/source/packages/opensrv">Open Services</a></h2>
<div class="tooltip-line"></div>
<p><strong>Summary</strong>
Open Services (opensrv) pkg offers XMPP service. This provides telepathy framwork along with the gabble as connection manager (CM) and loudmouth as simple and easy to use library.</p>
<div class="tooltip-line"></div>
<!--<p><strong>Package owner</strong> Lyrki Hoisko</p>-->
<p><strong>Links</strong>  <a href="/main/source/packages/opensrv">Package</a>
</div>
<div class="tooltip_bottom"></div>	
</div>
</td>
<td id="app49" style="background-color:#00B14D" >

<div class="package"><h5><span>Remote Mgmt</span></h5></div>
<div class="tooltip">
<div class="tooltip_top"></div>	
<div class="tooltip_mid">
<img src="/img/smb/00B14D.png" class="left" /> 
<h2><a href="/main/source/packages/remotemgmt">Remote Mgmt</a></h2>
<div class="tooltip-line"></div>
<p><strong>Summary</strong>
This package contains sources for OMA Device Management, Firmware Update over-the-air, OMA Provisioning and Device Diagnostics protocol implementation.</p>
<div class="tooltip-line"></div>
<!--<p><strong>Package owner</strong> Lyrki Hoisko</p>-->
<p><strong>Links</strong> <a href="/wiki/index.php/Platform_Tools_package/Backlog">Backlog</a> <a href="/wiki/index.php/Platform_Tools_package">Wiki</a> <a href="/forum/forumdisplay.php?f=42">Forum</a> <a href="/mailman/listinfo/td-tools-dev">Mailing List</a> <a href="/oss/MCL/sf/mw/platformtools">MCL in mw layer</a> <a href="/wiki/index.php/Hapticsservices_Package">Wiki</a> <a href="/forum/forumdisplay.php?f=43">Forum</a> <a href="/mailman/listinfo/td-user_interface-dev">Mailing List</a> <a href="/oss/MCL/sf/mw/hapticsservices/">MCL</a>  <a href="/main/source/packages/remotemgmt">Package</a>
</div>
<div class="tooltip_bottom"></div>	
</div>
</td>
<td id="app50" style="background-color:#FF5F00" >

<div class="package"><h5><span>DLNA Services</span></h5></div>
<div class="tooltip">
<div class="tooltip_top"></div>	
<div class="tooltip_mid">
<img src="/img/smb/FF5F00.png" class="left" /> 
<h2><a href="/main/source/packages/dlnasrv">DLNA Services</a></h2>
<div class="tooltip-line"></div>
<p><strong>Summary</strong>
DLNA Services is a MW layer package that provides the functionality for controlling media in home UPnP/DLNA environment.</p>
<div class="tooltip-line"></div>
<!--<p><strong>Package owner</strong> Lyrki Hoisko</p>-->
<p><strong>Links</strong> <a href="/wiki/index.php/OS_Security_Package">Wiki</a> <a href="/forum/forumdisplay.php?f=41">Forum</a> <a href="/mailman/listinfo/security-dev">Mailing List</a> <a href="/oss/MCL/sf/os/security/">MCL</a> <a href="/wiki/index.php/OS_Security_Package/Backlog">Backlog</a> <a href="/wiki/index.php/OS_Security_Package_Scorecard">Scorecard</a> <a href="/wiki/index.php/Speech_Services_Package">Wiki</a> <a href="/mailman/listinfo/td-user_interface-dev">Mailing List</a> <a href="/oss/MCL/sf/app/speechsrv/">MCL</a> <a href="/wiki/index.php/Speech_Services_Package/Backlog">Backlog</a>  <a href="/main/source/packages/dlnasrv">Package</a>
</div>
<div class="tooltip_bottom"></div>	
</div>
</td>
<td id="app51" style="background-color:#58D0F4" >

<div class="package"><h5><span>Image Handling</span></h5></div>
<div class="tooltip">
<div class="tooltip_top"></div>	
<div class="tooltip_mid">
<img src="/img/smb/58D0F4.png" class="left" /> 
<h2><a href="/main/source/packages/imghandling">Image Handling</a></h2>
<div class="tooltip-line"></div>
<p><strong>Summary</strong>
Package contains IHL (image handling library) and Thumbnail manager for fast access to image, video and audio (cover art) thumbnails.</p>
<div class="tooltip-line"></div>
<!--<p><strong>Package owner</strong> Lyrki Hoisko</p>-->
<p><strong>Links</strong> <a href="/wiki/index.php/Remoteconn_backlog">Backlog</a> <a href="/wiki/index.php/Remoteconn_package">Wiki</a> <a href="/forum/forumdisplay.php?f=33">Forum</a> <a href="/mailman/listinfo/remoteconn_dev">Mailing List</a> <a href="/oss/MCL/sf/mw/remoteconn/">MCL</a>  <a href="/main/source/packages/imghandling">Package</a>
</div>
<div class="tooltip_bottom"></div>	
</div>
</td>
<td id="app52" style="background-color:#58D0F4" >

<div class="package"><h5><span>Metadata Services</span></h5></div>
<div class="tooltip">
<div class="tooltip_top"></div>	
<div class="tooltip_mid">
<img src="/img/smb/58D0F4.png" class="left" /> 
<h2><a href="/main/source/packages/metadatasrv">Metadata Services</a></h2>
<div class="tooltip-line"></div>
<p><strong>Summary</strong>
Metadatasrv package contains currently Media Fetch API.</p>
<div class="tooltip-line"></div>
<!--<p><strong>Package owner</strong> Lyrki Hoisko</p>-->
<p><strong>Links</strong> <a href="/wiki/index.php/Compatibility_Analysis_Middleware_package">Wiki</a> <a href="/forum/forumdisplay.php?f=42">Forum</a> <a href="/mailman/listinfo/comptana-dev">Mailing List</a> <a href="/sfl/MCL/sftools/ana/compatanamdw/">MCL</a> <a href="/mailman/listinfo/td-productivity-dev">Mailing List</a> <a href="http://telepathy.freedesktop.org/wiki/">Telepathy Framework Wiki</a> <a href="http://www.freedesktop.org/wiki/Software/dbus">DBus IPC Wiki</a> <a href="http://xmpp.org/xsf/">XMPP Foundation </a> <a href="http://xmpp.org/rfcs/rfc3920.html">RFC 3920</a> <a href="http://groups.google.com/group/loudmouth-dev/">Loudmouth Project</a> <a href="/forum/forumdisplay.php?f=39">Forum</a> <a href="/oss/MCL/sf/mw/opensrv">MCL</a>  <a href="/main/source/packages/metadatasrv">Package</a>
</div>
<div class="tooltip_bottom"></div>	
</div>
</td>
<td id="app53" style="background-color:#58D0F4" >

<div class="package"><h5><span>Metadata System</span></h5></div>
<div class="tooltip">
<div class="tooltip_top"></div>	
<div class="tooltip_mid">
<img src="/img/smb/58D0F4.png" class="left" /> 
<h2><a href="/main/source/packages/mds">Metadata System</a></h2>
<div class="tooltip-line"></div>
<p><strong>Summary</strong>
Provides APIs for accessing metadata of phone's media content (images, videos, audio)</p>
<div class="tooltip-line"></div>
<!--<p><strong>Package owner</strong> Lyrki Hoisko</p>-->
<p><strong>Links</strong> <a href="/wiki/index.php/Eclipse_Environment_Package">Wiki</a> <a href="/forum/forumdisplay.php?f=42">Forum</a> <a href="/mailman/listinfo/eclipseenv-dev">Mailing List</a> <a href="/oss/MCL/sftools/dev/eclipseenv/eclipse/">MCL</a>  <a href="/main/source/packages/mds">Package</a>
</div>
<div class="tooltip_bottom"></div>	
</div>
</td>
<td id="app54" style="background-color:#58D0F4" >

<div class="package"><h5><span>Multimedia UI</span></h5></div>
<div class="tooltip">
<div class="tooltip_top"></div>	
<div class="tooltip_mid">
<img src="/img/smb/58D0F4.png" class="left" /> 
<h2><a href="/main/source/packages/mmuifw">Multimedia UI</a></h2>
<div class="tooltip-line"></div>
<p><strong>Summary</strong>
UI Components for Multimedia applications</p>
<div class="tooltip-line"></div>
<!--<p><strong>Package owner</strong> Lyrki Hoisko</p>-->
<p><strong>Links</strong> <a href="/wiki/index.php/Build_Tools_Package">Wiki</a> <a href="/forum/forumdisplay.php?f=42">Forum</a> <a href="/mailman/listinfo/td-tools-dev">Mailing List</a> <a href="/oss/MCL/sf/os/buildtools/">MCL</a>  <a href="/main/source/packages/mmuifw">Package</a>
</div>
<div class="tooltip_bottom"></div>	
</div>
</td>
<td id="app55" style="background-color:#DF00BA" >

<div class="package"><h5><span>Camera Services</span></h5></div>
<div class="tooltip">
<div class="tooltip_top"></div>	
<div class="tooltip_mid">
<img src="/img/smb/DF00BA.png" class="left" /> 
<h2><a href="/main/source/packages/camerasrv">Camera Services</a></h2>
<div class="tooltip-line"></div>
<p><strong>Summary</strong>
Still and video camera application engine and middleware services</p>
<div class="tooltip-line"></div>
<!--<p><strong>Package owner</strong> Lyrki Hoisko</p>-->
<p><strong>Links</strong>  <a href="/main/source/packages/camerasrv">Package</a>
</div>
<div class="tooltip_bottom"></div>	
</div>
</td>
<td id="app56" style="background-color:#FFFFFF" >

<div class="package"><h5><span>Multimedia Application Frameworks</span></h5></div>
<div class="tooltip">
<div class="tooltip_top"></div>	
<div class="tooltip_mid">
<img src="/img/smb/FFFFFF.png" class="left" /> 
<h2><a href="/main/source/packages/mmappfw">Multimedia Application Frameworks</a></h2>
<div class="tooltip-line"></div>
<p><strong>Summary</strong>
The mmappfw package contains middleware supporting applications that browse, manage and consume multimedia content. These are split into MPX and Multimedia App Components.</p>
<div class="tooltip-line"></div>
<!--<p><strong>Package owner</strong> Lyrki Hoisko</p>-->
<p><strong>Links</strong> <a href="/wiki/index.php/Application_Installation_Package/Backlog">Backlog</a> <a href="/wiki/index.php/Application_Installation_Package">Wiki</a> <a href="/forum/forumdisplay.php?f=41">Forum</a> <a href="/mailman/listinfo/appinstall-dev">Mailing List</a> <a href="/oss/MCL/sf/mw/appinstall/">MCL</a> <a href="/forum/forumdisplay.php?f=21">Forum</a> <a href="/mailman/listinfo/td-multimedia-dev">Mailing List</a> <a href="/oss/MCL/sf/os/openmaxil/">MCL</a> <a href="/oss/FCL/sf/os/openmaxil/">FCL</a>  <a href="/main/source/packages/mmappfw">Package</a>
</div>
<div class="tooltip_bottom"></div>	
</div>
</td>
<td id="app57" style="background-color:#FFC64A" >

<div class="package"><h5><span>Home screen srv</span></h5></div>
<div class="tooltip">
<div class="tooltip_top"></div>	
<div class="tooltip_mid">
<img src="/img/smb/FFC64A.png" class="left" /> 
<h2><a href="/main/source/packages/home screen srv">Home screen srv</a></h2>
<div class="tooltip-line"></div>
<p><strong>Summary</strong>
Provides frameworks and services for Homescreen and Menu applications.</p>
<div class="tooltip-line"></div>
<!--<p><strong>Package owner</strong> Lyrki Hoisko</p>-->
<p><strong>Links</strong> <a href="/oss/MCL/sf/mw/webextensions/">MCL</a>  <a href="/main/source/packages/home screen srv">Package</a>
</div>
<div class="tooltip_bottom"></div>	
</div>
</td>
<td id="app58" style="background-color:#0097D9" >

<div class="package"><h5><span>Servicea API PW</span></h5></div>
<div class="tooltip">
<div class="tooltip_top"></div>	
<div class="tooltip_mid">
<img src="/img/smb/0097D9.png" class="left" /> 
<h2><a href="/main/source/packages/serviceapifw">Servicea API PW</a></h2>
<div class="tooltip-line"></div>
<p><strong>Summary</strong>
Service API framework provide services to facilitate the interaction between non-native runtimes and native services.</p>
<div class="tooltip-line"></div>
<!--<p><strong>Package owner</strong> Lyrki Hoisko</p>-->
<p><strong>Links</strong> <a href="/wiki/index.php/Netprotocols/Backlog">Backlog</a> <a href="/forum/forumdisplay.php?f=32">Forum</a> <a href="/mailman/listinfo/td-data_communications-dev">Mailing List</a> <a href="/wiki/index.php/Netprotocols">Wiki</a> <a href="/oss/MCL/sf/mw/netprotocols">MCL</a>  <a href="/main/source/packages/serviceapifw">Package</a>
</div>
<div class="tooltip_bottom"></div>	
</div>
</td>
<td id="app59" style="background-color:#0097D9" >

<div class="package"><h5><span>Service API</span></h5></div>
<div class="tooltip">
<div class="tooltip_top"></div>	
<div class="tooltip_mid">
<img src="/img/smb/0097D9.png" class="left" /> 
<h2><a href="/main/source/packages/serviceapi">Service API</a></h2>
<div class="tooltip-line"></div>
<p><strong>Summary</strong>
Service APIs (SAPI) are the middleware APIs that provide a high level of abstraction of a service provided by a given domain.</p>
<div class="tooltip-line"></div>
<!--<p><strong>Package owner</strong> Lyrki Hoisko</p>-->
<p><strong>Links</strong> <a href="/wiki/index.php/IpAppProtocols_BackLog">Backlog</a> <a href="/wiki/index.php/IpAppProtocols_Package">Wiki</a> <a href="/forum/forumdisplay.php?f=32">Forum</a> <a href="/mailman/listinfo/td-data_communications-dev">Mailing List</a> <a href="/oss/MCL/sf/mw/ipappprotocols">MCL</a> <a href="/wiki/index.php/Webruntime">Wiki</a> <a href="/wiki/index.php/Webruntime/Backlog">Backlog</a> <a href="/oss/MCL/sf/mw/webruntime">MCL</a> <a href="/oss/FCL/sf/mw/webruntime">FCL</a> <a href="/forum/forumdisplay.php?f=21">Forum</a> <a href="/mailman/listinfo/td-runtimes_and_web-dev">Mailing List</a>  <a href="/main/source/packages/serviceapi">Package</a>
</div>
<div class="tooltip_bottom"></div>	
</div>
</td>
<td id="app60" style="background-color:#0097D9" >

<div class="package"><h5><span>Web</span></h5></div>
<div class="tooltip">
<div class="tooltip_top"></div>	
<div class="tooltip_mid">
<img src="/img/smb/0097D9.png" class="left" /> 
<h2><a href="/main/source/packages/web">Web</a></h2>
<div class="tooltip-line"></div>
<p><strong>Summary</strong>
The web package contains the WebEngine, WebRuntime (WRT) and utility components that perform the majority of tasks related to establishing network connections, loading, parsing and rendering web content, and handling non-browser content such as image, M...</p>
<div class="tooltip-line"></div>
<!--<p><strong>Package owner</strong> Lyrki Hoisko</p>-->
<p><strong>Links</strong>  <a href="/main/source/packages/web">Package</a>
</div>
<div class="tooltip_bottom"></div>	
</div>
</td>
</tr>


<tr>
<td id="app61" style="background-color:#0097D9" >
<div class="package"><h5><span>Generic Applications Support</span></h5></div>
<div class="tooltip">
<div class="tooltip_top"></div>	
<div class="tooltip_mid">
<img src="/img/smb/0097D9.png" class="left" /> 
<h2><a href="/main/source/packages/appsupport">Generic Applications Support</a></h2>
<div class="tooltip-line"></div>
<p><strong>Summary</strong>
Generic Applications Support is a package under the Runtimes tech-domain, offering a variety of middleware level services to applications. Such services include (but not just limited to) the Applications Framework, Context Framework, Settings Framew...</p>
<div class="tooltip-line"></div>
<!--<p><strong>Package owner</strong> Lyrki Hoisko</p>-->
<p><strong>Links</strong> <a href="/wiki/index.php/Vpnclient_Package/Backlog">Backlog</a> <a href="/wiki/index.php/Vpnclient_Package">Wiki</a> <a href="/forum/forumdisplay.php?f=32">Forum</a> <a href="/mailman/listinfo/vpnclient-dev">Mailing List</a> <a href="/oss/MCL/sf/mw/vpnclient/">MCL</a> <a href="/wiki/index.php/Desktop_Software_Package/Backlog">Backlog</a> <a href="/mailman/listinfo/td-device_connectivity-dev">Mailing List</a> <a href="/sfl/FCL/interim/desktopsw/">MCL</a>  <a href="/main/source/packages/appsupport">Package</a>
</div>
<div class="tooltip_bottom"></div>	
</div>
</td>
<td id="app62" style="background-color:#FF007D" >
<div class="package"><h5><span>Security Services</span></h5></div>
<div class="tooltip">
<div class="tooltip_top"></div>	
<div class="tooltip_mid">
<img src="/img/smb/FF007D.png" class="left" /> 
<h2><a href="/main/source/packages/securitysrv">Security Services</a></h2>
<div class="tooltip-line"></div>
<p><strong>Summary</strong>
Security services package contains key/device lock and certificate related security components.</p>
<div class="tooltip-line"></div>
<!--<p><strong>Package owner</strong> Lyrki Hoisko</p>-->
<p><strong>Links</strong> <a href="/wiki/index.php/Video_Center_Package">Wiki</a> <a href="/forum/forumdisplay.php?f=37">Forum</a> <a href="/mailman/listinfo/td-multimedia_apps-dev">Mailing List</a> <a href="/oss/MCL/sf/app/videocenter/">MCL</a> <a href="/wiki/index.php/QEMU_Backlog">Backlog</a> <a href="/forum/forumdisplay.php?f=31">Forum</a> <a href="/mailman/listinfo/td-os_base_services-dev">Base Services mailing list</a> <a href="/oss/MCL/sf/adaptation/qemu/">MCL</a> <a href="http://www.qemu.org">QEMU home page</a> <a href="/mailman/listinfo/qemu-dev">qemu-dev mailing list</a> <a href="/wiki/index.php/Syborg_%26_QEMU">Main QEMU wiki</a>  <a href="/main/source/packages/securitysrv">Package</a>
</div>
<div class="tooltip_bottom"></div>	
</div>
</td>
<td id="app63" style="background-color:#FF007D" >
<div class="package"><h5><span>DRM</span></h5></div>
<div class="tooltip">
<div class="tooltip_top"></div>	
<div class="tooltip_mid">
<img src="/img/smb/FF007D.png" class="left" /> 
<h2><a href="/main/source/packages/drm">DRM</a></h2>
<div class="tooltip-line"></div>
<p><strong>Summary</strong>
DRM package provides services for usage rights management of DRM-protected content, decrypting the DRM-protected content, centralized error handling for DRM-related errors and UI for DRM-specific settings.</p>
<div class="tooltip-line"></div>
<!--<p><strong>Package owner</strong> Lyrki Hoisko</p>-->
<p><strong>Links</strong> <a href="/wiki/index.php/Kernelhwsrv/Backlog">Package Roadmap</a> <a href="/wiki/index.php/Kernelhwsrv">Kernel and Hardware Services Wiki</a> <a href="/forum/forumdisplay.php?f=31">OS Base Services Forum</a> <a href="/mailman/listinfo/td-os_base_services-dev">Mailing List</a> <a href="/oss/MCL/sf/os/kernelhwsrv/">MCL</a> <a href="/main/documentation/khs_reference/khs.zip">Kernel and Hardware Services Documentation</a> <a href="http://developer.symbian.org/main/documentation/reference/s3/pdk/GUID-E3D2A6ED-8192-563D-8966-DD96B3AF1783.html">Kernel and Hardware Services Guides</a> <a href="/oss/FCL/sf/os/kernelhwsrv/">FCL</a> <a href="/wiki/index.php/Internet_Radio_Package">Wiki</a> <a href="/forum/forumdisplay.php?f=37">Forum</a> <a href="/mailman/listinfo/td-multimedia_apps-dev">Mailing List</a> <a href="/wiki/index.php/Symbian^4">Symbian^4</a>  <a href="/main/source/packages/drm">Package</a>
</div>
<div class="tooltip_bottom"></div>	
</div>
</td>
<td id="app64" style="background-color:#8469B1" >
<div class="package"><h5><span>Access Security</span></h5></div>
<div class="tooltip">
<div class="tooltip_top"></div>	
<div class="tooltip_mid">
<img src="/img/smb/8469B1.png" class="left" /> 
<h2><a href="/main/source/packages/accesssec">Access Security</a></h2>
<div class="tooltip-line"></div>
<p><strong>Summary</strong>
Access Security package contains protocols and settings UIs for WLAN and VPN access authentication and key negotiation. The package includes Extensible Authenication Protocol (EAP) framework, a variety of specific EAP methods, IEEE 802.11i/WPA/WPA2 auth...</p>
<div class="tooltip-line"></div>
<!--<p><strong>Package owner</strong> Lyrki Hoisko</p>-->
<p><strong>Links</strong>  <a href="/main/source/packages/accesssec">Package</a>
</div>
<div class="tooltip_bottom"></div>	
</div>
</td>
<td id="app65" style="background-color:#8469B1" >
<div class="package"><h5><span>IP Connection Management</span></h5></div>
<div class="tooltip">
<div class="tooltip_top"></div>	
<div class="tooltip_mid">
<img src="/img/smb/8469B1.png" class="left" /> 
<h2><a href="/main/source/packages/ipconnmgmt">IP Connection Management</a></h2>
<div class="tooltip-line"></div>
<p><strong>Summary</strong>
TCP/IP stack interface management and monitoring.</p>
<div class="tooltip-line"></div>
<!--<p><strong>Package owner</strong> Lyrki Hoisko</p>-->
<p><strong>Links</strong> <a href="/wiki/index.php/Test_Framework_and_Tools_Packages/Backlog">Backlog</a> <a href="/wiki/index.php/Test_Frameworks_Package">Wiki</a> <a href="/forum/forumdisplay.php?f=42">Forum</a> <a href="/mailman/listinfo/td-tools-dev">Mailing List</a> <a href="/sfl/MCL/sftools/ana/testfw/">MCL</a> <a href="/wiki/index.php/UserEmulator">User Emulator</a> <a href="/wiki/index.php/SVGT_Package">Wiki</a> <a href="/mailman/listinfo/td-user_interface-dev">Mailing List</a> <a href="/oss/MCL/sf/mw/svgt/">MCL</a>  <a href="/main/source/packages/ipconnmgmt">Package</a>
</div>
<div class="tooltip_bottom"></div>	
</div>
</td>
<td id="app66" style="background-color:#8469B1" >
<div class="package"><h5><span>Netprotocols</span></h5></div>
<div class="tooltip">
<div class="tooltip_top"></div>	
<div class="tooltip_mid">
<img src="/img/smb/8469B1.png" class="left" /> 
<h2><a href="/main/source/packages/netprotocols">Netprotocols</a></h2>
<div class="tooltip-line"></div>
<p><strong>Summary</strong>
The Netprotocols package provides multipurpose application layer protocols(HTTP, WAP) and supporting utility libraries such as Bookmarks, URI permission services</p>
<div class="tooltip-line"></div>
<!--<p><strong>Package owner</strong> Lyrki Hoisko</p>-->
<p><strong>Links</strong> <a href="/wiki/index.php/FlashLite_Package">Wiki</a> <a href="/forum/forumdisplay.php?f=40">Forum</a> <a href="/mailman/listinfo/td-runtimes_and_web-dev">Mailing List</a> <a href="http://developer.symbian.org/webbugs/show_bug.cgi?id=5990">Creation of package</a>  <a href="/main/source/packages/netprotocols">Package</a>
</div>
<div class="tooltip_bottom"></div>	
</div>
</td>
<td id="app67" style="background-color:#8469B1" >
<div class="package"><h5><span>IP App protocols</span></h5></div>
<div class="tooltip">
<div class="tooltip_top"></div>	
<div class="tooltip_mid">
<img src="/img/smb/8469B1.png" class="left" /> 
<h2><a href="/main/source/packages/ipappprotocols">IP App protocols</a></h2>
<div class="tooltip-line"></div>
<p><strong>Summary</strong>
The IP app protocol package provides the protocols like SIP and RTP which are required for managing IP based multimedia sessions like VoIP</p>
<div class="tooltip-line"></div>
<!--<p><strong>Package owner</strong> Lyrki Hoisko</p>-->
<p><strong>Links</strong> <a href="/wiki/index.php/Video_Player_Package/Backlog">Backlog</a> <a href="/wiki/index.php/Video_Player_Package">Wiki</a> <a href="/forum/forumdisplay.php?f=37">Forum</a> <a href="/mailman/listinfo/td-multimedia_apps-dev">Mailing List</a> <a href="/oss/MCL/sf/app/videoplayer/">MCL</a> <a href="/oss/MCL/sf/mw/gstreamer/">MCL</a> <a href="/forum/forumdisplay.php?f=36">Forum</a> <a href="/mailman/listinfo/td-multimedia-dev">td-multimedia-dev mailing list</a> <a href="/oss/FCL/sf/mw/gstreamer/">FCL</a> <a href="http://www.gstreamer.net/">gstreamer open source multimedia framework</a> <a href="http://developer.symbian.org/wiki/index.php/Gst_Backlog">Backlog</a>  <a href="/main/source/packages/ipappprotocols">Package</a>
</div>
<div class="tooltip_bottom"></div>	
</div>
</td>
<td id="app68" style="background-color:#00B14D" >
<div class="package"><h5><span>networkingdm</span></h5></div>
<div class="tooltip">
<div class="tooltip_top"></div>	
<div class="tooltip_mid">
<img src="/img/smb/00B14D.png" class="left" /> 
<h2><a href="/main/source/packages/networkingdm">networkingdm</a></h2>
<div class="tooltip-line"></div>
<p><strong>Summary</strong>
Networking related OMA Device Management and OMA Client Provisioning adapters</p>
<div class="tooltip-line"></div>
<!--<p><strong>Package owner</strong> Lyrki Hoisko</p>-->
<p><strong>Links</strong> <a href="/wiki/index.php/WLAN_Package_Backlog">Backlog</a> <a href="/wiki/index.php/WLAN_Package">Wiki</a> <a href="/forum/forumdisplay.php?f=32">Forum</a> <a href="/mailman/listinfo/wlan-dev">Mailing List</a> <a href="/oss/MCL/sf/os/wlan/">MCL</a> <a href="/wiki/index.php/Software_Configuration_Tools">Wiki</a> <a href="/mailman/listinfo/td-tools-dev">Mailing List</a> <a href="/sfl/MCL/sf/tools/swconfigtools/">MCL</a>  <a href="/main/source/packages/networkingdm">Package</a>
</div>
<div class="tooltip_bottom"></div>	
</div>
</td>
<td id="app69" style="background-color:#FF5F00" >
<div class="package"><h5><span>Remote Storage</span></h5></div>
<div class="tooltip">
<div class="tooltip_top"></div>	
<div class="tooltip_mid">
<img src="/img/smb/FF5F00.png" class="left" /> 
<h2><a href="/main/source/packages/remote storage">Remote Storage</a></h2>
<div class="tooltip-line"></div>
<p><strong>Summary</strong>
The Remotestorage package supports mapping of remote drives to local file system.</p>
<div class="tooltip-line"></div>
<!--<p><strong>Package owner</strong> Lyrki Hoisko</p>-->
<p><strong>Links</strong> <a href="/wiki/index.php/DeviceServicesBackLog">Backlog</a> <a href="/wiki/index.php/Device_Services_Package">Wiki</a> <a href="/forum/forumdisplay.php?f=31">Forum</a> <a href="/mailman/listinfo/td-os_base_services-dev">Mailing List</a> <a href="/oss/MCL/sf/os/devicesrv/">MCL</a> <a href="http://developer.symbian.org/main/source/packages/package/index.php?pk=281">middleware searchsrv package</a>  <a href="/main/source/packages/remote storage">Package</a>
</div>
<div class="tooltip_bottom"></div>	
</div>
</td>
<td id="app70" style="background-color:#FF5F00" >
<div class="package"><h5><span>Remote Connectivity</span></h5></div>
<div class="tooltip">
<div class="tooltip_top"></div>	
<div class="tooltip_mid">
<img src="/img/smb/FF5F00.png" class="left" /> 
<h2><a href="/main/source/packages/remoteconn">Remote Connectivity</a></h2>
<div class="tooltip-line"></div>
<p><strong>Summary</strong>
The Remote Connectivity Package provides the device-side enabler for seamless, industry standards based end-to-end connectivity solution, which can hide the complexity from the users and developers. This is achieved via MTP (Media Transport Protocol) en...</p>
<div class="tooltip-line"></div>
<!--<p><strong>Package owner</strong> Lyrki Hoisko</p>-->
<p><strong>Links</strong> <a href="/wiki/index.php/OS_RnD_Tools_package/Backlog">Backlog</a> <a href="/wiki/index.php/OS_RnD_Tools_package">Wiki</a> <a href="/forum/forumdisplay.php?f=42">Forum</a> <a href="/mailman/listinfo/td-tools-dev">Mailing List</a> <a href="/oss/MCL/sf/os/osrndtools">MCL in os layer</a>  <a href="/main/source/packages/remoteconn">Package</a>
</div>
<div class="tooltip_bottom"></div>	
</div>
</td>
<td id="app71" style="background-color:#FF5F00" >
<div class="package"><h5><span>Shortlink Connectivity</span></h5></div>
<div class="tooltip">
<div class="tooltip_top"></div>	
<div class="tooltip_mid">
<img src="/img/smb/FF5F00.png" class="left" /> 
<h2><a href="/main/source/packages/shortlinkconn">Shortlink Connectivity</a></h2>
<div class="tooltip-line"></div>
<p><strong>Summary</strong>
Contains services associated with the shortlink bearers, including bluetooth profiles, OBEX and support for various USB classes and personalities.</p>
<div class="tooltip-line"></div>
<!--<p><strong>Package owner</strong> Lyrki Hoisko</p>-->
<p><strong>Links</strong> <a href="/wiki/index.php/networkingdm_package/backlog">Backlog</a> <a href="/wiki/index.php/Networking_Device_management(networkingdm)">Wiki</a> <a href="/forum/forumdisplay.php?f=34">Forum</a> <a href="/mailman/listinfo/td-device_management-dev">Mailing List</a> <a href="/oss/MCL/sf/mw/networkingdm/">MCL</a> <a href="/wiki/index.php/USB_Package/Backlog">Backlog</a> <a href="/wiki/index.php/USB">Wiki</a> <a href="/forum/forumdisplay.php?f=33">Forum</a> <a href="/mailman/listinfo/td-device_connectivity-dev">Mailing List</a> <a href="/main/source/packages/package/index.php?pk=153"> shortlinkservices package from which this package has been created</a> <a href="/oss/MCL/sf/os/usb">MCL</a>  <a href="/main/source/packages/shortlinkconn">Package</a>
</div>
<div class="tooltip_bottom"></div>	
</div>
</td>
<td id="app72" style="background-color:#58D0F4" >
<div class="package"><h5><span>Multimedia Middleware</span></h5></div>
<div class="tooltip">
<div class="tooltip_top"></div>	
<div class="tooltip_mid">
<img src="/img/smb/58D0F4.png" class="left" /> 
<h2><a href="/main/source/packages/mmmw">Multimedia Middleware</a></h2>
<div class="tooltip-line"></div>
<p><strong>Summary</strong>
Common set of multimedia frameworks that build on the services provided by the Multimedia package, including multimedia metadata parsing, thumbnail generation and broadcast radio abstraction.</p>
<div class="tooltip-line"></div>
<!--<p><strong>Package owner</strong> Lyrki Hoisko</p>-->
<p><strong>Links</strong> <a href="/wiki/index.php/Phonesrv_backlog">Backlog</a> <a href="/wiki/index.php/Phonesrv_package">Wiki</a> <a href="/forum/forumdisplay.php?f=38">Forum</a> <a href="/mailman/listinfo/td-personal_communications-dev">Mailing List</a> <a href="/oss/FCL/sf/mw/phonesrv/">FCL</a> <a href="/oss/MCL/sf/mw/phonesrv/">MCL</a>  <a href="/main/source/packages/mmmw">Package</a>
</div>
<div class="tooltip_bottom"></div>	
</div>
</td>
<td id="app73" style="background-color:#FFC64A" >
<div class="package"><h5><span>Input Methods</span></h5></div>
<div class="tooltip">
<div class="tooltip_top"></div>	
<div class="tooltip_mid">
<img src="/img/smb/FFC64A.png" class="left" /> 
<h2><a href="/main/source/packages/inputmethods">Input Methods</a></h2>
<div class="tooltip-line"></div>
<p><strong>Summary</strong>
Provides support for various forms of input like Text input, handwriting recognition etc</p>
<div class="tooltip-line"></div>
<!--<p><strong>Package owner</strong> Lyrki Hoisko</p>-->
<p><strong>Links</strong>  <a href="/main/source/packages/inputmethods">Package</a>
</div>
<div class="tooltip_bottom"></div>	
</div>
</td>
<td id="app74" style="background-color:#FFC64A" >
<div class="package"><h5><span>Classic UI</span></h5></div>
<div class="tooltip">
<div class="tooltip_top"></div>	
<div class="tooltip_mid">
<img src="/img/smb/FFC64A.png" class="left" /> 
<h2><a href="/main/source/packages/classicui">Classic UI</a></h2>
<div class="tooltip-line"></div>
<p><strong>Summary</strong>
The Classic UI package provides native (Avkon) UI support libraries, including standard controls, views, dialogs and some services for ui application.</p>
<div class="tooltip-line"></div>
<!--<p><strong>Package owner</strong> Lyrki Hoisko</p>-->
<p><strong>Links</strong>  <a href="/main/source/packages/classicui">Package</a>
</div>
<div class="tooltip_bottom"></div>	
</div>
</td>
<td id="app75" style="background-color:#FFC64A" >
<div class="package"><h5><span>SVGT</span></h5></div>
<div class="tooltip">
<div class="tooltip_top"></div>	
<div class="tooltip_mid">
<img src="/img/smb/FFC64A.png" class="left" /> 
<h2><a href="/main/source/packages/svgt">SVGT</a></h2>
<div class="tooltip-line"></div>
<p><strong>Summary</strong>
SVGT package provides the API to parse, decode, manage and render an SVG contents.</p>
<div class="tooltip-line"></div>
<!--<p><strong>Package owner</strong> Lyrki Hoisko</p>-->
<p><strong>Links</strong> <a href="/wiki/index.php/Homescreen_Package">Wiki</a> <a href="/forum/forumdisplay.php?f=43">Forum</a> <a href="/mailman/listinfo/homescreen-dev">Mailing List (Symbian^3 development)</a> <a href="/oss/MCL/sf/mw/homescreensrv/">MCL</a> <a href="/main/source/packages/package/index.php?pk=178">Homescreen package</a> <a href="/oss/FCL/sf/mw/homescreensrv/">FCL</a> <a href="/mailman/listinfo/homescreen-symbian4-dev">Mailing List (Symbian^4 development)</a> <a href="http://ideas.symbian.org/Idea/View?ideaid=3460">Enhanced Shortcut widget idea</a> <a href="http://ideas.symbian.org/Idea/View?ideaid=5354">Contrast font color in Homescreen  idea</a> <a href="http://ideas.symbian.org/Idea/View?ideaid=4318">Scrollable titles for widgets idea</a> <a href="http://ideas.symbian.org/Idea/View?ideaid=3304">Longer, Scrollable, Context-Responsive Widget Area idea</a> <a href="http://ideas.symbian.org/Idea/View?ideaid=3176">Advance Mobile Phone Search idea</a> <a href="http://ideas.symbian.org/Idea/View?ideaid=3875">Usefull Additions to Global Search idea</a>  <a href="/main/source/packages/svgt">Package</a>
</div>
<div class="tooltip_bottom"></div>	
</div>
</td>
<td id="app76" style="background-color:#FFC64A" >
<div class="package"><h5><span>UI Accelerator</span></h5></div>
<div class="tooltip">
<div class="tooltip_top"></div>	
<div class="tooltip_mid">
<img src="/img/smb/FFC64A.png" class="left" /> 
<h2><a href="/main/source/packages/uiaccelerator">UI Accelerator</a></h2>
<div class="tooltip-line"></div>
<p><strong>Summary</strong>
UI Accelerator implements scene graph abstracting graphics HWA</p>
<div class="tooltip-line"></div>
<!--<p><strong>Package owner</strong> Lyrki Hoisko</p>-->
<p><strong>Links</strong> <a href="/wiki/index.php/Music_Player_Package">Wiki</a> <a href="/forum/forumdisplay.php?f=37">Forum</a> <a href="/mailman/listinfo/musicplayer-dev">Mailing List</a> <a href="/oss/MCL/sf/app/musicplayer/">MCL</a> <a href="/wiki/index.php/Music_Player_Package/Backlog">Backlog</a>  <a href="/main/source/packages/uiaccelerator">Package</a>
</div>
<div class="tooltip_bottom"></div>	
</div>
</td>
<td id="app77" style="background-color:#FFC64A" >
<div class="package"><h5><span>UI Resources</span></h5></div>
<div class="tooltip">
<div class="tooltip_top"></div>	
<div class="tooltip_mid">
<img src="/img/smb/FFC64A.png" class="left" /> 
<h2><a href="/main/source/packages/uiresources">UI Resources</a></h2>
<div class="tooltip-line"></div>
<p><strong>Summary</strong>
The UI Resources package provides resources used in UI applications. These resources include e.g. UI graphics, themes, layouts and locales, font files and pictograms.</p>
<div class="tooltip-line"></div>
<!--<p><strong>Package owner</strong> Lyrki Hoisko</p>-->
<p><strong>Links</strong> <a href="/wiki/index.php/Multimedia_Application_Frameworks_Package">Wiki</a> <a href="/forum/forumdisplay.php?f=36">Forum</a> <a href="/mailman/listinfo/mmappfw-dev">Mailing List</a> <a href="/oss/MCL/sf/mw/mmappfw/">MCL</a>  <a href="/main/source/packages/uiresources">Package</a>
</div>
<div class="tooltip_bottom"></div>	
</div>
</td>
<td id="app78" style="background-color:#0097D9" >
<div class="package"><h5><span>Application Installation</span></h5></div>
<div class="tooltip">
<div class="tooltip_top"></div>	
<div class="tooltip_mid">
<img src="/img/smb/0097D9.png" class="left" /> 
<h2><a href="/main/source/packages/appinstall">Application Installation</a></h2>
<div class="tooltip-line"></div>
<p><strong>Summary</strong>
Application installation package contains components for application installation, management, and distribution.</p>
<div class="tooltip-line"></div>
<!--<p><strong>Package owner</strong> Lyrki Hoisko</p>-->
<p><strong>Links</strong> <a href="/wiki/index.php/ContentControl_Package/Backlog">Backlog</a> <a href="/wiki/index.php/ContentControl_Package">Wiki</a> <a href="/forum/forumdisplay.php?f=34">Forum</a> <a href="/mailman/listinfo/td-device_management-dev">Mailing List</a> <a href="/oss/MCL/sf/app/contentcontrol/">MCL</a> <a href="/wiki/index.php/BeagleBoard">Wiki</a> <a href="/oss/MCL/sf/adaptation/beagleboard/">MCL</a> <a href="/wiki/index.php/BeagleBoard_Quick_Start">BeagleBoard Quick Start</a> <a href="/wiki/index.php/Kernel_%26_Hardware_Services_Quick_Start#Building_BeagleBoard">Kernel & Hardware Services Quick Start</a> <a href="/wiki/index.php/Base_Porting_Quick_Start">Base Porting Quick Start</a> <a href="/forum/forumdisplay.php?f=31">Forum</a> <a href="/mailman/listinfo/td-os_base_services-dev">Mailing List</a> <a href="/wiki/index.php/Wild_ducks_project">Wild Ducks Project on BeagleBoard</a> <a href="http://beagleboard.org/">Beagleboard.org</a>  <a href="/main/source/packages/appinstall">Package</a>
</div>
<div class="tooltip_bottom"></div>	
</div>
</td>
<td id="app79" style="background-color:#0097D9" >
<div class="package"><h5><span>Webservices</span></h5></div>
<div class="tooltip">
<div class="tooltip_top"></div>	
<div class="tooltip_mid">
<img src="/img/smb/0097D9.png" class="left" /> 
<h2><a href="/main/source/packages/websrv">Webservices</a></h2>
<div class="tooltip-line"></div>
<p><strong>Summary</strong>
This package consists of web services collection which is implementation of Web Services framework, a communication framework giving a service oriented architecture</p>
<div class="tooltip-line"></div>
<!--<p><strong>Package owner</strong> Lyrki Hoisko</p>-->
<p><strong>Links</strong> <a href="/forum/forumdisplay.php?f=38">Forum</a> <a href="/mailman/listinfo/td-personal_communications-dev">Mailing List</a> <a href="/oss/MCL/sf/app/videotelephony">MCL</a> <a href="/wiki/index.php/VideoTelephony_roadmap">Backlog</a>  <a href="/main/source/packages/websrv">Package</a>
</div>
<div class="tooltip_bottom"></div>	
</div>
</td>
<td id="app80" style="background-color:#8469B1" >
<div class="package"><h5><span>Connectivity Tools</span></h5></div>
<div class="tooltip">
<div class="tooltip_top"></div>	
<div class="tooltip_mid">
<img src="/img/smb/8469B1.png" class="left" /> 
<h2><a href="/main/source/packages/conntools">Connectivity Tools</a></h2>
<div class="tooltip-line"></div>
<p><strong>Summary</strong>
The package provides tools for testing multi-homed TCP/IP connectivity.</p>
<div class="tooltip-line"></div>
<!--<p><strong>Package owner</strong> Lyrki Hoisko</p>-->
<p><strong>Links</strong> <a href="/wiki/index.php/Compatibility_Analysis_Apps_package">Wiki</a> <a href="/forum/forumdisplay.php?f=42">Forum</a> <a href="/mailman/listinfo/comptana-dev">Mailing List</a> <a href="/sfl/MCL/sftools/ana/compatanaapps/">MCL</a>  <a href="/main/source/packages/conntools">Package</a>
</div>
<div class="tooltip_bottom"></div>	
</div>
</td>
</tr>

<tr><td colspan="27" class="top">
<div class="packages-top">
<h3>Middleware</h3>
</div>
</td>
</tr>
</table>
</div>

<div class="clear20"></div>

<div class="packages">
<table class="package-table">
<tr>
<td id="app81" style="background-color:#C08F48" >
<div class="package"><h5><span>Generic OS Services</span></h5></div>
<div class="tooltip">
<div class="tooltip_top"></div>	
<div class="tooltip_mid">
<img src="/img/smb/C08F48.png" class="left" /> 
<h2><a href="/main/source/packages/ossrv">Generic OS Services</a></h2>
<div class="tooltip-line"></div>
<p><strong>Summary</strong>
This packages contains OpenC libraries and certain other low-level OS libraries used extensively all across Symbian OS (ECOM plugin framework, compression libraries, EMIME, utility libraries etc.).</p>
<div class="tooltip-line"></div>
<!--<p><strong>Package owner</strong> Lyrki Hoisko</p>-->
<p><strong>Links</strong> <a href="/wiki/index.php/Software_Configuration_Apps">Wiki</a> <a href="/forum/forumdisplay.php?f=42">Forum</a> <a href="/mailman/listinfo/td-tools-dev">Mailing List</a> <a href="/oss/MCL/sftools/depl/swconfigapps">MCL</a>  <a href="/main/source/packages/ossrv">Package</a>
</div>
<div class="tooltip_bottom"></div>	
</div>
</td>
<td id="app82" style="background-color:#FF007D" >
<div class="package"><h5><span>OS Security</span></h5></div>
<div class="tooltip">
<div class="tooltip_top"></div>	
<div class="tooltip_mid">
<img src="/img/smb/FF007D.png" class="left" /> 
<h2><a href="/main/source/packages/security">OS Security</a></h2>
<div class="tooltip-line"></div>
<p><strong>Summary</strong>
The OS Security package lies in the OS layer and exposes both platform and public APIs providing security and data privacy services.</p>
<div class="tooltip-line"></div>
<!--<p><strong>Package owner</strong> Lyrki Hoisko</p>-->
<p><strong>Links</strong> <a href="/wiki/index.php/Helps_Package">Wiki</a> <a href="/mailman/listinfo/td-user_interface-dev">Mailing List</a> <a href="/oss/MCL/sf/app/helps/">MCL</a>  <a href="/main/source/packages/security">Package</a>
</div>
<div class="tooltip_bottom"></div>	
</div>
</td>
<td id="app83" style="background-color:#C08F48" >
<div class="package"><h5><span>Persistent Data Services</span></h5></div>
<div class="tooltip">
<div class="tooltip_top"></div>	
<div class="tooltip_mid">
<img src="/img/smb/C08F48.png" class="left" /> 
<h2><a href="/main/source/packages/persistentdata">Persistent Data Services</a></h2>
<div class="tooltip-line"></div>
<p><strong>Summary</strong>
Persistent Data Services is an OS layer package that provides the standard frameworks and libraries for handling persistent data storage.</p>
<div class="tooltip-line"></div>
<!--<p><strong>Package owner</strong> Lyrki Hoisko</p>-->
<p><strong>Links</strong> <a href="/wiki/index.php/Web_Package/Backlog">Backlog</a> <a href="/wiki/index.php/Web_Package">Wiki</a> <a href="/forum/forumdisplay.php?f=40">Forum</a> <a href="/mailman/listinfo/td-runtimes_and_web-dev">Mailing List</a> <a href="/epl/MCL/sf/mw/web/">MCL on epl</a> <a href="http://mymobilecorner.blogspot.com/">Tasneem Sayeed's Blog</a> <a href="/oss/MCL/sf/mw/web/">MCL on oss</a>  <a href="/main/source/packages/persistentdata">Package</a>
</div>
<div class="tooltip_bottom"></div>	
</div>
</td>
<td id="app84" style="background-color:#C08F48" >
<div class="package"><h5><span>Device Services</span></h5></div>
<div class="tooltip">
<div class="tooltip_top"></div>	
<div class="tooltip_mid">
<img src="/img/smb/C08F48.png" class="left" /> 
<h2><a href="/main/source/packages/devicesrv">Device Services</a></h2>
<div class="tooltip-line"></div>
<p><strong>Summary</strong>
Device Services package provides services for HW related services, system startup and power save management.</p>
<div class="tooltip-line"></div>
<!--<p><strong>Package owner</strong> Lyrki Hoisko</p>-->
<p><strong>Links</strong> <a href="/wiki/index.php/Text_%26_Localisation_Services">Wiki</a> <a href="/forum/forumdisplay.php?f=43">Forum</a> <a href="/mailman/listinfo/textandloc-dev">Mailing List</a> <a href="/oss/MCL/sf/os/textandloc/">MCL</a> <a href="/wiki/index.php/Text_%26_Localisation_Services/Backlog">Backlog</a> <a href="/wiki/index.php/USB_Services_Package/Backlog">Backlog</a> <a href="/wiki/index.php/USB_Services_Package(usbservices)">Wiki</a> <a href="/forum/forumdisplay.php?f=33">Forum</a> <a href="/mailman/listinfo/td-device_connectivity-dev">Mailing List</a> <a href="/main/source/packages/package/index.php?pk=153">shortlinkconn package from which this package has been created</a> <a href="/oss/MCL/sf/mw/usbservices">MCL</a>  <a href="/main/source/packages/devicesrv">Package</a>
</div>
<div class="tooltip_bottom"></div>	
</div>
</td>
<td id="app85" style="background-color:#FFFFFF" >
<div class="package"><h5><span>Locating Services</span></h5></div>
<div class="tooltip">
<div class="tooltip_top"></div>	
<div class="tooltip_mid">
<img src="/img/smb/FFFFFF.png" class="left" /> 
<h2><a href="/main/source/packages/lbs">Locating Services</a></h2>
<div class="tooltip-line"></div>
<p><strong>Summary</strong>
The <em>LBS</em> package in the OS layer provides specific location information for installed applications and for remote services via a network.</p>
<div class="tooltip-line"></div>
<!--<p><strong>Package owner</strong> Lyrki Hoisko</p>-->
<p><strong>Links</strong> <a href="/wiki/index.php/IDE_Package/Backlog">Backlog</a> <a href="/wiki/index.php/IDE_Package">Wiki</a> <a href="/forum/forumdisplay.php?f=42">Forum</a> <a href="/mailman/listinfo/ide-dev">Mailing List</a> <a href="/sfl/MCL/sftools/dev/ide/">MCL</a> <a href="http://nokiacarbideoneclipse.blogspot.com/">Nokia Carbide.c++ on Eclipse Blog</a> <a href="http://www.eclipse.org">Eclipse.org</a>  <a href="/main/source/packages/lbs">Package</a>
</div>
<div class="tooltip_bottom"></div>	
</div>
</td>
<td id="app86" style="background-color:#8469B1" >
<div class="package"><h5><span>Comms Framework</span></h5></div>
<div class="tooltip">
<div class="tooltip_top"></div>	
<div class="tooltip_mid">
<img src="/img/smb/8469B1.png" class="left" /> 
<h2><a href="/main/source/packages/commsfw">Comms Framework</a></h2>
<div class="tooltip-line"></div>
<p><strong>Summary</strong>
Comms Framework is an OS Layer package that implements the communications stack for Symbian OS. The package offers protocol independent servers and support infrastructure for integrating any communications protocol into the comms stack.</p>
<div class="tooltip-line"></div>
<!--<p><strong>Package owner</strong> Lyrki Hoisko</p>-->
<p><strong>Links</strong> <a href="/wiki/index.php/Videoutils_Package">Wiki</a> <a href="/forum/forumdisplay.php?f=36">Forum</a> <a href="/mailman/listinfo/videoutils-dev">Mailing List</a> <a href="/oss/MCL/sf/mw/videoutils/">MCL</a> <a href="/wiki/index.php/Videoutils_Package/Backlog">Backlog</a> <a href="/wiki/index.php/Bluetooth_Packages/Backlog">Backlog</a> <a href="/wiki/index.php/Bluetooth_Packages">Wiki</a> <a href="/forum/forumdisplay.php?f=33">Forum</a> <a href="/mailman/listinfo/bluetooth-dev">Mailing List</a> <a href="/oss/MCL/sf/mw/btservices/">MCL</a> <a href="/main/source/packages/package/?pk=256">Bluetooth</a> <a href="/main/source/packages/package/index.php?pk=153">Symbian^2: Shortlink Connectivity</a>  <a href="/main/source/packages/commsfw">Package</a>
</div>
<div class="tooltip_bottom"></div>	
</div>
</td>
<td id="app87" style="background-color:#8469B1" >
<div class="package"><h5><span>Networking Services</span></h5></div>
<div class="tooltip">
<div class="tooltip_top"></div>	
<div class="tooltip_mid">
<img src="/img/smb/8469B1.png" class="left" /> 
<h2><a href="/main/source/packages/networkingsrv">Networking Services</a></h2>
<div class="tooltip-line"></div>
<p><strong>Summary</strong>
This package contains the implementation of internet protocols based networking stack which is responsible for packet data communication on the device.</p>
<div class="tooltip-line"></div>
<!--<p><strong>Package owner</strong> Lyrki Hoisko</p>-->
<p><strong>Links</strong> <a href="/wiki/index.php/Persistentdata/Backlog">Backlog</a> <a href="/wiki/index.php/Persistentdata">Wiki</a> <a href="/forum/forumdisplay.php?f=31">Forum</a> <a href="/mailman/listinfo/persistentdata-dev">persistentdata-dev mailing list</a> <a href="/oss/MCL/sf/os/persistentdata/">MCL</a> <a href="/mailman/listinfo/td-os_base_services-dev">td-os_base_services-dev mailing list</a> <a href="/oss/FCL/sf/os/persistentdata">FCL</a> <a href="http://cdudding.wordpress.com/">Chris Dudding's Blog</a> <a href="http://www.sqlite.org/">SQLite Home Page</a>  <a href="/main/source/packages/networkingsrv">Package</a>
</div>
<div class="tooltip_bottom"></div>	
</div>
</td>
<td id="app88" style="background-color:#8469B1" >
<div class="package"><h5><span>WLAN</span></h5></div>
<div class="tooltip">
<div class="tooltip_top"></div>	
<div class="tooltip_mid">
<img src="/img/smb/8469B1.png" class="left" /> 
<h2><a href="/main/source/packages/wlan">WLAN</a></h2>
<div class="tooltip-line"></div>
<p><strong>Summary</strong>
Contains 802.11 Wireless LAN (aka WiFI) functionality</p>
<div class="tooltip-line"></div>
<!--<p><strong>Package owner</strong> Lyrki Hoisko</p>-->
<p><strong>Links</strong> <a href="/wiki/index.php/Dynamic_Analysis_Control_and_Capture_Package/Backlog">Backlog</a> <a href="/wiki/index.php/Dynamic_Analysis_Control_and_Capture_Package">Wiki</a> <a href="/forum/forumdisplay.php?f=42">Forum</a> <a href="/mailman/listinfo/td-tools-dev">Mailing List</a> <a href="/oss/MCL/sftools/ana/dynaanactrlandcptr/">MCL</a> <a href="/wiki/index.php/Location_Services_Backlog">Backlog</a> <a href="/forum/forumdisplay.php?f=35">Forum</a> <a href="/mailman/listinfo/td-location-dev">Mailing List</a> <a href="/oss/MCL/sf/mw/locationsrv/">MCL</a> <a href="/wiki/index.php/LocationSrv_Package">Wiki</a>  <a href="/main/source/packages/wlan">Package</a>
</div>
<div class="tooltip_bottom"></div>	
</div>
</td>
<td id="app89" style="background-color:#C7E347" >
<div class="package"><h5><span>Cellular Baseband Services</span></h5></div>
<div class="tooltip">
<div class="tooltip_top"></div>	
<div class="tooltip_mid">
<img src="/img/smb/C7E347.png" class="left" /> 
<h2><a href="/main/source/packages/cellularsrv">Cellular Baseband Services</a></h2>
<div class="tooltip-line"></div>
<p><strong>Summary</strong>
The Cellular Baseband Services package offers Cellular Network and SIM services to applications and other Symbian OS clients. It is an OS layer package that abstracts cellular modems, baseband and SIM hardware provided by OEMs. The package provides a su...</p>
<div class="tooltip-line"></div>
<!--<p><strong>Package owner</strong> Lyrki Hoisko</p>-->
<p><strong>Links</strong> <a href="/wiki/index.php/ShortlinkServices_Package/Backlog">Backlog</a> <a href="/wiki/index.php/ShortlinkServices_Package">Wiki</a> <a href="/forum/forumdisplay.php?f=33">Forum</a> <a href="/mailman/listinfo/td-device_connectivity-dev">Mailing List</a> <a href="/sfl/MCL/sf/os/shortlinksrv/">MCL</a> <a href="/main/source/packages/package/?pk=256">Symbian^3: bluetooth</a> <a href="/main/source/packages/package/index.php?pk=257">Symbian^3: usb</a> <a href="/wiki/index.php/Qt_Package/Backlog">SF related Backlog</a> <a href="/wiki/index.php/Qt_Package">Wiki</a> <a href="http://qt.nokia.com">http://qt.nokia.com</a> <a href="http://qt.nokia.com/doc/4.6/index.html">Qt Reference Documentation</a> <a href="/oss/MCL/sf/mw/qt/">Qt release for SF</a> <a href="http://qt.nokia.com/developer/qt-roadmap">Qt roadmaps</a> <a href="/oss/MCL/sf/mw/qt">Qt - Symbian Developer Community</a>  <a href="/main/source/packages/cellularsrv">Package</a>
</div>
<div class="tooltip_bottom"></div>	
</div>
</td>
<td id="app90" style="background-color:#FF5F00" >
<div class="package"><h5><span>Shortlink Services</span></h5></div>
<div class="tooltip">
<div class="tooltip_top"></div>	
<div class="tooltip_mid">
<img src="/img/smb/FF5F00.png" class="left" /> 
<h2><a href="/main/source/packages/shortlinksrv">Shortlink Services</a></h2>
<div class="tooltip-line"></div>
<p><strong>Summary</strong>
Supports communications using conventional serial ports, infrared, USB, and Bluetooth.</p>
<div class="tooltip-line"></div>
<!--<p><strong>Package owner</strong> Lyrki Hoisko</p>-->
<p><strong>Links</strong> <a href="/wiki/index.php/Messaging_Package/Backlog">Backlog</a> <a href="/wiki/index.php/Messaging_Package">Wiki</a> <a href="/forum/forumdisplay.php?f=39">Forum</a> <a href="/mailman/listinfo/messaging-dev">Mailing List</a> <a href="/oss/MCL/sf/app/messaging/">MCL</a> <a href="/wiki/index.php/UI_Accelerator_Package">Wiki</a> <a href="/mailman/listinfo/td-user_interface-dev">Mailing List</a> <a href="/oss/MCL/sf/mw/uiaccelerator/">MCL</a> <a href="/wiki/index.php/UI_Accelerator_Package/Backlog">Backlog</a> <a href="/oss/FCL/sf/mw/uiaccelerator/">FCL</a>  <a href="/main/source/packages/shortlinksrv">Package</a>
</div>
<div class="tooltip_bottom"></div>	
</div>
</td>
<td id="app91" style="background-color:#58D0F4" >
<div class="package"><h5><span>Multimedia</span></h5></div>
<div class="tooltip">
<div class="tooltip_top"></div>	
<div class="tooltip_mid">
<img src="/img/smb/58D0F4.png" class="left" /> 
<h2><a href="/main/source/packages/mm">Multimedia</a></h2>
<div class="tooltip-line"></div>
<p><strong>Summary</strong>
Provides the low-level support for multimedia capabilities:&nbsp;Applications will typically use higher-level components which provide more useful abstractions than the ones in mm.</p>
<div class="tooltip-line"></div>
<!--<p><strong>Package owner</strong> Lyrki Hoisko</p>-->
<p><strong>Links</strong> <a href="/wiki/index.php/Web_Services_Package/Backlog">Backlog</a> <a href="/wiki/index.php/Web_Services_Package">Wiki</a> <a href="/forum/forumdisplay.php?f=40">Forum</a> <a href="/mailman/listinfo/webserv-dev">Mailing List</a> <a href="/oss/MCL/sf/mw/websrv/">MCL</a>  <a href="/main/source/packages/mm">Package</a>
</div>
<div class="tooltip_bottom"></div>	
</div>
</td>
<td id="app92" style="background-color:#58D0F4" >
<div class="package"><h5><span>Imaging Extensions</span></h5></div>
<div class="tooltip">
<div class="tooltip_top"></div>	
<div class="tooltip_mid">
<img src="/img/smb/58D0F4.png" class="left" /> 
<h2><a href="/main/source/packages/imagingext">Imaging Extensions</a></h2>
<div class="tooltip-line"></div>
<p><strong>Summary</strong>
The Imaging Extensions package contains a number of imaging, camera, and video recording related extensions to the Multimedia package and additional libraries and plug-ins.</p>
<div class="tooltip-line"></div>
<!--<p><strong>Package owner</strong> Lyrki Hoisko</p>-->
<p><strong>Links</strong> <a href="/wiki/index.php/Multimedia_Middleware_Package/Backlog">Backlog</a> <a href="/wiki/index.php/Multimedia_Middleware_Package">Wiki</a> <a href="/forum/forumdisplay.php?f=36">Forum</a> <a href="/mailman/listinfo/mmmw-dev">Mailing List</a> <a href="/oss/MCL/sf/mw/mmmw/">MCL</a>  <a href="/main/source/packages/imagingext">Package</a>
</div>
<div class="tooltip_bottom"></div>	
</div>
</td>
<td id="app93" style="background-color:#FFC64A" >
<div class="package"><h5><span>Graphics</span></h5></div>
<div class="tooltip">
<div class="tooltip_top"></div>	
<div class="tooltip_mid">
<img src="/img/smb/FFC64A.png" class="left" /> 
<h2><a href="/main/source/packages/graphics">Graphics</a></h2>
<div class="tooltip-line"></div>
<p><strong>Summary</strong>
The graphics package provides the OS-layer, primarily hardware-independent, foundation software for graphics on Symbian OS. The services provided include centralised management by a window server of the multiple windows forming the screen display, a fra...</p>
<div class="tooltip-line"></div>
<!--<p><strong>Package owner</strong> Lyrki Hoisko</p>-->
<p><strong>Links</strong> <a href="/wiki/index.php/JRT/Backlog">Backlog</a> <a href="/wiki/index.php/JRT">Wiki</a> <a href="/forum/forumdisplay.php?f=40">Forum</a> <a href="/mailman/listinfo/td-runtimes_and_web-dev">Mailing List</a> <a href="/sfl/MCL/sf/app/java/">MCL</a>  <a href="/main/source/packages/graphics">Package</a>
</div>
<div class="tooltip_bottom"></div>	
</div>
</td>
<td id="app94" style="background-color:#FFC64A" >
<div class="package"><h5><span>Text &amp; Localisation Services</span></h5></div>
<div class="tooltip">
<div class="tooltip_top"></div>	
<div class="tooltip_mid">
<img src="/img/smb/FFC64A.png" class="left" /> 
<h2><a href="/main/source/packages/textandloc">Text &amp; Localisation Services</a></h2>
<div class="tooltip-line"></div>
<p><strong>Summary</strong>
Text &amp; Localisation Services provides powerful APIs for text layout, text rendering (including shaping) and font management. The package also contains APIs that enable device localisation and allow on-device locale management. The vision of the pack...</p>
<div class="tooltip-line"></div>
<!--<p><strong>Package owner</strong> Lyrki Hoisko</p>-->
<p><strong>Links</strong> <a href="/wiki/index.php/Test_Creation_And_Management_Package">Wiki</a> <a href="/forum/forumdisplay.php?f=42">Forum</a> <a href="/mailman/listinfo/td-tools-dev">Mailing List</a> <a href="/sfl/MCL/sftools/ana/testcreationandmgmt/">MCL</a> <a href="/wiki/index.php/Static_Analysis_Middleware">Wiki</a> <a href="/forum/forumdisplay.php?f=42">Forum</a> <a href="/mailman/listinfo/td-tools-dev">Mailing List</a> <a href="/sfl/MCL/sftools/ana/staticanamdw/">MCL</a>  <a href="/main/source/packages/textandloc">Package</a>
</div>
<div class="tooltip_bottom"></div>	
</div>
</td>
<td id="app95" style="background-color:#0097D9" >
<div class="package"><h5><span>XML Services</span></h5></div>
<div class="tooltip">
<div class="tooltip_top"></div>	
<div class="tooltip_mid">
<img src="/img/smb/0097D9.png" class="left" /> 
<h2><a href="/main/source/packages/xmlsrv">XML Services</a></h2>
<div class="tooltip-line"></div>
<p><strong>Summary</strong>
This package currently provides XML parsers ( SAX, DOM ), WBXML parsers, and XML security. The goal of this package is to implement the most performant xml solution to enable SOA, XML based data and meta data management, and enable rich internet servic...</p>
<div class="tooltip-line"></div>
<!--<p><strong>Package owner</strong> Lyrki Hoisko</p>-->
<p><strong>Links</strong> <a href="/wiki/index.php/Dynamic_Analysis_Apps_Package/Backlog">Backlog</a> <a href="/wiki/index.php/Dynamic_Analysis_Apps_package">Wiki</a> <a href="/forum/forumdisplay.php?f=42">Forum</a> <a href="/mailman/listinfo/td-tools-dev">Mailing List</a> <a href="/oss/MCL/sftools/ana/dynaanaapps/">MCL</a> <a href="/wiki/index.php/MDS_Package/Backlog">Backlog</a> <a href="/wiki/index.php/MDS_Package">Wiki</a> <a href="/forum/forumdisplay.php?f=36">Forum</a> <a href="/mailman/listinfo/mds-dev">Mailing List</a> <a href="/oss/MCL/sf/mw/mds/">MCL</a> <a href="/mailman/listinfo/td-productivity-dev">Mailing List</a> <a href="/oss/MCL/sf/mw/legacypresence">MCL</a> <a href="http://developer.symbian.org/wiki/index.php/Legacy_Presence_Package">Legacypresence wiki</a> <a href="http://developer.symbian.org/wiki/index.php/Legacy_Presence_Package/Backlog">Backlog</a>  <a href="/main/source/packages/xmlsrv">Package</a>
</div>
<div class="tooltip_bottom"></div>	
</div>
</td>
<td id="app96" style="background-color:#C6C5C4" >
<div class="package"><h5><span>Device Platform Release</span></h5></div>
<div class="tooltip">
<div class="tooltip_top"></div>	
<div class="tooltip_mid">
<img src="/img/smb/C6C5C4.png" class="left" /> 
<h2><a href="/main/source/packages/deviceplatformrelease">Device Platform Release</a></h2>
<div class="tooltip-line"></div>
<p><strong>Summary</strong>
To be confirmed by package owner (Arvo.Rosvall - package page owned by Sampo as Arvo has not registered with the foundation website)</p>
<div class="tooltip-line"></div>
<!--<p><strong>Package owner</strong> Lyrki Hoisko</p>-->
<p><strong>Links</strong>  <a href="/main/source/packages/deviceplatformrelease">Package</a>
</div>
<div class="tooltip_bottom"></div>	
</div>
</td>
<td id="app97" style="background-color:#C6C5C6" >
<div class="package"><h5><span>QEMU and Baseport</span></h5></div>
<div class="tooltip">
<div class="tooltip_top"></div>	
<div class="tooltip_mid">
<img src="/img/smb/C6C5C6.png" class="left" /> 
<h2><a href="/main/source/packages/qemu">QEMU and Baseport</a></h2>
<div class="tooltip-line"></div>
<p><strong>Summary</strong>
QEMU is a generic and open-source machine emulator and virtualizer, for which a Symbian-specific board model and baseport (known as Syborg) exists. This provides a desktop development environment for the Symbian platform which can be used across the eco...</p>
<div class="tooltip-line"></div>
<!--<p><strong>Package owner</strong> Lyrki Hoisko</p>-->
<p><strong>Links</strong>  <a href="/main/source/packages/qemu">Package</a>
</div>
<div class="tooltip_bottom"></div>	
</div>
</td>
<td id="app98" style="background-color:#C6C5C6" >
<div class="package"><h5><span>SW System Configuration</span></h5></div>
<div class="tooltip">
<div class="tooltip_top"></div>	
<div class="tooltip_mid">
<img src="/img/smb/C6C5C6.png" class="left" /> 
<h2><a href="/main/source/packages/swconfig">SW System Configuration</a></h2>
<div class="tooltip-line"></div>
<p><strong>Summary</strong>
This package consolidates the former software configuration tools, software configuration applications and software configuration middleware packages.</p>
<div class="tooltip-line"></div>
<!--<p><strong>Package owner</strong> Lyrki Hoisko</p>-->
<p><strong>Links</strong>  <a href="/main/source/packages/swconfig">Package</a>
</div>
<div class="tooltip_bottom"></div>	
</div>
</td>
</tr>

<tr>
<td id="app99" style="background-color:#C08F48" >

<div class="package"><h5><span>Kernel and Hardware Services</span></h5></div>
<div class="tooltip">
<div class="tooltip_top"></div>	
<div class="tooltip_mid">
<img src="/img/smb/C08F48.png" class="left" /> 
<h2><a href="/main/source/packages/kernelhwsrv">Kernel and Hardware Services</a></h2>
<div class="tooltip-line"></div>
<p><strong>Summary</strong>
Kernel and Hardware Services provides the foundations of the operating system on which the rest of the packages build. It provides the kernel, fileserver and device driver framework as well as user libraries to enable all other packages to exist. </p>
<div class="tooltip-line"></div>
<!--<p><strong>Package owner</strong> Lyrki Hoisko</p>-->
<p><strong>Links</strong> <a href="/wiki/index.php/NetworkingSrv_Package/Backlog">Backlog</a> <a href="/wiki/index.php/Networking_Services_Package">Wiki</a> <a href="/forum/forumdisplay.php?f=32">Forum</a> <a href="/mailman/listinfo/networkingsrv-dev">Mailing List</a> <a href="/oss/MCL/sf/os/networkingsrv/">MCL</a> <a href="/mailman/listinfo/uitools-dev">Tools mailing list</a> <a href="/oss/MCL/sf/mw/uitools/">MCL</a> <a href="/wiki/index.php/Uitools">Uitools wiki</a>  <a href="/main/source/packages/kernelhwsrv">Package</a>
</div>
<div class="tooltip_bottom"></div>	
</div>
</td>
<td id="app100" style="background-color:#C08F48" >

<div class="package"><h5><span>Board Support Packages</span></h5></div>
<div class="tooltip">
<div class="tooltip_top"></div>	
<div class="tooltip_mid">
<img src="/img/smb/C08F48.png" class="left" /> 
<h2><a href="/main/source/packages/boardsupport">Board Support Packages</a></h2>
<div class="tooltip-line"></div>
<p><strong>Summary</strong>
The Board Support Packages (BSP) package provides hardware-specific support code for a hardware platform / device family. It contains all the SW components (drivers, kernel extensions, etc.) required to interface the SymbianOS to a given hardware platfo...</p>
<div class="tooltip-line"></div>
<!--<p><strong>Package owner</strong> Lyrki Hoisko</p>-->
<p><strong>Links</strong>  <a href="/main/source/packages/boardsupport">Package</a>
</div>
<div class="tooltip_bottom"></div>	
</div>
</td>
<td id="app101" style="background-color:#C6C5C6" >

<div class="package"><h5><span>Build</span></h5></div>
<div class="tooltip">
<div class="tooltip_top"></div>	
<div class="tooltip_mid">
<img src="/img/smb/C6C5C6.png" class="left" /> 
<h2><a href="/main/source/packages/build">Build</a></h2>
<div class="tooltip-line"></div>
<p><strong>Summary</strong>
The Build package provides everything you need to build the Symbian platform. The tools can be used to build existing releases of the Symbian platform, but the package also supplies the (deprecated) tools for building earlier releases (it consolidates t...</p>
<div class="tooltip-line"></div>
<!--<p><strong>Package owner</strong> Lyrki Hoisko</p>-->
<p><strong>Links</strong>  <a href="/main/source/packages/build">Package</a>
</div>
<div class="tooltip_bottom"></div>	
</div>
</td>
</tr>

<tr><td colspan="27" class="top">
<div class="packages-top">
<h3>Operational System</h3>
</div>
</td>
</tr>
</table>
	
</div>
<div class="clear20"></div>

<div class="horizontal-line"></div>

<div class="packages">
<div class="clear"></div>

 <table id='keys'><tr><td><img src='/img/smb/C08F48.png' /></td><td><img src='/img/smb/FF007D.png' /></td><td><img src='/img/smb/FFFFFF.png' /></td><td><img src='/img/smb/C7E347.png' /></td><td><img src='/img/smb/8469B1.png' /></td><td><img src='/img/smb/FF5F00.png' /></td><td><img src='/img/smb/00B14D.png' /></td><td><img src='/img/smb/F5B3D3.png' /></td><td><img src='/img/smb/58D0F4.png' /></td><td><img src='/img/smb/DF00BA.png' /></td><td><img src='/img/smb/FFC64A.png' /></td><td><img src='/img/smb/0097D9.png' /></td><td><img src='/img/smb/C6C5C6.png' /></td></tr><tr><td class='full-name'><h4>OS Base</h4></td><td class='full-name'><h4>Security</h4></td><td class='full-name'><h4>Location</h4></td><td class='full-name'><h4>Personal communications</h4></td><td class='full-name'><h4>Data communications</h4></td><td class='full-name'><h4>Device connectivity</h4></td><td class='full-name'><h4>Device management</h4></td><td class='full-name'><h4>Productivity</h4></td><td class='full-name'><h4>Multimedia</h4></td><td class='full-name'><h4>Multimedia apps</h4></td><td class='full-name'><h4>User interface</h4></td><td class='full-name'><h4>Runtimes</h4></td><td class='full-name'><h4>Tools</h4></td><tr><td colspan='27' class='bottom'><div class='packages-top'><h3>Technology domains</h3></div></td></tr></table><div class="clear"></div>
<div class="horizontal-line"></div>
</div></td>
<td class="border-right"></td></tr></table>
<div class="clear20"></div>
  </div>
  <div class="clear20"></div>
  <!--START of footer-->
  ﻿<!--googleoff: all-->
</div>
<div id="dev_footer">
	<div id="s_footer"></div>
	<div id="footer_top_links">
		<ul>
			<li><a class="thickbox" target="_blank" href="http://developer.symbian.org/main/subscribe.php?keepThis=true&amp;TB_iframe=true&amp;height=75%&amp;width=735">Subscribe to our newsletter</a></li>
			<li class="last"><a class="thickbox" target="_blank" title="Feedback" href="http://developer.symbian.org/main/feedback/index.php?keepThis=true&amp;TB_iframe=true&amp;height=95%&amp;width=785">Feedback</a></li>
		</ul>
	</div>
	<div class="clear10"></div>
	

		
	<div class="links_block first">
		<h4 id="footer_planet">OUR SITES</h4>
		<ul>
						<li><a target="_blank" href="http://www.symbian.org">symbian.org</a></li>
						<li><a target="_blank" href="http://developer.symbian.org">developer</a></li>
						<li><a target="_blank" href="http://ideas.symbian.org/homepage">ideas</a></li>
						<li><a target="_blank" href="http://www.symbiansigned.com">symbian signed</a></li>
						<li><a target="_blank" href="http://blog.symbian.org/">symbian blog</a></li>
					</ul>
		<!-- <h4 id="sitemap"><a href="/main/ /sitemap.php">Sitemap</a></h4> -->
	</div>
	
	<div class="links">
	
		<div class="links_block second">	
			<h4>DEVELOPER PROGRAMS</h4>
			<h4><a href="/main/source/technology_domains/index.php">Source</a></h4>
			<ul>
								<li><a href="/main/source/technology_domains/index.php">Technology domains</a></li>
								<li><a href="/main/source/packages/index.php">Packages</a></li>
								<li><a href="/main/source/browse/index.php">Browse code</a></li>
								<li><a href="/bugs/">Bug tracker</a></li>
								<li><a href="/wiki/index.php/Roadmap_for_the_Symbian_Platform">Roadmap</a></li>
								<li><a href="/mailman/listinfo">Mailing lists</a></li>
							</ul>
						<h4><a href="/webbugs">Website bugs</a></h4>
					</div>
		
		<div class="links_block third">
			<h4><a href="/main/documentation/">Documentation</a></h4>
			<ul>
								<li><a href="/main/documentation/carbide/index.php">Application reference</a></li>
								<li><a href="/main/documentation/reference/s%5E3/doc_source/">Product reference Symbian^3</a></li>
								<li><a href="/main/documentation/reference/s%5E2/doc_source/">Product reference Symbian^2</a></li>
								<li><a href="/wiki">Wiki</a></li>
								<li><a href="/main/documentation/books/index.php">Books</a></li>
							</ul>
						<h4><a href="/forum">Forums</a></h4>
						<h4><a href="/main/sitemap/sitemap.php">Sitemap</a></h4>
					</div>
		
		<div class="links_block fourth">
			<h4>CONTACT</h4>
			<ul class="contact">
				<li><a target="_blank" href="http://developer.symbian.org/main/contact/contact_us/">Got a question? Fire away here</a></li>				<li><a target="_blank" href="http://developer.symbian.org/main/contact/notify_us.php">Notify us of a copyright infringement </a></li>				<li><a target="_blank" href="http://developer.symbian.org/main/contact/index.php">Locate our offices </a></li>
				<li><a target="_blank" href="http://www.symbian.org/about-us/jobs-symbian">Careers at Symbian</a></li>
			</ul>
			
			<h4>Follow us</h4>
			<ul class="follow">
				<li><a target="_blank" href="http://twitter.com/symbian">Twitter</a></li>
				<li><a target="_blank" href="http://www.facebook.com/group.php?sid=6f83cd3416e2c6dae2071a472a5438ea&amp;gid=54539976089">Facebook</a></li>
				<li><a target="_blank" href="http://www.myspace.com/symbianf">MySpace</a></li>
				<li><a target="_blank" href="http://www.youtube.com/symbianfoundation">YouTube</a></li>
			</ul>
		</div>
	
		<div class="clear"></div>
		<div id="copy">
			<p>
				&copy; 2010 Symbian Foundation Limited. 
				<a target="_blank" href="http://developer.symbian.org/main/legal/website_t_and_c.php">Terms &amp; conditions</a>
				<span>&amp;</span>
				<a target="_blank" href="http://developer.symbian.org/main/legal/privacy.php">Privacy policy</a>
			</p>
		</div>
	</div>
	
	
	
	
	
	
	
	
	
	
	
	<div class="right">
				<script src="/js/gatag.js" type="text/javascript"></script>
		<script type="text/javascript">
				var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
				document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
		</script>
		<script type="text/javascript">
				try {
					var pageTracker = _gat._getTracker("UA-6718609-1");
					pageTracker._trackPageview();
				} catch(err) {}
		</script>
			</div>
</div>
<div id="subfooter"></div>
<!--googleon: all-->  <!--END of footer-->
  <script type="text/javascript">
            //<![CDATA[
            /* Replacement calls.
            Please see documentation for more information. */
            
            if (typeof sIFR == "function") {
            
                sIFR.replaceElement(named({
                    sSelector: "h2.blockhead_up",
                    sFlashSrc: "/img/blockhead-unplugged.swf",
                    sColor: "#000",
                    sLinkColor: "#000",
                    sBgColor: "#ffffff",
                    sHoverColor: "#000",
                    nPaddingTop: 5,
                    nPaddingBottom: 5,
                    sFlashVars: "textalign=left&w=200&h=15",
                    sWmode: "transparent"
                }));
            };
            
            //]]>
        </script>

</body>
</html>
