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
 		username=$(".userName").val() ;  //登录名
 		password=$(".password").val(); //密码
        repassword=$(".repassword").val(); //确认密码
		//用户权限
        rolename = new Array();
        $("input[type=checkbox]").each(function(i){
            if($(this).prop('checked') == true){
                rolename .push($(this).attr('name'));
            }
        });
		//console.log(rolename);
		//密码长度验证??????
		if(password==repassword){
            $.post('addUser',{'username':username,'password':password,'rolename':rolename},function(res){
                if(res==1){
                    layer.msg("用户名已存在");
				}else{
                    layer.msg("用户添加成功！");
                    //刷新本页面
                    //location.reload();
				}
            })
        }else{
            layer.msg("两次输入密码不一致");
		}
 		return false;
 	})
})
