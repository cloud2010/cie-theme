<?php

/*
 * 欢迎来到代码世界，如果你想修改多梦主题的代码，那我猜你是有更好的主意了～
 * 那么请到多梦网络（ http://www.dmeng.net/ ）说说你的想法，数以万计的童鞋们会因此受益哦～
 * 同时，你的名字将出现在多梦主题贡献者名单中，并有一定的积分奖励～
 * 注释和代码同样重要～
 * @author 多梦 @email chihyu@aliyun.com 
 */
 
 //~ 默认的页面模板和文章页一样


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
                    <h2 class="h2-set" data="<?php print_r(urldecode($name))?>"><?php echo urldecode($name); ?></h2>
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
                        <div class="page-detail">
                           <div class="detail-title">
                               <p><?php echo get_the_title(); ?></p>
                           </div>
                           <div class="detail-category">

                               <div class="detail-text">
                               
									<?php 
										while ( have_posts() ) : the_post();

										echo '<p>'.the_post_thumbnail('large').'</p>';
                                        the_content();
										endwhile; 

									?>
                                    
                                </div>

                           </div>
                        </div>
                    </div>
                </div>
            </div>
</div>


<?php get_footer(); ?>


