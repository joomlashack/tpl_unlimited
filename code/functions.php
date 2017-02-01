<?php
/**
 * @package     Unlimited
 * @subpackage  Functions
 *
 * @copyright   Copyright (C) 2005 - 2016 Joomlashack. Meritage Assets.
 *              All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

// Restrict Access to within Joomla
defined('_JEXEC') or die('Restricted access');

JLoader::import('joomla.environment.browser');

// Toolbar Displayed
$unlimitedToolbarDisplayed = $this->params->get('unlimited_toolbar_displayed', 'navbar-fixed-top');