<div id="page" class="<?php print $classes; ?>"<?php print $attributes; ?>>
  <header>
    <?php if ($logo): ?>
      <div id="logo">
        <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home">
          <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>"/>
        </a>
      </div>
    <?php endif; ?>
    <?php if ($site_name || $site_slogan): ?>
      <hgroup>
        <?php if ($site_name): ?>
            <h2>
              <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home">
                <?php print $site_name; ?>
              </a>
            </h2>
        <?php endif; ?>
        <?php if ($site_slogan): ?>
          <h4><?php print $site_slogan; ?></h4>
        <?php endif; ?>
      </hgroup>
    <?php endif; ?>
    <?php if ($page['header']): ?>
      <nav>
        <?php print render($page['header']); ?>
      </nav>
    <?php endif; ?>
  </header>
  <div id="main">
    <div id="content">
      <?php if ($title|| $tabs || $action_links): ?>
        <div id="content-header">
		<?php if ($page['highlight']): ?>
		<div id="highlight"><?php print render($page['highlight']); ?></div>
		<?php endif; ?>
        <?php if ($tabs): ?>
        <div class="tabs"><?php print render($tabs); ?></div>
        <?php endif; ?>
        <?php print render($page['help']); ?>
        <?php if ($action_links): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
        <?php endif; ?>
      </div>
      <?php endif; ?>
      <div id="content-inner">   
        <div id="page-title">
            <div class="title-content">
                <?php print render($title_prefix); ?>
                <?php if ($title): ?>
                <h1><?php print $title; ?></h1>
                <?php endif; ?>
                <?php print render($title_suffix); ?>
            </div>
        </div>
        <div id="sidebar-frame"><!-- --></div>
        <div id="main-content">           
            <?php print render($page['content']) ?>
        </div>
		<div id="main-content-footer">
	        <?php print $feed_icons; ?>
		</div>		
      </div>
    </div>
    <?php if ($page['sidebar_first']): ?>
      <aside id="sidebar-first">
        <div id="sidebar-first-inner">
          <?php print render($page['sidebar_first']); ?>
        </div>
      </aside>
    <?php endif; ?>
    <?php if ($page['sidebar_second']): ?>
      <aside id="sidebar-second">
        <div id="sidebar-second-inner">
          <?php print render($page['sidebar_second']); ?>
        </div>
      </aside>
    <?php endif; ?>
  </div>
  <footer>
    <?php if ($page['footer_top']): ?>
      <nav>
        <?php print render($page['footer_top']); ?>
      </nav>
    <?php endif; ?>
    <?php if ($page['footer_bottom']): ?>
      <?php print render($page['footer_bottom']); ?>
    <?php endif; ?>
  </footer>
</div>
