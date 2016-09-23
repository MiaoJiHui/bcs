<?php
namespace Home\Model;
use Think\Model;
class logModel extends Model{
	protected $tablePrefix = "";
	protected $tableName = "user";
	//上传页面信息
	public function login($account,$password){
		$user = M('user');
		$account = $account;  
    	$password = md5($password);
    	$data['name'] = $account;  			//设置查询条件
    	$isexist = $user->where($data)->find();     //判断用户是否存在
    	if(count($isexist)<= 0)
    	{
    		return 1;     			//不存在返回1 否则进行下一步
    	}
    	elseif ($isexist['pwd'] != $password)
    	{
    		return 2;     			//密码验证  错误返回2
    	}
    	else
    	{
    		$_SESSION["account"] = $account;
			return 3;    			//全部正确返回3
    	}
	}
}
?>