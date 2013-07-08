<?php 
/*------------------------------------------------------------------------
# JoomFlex j2.5
# author    Johannes Hock | adhocgraFX
# copyright Copyright © 2012 Johannes Hock. All rights reserved.
# @license  http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
# Website   http://www.adhocgrafx.de
-------------------------------------------------------------------------*/

// initialize ob_gzhandler to send and compress data
ob_start ("ob_gzhandler");
// initialize compress function for whitespace removal
ob_start("compress");
// required header info and character set
header("Content-type: application/x-javascript");
// cache control to process
header("Cache-Control: must-revalidate");
// duration of cached content (1 hour)
$offset = 60 * 60 ;
// expiration header format
$ExpStr = "Expires: " . gmdate("D, d M Y H:i:s",time() + $offset) . " GMT";
// send cache expiration header to broswer
header($ExpStr);

require('../../../media/system/js/mootools-core.js');
require('../../../media/system/js/mootools-more.js');
require('../../../media/system/js/core.js');
require('../../../media/system/js/caption.js');

require('hide.js');
require('jquery-1.7.2.min.js');
require('off-canvas.js');
require('footable-0.1.js');
require('jquery.smooth-scroll.js');

require('responsiveslides.min.js');
require('jquery.syncheight.js');
require('jquery.cookie.js');
require('jquery.textresizer.js');
?>