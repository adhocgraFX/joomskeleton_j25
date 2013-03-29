<?php
/**
 * @copyright	Copyright (C) 2005 - 2008 Open Source Matters. All rights reserved.
 * @license		GNU/GPL, see LICENSE.php
 * Joomla! is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 * See COPYRIGHT.php for copyright notices and details.
 */

// no direct access
defined('_JEXEC') or die;
// get my params
$logo = $this->params->get('logo');
$sitetitle = $this->params->get('sitetitle');
?>
<?php if (JRequest::getString('type')=='raw'):?>
<jdoc:include type="component" />
<?php else: ?>

<!DOCTYPE html>
<head>
<jdoc:include type="head" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/base.css" type="text/css" media="screen, print" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/layout.css" type="text/css" media="screen, print" /> 
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/print.css" type="text/css" media="print" />
<script src="http://use.edgefonts.net/source-sans-pro.js"></script>
<script src="http://use.edgefonts.net/bitter.js"></script>
</head>
<body class="contentpane">
<?php if ($logo): ?>
	<div class="headerlogo"> <a href="<?php echo $this->baseurl ?>" id="logo" > <img src="<?php echo $this->baseurl ?>/<?php echo htmlspecialchars($logo); ?>"  alt="<?php echo htmlspecialchars($sitetitle); ?>" /> </a> </div>
<?php else : ?>
	<div class="headerlogo"> <a href="<?php echo $this->baseurl ?>" id="logo" > <IMG src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/logo.png" alt="JoomSkeleton 2.5" /> </a> </div>
<?php endif;?>
<jdoc:include type="message" />
<jdoc:include type="component" />
<div id="copy-pad"><p>JoomSkeleton 2.5 | adhocgraFX 2011 | &copy; alle Rechte vorbehalten</p></div>
</body>
</html>
<?php endif; ?>
