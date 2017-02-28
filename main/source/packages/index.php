<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="imagetoolbar" content="no" />
<title>Symbian developer community - packages</title>
<meta name="description" content="Packages are the fundamental building blocks of the Symbian platform." />
<meta name="keywords" content="Symbian, packages, symbian platform" />
<meta http-equiv="Content-Language" content="en" />
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


<script type="text/javascript">
$(document).ready(function(){
	highlightMenu("m_item2");
});
</script>

<script type='text/javascript' src="jquery.autocomplete.js"></script>
<link type="text/css" rel="stylesheet" href="jquery.autocomplete.css" media="screen"/> 
<script type='text/javascript'>
<!--
$(document).ready(function(){
		
		var packageType = 1;
		var image = new Image();
		image.src = '/img/loading.gif';
		$("#inputString").focus().autocomplete("rpc.php?packageType="+packageType);
		
		$('#inputString').keypress(function(event) {
			if(event.keyCode=='13'){
				$.post("packageDef.php", $('#ajaxFrm').serialize(),function(data){
						var url = "/main/source/packages/";    
						$("#hidLink").html(data);
						if($('#searchlink').val()){
							$(location).attr('href',url+$('#searchlink').val());
						}
					}
				);
			}
		});

		$("input[name^='submit']").click(function() {
			$("form#ajaxFrm").submit(function(){  
			  $('#ajaxContent').html('').addClass('loading');
		       $.post("packageAjax.php",  
		       $("#ajaxFrm").serializeArray()
	           , function(data) {  				   
		           $("#ajaxContent").removeClass('loading').html(data);
		       });  
		       return false;  
			});   
		});
		

		
	});
//-->
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
<!--START of -->
<div id="contentContainer">
  <div id="subheader">
    <div class="clear20"></div>
    <div class="left">
      <div class="breadcrumbs"><a href="/">Home</a> &gt; &nbsp;<a href='/main/source/'>Source</a>&nbsp;>&nbsp;Packages</div>
      <h2 class="cssImg packages_headline"><span class="img_packages_headline">Packages</span></h2>
     
    </div>
    				<div id="pageFunction" class="right">
					<a href="javascript:print();" title="Print this page"><img src="/img/icon_print.gif" width="27" height="28" alt="Print" /></a>
					<a href="/main/emailfriend.php?url=http%3A%2F%2Fdeveloper.symbian.org%2Fmain%2Fsource%2Fpackages%2Findex.php&amp;TB_iframe=true&amp;height=85%&amp;width=650" class="thickbox" title="Email a friend">
						<img src="/img/icon_email.gif" width="27" height="28" alt="Email "/>
					</a>
					
				</div> 
				
				<div id="pageFunctionClear" class="clear"></div>    <div class="clear10"></div>
  </div>
  <!--START of page content-->
  <div class="subcontent" id="">
    <div class="colcontainer">
       <h3 class="search_packages_header">Search</h3><span class="search-packages-tabs"><a href="/main/source/packages/index.php?package_type=1" class="search-packages-package selected">Package</a> <a href="/main/source/packages/index.php?package_type=2" class="search-packages-incubation">Incubation Project</a></span>
      <form name="frmFilter" id="ajaxFrm" class="package-search-form" action="index.php" method="get">
        <div class="search_terms">
          <label for="inputString">Search all:
            <input type="text" value="" name="queryString" id="inputString" class="search-term"  />
          </label>
          <label for="package_name">Package Name:
            <input type="text" id="package_name" name="package_name" class="text"  value="" />
          </label>
          <label for="package_owner">Package Owner:
            <input type="text" id="package_owner" name="package_owner" class="text"  value="" />
          </label>
        </div>
        <div class="search_categories">
          <label for="td">Technology Domain:
            <select name="td" id="td" class="text">
              <option value="">View All</option>
                            <option value="9">Data Communications</option>
                            <option value="20">Device Connectivity</option>
                            <option value="11">Device Management</option>
                            <option value="23">Documentation</option>
                            <option value="22">Incubation Projects</option>
                            <option value="1">Location</option>
                            <option value="3">Multimedia</option>
                            <option value="4">Multimedia Applications</option>
                            <option value="2">OS Base Services</option>
                            <option value="6">Personal Communications</option>
                            <option value="5">Productivity</option>
                            <option value="12">Runtimes</option>
                            <option value="7">Security</option>
                            <option value="13">Tools</option>
                            <option value="8">User Interface</option>
                          </select>
          </label>
          <label for="package_status">Package Status:
            <select name="package_status[]" id="package_status" multiple='multiple'>
              <option value="" selected>-all-</option>
                            <option value="1">NEW</option>
                            <option value="2">FUNCTIONAL</option>
                            <option value="3">DEPRECATED</option>
                            <option value="4">ARCHIVED</option>
                          </select>
          </label>
          <label for="package_release">Releases:
            <select id="package_release" name="package_release[]" multiple='multiple'>
              <option value="" selected>-all-</option>
                            <option value="Symbian^2">Symbian^2</option>
                            <option value="Symbian^3">Symbian^3</option>
                            <option value="Symbian^4">Symbian^4</option>
                            <option value="Symbian^5">Symbian^5</option>
                          </select>
          </label>
          <input type="hidden" value="1" name="package_type" id="package_type" />
        </div>
        <div class="search-buttons"><input type="submit" value="Search" name="submit" /> <input type="reset" value="Reset" name="reset" /></div>
      </form>
    </div>
    <!--START of package content-->
    <div class="colcontainer package-search">
	  <div id="hidLink">
		<input type="hidden" name="searchlink" id="searchlink">
	  </div>
      <div id="ajaxContent">
        
<table class="resultlist" cellspacing="0">
  <thead>
    <tr>
      <th class="w1">Package Name</th>
      <th class="w1">Package owner</th>
      <th class="w1">Technology domain</th>
      <th class="w2">Status</th>
      <th class="w3">S^2</th>
      <th class="w3">S^3</th>
      <th class="w3">S^4</th>
      <th class="w3">S^5</th>
      <th class="w3">Forum</th>
      <th class="w2">Mailing List</th>
      <th class="w3">Wiki</th>
    </tr>
  </thead>
  <tbody>
        <tr>
      <td class="w1"><a href="/main/source/packages/accesssec">
        Access Security        </a></td>
      <td class="w1">Panu Hämäläinen</td>
      <td class="w1">Data Communications</td>
      <td class="w2"><span class="status functional">FUNCTIONAL</span></td>
      <td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'>&nbsp;</td>      <td class="w3">        <a href="/forum/forumdisplay.php?f=32" class="icon forumurl">
        Forum        </a>
        </td>
      <td class='w2'>        <a href="/mailman/listinfo/accesssec-dev" class="icon mailinglist">
        Mailing List        </a>
        </td>
      <td class="w3">        <a href="/wiki/index.php/Access_Security_Package" class="icon wikiurl">
        Wiki        </a>
        </td>
    </tr>
        <tr>
      <td class="w1"><a href="/main/source/packages/appinstall">
        Application Installation        </a></td>
      <td class="w1">Timo Heikkinen</td>
      <td class="w1">Runtimes</td>
      <td class="w2"><span class="status functional">FUNCTIONAL</span></td>
      <td class='w3'>&nbsp;</td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'>&nbsp;</td><td class='w3'>&nbsp;</td>      <td class="w3">        <a href="/forum/forumdisplay.php?f=41" class="icon forumurl">
        Forum        </a>
        </td>
      <td class='w2'>        <a href="/mailman/listinfo/appinstall-dev" class="icon mailinglist">
        Mailing List        </a>
        </td>
      <td class="w3">        <a href="/wiki/index.php/Application_Installation_Package" class="icon wikiurl">
        Wiki        </a>
        </td>
    </tr>
        <tr>
      <td class="w1"><a href="/main/source/packages/beagleboard">
        Beagleboard        </a></td>
      <td class="w1">arunabh ankur</td>
      <td class="w1">OS Base Services</td>
      <td class="w2"><span class="status functional">FUNCTIONAL</span></td>
      <td class='w3'>&nbsp;</td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'>&nbsp;</td>      <td class="w3">        <a href="/forum/forumdisplay.php?f=31" class="icon forumurl">
        Forum        </a>
        </td>
      <td class='w2'>        <a href="/mailman/listinfo/td-os_base_services-dev" class="icon mailinglist">
        Mailing List        </a>
        </td>
      <td class="w3">        <a href="/wiki/index.php/BeagleBoard" class="icon wikiurl">
        Wiki        </a>
        </td>
    </tr>
        <tr>
      <td class="w1"><a href="/main/source/packages/bt">
        bluetooth        </a></td>
      <td class="w1">Jonathan Tanner</td>
      <td class="w1">Device Connectivity</td>
      <td class="w2"><span class="status functional">FUNCTIONAL</span></td>
      <td class='w3'>&nbsp;</td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td>      <td class="w3">        <a href="/forum/forumdisplay.php?f=33" class="icon forumurl">
        Forum        </a>
        </td>
      <td class='w2'>        <a href="/mailman/listinfo/bluetooth-dev" class="icon mailinglist">
        Mailing List        </a>
        </td>
      <td class="w3">        <a href="/wiki/index.php/Bluetooth_Packages" class="icon wikiurl">
        Wiki        </a>
        </td>
    </tr>
        <tr>
      <td class="w1"><a href="/main/source/packages/boardsupport">
        Board Support Packages        </a></td>
      <td class="w1">Anita Lakshmanan</td>
      <td class="w1">OS Base Services</td>
      <td class="w2"><span class="status functional">FUNCTIONAL</span></td>
      <td class='w3'>&nbsp;</td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'>&nbsp;</td><td class='w3'>&nbsp;</td>      <td class="w3">        <a href="/forum/forumdisplay.php?f=31" class="icon forumurl">
        Forum        </a>
        </td>
      <td class='w2'>        <a href="/mailman/listinfo/td-os_base_services-dev" class="icon mailinglist">
        Mailing List        </a>
        </td>
      <td class="w3">&nbsp;</td>
    </tr>
        <tr>
      <td class="w1"><a href="/main/source/packages/btservices">
        btservices        </a></td>
      <td class="w1">Jonathan Tanner</td>
      <td class="w1">Device Connectivity</td>
      <td class="w2"><span class="status functional">FUNCTIONAL</span></td>
      <td class='w3'>&nbsp;</td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'>&nbsp;</td><td class='w3'>&nbsp;</td>      <td class="w3">        <a href="/forum/forumdisplay.php?f=33" class="icon forumurl">
        Forum        </a>
        </td>
      <td class='w2'>        <a href="/mailman/listinfo/bluetooth-dev" class="icon mailinglist">
        Mailing List        </a>
        </td>
      <td class="w3">        <a href="/wiki/index.php/Bluetooth_Packages" class="icon wikiurl">
        Wiki        </a>
        </td>
    </tr>
        <tr>
      <td class="w1"><a href="/main/source/packages/build">
        Build        </a></td>
      <td class="w1">Larry Knibb</td>
      <td class="w1">Tools</td>
      <td class="w2"><span class="status functional">FUNCTIONAL</span></td>
      <td class='w3'>&nbsp;</td><td class='w3'>&nbsp;</td><td class='w3'>&nbsp;</td><td class='w3'>&nbsp;</td>      <td class="w3">        <a href="/forum/forumdisplay.php?f=61" class="icon forumurl">
        Forum        </a>
        </td>
      <td class='w2'>        <a href="/mailman/listinfo/td-tools-dev" class="icon mailinglist">
        Tools mailing list        </a>
        </td>
      <td class="w3">        <a href="/wiki/index.php/Build" class="icon wikiurl">
        Build wiki        </a>
        </td>
    </tr>
        <tr>
      <td class="w1"><a href="/main/source/packages/camera">
        Camera        </a></td>
      <td class="w1">Teemu Rossi</td>
      <td class="w1">Multimedia Applications</td>
      <td class="w2"><span class="status functional">FUNCTIONAL</span></td>
      <td class='w3'>&nbsp;</td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td>      <td class="w3">        <a href="/forum/forumdisplay.php?f=37" class="icon forumurl">
        Forum        </a>
        </td>
      <td class='w2'>        <a href="/mailman/listinfo/td-multimedia_apps-dev" class="icon mailinglist">
        Mailing List        </a>
        </td>
      <td class="w3">        <a href="/wiki/index.php/Camera_Package" class="icon wikiurl">
        Wiki        </a>
        </td>
    </tr>
        <tr>
      <td class="w1"><a href="/main/source/packages/camerasrv">
        Camera Services        </a></td>
      <td class="w1">Teemu Rossi</td>
      <td class="w1">Multimedia Applications</td>
      <td class="w2"><span class="status functional">FUNCTIONAL</span></td>
      <td class='w3'>&nbsp;</td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td>      <td class="w3">        <a href="/forum/forumdisplay.php?f=37" class="icon forumurl">
        Forum        </a>
        </td>
      <td class='w2'>        <a href="/mailman/listinfo/td-multimedia_apps-dev" class="icon mailinglist">
        Mailing List        </a>
        </td>
      <td class="w3">        <a href="/wiki/index.php/Camera_Services_Package" class="icon wikiurl">
        Wiki        </a>
        </td>
    </tr>
        <tr>
      <td class="w1"><a href="/main/source/packages/cellularsrv">
        Cellular Baseband Services        </a></td>
      <td class="w1">Nithin Vijay</td>
      <td class="w1">Personal Communications</td>
      <td class="w2"><span class="status functional">FUNCTIONAL</span></td>
      <td class='w3'>&nbsp;</td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'>&nbsp;</td><td class='w3'>&nbsp;</td>      <td class="w3">        <a href="/forum/forumdisplay.php?f=38" class="icon forumurl">
        Forum        </a>
        </td>
      <td class='w2'>        <a href="/mailman/listinfo/cellularsrv-dev" class="icon mailinglist">
        Mailing List        </a>
        </td>
      <td class="w3">        <a href="/wiki/index.php/Cellular_Baseband_Services_Package" class="icon wikiurl">
        Wiki        </a>
        </td>
    </tr>
        <tr>
      <td class="w1"><a href="/main/source/packages/classicui">
        Classic UI        </a></td>
      <td class="w1">dai yue</td>
      <td class="w1">User Interface</td>
      <td class="w2"><span class="status functional">FUNCTIONAL</span></td>
      <td class='w3'>&nbsp;</td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'>&nbsp;</td><td class='w3'>&nbsp;</td>      <td class="w3">        <a href="/forum/forumdisplay.php?f=43" class="icon forumurl">
        Forum        </a>
        </td>
      <td class='w2'>        <a href="/mailman/listinfo/td-user_interface-dev" class="icon mailinglist">
        Mailing List        </a>
        </td>
      <td class="w3">&nbsp;</td>
    </tr>
        <tr>
      <td class="w1"><a href="/main/source/packages/collabtestdb">
        Collaborative Test Database        </a></td>
      <td class="w1">Grzegorz Wąchocki</td>
      <td class="w1">Tools</td>
      <td class="w2"><span class="status new">NEW</span></td>
      <td class='w3'>&nbsp;</td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td>      <td class="w3">        <a href="http://developer.symbian.org/forum/forumdisplay.php?f=48" class="icon forumurl">
        Build, Integration & Testing Forum        </a>
        </td>
      <td class='w2'>        <a href="/mailman/listinfo/td-tools-dev" class="icon mailinglist">
        Tools mailing list        </a>
        </td>
      <td class="w3">        <a href="http://developer.symbian.org/wiki/CTD_User_Guide" class="icon wikiurl">
        CTD User Guide        </a>
        </td>
    </tr>
        <tr>
      <td class="w1"><a href="/main/source/packages/commonemail">
        Commonemail        </a></td>
      <td class="w1">Mikko Bertin</td>
      <td class="w1">Productivity</td>
      <td class="w2"><span class="status functional">FUNCTIONAL</span></td>
      <td class='w3'>&nbsp;</td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td>      <td class="w3">        <a href="/forum/forumdisplay.php?f=39" class="icon forumurl">
        Forum        </a>
        </td>
      <td class='w2'>        <a href="/mailman/listinfo/commonemail-dev" class="icon mailinglist">
        Mailing List        </a>
        </td>
      <td class="w3">        <a href="/wiki/index.php/Commonemail_Package" class="icon wikiurl">
        Wiki        </a>
        </td>
    </tr>
        <tr>
      <td class="w1"><a href="/main/source/packages/commsfw">
        Comms Framework        </a></td>
      <td class="w1">Otto Harju</td>
      <td class="w1">Data Communications</td>
      <td class="w2"><span class="status functional">FUNCTIONAL</span></td>
      <td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td>      <td class="w3">        <a href="/forum/forumdisplay.php?f=32" class="icon forumurl">
        Forum        </a>
        </td>
      <td class='w2'>        <a href="/mailman/listinfo/commsfw-dev" class="icon mailinglist">
        Mailing List        </a>
        </td>
      <td class="w3">        <a href="/wiki/index.php/Comms_Framework_Package" class="icon wikiurl">
        Wiki        </a>
        </td>
    </tr>
        <tr>
      <td class="w1"><a href="/main/source/packages/conntools">
        Connectivity Tools        </a></td>
      <td class="w1">Tommi Rantanen</td>
      <td class="w1">Data Communications</td>
      <td class="w2"><span class="status functional">FUNCTIONAL</span></td>
      <td class='w3'>&nbsp;</td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'>&nbsp;</td><td class='w3'>&nbsp;</td>      <td class="w3">        <a href="/forum/forumdisplay.php?f=32" class="icon forumurl">
        Forum        </a>
        </td>
      <td class='w2'>&nbsp;</td>
      <td class="w3">        <a href="/wiki/index.php/Connectivity_Tools_Package" class="icon wikiurl">
        Wiki        </a>
        </td>
    </tr>
        <tr>
      <td class="w1"><a href="/main/source/packages/contacts">
        Contacts        </a></td>
      <td class="w1">Markku Kaurila</td>
      <td class="w1">Productivity</td>
      <td class="w2"><span class="status functional">FUNCTIONAL</span></td>
      <td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td>      <td class="w3">        <a href="/forum/forumdisplay.php?f=39" class="icon forumurl">
        Forum        </a>
        </td>
      <td class='w2'>        <a href="/mailman/listinfo/td-productivity-dev" class="icon mailinglist">
        Mailing List        </a>
        </td>
      <td class="w3">        <a href="/wiki/index.php/Contacts" class="icon wikiurl">
        Wiki        </a>
        </td>
    </tr>
        <tr>
      <td class="w1"><a href="/main/source/packages/contentcontrol">
        contentcontrol        </a></td>
      <td class="w1">Chethana Savalgi</td>
      <td class="w1">Device Management</td>
      <td class="w2"><span class="status functional">FUNCTIONAL</span></td>
      <td class='w3'>&nbsp;</td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'>&nbsp;</td><td class='w3'>&nbsp;</td>      <td class="w3">        <a href="/forum/forumdisplay.php?f=34" class="icon forumurl">
        Forum        </a>
        </td>
      <td class='w2'>        <a href="/mailman/listinfo/td-device_management-dev" class="icon mailinglist">
        Mailing List        </a>
        </td>
      <td class="w3">        <a href="/wiki/index.php/ContentControl_Package" class="icon wikiurl">
        Wiki        </a>
        </td>
    </tr>
        <tr>
      <td class="w1"><a href="/main/source/packages/conversations">
        conversations        </a></td>
      <td class="w1">Shrikumar Sharma</td>
      <td class="w1">Productivity</td>
      <td class="w2"><span class="status functional">FUNCTIONAL</span></td>
      <td class='w3'>&nbsp;</td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'>&nbsp;</td><td class='w3'>&nbsp;</td>      <td class="w3">        <a href="/forum/forumdisplay.php?f=39" class="icon forumurl">
        Forum        </a>
        </td>
      <td class='w2'>        <a href="/mailman/listinfo/td-productivity-dev" class="icon mailinglist">
        Mailing List        </a>
        </td>
      <td class="w3">        <a href="/wiki/index.php/Conversations_Package" class="icon wikiurl">
        Wiki        </a>
        </td>
    </tr>
        <tr>
      <td class="w1"><a href="/main/source/packages/desktopsw">
        Desktop Connectivity & PC Suite        </a></td>
      <td class="w1">Jyrki Hokkanen</td>
      <td class="w1">Device Connectivity</td>
      <td class="w2"><span class="status functional">FUNCTIONAL</span></td>
      <td class='w3'>&nbsp;</td><td class='w3'>&nbsp;</td><td class='w3'>&nbsp;</td><td class='w3'>&nbsp;</td>      <td class="w3">&nbsp;</td>
      <td class='w2'>        <a href="/mailman/listinfo/td-device_connectivity-dev" class="icon mailinglist">
        Mailing List        </a>
        </td>
      <td class="w3">&nbsp;</td>
    </tr>
        <tr>
      <td class="w1"><a href="/main/source/packages/devicedbgsrvs">
        Device Debug        </a></td>
      <td class="w1">Rahul Dey</td>
      <td class="w1">Tools</td>
      <td class="w2"><span class="status functional">FUNCTIONAL</span></td>
      <td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td>      <td class="w3">        <a href="/forum/forumdisplay.php?f=42" class="icon forumurl">
        Forum        </a>
        </td>
      <td class='w2'>        <a href="/mailman/listinfo/devicedbgsrvs-dev" class="icon mailinglist">
        Devicedbgsrvs mailing list        </a>
        </td>
      <td class="w3">        <a href="/wiki/index.php/Devicedbgsrvs" class="icon wikiurl">
        Devicedbgsrvs wiki        </a>
        </td>
    </tr>
        <tr>
      <td class="w1"><a href="/main/source/packages/devicesrv">
        Device Services        </a></td>
      <td class="w1">Arun Varghese</td>
      <td class="w1">OS Base Services</td>
      <td class="w2"><span class="status functional">FUNCTIONAL</span></td>
      <td class='w3'>&nbsp;</td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'>&nbsp;</td><td class='w3'>&nbsp;</td>      <td class="w3">        <a href="/forum/forumdisplay.php?f=31" class="icon forumurl">
        Forum        </a>
        </td>
      <td class='w2'>        <a href="/mailman/listinfo/td-os_base_services-dev" class="icon mailinglist">
        Mailing List        </a>
        </td>
      <td class="w3">        <a href="/wiki/index.php/Device_Services_Package" class="icon wikiurl">
        Wiki        </a>
        </td>
    </tr>
        <tr>
      <td class="w1"><a href="/main/source/packages/devicecontrol">
        devicecontrol        </a></td>
      <td class="w1">Deepak Segaran</td>
      <td class="w1">Device Management</td>
      <td class="w2"><span class="status functional">FUNCTIONAL</span></td>
      <td class='w3'>&nbsp;</td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'>&nbsp;</td><td class='w3'>&nbsp;</td>      <td class="w3">        <a href="/forum/forumdisplay.php?f=34" class="icon forumurl">
        Forum        </a>
        </td>
      <td class='w2'>        <a href="/mailman/listinfo/td-device_management-dev" class="icon mailinglist">
        Mailing List        </a>
        </td>
      <td class="w3">        <a href="/wiki/index.php/DeviceControl_Package" class="icon wikiurl">
        Wiki        </a>
        </td>
    </tr>
        <tr>
      <td class="w1"><a href="/main/source/packages/deviceplatformrelease">
        deviceplatformrelease        </a></td>
      <td class="w1">Sampo Savolainen</td>
      <td class="w1">Device Management</td>
      <td class="w2"><span class="status functional">FUNCTIONAL</span></td>
      <td class='w3'>&nbsp;</td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'>&nbsp;</td><td class='w3'>&nbsp;</td>      <td class="w3">&nbsp;</td>
      <td class='w2'>        <a href="/mailman/listinfo/td-device_management-dev" class="icon mailinglist">
        Mailing List        </a>
        </td>
      <td class="w3">&nbsp;</td>
    </tr>
        <tr>
      <td class="w1"><a href="/main/source/packages/dlnasrv">
        DLNA Services        </a></td>
      <td class="w1">Sampo Huttunen</td>
      <td class="w1">Device Connectivity</td>
      <td class="w2"><span class="status functional">FUNCTIONAL</span></td>
      <td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'>&nbsp;</td><td class='w3'>&nbsp;</td>      <td class="w3">        <a href="/forum/forumdisplay.php?f=33" class="icon forumurl">
        Forum        </a>
        </td>
      <td class='w2'>        <a href="/mailman/listinfo/td-device_connectivity-dev" class="icon mailinglist">
        Mailing List        </a>
        </td>
      <td class="w3">        <a href="/wiki/index.php/DLNA_Services_Package" class="icon wikiurl">
        Wiki        </a>
        </td>
    </tr>
        <tr>
      <td class="w1"><a href="/main/source/packages/docscontent">
        Documentation Content        </a></td>
      <td class="w1">Dominic Pinkman</td>
      <td class="w1">Documentation</td>
      <td class="w2"><span class="status functional">FUNCTIONAL</span></td>
      <td class='w3'>&nbsp;</td><td class='w3'>&nbsp;</td><td class='w3'>&nbsp;</td><td class='w3'>&nbsp;</td>      <td class="w3">        <a href="/forum/forumdisplay.php?f=42" class="icon forumurl">
        Forum        </a>
        </td>
      <td class='w2'>        <a href="/mailman/listinfo/td-tools-dev" class="icon mailinglist">
        Tools mailing list        </a>
        </td>
      <td class="w3">        <a href="/wiki/index.php/Docscontent" class="icon wikiurl">
        Docscontent wiki        </a>
        </td>
    </tr>
        <tr>
      <td class="w1"><a href="/main/source/packages/doctools">
        Documentation Tools        </a></td>
      <td class="w1">michel szarindar</td>
      <td class="w1">Documentation</td>
      <td class="w2"><span class="status functional">FUNCTIONAL</span></td>
      <td class='w3'>&nbsp;</td><td class='w3'>&nbsp;</td><td class='w3'>&nbsp;</td><td class='w3'>&nbsp;</td>      <td class="w3">&nbsp;</td>
      <td class='w2'>        <a href="/mailman/listinfo/td-tools-dev" class="icon mailinglist">
        Tools mailing list        </a>
        </td>
      <td class="w3">        <a href="/wiki/index.php/Doctools" class="icon wikiurl">
        Doctools wiki        </a>
        </td>
    </tr>
        <tr>
      <td class="w1"><a href="/main/source/packages/drm">
        DRM        </a></td>
      <td class="w1">Simo Järvinen</td>
      <td class="w1">Security</td>
      <td class="w2"><span class="status functional">FUNCTIONAL</span></td>
      <td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td>      <td class="w3">        <a href="/forum/forumdisplay.php?f=41" class="icon forumurl">
        Forum        </a>
        </td>
      <td class='w2'>        <a href="/mailman/listinfo/drm-dev" class="icon mailinglist">
        Mailing List        </a>
        </td>
      <td class="w3">        <a href="/wiki/index.php/DRM_Package" class="icon wikiurl">
        Wiki        </a>
        </td>
    </tr>
        <tr>
      <td class="w1"><a href="/main/source/packages/dynaana">
        Dynamic Analysis         </a></td>
      <td class="w1">Matti Laitinen</td>
      <td class="w1">Tools</td>
      <td class="w2"><span class="status functional">FUNCTIONAL</span></td>
      <td class='w3'>&nbsp;</td><td class='w3'>&nbsp;</td><td class='w3'>&nbsp;</td><td class='w3'>&nbsp;</td>      <td class="w3">        <a href="/forum/forumdisplay.php?f=42" class="icon forumurl">
        Forum        </a>
        </td>
      <td class='w2'>        <a href="/mailman/listinfo/td-tools-dev" class="icon mailinglist">
        Tools mailing list        </a>
        </td>
      <td class="w3">        <a href="/wiki/index.php/Dynaana" class="icon wikiurl">
        Dynaana wiki        </a>
        </td>
    </tr>
        <tr>
      <td class="w1"><a href="/main/source/packages/ide">
        Eclipse IDE        </a></td>
      <td class="w1">Ken Ryall</td>
      <td class="w1">Tools</td>
      <td class="w2"><span class="status functional">FUNCTIONAL</span></td>
      <td class='w3'>&nbsp;</td><td class='w3'>&nbsp;</td><td class='w3'>&nbsp;</td><td class='w3'>&nbsp;</td>      <td class="w3">        <a href="/forum/forumdisplay.php?f=42" class="icon forumurl">
        Forum        </a>
        </td>
      <td class='w2'>        <a href="/mailman/listinfo/eclipseenv-dev" class="icon mailinglist">
        Eclipseenv mailing list        </a>
        </td>
      <td class="w3">        <a href="/wiki/index.php/Ide" class="icon wikiurl">
        Ide wiki        </a>
        </td>
    </tr>
        <tr>
      <td class="w1"><a href="/main/source/packages/files">
        Files        </a></td>
      <td class="w1">Wang xiaoyun</td>
      <td class="w1">Productivity</td>
      <td class="w2"><span class="status functional">FUNCTIONAL</span></td>
      <td class='w3'>&nbsp;</td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'>&nbsp;</td><td class='w3'>&nbsp;</td>      <td class="w3">        <a href="/forum/forumdisplay.php?f=39" class="icon forumurl">
        Forum        </a>
        </td>
      <td class='w2'>        <a href="/mailman/listinfo/td-productivity-dev" class="icon mailinglist">
        Mailing List        </a>
        </td>
      <td class="w3">        <a href="/wiki/index.php/Files_Package" class="icon wikiurl">
        Wiki        </a>
        </td>
    </tr>
        <tr>
      <td class="w1"><a href="/main/source/packages/flashlite">
        Flash Lite        </a></td>
      <td class="w1">hema chilukuri</td>
      <td class="w1">Runtimes</td>
      <td class="w2"><span class="status new">NEW</span></td>
      <td class='w3'>&nbsp;</td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td>      <td class="w3">        <a href="/forum/forumdisplay.php?f=40" class="icon forumurl">
        Forum        </a>
        </td>
      <td class='w2'>        <a href="/mailman/listinfo/td-runtimes_and_web-dev" class="icon mailinglist">
        Mailing List        </a>
        </td>
      <td class="w3">        <a href="/wiki/index.php/FlashLite_Package" class="icon wikiurl">
        Wiki        </a>
        </td>
    </tr>
        <tr>
      <td class="w1"><a href="/main/source/packages/fshell">
        fshell        </a></td>
      <td class="w1">Joe Branton</td>
      <td class="w1">OS Base Services</td>
      <td class="w2"><span class="status functional">FUNCTIONAL</span></td>
      <td class='w3'>&nbsp;</td><td class='w3'>&nbsp;</td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td>      <td class="w3">        <a href="/forum/forumdisplay.php?f=31" class="icon forumurl">
        Forum        </a>
        </td>
      <td class='w2'>        <a href="/mailman/listinfo/td-os_base_services-dev" class="icon mailinglist">
        Mailing List        </a>
        </td>
      <td class="w3">        <a href="/wiki/index.php/Fshell" class="icon wikiurl">
        Wiki        </a>
        </td>
    </tr>
        <tr>
      <td class="w1"><a href="/main/source/packages/appsupport">
        Generic Applications Support        </a></td>
      <td class="w1">Subani Basha</td>
      <td class="w1">Runtimes</td>
      <td class="w2"><span class="status functional">FUNCTIONAL</span></td>
      <td class='w3'>&nbsp;</td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'>&nbsp;</td><td class='w3'>&nbsp;</td>      <td class="w3">        <a href="/forum/forumdisplay.php?f=40" class="icon forumurl">
        Forum        </a>
        </td>
      <td class='w2'>        <a href="/mailman/listinfo/td-runtimes_and_web-dev" class="icon mailinglist">
        Mailing List        </a>
        </td>
      <td class="w3">        <a href="/wiki/index.php/Generic_Applications_Support_Package" class="icon wikiurl">
        Wiki        </a>
        </td>
    </tr>
        <tr>
      <td class="w1"><a href="/main/source/packages/ossrv">
        Generic OS Services        </a></td>
      <td class="w1">Radhakrishnan Ramanathan</td>
      <td class="w1">OS Base Services</td>
      <td class="w2"><span class="status functional">FUNCTIONAL</span></td>
      <td class='w3'>&nbsp;</td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td>      <td class="w3">        <a href="/forum/forumdisplay.php?f=31" class="icon forumurl">
        Forum        </a>
        </td>
      <td class='w2'>        <a href="/mailman/listinfo/td-os_base_services-dev" class="icon mailinglist">
        Mailing List        </a>
        </td>
      <td class="w3">        <a href="/wiki/index.php/Generic_OS_Services_Package" class="icon wikiurl">
        Wiki        </a>
        </td>
    </tr>
        <tr>
      <td class="w1"><a href="/main/source/packages/graphics">
        graphics        </a></td>
      <td class="w1">Faisal Memon</td>
      <td class="w1">User Interface</td>
      <td class="w2"><span class="status functional">FUNCTIONAL</span></td>
      <td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td>      <td class="w3">        <a href="/forum/forumdisplay.php?f=43" class="icon forumurl">
        Forum        </a>
        </td>
      <td class='w2'>        <a href="/mailman/listinfo/td-user_interface-dev" class="icon mailinglist">
        Mailing List        </a>
        </td>
      <td class="w3">        <a href="/wiki/index.php/Graphics" class="icon wikiurl">
        Wiki        </a>
        </td>
    </tr>
        <tr>
      <td class="w1"><a href="/main/source/packages/graphicsuis">
        graphicsuis        </a></td>
      <td class="w1">Kumar Sohony</td>
      <td class="w1">User Interface</td>
      <td class="w2"><span class="status functional">FUNCTIONAL</span></td>
      <td class='w3'>&nbsp;</td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'>&nbsp;</td><td class='w3'>&nbsp;</td>      <td class="w3">&nbsp;</td>
      <td class='w2'>        <a href="/mailman/listinfo/td-user_interface-dev" class="icon mailinglist">
        Mailing List        </a>
        </td>
      <td class="w3">        <a href="/wiki/index.php/Graphics_UIs_Package" class="icon wikiurl">
        Wiki        </a>
        </td>
    </tr>
        <tr>
      <td class="w1"><a href="/main/source/packages/Gsprofilesrv">
        Gsprofilesrv        </a></td>
      <td class="w1">Wang xiaoyun</td>
      <td class="w1">Device Management</td>
      <td class="w2"><span class="status functional">FUNCTIONAL</span></td>
      <td class='w3'>&nbsp;</td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'>&nbsp;</td><td class='w3'>&nbsp;</td>      <td class="w3">        <a href="/forum/forumdisplay.php?f=34" class="icon forumurl">
        Forum        </a>
        </td>
      <td class='w2'>        <a href="/mailman/listinfo/td-device_management-dev" class="icon mailinglist">
        Mailing List        </a>
        </td>
      <td class="w3">        <a href="/wiki/index.php/Gsprofilesrv" class="icon wikiurl">
        Wiki        </a>
        </td>
    </tr>
        <tr>
      <td class="w1"><a href="/main/source/packages/gstreamer">
        GStreamer        </a></td>
      <td class="w1">Chetan  Krishnamurthy</td>
      <td class="w1">Multimedia</td>
      <td class="w2"><span class="status functional">FUNCTIONAL</span></td>
      <td class='w3'>&nbsp;</td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td>      <td class="w3">        <a href="/forum/forumdisplay.php?f=36" class="icon forumurl">
        Forum        </a>
        </td>
      <td class='w2'>        <a href="/mailman/listinfo/td-multimedia-dev" class="icon mailinglist">
        td-multimedia-dev mailing list        </a>
        </td>
      <td class="w3">&nbsp;</td>
    </tr>
        <tr>
      <td class="w1"><a href="/main/source/packages/hapticsservices">
        Haptics Services        </a></td>
      <td class="w1">William Xu</td>
      <td class="w1">User Interface</td>
      <td class="w2"><span class="status functional">FUNCTIONAL</span></td>
      <td class='w3'>&nbsp;</td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'>&nbsp;</td><td class='w3'>&nbsp;</td>      <td class="w3">        <a href="/forum/forumdisplay.php?f=43" class="icon forumurl">
        Forum        </a>
        </td>
      <td class='w2'>        <a href="/mailman/listinfo/td-user_interface-dev" class="icon mailinglist">
        Mailing List        </a>
        </td>
      <td class="w3">        <a href="/wiki/index.php/Hapticsservices_Package" class="icon wikiurl">
        Wiki        </a>
        </td>
    </tr>
        <tr>
      <td class="w1"><a href="/main/source/packages/helix">
        Helix        </a></td>
      <td class="w1">Junhong Liu</td>
      <td class="w1">Multimedia</td>
      <td class="w2"><span class="status functional">FUNCTIONAL</span></td>
      <td class='w3'>&nbsp;</td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'>&nbsp;</td><td class='w3'>&nbsp;</td>      <td class="w3">        <a href="/forum/forumdisplay.php?f=36" class="icon forumurl">
        Forum        </a>
        </td>
      <td class='w2'>        <a href="/mailman/listinfo/td-multimedia-dev" class="icon mailinglist">
        Mailing List        </a>
        </td>
      <td class="w3">        <a href="/wiki/index.php/helix_Package" class="icon wikiurl">
        Wiki        </a>
        </td>
    </tr>
        <tr>
      <td class="w1"><a href="/main/source/packages/helps">
        helps        </a></td>
      <td class="w1">Zhanpeng Cheng</td>
      <td class="w1">User Interface</td>
      <td class="w2"><span class="status functional">FUNCTIONAL</span></td>
      <td class='w3'>&nbsp;</td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'>&nbsp;</td><td class='w3'>&nbsp;</td>      <td class="w3">&nbsp;</td>
      <td class='w2'>        <a href="/mailman/listinfo/td-user_interface-dev" class="icon mailinglist">
        Mailing List        </a>
        </td>
      <td class="w3">        <a href="/wiki/index.php/Helps_Package" class="icon wikiurl">
        Wiki        </a>
        </td>
    </tr>
        <tr>
      <td class="w1"><a href="/main/source/packages/homescreen">
        Homescreen        </a></td>
      <td class="w1">Jaakko Haukipuro</td>
      <td class="w1">User Interface</td>
      <td class="w2"><span class="status functional">FUNCTIONAL</span></td>
      <td class='w3'>&nbsp;</td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td>      <td class="w3">        <a href="/forum/forumdisplay.php?f=43" class="icon forumurl">
        Forum        </a>
        </td>
      <td class='w2'>        <a href="/mailman/listinfo/homescreen-dev" class="icon mailinglist">
        Mailing List (Symbian^3 development)        </a>
        </td>
      <td class="w3">        <a href="/wiki/index.php/Homescreen_Package" class="icon wikiurl">
        Wiki        </a>
        </td>
    </tr>
        <tr>
      <td class="w1"><a href="/main/source/packages/homescreensrv">
        Homescreensrv        </a></td>
      <td class="w1">Jaakko Haukipuro</td>
      <td class="w1">User Interface</td>
      <td class="w2"><span class="status functional">FUNCTIONAL</span></td>
      <td class='w3'>&nbsp;</td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td>      <td class="w3">        <a href="/forum/forumdisplay.php?f=43" class="icon forumurl">
        Forum        </a>
        </td>
      <td class='w2'>        <a href="/mailman/listinfo/homescreen-dev" class="icon mailinglist">
        Mailing List (Symbian^3 development)        </a>
        </td>
      <td class="w3">        <a href="/wiki/index.php/Homescreen_Package" class="icon wikiurl">
        Wiki        </a>
        </td>
    </tr>
        <tr>
      <td class="w1"><a href="/main/source/packages/im">
        im        </a></td>
      <td class="w1">Shrikumar Sharma</td>
      <td class="w1">Productivity</td>
      <td class="w2"><span class="status functional">FUNCTIONAL</span></td>
      <td class='w3'>&nbsp;</td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td>      <td class="w3">        <a href="/forum/forumdisplay.php?f=39" class="icon forumurl">
        Forum        </a>
        </td>
      <td class='w2'>        <a href="/mailman/listinfo/td-productivity-dev" class="icon mailinglist">
        Mailing List        </a>
        </td>
      <td class="w3">&nbsp;</td>
    </tr>
        <tr>
      <td class="w1"><a href="/main/source/packages/imgeditor">
        Image Editor        </a></td>
      <td class="w1">Mikael Laine</td>
      <td class="w1">Multimedia Applications</td>
      <td class="w2"><span class="status functional">FUNCTIONAL</span></td>
      <td class='w3'>&nbsp;</td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td>      <td class="w3">        <a href="/forum/forumdisplay.php?f=37" class="icon forumurl">
        Forum        </a>
        </td>
      <td class='w2'>        <a href="/mailman/listinfo/td-multimedia_apps-dev" class="icon mailinglist">
        MM Apps Mailing List        </a>
        </td>
      <td class="w3">        <a href="/wiki/index.php/Imgeditor" class="icon wikiurl">
        Wiki        </a>
        </td>
    </tr>
        <tr>
      <td class="w1"><a href="/main/source/packages/imgvieweruis">
        Image Viewer UI        </a></td>
      <td class="w1">Senthil Ganesan</td>
      <td class="w1">Multimedia Applications</td>
      <td class="w2"><span class="status functional">FUNCTIONAL</span></td>
      <td class='w3'>&nbsp;</td><td class='w3'>&nbsp;</td><td class='w3'>&nbsp;</td><td class='w3'>&nbsp;</td>      <td class="w3">        <a href="/forum/forumdisplay.php?f=37" class="icon forumurl">
        Forum        </a>
        </td>
      <td class='w2'>        <a href="/mailman/listinfo/td-multimedia_apps-dev" class="icon mailinglist">
        Mailing List        </a>
        </td>
      <td class="w3">        <a href="/wiki/index.php/Image_Viewer_UI_Package" class="icon wikiurl">
        Wiki        </a>
        </td>
    </tr>
        <tr>
      <td class="w1"><a href="/main/source/packages/imagingext">
        Imaging Extensions        </a></td>
      <td class="w1">Pranav Mishra</td>
      <td class="w1">Multimedia</td>
      <td class="w2"><span class="status functional">FUNCTIONAL</span></td>
      <td class='w3'>&nbsp;</td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td>      <td class="w3">        <a href="/forum/forumdisplay.php?f=36" class="icon forumurl">
        Forum        </a>
        </td>
      <td class='w2'>        <a href="/mailman/listinfo/td-multimedia-dev" class="icon mailinglist">
        Mailing List        </a>
        </td>
      <td class="w3">        <a href="/wiki/index.php/Imaging_Extensions_Package" class="icon wikiurl">
        Wiki        </a>
        </td>
    </tr>
        <tr>
      <td class="w1"><a href="/main/source/packages/imghandling">
        imghandling        </a></td>
      <td class="w1">Henri Autio</td>
      <td class="w1">Multimedia</td>
      <td class="w2"><span class="status functional">FUNCTIONAL</span></td>
      <td class='w3'>&nbsp;</td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'>&nbsp;</td><td class='w3'>&nbsp;</td>      <td class="w3">        <a href="/forum/forumdisplay.php?f=36" class="icon forumurl">
        Forum        </a>
        </td>
      <td class='w2'>        <a href="/mailman/listinfo/imghandling-dev" class="icon mailinglist">
        Mailing List        </a>
        </td>
      <td class="w3">        <a href="/wiki/index.php/Imghandling_Package" class="icon wikiurl">
        Wiki        </a>
        </td>
    </tr>
        <tr>
      <td class="w1"><a href="/main/source/packages/imsrv">
        imsrv        </a></td>
      <td class="w1">Shrikumar Sharma</td>
      <td class="w1">Productivity</td>
      <td class="w2"><span class="status functional">FUNCTIONAL</span></td>
      <td class='w3'>&nbsp;</td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td>      <td class="w3">        <a href="/forum/forumdisplay.php?f=39" class="icon forumurl">
        Forum        </a>
        </td>
      <td class='w2'>        <a href="/mailman/listinfo/imsrv-dev" class="icon mailinglist">
        Mailing List        </a>
        </td>
      <td class="w3">        <a href="/wiki/index.php/Imsrv_Package" class="icon wikiurl">
        Wiki        </a>
        </td>
    </tr>
        <tr>
      <td class="w1"><a href="/main/source/packages/inputmethods">
        Input Methods        </a></td>
      <td class="w1">Wang xiaoyun</td>
      <td class="w1">User Interface</td>
      <td class="w2"><span class="status functional">FUNCTIONAL</span></td>
      <td class='w3'>&nbsp;</td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td>      <td class="w3">        <a href="/forum/forumdisplay.php?f=42" class="icon forumurl">
        Forum        </a>
        </td>
      <td class='w2'>        <a href="/mailman/listinfo/td-user_interface-dev" class="icon mailinglist">
        Mailing List        </a>
        </td>
      <td class="w3">        <a href="/wiki/index.php/Input_Methods_Package" class="icon wikiurl">
        Wiki        </a>
        </td>
    </tr>
        <tr>
      <td class="w1"><a href="/main/source/packages/internetradio">
        Internet Radio        </a></td>
      <td class="w1">Gang Shen</td>
      <td class="w1">Multimedia Applications</td>
      <td class="w2"><span class="status functional">FUNCTIONAL</span></td>
      <td class='w3'>&nbsp;</td><td class='w3'>&nbsp;</td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'>&nbsp;</td>      <td class="w3">        <a href="/forum/forumdisplay.php?f=37" class="icon forumurl">
        Forum        </a>
        </td>
      <td class='w2'>        <a href="/mailman/listinfo/td-multimedia_apps-dev" class="icon mailinglist">
        Mailing List        </a>
        </td>
      <td class="w3">        <a href="/wiki/index.php/Internet_Radio_Package" class="icon wikiurl">
        Wiki        </a>
        </td>
    </tr>
        <tr>
      <td class="w1"><a href="/main/source/packages/ipappprotocols">
        IP App protocols        </a></td>
      <td class="w1">Shiv Prashant Sood</td>
      <td class="w1">Data Communications</td>
      <td class="w2"><span class="status functional">FUNCTIONAL</span></td>
      <td class='w3'>&nbsp;</td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td>      <td class="w3">        <a href="/forum/forumdisplay.php?f=32" class="icon forumurl">
        Forum        </a>
        </td>
      <td class='w2'>        <a href="/mailman/listinfo/td-data_communications-dev" class="icon mailinglist">
        Mailing List        </a>
        </td>
      <td class="w3">        <a href="/wiki/index.php/IpAppProtocols_Package" class="icon wikiurl">
        Wiki        </a>
        </td>
    </tr>
        <tr>
      <td class="w1"><a href="/main/source/packages/ipconnmgmt">
        IP Connection Management        </a></td>
      <td class="w1">Tommi Rantanen</td>
      <td class="w1">Data Communications</td>
      <td class="w2"><span class="status functional">FUNCTIONAL</span></td>
      <td class='w3'>&nbsp;</td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td>      <td class="w3">        <a href="/forum/forumdisplay.php?f=32" class="icon forumurl">
        Forum        </a>
        </td>
      <td class='w2'>        <a href="/mailman/listinfo/td-data_communications-dev" class="icon mailinglist">
        Mailing List        </a>
        </td>
      <td class="w3">        <a href="/wiki/index.php/IP_Connection_Management_Package" class="icon wikiurl">
        Wiki        </a>
        </td>
    </tr>
        <tr>
      <td class="w1"><a href="/main/source/packages/ipappsrv">
        ipappsrv        </a></td>
      <td class="w1">Paulius Meskauskas</td>
      <td class="w1">Personal Communications</td>
      <td class="w2"><span class="status functional">FUNCTIONAL</span></td>
      <td class='w3'>&nbsp;</td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td>      <td class="w3">        <a href="/forum/forumdisplay.php?f=38" class="icon forumurl">
        Forum        </a>
        </td>
      <td class='w2'>        <a href="/mailman/listinfo/td-personal_communications-dev" class="icon mailinglist">
        Mailing List        </a>
        </td>
      <td class="w3">        <a href="/wiki/index.php/Ipappsrv_package" class="icon wikiurl">
        Wiki        </a>
        </td>
    </tr>
        <tr>
      <td class="w1"><a href="/main/source/packages/iptelephony">
        iptelephony        </a></td>
      <td class="w1">Marko Sironen</td>
      <td class="w1">Personal Communications</td>
      <td class="w2"><span class="status functional">FUNCTIONAL</span></td>
      <td class='w3'>&nbsp;</td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td>      <td class="w3">        <a href="/forum/forumdisplay.php?f=38" class="icon forumurl">
        Forum        </a>
        </td>
      <td class='w2'>        <a href="/mailman/listinfo/td-personal_communications-dev" class="icon mailinglist">
        Mailing List        </a>
        </td>
      <td class="w3">        <a href="/wiki/index.php/Iptelephony_package" class="icon wikiurl">
        Wiki        </a>
        </td>
    </tr>
        <tr>
      <td class="w1"><a href="/main/source/packages/dictionary">
        Japanese User Dictionary        </a></td>
      <td class="w1">Wang xiaoyun</td>
      <td class="w1">Productivity</td>
      <td class="w2"><span class="status functional">FUNCTIONAL</span></td>
      <td class='w3'>&nbsp;</td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'>&nbsp;</td><td class='w3'>&nbsp;</td>      <td class="w3">        <a href="/forumdisplay.php?f=39" class="icon forumurl">
        Forum        </a>
        </td>
      <td class='w2'>        <a href="/mailman/listinfo/td-productivity-dev" class="icon mailinglist">
        Mailing List        </a>
        </td>
      <td class="w3">        <a href="/wiki/index.php/Dictionary_Package" class="icon wikiurl">
        Wiki        </a>
        </td>
    </tr>
        <tr>
      <td class="w1"><a href="/main/source/packages/kernelhwsrv">
        Kernel and Hardware Services        </a></td>
      <td class="w1">John Imhofe</td>
      <td class="w1">OS Base Services</td>
      <td class="w2"><span class="status functional">FUNCTIONAL</span></td>
      <td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td>      <td class="w3">        <a href="/forum/forumdisplay.php?f=31" class="icon forumurl">
        Kernel and Hardware Services Forum (PLEASE USE NOKIA KHS FORUM BELOW INSTEAD)        </a>
        </td>
      <td class='w2'>        <a href="/mailman/listinfo/td-os_base_services-dev" class="icon mailinglist">
        Mailing List        </a>
        </td>
      <td class="w3">        <a href="/wiki/index.php/Kernelhwsrv" class="icon wikiurl">
        Kernel and Hardware Services Wiki        </a>
        </td>
    </tr>
        <tr>
      <td class="w1"><a href="/main/source/packages/lbs">
        LBS        </a></td>
      <td class="w1">Billy Gibson</td>
      <td class="w1">Location</td>
      <td class="w2"><span class="status functional">FUNCTIONAL</span></td>
      <td class='w3'>&nbsp;</td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td>      <td class="w3">        <a href="/forum/forumdisplay.php?f=35" class="icon forumurl">
        Forum        </a>
        </td>
      <td class='w2'>        <a href="/mailman/listinfo/td-location-dev" class="icon mailinglist">
        Mailing List        </a>
        </td>
      <td class="w3">        <a href="/wiki/index.php/LBS" class="icon wikiurl">
        Wiki        </a>
        </td>
    </tr>
        <tr>
      <td class="w1"><a href="/main/source/packages/legacypresence">
        legacypresence        </a></td>
      <td class="w1">Jukka Hämäläinen</td>
      <td class="w1">Productivity</td>
      <td class="w2"><span class="status functional">FUNCTIONAL</span></td>
      <td class='w3'>&nbsp;</td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td>      <td class="w3">        <a href="http://developer.symbian.org/forum/forumdisplay.php?f=16" class="icon forumurl">
        General Application Development        </a>
        </td>
      <td class='w2'>        <a href="/mailman/listinfo/td-productivity-dev" class="icon mailinglist">
        Mailing List        </a>
        </td>
      <td class="w3">        <a href="http://developer.symbian.org/wiki/index.php/Legacy_Presence_Package" class="icon wikiurl">
        Legacypresence wiki        </a>
        </td>
    </tr>
        <tr>
      <td class="w1"><a href="/main/source/packages/location">
        Location        </a></td>
      <td class="w1">Billy Gibson</td>
      <td class="w1">Location</td>
      <td class="w2"><span class="status functional">FUNCTIONAL</span></td>
      <td class='w3'>&nbsp;</td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td>      <td class="w3">        <a href="/forum/forumdisplay.php?f=35" class="icon forumurl">
        Forum        </a>
        </td>
      <td class='w2'>        <a href="/mailman/listinfo/td-location-dev" class="icon mailinglist">
        Mailing List        </a>
        </td>
      <td class="w3">        <a href="/wiki/index.php/Location_Package" class="icon wikiurl">
        Wiki        </a>
        </td>
    </tr>
        <tr>
      <td class="w1"><a href="/main/source/packages/locationsrv">
        Location Service        </a></td>
      <td class="w1">Billy Gibson</td>
      <td class="w1">Location</td>
      <td class="w2"><span class="status functional">FUNCTIONAL</span></td>
      <td class='w3'>&nbsp;</td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td>      <td class="w3">        <a href="/forum/forumdisplay.php?f=35" class="icon forumurl">
        Forum        </a>
        </td>
      <td class='w2'>        <a href="/mailman/listinfo/td-location-dev" class="icon mailinglist">
        Mailing List        </a>
        </td>
      <td class="w3">        <a href="/wiki/index.php/LocationSrv_Package" class="icon wikiurl">
        Wiki        </a>
        </td>
    </tr>
        <tr>
      <td class="w1"><a href="/main/source/packages/gallery">
        Media Gallery        </a></td>
      <td class="w1">Senthil Ganesan</td>
      <td class="w1">Multimedia Applications</td>
      <td class="w2"><span class="status functional">FUNCTIONAL</span></td>
      <td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'>&nbsp;</td><td class='w3'>&nbsp;</td><td class='w3'>&nbsp;</td>      <td class="w3">        <a href="/forum/forumdisplay.php?f=37" class="icon forumurl">
        Forum        </a>
        </td>
      <td class='w2'>        <a href="/mailman/listinfo/td-multimedia_apps-dev" class="icon mailinglist">
        Mailing List        </a>
        </td>
      <td class="w3">        <a href="/wiki/index.php/Media_Gallery_Package" class="icon wikiurl">
        Wiki        </a>
        </td>
    </tr>
        <tr>
      <td class="w1"><a href="/main/source/packages/messaging">
        Messaging        </a></td>
      <td class="w1">Shrikumar Sharma</td>
      <td class="w1">Productivity</td>
      <td class="w2"><span class="status functional">FUNCTIONAL</span></td>
      <td class='w3'>&nbsp;</td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td>      <td class="w3">        <a href="/forum/forumdisplay.php?f=39" class="icon forumurl">
        Forum        </a>
        </td>
      <td class='w2'>        <a href="/mailman/listinfo/messaging-dev" class="icon mailinglist">
        Mailing List        </a>
        </td>
      <td class="w3">        <a href="/wiki/index.php/Messaging_Package" class="icon wikiurl">
        Wiki        </a>
        </td>
    </tr>
        <tr>
      <td class="w1"><a href="/main/source/packages/messagingmw">
        Messaging Middleware        </a></td>
      <td class="w1">Harsha Sathyanarayana Naga</td>
      <td class="w1">Productivity</td>
      <td class="w2"><span class="status functional">FUNCTIONAL</span></td>
      <td class='w3'>&nbsp;</td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td>      <td class="w3">        <a href="/forum/forumdisplay.php?f=39" class="icon forumurl">
        Forum        </a>
        </td>
      <td class='w2'>        <a href="/mailman/listinfo/td-productivity-dev" class="icon mailinglist">
        Mailing List        </a>
        </td>
      <td class="w3">        <a href="/wiki/index.php/Messaging_Middleware" class="icon wikiurl">
        Wiki        </a>
        </td>
    </tr>
        <tr>
      <td class="w1"><a href="/main/source/packages/mds">
        Metadata System        </a></td>
      <td class="w1">Henri Autio</td>
      <td class="w1">Multimedia</td>
      <td class="w2"><span class="status functional">FUNCTIONAL</span></td>
      <td class='w3'>&nbsp;</td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td>      <td class="w3">        <a href="/forum/forumdisplay.php?f=36" class="icon forumurl">
        Forum        </a>
        </td>
      <td class='w2'>        <a href="/mailman/listinfo/mds-dev" class="icon mailinglist">
        Mailing List        </a>
        </td>
      <td class="w3">        <a href="/wiki/index.php/MDS_Package" class="icon wikiurl">
        Wiki        </a>
        </td>
    </tr>
        <tr>
      <td class="w1"><a href="/main/source/packages/metadatasrv">
        metadatasrv        </a></td>
      <td class="w1">Henri Autio</td>
      <td class="w1">Multimedia</td>
      <td class="w2"><span class="status functional">FUNCTIONAL</span></td>
      <td class='w3'>&nbsp;</td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td>      <td class="w3">        <a href="/forum/forumdisplay.php?f=36" class="icon forumurl">
        Forum        </a>
        </td>
      <td class='w2'>        <a href="/mailman/listinfo/metadatasrv-dev" class="icon mailinglist">
        Mailing List        </a>
        </td>
      <td class="w3">        <a href="/wiki/index.php/Metadatasrv_Package" class="icon wikiurl">
        Wiki        </a>
        </td>
    </tr>
        <tr>
      <td class="w1"><a href="/main/source/packages/mmaudio">
        mmaudio        </a></td>
      <td class="w1">Jeremy Murray-Wakefield</td>
      <td class="w1">Multimedia</td>
      <td class="w2"><span class="status functional">FUNCTIONAL</span></td>
      <td class='w3'>&nbsp;</td><td class='w3'>&nbsp;</td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td>      <td class="w3">        <a href="/forum/forumdisplay.php?f=21" class="icon forumurl">
        Forum        </a>
        </td>
      <td class='w2'>        <a href="/mailman/listinfo/td-multimedia-dev" class="icon mailinglist">
        Mailing List        </a>
        </td>
      <td class="w3">&nbsp;</td>
    </tr>
        <tr>
      <td class="w1"><a href="/main/source/packages/mmaudio.nokia.ref">
        mmaudio.nokia.ref        </a></td>
      <td class="w1">Jeremy Murray-Wakefield</td>
      <td class="w1">Multimedia</td>
      <td class="w2"><span class="status functional">FUNCTIONAL</span></td>
      <td class='w3'>&nbsp;</td><td class='w3'>&nbsp;</td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td>      <td class="w3">        <a href="/forum/forumdisplay.php?f=31" class="icon forumurl">
        Forum        </a>
        </td>
      <td class='w2'>        <a href="/mailman/listinfo/td-multimedia-dev" class="icon mailinglist">
        Mailing List        </a>
        </td>
      <td class="w3">&nbsp;</td>
    </tr>
        <tr>
      <td class="w1"><a href="/main/source/packages/mmsharinguis">
        mmsharinguis        </a></td>
      <td class="w1">Paulius Meskauskas</td>
      <td class="w1">Personal Communications</td>
      <td class="w2"><span class="status functional">FUNCTIONAL</span></td>
      <td class='w3'>&nbsp;</td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td>      <td class="w3">        <a href="/forum/forumdisplay.php?f=38" class="icon forumurl">
        Forum        </a>
        </td>
      <td class='w2'>        <a href="/mailman/listinfo/td-personal_communications-dev" class="icon mailinglist">
        Mailing List        </a>
        </td>
      <td class="w3">        <a href="/wiki/index.php/Mmsharinguis_package" class="icon wikiurl">
        Wiki        </a>
        </td>
    </tr>
        <tr>
      <td class="w1"><a href="/main/source/packages/mmuifw">
        mmuifw        </a></td>
      <td class="w1">Kumar Sohony</td>
      <td class="w1">Multimedia</td>
      <td class="w2"><span class="status functional">FUNCTIONAL</span></td>
      <td class='w3'>&nbsp;</td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td>      <td class="w3">        <a href="/forum/forumdisplay.php?f=36" class="icon forumurl">
        Forum        </a>
        </td>
      <td class='w2'>        <a href="/mailman/listinfo/td-multimedia-dev" class="icon mailinglist">
        Mailing List        </a>
        </td>
      <td class="w3">        <a href="/wiki/index.php/Mmuifw_Package" class="icon wikiurl">
        Wiki        </a>
        </td>
    </tr>
        <tr>
      <td class="w1"><a href="/main/source/packages/mmvideo">
        mmvideo        </a></td>
      <td class="w1">James Nash</td>
      <td class="w1">Multimedia</td>
      <td class="w2"><span class="status functional">FUNCTIONAL</span></td>
      <td class='w3'>&nbsp;</td><td class='w3'>&nbsp;</td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td>      <td class="w3">        <a href="/forum/forumdisplay.php?f=21" class="icon forumurl">
        General Platform Development forum        </a>
        </td>
      <td class='w2'>        <a href="/mailman/listinfo/td-multimedia-dev" class="icon mailinglist">
        Multimedia Tech Domain list        </a>
        </td>
      <td class="w3">        <a href="/wiki/index.php/Multimedia_Video_Package" class="icon wikiurl">
        mmvideo package wiki        </a>
        </td>
    </tr>
        <tr>
      <td class="w1"><a href="/main/source/packages/jrt">
        Mobile Runtime for Java Applications        </a></td>
      <td class="w1">Jyrki Aarnos</td>
      <td class="w1">Runtimes</td>
      <td class="w2"><span class="status functional">FUNCTIONAL</span></td>
      <td class='w3'>&nbsp;</td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td>      <td class="w3">        <a href="/forum/forumdisplay.php?f=40" class="icon forumurl">
        Forum        </a>
        </td>
      <td class='w2'>        <a href="/mailman/listinfo/jrt-dev" class="icon mailinglist">
        jrt-dev mailing list        </a>
        </td>
      <td class="w3">        <a href="/wiki/index.php/JRT" class="icon wikiurl">
        Wiki        </a>
        </td>
    </tr>
        <tr>
      <td class="w1"><a href="/main/source/packages/mm">
        Multimedia        </a></td>
      <td class="w1">Jeremy Murray-Wakefield</td>
      <td class="w1">Multimedia</td>
      <td class="w2"><span class="status functional">FUNCTIONAL</span></td>
      <td class='w3'>&nbsp;</td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'>&nbsp;</td><td class='w3'>&nbsp;</td>      <td class="w3">        <a href="/forum/forumdisplay.php?f=36" class="icon forumurl">
        Forum        </a>
        </td>
      <td class='w2'>        <a href="/mailman/listinfo/mm-dev" class="icon mailinglist">
        Mailing List        </a>
        </td>
      <td class="w3">        <a href="/wiki/index.php/Multimedia_Package" class="icon wikiurl">
        Wiki        </a>
        </td>
    </tr>
        <tr>
      <td class="w1"><a href="/main/source/packages/mmappfw">
        Multimedia Application Frameworks        </a></td>
      <td class="w1">Jyrki Akkanen</td>
      <td class="w1">Multimedia</td>
      <td class="w2"><span class="status functional">FUNCTIONAL</span></td>
      <td class='w3'>&nbsp;</td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td>      <td class="w3">        <a href="/forum/forumdisplay.php?f=36" class="icon forumurl">
        Forum        </a>
        </td>
      <td class='w2'>        <a href="/mailman/listinfo/mmappfw-dev" class="icon mailinglist">
        Mailing List        </a>
        </td>
      <td class="w3">        <a href="/wiki/index.php/Multimedia_Application_Frameworks_Package" class="icon wikiurl">
        Wiki        </a>
        </td>
    </tr>
        <tr>
      <td class="w1"><a href="/main/source/packages/mmmw">
        Multimedia Middleware        </a></td>
      <td class="w1">Aaron Roberts</td>
      <td class="w1">Multimedia</td>
      <td class="w2"><span class="status functional">FUNCTIONAL</span></td>
      <td class='w3'>&nbsp;</td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td>      <td class="w3">        <a href="/forum/forumdisplay.php?f=36" class="icon forumurl">
        Forum        </a>
        </td>
      <td class='w2'>        <a href="/mailman/listinfo/mmmw-dev" class="icon mailinglist">
        Mailing List        </a>
        </td>
      <td class="w3">        <a href="/wiki/index.php/Multimedia_Middleware_Package" class="icon wikiurl">
        Wiki        </a>
        </td>
    </tr>
        <tr>
      <td class="w1"><a href="/main/source/packages/musicplayer">
        Music Player        </a></td>
      <td class="w1">Jyrki Hoisko</td>
      <td class="w1">Multimedia Applications</td>
      <td class="w2"><span class="status functional">FUNCTIONAL</span></td>
      <td class='w3'>&nbsp;</td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td>      <td class="w3">        <a href="/forum/forumdisplay.php?f=37" class="icon forumurl">
        Forum        </a>
        </td>
      <td class='w2'>        <a href="/mailman/listinfo/musicplayer-dev" class="icon mailinglist">
        Mailing List        </a>
        </td>
      <td class="w3">        <a href="/wiki/index.php/Music_Player_Package" class="icon wikiurl">
        Wiki        </a>
        </td>
    </tr>
        <tr>
      <td class="w1"><a href="/main/source/packages/naviengine.nec">
        NaviEngine.Nec        </a></td>
      <td class="w1">Ryan Harkin</td>
      <td class="w1">OS Base Services</td>
      <td class="w2"><span class="status new">NEW</span></td>
      <td class='w3'>&nbsp;</td><td class='w3'>&nbsp;</td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td>      <td class="w3">        <a href="/forum/forumdisplay.php?f=31" class="icon forumurl">
        Forum        </a>
        </td>
      <td class='w2'>        <a href="/mailman/listinfo/td-os_base_services-dev" class="icon mailinglist">
        Mailing List        </a>
        </td>
      <td class="w3">        <a href="http://developer.symbian.org/wiki/index.php/NaviEngine" class="icon wikiurl">
        NaviEngine Wiki        </a>
        </td>
    </tr>
        <tr>
      <td class="w1"><a href="/main/source/packages/netprotocols">
        Netprotocols        </a></td>
      <td class="w1">Raghavendra  L</td>
      <td class="w1">Data Communications</td>
      <td class="w2"><span class="status functional">FUNCTIONAL</span></td>
      <td class='w3'>&nbsp;</td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td>      <td class="w3">        <a href="/forum/forumdisplay.php?f=32" class="icon forumurl">
        Forum        </a>
        </td>
      <td class='w2'>        <a href="/mailman/listinfo/td-data_communications-dev" class="icon mailinglist">
        Mailing List        </a>
        </td>
      <td class="w3">        <a href="/wiki/index.php/Netprotocols" class="icon wikiurl">
        Wiki        </a>
        </td>
    </tr>
        <tr>
      <td class="w1"><a href="/main/source/packages/networkingsrv">
        Networking Services        </a></td>
      <td class="w1">Deepak Gupta</td>
      <td class="w1">Data Communications</td>
      <td class="w2"><span class="status functional">FUNCTIONAL</span></td>
      <td class='w3'>&nbsp;</td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td>      <td class="w3">        <a href="/forum/forumdisplay.php?f=32" class="icon forumurl">
        Forum        </a>
        </td>
      <td class='w2'>        <a href="/mailman/listinfo/networkingsrv-dev" class="icon mailinglist">
        Mailing List        </a>
        </td>
      <td class="w3">        <a href="/wiki/index.php/Networking_Services_Package" class="icon wikiurl">
        Wiki        </a>
        </td>
    </tr>
        <tr>
      <td class="w1"><a href="/main/source/packages/networkingdm">
        networkingdm         </a></td>
      <td class="w1">Shobhit Singh</td>
      <td class="w1">Device Management</td>
      <td class="w2"><span class="status archived">ARCHIVED</span></td>
      <td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'>&nbsp;</td><td class='w3'>&nbsp;</td>      <td class="w3">        <a href="/forum/forumdisplay.php?f=34" class="icon forumurl">
        Forum        </a>
        </td>
      <td class='w2'>        <a href="/mailman/listinfo/td-device_management-dev" class="icon mailinglist">
        Mailing List        </a>
        </td>
      <td class="w3">        <a href="/wiki/index.php/Networking_Device_management(networkingdm)" class="icon wikiurl">
        Wiki        </a>
        </td>
    </tr>
        <tr>
      <td class="w1"><a href="/main/source/packages/openmaxil">
        openmaxil        </a></td>
      <td class="w1">Juan  Rubio</td>
      <td class="w1">Multimedia</td>
      <td class="w2"><span class="status functional">FUNCTIONAL</span></td>
      <td class='w3'>&nbsp;</td><td class='w3'>&nbsp;</td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td>      <td class="w3">        <a href="/forum/forumdisplay.php?f=21" class="icon forumurl">
        Forum        </a>
        </td>
      <td class='w2'>        <a href="/mailman/listinfo/td-multimedia-dev" class="icon mailinglist">
        Mailing List        </a>
        </td>
      <td class="w3">        <a href="http://developer.symbian.org/wiki/index.php/Openmaxil" class="icon wikiurl">
        openmaxil package wiki        </a>
        </td>
    </tr>
        <tr>
      <td class="w1"><a href="/main/source/packages/openmaxil.nokia">
        openmaxil.nokia        </a></td>
      <td class="w1">Juan  Rubio</td>
      <td class="w1">Multimedia</td>
      <td class="w2"><span class="status functional">FUNCTIONAL</span></td>
      <td class='w3'>&nbsp;</td><td class='w3'>&nbsp;</td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td>      <td class="w3">        <a href="/forum/forumdisplay.php?f=21" class="icon forumurl">
        Forum        </a>
        </td>
      <td class='w2'>        <a href="/mailman/listinfo/td-multimedia-dev" class="icon mailinglist">
        Mailing List        </a>
        </td>
      <td class="w3">        <a href="http://developer.symbian.org/wiki/index.php/Openmaxil.nokia" class="icon wikiurl">
        openmaxil.nokia package wiki        </a>
        </td>
    </tr>
        <tr>
      <td class="w1"><a href="/main/source/packages/opensrv">
        opensrv        </a></td>
      <td class="w1">Shrikumar Sharma</td>
      <td class="w1">Productivity</td>
      <td class="w2"><span class="status functional">FUNCTIONAL</span></td>
      <td class='w3'>&nbsp;</td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td>      <td class="w3">        <a href="/forum/forumdisplay.php?f=39" class="icon forumurl">
        Forum        </a>
        </td>
      <td class='w2'>        <a href="/mailman/listinfo/td-productivity-dev" class="icon mailinglist">
        Mailing List        </a>
        </td>
      <td class="w3">&nbsp;</td>
    </tr>
        <tr>
      <td class="w1"><a href="/main/source/packages/organizer">
        Organizer        </a></td>
      <td class="w1">Sharad Upadhyay</td>
      <td class="w1">Productivity</td>
      <td class="w2"><span class="status functional">FUNCTIONAL</span></td>
      <td class='w3'>&nbsp;</td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td>      <td class="w3">        <a href="/forum/forumdisplay.php?f=39" class="icon forumurl">
        Forum        </a>
        </td>
      <td class='w2'>        <a href="/mailman/listinfo/organizer-dev" class="icon mailinglist">
        Mailing List        </a>
        </td>
      <td class="w3">        <a href="/wiki/index.php/Organizer_Package" class="icon wikiurl">
        Wiki        </a>
        </td>
    </tr>
        <tr>
      <td class="w1"><a href="/main/source/packages/security">
        OS Security        </a></td>
      <td class="w1">Santosh V Patil</td>
      <td class="w1">Security</td>
      <td class="w2"><span class="status functional">FUNCTIONAL</span></td>
      <td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td>      <td class="w3">        <a href="/forum/forumdisplay.php?f=41" class="icon forumurl">
        Forum        </a>
        </td>
      <td class='w2'>        <a href="/mailman/listinfo/security-dev" class="icon mailinglist">
        Mailing List        </a>
        </td>
      <td class="w3">        <a href="/wiki/index.php/OS_Security_Package" class="icon wikiurl">
        Wiki        </a>
        </td>
    </tr>
        <tr>
      <td class="w1"><a href="/main/source/packages/persistentdata">
        Persistent Data Services        </a></td>
      <td class="w1">Chris Dudding</td>
      <td class="w1">OS Base Services</td>
      <td class="w2"><span class="status functional">FUNCTIONAL</span></td>
      <td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td>      <td class="w3">        <a href="/forum/forumdisplay.php?f=31" class="icon forumurl">
        Forum        </a>
        </td>
      <td class='w2'>        <a href="/mailman/listinfo/persistentdata-dev" class="icon mailinglist">
        persistentdata-dev mailing list        </a>
        </td>
      <td class="w3">        <a href="/wiki/index.php/Persistentdata" class="icon wikiurl">
        Wiki        </a>
        </td>
    </tr>
        <tr>
      <td class="w1"><a href="/main/source/packages/phone">
        phone        </a></td>
      <td class="w1">Samu Collan</td>
      <td class="w1">Personal Communications</td>
      <td class="w2"><span class="status functional">FUNCTIONAL</span></td>
      <td class='w3'>&nbsp;</td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td>      <td class="w3">        <a href="/forum/forumdisplay.php?f=38" class="icon forumurl">
        Forum        </a>
        </td>
      <td class='w2'>        <a href="/mailman/listinfo/td-personal_communications-dev" class="icon mailinglist">
        Mailing List        </a>
        </td>
      <td class="w3">        <a href="/wiki/index.php/Phone_package" class="icon wikiurl">
        Wiki        </a>
        </td>
    </tr>
        <tr>
      <td class="w1"><a href="/main/source/packages/phonesrv">
        phonesrv        </a></td>
      <td class="w1">Samu Collan</td>
      <td class="w1">Personal Communications</td>
      <td class="w2"><span class="status functional">FUNCTIONAL</span></td>
      <td class='w3'>&nbsp;</td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td>      <td class="w3">        <a href="/forum/forumdisplay.php?f=38" class="icon forumurl">
        Forum        </a>
        </td>
      <td class='w2'>        <a href="/mailman/listinfo/td-personal_communications-dev" class="icon mailinglist">
        Mailing List        </a>
        </td>
      <td class="w3">        <a href="/wiki/index.php/Phonesrv_package" class="icon wikiurl">
        Wiki        </a>
        </td>
    </tr>
        <tr>
      <td class="w1"><a href="/main/source/packages/photos">
        Photos        </a></td>
      <td class="w1">Senthil Ganesan</td>
      <td class="w1">Multimedia Applications</td>
      <td class="w2"><span class="status functional">FUNCTIONAL</span></td>
      <td class='w3'>&nbsp;</td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td>      <td class="w3">        <a href="/forum/forumdisplay.php?f=37" class="icon forumurl">
        Forum        </a>
        </td>
      <td class='w2'>        <a href="/mailman/listinfo/photos-dev" class="icon mailinglist">
        Mailing List        </a>
        </td>
      <td class="w3">        <a href="/wiki/index.php/Photos_Package" class="icon wikiurl">
        Wiki        </a>
        </td>
    </tr>
        <tr>
      <td class="w1"><a href="/main/source/packages/poc">
        poc        </a></td>
      <td class="w1">Wenqing Wu</td>
      <td class="w1">Personal Communications</td>
      <td class="w2"><span class="status functional">FUNCTIONAL</span></td>
      <td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'>&nbsp;</td><td class='w3'>&nbsp;</td><td class='w3'>&nbsp;</td>      <td class="w3">        <a href="/forum/forumdisplay.php?f=38" class="icon forumurl">
        Forum        </a>
        </td>
      <td class='w2'>        <a href="/mailman/listinfo/td-personal_communications-dev" class="icon mailinglist">
        Mailing List        </a>
        </td>
      <td class="w3">&nbsp;</td>
    </tr>
        <tr>
      <td class="w1"><a href="/main/source/packages/podcatcher">
        Podcatcher        </a></td>
      <td class="w1">Lars Persson</td>
      <td class="w1">Multimedia Applications</td>
      <td class="w2"><span class="status functional">FUNCTIONAL</span></td>
      <td class='w3'>&nbsp;</td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td>      <td class="w3">&nbsp;</td>
      <td class='w2'>        <a href="http://developer.symbian.org/mailman/listinfo/podcatcher-dev" class="icon mailinglist">
        Podcatcher mailing list        </a>
        </td>
      <td class="w3">&nbsp;</td>
    </tr>
        <tr>
      <td class="w1"><a href="/main/source/packages/printing">
        Printing        </a></td>
      <td class="w1">Feng Li</td>
      <td class="w1">Device Connectivity</td>
      <td class="w2"><span class="status functional">FUNCTIONAL</span></td>
      <td class='w3'>&nbsp;</td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td>      <td class="w3">        <a href="/forum/forumdisplay.php?f=33" class="icon forumurl">
        Forum        </a>
        </td>
      <td class='w2'>        <a href="/mailman/listinfo/td-device_connectivity-dev" class="icon mailinglist">
        Mailing List        </a>
        </td>
      <td class="w3">        <a href="/wiki/index.php/Printing_package" class="icon wikiurl">
        Wiki        </a>
        </td>
    </tr>
        <tr>
      <td class="w1"><a href="/main/source/packages/profile">
        Profile        </a></td>
      <td class="w1">dick zhai</td>
      <td class="w1">User Interface</td>
      <td class="w2"><span class="status functional">FUNCTIONAL</span></td>
      <td class='w3'>&nbsp;</td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td>      <td class="w3">        <a href="/forum/forumdisplay.php?f=34" class="icon forumurl">
        Forum        </a>
        </td>
      <td class='w2'>        <a href="/mailman/listinfo/profile-dev" class="icon mailinglist">
        Mailing List        </a>
        </td>
      <td class="w3">        <a href="/wiki/index.php/Profile_Package" class="icon wikiurl">
        Wiki        </a>
        </td>
    </tr>
        <tr>
      <td class="w1"><a href="/main/source/packages/qemu">
        QEMU and Baseport        </a></td>
      <td class="w1">Andrew Jordan</td>
      <td class="w1">OS Base Services</td>
      <td class="w2"><span class="status functional">FUNCTIONAL</span></td>
      <td class='w3'>&nbsp;</td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td>      <td class="w3">        <a href="/forum/forumdisplay.php?f=31" class="icon forumurl">
        Forum        </a>
        </td>
      <td class='w2'>        <a href="/mailman/listinfo/td-os_base_services-dev" class="icon mailinglist">
        Base Services mailing list        </a>
        </td>
      <td class="w3">        <a href="/wiki/index.php/Syborg_%26_QEMU" class="icon wikiurl">
        Main QEMU wiki        </a>
        </td>
    </tr>
        <tr>
      <td class="w1"><a href="/main/source/packages/qt">
        Qt        </a></td>
      <td class="w1">Eero Penttinen</td>
      <td class="w1">Runtimes</td>
      <td class="w2"><span class="status functional">FUNCTIONAL</span></td>
      <td class='w3'>&nbsp;</td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td>      <td class="w3">        <a href="/oss/MCL/sf/mw/qt" class="icon forumurl">
        Qt - Symbian Developer Community        </a>
        </td>
      <td class='w2'>&nbsp;</td>
      <td class="w3">        <a href="/wiki/index.php/Qt_Package" class="icon wikiurl">
        Wiki        </a>
        </td>
    </tr>
        <tr>
      <td class="w1"><a href="/main/source/packages/radio">
        radio        </a></td>
      <td class="w1">Jyrki Hoisko</td>
      <td class="w1">Multimedia Applications</td>
      <td class="w2"><span class="status functional">FUNCTIONAL</span></td>
      <td class='w3'>&nbsp;</td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td>      <td class="w3">&nbsp;</td>
      <td class='w2'>        <a href="/mailman/listinfo/radio-dev" class="icon mailinglist">
        Mailing List        </a>
        </td>
      <td class="w3">&nbsp;</td>
    </tr>
        <tr>
      <td class="w1"><a href="/main/source/packages/recents">
        recents        </a></td>
      <td class="w1">timo kotonen</td>
      <td class="w1">Productivity</td>
      <td class="w2"><span class="status functional">FUNCTIONAL</span></td>
      <td class='w3'>&nbsp;</td><td class='w3'>&nbsp;</td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td>      <td class="w3">        <a href="/forum/forumdisplay.php?f=39" class="icon forumurl">
        Forum        </a>
        </td>
      <td class='w2'>        <a href="http://developer.symbian.org/mailman/listinfo/td-productivity-dev" class="icon mailinglist">
        Mailing List        </a>
        </td>
      <td class="w3">        <a href="http://developer.symbian.org/wiki/index.php/Recents" class="icon wikiurl">
        recents wiki        </a>
        </td>
    </tr>
        <tr>
      <td class="w1"><a href="/main/source/packages/remoteconn">
        Remote Connectivity        </a></td>
      <td class="w1">Feng Li</td>
      <td class="w1">Device Connectivity</td>
      <td class="w2"><span class="status functional">FUNCTIONAL</span></td>
      <td class='w3'>&nbsp;</td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td>      <td class="w3">        <a href="/forum/forumdisplay.php?f=33" class="icon forumurl">
        Forum        </a>
        </td>
      <td class='w2'>        <a href="/mailman/listinfo/remoteconn_dev" class="icon mailinglist">
        Mailing List        </a>
        </td>
      <td class="w3">        <a href="/wiki/index.php/Remoteconn_package" class="icon wikiurl">
        Wiki        </a>
        </td>
    </tr>
        <tr>
      <td class="w1"><a href="/main/source/packages/remotemgmt">
        remotemgmt        </a></td>
      <td class="w1">Deepak Segaran</td>
      <td class="w1">Device Management</td>
      <td class="w2"><span class="status functional">FUNCTIONAL</span></td>
      <td class='w3'>&nbsp;</td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td>      <td class="w3">        <a href="/forum/forumdisplay.php?f=34" class="icon forumurl">
        Forum        </a>
        </td>
      <td class='w2'>        <a href="/mailman/listinfo/td-device_management-dev" class="icon mailinglist">
        Mailing List        </a>
        </td>
      <td class="w3">        <a href="/wiki/index.php/RemoteMgmt_Package" class="icon wikiurl">
        Wiki        </a>
        </td>
    </tr>
        <tr>
      <td class="w1"><a href="/main/source/packages/remotestorage">
        RemoteStorage        </a></td>
      <td class="w1">Feng Li</td>
      <td class="w1">Device Connectivity</td>
      <td class="w2"><span class="status functional">FUNCTIONAL</span></td>
      <td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'>&nbsp;</td><td class='w3'>&nbsp;</td>      <td class="w3">        <a href="/forum/forumdisplay.php?f=33" class="icon forumurl">
        Forum        </a>
        </td>
      <td class='w2'>        <a href="/mailman/listinfo/td-device_connectivity-dev" class="icon mailinglist">
        Mailing List        </a>
        </td>
      <td class="w3">        <a href="/wiki/index.php/Remote_Storage_Package" class="icon wikiurl">
        Wiki        </a>
        </td>
    </tr>
        <tr>
      <td class="w1"><a href="/main/source/packages/screensaver">
        screensaver        </a></td>
      <td class="w1">Robin Shi</td>
      <td class="w1">User Interface</td>
      <td class="w2"><span class="status functional">FUNCTIONAL</span></td>
      <td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td>      <td class="w3">        <a href="/forum/forumdisplay.php?f=43" class="icon forumurl">
        Forum        </a>
        </td>
      <td class='w2'>        <a href="/mailman/listinfo/td-user_interface-dev" class="icon mailinglist">
        Mailing List        </a>
        </td>
      <td class="w3">        <a href="/wiki/index.php/Screensaver_Package" class="icon wikiurl">
        Wiki        </a>
        </td>
    </tr>
        <tr>
      <td class="w1"><a href="/main/source/packages/sdkcreation">
        SDK Creation        </a></td>
      <td class="w1">Dhanvantri Rajpurohit</td>
      <td class="w1">Tools</td>
      <td class="w2"><span class="status functional">FUNCTIONAL</span></td>
      <td class='w3'>&nbsp;</td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'>&nbsp;</td><td class='w3'>&nbsp;</td>      <td class="w3">        <a href="/forum/forumdisplay.php?f=42" class="icon forumurl">
        Forum        </a>
        </td>
      <td class='w2'>        <a href="/mailman/listinfo/td-tools-dev" class="icon mailinglist">
        Tools mailing list        </a>
        </td>
      <td class="w3">        <a href="/wiki/index.php/Sdkcreation" class="icon wikiurl">
        Sdkcreation wiki        </a>
        </td>
    </tr>
        <tr>
      <td class="w1"><a href="/main/source/packages/search">
        search        </a></td>
      <td class="w1">Shreekanth Lakshmeshwar</td>
      <td class="w1">Productivity</td>
      <td class="w2"><span class="status functional">FUNCTIONAL</span></td>
      <td class='w3'>&nbsp;</td><td class='w3'>&nbsp;</td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td>      <td class="w3">&nbsp;</td>
      <td class='w2'>&nbsp;</td>
      <td class="w3">&nbsp;</td>
    </tr>
        <tr>
      <td class="w1"><a href="/main/source/packages/searchsrv">
        searchsrv        </a></td>
      <td class="w1">Shreekanth Lakshmeshwar</td>
      <td class="w1">Productivity</td>
      <td class="w2"><span class="status functional">FUNCTIONAL</span></td>
      <td class='w3'>&nbsp;</td><td class='w3'>&nbsp;</td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td>      <td class="w3">&nbsp;</td>
      <td class='w2'>&nbsp;</td>
      <td class="w3">&nbsp;</td>
    </tr>
        <tr>
      <td class="w1"><a href="/main/source/packages/securitysrv">
        Security Services        </a></td>
      <td class="w1">Timo Heikkinen</td>
      <td class="w1">Security</td>
      <td class="w2"><span class="status functional">FUNCTIONAL</span></td>
      <td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'>&nbsp;</td><td class='w3'><img src='/img/packages/tick.gif'></td>      <td class="w3">        <a href="/forum/forumdisplay.php?f=41" class="icon forumurl">
        Forum        </a>
        </td>
      <td class='w2'>        <a href="/mailman/listinfo/securitysrv-dev" class="icon mailinglist">
        Mailing List        </a>
        </td>
      <td class="w3">        <a href="/wiki/index.php/Securitysrv_package" class="icon wikiurl">
        Wiki        </a>
        </td>
    </tr>
        <tr>
      <td class="w1"><a href="/main/source/packages/srvdiscovery">
        Service discovery and usage        </a></td>
      <td class="w1">Guruprasad Kini</td>
      <td class="w1">Device Connectivity</td>
      <td class="w2"><span class="status functional">FUNCTIONAL</span></td>
      <td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'>&nbsp;</td>      <td class="w3">        <a href="/forum/forumdisplay.php?f=33" class="icon forumurl">
        Forum        </a>
        </td>
      <td class='w2'>        <a href="/mailman/listinfo/td-device_connectivity-dev" class="icon mailinglist">
        Mailing List        </a>
        </td>
      <td class="w3">        <a href="/wiki/index.php/Service_Discovery_and_Usage_Package" class="icon wikiurl">
        Wiki        </a>
        </td>
    </tr>
        <tr>
      <td class="w1"><a href="/main/source/packages/serviceapi">
        serviceapi        </a></td>
      <td class="w1">Sunil Slathia</td>
      <td class="w1">Runtimes</td>
      <td class="w2"><span class="status functional">FUNCTIONAL</span></td>
      <td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td>      <td class="w3">        <a href="/forum/forumdisplay.php?f=40" class="icon forumurl">
        Forum        </a>
        </td>
      <td class='w2'>        <a href="/mailman/listinfo/td-runtimes_and_web-dev" class="icon mailinglist">
        Mailing List        </a>
        </td>
      <td class="w3">        <a href="/wiki/index.php/Service_API_Package" class="icon wikiurl">
        Wiki        </a>
        </td>
    </tr>
        <tr>
      <td class="w1"><a href="/main/source/packages/serviceapifw">
        serviceapifw        </a></td>
      <td class="w1">kasthurirengan ns</td>
      <td class="w1">Runtimes</td>
      <td class="w2"><span class="status functional">FUNCTIONAL</span></td>
      <td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td>      <td class="w3">        <a href="/forum/forumdisplay.php?f=40" class="icon forumurl">
        Forum        </a>
        </td>
      <td class='w2'>        <a href="/mailman/listinfo/td-runtimes_and_web-dev" class="icon mailinglist">
        Mailing List        </a>
        </td>
      <td class="w3">        <a href="/wiki/index.php/Service_API_Framework_Package" class="icon wikiurl">
        Wiki        </a>
        </td>
    </tr>
        <tr>
      <td class="w1"><a href="/main/source/packages/settingsuis">
        SettingsUIs        </a></td>
      <td class="w1">Wang xiaoyun</td>
      <td class="w1">Device Management</td>
      <td class="w2"><span class="status functional">FUNCTIONAL</span></td>
      <td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td>      <td class="w3">        <a href="/forum/forumdisplay.php?f=34" class="icon forumurl">
        Forum        </a>
        </td>
      <td class='w2'>        <a href="/mailman/listinfo/td-device_management-dev" class="icon mailinglist">
        Mailing List        </a>
        </td>
      <td class="w3">        <a href="/wiki/index.php/Settings_UIs" class="icon wikiurl">
        Wiki        </a>
        </td>
    </tr>
        <tr>
      <td class="w1"><a href="/main/source/packages/shortlinkconn">
        Shortlink Connectivity        </a></td>
      <td class="w1">Tero Soukko</td>
      <td class="w1">Device Connectivity</td>
      <td class="w2"><span class="status functional">FUNCTIONAL</span></td>
      <td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'>&nbsp;</td><td class='w3'>&nbsp;</td>      <td class="w3">        <a href="/forum/forumdisplay.php?f=33" class="icon forumurl">
        Forum        </a>
        </td>
      <td class='w2'>        <a href="/mailman/listinfo/td-device_connectivity-dev" class="icon mailinglist">
        Mailing List        </a>
        </td>
      <td class="w3">        <a href="/wiki/index.php/Shortlink_Connectivity_Package" class="icon wikiurl">
        Wiki        </a>
        </td>
    </tr>
        <tr>
      <td class="w1"><a href="/main/source/packages/shortlinksrv">
        Shortlink Services        </a></td>
      <td class="w1">Tim Howes</td>
      <td class="w1">Device Connectivity</td>
      <td class="w2"><span class="status functional">FUNCTIONAL</span></td>
      <td class='w3'>&nbsp;</td><td class='w3'>&nbsp;</td><td class='w3'>&nbsp;</td><td class='w3'>&nbsp;</td>      <td class="w3">        <a href="/forum/forumdisplay.php?f=33" class="icon forumurl">
        Forum        </a>
        </td>
      <td class='w2'>        <a href="/mailman/listinfo/td-device_connectivity-dev" class="icon mailinglist">
        Mailing List        </a>
        </td>
      <td class="w3">        <a href="/wiki/index.php/ShortlinkServices_Package" class="icon wikiurl">
        Wiki        </a>
        </td>
    </tr>
        <tr>
      <td class="w1"><a href="/main/source/packages/socialmobilefw">
        Social Mobile Framework        </a></td>
      <td class="w1">chandradeep gandhi</td>
      <td class="w1">Productivity</td>
      <td class="w2"><span class="status functional">FUNCTIONAL</span></td>
      <td class='w3'>&nbsp;</td><td class='w3'>&nbsp;</td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td>      <td class="w3">        <a href="/forum/forumdisplay.php?f=39" class="icon forumurl">
        Forum        </a>
        </td>
      <td class='w2'>        <a href="/mailman/listinfo/td-productivity-dev" class="icon mailinglist">
        td-productivity-dev mailing list        </a>
        </td>
      <td class="w3">        <a href="/wiki/index.php/Social_Mobile_Framework" class="icon wikiurl">
        Wiki        </a>
        </td>
    </tr>
        <tr>
      <td class="w1"><a href="/main/source/packages/speechsrv">
        Speech Services        </a></td>
      <td class="w1">Esa Seppälä</td>
      <td class="w1">User Interface</td>
      <td class="w2"><span class="status functional">FUNCTIONAL</span></td>
      <td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td>      <td class="w3">&nbsp;</td>
      <td class='w2'>        <a href="/mailman/listinfo/td-user_interface-dev" class="icon mailinglist">
        Mailing List        </a>
        </td>
      <td class="w3">        <a href="/wiki/index.php/Speech_Services_Package" class="icon wikiurl">
        Wiki        </a>
        </td>
    </tr>
        <tr>
      <td class="w1"><a href="/main/source/packages/staticana">
        Static Analysis         </a></td>
      <td class="w1">Shrivatsa swadi</td>
      <td class="w1">Tools</td>
      <td class="w2"><span class="status functional">FUNCTIONAL</span></td>
      <td class='w3'>&nbsp;</td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'>&nbsp;</td>      <td class="w3">        <a href="http://developer.symbian.org/forum/forumdisplay.php?f=42" class="icon forumurl">
        Forum        </a>
        </td>
      <td class='w2'>        <a href="/mailman/listinfo/td-tools-dev" class="icon mailinglist">
        Tools mailing list        </a>
        </td>
      <td class="w3">        <a href="/wiki/index.php/Staticana" class="icon wikiurl">
        Staticana wiki        </a>
        </td>
    </tr>
        <tr>
      <td class="w1"><a href="/main/source/packages/stubs">
        Stubs        </a></td>
      <td class="w1">Sampo Savolainen</td>
      <td class="w1">Tools</td>
      <td class="w2"><span class="status functional">FUNCTIONAL</span></td>
      <td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td>      <td class="w3">        <a href="/forum/forumdisplay.php?f=42" class="icon forumurl">
        Forum        </a>
        </td>
      <td class='w2'>        <a href="/mailman/listinfo/td-tools-dev" class="icon mailinglist">
        Tools mailing list        </a>
        </td>
      <td class="w3">        <a href="/wiki/index.php/Stubs" class="icon wikiurl">
        Stubs wiki        </a>
        </td>
    </tr>
        <tr>
      <td class="w1"><a href="/main/source/packages/svgt">
        SVGT        </a></td>
      <td class="w1">Mahesh Chaudhari</td>
      <td class="w1">User Interface</td>
      <td class="w2"><span class="status functional">FUNCTIONAL</span></td>
      <td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td>      <td class="w3">&nbsp;</td>
      <td class='w2'>        <a href="/mailman/listinfo/td-user_interface-dev" class="icon mailinglist">
        Mailing List        </a>
        </td>
      <td class="w3">        <a href="/wiki/index.php/SVGT_Package" class="icon wikiurl">
        Wiki        </a>
        </td>
    </tr>
        <tr>
      <td class="w1"><a href="/main/source/packages/swconfig">
        SW System Configuration Tools        </a></td>
      <td class="w1">Teemu Rytkönen</td>
      <td class="w1">Tools</td>
      <td class="w2"><span class="status functional">FUNCTIONAL</span></td>
      <td class='w3'>&nbsp;</td><td class='w3'>&nbsp;</td><td class='w3'>&nbsp;</td><td class='w3'>&nbsp;</td>      <td class="w3">        <a href="/forum/forumdisplay.php?f=42" class="icon forumurl">
        Forum        </a>
        </td>
      <td class='w2'>        <a href="/mailman/listinfo/td-tools-dev" class="icon mailinglist">
        Tools mailing list        </a>
        </td>
      <td class="w3">        <a href="/wiki/index.php/Swconfig" class="icon wikiurl">
        Swconfig wiki        </a>
        </td>
    </tr>
        <tr>
      <td class="w1"><a href="/main/source/packages/techview">
        Tech View        </a></td>
      <td class="w1">Richard Potter</td>
      <td class="w1">User Interface</td>
      <td class="w2"><span class="status functional">FUNCTIONAL</span></td>
      <td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'>&nbsp;</td><td class='w3'>&nbsp;</td>      <td class="w3">        <a href="/forum/forumdisplay.php?f=42" class="icon forumurl">
        Forum        </a>
        </td>
      <td class='w2'>        <a href="/mailman/listinfo/td-user_interface-dev" class="icon mailinglist">
        Mailing List        </a>
        </td>
      <td class="w3">&nbsp;</td>
    </tr>
        <tr>
      <td class="w1"><a href="/main/source/packages/test">
        Test        </a></td>
      <td class="w1">Johnson Ma</td>
      <td class="w1">Tools</td>
      <td class="w2"><span class="status functional">FUNCTIONAL</span></td>
      <td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td>      <td class="w3">        <a href="/forum/forumdisplay.php?f=42" class="icon forumurl">
        Forum        </a>
        </td>
      <td class='w2'>        <a href="/mailman/listinfo/td-tools-dev" class="icon mailinglist">
        Tools mailing list        </a>
        </td>
      <td class="w3">        <a href="/wiki/index.php/Test" class="icon wikiurl">
        Test package wiki        </a>
        </td>
    </tr>
        <tr>
      <td class="w1"><a href="/main/source/packages/textandloc">
        Text & Localisation Services        </a></td>
      <td class="w1">andy cai</td>
      <td class="w1">User Interface</td>
      <td class="w2"><span class="status functional">FUNCTIONAL</span></td>
      <td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td>      <td class="w3">        <a href="/forum/forumdisplay.php?f=43" class="icon forumurl">
        Forum        </a>
        </td>
      <td class='w2'>        <a href="/mailman/listinfo/textandloc-dev" class="icon mailinglist">
        Mailing List        </a>
        </td>
      <td class="w3">        <a href="/wiki/index.php/Text_%26_Localisation_Services" class="icon wikiurl">
        Wiki        </a>
        </td>
    </tr>
        <tr>
      <td class="w1"><a href="/main/source/packages/uiresources">
        UI Resources        </a></td>
      <td class="w1">zhang yong</td>
      <td class="w1">User Interface</td>
      <td class="w2"><span class="status functional">FUNCTIONAL</span></td>
      <td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'>&nbsp;</td><td class='w3'>&nbsp;</td>      <td class="w3">&nbsp;</td>
      <td class='w2'>        <a href="/mailman/listinfo/td-user_interface-dev" class="icon mailinglist">
        Mailing List        </a>
        </td>
      <td class="w3">        <a href="/wiki/index.php/UI_Resources_Package" class="icon wikiurl">
        Wiki        </a>
        </td>
    </tr>
        <tr>
      <td class="w1"><a href="/main/source/packages/uiaccelerator">
        uiaccelerator        </a></td>
      <td class="w1">Tero Viitala-Kiss</td>
      <td class="w1">User Interface</td>
      <td class="w2"><span class="status functional">FUNCTIONAL</span></td>
      <td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td>      <td class="w3">&nbsp;</td>
      <td class='w2'>        <a href="/mailman/listinfo/td-user_interface-dev" class="icon mailinglist">
        Mailing List        </a>
        </td>
      <td class="w3">        <a href="/wiki/index.php/UI_Accelerator_Package" class="icon wikiurl">
        Wiki        </a>
        </td>
    </tr>
        <tr>
      <td class="w1"><a href="/main/source/packages/usb">
        usb        </a></td>
      <td class="w1">Xiaolong Shi</td>
      <td class="w1">Device Connectivity</td>
      <td class="w2"><span class="status functional">FUNCTIONAL</span></td>
      <td class='w3'>&nbsp;</td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'>&nbsp;</td>      <td class="w3">        <a href="/forum/forumdisplay.php?f=33" class="icon forumurl">
        Forum        </a>
        </td>
      <td class='w2'>        <a href="/mailman/listinfo/td-device_connectivity-dev" class="icon mailinglist">
        Mailing List        </a>
        </td>
      <td class="w3">        <a href="/wiki/index.php/USB" class="icon wikiurl">
        Wiki        </a>
        </td>
    </tr>
        <tr>
      <td class="w1"><a href="/main/source/packages/usbservices">
        usbservices        </a></td>
      <td class="w1">Xiaolong Shi</td>
      <td class="w1">Device Connectivity</td>
      <td class="w2"><span class="status functional">FUNCTIONAL</span></td>
      <td class='w3'>&nbsp;</td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'>&nbsp;</td>      <td class="w3">        <a href="/forum/forumdisplay.php?f=33" class="icon forumurl">
        Forum        </a>
        </td>
      <td class='w2'>        <a href="/mailman/listinfo/td-device_connectivity-dev" class="icon mailinglist">
        Mailing List        </a>
        </td>
      <td class="w3">        <a href="/wiki/index.php/USB_Services_Package(usbservices)" class="icon wikiurl">
        Wiki        </a>
        </td>
    </tr>
        <tr>
      <td class="w1"><a href="/main/source/packages/ui">
        User Interface         </a></td>
      <td class="w1">vasudev srinivasarao</td>
      <td class="w1">Tools</td>
      <td class="w2"><span class="status functional">FUNCTIONAL</span></td>
      <td class='w3'>&nbsp;</td><td class='w3'>&nbsp;</td><td class='w3'>&nbsp;</td><td class='w3'>&nbsp;</td>      <td class="w3">        <a href="/forum/forumdisplay.php?f=42" class="icon forumurl">
        Forum        </a>
        </td>
      <td class='w2'>        <a href="/mailman/listinfo/ui-dev" class="icon mailinglist">
        ui-dev mailing list        </a>
        </td>
      <td class="w3">        <a href="/wiki/index.php/Ui" class="icon wikiurl">
        Ui package wiki        </a>
        </td>
    </tr>
        <tr>
      <td class="w1"><a href="/main/source/packages/uitools">
        User Interface Tools        </a></td>
      <td class="w1">William Xu</td>
      <td class="w1">Tools</td>
      <td class="w2"><span class="status functional">FUNCTIONAL</span></td>
      <td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'>&nbsp;</td><td class='w3'>&nbsp;</td>      <td class="w3">&nbsp;</td>
      <td class='w2'>        <a href="/mailman/listinfo/uitools-dev" class="icon mailinglist">
        Tools mailing list        </a>
        </td>
      <td class="w3">        <a href="/wiki/index.php/Uitools" class="icon wikiurl">
        Uitools wiki        </a>
        </td>
    </tr>
        <tr>
      <td class="w1"><a href="/main/source/packages/utils">
        Utils        </a></td>
      <td class="w1">Wang xiaoyun</td>
      <td class="w1">Productivity</td>
      <td class="w2"><span class="status functional">FUNCTIONAL</span></td>
      <td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'>&nbsp;</td><td class='w3'>&nbsp;</td>      <td class="w3">        <a href="/forum/forumdisplay.php?f=39" class="icon forumurl">
        Forum        </a>
        </td>
      <td class='w2'>        <a href="/mailman/listinfo/td-productivity-dev" class="icon mailinglist">
        Mailing List        </a>
        </td>
      <td class="w3">        <a href="/wiki/index.php/Utils_Package" class="icon wikiurl">
        Wiki        </a>
        </td>
    </tr>
        <tr>
      <td class="w1"><a href="/main/source/packages/videocenter">
        Video Center        </a></td>
      <td class="w1">Petri Laine</td>
      <td class="w1">Multimedia Applications</td>
      <td class="w2"><span class="status functional">FUNCTIONAL</span></td>
      <td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'>&nbsp;</td><td class='w3'>&nbsp;</td><td class='w3'>&nbsp;</td>      <td class="w3">        <a href="/forum/forumdisplay.php?f=37" class="icon forumurl">
        Forum        </a>
        </td>
      <td class='w2'>        <a href="/mailman/listinfo/td-multimedia_apps-dev" class="icon mailinglist">
        Mailing List        </a>
        </td>
      <td class="w3">        <a href="/wiki/index.php/Video_Center_Package" class="icon wikiurl">
        Wiki        </a>
        </td>
    </tr>
        <tr>
      <td class="w1"><a href="/main/source/packages/videoeditor">
        Video Editor        </a></td>
      <td class="w1">Mikael Laine</td>
      <td class="w1">Multimedia Applications</td>
      <td class="w2"><span class="status functional">FUNCTIONAL</span></td>
      <td class='w3'>&nbsp;</td><td class='w3'>&nbsp;</td><td class='w3'>&nbsp;</td><td class='w3'>&nbsp;</td>      <td class="w3">        <a href="/forum/forumdisplay.php?f=37" class="icon forumurl">
        Forum        </a>
        </td>
      <td class='w2'>        <a href="/mailman/listinfo/td-multimedia_apps-dev" class="icon mailinglist">
        Mailing List        </a>
        </td>
      <td class="w3">        <a href="/wiki/index.php/Video_Editor_Package" class="icon wikiurl">
        Wiki        </a>
        </td>
    </tr>
        <tr>
      <td class="w1"><a href="/main/source/packages/videoplayer">
        Video Player        </a></td>
      <td class="w1">Petri Laine</td>
      <td class="w1">Multimedia Applications</td>
      <td class="w2"><span class="status functional">FUNCTIONAL</span></td>
      <td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td>      <td class="w3">        <a href="/forum/forumdisplay.php?f=37" class="icon forumurl">
        Forum        </a>
        </td>
      <td class='w2'>        <a href="/mailman/listinfo/td-multimedia_apps-dev" class="icon mailinglist">
        Mailing List        </a>
        </td>
      <td class="w3">        <a href="/wiki/index.php/Video_Player_Package" class="icon wikiurl">
        Wiki        </a>
        </td>
    </tr>
        <tr>
      <td class="w1"><a href="/main/source/packages/videotelephony">
        videotelephony        </a></td>
      <td class="w1">Wenqing Wu</td>
      <td class="w1">Personal Communications</td>
      <td class="w2"><span class="status functional">FUNCTIONAL</span></td>
      <td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'>&nbsp;</td><td class='w3'>&nbsp;</td>      <td class="w3">        <a href="/forum/forumdisplay.php?f=38" class="icon forumurl">
        Forum        </a>
        </td>
      <td class='w2'>        <a href="/mailman/listinfo/td-personal_communications-dev" class="icon mailinglist">
        Mailing List        </a>
        </td>
      <td class="w3">&nbsp;</td>
    </tr>
        <tr>
      <td class="w1"><a href="/main/source/packages/videoutils">
        videoutils        </a></td>
      <td class="w1">Petri Laine</td>
      <td class="w1">Multimedia</td>
      <td class="w2"><span class="status functional">FUNCTIONAL</span></td>
      <td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'>&nbsp;</td>      <td class="w3">        <a href="/forum/forumdisplay.php?f=36" class="icon forumurl">
        Forum        </a>
        </td>
      <td class='w2'>        <a href="/mailman/listinfo/videoutils-dev" class="icon mailinglist">
        Mailing List        </a>
        </td>
      <td class="w3">        <a href="/wiki/index.php/Videoutils_Package" class="icon wikiurl">
        Wiki        </a>
        </td>
    </tr>
        <tr>
      <td class="w1"><a href="/main/source/packages/voicerec">
        Voice Recorder        </a></td>
      <td class="w1">Jyrki Akkanen</td>
      <td class="w1">Multimedia Applications</td>
      <td class="w2"><span class="status functional">FUNCTIONAL</span></td>
      <td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'>&nbsp;</td><td class='w3'>&nbsp;</td>      <td class="w3">        <a href="/forum/forumdisplay.php?f=37" class="icon forumurl">
        Forum        </a>
        </td>
      <td class='w2'>        <a href="/mailman/listinfo/voicrec-dev" class="icon mailinglist">
        Mailing List        </a>
        </td>
      <td class="w3">        <a href="/wiki/index.php/Voice_Recorder_Package" class="icon wikiurl">
        Wiki        </a>
        </td>
    </tr>
        <tr>
      <td class="w1"><a href="/main/source/packages/vpnclient">
        vpnclient        </a></td>
      <td class="w1">Mikko Aittola</td>
      <td class="w1">Data Communications</td>
      <td class="w2"><span class="status functional">FUNCTIONAL</span></td>
      <td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td>      <td class="w3">        <a href="/forum/forumdisplay.php?f=41" class="icon forumurl">
        Forum        </a>
        </td>
      <td class='w2'>        <a href="/mailman/listinfo/vpnclient-dev" class="icon mailinglist">
        Mailing List        </a>
        </td>
      <td class="w3">        <a href="/wiki/index.php/Vpnclient_Package" class="icon wikiurl">
        Wiki        </a>
        </td>
    </tr>
        <tr>
      <td class="w1"><a href="/main/source/packages/web">
        Web        </a></td>
      <td class="w1">Leonid Ebril</td>
      <td class="w1">Runtimes</td>
      <td class="w2"><span class="status functional">FUNCTIONAL</span></td>
      <td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'>&nbsp;</td><td class='w3'>&nbsp;</td>      <td class="w3">        <a href="/forum/forumdisplay.php?f=40" class="icon forumurl">
        Forum        </a>
        </td>
      <td class='w2'>        <a href="/mailman/listinfo/td-runtimes_and_web-dev" class="icon mailinglist">
        Mailing List        </a>
        </td>
      <td class="w3">        <a href="/wiki/index.php/Web_Package" class="icon wikiurl">
        Wiki        </a>
        </td>
    </tr>
        <tr>
      <td class="w1"><a href="/main/source/packages/wrttools">
        Web Development Tools        </a></td>
      <td class="w1">Paul Beusterien</td>
      <td class="w1">Tools</td>
      <td class="w2"><span class="status functional">FUNCTIONAL</span></td>
      <td class='w3'>&nbsp;</td><td class='w3'>&nbsp;</td><td class='w3'>&nbsp;</td><td class='w3'>&nbsp;</td>      <td class="w3">        <a href="/forum/forumdisplay.php?f=42" class="icon forumurl">
        Forum        </a>
        </td>
      <td class='w2'>        <a href="/mailman/listinfo/td-tools-dev" class="icon mailinglist">
        Tools mailing list        </a>
        </td>
      <td class="w3">        <a href="/wiki/index.php/Wrttools" class="icon wikiurl">
        Wrttools wiki        </a>
        </td>
    </tr>
        <tr>
      <td class="w1"><a href="/main/source/packages/webextensions">
        Web Extensions        </a></td>
      <td class="w1">Salvatore Rinaldo</td>
      <td class="w1">Runtimes</td>
      <td class="w2"><span class="status functional">FUNCTIONAL</span></td>
      <td class='w3'>&nbsp;</td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'>&nbsp;</td><td class='w3'>&nbsp;</td>      <td class="w3">        <a href="http://developer.symbian.org/forum/forumdisplay.php?f=51" class="icon forumurl">
        WRT and other Web Technologies (Forum)        </a>
        </td>
      <td class='w2'>&nbsp;</td>
      <td class="w3">        <a href="http://developer.symbian.org/wiki/index.php/Web_Extensions_Package" class="icon wikiurl">
        Package Wiki        </a>
        </td>
    </tr>
        <tr>
      <td class="w1"><a href="/main/source/packages/websrv">
        Webservices        </a></td>
      <td class="w1">Sandeep Sahoo</td>
      <td class="w1">Runtimes</td>
      <td class="w2"><span class="status functional">FUNCTIONAL</span></td>
      <td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'>&nbsp;</td><td class='w3'>&nbsp;</td>      <td class="w3">        <a href="/forum/forumdisplay.php?f=40" class="icon forumurl">
        Forum        </a>
        </td>
      <td class='w2'>        <a href="/mailman/listinfo/webserv-dev" class="icon mailinglist">
        Mailing List        </a>
        </td>
      <td class="w3">        <a href="/wiki/index.php/Web_Services_Package" class="icon wikiurl">
        Wiki        </a>
        </td>
    </tr>
        <tr>
      <td class="w1"><a href="/main/source/packages/webuis">
        Webuis        </a></td>
      <td class="w1">Leonid Ebril</td>
      <td class="w1">Runtimes</td>
      <td class="w2"><span class="status functional">FUNCTIONAL</span></td>
      <td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'>&nbsp;</td><td class='w3'>&nbsp;</td>      <td class="w3">        <a href="/forum/forumdisplay.php?f=40" class="icon forumurl">
        Forum        </a>
        </td>
      <td class='w2'>        <a href="/mailman/listinfo/td-runtimes_and_web-dev" class="icon mailinglist">
        Mailing List        </a>
        </td>
      <td class="w3">        <a href="/wiki/index.php/Web_UIs_Package" class="icon wikiurl">
        Wiki        </a>
        </td>
    </tr>
        <tr>
      <td class="w1"><a href="/main/source/packages/wirelessacc">
        Wireless Access        </a></td>
      <td class="w1">Ville Levä</td>
      <td class="w1">Data Communications</td>
      <td class="w2"><span class="status functional">FUNCTIONAL</span></td>
      <td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td>      <td class="w3">        <a href="/forum/forumdisplay.php?f=32" class="icon forumurl">
        Forum        </a>
        </td>
      <td class='w2'>        <a href="/mailman/listinfo/wirelessacc-dev" class="icon mailinglist">
        Mailing List        </a>
        </td>
      <td class="w3">        <a href="/wiki/index.php/Wireless_Access_package" class="icon wikiurl">
        Wiki        </a>
        </td>
    </tr>
        <tr>
      <td class="w1"><a href="/main/source/packages/wlan">
        WLAN        </a></td>
      <td class="w1">Arto Suomi</td>
      <td class="w1">Data Communications</td>
      <td class="w2"><span class="status functional">FUNCTIONAL</span></td>
      <td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td>      <td class="w3">        <a href="/forum/forumdisplay.php?f=32" class="icon forumurl">
        Forum        </a>
        </td>
      <td class='w2'>        <a href="/mailman/listinfo/wlan-dev" class="icon mailinglist">
        Mailing List        </a>
        </td>
      <td class="w3">        <a href="/wiki/index.php/WLAN_Package" class="icon wikiurl">
        Wiki        </a>
        </td>
    </tr>
        <tr>
      <td class="w1"><a href="/main/source/packages/xmlsrv">
        XML Services        </a></td>
      <td class="w1">Rashmi Kumar</td>
      <td class="w1">Runtimes</td>
      <td class="w2"><span class="status functional">FUNCTIONAL</span></td>
      <td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'><img src='/img/packages/tick.gif'></td><td class='w3'>&nbsp;</td><td class='w3'>&nbsp;</td>      <td class="w3">        <a href="/forum/forumdisplay.php?f=40" class="icon forumurl">
        Forum        </a>
        </td>
      <td class='w2'>        <a href="/mailman/listinfo/td-runtimes_and_web-dev" class="icon mailinglist">
        Mailing List        </a>
        </td>
      <td class="w3">        <a href="/wiki/index.php/XML_Services_Package" class="icon wikiurl">
        Wiki        </a>
        </td>
    </tr>
      </tbody>
</table>
      </div>
      <br />
      <br />
    </div>
    <p style="float:left;"><a href="#subheader" class="more_info">Back to top</a></p>
   
    <!--END of package content-->
    <div class="clear"></div>
    <br />
  </div>
  <!--END of page content-->
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
<!--googleon: all--><!--END of footer-->
<script type="text/javascript">
//<![CDATA[
/* Replacement calls. Please see documentation for more information. */
if(typeof sIFR == "function"){

	sIFR.replaceElement(named({sSelector:"#subheader h2.blockhead_up", sFlashSrc:"/img/blockhead-unplugged.swf", sColor:"#000000", sLinkColor:"#000000", sBgColor:"#ffffff", sHoverColor:"#CCCCCC", nPaddingTop:5, nPaddingBottom:5, sFlashVars:"textalign=left&w=600&h=15", sWmode:"transparent"}));

};
//]]>
</script>
</body>
</html>
