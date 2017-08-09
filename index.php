<?php get_header(); ?>

<?php get_header('masthead'); ?>


	<div class="row">
		<?php
			//~ 首页幻灯片
			$slide_home = intval(get_option('dmeng_slide_home',0));
			if( $slide_home ) echo dmeng_slide_to_html($slide_home);
		?>
	</div>


<?php
get_template_part('news');
?>
<?php
get_template_part('notice');
?>

<?php
get_template_part('propaganda');
?>

<?php get_footer(); ?>
