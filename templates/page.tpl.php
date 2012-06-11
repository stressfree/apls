<div id="page" class="<?php print $classes; ?>"<?php print $attributes; ?>>
  <div id="header">
    <?php if ($logo): ?>
      <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
        <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>"/>
      </a>
    <?php endif; ?>
    <?php if ($site_name || $site_slogan): ?>
      <div id="name-and-slogan">
        <?php if ($site_name): ?>
            <div id="site-name">
              <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home">
                <?php print $site_name; ?>
              </a>
            </div>
        <?php endif; ?>
        <?php if ($site_slogan): ?>
          <div id="site-slogan"><?php print $site_slogan; ?></div>
        <?php endif; ?>
      </div>
    <?php endif; ?>
    <?php if ($page['header']): ?>
      <div id="header-region">
        <?php print render($page['header']); ?>
      </div>
    <?php endif; ?>
  </div>
  <div id="main">
    <div id="content">
      <div id="content-inner">
        <?php if ($title|| $tabs || $action_links): ?>
          <div id="content-header">
		   <?php if ($page['highlight']): ?>
		   <div id="highlight"><?php print render($page['highlight']); ?></div>
		   <?php endif; ?>
           <?php print render($title_prefix); ?>
           <?php if ($title): ?>
           <h1 id="page-title"><?php print $title; ?></h1>
           <?php endif; ?>
           <?php print render($title_suffix); ?>
           <?php if ($tabs): ?>
           <div class="tabs"><?php print render($tabs); ?></div>
           <?php endif; ?>
           <?php print render($page['help']); ?>
           <?php if ($action_links): ?>
           <ul class="action-links"><?php print render($action_links); ?></ul>
           <?php endif; ?>
          </div>
        <?php endif; ?>
        <div id="main-content">
          <?php print render($page['content']) ?>
        </div>
		<div id="main-content-footer">
	        <?php print $feed_icons; ?>
		</div>		
      </div>
    </div>
    <?php if ($page['sidebar_first']): ?>
      <div id="sidebar-first">
        <div id="sidebar-first-inner">
          <?php print render($page['sidebar_first']); ?>
        </div>
      </div>
    <?php endif; ?>
    <?php if ($page['sidebar_second']): ?>
      <div id="sidebar-second">
        <div id="sidebar-second-inner">
          <?php print render($page['sidebar_second']); ?>
        </div>
      </div>
    <?php endif; ?>
  </div>
  <div id="footer">
    <?php if ($page['footer_top']): ?>
      <?php print render($page['footer_top']); ?>
    <?php endif; ?>
    <?php if ($page['footer_bottom']): ?>
      <?php print render($page['footer_bottom']); ?>
    <?php endif; ?>
  </div>
</div>
