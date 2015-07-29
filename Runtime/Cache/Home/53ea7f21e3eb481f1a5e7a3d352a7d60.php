<?php if (!defined('THINK_PATH')) exit();?><html xmlns="https://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<meta  http-equiv="Content-Type" content="text/html;charset=utf8">
    <script src="/Styles/jquery-1.11.0.min.js"></script>
    <script src="/Styles/bootstrap/bootstrap.min.js"></script>
    <link type="text/css" rel="stylesheet" href="/Styles/bootstrap/bootstrap.min.css"></link>
    <link type="text/css" rel="stylesheet" href="/Styles/index.css"></link>
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
<body>
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
	<div class="row " style="text-align:center" >
		<div class="col-sm-offset-4 col-md-1 text-center"><a  href="/Home/Index">首页</a></div>
		<div class="col-md-1 text-center"><a  class="visited" href="/Home/Index/about">关于我</a></div>
		<div class="col-md-1 text-center"><a href="/Home/Index/liuyan">留言</a></div>
		<div class="col-md-1 text-center">
			<a href="https://github.com/caijinhai">Github</a>
		</div>
	</div>
	<div class="content">
	
		<div class="content-left">
			<h2>Jsut about me </h2>
			<span class="cont-left2  ">
				杨青，女，一个80后草根女站长！09年入行，从业已经有三四年。从搬砖一样的生活方式换成了现 在有“单”而居的日子。当然这个单不是单身的单，跟我的职业相比，爱情脱单并不是问题！虽然极尽苛刻的征婚条件但也远不及客户千奇百怪的要求。告别了朝九晚五，躲过了风吹日晒，虽然不再有阶梯式的工资，但是偶尔可以给自己放放假，挽着老公，一起轻装旅行。<br></br>

            	人生就是一个得与失的过程，而我却是一个幸运者，得到的永远比失去的多。生活的压力迫使我放弃了轻松的前台接待，放弃了体面的编辑，换来虽有些蓬头垢面的工作，但是我仍然很享受那些熬得只剩下黑眼圈的日子，因为我在学习使用Photoshop、Flash、Dreamweaver、ASP、PHP、JSP...中激发了兴趣，然后越走越远....<br></br>

            	在这条路上，我要感谢三个人，第一个是我从事编辑的老板，是他给了我充分学习研究div的时间，第二个人是我的老师，如果不是街上的一次偶遇，如果不是因为我正缺钱，我不会去强迫自己做不会的事情，但是金钱的诱惑实在是抵挡不了，于是我选择了“接招”，东拼西凑的把一个网站做好了，当时还堪称佳作的网站至今已尘归尘土归土了。第三个人，我总说他是我的伯乐，因为我当初应聘技术员的时候，我说我什么都不会，但是他却给了我机会，而我就牢牢的把握了那次机会，直到现在如果不是我主动把域名和空间转出来，我会一直霸占着公司资源，免费下去（可我就偏偏不是喜欢爱占便宜的人，总感觉欠了就得还）...<br></br>

           	 	还要特别感谢一个人，是我的老公。他是我的百科，我不会的，他会，最后我还是不会。博客能做到今天这样，一半都有他的功劳。他不仅仅支持我的事业作为我有力的经济后盾，还毫无怨言的包容我所有工作、生活当中有理无理的坏脾气，曾经我是多么有自己原则的一个人，但是遇到他，打破了我自己毕生坚持的原则，喜欢一句话“冥冥中该来则来，无处可逃”。<br></br>
        	</span>
			    <h2>About my blog</h2>
			<pre class="cont-left1">
域名：        www.network.com      
建站时间：    2015年7月
程序：		   PHP
阶段：        菜鸟  》》》 神
word:         菜鸟不可怕，可怕的是永远是菜鸟
		    </pre>
		</div>
	
	    <div class="content-right">
			<p>
				网名：honey<br></br>

				姓名：蔡金海<br></br>

				籍贯：湖北黄冈<br></br>

				职业：学生 编程爱好者<br></br>

				爱好：运动<br></br>

			   （I want to be strong man）<br></br>

				<img src="/Uploads/Image/zhong3.jpeg" style="width:240px;height:360px;">
			</p>
		</div>
	</div>
	<div class="bottom">
		<footer>
			<h4>@honey</h4>
			<p>this is an end</p>
			<a href="https://github.com/caijinhai/network" class="git-network">
				Building this with caijinhai
			</a>
		</footer>
	</div>
</body>
</html>