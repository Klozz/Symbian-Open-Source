<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="imagetoolbar" content="no" />
<title>Symbian developer community - application reference</title>
<meta name="description" content="Applicaion reference" />
<meta name="keywords" content="Symbian, S60, C++, library, developer, application" />
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
		$('div.type:last-child').addClass('last');
		highlightMenu("m_item4");
		$("#colcontainer").equalHeights(true);
		$("#topcolcontainer").equalHeights(true);

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

	<div class="clear">&#160;</div>
  </div>
 <!--googleon: all-->
	
	<!--END of header-->
	<!--START of portal nav-->
		<!--END of portal nav-->

	<!--START of -->
	
	<div id="subheader">
		<div class="left">
			<div class="breadcrumbs"><a href="/">Home</a> &gt; &nbsp;<a href='/main/documentation/'>Documentation</a>&nbsp;>&nbsp;Application reference</div>
			<h2 class="cssImg documentation_headline"><span class="img_t_application_reference">Application reference</span></h2>
		</div>

						<div id="pageFunction" class="right">
					<a href="javascript:print();" title="Print this page"><img src="/img/icon_print.gif" width="27" height="28" alt="Print" /></a>
					<a href="/main/emailfriend.php?url=http%3A%2F%2Fdeveloper.symbian.org%2Fmain%2Fdocumentation%2Fcarbide%2Findex.php&amp;TB_iframe=true&amp;height=85%&amp;width=650" class="thickbox" title="Email a friend">
						<img src="/img/icon_email.gif" width="27" height="28" alt="Email "/>
					</a>
					
				</div> 
				
				<div id="pageFunctionClear" class="clear"></div>				
	</div> <div id="contentContainer">
	
	<iframe id="carbidehelp" style="margin-bottom:15px;border:1px solid #8B8B8B;" frameborder="1" width="978" height="1050" src="http://carbidehelp.nokia.com/help/index.jsp?topic=/S60_5th_Edition_Cpp_Developers_Library/GUID-07F7CEA3-DC49-40E1-B313-5AAC1A5A3F8D_cover.html"></iframe>
	  
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
<!--googleon: all-->	<!--END of footer-->

</body>
</html>