<?php if(!defined( '__TYPECHO_ROOT_DIR__'))exit;?>
<!DOCTYPE HTML>
<html lang="zh-CN">
<head>
    <meta charset="<?php $this->options->charset(); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no">
    <meta http-equiv="Cache-Control" content="no-transform">
    <meta http-equiv="Cache-Control" content="no-siteapp">
    <title><?php $this->archiveTitle(array('category'=>_t(' %s '),'search'=>_t(' %s '),'tag'=>_t(' %s '),'author'=>_t(' %s ')),'',' - ');?><?php $this->options->title();?> - <?php $this->options->signaTure();?></title>
    <meta name="keywords" content="<?php $this->options->keywords()?>" />
    <?php $this->header('keywords=&generator=&template=&pingback=&xmlrpc=&wlw=&commentReply=&rss1=&rss2=&atom='); ?>
    <link rel="shortcut icon" href="<?php if($this->options->favicon): $this->options->favicon(); else: $this->options->themeUrl('images/favicon.ico');endif; ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('style.css'); ?>">
    <script src="<?php $this->options->themeUrl('js/jquery.js '); ?>"></script>
    <script src="<?php $this->options->themeUrl('js/jquery-migrate.min.js '); ?>"></script>
</head>
<body>
    <body class="home blog">
        <div id="wrap" class="clearfix">
            <div id="header-wrap">
                <header id="header" class="clearfix">
                    <div id="logo">
                        <h2>
                    <a href="<?php $this->options ->siteUrl(); ?>" title="<?php $this->options->title();?>" rel="home">
                      <?php $this->options->title();?></a></h2>
                        <p>
                            <?php $this->options->signaTure();?>
                        </p>
                    </div>
                </header>
            </div>
            <div id="navigation-wrap" class="clearfix">
              <nav id="navigation">
                <div class="menu-main-container">
                    <ul id="menu-main" class="sf-menu">
                        <li class="menu-item menu-item-type-custom"><a href="<?php $this->options ->siteUrl(); ?>"> Home </a></li>
                        <?php $this->widget('Widget_Contents_Page_List')
               ->parse('<li class="menu-item menu-item-type-post_type"><a href="{permalink}">{title}</a></li>'); ?>    
                    </ul>
                </div>
            </nav>
            <ul id="header-social" class="clearfix">
                    <li>
                        <div class="form_search">
                          <form id="search" method="post" action="/" role="search">
                            <i class="search-ico"></i>
                            <input type="text" class="s_input input_enter_placeholder" name="s" required="true" placeholder="关键字，然后回车">
                          </form>
                        </div>
                    </li>
                    <li>
                        <a href="<?php $this->options->weiBo();?>" title="weibo" target="_blank">
                            <img src="<?php $this->options->themeUrl('images/weibo.png'); ?>" alt="weibo" /></a>
                    </li>
                    <li>
                        <a href="mailto:<?php $this->options->eMail();?>" title="email" target="_blank">
                            <img src="<?php $this->options->themeUrl('images/mail.png'); ?>" alt="email" /></a>
                    </li>
                    <li>
                        <a href="<?php $this->options->feedUrl(); ?>" title="rss" target="_blank">
                             <img src="<?php $this->options->themeUrl('images/rss.png'); ?>" alt="rss"  /></a>
                    </li>
                </ul>
            </div>