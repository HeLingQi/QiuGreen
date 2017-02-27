<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
 <div id="footer-wrap">
            <footer id="footer">
                <div id="copyright">
                    &copy; Copyright <?php echo date("Y")?> &middot; 
                    <a href="<?php $this->options->siteUrl(); ?>" title="<?php $this->options->title(); ?>">
                    <?php $this->options->title(); ?></a> - <a href="http://www.miitbeian.gov.cn" target="_blank"><?php $this->options->beiAn()?></a>&nbsp;&nbsp;
  Theme by 
					<a href="https://www.helingqi.com" title="<?php $this->options->theme();?>" target="_blank"><?php $this->options->theme(); ?></a>
                </div>  
            </footer>
        </div>
    </div>
<?php $this->footer(); ?>
<script src='<?php $this->options->themeUrl('js/theme.js'); ?>'></script>
<script>var responsiveLocalize={"text":"Menu"};</script>
<?php if(!empty($this->options->search_form) && in_array('Pjax', $this->options->search_form)): ?>
<script src="<?php $this->options->themeUrl('js/instantclick.min.js'); ?>" data-no-instant></script> 
<script data-no-instant>
	InstantClick.on('change', function(isInitialLoad) {
		if (isInitialLoad === false) {
			if (typeof ga !== 'undefined') ga('send', 'pageview', location.pathname + location.search);
                        if (typeof prettyPrint !== 'undefined') prettyPrint();// support google code prettify
                        if (typeof _hmt !== 'undefined') _hmt.push(['_trackPageview', location.pathname + location.search]);// support 百度统计
		}
	});
	InstantClick.init();
	</script>
<!--统计代码-->
<?php $this->options->statiStics()?>
<?php endif; ?>

</body>
</html>