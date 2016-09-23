<?php
namespace Home\Controller;
use Think\Controller;
use Think\Exception;
class LogController extends Controller {
	public function log(){
		$this->display('Log/login');
    }
	public function login(){
		$post = I('post.');
		$result = D('Log')->login($post['account'],$post['password']);
		$this->ajaxReturn($result);
    }
    public function logout(){
		$this->display('Log/login');
    }
}