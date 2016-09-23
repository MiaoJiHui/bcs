<?php
namespace Home\Controller;
use Think\Controller;
class UserController extends Controller {
    public function Browsing(){
        if(IS_GET)
        {
            $get = I('get.');
            if($get['account'] != null)
            {
                $a = $get['account'];
                $array = array();
                $array[] = "a.accountid = $a";
            }
            if($get['project'] != null)
            {
                $b = $get['project'];
                $array[] = "a.projectid = $b";
            }
            if($get['size'] != null)
            {
                $c = $get['size'];
                $array[] = "a.sizeid = $c";
            }
            if($get['method'] != null)
            {
                $d = $get['method'];
                $array[] = "a.methodid = $d";
            }
            if($get['sales'] != null)
            {
                $e = $get['sales'];
                $array[] = "a.salesid = $e";
            }
            if($get['invcontent'] == 'Ad.')
            {
                $array[] = "a.ain != ''";
            }
            if($get['invcontent'] == 'Service')
            {
                $array[] = "a.sin != ''";
            }
            if($get['vatspecialinv'] == 'Yes')
            {
                $array[] = "a.special = 'Yes'";
            }
            if($get['vatspecialinv'] == 'No')
            {
                $array[] = "a.special = 'No'";
            }
            if($get['territory'] != null)
            {
                $f = $get['territory'];
                $array[] = "a.territoryid = $f";
            }
            if($get['copy'] == 'Yes')
            {
                $array[] = "a.copy = 'Yes'";
            }
            if($get['copy'] == 'No')
            {
                $array[] = "a.copy = 'No'";
            }
            if($get['search'] != null)
            {
                $g = $get['search'];
                $array[] = "folio like '%$g%' OR cnc like '%$g%' OR cne like '%$g%' OR amount like '%$g%' OR actual like '%$g%' OR notes like '%$g%'";
            }

            $i = count($array);
            $str = $array['0'];
            for($j = 1;$j<$i;$j++)
            {
                $str=$str." AND ".$array[$j];
            }
            if($str != null)
            {
                $str = "WHERE ".$str;
            }
        }
        $field = M('field')->select();
        $Model = new \Think\Model(); // 实例化一个model对象 没有对应任何数据表
        //记录一共有多少数据
        $sql2 = "SELECT count(*) AS count
        FROM income AS a LEFT JOIN account AS b ON (a.`accountid` = b.`id`)
        LEFT JOIN project AS c ON (a.`projectid` = c.`id`)
        LEFT JOIN size AS d ON (a.`sizeid` = d.`id`)
        LEFT JOIN sales AS e ON (a.`salesid` = e.`id`)
        LEFT JOIN territory AS f ON (a.`territoryid` = f.`id`)
        LEFT JOIN method AS g ON (a.`methodid` = g.`id`)
        $str";
        $count = $Model->query($sql2);
        import('ORG.Util.Page');// 导入分页类
        if($_GET[view]==null)
        {
            $view=25;
        }
        else
        {
            $view=$_GET[view];
        }
        $count = $count[0][count];
        $p = getpage($count,$view);
        $limit1 = $p->firstRow;
        $limit2 = $p->listRows;
        $sql = "SELECT a.*, b.companyname, c.projectname, d.sizedsp, e.name AS sales_name, f.tdescription, g.method
        FROM income AS a LEFT JOIN account AS b ON (a.`accountid` = b.`id`)
        LEFT JOIN project AS c ON (a.`projectid` = c.`id`)
        LEFT JOIN size AS d ON (a.`sizeid` = d.`id`)
        LEFT JOIN sales AS e ON (a.`salesid` = e.`id`)
        LEFT JOIN territory AS f ON (a.`territoryid` = f.`id`)
        LEFT JOIN method AS g ON (a.`methodid` = g.`id`)
        $str
        ORDER BY a.id DESC limit $limit1,$limit2";
        $income_data = $Model->query($sql);
        foreach($income_data as $key=>$value)
        {
            if($income_data[$key][ain]!=null)
            {
                array_push($income_data[$key], "ad.");
                array_push($income_data[$key], $income_data[$key][ain]);
            }
            elseif($income_data[$key][sin]!=null)
            {
                array_push($income_data[$key], "service");
                array_push($income_data[$key], $income_data[$key][sin]);
            }
            else
            {
                array_push($income_data[$key], "");
            }
        }
        $account = M('account')->select();
        $project = M('project')->select();
        $size = M('size')->select();
        $method = M('method')->select();
        $sales = M('sales')->select();
        $territory = M('territory')->select();
        $this->assign('account',$account);
        $this->assign('project',$project);
        $this->assign('size',$size);
        $this->assign('method',$method);
        $this->assign('sales',$sales);
        $this->assign('territory',$territory);
        $this->assign('view',$view);
        $this->assign('field',$field);
        $this->assign('income_data',$income_data);
        $this->assign('page', $p->show()); // 赋值分页输出
        $this->assign('get',$get);
        $this->display();
    }
    public function edit(){
        $account = M('account')->select();
        $project = M('project')->select();
        $size = M('size')->select();
        $method = M('method')->select();
        $sales = M('sales')->select();
        $territory = M('territory')->select();
        $this->assign('account',$account);
        $this->assign('project',$project);
        $this->assign('size',$size);
        $this->assign('method',$method);
        $this->assign('sales',$sales);
        $this->assign('territory',$territory);
        $this->display();
    }
    public function edit2(){
        $account = M('account')->select();
        $project = M('project')->select();
        $size = M('size')->select();
        $method = M('method')->select();
        $sales = M('sales')->select();
        $territory = M('territory')->select();
        $get = I('get.');

        $condition['id']= $get['id'];
        $data = M('income')->WHERE($condition)->SELECT();
        if($data[0][ain] != null)
        {
            $a = 'Ad.';
            $b = $data[0][ain];
        }
        if($data[0][sin] != null)
        {
            $a = 'Service';
            $b = $data[0][sin];
        }
        $this->assign('account',$account);
        $this->assign('project',$project);
        $this->assign('size',$size);
        $this->assign('method',$method);
        $this->assign('sales',$sales);
        $this->assign('territory',$territory);
        $this->assign('data',$data);
        $this->assign('a',$a);
        $this->assign('b',$b);
        $this->display();
    }

    public function settings(){
        $account = D('account')->getField('companyname',true);
        $project = D('project')->getField('projectname', true);
        $size =  D('size')->getField('sizedsp', true);
        $method = D('method')->getField('method', true);
        $sales = D('sales')->getField('name', true);
        $territory = D('territory')->getField('tdescription', true);

        $this->assign("account",json_encode($account));
        $this->assign("project",json_encode($project));
        $this->assign("size",json_encode($size));
        $this->assign("method",json_encode($method));
        $this->assign("sales",json_encode($sales));
        $this->assign("territory",json_encode($territory));
        $this->display();
    }
}
