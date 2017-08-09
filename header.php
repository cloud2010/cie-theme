<?php
/*
 * 欢迎来到代码世界，如果你想修改多梦主题的代码，那我猜你是有更好的主意了～
 * 那么请到多梦网络（ http://www.dmeng.net/ ）说说你的想法，数以万计的童鞋们会因此受益哦～
 * 同时，你的名字将出现在多梦主题贡献者名单中，并有一定的积分奖励～
 * 注释和代码同样重要～
 * @author 多梦 @email chihyu@aliyun.com 
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="renderer" content="webkit">
<meta http-equiv="Cache-Control" content="no-siteapp">
<meta http-equiv="Cache-Control" content="no-transform"> 
<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php echo stripslashes(htmlspecialchars_decode(dmeng_setting('head_code')));?>
<meta name="360-site-verification" content="d9221206ad033520c92a097730764fcd" />
<title><?php wp_title( '&#45;', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="canonical" href="<?php echo dmeng_canonical_url();?>">
<?php

if(dmeng_setting('speedup'))
	echo '<link rel="dns-prefetch" href="'.dmeng_speed_url().'"> ';

wp_head();

?>


</head>
<body <?php body_class(); ?>>
