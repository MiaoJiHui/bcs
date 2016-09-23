<?php
namespace Home\Controller;
use Think\Controller;
use Think\Exception;

class IndexController extends Controller {
    public function index(){
    	session('server',$_SERVER['HTTP_HOST']);
        $this->display('Index/login');
    }
    public function homepage(){
    	$user = M('user');
    	if($_COOKIE['username']==null)
    	{
            // $this->success('登录超时，请重新登录！','login.html',3);
    		$this->assign('timeout','yes');
            $this->display();
    	}
    	elseif( I('get.content')==null)//如果不是搜索结果页面
    	{
			import('ORG.Util.Page');// 导入分页类
			$m = M('article');
			$user = M('user');
			if($_GET[view]==null)
			{
				$view=5;
			}
			else
			{
				$view=$_GET[view];
			}
			if($_GET['category']!=null)
			{
				session('category2',NULL);//点击一级目录会删除二级目录的session
	            $condition['category']=$_GET['category'];
	            session('category',$_GET['category']);
	            if($_GET['category2']!=null)
                {
		            $condition['category2']=$_GET['category2'];
		            session('category2',$_GET['category2']);   
		        }
	            $condition['is_delete'] = 0;
	        }
			elseif($_GET['region']!=null)
			{	
				$condition['region'] = $_GET['region'];
				if($_SESSION['category']!=null)
				{
					$condition['category']=$_SESSION['category'];
				}
				if($_SESSION['category2']!=null)
				{
					$condition['category2']=$_SESSION['category2'];
				}
				$condition['is_delete'] = 0;
		    }
		    elseif($_GET[uploader]!=null)
		    {
	            $condition['uploader'] = $_GET['uploader'];
	            if($_SESSION['category']!=null)
				{
					$condition['category']=$_SESSION['category'];
				}
	            if($_SESSION['category2']!=null)
				{
					$condition['category2']=$_SESSION[category2];
				}
	            $condition['is_delete'] = 0;
		    }
		    elseif($_GET[difficulty]!=null)
		    {
	            $condition['difficulty'] = $_GET[difficulty];
	            if($_SESSION['category']!=null)
				{
					$condition['category']=$_SESSION['category'];
				}
	            if($_SESSION['category2']!=null)
				{
					$condition['category2']=$_SESSION[category2];
				}
	            $condition['is_delete'] = 0;
		    }
		    elseif($_GET[type]!=null)
		    {
		    	$condition['type'] = $_GET[type];
		    	if($_SESSION['category']!=null)
				{
					$condition['category']=$_SESSION['category'];
				}
		    	if($_SESSION['category2']!=null)
				{
					$condition['category2']=$_SESSION[category2];
				}
		    	$condition['is_delete'] = 0; 
		    }
		    elseif($_GET['shunxu']!=null or $_GET['view_number']!=null)
		    {

		    	if($_SESSION['category']!=null)
				{
					$condition['category']=$_SESSION['category'];
				}
		    	if($_SESSION['category2']!=null)
				{
					$condition['category2']=$_SESSION[category2];
				}
		    	$condition['is_delete'] = 0;
		    }
		    else
		    {
		    	$condition['is_delete'] = 0;
		    	session('category',NULL);
		    	session('category2',NULL);
		    }
            $count = $m->where($condition)->count();
	        $p = getpage($count,$view);
	        if($_GET[shunxu]==null)
	        {
				$list = $m->where($condition)->limit($p->firstRow, $p->listRows)->order('posttime desc')->select();
				foreach($list as $key=>$value){
				            $list[$key]['posttime'] = str_ireplace($value['posttime'],date("Y-m-d",$value['posttime']), $value['posttime']);
				        }
			}
			elseif($_GET[shunxu]=='up')
			{
				$list = $m->field(true)->where($condition)->limit($p->firstRow, $p->listRows)->order('download asc')->select();
			}
			elseif($_GET[shunxu]=='down')
			{
				$list = $m->field(true)->where($condition)->limit($p->firstRow, $p->listRows)->order('download desc')->select();
			}
			foreach($list as $key=>$value)
			{
                $arr=explode('|',$value['picview']);
	            $list[$key]['picview'] = str_ireplace($value['picview'],$arr['0'], $value['picview']);
	        }
			$this->assign('select', $list); // 赋值数据集
			$this->assign('uploader', $_GET[uploader]); // 赋值数据集
			$this->assign('i', $i);
			/*$this->assign('select2', $list2); */// 赋值数据集
	        $this->assign('page', $p->show()); // 赋值分页输出
	        $this->assign('server', $_SESSION['server']);
	        $this->assign('category',$_SESSION['category']);
	        $this->assign('category2',$_SESSION['category2']);
	        $this->assign('view',$view);
	        $this->assign('region',$_GET[region]);
	        $this->assign('type',$_GET[type]);
	        $this->assign('difficulty',$_GET[difficulty]);
	        $this->assign('shunxu',$_GET[shunxu]);
	        $this->assign('user',$_SESSION['username']);
	        $this->assign('name',$_SESSION['name']);
	        $this->assign('group',$_SESSION['group']);
	        $this->display(); 
    	}
    	else//homepage搜索
    	{
    		import('ORG.Util.Page');// 导入分页类
	    	if($_GET[view]==null)
			{
				$view=5;
			}
			else
			{
				$view=$_GET[view];
			}
	        $m = M('article'); 
	    	$title = $_GET['content'];  
	    	$keywords = '%'.$title.'%';  //获取搜索关键字 
	    	$condition['abstract'] = array('like',$keywords);
	    	$condition['title'] = array('like',$keywords);  //用like条件搜索title和content两个字段 
	    	$condition['_logic'] = 'or';
	    	$count = $m->where($condition)->count();
	    	$page=new \Think\Page($count,$limit);
	    	$p = getpage($count,$view); 
	    	$list = $m->where($condition)->limit($p->firstRow, $p->listRows)->order('posttime desc')->select();
	        foreach($list as $key=>$value)
	        {
	            $list[$key]['title'] = str_ireplace($title, " <font class='em_font'>$title</font>", $value['title']);
	            $list[$key]['abstract'] = str_ireplace($title, " <font class='em_font'>$title</font>", $value['abstract']);
	            $list[$key]['posttime'] = str_ireplace($value['posttime'],date("Y-m-d",$value['posttime']), $value['posttime']);
	        }
			$this->assign('select', $list); // 赋值数据集
	        $this->assign('page', $p->show()); // 赋值分页输出
	        $this->assign('server', $_SESSION['server']);
	        $this->assign('content', $title); // 赋值分页输出
	        $this->assign('view',$view);
	        $this->assign('user',$_SESSION['username']);
	        $this->assign('name',$_SESSION['name']);
	        $this->assign('group',$_SESSION['group']);
	        $this->display();
    	}
    }
	public function usercenter_myarticles(){
		unlink($_SESSION['picview']);
		if($_COOKIE['username']==null)
    	{
            // $this->success('登录超时，请重新登录！','login.html',3);
    		$this->assign('timeout','yes');
            $this->display('Index/homepage');
    	}
    	else
    	{
			$group=$_SESSION['group'];
			$pid = $_GET['datetimepicker3'];//区别是在我上传的文章页面还是回收站中搜索时间区间
			if($pid==null)
			{
				$pid=$_GET['pid'];
			}
			if($_GET[view]==null)
			{
				$view=5;
			}
			else
			{
				$view=$_GET[view];
			}
				if($pid==1)//上传的文章
				{
                    $date=strtotime($_GET['datetimepicker1']);
	                $date2=strtotime($_GET['datetimepicker2']);
	                $article_research=$_GET['article_research'];
					$m = M('article');
					$condition['uploader'] = $_SESSION['name'];
					$condition['is_delete'] = 0;
					if($_GET['difficulty']!=null)
			        {
				        $condition['difficulty'] = $_GET['difficulty'];
				    }
			        if($_GET['region']!=null)
			        {
				        $condition['region'] = $_GET['region'];
				    }
				   
				    if($_GET['category']!=null)
			        {
				        $condition['category'] = $_GET['category'];
				    }
				    if($_GET['category2']!=null)
			        {
				        $condition['category2'] = $_GET['category2'];
				    }
				    if($_GET['uploader']!=null)
			        {
				        $condition['uploader'] = $_GET['uploader'];
				    }
				    if($date!=null && $date2!=null)
				    {
			        	$condition['posttime']=array(array('egt',$date),array('elt',$date2));
				    }
				    if($_GET['article_search']!=null)
	                {
		                $article_search=$_GET['article_search'];
		                $keywords = '%'.$article_search.'%';  //获取搜索关键字 
			    		$condition['title'] = array('like',$keywords);
		    		} 
					$count = $m->where($condition)->count();
			        $p1 = getpage($count,$view);
					$list = $m->where($condition)->limit($p1->firstRow, $p1->listRows)->order('posttime desc')->select();
					foreach($list as $key=>$value){
		                    $list[$key]['posttime'] = str_ireplace($value['posttime'],date("Y-m-d H:i:s",$value['posttime']), $value['posttime']);
		                    $list[$key]['updatetime'] = str_ireplace($value['updatetime'],date("Y-m-d H:i:s",$value['updatetime']), $value['updatetime']);
		            }
					$this->assign('select', $list); // 赋值数据集
			        $this->assign('pages', $p1->show()); // 赋值分页输出
			        $this->assign('pid', $pid);
			        $this->assign('user',$_SESSION['username']);
			        $this->assign('server', $_SESSION['server']);
			        $this->assign('view',$view);
			        $this->assign('name',$_SESSION['name']);
			        $this->assign('datetimepicker1',$_GET['datetimepicker1']);
		            $this->assign('datetimepicker2',$_GET['datetimepicker2']);
		            $_GET['category'] = str_ireplace('&','%26', $_GET['category']);
		            $_GET['category2'] = str_ireplace('&','%26', $_GET['category2']);
		            $this->assign('category',$_GET['category']);
		            $this->assign('category2',$_GET['category2']);
		            $this->assign('region',$_GET['region']);
		            $this->assign('article_search', $_GET['article_search']);
		            $this->assign('difficulty', $_GET['difficulty']);
		            $this->assign('uploader', $_GET['uploader']);
			    }
		        elseif($pid==2)
		        {
			        //下载
			        $m = M('article');
			        $condition2['user'] = $_SESSION['name'];
			        $count2 =$m->join('download ON article.pid = download.articleid')->where($condition2)->count();
			        $p2 = ngetpage($count2,$view);
				    $list2 =$m->join('download ON article.pid = download.articleid')->where($condition2)->order('downloadtime desc')->limit($p2->firstRow, $p2->listRows)->select();
				    foreach($list2 as $key=>$value)
				    {
		                    $list2[$key]['downloadtime'] = str_ireplace($value['downloadtime'],date("Y-m-d H:i:s",$value['downloadtime']), $value['downloadtime']);
		                    $list2[$key]['updatetime'] = str_ireplace($value['updatetime'],date("Y-m-d H:i:s",$value['updatetime']), $value['updatetime']);
		            }
			        $this->assign('select', $list2); // 赋值数据集
			        $this->assign('pages', $p2->show()); // 赋值分页输出*/
			        $this->assign('group', $group);
			        $this->assign('server', $_SESSION['server']);     
			        $this->assign('pid', $pid);
			        $this->assign('view',$view);
			        $this->assign('user',$_SESSION['username']);
			        $this->assign('server', $_SESSION['server']);
			        $this->assign('name',$_SESSION['name']);
		        }
		        elseif($pid==3)
		        {
		        	//回收站
		        	$m = M('article');
		        	$date=strtotime($_GET['datetimepicker1']);
	                $date2=strtotime($_GET['datetimepicker2']);
		        	if($_SESSION['group']==2 or $_SESSION['group']==3)
		        	{
		        		$condition['uploader']=$_SESSION['name'];
		        	}
		        	if($_GET['difficulty']!=null)
			        {
				        $condition['difficulty'] = $_GET['difficulty'];
				    }
			        if($_GET['region']!=null)
			        {
				        $condition['region'] = $_GET['region'];
				    }
				   
				    if($_GET['category']!=null)
			        {
				        $condition['category'] = $_GET['category'];
				    }
				    if($_GET['category2']!=null)
			        {
				        $condition['category2'] = $_GET['category2'];
				    }
				    if($_GET['uploader']!=null)
			        {
				        $condition['uploader'] = $_GET['uploader'];
				    }
				    if($date!=null && $date2!=null)
				    {
			        	$condition['deletetime']=array(array('egt',$date),array('elt',$date2));
				    }
				    if($_GET['article_search']!=null)
	                {
		                $article_search=$_GET['article_search'];
		                $keywords = '%'.$article_search.'%';  //获取搜索关键字 
			    		$condition['title'] = array('like',$keywords);
		    		}
					$condition['is_delete'] = 1;
					$count = $m->where($condition)->count();
			        $p1 = getpage($count,$view);
					$list = $m->where($condition)->order('deletetime desc')->limit($p1->firstRow, $p1->listRows)->select();
					foreach($list as $key=>$value){
		                    $list[$key]['posttime'] = str_ireplace($value['posttime'],date("Y-m-d H:i:s",$value['posttime']), $value['posttime']);
		                    $list[$key]['deletetime'] = str_ireplace($value['deletetime'],date("Y-m-d H:i:s",$value['deletetime']), $value['deletetime']);
		                    $list[$key]['updatetime'] = str_ireplace($value['updatetime'],date("Y-m-d H:i:s",$value['updatetime']), $value['updatetime']);
		            }
                    if($_GET['article_search']!=null)
	                {
		                $article_search=$_GET['article_search'];
		                $keywords = '%'.$article_search.'%';  //获取搜索关键字 
			    		$condition['title'] = array('like',$keywords);
		    		}

					$this->assign('select', $list); // 赋值数据集
			        $this->assign('pages', $p1->show()); // 赋值分页输出
			        $this->assign('pid', $pid);
			        $this->assign('user',$_SESSION['username']);
			        $this->assign('server', $_SESSION['server']);
			        $this->assign('view',$view);
			        $this->assign('name',$_SESSION['name']);
			        $this->assign('group',$_SESSION['group']);
			        $this->assign('recycle',1);//用来区分是回收站中还是我的文章列表中搜索分类
			        $this->assign('datetimepicker1',$_GET['datetimepicker1']);
		            $this->assign('datetimepicker2',$_GET['datetimepicker2']);
		            $_GET['category'] = str_ireplace('&','%26', $_GET['category']);
		            $_GET['category2'] = str_ireplace('&','%26', $_GET['category2']);
		            $this->assign('category',$_GET['category']);
		            $this->assign('category2',$_GET['category2']);
		            $this->assign('region',$_GET['region']);
		            $this->assign('article_search', $_GET['article_search']);
		            $this->assign('difficulty', $_GET['difficulty']);
		            $this->assign('uploader', $_GET['uploader']);
		        }
		        elseif($pid==4)//用户中心
		        {
		        	$condition['group'] = array('neq',1);
		        	$m = M('user');
		        	$count = $m->count();
					$p1 = getpage($count,$view);
					$list = $m->order('group2 asc')->limit($p1->firstRow, $p1->listRows)->select();
					$this->assign('select', $list); // 赋值数据集
				    $this->assign('pages', $p1->show()); // 赋值分页输出
				    $this->assign('pid', $pid);
				    $this->assign('user',$_SESSION['username']);
				    $this->assign('server', $_SESSION['server']);
				    $this->assign('view',$view);
		        }
		    $this->assign('name',$_SESSION['name']);
	        $this->assign('group',$_SESSION['group']);
	        $this->display();
	    }
    }
	
    public function article_view(){
    	if($_COOKIE['username']==null)
    	{
            // $this->success('登录超时，请重新登录！','login.html',3);
    		$this->assign('timeout','yes');
            $this->display('Index/homepage');
    	}
    	else
        {
	    	$pid = $_GET['pid'];
	    	$m = M('article'); 
	    	$condition['pid'] = $pid;
	        $select = $m->where($condition)->select();
	        foreach($select as $key=>$value){
	                    $select[$key]['posttime'] = str_ireplace($value['posttime'],date("Y-m-d",$value['posttime']), $value['posttime']);
	            }
	        $this->assign('select',$select);
	        $this->assign('user',$_SESSION['username']);
	        $this->assign('name',$_SESSION['name']);
	        $this->assign('group',$_SESSION['group']);
	        $this->assign('server', $_SESSION['server']);
	    	$this->display();
	    }
    }
	public function article_edit(){
		$edit_id=$_GET['edit_id'];
		$edit_difficulty=$_GET['edit_difficulty'];
		if($edit_id==1 or $edit_id ==2)//上传或修改文章
		{
	    	$pid = $_GET['pid'];
	    	$m = M('article'); 
	    	$condition['pid'] = $pid;
	        $select = $m->where($condition)->select();
	        $categoryall=M('categoryall');//获取所有文章分类
	        $select_category = $categoryall->select();
	        $array_category=explode('|',$select_category['0']['category_one']);
	        $array_categorytwo=explode('|',$select_category['0']['category_two']);
	        $i=count($array_category);
	        $j=count($array_categorytwo);
	        $this->assign('i',$i);
	        $this->assign('j',$j);
	        $this->assign('category_one',$array_category);
	        $this->assign('category_two',$array_categorytwo);
	        $this->assign('select',$select);
	        $this->assign('server', $_SESSION['server']);
	        $this->assign('edit_id', $_GET['edit_id']);
	        $this->assign('name',$_SESSION['name']);
	        $this->assign('group',$_SESSION['group']);
	        $this->assign('pid',$pid);
	    }
	    elseif($edit_id == 4)//添加用户
	    {
            $this->assign('server', $_SESSION['server']);
	        $this->assign('edit_id', $_GET['edit_id']);
	        $this->assign('name',$_SESSION['name']);
	        $this->assign('group',$_SESSION['group']);
	        $this->assign('pid',$pid);
	    }
	    elseif($edit_id == 5)//高级编辑只修改文章难易度
	    {
	    	$pid = $_GET['pid'];
	    	$m = M('article'); 
	    	$condition['pid'] = $pid;
	        $select = $m->where($condition)->select();
	        $categoryall=M('categoryall');//获取所有文章分类
	        $select_category = $categoryall->select();
	        $array_category=explode('|',$select_category['0']['category_one']);
	        $array_categorytwo=explode('|',$select_category['0']['category_two']);
	        $i=count($array_category);
	        $j=count($array_categorytwo);
	        $this->assign('i',$i);
	        $this->assign('j',$j);
	        $this->assign('category_one',$array_category);
	        $this->assign('category_two',$array_categorytwo);
	        $this->assign('select',$select);
	        $this->assign('server', $_SESSION['server']);
	        $this->assign('edit_id', $_GET['edit_id']);
	        $this->assign('name',$_SESSION['name']);
	        $this->assign('group',$_SESSION['group']);
	        $this->assign('pid',$pid);
	    }
    	$this->display();
    }
    public function user_edit(){
		$edit_id=$_GET['edit_id'];
    	$m = M('user'); 
    	$condition['uid'] = $_GET['uid'];
        $select = $m->where($condition)->select();
        $this->assign('select',$select);
        $this->assign('server', $_SESSION['server']);
        $this->assign('edit_id', $_GET['edit_id']);
        $this->assign('name',$_SESSION['name']);
        $this->assign('group',$_SESSION['group']);
    	$this->display('Index/article_edit');
    }	
}


