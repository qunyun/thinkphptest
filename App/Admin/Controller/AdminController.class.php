<?php
namespace Admin\Controller;
use Think\Controller;
load('@.common');
/**
 * 管理员管理
 */
class AdminController extends Controller {
    /**
     * 管理员列表
     */
    public function allUsers(){
        $role=M('role r');
        $this->data=$role->join('right join shop_admin a ON a.id = r.admin_id')
            ->join('left join shop_admin_role b ON b.id = r.role_id')
            ->group('a.id')
            ->getField('a.id,a.username,a.login_time,a.login_ip,a.login_num,a.active,a.email,group_concat(b.role_name) bname',true);
        dump($data);
        $this->display();
    }
    /**
     * 添加管理员
     */
    public function addUser(){
        if(IS_POST) {
            $admin = M('admin');
            $data['username'] = $_POST['username'];
            $data['password'] = md5($_POST['password']);
            $data['add_time'] = time();
            $rolename=$_POST['rolename'];
            //和已有用户名数据做对比
            $flag=0;
            $name=$admin->getField('username',true);
            foreach($name as $v){
                if($v==$data['username']){
                    echo 1;//用户名已存在
                    $flag=1;
                }
            }
            if($flag==0){
                echo 2;//数据添加成功
                $a['admin_id']=$admin->add($data);
                $role=M('role');
                foreach($rolename as $v){
                    $a['role_id']=$v;
                    $role->add($a);//角色权限关系表的添加
                    echo 2;//数据添加成功
                }
            }
        }else{
            $this->role=M('adminRole')->where('id>1')->select();
            $this->display();
        }
    }
    /**
     * 角色列表
     */
    public function allRole(){
        $role=M('rolePrivilege r');
        $this->data=$role->join('shop_admin_role a ON a.id = r.role_id')
            ->join('shop_privilege p ON p.id = r.pri_id')
            ->group('a.id')
            ->getField('a.id,a.role_name rolename,group_concat(p.name) pname',true);
        $this->display();
    }
    /**
     * 添加角色
     */
    public function addRole(){
        if(IS_POST){
            $role=M('adminRole');
            $data['role_name']=$_POST['rolename'];
            $pri=$_POST['privilege'];//用户权限
            //和已有角色名数据做对比
            $flag=0;
            $rolename=$role->getField('role_name',true);
            foreach($rolename as $v){
                if($v==$data['role_name']){
                    echo 1;//角色名已存在
                    $flag=1;
                }
            }
            if($flag==0){
                $a['role_id']=$role->add($data);//角色的添加
                $rolepri=M('rolePrivilege');
                foreach($pri as $v){
                    if($v>0){
                    $a['pri_id']=$v;
                    $rolepri->add($a);//角色权限关系表的添加
                    echo 2;//数据添加成功
                    }
                }
            }
        }else{
            //用户权限的列表
            $privilege=M('privilege')->field('id,name,pid')->select();
            $this->privilege=recursive($privilege);
            //dump($this->privilege);
            $this->display();
        }

    }
}