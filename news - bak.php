<!-- created by LMJ Designed by CY,WJJ 2016/04/26-->

  <!--用响应式container 包括三个row 分辨率要改一下-->



		<div class="row" id="News">
        <section class="new">

        <?php if ( $homeblog = get_option('of_home_blog') ) { ?>
        <h2><p><img src="http://localhost/wp-content/uploads/2016/04/newslogo.png" width="150" height="25" /></p></h2>
        <?php } ?>

        <section class="newL" id="newsLeft">
      <?php
      	$args=array( 'posts_per_page' => 1 ,'cat'=>4);  $my_query = new WP_Query($args); 
		if ( $my_query->have_posts() ) {
	    while ($my_query->have_posts()) : $my_query->the_post(); 
      ?>
          <?php
          //如果文章有缩略图就显示缩略图 否则显示指定图片
            if(has_post_thumbnail()){ 
          ?>
            <a href="<?php the_permalink(); ?>"> <?php the_post_thumbnail(); ?> </a>
          <?php
            }else{
              $string ='<img src="givenpicture"\>';
            }
            echo $string;
          ?>
      		<!--标题-->
            <a href="<?php the_permalink(); ?>" style="color:black"><h3 ><?php the_title();?></h3></a>
      		<!--摘要-->
            <?php the_excerpt();?>
      <?php
        endwhile; }
      ?>
        </section>
        <section class="newR" id="newsCenter">
	          <?php
	          //查询参数分别为:显示4篇文章 分类号为4 从第2篇文章开始读(因为之前已经读了1篇)
	          	$args=array( 'posts_per_page' => 4 ,'cat'=>4,'offset'=> 1);  $my_query = new WP_Query($args); 
				if ( $my_query->have_posts() ) {
			    while ($my_query->have_posts()) : $my_query->the_post(); 
	          ?>
				  <li > 
				  <!--标题--> 
		          	 <a href="<?php the_permalink(); ?>" target="_blank"><?php the_title();?> </a>
		          </li>
	          <?php
	            endwhile; }
	          ?>
        </section>
        <ul class="newR" id="newsRight">
	          <?php
	          //查询参数分别为:显示4篇文章 分类号为4 从第6篇文章开始读(因为之前已经读了5篇)
	          	$args=array( 'posts_per_page' => 4 ,'cat'=>4,'offset'=> 5);  $my_query = new WP_Query($args); 
				if ( $my_query->have_posts() ) {
			    while ($my_query->have_posts()) : $my_query->the_post(); 
	          ?>
				  <li >  
		          	 <a href="<?php the_permalink(); ?>" target="_blank"><?php the_title();?> </a>
		          </li>
	          <?php
	            endwhile; }
	          ?>

            
            <?php if ( $homeblogview = get_option('of_home_blog_view') ) { ?>
            <li class="last">
            <!--查看更多-->
                <a class="lastR" href="?cat=4" target="_blank">更多</a>
            </li>
            <?php } ?>

        </ul>
        </section>			
        </div>

