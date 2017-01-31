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

$responsivePage = $this->params->get('responsive','1');
$responsive = ' responsive';
if ($responsivePage == 0) {
    $responsive = ' no-responsive';
}

// Add class for blog/featured view

$blog =
(JRequest::getVar('layout','') == 'blog' ? JRequest::getVar('layout','') : '');
$blogFtOption =
(JRequest::getVar('option','') == 'com_content' ?
JRequest::getVar('option','') : '');
$blogFt = false;
$viewFt = '';

if ($blogFtOption == "com_content"){
    $viewFt =
    (JRequest::getVar('view','') == 'featured' ? JRequest::getVar('view','') : '');
    if($viewFt == 'featured'){
        $blogFt = true;
    }
}

$blogs = false;
if ($blog == 'blog' || $blogFt){
    $blogs = true;
}

$blogClass = '';
if ($blogs){
    $blogClass = ' viewBlog';
}

// Item Active

$JoomlaApp = JFactory::getApplication();
$menu_itemActive = $JoomlaApp->getMenu()->getActive()->title;

// No Slider no Featured

$showItemActive = false;
$pageTitle =
($this->params->get('unlimited_page_title','1') == '1' ? true : false);

if (!$this->countModules('slider') && !$this->countModules('featured'))
    $showItemActive = ($pageTitle) ? true : false ;

// Toolbar Displayed
$unlimitedToolbarDisplayed = $this->params->get('unlimited_toolbar_displayed', 'navbar-fixed-top');

// Border in Main Content

$addBorder = '';
if ($this->countModules('bottom-menu')) {
    $addBorder = ' no-bordered-bottom';
    if ($this->countModules('grid-bottom') || $this->countModules('grid-bottom2'))
        $addBorder = '';
}
// Page Title
