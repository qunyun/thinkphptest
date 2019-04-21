<?php if (!defined('THINK_PATH')) exit();?>	<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="format-detection" content="telephone=no">
    <link rel="stylesheet" href="/Public/Admin/layui/css/layui.css" media="all" />
    <link rel="stylesheet" href="/Public/Admin/css/font_eolqem241z66flxr.css" media="all" />
    <link rel="stylesheet" href="/Public/Admin/css/user.css" media="all" />
	<title>管理权限列表</title>
</head>
<body class="childrenBody">
	<blockquote class="layui-elem-quote news_search">
		<div class="layui-inline">
		    <div class="layui-input-inline">
		    	<input type="text" value="" placeholder="请输入关键字" class="layui-input search_input">
		    </div>
		    <a class="layui-btn search_btn">查询</a>
		</div>
	</blockquote>
	<div class="layui-form news_list">
	  	<table class="layui-table">
		    <colgroup>
				<col width="10%">
				<col width="18">
				<col width="72%">
		    </colgroup>
		    <thead>
				<tr>
					<th>编号</th>
					<th>管理员类型</th>
					<th style="padding-left:50px;text-align:left;">拥有权限</th>
				</tr> 
		    </thead>
		    <tbody class="users_content">
			<tr>
				<td>1</td>
				<td>会员管理</td>
				<td style="padding-left:30px;text-align:left;">会员的禁用和启用</td>
			</tr>
			</tbody>
		</table>
	</div>
	<div id="page"></div>
	<script type="text/javascript" src="/Public/Admin/layui/layui.js"></script>
</body>
</html>