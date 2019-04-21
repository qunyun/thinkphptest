<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no, minimal-ui"/>
	<meta name="apple-mobile-web-app-capable" content="yes"/>
	<meta name="apple-mobile-web-app-status-bar-style" content="black"/>
	<meta name="format-detection" content="telephone=no, email=no"/>
	<meta charset="UTF-8">
	<title>新建地址</title>
	<link rel="stylesheet" href="/Public/Home/css/core.css">
	<link rel="stylesheet" href="/Public/Home/css/icon.css">
	<link rel="stylesheet" href="/Public/Home/css/home.css">
	<link rel="icon" type="image/x-icon" href="favicon.ico">
	<link href="iTunesArtwork@2x.png" sizes="114x114" rel="apple-touch-icon-precomposed">
	<style>
		.m-cell {
			background-color: #FFF;
			position: relative;
			z-index: 1;
			margin-bottom: .35rem;
			height: 3rem;
			line-height: 3rem;
		}
	</style>

</head>
<body style="background:#eee">

	<header class="aui-header-default aui-header-fixed aui-header-bg">
		<a href="javascript:history.back(-1)" class="aui-header-item">
			<i class="aui-icon aui-icon-back-white"></i>
		</a>
		<div class="aui-header-center aui-header-center-clear">
			<div class="aui-header-center-logo">
				<div class="aui-car-white-Typeface">新建地址</div>
			</div>
		</div>
		<a href="#" class="aui-header-item-icon"   style="min-width:0">
			<!--<i class="aui-icon aui-icon-search"></i>-->
		</a>
	</header>


	<section class="aui-myOrder-content">
		<div class="aui-prompt"><i class="aui-icon aui-prompt-sm"></i>填写您的地址信息</div>
		<div class="aui-Address-box">
			<p>
				<input class="aui-Address-box-input" type="text" placeholder="收货人姓名">
			</p>
			<p>
				<input class="aui-Address-box-input" type="text" placeholder="手机号码">
			</p>
			<p>
				<input class="aui-Address-box-input" type="text" readonly id="J_Address"  placeholder="所在地区">
			</p>
			<p>
				<textarea class="aui-Address-box-text" placeholder="街道， 小区门牌等详细地址" rows="3"></textarea>
			</p>

		</div>
		<div class="aui-out">
			<a href="#" class="red-color" style="color:#fff">保存并使用</a>
		</div>
	</section>


	<script type="text/javascript" src="/Public/Home/js/jquery.min.js"></script>
	<script type="text/javascript" src="/Public/Home/js/aui.js"></script>
	<script type="text/javascript" src="/Public/Home/js/city.js"></script>
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
	<script>
        /**
         * 默认调用
         */
        !function () {
            var $target = $('#J_Address');

            $target.citySelect();

            $target.on('click', function (event) {
                event.stopPropagation();
                $target.citySelect('open');
            });

            $target.on('done.ydui.cityselect', function (ret) {
                $(this).val(ret.provance + ' ' + ret.city + ' ' + ret.area);
            });
        }();
        /**
         * 设置默认值
         */
        !function () {
            var $target = $('#J_Address2');

            $target.citySelect({
                provance: '新疆',
                city: '乌鲁木齐市',
                area: '天山区'
            });

            $target.on('click', function (event) {
                event.stopPropagation();
                $target.citySelect('open');
            });

            $target.on('done.ydui.cityselect', function (ret) {
                $(this).val(ret.provance + ' ' + ret.city + ' ' + ret.area);
            });
        }();
	</script>

</body>
</html>