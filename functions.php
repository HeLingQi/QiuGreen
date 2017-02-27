<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
function themeConfig($form) {
    $favicon = new Typecho_Widget_Helper_Form_Element_Text('favicon', NULL, NULL, _t('Favicon'), _t('在这里输入favicon地址,带http:// ,不填则使用主题自带的Favicon'));
    $form->addInput($favicon);
    
    $signaTure = new Typecho_Widget_Helper_Form_Element_Text('signaTure', NULL, NULL, _t('个人签名'), _t('在这里填写一段话，用作网站签名。非网站介绍'));
    $form->addInput($signaTure);

    $weiBo = new Typecho_Widget_Helper_Form_Element_Text('weiBo', NULL, 'http://weibo.com/shaoqiusheng', _t('个人微博'), _t('在这里填写你的微博地址，以http开头。'));
    $form->addInput($weiBo);
    
    $eMail = new Typecho_Widget_Helper_Form_Element_Text('eMail', NULL, '123456@qq.com', _t('个人邮箱'), _t('在这里填写你的邮箱，例如12345@qq.com。'));
    $form->addInput($eMail);
    
    $beiAn = new Typecho_Widget_Helper_Form_Element_Text('beiAn', NULL, '京ICP证030173号', _t('网站备案'), _t('在这里填写你站点的备案号，例如 京ICP证030173号 。'));
    $form->addInput($beiAn);
    //instant预加载
    $search_form = new Typecho_Widget_Helper_Form_Element_Checkbox('search_form',
    array('Pjax' => _t('预加载,勾上即可，为使原生评论生效请到设置-评论，取消勾选"开启反垃圾保护"'),),array('ShowSearch'), _t('开启InstantClick预加载'));
    $form->addInput($search_form->multiMode());
    
    $statiStics = new Typecho_Widget_Helper_Form_Element_Textarea('statiStics', NULL, NULL, _t('站点统计'), _t('在这里填入站点统计代码,若开启预加载功能，请在&#60;script&#62;修改为&#60;script data-no-instant&#62;'));
    $form->addInput($statiStics);
}

/*文章阅读次数统计*/
function get_post_view($archive) {
    $cid = $archive->cid;
    $db = Typecho_Db::get();
    $prefix = $db->getPrefix();
    if (!array_key_exists('views', $db->fetchRow($db->select()->from('table.contents')))) {
        $db->query('ALTER TABLE `' . $prefix . 'contents` ADD `views` INT(10) DEFAULT 0;');
        echo 0;
        return;
    }
    $row = $db->fetchRow($db->select('views')->from('table.contents')->where('cid = ?', $cid));
    if ($archive->is('single')) {
        $views = Typecho_Cookie::get('extend_contents_views');
        if (empty($views)) {
            $views = array();
        } else {
            $views = explode(',', $views);
        }
        if (!in_array($cid, $views)) {
            $db->query($db->update('table.contents')->rows(array('views' => (int)$row['views'] + 1))->where('cid = ?', $cid));
            array_push($views, $cid);
            $views = implode(',', $views);
            Typecho_Cookie::set('extend_contents_views', $views); //记录查看cookie
            
        }
    }
    echo $row['views'];
}
/*文章缩略图*/
function thumbimg($obj,$link=false){
    preg_match_all( "/<[img|IMG].*?src=[\'|\"](.*?)[\'|\"].*?[\/]?>/", $obj->content, $matches );
    $thumb = '';
    $options = Typecho_Widget::widget('Widget_Options');
    $attach = $obj->attachments(1)->attachment;
    if (isset($attach->isImage) && $attach->isImage == 1){
        $thumb = $attach->url;
    }
    if($link){
        return $thumb;
    }
}
/*随机缩略图*/ 
function thumbimg2($cid) {
        if (empty($imgurl)) {
            $rand_num = 220; //随机图片数量
            if ($rand_num == 0) {
                $imgurl = "https://m.helingqi.com/thumb/0.jpg";            
            } else {
                $imgurl = "https://m.helingqi.com/thumb/" . rand(1, $rand_num) . ".jpg";            
            }
        }
        if (empty($img)) {
            echo $imgurl;
        }
         else {
            echo 'https://m.helingqi.com/thumb/0.jpg';
        }
}
?>