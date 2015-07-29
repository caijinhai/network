<?php if (!defined('THINK_PATH')) exit();?><html xmlns="https://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta http-equiv="Content-Type" content="text/html;charset=utf8">
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
                            <a href="javascript:;" class="jp-play" onclick="autopause(this)" title="播放" style="display:block">
                            </a>
                            <a href="javascript:;" class="jp-pause" onclick="autoplay(this)" title="暂停" style="display:none">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <h2 class="tit1">honey</h2>
            <p class="tit2">I'm on the way</p>
        </div>
    </div>
    <audio id="myaudio" src="/Uploads/Music/2651369.m4a" hidden="true"></audio>
    <div class="row " style="text-align:center">
        <div class="col-sm-offset-4 col-md-1 text-center"><a href="/Home/Index">首页</a></div>
        <div class="col-md-1 text-center"><a href="/Home/Index/about">关于我</a></div>
        <div class="col-md-1 text-center"><a class="visited" href="/Home/Index/liuyan">留言</a></div>
        <div class="col-md-1 text-center">
            <a href="https://github.com/caijinhai">Github</a>
        </div>
    </div>
    <div class="content">
        <div class="content-left " id="liuyan-cont">
            <div class="liuyan-top">神评论</div>
            <ul>
                <li class="liuyan-container">
                    <div class="liuyan-container-left">
                        <img src="/Uploads/Image/three.jpg" style="width:60px;height:60px;margin:0;padding:0;"></img>
                    </div>
                    <div class="liuyan-container-right">
                        <div class="liuyan-container1">
                            <p>liuyan1</p>
                        </div>
                        <div class="liuyan-container2">
                            <p>liuyan2</p>
                        </div>
                        <div class="liuyan-container3">
                            <span class="ds-time" datetime="">2015年7月28日</span>
                            <a class="ds-port" href="">
                                <span class="ds-icon ds-icon-reply"></span> 回复
                            </a>
                            <a class="ds-prot" href="">
                                <span class="ds-icon ds-icon-like"></span> 顶()
                            </a>
                            <a class="ds-port" href="">
                                <span class="ds-icon ds-icon-share"></span> 转发
                            </a>
                        </div>
                    </div>
                </li>

                <li class="liuyan-container">
                    <div class="liuyan-container-left">
                        <img src="/Uploads/Image/three.jpg" style="width:60px;height:60px;margin:0;padding:0;"></img>
                    </div>
                    <div class="liuyan-container-right">
                        <div class="liuyan-container1">
                            <p>liuyan1</p>
                        </div>
                        <div class="liuyan-container2">
                            <p>liuyan2</p>
                        </div>
                        <div class="liuyan-container3">
                            <span class="ds-time" datetime="">2015年7月28日</span>
                            <a class="ds-port" href="">
                                <span class="ds-icon ds-icon-reply"></span> 回复
                            </a>
                            <a class="ds-prot" href="">
                                <span class="ds-icon ds-icon-like"></span> 顶()
                            </a>
                            <a class="ds-port" href="">
                                <span class="ds-icon ds-icon-share"></span> 转发
                            </a>
                        </div>
                    </div>
                </li>
                <li class="liuyan-container">
                    <div class="liuyan-container-left">
                        <img src="/Uploads/Image/three.jpg" style="width:60px;height:60px;margin:0;padding:0;"></img>
                    </div>
                    <div class="liuyan-container-right">
                        <div class="liuyan-container1">
                            <p>liuyan1</p>
                        </div>
                        <div class="liuyan-container2">
                            <p>liuyan2</p>
                        </div>
                        <div class="liuyan-container3">
                            <span class="ds-time" datetime="">2015年7月28日</span>
                            <a class="ds-port" href="">
                                <span class="ds-icon ds-icon-reply"></span> 回复
                            </a>
                            <a class="ds-prot" href="">
                                <span class="ds-icon ds-icon-like"></span> 顶()
                            </a>
                            <a class="ds-port" href="">
                                <span class="ds-icon ds-icon-share"></span> 转发
                            </a>
                        </div>
                    </div>
                </li>
                <li class="liuyan-container">
                    <div class="liuyan-container-left">
                        <img src="/Uploads/Image/three.jpg" style="width:60px;height:60px;margin:0;padding:0;"></img>
                    </div>
                    <div class="liuyan-container-right">
                        <div class="liuyan-container1">
                            <p>liuyan1</p>
                        </div>
                        <div class="liuyan-container2">
                            <p>liuyan2</p>
                        </div>
                        <div class="liuyan-container3">
                            <span class="ds-time" datetime="">2015年7月28日</span>
                            <a class="ds-port" href="">
                                <span class="ds-icon ds-icon-reply"></span> 回复
                            </a>
                            <a class="ds-prot" href="">
                                <span class="ds-icon ds-icon-like"></span> 顶()
                            </a>
                            <a class="ds-port" href="">
                                <span class="ds-icon ds-icon-share"></span> 转发
                            </a>
                        </div>
                    </div>
                </li>
                <li class="liuyan-container">
                    <div class="liuyan-container-left">
                        <img src="/Uploads/Image/three.jpg" style="width:60px;height:60px;margin:0;padding:0;"></img>
                    </div>
                    <div class="liuyan-container-right">
                        <div class="liuyan-container1">
                            <p>liuyan1</p>
                        </div>
                        <div class="liuyan-container2">
                            <p>liuyan2</p>
                        </div>
                        <div class="liuyan-container3">
                            <span class="ds-time" datetime="">2015年7月28日</span>
                            <a class="ds-port" href="">
                                <span class="ds-icon ds-icon-reply"></span> 回复
                            </a>
                            <a class="ds-prot" href="">
                                <span class="ds-icon ds-icon-like"></span> 顶()
                            </a>
                            <a class="ds-port" href="">
                                <span class="ds-icon ds-icon-share"></span> 转发
                            </a>
                        </div>
                    </div>
                </li>
                <li class="liuyan-container">
                    <div class="liuyan-container-left">
                        <img src="/Uploads/Image/three.jpg" style="width:60px;height:60px;margin:0;padding:0;"></img>
                    </div>
                    <div class="liuyan-container-right">
                        <div class="liuyan-container1">
                            <p>liuyan1</p>
                        </div>
                        <div class="liuyan-container2">
                            <p>liuyan2</p>
                        </div>
                        <div class="liuyan-container3">
                            <span class="ds-time" datetime="">2015年7月28日</span>
                            <a class="ds-port" href="">
                                <span class="ds-icon ds-icon-reply"></span> 回复
                            </a>
                            <a class="ds-prot" href="">
                                <span class="ds-icon ds-icon-like"></span> 顶()
                            </a>
                            <a class="ds-port" href="">
                                <span class="ds-icon ds-icon-share"></span> 转发
                            </a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="content-right">
            <p>
                网名：honey
                <br></br>
                姓名：蔡金海
                <br></br>
                籍贯：湖北黄冈
                <br></br>
                职业：学生 编程爱好者
                <br></br>
                爱好：运动
                <br></br>
                （I want to be strong man）
                <br></br>
                <img src="/Uploads/Image/zhong3.jpeg" style="width:240px;height:360px;">
            </p>
        </div>
    </div>
    <br/>
    <div class="bottom">
        <p>@honey</p>
        <p>this is an end</p>
        <a href="https://github.com/caijinhai/network" class="git-network">
			Building this with caijinhai
		</a>
    </div>
</body>

</html>