<!-- created by LMJ Designed by CY,WJJ 2016/04/26-->

  <!--用响应式container 包括三个row 分辨率要改一下-->



<div class="News-container" style="background-image: url(<?php echo get_bloginfo('template_url').'/images/index/cream_dust.png' ?>);">
    <div class="container">

        <div class="new">
            <!-- 第一行 -->
            <div class="row">
                <div class="col-sm-4 col-md-4 col-lg-4 title-logo">
                    <img src="<?php echo get_bloginfo('template_url').'/images/index/news2.svg' ?>" class="img-sign01" alt="">
                    <div class="h3-div-set">
                        <h2 class="h3-set-2">新闻</h2>
                        <h2 class="h3-set-EN-2">News</h2>
                    </div>
                </div>
            </div>
            <!-- 第二行 -->
            <div class="row">

              <div class="col-sm-4 col-md-4 col-lg-4" id="newsLeft">
                <?php
                  $args=array( 'posts_per_page' => 1 ,'cat'=>4);  $my_query = new WP_Query($args); 
                  if ( $my_query->have_posts() ) {
                    while ($my_query->have_posts()) : $my_query->the_post(); 
                    $thumbnail = dmeng_get_the_thumbnail();
                ?>

                <?php
                // 如果文章有缩略图就显示缩略图 否则显示文章第一幅图片
                
                  if(has_post_thumbnail()){ 
                ?>
                  <a href="<?php the_permalink(); ?>"> <?php the_post_thumbnail('large'); ?> </a>
                <?php
                  }else{
                    $string ='<img src="'.$thumbnail.'"\>';
                  }
                  echo $string;
                ?>

               

                <!--标题-->
                  <a href="<?php the_permalink(); ?>" style="color:black"><h3 ><?php the_title();?></h3></a>
                <!--摘要-->
                  <?php the_excerpt(10);?>
            <?php
              endwhile; }
            ?>
              </div>


                <div class="col-sm-4 col-md-4 col-lg-4">
                    <ul class="newsList">
                    <?php
                    //查询参数分别为:显示4篇文章 分类号为4 从第2篇文章开始读(因为之前已经读了1篇)
                      $args=array( 'posts_per_page' => 4 ,'cat'=>4,'offset'=> 1);  $my_query = new WP_Query($args); 
                      if ( $my_query->have_posts() ) {
                        while ($my_query->have_posts()) : $my_query->the_post(); 
                          ?>
                          <li > 
                          <!--标题--> 
                             <a href="<?php the_permalink(); ?>" style="overflow:hidden"target="_blank"><?php the_title();?> </a>
                          </li>
                        <?php
                          endwhile; }
                        ?>
                      </ul>
                   </div>
                  <div class="col-sm-4 col-md-4 col-lg-4">
                    <ul class="newsList">
                        <?php
                        //查询参数分别为:显示4篇文章 分类号为4 从第6篇文章开始读(因为之前已经读了5篇)
                          $args=array( 'posts_per_page' => 4 ,'cat'=>4,'offset'=> 5);  $my_query = new WP_Query($args); 
                    if ( $my_query->have_posts() ) {
                      while ($my_query->have_posts()) : $my_query->the_post(); 
                        ?>
                      <li >  
                             <a href="<?php the_permalink(); ?>" style="overflow:hidden"target="_blank"><?php the_title();?> </a>
                          </li>
                        <?php
                          endwhile; }
                        ?>
                  </ul>
                </div>
              </div>
              <!-- 第三行 -->
              <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 text-right" style="margin-top:2em">
                <!--查看更多-->
                  <a href="?cat=4" class="more1">更多新闻</a>
                </div>
              </div>
            </div>
    </div>
</div>

