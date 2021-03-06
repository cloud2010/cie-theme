<?php

/*
 * 欢迎来到代码世界，如果你想修改多梦主题的代码，那我猜你是有更好的主意了～
 * 那么请到多梦网络（ http://www.dmeng.net/ ）说说你的想法，数以万计的童鞋们会因此受益哦～
 * 同时，你的名字将出现在多梦主题贡献者名单中，并有一定的积分奖励～
 * 注释和代码同样重要～
 * @author 多梦 @email chihyu@aliyun.com 
 */

get_header(); ?>
<?php get_header('masthead'); ?>


<div id="main" class="container">
	<div class="row" style="margin-top:1.5em">
		<div id="content" class="col-lg-12 col-md-12" role="main">
			<article class="<?php echo apply_filters('dmeng_archive_panel_class', 'panel panel-default panel-archive');?>" role="main">
					<div class="panel-body">
						<h1 class="page-header"><?php _e('未找到页面','dmeng');?> <small><?php _e('404 NO FOUND','dmeng');?></small></h1>
						<ul>
							<li><h4 class="page-header"><?php _e('可能导致的原因','dmeng');?></h4></li>
							
							<li><h4><?php _e('1、输入的链接有误','dmeng');?></h4></li>
							<li><h4><?php _e('2、请求的页面不存在','dmeng');?></h4></li>
							
							
						</ul>
						
					</div>
			 </article>
		 </div><!-- #content -->

	</div>
 </div><!-- #main -->

<?php //get_footer(); ?>
