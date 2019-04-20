<?php
namespace Admin\Controller;
use Think\Controller;

class UserController extends Controller {
    /**
     * 后台首页
     */
    public function addUser(){

        $this->display();
    }
    public function allUser(){
        $this->display();
    }
    public function changePwd(){
        $this->display();
    }
    public function userInfo(){
        $this->display();
    }

}