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
	<title>后台管理员</title>
</head>
<body class="childrenBody">
	<blockquote class="layui-elem-quote news_search">
		<div class="layui-inline">
		    <div class="layui-input-inline">
		    	<input type="text" value="" placeholder="请输入关键字" class="layui-input search_input">
		    </div>
		    <a class="layui-btn search_btn">查询</a>
		</div>
		<div class="layui-inline">
			<a class="layui-btn layui-btn-normal usersAdd_btn">添加角色</a>
		</div>
		<div class="layui-inline">
			<a class="layui-btn layui-btn-danger batchDel">批量删除</a>
		</div>
	</blockquote>
	<div class="layui-form news_list">
	  	<table class="layui-table">
			<colgroup>
				<col width="50">
				<col width="8%">
				<col width="18%">
				<col width="60%">
				<col width="14%">
			</colgroup>
		    <thead>
				<tr>
					<th><input type="checkbox" name="" lay-skin="primary" lay-filter="allChoose" id="allChoose"></th>
					<th>编号</th>
					<th>角色名</th>
					<th>角色权限</th>
					<th>操作</th>
				</tr> 
		    </thead>
			<?php if(is_array($data)): foreach($data as $key=>$v): ?><tbody class="users_content">
					<tr>
						<td><input type="checkbox" name="" lay-skin="primary" lay-filter="allChoose"></td>
						<td><?php echo ($v["id"]); ?></td>
						<td><?php echo ($v["rolename"]); ?></td>
						<td><?php echo ($v["pname"]); ?></td>
						<td>修改 删除</td>
					</tr>
				</tbody><?php endforeach; endif; ?>
		</table>
	</div>
	<div id="page"></div>
	<script type="text/javascript" src="/Public/Admin/layui/layui.js"></script>
	<script type="text/javascript" src="/Public/Admin/js/allRole.js"></script>
</body>
</html>