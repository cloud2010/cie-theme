<?php

/**
  Category Template: 简洁版分类目录
 **/

/*
 * 简介版分类目录
 * 
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
                 <div class="col-sm-9 col-md-9 col-lg-9">
                    <div class="bg"> </div>
                 </div>
                </div>
                <div class="row" id="middle">
                    <div id="leftSidebar" class="col-sm-3 col-md-3 col-lg-3">
                    <div class="row">
                        <div class="sidebar">
                            <ul id="list">

                       

                            </ul>
                        </div>
                        </div>
                    </div>
                    <div class="col-sm-9 col-md-9 col-lg-9">
                       <div class="page-content">
                       <?php while (have_posts()) : the_post(); ?>
                           <!-- <a href="<?php the_permalink(); ?>" class="list-group-item">
                               <h4 class="list-group-item-heading"><?php the_title(); ?></h4>
                           </a> -->
                           <div class="row">
                               <div class="col-lg-12 col-md-12 col-sm-12">
                                   <h3>
                                     <a href="<?php the_permalink(); ?>"><?php echo the_title(); ?></a>
                                   </h3>
                                   <p class="text-left lite"><a href="<?php the_permalink(); ?>"><button class="btn btn-md btn-primary">阅读更多...</button></a></p>
                               </div>

                           </div>
                       <?php endwhile; ?>
                       </div>
                        <div class="count">                            
                            <!-- PAGINATION -->
                            <?php dmeng_paginate(); ?>
                        </div>
                    </div>
                </div>
            </div>
</div>
<?php get_footer(); ?>
