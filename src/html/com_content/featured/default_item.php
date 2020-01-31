<?php
/**
 * @package     Unlimited
 * @subpackage  Overrider
 *
 * @copyright   Copyright (C) 2005 - 2020 Joomlashack. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
// No direct access.
defined('_JEXEC') or die;

$app = JFactory::getApplication();
require_once JPATH_THEMES . '/' . $app->getTemplate() . '/wright/html/overrider.php';

include_once(JPATH_THEMES . '/' . $app->getTemplate() . '/wright/html/joomla_3.0/com_content/com_content.helper.php');

$params     = &$this->item->params;
$images     = json_decode($this->item->images);
$imgfloat   = (empty($images->float_intro)) ? 'none' : $images->float_intro;

if(isset($images->image_intro) && !empty($images->image_intro)) {

    $this->item->wrightElementsStructure = Array(
        "div.article-content-wrapper",
        "div.article-content-" . htmlspecialchars($imgfloat),
        "div.article-content-inner",
        "title",
        "icons",
        "article-info",
        "legendtop",
        "content",
        "legendbottom",
        "article-info-bottom",
        "article-info-split",
        "/div",
        "/div",
        "image",
        "/div"
    );
}
else
{

    $this->item->wrightElementsStructure = Array(
        "div.article-content-wrapper-noimage",
        "div.article-content-" . htmlspecialchars($imgfloat),
        "div.article-content-inner",
        "title",
        "icons",
        "article-info",
        "legendtop",
        "content",
        "legendbottom",
        "article-info-bottom",
        "article-info-split",
        "/div",
        "/div",
        "/div"
    );
}

include Overrider::getOverride('com_content.featured', 'default_item');