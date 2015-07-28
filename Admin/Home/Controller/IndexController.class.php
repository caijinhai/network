<?php
namespace Home\Controller;//命名空间
use Think\Controller;//导入
use Think\Model;
class IndexController extends Controller {
    public function index(){
        //echo phpinfo();
        
        $this->display('index');
    }
    
    public function about() {
        $this->display('about');
    }
    public function liuyan(){
        $this->display('liuyan');
    }
    public function model(){
    	//创建Model基类，传递User表，think_User
    	//$user = D('User');
    	//var_dump($user)
    	//dump($user->select());
        //$user = new Model('User','think_','mysql://root:123456@localohost/thinkphp');
        //没有命令空间时，采用M方法
        //$user = M('User','think_');
        //var_dump($user->select());
        //die(dump($user->getlastsql()));
        //$user = M();
        //var_dump($user -> query("select * from  think_user where id = 1 "));
        //查看字段结构
        //var_dump($user -> getDbfields());


        //sql查询，基本查询
        //$user = M('User');
        //使用字符查询，不推荐使用。安全性能不高
        //var_dump($user -> where('id = 1 AND user="蜡笔小新"') ->select());
        //对象查询
        //$condition['id'] = 1;
        //$condition['user'] = "蜡笔小新";
        //$condition['_logic'] = 'OR';
        //使用数组查询，效果和对象查询一样
        //$conditon = new \stdClass();
        //$condition -> id = 1;
        ///$condition -> user = "蜡笔小新";
        //var_dump($user -> where($condition) -> select());

        //sql查询，表达式查询
        $user = M('User');
        //$map['id'] = array('eq',1);//id=1
        //$map['id'] = array('neq',1);//id不等以1
        //$map['id'] = array('gt',1);//id>1
        //$map['id'] = array('egt',1);//id>=1
        //$map['id'] = array('lt',1);//id<1
        //$map['id'] = array('elt',1);//id<=1
        //$map['user'] = array('like','%小%');
        $map['user'] = array('notlike','%小%');
        //$map['user'] = array('like',array('%小%','%蜡%'));//包含小和蜡的
        //$map['id'] = array('between','1,3');//id从1到3
        //$map['id'] = array('between',array('1','3'));
        //$map['id'] = array('not between',array('1','3'));
        //$map['id'] = array('in',array('1','2','3'));
        //可以自定义
        //$map['id'] = array('exp,'<1');

        var_dump($user -> where($map) -> select());

  




    }
}