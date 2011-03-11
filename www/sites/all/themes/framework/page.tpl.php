<?php
// $Id: page.tpl.php,v 1.6 2011/02/18 05:47:53 andregriffin Exp $
?>
<!DOCTYPE html>
<html lang="<?php echo $language->language ?>" dir="<?php echo $language->dir ?>">

<head>
  <?php print $head ?>
  <title><?php print $head_title ?></title>
  <?php print $styles ?>
  <?php print $scripts ?>
  <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
</head>

<body class="<?php print $body_classes; ?>">

  <div id="wrapper" class="clearfix">

    <div id="skip-link">
      <a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
      <?php if ($primary_links): ?>
        <a href="#navigation" class="element-invisible element-focusable"><?php print t('Skip to navigation'); ?></a>
      <?php endif; ?>
    </div>

    <header id="header" role="banner" class="clearfix">
	  <?php if ($logo): ?>
        <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
          <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
        </a>
      <?php endif; ?>
      <?php if ($site_name || $site_slogan): ?>
        <div id="site-name-slogan">
          <?php if ($site_name): ?>
            <?php if ($title): ?>
              <div id="site-name"><strong>
                <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></a>
              </strong></div>
            <?php else: /* Use h1 when the content title is empty */ ?>
              <h1 id="site-name">
                <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></a>
              </h1>
            <?php endif; ?>
          <?php endif; ?>
          <?php if ($site_slogan): ?>
            <div id="site-slogan"><?php print $site_slogan; ?></div>
          <?php endif; ?>
        </div>
      <?php endif; ?>
      <?php if ($search_box): ?><?php print $search_box ?><?php endif; ?>
      <?php print $header; ?>
    </header> <!-- /#header -->

	<?php if ($primary_links || $secondary_links): ?>
      <nav id="navigation" role="navigation" class="clearfix ">
        <?php if ($navigation): ?>
          <?php print $navigation ?>
        <?php endif; ?>
        <?php if (!$navigation): ?> <!--if block in $navigation region, override $primary_links and $secondary_links-->
          <?php if (isset($primary_links)) : ?>
            <?php print theme('links', $primary_links, array('class' => 'links primary-links clearfix')) ?>
          <?php endif; ?>
          <?php if (isset($secondary_links)) : ?>
            <?php print theme('links', $secondary_links, array('class' => 'links secondary-links clearfix')) ?>
          <?php endif; ?>
        <?php endif; ?>
      </nav> <!-- /#navigation -->
    <?php endif; ?>

    <section id="main" role="main" class="clearfix">
      <?php if (!empty($breadcrumb)): print $breadcrumb; endif; ?>
      <?php if (!empty($messages)): print $messages; endif; ?>
      <?php if (!empty($mission)): ?><div id="mission"><?php print $mission; ?></div><?php endif; ?>
      <a id="main-content"></a>
      <?php if (!empty($title)): ?><h1 class="title" id="page-title"><?php print $title ?></h1><?php endif; ?>
      <?php if (!empty($tabs)): ?><div class="tabs-wrapper"><?php print $tabs; ?></div><?php endif; ?>
      <?php if (!empty($help)): print $help; endif; ?>
      <?php print $content; ?>
    </section> <!-- /#main -->

    <?php if (!empty($left)): ?>
      <aside id="sidebar-left" role="complimentary" class="sidebar clearfix">
        <?php print $left; ?>
      </aside> <!-- /sidebar-left -->
    <?php endif; ?>

    <?php if (!empty($right)): ?>
      <aside id="sidebar-right" role="complimentary" class="sidebar clearfix">
        <?php print $right; ?>
      </aside> <!-- /sidebar-right -->
    <?php endif; ?>

    <footer id="footer" role="contentinfo" class="clearfix">
      <?php print $footer_message; ?>
      <?php if (!empty($footer)): print $footer; endif; ?>
      <?php print $feed_icons ?>
    </footer> <!-- /#footer -->

    <?php print $closure ?>

  </div> <!-- /#wrapper -->

</body>
</html>