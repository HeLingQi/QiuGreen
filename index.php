<?php
/**
 * 基于Typecho的响应式极简主题。
 * @package QiuGreen
 * @author 落叶大大
 * @version 1.1.1
 * @link https://www.helingqi.com/about.html
 */
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');?>
        <div id="main-content" class="clearfix">
            <div id="entries-wrap" class="clearfix">
                   <?php if($this->have()):?>
        <?php while($this->next()): ?>
                <article class="single-entry clearfix">
                    <div class="single-entry-thumbnail">
                        <a href="<?php $this->permalink();?>" title="<?php $this->title();?>">
                        <?php if(isset($this->fields->thumb)): ?>
                            <img class="thumb-square" src="<?php echo $this->fields->thumb.'?imageView2/1/w/280';?>" alt="<?php $this->title();?>" />
                        <?php else : ?>
                          <?php $thumb = thumbimg($this,true); if(!empty($thumb)):?>
                            <img class="thumb-square" src="<?php echo $thumb.'?imageView2/1/w/280';?>" alt="<?php $this->title();?>" />
                          <?php else :?>
                            <img src="<?php echo thumbimg2($this->cid); ?>" alt="<?php $this->title();?>" />
                          <?php endif;?>
                        <?php endif;?>
                        </a>
                    </div>
                    <div class="entry-text clearfix">
                        <header>
                            <div class="entry-cats">
                             <?php $this->date('F jS , Y'); ?></div>
                            <h3><a href="<?php $this->permalink();?>" title="<?php $this->title();?>"><?php $this->title(14 ,'...');?></a></h3>
                        </header>
                        <?php $this->excerpt(38 ,'...')?> </div>
                </article>
                   <?php endwhile; ?>
                    <?php else:?>
          <div>暂无文章</div>
        <?php endif?>
                <div class="clear"></div>
            </div>
            <div class="page-pagination">
                <div class="page-pagination-inner clearfix">
                    <div class="page-of-page">
                    <?php Typecho_Widget::widget('Widget_Stat')->to($stat); ?>
                    <span class="inner"><?php $stat->publishedPostsNum() ?>篇</span>
                    </div>
                    <?php $this->pageNav('<<','>>',2,'...'); ?>
                    </div>
            </div>
        </div>
<?php $this->need('footer.php'); ?>