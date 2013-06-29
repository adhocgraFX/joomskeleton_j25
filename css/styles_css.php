<?php

/**
 * @copyright	© 2011 adhocgraFX Johannes Hock 2011 - All Rights Reserved.
 * @copyright	JomSkeleton responsive template ©
 * @license		GNU/GPL
**/

	header('Content-type: text/css');
	// get params
	$headlineColor = $this->params->get('headcolor');
	$fontColor = $this->params->get('fontcolor');
	$bodyColor = $this->params->get('bodycolor');
	$linkColor = $this->params->get('linkcolor');
	$hoverColor = $this->params->get('hovercolor');
	$bodybackground = $this->params->get('bodybackground');
	$tabbackground = $this->params->get('tabcolor');
	$tabtext = $this->params->get('tabtextcolor');
	$modulor = $this->params->get('modulor');
	$fontmobile = $this->params->get('fontmobile');
	$headfont = $this->params->get('headfont');
	$bodyfont = $this->params->get('bodyfont');
?>

<?php if ($headfont != "default"): ?>
    <script src="http://use.edgefonts.net/<?php echo htmlspecialchars($headfont); ?>.js"></script>
<?php endif;?>
<?php if ($bodyfont != "default"): ?>
    <script src="http://use.edgefonts.net/<?php echo htmlspecialchars($bodyfont); ?>.js"></script>
<?php endif;?>

<style type="text/css">
h1, h2, h3, h4, h5, h6, .module.m_style .module-title, .module-title, h4.js_heading, p.lead, p.dropcap2:first-letter, p.dropcap3:first-letter, blockquote {
 color: #<?php echo $headlineColor;?>;
}
<?php if ($headfont != "default"):?>
h1, h2, h3, h4, h5, h6 {
 font-family: <?php echo htmlspecialchars($headfont);?>, 'OpenSansCond', Helvetica, Arial, sans-serif;
}
 <?php endif;?>

body {
 color: #<?php echo $fontColor;?>;

<?php if ($bodyfont != "default"): ?>
    font-family: <?php echo htmlspecialchars($bodyfont);?>, 'PTSans', Helvetica, Arial, sans-serif;
<?php endif; ?>

<?php if ($bodybackground): ?>  background: url(<?php echo $this->baseurl ?>/<?php echo htmlspecialchars($bodybackground);
?>) center top no-repeat fixed;
 <?php else : ?>  background: #<?php echo $bodyColor;
?>;
 <?php endif;
?>
}
<?php if ($modulor == 1):?>	/*	Modulor de Le Corbusier	*/
 h1 {
font-size: 3.42308em; /* 55px  */
}
h2 {
	font-size: 2.61538em; /* 42px  */
}
h3 {
	font-size: 2.11538em; /* 34px  */
}
h4 {
	font-size: 1.61538em; /* 26px  */
}
h5 {
	font-size: 1.30769em; /* 21px  */
}
h6 {
	font-size: 1em; 	  /* 16px  */
}
 <?php endif;
?> <?php if ($fontmobile == 1):?>	/*	small mobile fonts	*/
	/*  - hier: bei body = 87.5% = 14px for paragraph - lazy font scaling - */
	/*  -	sehr flache Schrift-Skalierung - nur für mobile Ansichten geeignet - */
	html#range_0 h1, html#range_1 h1 {
font-size: 2.0em; /*  28px */
}
html#range_0 h2, html#range_1 h2 {
	font-size: 1.71429em; /*  24px */
}
html#range_0 h3, html#range_1 h3 {
	font-size: 1.5em; /*  21px */
}
html#range_0 h4, html#range_1 h4 {
	font-size: 1.28571em; /*  18px */
}
html#range_0 h5, html#range_1 h5 {
	font-size: 1.14286em; /*  16px */
}
html#range_0 h6, html#range_1 h6 {
	font-size: 1.0em;    /*  14px */
}
<?php endif;
?> #main-pad.container_12 {
 background: #<?php echo $bodyColor;
?>;
 <?php if ($bodybackground): ?>  -webkit-box-shadow: 2px 2px 5px rgba(0,0,0,.5);
 -moz-box-shadow: 2px 2px 5px rgba(0,0,0,.5);
 box-shadow: 2px 2px 5px rgba(0,0,0,.5);
 <?php endif;
?>
}
<?php if ($bodybackground): ?>  #wrapper, #main-pad {
background: transparent;
}
html#range_0 #wrapper, html#range_0 #main-pad {
background: #<?php echo $bodyColor;
?>;
}
<?php else : ?>  #wrapper, #main-pad {
background: #<?php echo $bodyColor;
?>;
}
<?php endif;
?>  .tabcontent, ul.tabs li a.linkopen, ul.tabs li a.linkopen:link, ul.tabs li a.linkopen:visited, div.current, dl.tabs dt.open, .panel .pane-down .blog, .blog-featured, item-page {
 background: #<?php echo $tabbackground;
?>;
}
div.current, .tabopen {
 color: #<?php echo $tabtext;
?>;
}
a, a:visited {
 color: #<?php echo $linkColor;
?>;
}
a:hover, a:focus {
 color: #<?php echo $hoverColor;
?>;
}
</style>
<!--[if lt IE 8 ]> 
	<style type="text/css"> 
		h4.js_heading a { float: none !important;}
		ul.tabs li { height: 45px !important;}
		dl.tabs { height: 35px !important;}
		#nav li a, #nav-bottom li a, .module.m_style a {background: rgb(204,204,204);} 
		#nav2 li a:hover, #nav li a:hover, #nav li:hover a, #nav li.active a, #nav-bottom li a:hover, #nav-bottom li:hover a, #nav-bottom li.active a, .module.m_style a:hover {background: rgb(99,101,114);}
		#nav ul li:hover ul li a:hover, #nav ul li:hover ul li.active a, #nav ul li ul li.active a, #nav-bottom ul li:hover ul li a:hover, #nav-bottom ul li:hover ul li.active a, #nav-bottom ul li ul li.active a, .module.m_style a:focus, .module.m_style a:active, .module.m_style li.active a {background: rgb(50,52,59);}
		._light .module-title, .moduletable_js._light h4.js_heading {background: rgb(204,204,204);}
		._shadow .module-title, .moduletable_js._shadow h4.js_heading {background: rgb(14,14,14);}
		._blueshadow .module-title, .moduletable_js._blueshadow h4.js_heading {background: rgb(99,101,114);}
		._darkblue .module-title, .moduletable_js._darkblue h4.js_heading {background: rgb(50,52,59);}
		.static, ._sand .module-title, .moduletable_js._sand h4.js_heading {background: rgb(235,230,210);}
	</style> 
<![endif]-->

<!--[if gte IE 9]>
  	<style type="text/css"> 
    		html#range_0 #top-pad .static, #top-pad .static, .static, a.button, button, input[type="submit"], input[type="reset"], input[type="button"], a.modal-button, .button2-left .blank a, 		.button2-left a, .button2-left div.readmore a, a.button:hover, button:hover, input[type="submit"]:hover, input[type="reset"]:hover, input[type="button"]:hover, a.modal-button a:hover, .button2-left .blank a:hover, .button2-left a:hover, .button2-left div.readmore a:hover, a.button:active, button:active, input[type="submit"]:active, input[type="reset"]:active, input[type="button"]:active, a.modal-button a:active, .button2-left .blank a:active, .button2-left a:active, .button2-left div.readmore a:active, input.button_search[type="image"], input.button_search[type="image"]:hover, input.button_search[type="image"]:active, #nav li a, #nav-bottom li a, ul.tabs li a.linkclosed, ._light .module-title, .moduletable_js._light h4.js_heading, .module.m_style a, #nav li a:hover, #nav li:hover a, #nav li.active a, #nav-bottom li a:hover, #nav-bottom li:hover a, #nav-bottom li.active a, ._blueshadow .module-title, .moduletable_js._blueshadow h4.js_heading, .module.m_style a:hover, #nav ul li:hover ul li a:hover, #nav ul li:hover ul li.active a, #nav ul li ul li.active a, #nav-bottom ul li:hover ul li a:hover, #nav-bottom ul li:hover ul li.active a, #nav-bottom ul li ul li.active a, ._darkblue .module-title, .moduletable_js._darkblue h4.js_heading, .module.m_style a:focus, .module.m_style a:active, .module.m_style li.active a, ._shadow .module-title, .moduletable_js._shadow h4.js_heading, ._sand .module-title, .moduletable_js._sand h4.js_heading, #nav2 ul, #nav2 li a:hover, #nav2 ul li:hover ul li a:hover, #nav2 ul li:hover ul li.active a, #nav2 ul li ul li.active a, #breadcrumbs-pad, .breadcrumbs li a:hover, .breadcrumbs li a:focus, .breadcrumbs li a:active, .breadcrumbs li li.active a, .panel .pane-toggler a, .pane-toggler a:hover, .pane-toggler a:focus, .pane-toggler-down a:hover, .pane-toggler-down a:focus, .panel .pane-toggler-down a, .bordertable thead th,  .footable > thead > tr > th, .footable > thead > tr > td, #nav ul, #nav li a:hover  { filter: none; }
 	</style> 
<![endif]-->

<!--[if lt IE 9 ]> 
	<style type="text/css"> 
		.no-flexbox {}
		.no-canvas {} 
		.no-canvastext {} 
		.no-websqldatabase {} 
		.no-indexeddb {} 
		.no-history {} 
		.no-websockets {} 
		.no-rgba {}
		.no-hsla {}
		.no-multiplebgs {}
		.no-backgroundsize {}
		.no-borderimage {}
		.no-borderradius {}
		.no-boxshadow {}
		.no-textshadow {}
		.no-opacity {}
		.no-cssanimations {}
		.no-csscolumns {}
		.no-cssgradients {}
		.no-cssreflections {}
		.no-csstransforms {}
		.no-csstransforms3d {}
		.no-csstransitions {}
		.no-video {} 
		.no-audio {} 
		.no-webworkers {} 
		.no-applicationcache {}
		
		.breadcrumbs li {	padding: 5px 0px; }
		.breadcrumbs li a { padding: 5px 10px; }
		.breadcrumbs li:first-child {	padding: 10px; }
		.breadcrumbs li:last-child { padding: 10px; }
	</style> 
<![endif]-->

<!--[if lt IE 8 ]> 
	<style type="text/css"> 
		.no-hashchange {} 
		.no-generatedcontent {} 
	</style> 
<![endif]-->
