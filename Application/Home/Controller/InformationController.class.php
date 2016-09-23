<?php
namespace Home\Controller;
use Think\Controller;
use Think\Exception;
class InformationController extends Controller {
	public function upload(){
		$post = $_POST;
		D('Information')->upload($post);
        $this->ajaxReturn(success);
	}
	public function save(){
		$post = $_POST;
		$updatedata = array(
		"accountid" => $post['account'],
		"folio" => $post['folio'],
		"cnc" => $post['cn'],
		"cne"=> $post['en'],
		"projectid" => $post['project'],
		"month" => $post['month'],
		"sizeid" => $post['size'],
		"amount" => $post['amount'],
		"ddate" => $post['duedate'],
        "gdate" => $post['receiptdate'],
        "methodid" => $post['method'],
        "salesid" => $post['sales'],
        "territoryid" => $post['territory'],
        "copy" => $post['copy']
		);
		if($post['actual'] != null)
		{
			$updatedata['actual'] = $post['actual'];
		}
		if($post['notes'] != null)
		{
			$updatedata['notes'] = $post['notes'];
		}
		if($post['invdate'] != null)
		{
			$updatedata['page'] = $post['invdate'];
		}
		if($post['invcontent'] == 'Ad.')
		{
			$updatedata['ain'] = $post['invoiceno'];
		}
		if($post['invcontent'] == 'Service')
		{
			$updatedata['sin'] = $post['invoiceno'];
		}
		if($post['special'] != null)
		{
			$updatedata['special'] = $post['special'];
		}
		$condition['id'] = $post['id'];
    	//写入数据库
        M('income')->where($condition)->save($updatedata);
        $this->ajaxReturn(success);
	}
	public function delete()
    {
        $condition['id'] = $_GET['id'];
        $m = M('income');
        $m->where($condition)->delete();
        $this->ajaxReturn('true');
    }
}