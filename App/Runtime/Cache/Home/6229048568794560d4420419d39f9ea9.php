<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no, minimal-ui"/>
	<meta name="apple-mobile-web-app-capable" content="yes"/>
	<meta name="apple-mobile-web-app-status-bar-style" content="black"/>
	<meta name="format-detection" content="telephone=no, email=no"/>
	<meta charset="UTF-8">
	<title>我的订单</title>
	<link rel="stylesheet" href="/Public/Home/css/core.css">
	<link rel="stylesheet" href="/Public/Home/css/icon.css">
	<link rel="stylesheet" href="/Public/Home/css/home.css">
	<link rel="icon" type="image/x-icon" href="/Public/Home/favicon.ico">
	<link href="/Public/Home/iTunesArtwork@2x.png" sizes="114x114" rel="apple-touch-icon-precomposed">

</head>
<body>

	<header class="aui-header-default aui-header-fixed aui-header-bg">
		<a href="javascript:history.back(-1)" class="aui-header-item">
			<i class="aui-icon aui-icon-back-white"></i>
		</a>
		<div class="aui-header-center aui-header-center-clear">
			<div class="aui-header-center-logo">
				<div class="aui-car-white-Typeface">铂金会员</div>
			</div>
		</div>
		<a href="#" class="aui-header-item-icon"   style="min-width:0">
			<i class="aui-icon aui-icon-share-pd"></i>
		</a>
	</header>

	<section class="aui-myOrder-content">
		<div class="m-tab demo-small-pitch" data-ydui-tab>
			<div class="aui-myOrder-fix">
				<ul class="tab-nav">
					<li class="tab-nav-item tab-active"><a href="javascript:;">专享价</a></li>
					<li class="tab-nav-item"><a href="javascript:;">免税区</a></li>
					<li class="tab-nav-item"><a href="javascript:;">运费券</a></li>
					<li class="tab-nav-item"><a href="javascript:;">专享服</a></li>
				</ul>
			</div>
			<div class="tab-panel">
				<div class="tab-panel-item tab-active">
					<div class="aui-list-product-box aui-list-product-box-clear">
						<div>
							<img src="/Public/Home/img/icon/icon-code.jpg" width="100%" alt="">
						</div>
					</div>
				</div>
				<div class="tab-panel-item">
					<div class="aui-list-product-box aui-list-product-box-clear">
						<a href="ui-product.html" class="aui-list-product-item">
							<div class="aui-list-product-item-img">
								<img src="/Public/Home/img/pd/sf-6.jpg" alt="">
							</div>
							<div class="aui-list-product-item-text">
								<h3>KOBE LETTUCE 秋冬新款 女士日系甜美纯色半高领宽松套头毛衣针织衫</h3>
								<div class="aui-list-product-mes-box">
									<div>
							<span class="aui-list-product-item-price">
								<em>¥</em>
								399.99
							</span>
										<span class="aui-list-product-item-del-price">
								¥495.65
							</span>
									</div>
									<div class="aui-comment">986评论</div>
								</div>
							</div>
						</a>
					</div>
				</div>
				<div class="tab-panel-item">
					<div class="aui-list-product-box aui-list-product-box-clear">
						<a href="ui-product.html" class="aui-list-product-item">
							<div class="aui-list-product-item-img">
								<img src="/Public/Home/img/pd/sf-7.jpg" alt="">
							</div>
							<div class="aui-list-product-item-text">
								<h3>KOBE LETTUCE 秋冬新款 女士日系甜美纯色半高领宽松套头毛衣针织衫</h3>
								<div class="aui-list-product-mes-box">
									<div>
							<span class="aui-list-product-item-price">
								<em>¥</em>
								399.99
							</span>
										<span class="aui-list-product-item-del-price">
								¥495.65
							</span>
									</div>
									<div class="aui-comment">986评论</div>
								</div>
							</div>
						</a>
					</div>
				</div>
				<div class="tab-panel-item">
					<div class="aui-list-product-box aui-list-product-box-clear">
					<a href="ui-product.html" class="aui-list-product-item">
						<div class="aui-list-product-item-img">
							<img src="/Public/Home/img/pd/sf-5.jpg" alt="">
						</div>
						<div class="aui-list-product-item-text">
							<h3>KOBE LETTUCE 秋冬新款 女士日系甜美纯色半高领宽松套头毛衣针织衫</h3>
							<div class="aui-list-product-mes-box">
								<div>
							<span class="aui-list-product-item-price">
								<em>¥</em>
								399.99
							</span>
									<span class="aui-list-product-item-del-price">
								¥495.65
							</span>
								</div>
								<div class="aui-comment">986评论</div>
							</div>
						</div>
					</a>
				</div>
				</div>
			</div>
		</div>
	</section>


	<script type="text/javascript" src="/Public/Home/js/jquery.min.js"></script>
	<script type="text/javascript" src="/Public/Home/js/aui.js"></script>
	<script type="text/javascript" >
        /**
         * Javascript API调用Tab
         */
        !function ($) {
            var $tab = $('#J_Tab');

            $tab.tab({
                nav: '.tab-nav-item',
                panel: '.tab-panel-item',
                activeClass: 'tab-active'
            });

			/*
			 $tab.find('.tab-nav-item').on('open.ydui.tab', function (e) {
			 console.log('索引：%s - [%s]正在打开', e.index, $(this).text());
			 });
			 */

            $tab.find('.tab-nav-item').on('opened.ydui.tab', function (e) {
                console.log('索引：%s - [%s]已经打开了', e.index, $(this).text());
            });
        }(jQuery);
	</script>

</body>
</html>