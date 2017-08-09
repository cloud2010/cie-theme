<?php
/*
 * 欢迎来到代码世界，如果你想修改多梦主题的代码，那我猜你是有更好的主意了～
 * 那么请到多梦网络（ http://www.dmeng.net/ ）说说你的想法，数以万计的童鞋们会因此受益哦～
 * 同时，你的名字将出现在多梦主题贡献者名单中，并有一定的积分奖励～
 * 注释和代码同样重要～
 * @author 多梦 @email chihyu@aliyun.com 
 */

wp_footer();
?>


<div id="footer" class="Bottom-container Bottom">
   <div class="container" id="clear-background">	
		<div class="row" >
    <?php
      if( is_active_sidebar( 'sidebar-2' ) ){
          dynamic_sidebar( 'sidebar-2' );
      }
  ?>	

		</div>
		<div class="row information" >
      <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
        Copyright © 2016 信息工程学院-上海海事大学 All Rights Reserved
      </div>	
		 <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 text-right">
        
          <a href="/">首页</a> | <a href="/eng">English</a>
              
     </div>
		</div>
    </div>
    </div>
    <!-- 百度统计 -->
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "//hm.baidu.com/hm.js?61bc3960e1112951b032a87b6f35894d";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>


</body>
</html>
