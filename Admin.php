<?php
define("APP_DEBUG", true);
//默认加载Admin模块
$_GET['m'] = 'Admin';
//默认加载Admin控制器
$_GET['c'] = 'Admin';

require('./ThinkPHP/Thinkphp.php');
