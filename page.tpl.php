<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language ?>" lang="<?php print $language->language ?>">
<head>
  <title><?php print $head_title ?></title>
  <meta http-equiv="content-language" content="<?php print $language->language ?>" />
  <?php print $meta; ?>
  <?php print $head; ?>
  <?php print $styles; ?>
</head>

<body class="<?php print $body_classes; ?>">

<div class="container">
  <div id="header" class="row">
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <?php if ($title): ?>
              <div id="logo" class="site_title navbar-brand">
                <?php print $logo_block; ?>
              </div>
            <?php else: ?>
              <h1 id="logo">
                <?php print $logo_block; ?>
              </h1>
            <?php endif; ?>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <?php if ($search_box): ?>
              <div id="search-box" class="navbar-form navbar-right">
                <?php print $search_box; ?>
              </div> <!-- /#search-box -->
            <?php endif; ?>
            <?php print theme('links', $primary_links, array('id' => 'nav', 'class' => 'primary-links nav navbar-nav navbar-right')) ?>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>
    <?php print $header; ?>
    <?php if (isset($secondary_links)) : ?>
      <?php print theme('links', $secondary_links, array('id' => 'subnav', 'class' => 'links secondary-links')) ?>
    <?php endif; ?>
  </div>
  <div class="row">
    <?php if ($left): ?>
      <div class="<?php print $left_classes; ?>"><?php print $left; ?></div>
    <?php endif ?>

    <div class="<?php print $center_classes; ?>">
      <?php
        if ($breadcrumb != '') {
          print $breadcrumb;
        }

        if ($tabs != '') {
          print '<div class="tabs">'. $tabs .'</div>';
        }

        if ($messages != '') {
          print '<div id="messages">'. $messages .'</div>';
        }

        if ($title != '') {
          print '<h1>'. $title .'</h1>';
        }

        print $help; // Drupal already wraps this one in a class

        print $content;
        print $feed_icons;
      ?>
    </div>
      
    <?php if ($right): ?>
      <div class="<?php print $right_classes; ?>"><?php print $right; ?></div>
    <?php endif ?>
  </div>

  <?php if ($footer1 || $footer2 || $footer3): ?>
    <div id="footer" class="row">
      <div class="col-md-4">
        <?php if ($footer1): ?>
          <?php print $footer1; ?>
        <?php endif; ?>
      </div>
      <div class="col-md-4">
        <?php if ($footer2): ?>
          <?php print $footer2; ?>
        <?php endif; ?>
      </div>
      <div class="col-md-4">
        <?php if ($footer3): ?>
          <?php print $footer3; ?>
        <?php endif; ?>
      </div>
    </div>
  <?php endif; ?>
  <?php if ($footer_message || $footer): ?>
    <div id="post-footer" class="clear">
      <?php if ($footer): ?>
        <?php print $footer; ?>
      <?php endif; ?>
      <?php if ($footer_message): ?>
        <div id="footer-message"><?php print $footer_message; ?></div>
      <?php endif; ?>
    </div>
  <?php endif; ?>

  <?php print $scripts ?>
  <?php print $closure; ?>

</div>

</body>
</html>
