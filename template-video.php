<?php
/*
Template Name: 视频页面模板
*/
?>

<?php

get_header(); ?>

<?php get_header('masthead'); ?>


<div class="container">
            <div class="page1">
                <div class="row" id="top">
                 <div class="col-md-3 left">
                    <h2 class="h2-set"><?php the_title() ?></h2>
                 </div>
                 
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div>
                           
                           <div class="detail-category">
                               <div class="detail-text">
                               
									<?php 
										while ( have_posts() ) : the_post();
										echo '<p>'.the_post_thumbnail('large').'</p>';
                                        the_content();
										endwhile; 
									?>
                                    <p class="text-right"><div class="bdsharebuttonbox"><a href="#" class="bds_more" data-cmd="more"></a><a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a><a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a><a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a></div>
<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"0","bdSize":"32"},"share":{},"image":{"viewList":["weixin","tsina","qzone"],"viewText":"分享到：","viewSize":"16"},"selectShare":{"bdContainerClass":null,"bdSelectMiniList":["weixin","tsina","qzone"]}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script></p>
                                </div>

                           </div>
                        </div>
                    </div>
                </div>
            </div>
</div>


<?php get_footer(); ?>