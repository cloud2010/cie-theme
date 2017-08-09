<?php

/*
 * 欢迎来到代码世界，如果你想修改多梦主题的代码，那我猜你是有更好的主意了～
 * 那么请到多梦网络（ http://www.dmeng.net/ ）说说你的想法，数以万计的童鞋们会因此受益哦～
 * 同时，你的名字将出现在多梦主题贡献者名单中，并有一定的积分奖励～
 * 注释和代码同样重要～
 * @author 多梦 @email chihyu@aliyun.com 
 */

/**
 * 
 * 针对教师个人页面的特殊显示
 * 11,30：教授  31：副教授   32：博士、讲师   39：思政老师
 * 
 */

if ( in_category(30) ||  in_category(31) ||  in_category(32) ||  in_category(39)) {
    if ( in_category(30) ) {
        $cat_name = single_cat_title('',FALSE);
        $thiscat = get_category(30);
    }elseif (in_category(31)) {
        $cat_name = single_cat_title('',FALSE);
        $thiscat = get_category(31);
    }elseif (in_category(32)) {
        $cat_name = single_cat_title('',FALSE);
        $thiscat = get_category(32);
    }elseif (in_category(39)) {
        $cat_name = single_cat_title('',FALSE);
        $thiscat = get_category(39);
    }
    $parent = get_category($thiscat->category_parent);
    if ($parent->cat_ID==0) {
        $args=array(
          'orderby' => 'id',
          'hide_empty' => 0,
          'order' => 'ASC',
          'parent' => $thiscat->cat_ID
          );
        $categories=get_categories($args);
        header('Location:'.get_category_link($categories[0]->cat_ID));
        exit();     
    }
    $args=array(
      'orderby' => 'id',
      'hide_empty' => 0,
      'order' => 'ASC',
      'parent' => $parent->cat_ID
      );
    $categories=get_categories($args);
    $args=array(
      'orderby' => 'id',
      'hide_empty' => 1,
      'order' => 'ASC',
      'parent' => 65
      );
    $xsuocats=get_categories($args);
}else{
    $thiscats = get_the_category();
    $parent_id=0;
    foreach ($thiscats as  $value) {
        if($value->parent>=$parent_id)
        {
            $parent_id=$value->parent;
            $thiscat=$value;
        }
    }
    if($parent_id!=0){
        $args=array(
        'orderby' => 'slug',
        'hide_empty' => 1,
        'order' => 'ASC',
        'parent' => $parent_id
        );
        $categories=get_categories($args);              
    }
    else {
        $categories=$thiscats;
    }

}






get_header(); ?>

<?php get_header('masthead'); ?>

<div class="container">
            <div class="page1">
                <div class="row" id="top">
                 <div class="col-sm-3 col-md-3 col-lg-3 left">
                 <?php 
					foreach((get_the_category()) as $category) {
						$name[] = $category->cat_name;
					}
                 ?>
                    <h2 class="h2-set" data="<?php print_r($name)?>"><?php echo $name[0]; ?></h2>
                 </div>
                 
                </div>
                <div class="row" id="middle">
                    <div id="leftSidebar" class="col-sm-3 col-md-3 col-lg-3">
                    <div class="row">
                        <div class="sidebar">
                            <ul id="list">
                       <?php foreach ($categories as $category)
                        {
                            if ($category->cat_ID==$thiscat->cat_ID)
                            {
                                $str = '<li class="submenu-hover">';
                            }
                            else
                            {
                                $str = '<li>';
                            }
                            $str .= "<a href=\"".get_category_link($category->cat_ID)."\" title=\"$category->name\" >$category->name</a></li>";
                            echo $str;
                         }?> 

                            </ul>

                        </div>
                        </div>
                    </div>

                    
                    <div class="col-sm-9 col-md-9 col-lg-9">
                        <div class="page-detail">
                           <div class="detail-title">
                               <p><?php echo get_the_title(); ?></p>
                           </div>
                           <div class="detail-category">

                               <div class="detail-text">
                               
									<?php 
										while ( have_posts() ) : the_post();
										// echo '<p>'.the_post_thumbnail('large').'</p>';
                                        the_content();
										endwhile; 
									?>

                  <p class="text-right"><div class="bdsharebuttonbox"><a href="#" class="bds_more" data-cmd="more"></a><a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a><a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a><a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a></div>
<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"0","bdSize":"32"},"share":{},"image":{"viewList":["weixin","tsina","qzone"],"viewText":"分享到：","viewSize":"16"},"selectShare":{"bdContainerClass":null,"bdSelectMiniList":["weixin","tsina","qzone"]}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script></p>
                                </div>
                                <?php //dmeng_post_footer();?>
                                

                                <!-- <div class="row"><?php dmeng_breadcrumb_html(get_the_ID(),' › ');?></div> -->


                           </div>
                        </div>
                    </div>
                </div>
            </div>
</div>


<?php get_footer(); ?>


