<?php
/**
 * @package     Unlimited
 * @subpackage  Template File
 *
 * @copyright   Copyright (C) 2005 - 2014 Joomlashack. Meritage Assets.  All rights reserved.
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
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700' rel='stylesheet' type='text/css'>

</head>
<body class="<?php echo $responsive . $blogClass ?>">
    <?php if ($this->countModules('toolbar')) : ?>
    	<w:nav containerClass="<?php echo $containerClass ?>" rowClass="<?php echo $gridMode;?>" wrapClass="navbar-fixed-top navbar-inverse" type="toolbar" name="toolbar" />
    <?php endif; ?>

    <header id="header" class="<?php if ($this->countModules('featured')): ?>logo-menu-absolute<?php endif; ?>">

        <?php if (!$this->countModules('featured')) : ?>
            <div class="header-bg-content">
                <img class="full-width header-filter" src="<?php echo JURI::root(true) . '/templates/js_unlimited/images/filter-bg.png' ?>" />
                <img class="full-widht header-bg" src="<?php echo JURI::root(true) . $bg ?>" />
            </div>
        <?php endif; ?>

        <div class="<?php echo $containerClass ?> logo-menu">
            <div class="<?php echo $gridMode; ?> logo-menu-inner">
                <w:logo name="menu" />
            </div>
        </div>

        <?php if ($this->countModules('featured')) : ?>
            <div id="featured">
                <w:module type="none" name="featured" chrome="xhtml" />
            </div>
        <?php endif; ?>

    </header>

    <?php if ($this->countModules('grid-top')) : ?>
        <div id="grid-top" class="<?php echo $containerClass ?> container-table">
            <w:module type="<?php echo $gridMode; ?>" name="grid-top" chrome="wrightflexgrid" />
        </div>
    <?php endif; ?>

    <?php if ($this->countModules('grid-top2')) : ?>
        <div id="grid-top2" class="<?php echo $containerClass ?> container-padding">
            <w:module type="<?php echo $gridMode; ?>" name="grid-top2" chrome="wrightflexgrid" />
        </div>
    <?php endif; ?>

    <?php if ($this->countModules('breadcrumbs')) : ?>
        <div id="breadcrumbs" class="<?php echo $containerClass ?>">
            <w:module type="single" name="breadcrumbs" chrome="none" />
        </div>
    <?php endif; ?>

    <div class="<?php echo $containerClass ?> container-table main-wrapp">
        <div id="main-content" class="<?php echo $gridMode; ?>">
            <!-- sidebar1 -->
            <aside id="sidebar1">
                <w:module name="sidebar1" chrome="xhtml" />
            </aside>

            <!-- main -->
            <section id="main">
                <?php if ($this->countModules('above-content')) : ?>
                <!-- above-content -->
                <div id="above-content">
                    <w:module type="none" name="above-content" chrome="xhtml" />
                </div>
                <?php endif; ?>
            	<!-- component -->
            	<w:content />
                <?php if ($this->countModules('below-content')) : ?>
                <!-- below-content -->
                <div id="below-content">
                    <w:module type="none" name="below-content" chrome="xhtml" />
                </div>
                <?php endif; ?>
            </section>

            <!-- sidebar2 -->
            <aside id="sidebar2">
            	<w:module name="sidebar2" chrome="xhtml" />
            </aside>
        </div>
    </div>

    <?php if ($this->countModules('grid-bottom')) : ?>
        <div id="grid-bottom" class="<?php echo $containerClass; ?> container-full">
            <w:module type="<?php echo $gridMode; ?>" name="grid-bottom" chrome="wrightflexgrid" />
        </div>
    <?php endif; ?>

    <?php if ($this->countModules('grid-bottom2')) : ?>
        <div id="grid-bottom2" class="<?php echo $containerClass; ?> container-table">
    		<w:module type="<?php echo $gridMode; ?>" name="grid-bottom2" chrome="wrightflexgrid" />
        </div>
    <?php endif; ?>

    <div class="wrapper-footer">
	    <footer id="footer" <?php if ($this->params->get('stickyFooter',1)) : ?> class="sticky"<?php endif;?>>

            <?php if ($this->countModules('bottom-menu')) : ?>
               <w:nav containerClass="<?php echo $containerClass ?>" rowClass="<?php echo $gridMode;?>" name="bottom-menu" wrapClass="navbar-inverse navbar-transparent" />
            <?php endif; ?>

	    	 <div class="<?php echo $containerClass ?> footer-content">
	    		<?php if ($this->countModules('footer')) : ?>
					<w:module type="<?php echo $gridMode; ?>" name="footer" chrome="wrightflexgrid" />
			 	<?php endif; ?>
				<w:footer />
			</div>

        </footer>
    </div>

</body>
</html>
