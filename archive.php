<?php

/*
 * 欢迎来到代码世界，如果你想修改多梦主题的代码，那我猜你是有更好的主意了～
 * 那么请到多梦网络（ http://www.dmeng.net/ ）说说你的想法，数以万计的童鞋们会因此受益哦～
 * 同时，你的名字将出现在多梦主题贡献者名单中，并有一定的积分奖励～
 * 注释和代码同样重要～
 * @author 多梦 @email chihyu@aliyun.com 
 */

//师资力量特殊模板
if(is_category('faculty')||is_category('professor')||is_category('a-professor')||is_category('lecturer')||is_category('counsellor'))
{
    get_template_part('category','t');
    exit();
}

// 研究生导师模板
elseif (is_category('supervisor')||is_category('supervisor-phd')||is_category('supervisor-master')) {
    get_template_part('category','s');
    exit();
}

$thiscats = get_the_category();
    $parent_id=0;
    foreach ($thiscats as  $value) {
        if($value->parent>=$parent_id)
        {
            $parent_id=$value->parent;
            $thiscat=$value;
        }
    }
    //echo $thiscat[0]->parent;
    //$parent = get_category($thiscat[0]->parent);
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

get_header(); ?>
<?php get_header('masthead'); ?>
<?php //get_template_part('nav'); ?>


<div class="container">
            <div class="page1">
                <div class="row" id="top">
                 <div class="col-sm-3 col-md-3 col-lg-3 left">
                 <?php 
                    foreach((get_the_category()) as $category) {
                        $name[] = $category->cat_name;
                    }
                 ?>
                    <h2 class="h2-set"><?php echo $name[0]; ?></h2>
                 </div>
                 <div class="col-md-9">
                    <div class="bg"> </div>
                 </div>
                </div>
                <div class="row" id="middle">
                    <div id="leftSidebar" class="col-sm-3 col-md-3 col-lg-3">
                    <div class="row">
                        <div class="sidebar">
                            <ul id="list">

                        <?php foreach ($categories as $category)
                        {
                            // if ($category->cat_ID==$thiscat->cat_ID)
                            // {
                            //     $str = '<li class="submenu-hover">';
                            // }
                            // else
                            // {
                            //     $str = '<li>';
                            // }
                            // $str .= "<a href=\"".get_category_link($category->cat_ID)."\" title=\"$category->name\" >$category->name</a></li>";
                            // echo $str;
                         }?> 

                            </ul>
                        </div>
                        </div>
                    </div>
                    <div class="col-sm-9 col-md-9 col-lg-9">
                        <div class="page-content">
                           <ul>


                                <?php while (have_posts()) : the_post(); ?>
                                    <li>
                                        <?php $thumbnail = dmeng_get_the_thumbnail('medium'); ?>
                                        <div class="row">
                                            <h3 ><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                            </h3>
                                        </div>
                                        
                                        <div class="row">
                                        <?php if ($thumbnail) {
                                            echo '<div class="col-sm-4 col-md-4 col-lg-4 entry-thumbnail"> <img src="'.dmeng_script_uri('grey_png').'" data-original="'.$thumbnail.'" alt="'.get_the_title().'"  class="img-thumbnail"></div>';
                                        ?>
                                            
                                            <div class="col-sm-8 col-md-8 col-lg-8">
                                                <?php dmeng_post_meta_lite() ?>
                                                <?php //dmeng_breadcrumb_html(the_ID(),' / ') ?>
                                                <?php //printf( __( '%s', 'dmeng' ), dmeng_get_category_parents( get_queried_object_id(), ' / ') ); ?>
                                                <?php $excerpt = apply_filters( 'the_excerpt', get_the_excerpt() );
                                                echo $excerpt; ?>
                                                <p><a href="<?php the_permalink(); ?>">阅读更多...</a></p>     
                                            </div>
                                        <?php } else { ?>
                                            <div class="col-sm-12 col-md-12 col-lg-12">
                                                <?php dmeng_post_meta_lite() ?>
                                                <?php $excerpt = apply_filters( 'the_excerpt', get_the_excerpt() );
                                                echo $excerpt; ?>
                                                <p><a href="<?php the_permalink(); ?>">阅读更多...</a></p>     
                                            </div>
                                         <?php } ?>
                                        </div>  
                                    </li>   
                                <?php endwhile; ?>

                                                                                                     
                           </ul>
                        <div  class="count">                            
                            <!-- PAGINATION -->
                            <?php dmeng_paginate(); ?>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
</div>
<?php get_footer(); ?>
