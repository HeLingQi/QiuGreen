<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
<div id="main-content" class="clearfix">
    <div id="single-post-content" class="clearfix">
        <div id="single-post" class="clearfix">
            <header id="post-header">
                <h1>
          <?php $this->title() ?>
        </h1>
                <ul class="meta clearfix">
                    <li><strong>发布于：</strong>
                        <?php $this->date('y-m-d'); ?>
                    </li>
                    <li><strong>来自：</strong>
                        <a href="<?php $this->author->permalink(); ?>" title="来自：<?php $this->author(); ?>" rel="author">
                            <?php $this->author(); ?>
                        </a>
                    </li>
                    <li><strong>分类：</strong>
                        <?php $this->category();?>
                    </li>
                    <li class="comment-scroll"><strong>阅读次数：</strong>
                        <?php get_post_view($this) ?>
                    </li>
                </ul>
            </header>
            <article class="class=" entry clearfix fitvids "">
                <div class="inner-post">
                    <?php $this->content();?>
                </div>
            </article>
            <div id="post-tags" class="clearfix">
                <?php $this->tags(' ', true, 'none'); ?>
            </div>
            <div class="clearfix">
                <?php $this->need('comments.php'); ?>
                <!--评论结束-->
            </div>
        </div>
    </div>
    <div class="clear"></div>
</div>
<?php $this->need('footer.php'); ?>
