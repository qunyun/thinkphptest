<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>添加管理员</title>
	<meta name="renderer" content="webkit">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="format-detection" content="telephone=no">
	<link rel="stylesheet" href="/Public/Admin/layui/css/layui.css" media="all" />
	<style type="text/css">
		.layui-form-item .layui-inline{ width:33.333%; float:left; margin-right:0; }
		@media(max-width:1240px){
			.layui-form-item .layui-inline{ width:100%; float:none; }
		}
	</style>
</head>
<body class="childrenBody">
	<form class="layui-form" style="width:80%;" action="javascript:;" method="post">
		<div class="layui-form-item">
			<label class="layui-form-label">角色名</label>
			<div class="layui-input-block">
				<input type="text" class="layui-input userName" lay-verify="required" placeholder="请输入角色名" style="width:240px">
			</div>
		</div>
		<div class="layui-form-item">
			<label class="layui-form-label">角色权限</label>
			<div class="layui-input-block">
				<table border="1">
				<?php if(is_array($privilege)): foreach($privilege as $key=>$v): if($v["pid"] == 0 & $v["id"] > 1): ?><div style="clear: both;"></div><?php endif; ?>
					<div style="float:left"><?php echo ($v["html"]); ?><input type="checkbox" name="<?php echo ($v['pid']==0?'':$v['id']); ?>" title="<?php echo ($v["name"]); ?>"></div>
					<?php if($v["pid"] == 0): ?><div style="clear: both;"></div><?php endif; endforeach; endif; ?>
				</table>
			</div>
		</div>
		<div class="layui-form-item">
			<div class="layui-input-block">
				<button class="layui-btn" lay-submit="" lay-filter="addUser">立即提交</button>
				<button type="reset" class="layui-btn layui-btn-primary">重置</button>
		    </div>
		</div>
	</form>
	<script type="text/javascript" src="/Public/Admin/layui/layui.js"></script>
	<script type="text/javascript" src="/Public/Admin/js/addRole.js"></script>
</body>
</html>