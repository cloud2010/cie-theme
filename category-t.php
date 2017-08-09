<?php

/*
 * 欢迎来到代码世界，如果你想修改多梦主题的代码，那我猜你是有更好的主意了～
 * 那么请到多梦网络（ http://www.dmeng.net/ ）说说你的想法，数以万计的童鞋们会因此受益哦～
 * 同时，你的名字将出现在多梦主题贡献者名单中，并有一定的积分奖励～
 * 注释和代码同样重要～
 * @author 多梦 @email chihyu@aliyun.com 
 */

$cat_name = single_cat_title('',FALSE);
$thiscat = get_category(get_cat_ID($cat_name));
$parent = get_category($thiscat->category_parent);
if ($parent->cat_ID==0) {
    $args=array(
      'orderby' => 'id',
      'hide_empty' => 0,
      'order' => 'ASC',
      'parent' => $thiscat->cat_ID
      );
    $categories=get_categories($args);
    header('Location: '.get_category_link($categories[0]->cat_ID));
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


get_header(); ?>
<?php get_header('masthead'); ?>
<?php //get_template_part('nav'); ?>


<div class="page1-container">
            <div class="page1">
                <div class="row" id="top">
                 <div class="col-sm-3 col-md-3 col-lg-3 left">
                    <h2 class="h2-set">师资队伍</h2>
                 </div>
                 <div class="col-sm-9 col-md-9 col-lg-9">
                    <div class="bg"> </div>
                 </div>
                </div>
                <div class="row" id="middle">
                    <div id="leftSidebar" class="col-sm-3 col-md-3 col-lg-3">
                    <div class="row">
                        <div class="sidebar">
                            <ul>
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
                    <?php foreach( $xsuocats as $cat ) :
                        $args = array(
                            'orderby' => 'post_date',
                            'order' => 'DESC',
                            'category__and' => array($thiscat->cat_ID,$cat->cat_ID) ,
                            'numberposts' => 300
                        );
                        $myposts = get_posts($args);
                        if(count($myposts)==0) continue;
                    ?>
                        <div class="professor">
                            <div class="row top-title">
                             <p class="pro1"><?php echo $cat->name;?></p>               
                            </div>
                            <div class="row">
                             <div class="professor-text">
                                <ul>
                                    <?php foreach( $myposts as $post ) :?>
                                        <li><a href="<?php echo get_permalink($post->ID);?>" name="<?php echo get_permalink($post->ID);?>" title="<?php echo strip_tags($post->post_title);?>"><?php echo strip_tags($post->post_title);?></a></li>
                                    <?php endforeach;?>
                                </ul>
                            </div>
                            </div>
                        </div>
                        <?php endforeach;?>
                    </div>
                </div>
            </div>
</div>


<?php get_footer(); ?>
