<?php
/**
 * @version		$Id: error.php 17282 2010-05-26 15:24:49Z infograf768 $
 * @package		Joomla.Site
 * @copyright	Copyright (C) 2005 - 2011 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */
defined( '_JEXEC' ) or die( 'Restricted access' );
?>
<!DOCTYPE html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="language" content="<?php echo $this->language; ?>" />
<title><?php echo $this->error->getCode(); ?>-<?php echo $this->title; ?></title>
<?php if ($this->error->getCode()>=400 && $this->error->getCode() < 500) { 	?>
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/base.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/layout.css" type="text/css" media="screen" />
</head>

<body class="contentpane">
<div class="headerlogo"> <a href="<?php echo $this->baseurl ?>" id="logo"> <IMG src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/logo.png" alt="joomskeleton"> </a></div>

<!-- *****    Error Message Begins   ******** -->
<div class="row" style="margin-left:10px">
	<h2>Sorry, this page does not exist.</h2>
	<h4><a href="index.php">Please click here,</a> to go back to the main page.</h4>
	<h2>Entschuldigung, diese Seite existiert leider nicht.</h2>
	<h4><a href="index.php">Klicken Sie bitte hier,</a> um zur Startseite zu gelangen.</h4>
</div>
<!-- ********  Error Message Ends  ********** -->

</body>
</html>
<?php } ?>