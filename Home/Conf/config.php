<?php
return array(
	//'配置项'=>'配置值'
	'URL_ROUTER_ON'         =>  true,   // 是否开启
    'URL_MODEL'             =>  2,      
	// 设置禁止访问的模块列表
    //'MODULE_DENY_LIST' => array('Common','Runtime','Api'),
    //设置允许访问模块列表
    //'MODULE_ALLOW_LIST' => array('Home','Admin','User'),
    //默认访问模块
    //'DEFAULT_MODULE' => 'Home', 
    // 绑定Home模块到当前入口文件
    //define('BIND_MODULE', 'Home'); 
     // 绑定Index控制器到当前入口文件
     //define('BIND_CONTROLLER','Index');
    //兼容模式Url
     //'VAR_PATHINFO' => 'path'
);