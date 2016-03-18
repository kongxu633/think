<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {
    public function index(){

 		$db =  M('user');
 		$result = $db->select();
 		dump($result);
 		
    }

    public function delete(){
    	echo " this is del func";
    }
}