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
			<a class="layui-btn layui-btn-normal usersAdd_btn">添加管理员</a>
		</div>
		<div class="layui-inline">
			<a class="layui-btn layui-btn-danger batchDel">批量删除</a>
		</div>
	</blockquote>
	<div class="layui-form news_list">
	  	<table class="layui-table">
		    <thead>
				<tr>
					<th><input type="checkbox" name="" lay-skin="primary" lay-filter="allChoose" id="allChoose"></th>
					<th>编号</th>
					<th>登录名</th>
					<th>管理员角色</th>
					<th>最近登录时间</th>
					<th>登录IP</th>
					<th>登录次数</th>
					<th>邮箱</th>
					<th>状态</th>
					<th>操作</th>
				</tr> 
		    </thead>
			<tbody class="users_content">
				<?php if(is_array($data)): foreach($data as $key=>$v): ?><tr>
						<td><input type="checkbox" name="" lay-skin="primary" lay-filter="allChoose"></td>
						<td><?php echo ($v["id"]); ?></td>
						<td><?php echo ($v["username"]); ?></td>
						<td><?php echo ($v["bname"]); ?></td>
						<td><?php echo ($v["login_time"]); ?></td>
						<td><?php echo ($v["login_ip"]); ?></td>
						<td><?php echo ($v["login_num"]); ?></td>
						<td><?php echo ($v["email"]); ?></td>
						<td><?php echo ($v['active']==1?'启用':'禁用'); ?></td>
						<td>禁用 修改 删除</td>
					</tr><?php endforeach; endif; ?>
			</tbody>
		</table>
	</div>
	<div id="page"></div>
	<script type="text/javascript" src="/Public/Admin/layui/layui.js"></script>
	<script type="text/javascript" src="/Public/Admin/js/allUsers.js"></script>
</body>
</html>