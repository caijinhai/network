<?php if (!defined('THINK_PATH')) exit();?><html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    
    <meta http-squiv="Content-Type" content="text/html; charset=utf-8">
  
  
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="/Styles/jquery-1.11.0.min.js"></script>
    <!-- 新 Bootstrap 核心 CSS 文件 -->
    <link type="text/css" rel="stylesheet" href="/Styles/bootstrap/bootstrap.min.css">
    <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
	<script src="/Styles/bootstrap/bootstrap.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->

	<link type="text/css" href="/Styles/index.css" rel="stylesheet"></link>

	<script type="text/javascript">
	$(function() {
		document.getElementById('myaudio').play();
	});
	function autoplay(obj) {
		document.getElementById('myaudio').play();
		$("#pic").addClass('rotate');
		$(obj).css('display', 'none');
		$('.jp-play').css('display', 'block');
	}

	function autopause(obj) {
		document.getElementById('myaudio').pause();		
		$("#pic").removeClass('rotate');
		$(obj).css('display', 'none');
		$('.jp-pause').css('display', 'block');
	} 
	</script>

</head>
<body >
	<div class="header1" style="background-image:url(/Uploads/Image/header.jpg);">
		<div class="top1"></div>
		<div class="top2"></div>
		<div class="m-about">
			<div id="logo">
				<div class="playerd">
					<div id="pic" center="center" class="rotate">
						<img src="/Uploads/Image/one.jpg">
					</div>
					
					<div id="jp_container" rel="/Uploads/Music/2651369.m4a" class="jp-audio">
						<div class="jp_control" rel="0">
							<a href="javascript:;"  class="jp-play" onclick="autopause(this)" title="播放" style="display:block">
							
							</a>
							<a href="javascript:;" class="jp-pause" onclick="autoplay(this)" title="暂停" style="display:none">
							
							</a>
						</div>

					</div>


				</div>

			</div>
			<h2 class="tit1">honey</h2>
			<p class="tit2">I'm on the way</P>

		</div>
	</div>
	<audio id="myaudio" src="/Uploads/Music/2651369.m4a"  hidden="true"></audio>
	<div class="row text-center" >
		<div class="col-sm-offset-4 col-md-1 text-center"><a href="/Home/Index">首页</a></div>
		<div class="col-md-1 text-center"><a href="/Home/Index/about">关于我</a></div>
		<div class="col-md-1 text-center"><a href="/Home/Index/liuyan">留言</a></div>
		<div class="col-md-1 text-center">
			<a href="https://github.com/caijinhai">Github</a>
		</div>
	</div>
	<div class="col-sm-offset-2" style="margin-top:20px;">
		content
	</div>


</body>
</html>