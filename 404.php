<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
  <div id="main-content"class="clearfix">
    <div id="error-page"class="container">
      <h1 id="error-page-title">404</h1>
      <p id="error-page-text">SORRY.WE CAN'T SEEM TO FIND THE PAGE YOU'RE LOOKING FOR.Return to <a href="<?php $this->options ->siteUrl(); ?>"title="<?php $this->options->title() ?>"rel="home">
        Homepage
        </a>.</p>
    </div>
    <div class="clear"></div>
    </div>
<?php $this->need('footer.php'); ?>
