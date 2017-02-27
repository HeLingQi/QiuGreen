<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
<div id="main-content" class="clearfix">
    <div id="single-post-content" class="clearfix">
        <div id="single-post" class="clearfix">
            <header id="post-header">
                <h1><?php $this->title() ?></h1>
                </ul>
            </header>
            <article class="entry clearfix fitvids post">
                <div class="inner-post">
                    <?php $this->content();?>
                </div>
            </article>
            <div class="clearfix">
                <div id="commentsbox" class="boxframe">
                    <div id="comments" class="comments-area clearfix">
                        <?php $this->need('comments.php'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="clear"></div>
</div>
<?php $this->need('footer.php'); ?>
