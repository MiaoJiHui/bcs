<?php
namespace Home\Model;
use Think\Model;
class InformationModel extends Model{
	protected $tablePrefix = "";
	protected $tableName = "income";
	//上传income信息
	public function upload($post){
		$uploaddata = array(
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
			$uploaddata['actual'] = $post['actual'];
		}
		if($post['notes'] != null)
		{
			$uploaddata['notes'] = $post['notes'];
		}
		if($post['invdate'] != null)
		{
			$uploaddata['page'] = $post['invdate'];
		}
		if($post['invcontent'] == 'Ad.')
		{
			$uploaddata['ain'] = $post['invoiceno'];
		}
		if($post['invcontent'] == 'Service')
		{
			$uploaddata['sin'] = $post['invoiceno'];
		}
		if($post['special'] != null)
		{
			$uploaddata['special'] = $post['special'];
		}
    	//写入数据库
        $this->add($uploaddata);
	    return true;
	}
}
?>