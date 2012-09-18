<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"><![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"><![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"><![endif]-->
<!--[if gt IE 9]><!--><html lang="en"><!--<![endif]-->
<head>
  <?php print $head; ?>
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php print $GLOBALS['base_path'] . drupal_get_path( 'theme', variable_get('theme_default', '0') ) .'/favicon/apple-touch-icon-114x114-precomposed.png' ?>">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php print $GLOBALS['base_path'] . drupal_get_path( 'theme', variable_get('theme_default', '0') ) .'/favicon/apple-touch-icon-72x72-precomposed.png' ?>">
  <link rel="apple-touch-icon-precomposed" href="<?php print $GLOBALS['base_path'] . drupal_get_path( 'theme', variable_get('theme_default', '0') ) .'/favicon/apple-touch-icon-57x57-precomposed.png' ?>">
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title><?php print $head_title; ?></title>
  <?php print $styles; ?>
  <?php print $scripts; ?>
  <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
</head>
<body lang="en" class="<?php print $classes; ?>">
  <div id="skip-link">
    <a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
  </div>
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
</body>
</html>