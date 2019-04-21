var $;
layui.config({
	base : "Public/Admin/js/"
}).use(['form','layer','jquery'],function(){
	var form = layui.form(),
		layer = parent.layer === undefined ? layui.layer : parent.layer,
		laypage = layui.laypage;
		$ = layui.jquery;

 	var addUserArray = [],addUser;
 	form.on("submit(addUser)",function(data){
 		//是否添加过信息
	 	if(window.sessionStorage.getItem("addUser")){
	 		addUserArray = JSON.parse(window.sessionStorage.getItem("addUser"));
	 	}
	 	//获取表单信息
 		rolename=$(".userName").val(); //角色名
		//角色权限
        privilege = new Array();
        $("input[type=checkbox]").each(function(i){
            if($(this).prop('checked') == true){
                privilege .push($(this).attr('name'));
            }
        });
		$.post('addrole',{'rolename':rolename,'privilege':privilege},function(res){
			if(res==1){
				layer.msg("角色名已存在");
			}else{
				layer.msg("角色添加成功！");
				//刷新本页面
				location.reload();
			}
		})
 		return false;
 	})
})
