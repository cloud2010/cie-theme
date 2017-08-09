<!-- created by LMJ Designed by CY 2016/04/26-->

<div class="Notice-container">
    <div class="container">
        <div class="row">
            <div class="notice">
                    <div class="col-md-8 clearfix">
                        <div class="title-logo">
                      <?php if ( $homeblog = get_option('of_home_blog') ) { ?>
                            <img src="<?php echo get_bloginfo('template_url').'/images/index/notice.svg' ?>" class="img04" alt="">
                            <div class="h3-div-set">
                            <h3 class="h3-set">通知</h3>
                            <h3 class="h3-set-EN">Notice</h3>
                            </div>
                      <?php } ?>
                        </div>

                        <ul class="notice-bg">
                          <?php
                            $args=array( 'showposts' => 3 ,'cat'=>19);  $my_query = new WP_Query($args); 
                            if ( $my_query->have_posts() ) {
                              while ($my_query->have_posts()) : $my_query->the_post(); 
                          ?>
                            <li class="row" id="notice-set">
                                    <div class="col-md-2">
                                        <div class="time-title">
                                            <img src="<?php echo get_bloginfo('template_url').'/images/index/bluebg.svg' ?>" alt="" class="img03">
                                            <p class="num-set"><?php the_time('d');?></p>
                                            <p class="month-set"><?php the_time('F');?></p>
                                        </div>
                                    </div>
                                    <div class="col-md-10">
                                       <div class="data-message">
                                       <!--链接-->
                                        <a href="<?php the_permalink(); ?>">
                                        <!--标题-->
                                        <p class="p1"><?php the_title();?></p>
                                        <!--摘要-->
                                        <?php the_excerpt();?>
                                        <!-- <p class="p2"><?php the_excerpt();?></p> -->
                                        </a>
                                       </div>
                                    </div>
                                
                            </li>
                          <?php
                            endwhile; }
                          ?>
                        </ul>
                    </div>

                    <div class="col-md-4 clearfix">
                        <div class="row">
                        <div class="col-md-12">
                            <div class="title-logo">
                            <?php if ( $homeblog = get_option('of_home_blog') ) { ?>
                                <img src="<?php echo get_bloginfo('template_url').'/images/index/act.svg' ?>" class="img05" alt="">
                                <div class="h3-div-set">
                                    <h3 class="h3-set">学术活动</h3>
                                    <h3 class="h3-set-EN">Academics</h3>
                                </div>
                              <?php } ?>
                            </div>
                          </div>
                        </div>
                        <div class="row bg02">
                        <div class="col-md-12">
                          <ul>
                              <?php
                                $args=array( 'showposts' => 4 ,'cat'=>103);  $my_query = new WP_Query($args); 
                          if ( $my_query->have_posts() ) {
                            while ($my_query->have_posts()) : $my_query->the_post(); 
                              ?>
                              <li><a href="<?php the_permalink(); ?>"><?php the_title();?></a></li>
                              <?php
                                endwhile; }
                              ?>
                          </ul>
                        </div>
                        </div>
                        <a href="?cat=19" class="more">More</a>
                    </div>
                
            </div>
        </div>
    </div>
</div>
