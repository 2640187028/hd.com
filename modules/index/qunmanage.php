<?php
/**
 * QQ群管理
 */
class qunmanage extends indexController
{
	function __construct()
	{
		parent::__construct();
        if(is_null($_SESSION['logined_userid']))
        {
            $this->error('请先登陆',spUrl('basic','index')); 
        }else{
            $is_author = FALSE;
            foreach($_SESSION['user_info'][0]['mrole'] as $role)
            {
                if($role['role_id'] == '9')
                {
                    $is_author = TRUE;
                }
            }
            if( ! $is_author)
            {
                $this->error('你不是QQ群主',spUrl('basic','index'));
            }
        }
	}
    //qq群管理主页
    function index()
    {
        $this->uid=$_SESSION['logined_userid'];
        $tj=array('user_id'=>$this->spArgs('s'));
        $myren=spClass('lib_qqgroup');
        $results = $myren->findAll($tj);
        foreach($results as $re_qun)
        {
		      $qun[]=$re_qun;
              $rentj=array('qqgroup_id'=>$re_qun['qqgroup_id']);
              $myrens =$myren->spLinker()->find($rentj);
              $renshu[]=count($myrens['ren']);

        }
        $this->rs = $renshu;
        $this->qun = $qun;
    }
    //QQ群成员列表
    function renlb(){
        $this->uid=$_SESSION['logined_userid'];
        $tj=array('qqgroup_id'=>$this->spArgs('q'));
        $myren=spClass('lib_qqgroup');
        $myrens =$myren->spLinker()->find($tj);
        
    $this->renlb=$myrens['ren'];
    $this->qunhao = $myrens['qun_num'];
    $this->qunname = $myrens['qqgroup_name'];
    $this->qqgroup_id = $myrens['qqgroup_id'];
	
    }
	//QQ群成员删除
	function rendel(){
		$tj=array('user_id'=>$this->spArgs('user_id'));
		$qunlb=spClass('lib_mtoqqgroup');
		
		if($qunlb->delete($tj)){
			$this->success('删除群成员成功', spUrl('qunmanage', 'index',array('s'=>$_SESSION['logined_userid']))); 
		}
	}
	//QQ群成员添加
    function add(){
    $this->uid=$_SESSION['logined_userid'];
    $uids=$_SESSION['logined_userid'];
        if ($_FILES["txt"]["error"] > 0)
            {
            echo "Return Code: " . $_FILES["txt"]["error"] . "<br />";
            }
          else
            {
              move_uploaded_file($_FILES["txt"]["tmp_name"],
              "upload/txt/" . $_FILES["txt"]["name"]);
              $txt= "upload/txt/" . $_FILES["txt"]["name"]; 
            }
                
                $content = file_get_contents($txt);
                
                
                $txtarray = iconv("GBK","UTF-8",$content);
                $txtarray = explode("\r\n",$txtarray);
                 //$patrn="/[^(\d)]/";
                 //$qnamepatrn="/[\d]/";
                 
                foreach($txtarray as $x){
                    //$qqnum[]= preg_replace($patrn,"",$x);
                    //$qqname[]=str_replace('()',"",preg_replace($qnamepatrn,"",$x));
                    $a= mb_strpos($x,"(");
                    $b= mb_strpos($x,")");
                    $qqnum[] = mb_substr($x,$a+1,$b-1-$a);
                    $qqname[]=mb_substr($x,0,$a);
                }
                  $qqtxt=array_combine($qqnum,$qqname);
                 $this->qqtxt=$qqtxt;
            
                
            
              $tj=array('user_id'=>$uids);
              $myren=spClass('lib_qqgroup');
              $results = $myren->findAll($tj);
		      $this->qun=$results;
            
    }
    //QQ群成员添加（单独）
    function quncy_add(){
        
        $data=$this->spArgs();
        $myqun = spClass('lib_mtoqqgroup');
        $user_id=$data['user_id'];
        $member_nickname=$data['member_nickname'];
        $pw=md5('123456');
        $mbarr=array_combine($user_id,$member_nickname);
        foreach($user_id as $u){
            $newdata=array(
            'user_id'=>$u,
            'qqgroup_id'=>$data['qqgroup_id'],
        );
            $myqun->create($newdata);  
            
        }
      
        $qunmember=spClass('lib_member');
        $mtorole =spClass('lib_mtorole');
        $subinfo = spClass('lib_subinfo');
        foreach($mbarr as $k=>$v){
            $newm=array(
                'user_id'=>$k,
                'member_nickname'=>$v,
                'member_pwd'=>$pw,
                 'member_email' => $k.'@qq.com',
                        
            );
              $newrole= array(
                'user_id'=>$k,
                'role_id'=>'1',
              ); 
              $newsubinfo = array(
                'user_id'=>$k,
                'daren_id'=>'123456789',
                'source_id'=>'5',
                
              );
              
              $qunmember->create($newm);
              $mtorole->create($newrole);
              $subinfo->create($newsubinfo);
              
        }
          
        $this->success('QQ群成员添加成功', spUrl('qunmanage', 'index',array('s'=>$_SESSION['logined_userid'])));
        
    }
    //添加新群
    function xinqun(){
        $this->uid=$_SESSION['logined_userid'];
        
    }
    //添加新群后提交的方法
    function xinqun_save(){
        
        $date=$this->spArgs();
        $qqgroup=spClass('lib_qqgroup');
        $newrow=array(
         'qqgroup_name'=>$date['qqgroup_name'],
         'qun_num'=>$date['qun_num'],
         'qun_max'=>$date['qun_max'],
         'user_id'=> $_SESSION['logined_userid']
        );
        $gid=$qqgroup->create($newrow);
        
       $qqzjnew=spClass('lib_mtoqqgroup');
       $newqqzj=array(
            'user_id'=>$date['uid'],
            'qqgroup_id'=>$gid,
       );
       $qqzjnew->create($newqqzj);
       
        $this->success('新键QQ群成功', spUrl('qunmanage', 'index',array('s'=>$date['uid'])));
    }
    
    
    //QQ群公告
    function qqgroup_affiche(){
/**
 *           $data=$this->spArgs();
 *           $aff_time= date("Y-m-d H:i:s");
 *           $new = array(
 *             'qqgroup_id'=>$data['qqgroup_id'],
 *             'aff_content'=>$data['aff_content'],
 *             'aff_time'=>$aff_time,
 *           );
 *           $aff_sql=spClass('lib_qqgroup_affiche');
 *           $aff_sql->create($new);
 *           echo('success');
 */
          $data = $this->spArgs();
          $condition = array(
               'qun_id'=>$data['qqgroup_id'],
               'qq_name'=>$data['qqgroup_name'],
               'qq_num'=>$data['qqgroup_num'],
               'content' => $data['aff_content'],
               'posttime'=>time(),
               'author' => $_SESSION['user_info'][0]['member_nickname']
          );
          $qqgg = spClass('lib_qqgg');
          $qqgg->create($condition);
          $qgroup = spClass('lib_mtoqqgroup');
          $rev = $qgroup->findAll(array('qqgroup_id'=>$data['qqgroup_id']));
          $ggwd = spClass('lib_ggwd');
          foreach($rev as $re)
          {
               $ggwd->incrField(array('user_id'=> $re['user_id']), 'num');
          }
          echo 'success';
    }
    
    
    
}
