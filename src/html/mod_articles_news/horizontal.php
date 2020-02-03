
<?php
// Wright v.3 Override: Joomla 2.5.16 and 3.2
/**
 * @package		Joomla.Site
 * @subpackage	mod_articles_news
 *
 * @copyright   Copyright (C) 2005 - 2020 Joomlashack. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

// no direct access
defined('_JEXEC') or die;

	$wrightNewsEnableIcons = false;
	$wrightEnableLinkContent = true;
	$wrightImageFirst = true;
	$wrightMaxColumns = 6;

include(Overrider::getOverride('mod_articles_news','horizontal'));
?>
