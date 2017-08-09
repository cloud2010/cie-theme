/**
 * CIE js
 */

jQuery(document).ready(function() {
    
    try {
        if (window.console && window.console.log) {
            console.log("%c 欢迎全国考生调剂上海海事大学信息工程学院各专业！详细信息参见首页通知", "color:blue");
        }
    } catch (e) {}

    jQuery(window).bind("load", function() {
        var footerHeight = 0,
            footerTop = 0,
            jQueryfooter = jQuery("#footer");
        positionFooter();

        var vw = jQuery(".video-media").width();
        var vh = jQuery(".video-media").height() + 10;
        jQuery(".bg-blue").css({
            "width": vw,
            "height": vh
        });

        jQuery(window).resize(function() {
            var vw = jQuery(".video-media").width();
            var vh = jQuery(".video-media").height() + 10;
            jQuery(".bg-blue").css({
                "width": vw,
                "height": vh
            });
        });

        jQuery(".part").mouseenter(function() {
            jQuery(this).children('ul').css({
                "display": "block"
            });

            jQuery(this).children('a').css({
                "color": "#fff"
            });
            /* Act on the event */
        });

        jQuery(".part").mouseleave(function() {
            jQuery(".sub-menu").css({
                "display": "none"
            });

            jQuery(this).children('a').css({
                "color": "#64ace2"
            });
            /* Act on the event */
        });


        //定义positionFooter function
        function positionFooter() {
            //取到div#footer高度
            footerHeight = jQueryfooter.height();
            //div#footer离屏幕顶部的距离
            footerTop = (jQuery(window).scrollTop() + jQuery(window).height() - footerHeight) + "px";


            // debug info
            // console.log("Document height: ", jQuery(document.body).height());
            // console.log("Window height: ", jQuery(window).height());
            // console.log("Window scroll: ", jQuery(window).scrollTop());
            // console.log("Footer height: ", footerHeight);
            // console.log("Footer top: ", footerTop);
            // console.log("-----------");

            //如果页面内容高度小于屏幕高度，div#footer将绝对定位到屏幕底部，否则div#footer保留它的正常静态定位
            if ((jQuery(document.body).height()) < jQuery(window).height()) {
                jQueryfooter.css({
                    position: "absolute",
                    width: "100%"
                }).stop().animate({
                    top: footerTop
                }, "fast");
            } else {
                jQueryfooter.css({
                    position: "static"
                });
            }
        }

        jQuery(window).scroll(positionFooter).resize(positionFooter);
    });

    //首页没有h2-set类 因此长度为0  过滤了首页执行以下代码
    if (jQuery(".h2-set").length !== 0) {
        // var title = jQuery(".dropdown.active > a").text(); //获取当前菜单标题
        var list = jQuery(".dropdown.active > ul").html(); //获取当前菜单下的所有子菜单
        // jQuery(".h2-set").text(title);
        jQuery("#list").html(list);
        jQuery(".divider").remove(); //消除某些二级菜单的分隔符li标签
        // jQuery("#list>.active").attr("class","submenu-hover");//把当前选中的菜单项样式改为submenu-hover 即蓝字标明
    }
});
