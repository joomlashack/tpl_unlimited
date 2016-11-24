<?php
/**
 * @package     Unlimited
 * @subpackage  Template File
 *
 * @copyright   Copyright (C) 2005 - 2016 Joomlashack. Meritage Assets.
 *              All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 *
 * Do not edit this file directly. You can copy it and create a new file called
 * 'custom.php' in the same folder, and it will override this file. That way
 * if you update the template ever, your changes will not be lost.
 */
// no direct access
defined('_JEXEC') or die('Restricted access');

?>
<doctype>
<html>
    <head>
        <w:head />
        <link href='//fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700' rel='stylesheet' type='text/css'>
        <?php if($bg != -1 && !$this->countModules('slider')): ?>
        <style>
            .header-bg{
                background-image: url(<?php echo JURI::root(true) . $bg ?>);
            }
            .header-filter{
                background-image: url(<?php echo JURI::root(true) . '/templates/js_unlimited/images/filter-bg.png' ?>);
            }
        </style>
        <?php endif; ?>
    </head>
    <body class="<?php echo $responsive . $blogClass ?>">

        <header id="header" class="<?php echo $headerBg?> js-header">
            <?php if($bg != -1 && !$this->countModules('slider')): ?>
            <div class="header-bg-content z1">
                <div class="full-width header-filter"></div>
                <div class="full-width full-height header-bg"></div>
            </div>
            <?php endif; ?>
            <?php if (!$toolbarDisplayed) : ?>
            <div class="fixed fixed-top full-width z4">
                <div class="<?php echo $wrightContainerClass ?> visible-desktop">
                    <a class="toolbar-switch" >
                        <i class="icon-angle-down"></i>
                    </a>
                </div>
            </div>
            <?php endif; ?>
            <?php if ($this->countModules('toolbar')) : ?>
            <div class="wrappToolbar<?php echo ' border-toolbar-' . $wrightContainerClass .
            ($toolbarDisplayed ? '' : ' collapsedToolbar'); ?>">
                <w:nav containerClass="toolbar-container<?php echo ($toolbarDisplayed ? '' : ' collapsedToolbarInner'); ?>" rowClass="<?php echo $wrightGridMode;?>" wrapClass="navbar-fixed-top navbar-inverse" type="toolbar" name="toolbar" />
            </div>
            <?php endif; ?>
            <div class="<?php echo $wrightContainerClass ?> logo-menu <?php echo ($this->countModules('slider')) ? ' absolute absolute-left absolute-right' : ' relative' ; ?> z3">
                <div class="<?php echo $wrightGridMode; ?> logo-menu-inner">
                    <w:logo name="menu" />
                </div>
                <div class="header-content">
                    <?php if ($this->countModules('featured')) : ?>
                    <div id="featured">
                        <w:module type="none" name="featured" />
                    </div>
                    <?php endif; ?>
                    <?php if ($showItemActive) : ?>
                    <h1><?php echo $menu_itemActive; ?></h1>
                    <?php endif; ?>
                </div>
            </div>
            <?php if ($this->countModules('slider')) : ?>
            <div id="slider-position" class="js-slider relative z1">
                <w:module type="none" name="slider" />
            </div>
            <?php endif; ?>
        </header>

        <?php if ($this->countModules('grid-top')) : ?>
        <div id="grid-top"
        class="<?php echo $wrightContainerClass ?> container-flexbox unlimited-grid">
            <w:module type="<?php echo $wrightGridMode; ?>" name="grid-top" />
        </div>
        <?php endif; ?>

        <?php if ($this->countModules('grid-top2')) : ?>
        <div id="grid-top2"
        class="<?php echo $wrightContainerClass ?> container-padding unlimited-grid">
            <w:module type="<?php echo $wrightGridMode; ?>" name="grid-top2" />
        </div>
        <?php endif; ?>

        <?php if ($this->countModules('breadcrumbs')) : ?>
        <div id="breadcrumbs" class="<?php echo $wrightContainerClass ?>">
            <w:module type="single" name="breadcrumbs" chrome="none" />
        </div>
        <?php endif; ?>

        <div class="<?php echo $wrightContainerClass . $addBorder?> container-flexbox unlimited-grid main-wrapp">
            <div id="main-content" class="<?php echo $wrightGridMode; ?>">
                <!-- sidebar1 -->
                <aside id="sidebar1">
                    <w:module name="sidebar1" />
                </aside>
                <!-- main -->
                <section id="main">
                    <?php if ($this->countModules('above-content')) : ?>
                    <!-- above-content -->
                    <div id="above-content">
                        <w:module type="none" name="above-content" />
                    </div>
                    <?php endif; ?>
                	<!-- component -->
                	<w:content />
                    <?php if ($this->countModules('below-content')) : ?>
                    <div id="below-content">
                        <w:module type="none" name="below-content" />
                    </div>
                    <?php endif; ?>
                </section>
                <!-- sidebar2 -->
                <aside id="sidebar2">
                	<w:module name="sidebar2" />
                </aside>
            </div>
        </div>

        <?php if ($this->countModules('grid-bottom')) : ?>
        <div id="grid-bottom"
        class="<?php echo $wrightContainerClass; ?> container-full unlimited-grid">
            <w:module type="<?php echo $wrightGridMode; ?>" name="grid-bottom" />
        </div>
        <?php endif; ?>

        <?php if ($this->countModules('grid-bottom2')) : ?>
        <div id="grid-bottom2"
        class="<?php echo $wrightContainerClass; ?> container-flexbox unlimited-grid">
        	<w:module type="<?php echo $wrightGridMode; ?>" name="grid-bottom2" />
        </div>
        <?php endif; ?>

        <div class="wrapper-footer">
            <footer id="footer" <?php if ($this->params->get('stickyFooter',1)) : ?>
            class="sticky"<?php endif;?>>
                <?php if ($this->countModules('bottom-menu')) : ?>
                <w:nav containerClass="<?php echo $wrightContainerClass ?>" rowClass="<?php echo $wrightGridMode;?>" name="bottom-menu" />
                <?php endif; ?>
                <div class="<?php echo $wrightContainerClass ?>">
                    <div class="<?php echo $wrightGridMode . ' footer-content' ?>">
                        <?php if ($this->countModules('footer')) : ?>
                        <w:module type="none" name="footer" />
                        <?php endif; ?>
                        <w:footer />
                    </div>
                </div>
            </footer>
        </div>

        <?php
        $browser = JBrowser::getInstance();

        if ($browser->getBrowser() == 'msie')
        {
            $major = $browser->getMajor();

            if ((int)$major <= 9) {
                echo "<script type='text/javascript' src='" . JURI::root()
                .  "templates/" . $this->document->template
                . "/js/jquery.equalheights.js'></script>";
                echo "<script type='text/javascript' src='" . JURI::root()
                .  "templates/" . $this->document->template
                . "/js/fallback.js'></script>";
            }

        }
        ?>
        <?php if(!$toolbarDisplayed): ?>
        <script type='text/javascript' src='<?php echo JURI::root(true) ?>/templates/js_unlimited/js/toolbarDisplayed.js'></script>
        <?php endif; ?>
        <?php if($this->countModules('slider')): ?>
        <script type='text/javascript' src='<?php echo JURI::root(true) ?>/templates/js_unlimited/js/unlimited.js'></script>
        <script type="text/javascript">
            jQuery(document).ready(function($) {
                jQuery(window).load(function(){
                    var num = 12;
                    for(var i = 1; i <= num; i++) {
                          jQuery('.slidermanDescriptionCont').removeClass('span'+i).addClass('container');
                    }
                });
            });
        </script>
        <?php if($this->countModules('grid-top')): ?>
        <script type='text/javascript' src='<?php echo JURI::root(true) ?>/templates/js_unlimited/js/fixedGridTop.js'></script>
        <?php endif; ?>
        <?php endif; ?>
        <script type="text/javascript">
            jQuery(document).ready(function($) {
                if (jQuery('.module').hasClass('img-vertical-align')) {
                    jQuery('.bannergroup').removeClass('img-vertical-align');

                    function bannerAlign(){
                        jQuery('.img-vertical-align').each(function (i) {
                            var content_height = jQuery(this).height();
                            var banner_item = jQuery(this).children('.bannergroup');
                            var banner_item_height = banner_item.height();
                            var banner_item_space = (content_height - banner_item_height) / 2;

                            banner_item.css('padding-top', banner_item_space + 'px');
                        });
                    }

                    jQuery(window).load(function(){
                        bannerAlign();
                    });
                    jQuery(window).resize(function(){
                        bannerAlign();
                    });
                }
            });
        </script>
    </body>
</html>
