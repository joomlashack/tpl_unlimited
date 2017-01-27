<?php
/**
 * @package     Unlimited
 * @subpackage  Overrider
 *
 * @copyright   Copyright (C) 2005 - 2014 Joomlashack. Meritage Assets.  All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access.
defined('_JEXEC') or die;

$app = JFactory::getApplication();

require_once(JPATH_THEMES.'/'.$app->getTemplate().'/html/com_content/com_content.helper.php');
require_once(JPATH_THEMES.'/'.$app->getTemplate().'/wright/html/overrider.php');

if ($this->item->wrightType == 'leading') {
	$this->item->wrightElementsStructure =
		Array(
			"title",
			"div.article-image",
				"image",
			"/div",

			"div.article-content",
				"icons",
				"article-info",
                "legendtop",
				"content",
                "legendbottom",
                "article-info-below",
                "article-info-split",
			"/div"
		);
}

if ($this->item->wrightType == 'intro') {

	$classFloat = 'article-intro';

	if (getIntroImageFloat($this->item) == 'right') {
		$this->item->wrightElementsStructure =
			Array(
				"div." . $classFloat,
					"div.span6",
						"title",
						"icons",
						"article-info",
                        "legendtop",
						"content",
                        "legendbottom",
                        "article-info-below",
                        "article-info-split",
					"/div",

					"div.span6",
						"image",
					"/div"
			);
	}
	else{
		$this->item->wrightElementsStructure =
			Array(

				"div." . $classFloat,
					"div.article-image",
						"image",
					"/div",

					"div.article-content",
						"title",
						"icons",
						"article-info",
                        "legendtop",
						"content",
                        "legendbottom",
                        "article-info-below",
                        "article-info-split",
					"/div",
				"/div"
			);
	}
}

$this->item->wrightLegendTop = '';
$this->item->wrightLegendBottom = '';

include(Overrider::getOverride('com_content.category','blog_item'));
?>
