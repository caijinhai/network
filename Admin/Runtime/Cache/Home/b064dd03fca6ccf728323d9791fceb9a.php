<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>honey's home </title>
    <mate name="description" content="技术博客 博客主题 PHP Linux">

    <!-- Bootstrap -->
    <link href="/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="/Styles/home.css" rel="stylesheet">
    <link rel="shortcut icon" href="/Uploads/Image/three.jpg">
</head>
<body>
    <div class="1-header" background-image="url(/Uploads/Image/three.jpg)">
        <div class="hdbg"></div>
        <div class="hdbg2"></div>
        <div class="m-about">
            <div class="logo">
                <div class="playerd">
                    <div id="pic" center="center" >
                        <img src="/Uploads/Image/one.jpg" ></img>
                    </div>
                    <div id="jp_container"  rel="/Uploads/music/2651369.m4a">
                        <div style="text-align:center" rel="0">
                            <a href="javascript:;" class="jp-play" title="播放" style="display:block;">
                            </a>
                            <a href="javascript:;" class="jp-pause" titl="暂停" style="display:none;">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
    </div>
            <h1 class="header_one">honey</h1>
            <h2 class="header_two">I'm on my way</h2>    
    
 
    

	 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript">

        var calcHeight = function() {
        var headerDimensions = $('#header-bar').height();
        $('#preview-frame').height($(window).height() - headerDimensions);
      }
      
      $(document).ready(function() {
        calcHeight();
        $('#header-bar a.close').mouseover(function() {
          $('#header-bar a.close').addClass('activated');
        }).mouseout(function() {
          $('#header-bar a.close').removeClass('activated');
        });
      });
      
      $(window).resize(function() {
        calcHeight();
      }).load(function() {
        calcHeight();
      });
      </script>
</body>
</html>