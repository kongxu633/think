<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {
	/**
	 * 首页
	 */
    public function index(){

    	//echo __ROOT__;

    	// U 方法生成链接
    	//echo U('show',array('uid'=>1),'',0,true);
    	//die();


    	//p($_GET);
    	//die();

    	$wish = M('wish')->select();

    	//p($wish);

 		$this->assign('wish',$wish)->display();
    }

    public function show(){
    	echo I('uid');
    }

    /**
     *  表单处理
     */
    public function handle(){
    	//var_dump(IS_POST);

    	if(!IS_POST){
    		//halt('页面不存在');
    		_404('页面不存在',U('index'));
    	}

    	//p(I('post.'));

    	$data = array(
    		'username' => I('username','','htmlspecialchars'),
    		'content' => I('content','','htmlspecialchars'),
    		'time' => time()
    	);

    	$id = M('wish')->data($data)->add();

    	echo $id;

    	if($id){
    		$this->success('发布成功','index');
    	} else {
    		$this->error('发布失败，请重试...');
    	}

    }
}