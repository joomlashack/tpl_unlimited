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
    <header id="header" class="<?php echo $headerBg?> js-header m-b-0">
        <?php if($bg != -1 && !$this->countModules('slider')): ?>
        <?php endif; ?>
        <?php if ($this->countModules('toolbar')) : ?>
            <div class="wrapp-toolbar<?php echo ' border-toolbar-' . $wrightContainerClass .
                ($toolbarDisplayed ? '' : ' collapsedToolbar'); ?>">
                <w:nav containerClass="toolbar-container" rowClass="<?php echo $wrightGridMode;?>" wrapClass="navbar-fixed-top navbar-inverse" type="toolbar" name="toolbar" />
            </div>
        <?php endif; ?>
        <div class="<?php echo $wrightContainerClass ?> wrapp-logo-menu">
            <div class="<?php echo $wrightGridMode; ?> p-b-3 p-t-3 flex-md">
                <w:logo name="menu" />
            </div>
            <?php
            if ($this->countModules('top')) :
                ?>
                <w:module type="<?php echo $wrightGridMode; ?>" name="top" chrome="wrightflexgrid" />
            <?php
            endif;
            ?>
            <div class="header-content p-l-2 p-r-2">
                <?php if ($this->countModules('featured')) : ?>
                    <w:module type="none" name="featured" />
                <?php endif; ?>
            </div>
        </div>
        <?php if ($this->countModules('breadcrumbs')) : ?>
            <div class="p-t-2 p-b-2 bg-color-one breadcrumbs-content">
                <div id="breadcrumbs" class="<?php echo $wrightContainerClass ?>">
                    <w:module type="single" name="breadcrumbs" chrome="none" />
                </div>
            </div>
        <?php endif; ?>
        <?php if ($this->countModules('slider')) : ?>
            <div id="slider-position" class="js-slider relative z1">
                <w:module type="none" name="slider" />
            </div>
        <?php endif; ?>
    </header>

    <?php if ($this->countModules('grid-top')) : ?>
        <div class="p-t-3 p-b-6">
            <div id="grid-top" class="<?php echo $wrightContainerClass ?> m-b-0">
                <w:module type="<?php echo $wrightGridMode; ?>" name="grid-top" chrome="wrightflexgrid" />
            </div>
        </div>
    <?php endif; ?>

    <?php if ($this->countModules('grid-top2')) : ?>
        <div class="p-t-6 p-b-6 bg-color-one">
            <div id="grid-top2" class="<?php echo $wrightContainerClass ?> m-b-0">
                <w:module type="<?php echo $wrightGridMode; ?>" name="grid-top2" chrome="wrightflexgrid" />
            </div>
        </div>
    <?php endif; ?>

    <div class="<?php echo $wrightContainerClass . $addBorder?> unlimited-grid main-wrapp <?php echo ($this->countModules('grid-top2')) ? 'p-t-6' : ' ' ; ?> p-b-6">
        <div id="main-content" class="<?php echo $wrightGridMode; ?> m-b-0">
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
                    <div id="below-content" class="m-t-3">
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
        <div class="p-b-6">
            <div id="grid-bottom"
                 class="<?php echo $wrightContainerClass; ?> container-full m-b-0">
                <w:module type="<?php echo $wrightGridMode; ?>" name="grid-bottom" chrome="wrightflexgrid" />
            </div>
        </div>
    <?php endif; ?>
    <?php if ($this->countModules('grid-bottom2')) : ?>
        <div class="p-t-6 p-b-6 relative bg-color-gray">
            <div class="bg-transform absolute hidden-phone">
            </div>
            <div id="grid-bottom2"
                 class="<?php echo $wrightContainerClass; ?> m-b-0">
                <w:module type="<?php echo $wrightGridMode; ?>" name="grid-bottom2" chrome="wrightflexgrid" />
            </div>
        </div>
    <?php endif; ?>
    <div class="wrapper-footer">
        <footer id="footer" class="<?php if ($this->params->get('stickyFooter',1)) : ?>
            sticky<?php endif;?> bg-color-gray">
            <?php if ($this->countModules('bottom-menu')) : ?>
                <w:nav containerClass="<?php echo $wrightContainerClass ?>" rowClass="<?php echo $wrightGridMode;?>" wrapClass="navbar-transparent navbar-center" name="bottom-menu" type="menu" />
            <?php endif; ?>
            <div class="<?php echo $wrightContainerClass ?>">
                <div class="<?php echo $wrightGridMode . ' footer-content p-t-3 p-b-3' ?>">
                    <?php if ($this->countModules('footer')) : ?>
                        <w:module type="none" name="footer" chrome="wrightflexgrid" />
                    <?php endif; ?>
                </div>
                <w:footer />
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

    <?php if ($this->countModules('grid-bottom2')) : ?>
        <script type='text/javascript' src='<?php echo JURI::root(true) ?>/templates/js_unlimited/js/triangle.js'></script>
    <?php endif; ?>
    <?php if($this->countModules('slider')): ?>
        <script type='text/javascript' src='<?php echo JURI::root(true) ?>/templates/js_unlimited/js/unlimited.js'></script>
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
