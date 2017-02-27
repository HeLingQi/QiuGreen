<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<div id="main-content" class="clearfix">
  <header id="page-heading">
    <h1>
      <?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ''); ?>
    </h1>
  </header>
  <div id="entries-wrap" class="clearfix">
    <?php if ($this->have()): ?>
    <?php while($this->next()): ?>
    <article class="single-entry clearfix">
      <div class="single-entry-thumbnail"> 
      <a href="<?php $this->permalink();?>" title="<?php $this->title();?>">
       <?php if(isset($this->fields->thumb)): ?>
                            <img class="thumb-square" src="<?php echo $this->fields->thumb;?>" alt="<?php $this->title();?>" />
                        <?php else : ?>
                          <?php $thumb = thumbimg($this,true); if(!empty($thumb)):?>
                            <img class="thumb-square" src="<?php echo $thumb;?>" alt="<?php $this->title();?>" />
                          <?php else :?>
                            <img src="<?php echo thumbimg2($this->cid); ?>" alt="<?php $this->title();?>" />
                          <?php endif;?>
                        <?php endif;?>
      </div>
      <div class="entry-text clearfix">
        <header>
          <div class="entry-cats">
          <a href="<?php $this->permalink() ?>">
          <?php $this->date('F j, Y'); ?></a></div>
          <h3><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h3>
        </header>
        <?php $this->excerpt(50 ,'...')?> 
        </div>
    </article>
                   <?php endwhile; ?>
                    <?php else:?>
        <div class="noarticle">暂无文章</div>
    <?php endif?>
                <div class="clear"></div>
            </div>
            <div class="page-pagination">
                <div class="page-pagination-inner clearfix">
                    <?php $this->pageNav(); ?>
                    </div>
            </div>
        </div>
<?php $this->need('footer.php'); ?>