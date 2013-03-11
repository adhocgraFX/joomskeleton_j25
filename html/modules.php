<?php
/**
 * @version
 * @package		Joomla.Site
 * @subpackage	Templates.beez5
 * @copyright	Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */
// No direct access.
defined('_JEXEC') or die;
/**
 * usefull slider chrome by Gary Gisclair
 * Module chrome that adds slides for modules
 * based on xhtml chrome (if your module is styled with xhtml chrome selected, you won't lose css when you change to this chrome )
 */
function modChrome_standard( $module, $params, $attribs )
{
  // Determines H tag level (ie. h1, h2, h3)
  $headerTag = isset( $attribs['headerLevel'] ) ? $attribs['headerLevel'] : 'h2';
  $width = isset( $attribs['width'] ) ? $attribs['width'] : '';
  // Badge?
  $badge = preg_match( '/badge/', $params->get( 'moduleclass_sfx' ) ) ? '<span class="badge"></span>' : '';
  // Add module class suffix and unique class name
  $moduleClassSfx = '';
    $moduleUniqueClass = ' mod-'. $module->id ;
	  if ( $params->get( 'moduleclass_sfx' ) != NULL )
		{
			$moduleClassSfx = ' ' . $params->get( 'moduleclass_sfx' );
		}
  // Determine if title is on or off and add class
  $showTitle = '';
  $hide = '';
  if ( $module->showtitle == 0 ) :
    $showTitle = ' no-title';
  endif;
    // Output module
    echo '<div class="moduletable module-column' . $moduleUniqueClass . $moduleClassSfx . $showTitle . ' clearfix">' . "\n";
      echo '<div class="module-block">' . "\n";
        echo "\t\t" . '<div class="module-header">' . "\n";
          echo $badge;

          // Creates span around first word of module title for unique styling
          $part_one = explode(' ', $module->title);
          $part_one = $part_one[0];

          if( count( explode( ' ', $module->title ) ) > 1 ) {
              $part_two = substr( $module->title, strpos( $module->title,' ' ) );
          } else {
              $part_two = '';
          }
          echo "\t\t\t\t" . '<' . $headerTag . ' class="module-title"><span>'.$part_one.'</span>'.$part_two.'</' . $headerTag . '>' . "\n";
        echo "\t\t\t" . '</div>' . "\n";
        if ( !empty ( $module->content ) ) :
          echo "\t\t\t" . '<div class="module-content">' . "\n";
            echo "\t\t\t\t" . $module->content . "\n";
            echo "\t\t\t\t" . '<div class="clear"></div>' . "\n";
          echo "\t\t\t" . '</div>' . "\n";
        endif;
      echo "\t\t" . '</div>';
    echo "\t" . '</div>';
}
function modChrome_basic($module, $params, $attribs)
{
    if (!empty ($module->content)){
        echo $module->content;
    }
}
function modChrome_slider($module, &$params, &$attribs)
{
	echo JHtml::_('sliders.start', 'module-slider'.$module->id, array('startOffset' => 0));
	echo JHtml::_('sliders.panel',JText::_( $module->title ), 'moduletable' . $module->id);
//  Initialize variables
	echo $module->content;
	echo JHtml::_('sliders.end');
}
function modChrome_tabs($module, &$params, &$attribs)
{
 jimport('joomla.html.pane');

 $pane = JPane::getInstance('tabs', array('startOffset' => 0));
 if (count($module))
 {
  if (!defined( 'THISMODCHROME' ))
  {
   define( 'THISMODCHROME', 1 );
   echo $pane->startPane('pane');
  }
   echo $pane->startPanel($module->title, 'panel' . $module->id);
   echo $module->content;
   echo $pane->endPanel();
  if (!defined( 'THISMODCHROME' ))
  {
   //echo $pane->startPane('pane');
  }
 }
}
/**
 * joomskeleton and joomfluid chrome
 */
function modChrome_joomskeleton($module, &$params, &$attribs)
{
	$mc_sfx = $params->get('moduleclass_sfx');
	if (!empty ($module->content)) : ?>
	<?php if (strlen(trim($mc_sfx))>0) : ?>
	<div class="module m<?php echo $mc_sfx; ?>">
	<?php else: ?>
	<div class="module">
	<?php endif; ?>
	
		<?php if ($module->showtitle != 0) : ?>
		<h4 class="module-title"><?php echo $module->title; ?></h4>
		<?php endif; ?>
	    <div class="module-body">
	        <?php echo $module->content; ?>
        </div>
	</div>
	<?php endif;    
}
/**
 * beezDivision chrome.
 *
 * @since	1.6
 */
function modChrome_beezDivision($module, &$params, &$attribs)
{
	$headerLevel = isset($attribs['headerLevel']) ? (int) $attribs['headerLevel'] : 3;
	if (!empty ($module->content)) { ?>
<div class="moduletable<?php echo htmlspecialchars($params->get('moduleclass_sfx')); ?>">
<?php if ($module->showtitle) { ?> <h<?php echo $headerLevel; ?>><span
	class="backh"><span class="backh2"><span class="backh3"><?php echo $module->title; ?></span></span></span></h<?php echo $headerLevel; ?>>
<?php }; ?> <?php echo $module->content; ?></div>
<?php };
}
/**
 * beezHide chrome.
 *
 * @since	1.6
 */
function modChrome_beezHide($module, &$params, &$attribs)
{
	$headerLevel = isset($attribs['headerLevel']) ? (int) $attribs['headerLevel'] : 3;
	$state=isset($attribs['state']) ? (int) $attribs['state'] :0;

	if (!empty ($module->content)) { ?>

<div class="moduletable_js <?php echo htmlspecialchars($params->get('moduleclass_sfx'));?>"><?php if ($module->showtitle) : ?>
<h<?php echo $headerLevel; ?> class="js_heading">
<a href="#" title="<?php echo JText::_('TPL_BEEZ5_CLICK'); ?>" onclick="auf('module_<?php echo $module->id; ?>'); return false" class="opencloselink" id="link_<?php echo $module->id?>"><?php echo $module->title; ?><span class="no"><img src="templates/joomskeleton_j25/images/plus.png" alt="<?php if ($state == 1) { echo JText::_('TPL_BEEZ5_ALTOPEN');} else {echo JText::_('TPL_BEEZ5_ALTCLOSE');} ?>" /></span></a>
</h<?php echo $headerLevel; ?>> <?php endif; ?>
<div class="module_content <?php if ($state==1){echo "open";} ?>"
	id="module_<?php echo $module->id; ?>" tabindex="-1"><?php echo $module->content; ?></div>
</div>
	<?php }
}
/**
 * beezTabs chrome.
 *
 * @since	1.6
 */
function modChrome_beezTabs($module, $params, $attribs)
{
	$area = isset($attribs['id']) ? (int) $attribs['id'] :'1';
	$area = 'area-'.$area;

	static $modulecount;
	static $modules;

	if ($modulecount < 1) {
		$modulecount = count(JModuleHelper::getModules($attribs['name']));
		$modules = array();
	}

	if ($modulecount == 1) {
		$temp = new stdClass();
		$temp->content = $module->content;
		$temp->title = $module->title;
		$temp->params = $module->params;
		$temp->id=$module->id;
		$modules[] = $temp;
		// list of moduletitles
		// list of moduletitles
		echo '<div id="'. $area.'" class="tabouter"><ul class="tabs">';

		foreach($modules as $rendermodule) {
			echo '<li class="tab"><a href="#" id="link_'.$rendermodule->id.'" class="linkopen" onclick="tabshow(\'module_'. $rendermodule->id.'\');return false">'.$rendermodule->title.'</a></li>';
		}
		echo '</ul>';
		$counter=0;
		// modulecontent
		foreach($modules as $rendermodule) {
			$counter ++;

			echo '<div tabindex="-1" class="tabcontent tabopen" id="module_'.$rendermodule->id.'">';
			echo $rendermodule->content;
			if ($counter!= count($modules))
			{
			echo '<a href="#" class="unseen" onclick="nexttab(\'module_'. $rendermodule->id.'\');return false;" id="next_'.$rendermodule->id.'">'.JText::_('TPL_BEEZ5_NEXTTAB').'</a>';
			}
			echo '</div>';
		}
		$modulecount--;
		echo '</div>';
	} else {
		$temp = new stdClass();
		$temp->content = $module->content;
		$temp->params = $module->params;
		$temp->title = $module->title;
		$temp->id = $module->id;
		$modules[] = $temp;
		$modulecount--;
	}
}
