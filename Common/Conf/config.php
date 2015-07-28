<?php
return array(
	//'配置项'=>'配置值'
	//禁止模块访问
	'MODULE_DENY_LIST' => array('Common','Runtime'),
	//允许模块访问
	'MODULE_ALLOW_LIST' => array('Home','Admin'),
	//设置默认访问模块
	'DEFAULT_MODULE' => 'Home',
	//单模块设置
	//'MULTI_MODULE' => false,
    //'DEFAULT_MODULE' => 'Home',
    //设置URL的大小写
    //'URL_CASE_INSENSITIVE' => true,
    //设置PATHINFO的分隔符
    //'URL_PATHINFO_DEPR'=>'_',
    //mysql全局定义

    //连接数据库
    /*
    'DB_TYPE'=>'mysql',
    'DB_HOST'=>'localhost',
    'DB_USER'=>'root',
    'DB_PWD'=>'cjh@php',
    'DB_NAME'=>'thinkphp',
    'DB_PORT'=>'3306',
    'DB_PREFIX'=>'think_',
    'DB_CHARSET'=>'utf8',
    */

    //pdo连接方式
    /*
    'DB_TYPE'=>'pdo',
    'DB_USER'=>'root',
    'DB_PWD'=>'cjh@php',
    'DB_PREFIX'=>'think_',
    'DB_DSN'=>'mysql:host=localhost;dbname=thinkphp;charset=UTF8',
    */

    //调试工具
    'SHOW_PAGE_TRACE' =>true,



);

