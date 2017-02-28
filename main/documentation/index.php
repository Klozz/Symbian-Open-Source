<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="imagetoolbar" content="no" />
<title>Symbian developer community - documentation</title>
<meta name="description" content="Documentation for Symbian developers" />
<meta name="keywords" content="Symbian, developer, documentation, articles, help" />
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

<link href="/css/ui.tabs.css" rel="stylesheet" type="text/css" />

<script type="text/javascript">
	$(document).ready(function(){
		$('div.type:last-child').addClass('last');
		highlightMenu("m_item4");
		$("#colcontainer").equalHeights(true);
		$("#topcolcontainer").equalHeights(true);
		
		loadWikiContent('all');	
			
	});

var moveOnce = 0;
	var loadingHTML = '<div id="loading" style="width:200px;margin-left: auto; margin-right: auto; text-align: center;"><br /><br /><h2>Loading...</h2><br /><img src="/img/loadingAnimation.gif" /></div>';	
	function loadWikiContent(catV){
		$('#wikiContent').prepend(loadingHTML);		
		$.get("get.php", { cat: catV, list: 'a%3A7%3A%7Bi%3A0%3Bs%3A11%3A%22Quick_Start%22%3Bi%3A1%3Bs%3A3%3A%22FAQ%22%3Bi%3A2%3Bs%3A8%3A%22Tutorial%22%3Bi%3A3%3Bs%3A6%3A%22Recipe%22%3Bi%3A4%3Bs%3A12%3A%22Code_Example%22%3Bi%3A5%3Bs%3A14%3A%22Design_Pattern%22%3Bi%3A6%3Bs%3A7%3A%22Article%22%3B%7D', nocache: new Date().getTime() },
				  function(data){
				    	$('#wikiContent').html(data);

				    	$('div.type:last').addClass('last');

				    	$("a:not([href='#"+catV+"'])").removeClass('selected');
						$("a[href='#"+catV+"']").addClass('selected');

						if( moveOnce == 1){
							$('html, body').animate({
								scrollTop: $("#listStart").offset().top
								}, 1000);
						}else{
							moveOnce = 1;
						}										    	
		});		
		return false;
	}		
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
		highlightMenu('m_item4');			   
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
	
	
	<div id="subheader">
		<div class="left">
			<div class="breadcrumbs"><a href="/">Home</a> &gt; Documentation</div>
			<h2 class="cssImg documentation_headline"><span class="img_t_documentation_headline">Documentation</span></h2>
		</div>

						<div id="pageFunction" class="right">
					<a href="javascript:print();" title="Print this page"><img src="/img/icon_print.gif" width="27" height="28" alt="Print" /></a>
					<a href="/main/emailfriend.php?url=http%3A%2F%2Fdeveloper.symbian.org%2Fmain%2Fdocumentation%2Findex.php&amp;TB_iframe=true&amp;height=85%&amp;width=650" class="thickbox" title="Email a friend">
						<img src="/img/icon_email.gif" width="27" height="28" alt="Email "/>
					</a>
					
				</div> 
				
				<div id="pageFunctionClear" class="clear"></div>				
	</div> 
	<div id="contentContainer">
	
	  <!--START of page content-->
	  <div class="subcontent">
	   <!--Start of option 1 content-->
	  <div id="colcontainer1">
        <div class="left BoxFrame three_col">
		<a href="/main/documentation/reference/"><!--<img src="/img/landing_pages/sf_devimg_15a.gif" alt="Reference library" border="0" class="community_image right" /> --></a>
		<h2 class="cssImg community_header"><span class="img_t_reference_library">Reference library</span></h2>
		<div class="community_copy" style="margin-top:0px">
          		<ul class="bodyList">
				<li><a href="/main/documentation/carbide/index.php" class="more_info">Application developer's library</a></li>
				<li><a href="/main/documentation/reference/s^3/doc_source/" class="more_info">Product developer's library Symbian^3</a></li>
				<li><a href="/main/documentation/reference/s^2/doc_source/" class="more_info">Product developer's library Symbian^2</a></li>
			</ul>
		</div>
	</div>
        <div class="left BoxFrame three_col three_col_center"><a href="wiki/"><img src="/img/landing_pages/sf_devimg_16.gif" alt="Wiki" width="100" height="65" border="0" class="community_image right" /></a>
          <h2 class="cssImg community_header"><a href="/wiki/" id="rollover_wiki"><span>Wiki</span></a></h2>
           <p>Browse, search, and contribute to our comprehensive Wiki.</p>
        </div>
        <div class="right BoxFrame three_col"><a href="/main/documentation/books/index.php">
		<img src="/img/landing_pages/sf_devimg_18a.gif" alt="Books" border="0" class="community_image right" /></a>
        <h2 class="cssImg community_header"><a href="/main/documentation/books/index.php" id="rollover_view_books"><span>View books</span></a></h2>
           <p>A number of books about Symbian are available in print and electronic formats.</p>
        </div>
      </div>
      <div class="clear"></div>
      <div class="colcontainerspacer"></div>
      <!--START of row 2 content-->
      <div id="colcontainer2">
	  
	
		   <div class="left BoxFrame three_col">
          <div class="colBoxTop">
            <h3>Jump to Documentation</h3>
          </div><a class="downlink" href="#contribute_application"><img src="/img/down_arrow.gif" border="0" alt="Down arrow" align="center" class="community_image_jump" /></a>

          <ul class="bulletlist_padded types">
			<li><a href="#" onclick="return loadWikiContent('Quick_Start');">Quick Start</a></li>
<li><a href="#" onclick="return loadWikiContent('FAQ');">FAQ</a></li>
<li><a href="#" onclick="return loadWikiContent('Tutorial');">Tutorial</a></li>
<li><a href="#" onclick="return loadWikiContent('Recipe');">Recipe</a></li>
<li><a href="#" onclick="return loadWikiContent('Code_Example');">Code Example</a></li>
<li><a href="#" onclick="return loadWikiContent('Design_Pattern');">Design Pattern</a></li>
<li><a href="#" onclick="return loadWikiContent('Article');">Article</a></li>
	
          </ul>
          
        </div>
        <div class="left BoxFrame three_col three_col_center">
          <div class="colBoxTop">
            <h3>Key Documents</h3>
          </div>
          <ul class="bulletlist_padded">
           <li><a href="/wiki/index.php/Creating_C%2B%2B_Applications_Quick_Start">C/C++</a></li>
				<li><a href="/wiki/index.php/Java_ME_Quick_Start">Java ME</a></li>
				<li><a href="/wiki/index.php/Python_Quick_Start">Python</a></li>
				<li><a href="/wiki/index.php/Flash_Lite_Quick_Start">Flash Lite</a></li>
				<li><a href="/wiki/index.php/Ruby_Technical_Overview">Ruby</a></li>
				<li><a href="/wiki/index.php/Web_Technologies_Quick_Start">Web technologies</a></li> 
				<li><a href="/wiki/index.php/.NET_Technical_Overview">.NET</a></li>		
          </ul>
        </div>
        <div class="right BoxFrame three_col four_col_center">
          <div class="colBoxTop">
            <h3>Popular Pages</h3>
          </div>
         <ul class="bulletlist_padded">
		        <li><a href="/wiki/index.php/Symbian_Foundation_Technology_Roadmaps">Roadmaps</a></li>
		        <li><a href="/wiki/index.php/Writing_portable_code_and_maintaining_ports">Writing portable code</a></li>
		        <li><a href="/wiki/index.php/Web_Technologies_Quick_Start">Web technologies quick start</a></li>
		        <li><a href="/wiki/index.php/What_are_the_Kits%3F">What are the kits?</a></li>
				<li><a href="/wiki/index.php/Contribution_Process">Contribution process</a></li>
		        <li><a href="/wiki/index.php/Hello_Symbian_World">Hello Symbian World</a></li>
		      </ul>
        </div>
      </div>
      <div class="clear"></div>

      <!--END of option 1 content-->  
  		<div class="clear"></div>
  		<div class="colcontainerspacer" id="listStart"></div>  		
  		<h2 class="cssImg" id="contribute_application"><span class="img_t_documentation_categories">Documentation by Categories</span></h2>
  		<div class="colcontainerspacer"></div>
  		   <div id="tab1" class="mTab">
			
		      <ul class="ui-tabs-nav">
		        <li class="ui-tabs-selected"><a href="/main/documentation/index.php#contribute_application"><span>View by Category</span></a></li>
		        <li><a href="/main/documentation/needs_update/index.php#needs_update"><span>Incomplete articles</span></a></li>				
		      </ul>
			  
		      <div class="clear"></div>
		      <div class="ui-tabs-panel">
		        <div class="types" style="height: 33px;">
		        		<small>
		        			<a href="#all" onclick="return loadWikiContent('all');" class="selected">All</a> 
		        
					        &nbsp;|&nbsp;<a href="#Quick_Start" onclick="return loadWikiContent('Quick_Start');">Quick Start</a>&nbsp;|&nbsp;<a href="#FAQ" onclick="return loadWikiContent('FAQ');">FAQ</a>&nbsp;|&nbsp;<a href="#Tutorial" onclick="return loadWikiContent('Tutorial');">Tutorial</a>&nbsp;|&nbsp;<a href="#Recipe" onclick="return loadWikiContent('Recipe');">Recipe</a>&nbsp;|&nbsp;<a href="#Code_Example" onclick="return loadWikiContent('Code_Example');">Code Example</a>&nbsp;|&nbsp;<a href="#Design_Pattern" onclick="return loadWikiContent('Design_Pattern');">Design Pattern</a>&nbsp;|&nbsp;<a href="#Article" onclick="return loadWikiContent('Article');">Article</a>		        
		        		</small>
		          <div class="clear"></div>
		        </div>
		        
				<div id="wikiContent" style="width: 100%;">
				</div>		        




		      </div>
		    </div>
     <!--END of page content-->
	
	
	</div>
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
