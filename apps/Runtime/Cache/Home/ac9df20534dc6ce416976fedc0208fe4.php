<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
 <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>i微学</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <meta name="renderer" content="webkit">
  <meta http-equiv="Cache-Control" content="no-siteapp" />
  <link rel="icon" href="/ilearn/Public/logo/favicon.ico">
  <meta name="apple-mobile-web-app-title" content="imicrolearn" />
  <link rel="stylesheet" href="/ilearn/Public/amazeassets/css/amazeui.min.css"/>
  <link rel="stylesheet" href="/ilearn/Public/amazeassets/css/admin.css">
  <link rel="stylesheet" href="/ilearn/Public/i/css/ilearn.css">
<script>
   window.onload=msg;
  
  function msg(){
    var $modal = $('#msg');
    $modal.modal();
  }
  </script>


</head>
<body>
<header class="am-topbar am-topbar-inverse  " id="header"  data-am-sticky="{animation: 'slide-top'}">
  <div id="container" class="headerfix">
  <h1 class="am-topbar-brand">
    <a href="/ilearn  " >&nbsp;&nbsp;&nbsp;&nbsp;i微学&nbsp;&nbsp;&nbsp;&nbsp;</a>
  </h1>

  <button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-success am-show-sm-only" data-am-collapse="{target: '#topnav'}"><span class="am-sr-only">导航切换</span> <span class="am-icon-bars"></span></button>

  <div class="am-collapse am-topbar-collapse" id="topnav">
    <ul class="am-nav am-nav-pills am-topbar-nav">
      <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
      <li class="am-hide-sm-only" ><a href="/ilearn">首页</a></li>
      <li class="am-dropdown am-hide-sm-only" data-am-dropdown>
      <a class="am-dropdown-toggle" data-am-dropdown-toggle href="javascript:;">
          学习方向 <span class="am-icon-caret-down"></span>
        </a>
        <ul class="am-dropdown-content">
          <?php if(is_array($alltype)): $i = 0; $__LIST__ = $alltype;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="/ilearn/course/showonecourse?id=<?php echo ($vo["tid"]); ?>"><?php echo ($vo["tname"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
      </li>
    </ul>

          
       <div class="am-topbar-right">
       
       <a href="/ilearn/way/showway"><button class="am-btn am-btn-success am-topbar-btn am-btn-sm">互动经验</button></a>
      <a href="/ilearn/course/showallcourse"><button class="am-btn am-btn-success am-topbar-btn am-btn-sm">教程总览</button></a>
       <a href="/ilearn/index/indexabout"><button class="am-btn am-btn-primary am-topbar-btn am-btn-sm">简介</button></a>
            <?php if(empty($_SESSION['userinfo'])): ?><a href="/ilearn/user/register"> <button class="am-btn am-btn-primary am-topbar-btn am-btn-sm">注册</button></a>
       <a href="/ilearn/user/login"><button class="am-btn am-btn-primary am-topbar-btn am-btn-sm">登录</button></a> 
            <?php else: ?> 
            <a href="/ilearn/user/userlikecourse">
            <button class="am-btn am-btn-warning am-topbar-btn am-btn-sm"> <?php echo ((isset($_SESSION['userinfo']['unickname']) && ($_SESSION['userinfo']['unickname'] !== ""))?($_SESSION['userinfo']['unickname']):"$Think.session.userinfo.uname"); ?><small>【点我】</small></button>
            </a>
            <a href="/ilearn/user/logout">
            <button class="am-btn am-btn-danger am-topbar-btn am-btn-sm">注销</button>
            </a><?php endif; ?>
        </div>

 
  
  </div>
  </div>
  <div id="colorborder"></div>
</header>




<div id="usertitle" class="am-g">

<div id="container">
<br>
  <div class="am-u-sm-4">
  <img src="/ilearn/Public/logo/imlogo.png" alt="" id="touxiang" class="am-img-responsive" >

  </div>
  <div class="am-u-sm-8 am-u-md-6" >
<h1>分享是美好的品质。</h1>
<small>在这，分享你的经验，你的学习...</small>
  </div>

<div class="am-u-md-2 am-hide-sm-only">
  <?php if(empty($_SESSION['userinfo'])): ?><a href="../user/login"><button type="button" class="am-btn am-btn-success am-btn-block">登录更精彩</button></a>
  <?php else: ?>
  <a href="../user/userlikecourse"><button type="button" class="am-btn am-btn-success am-btn-block">我的收录</button></a><?php endif; ?>
          <br>    
  <a href="../course/showallcourse"><button type="button" class="am-btn am-btn-primary am-btn-block">教程总览</button></a>
  <br>
</div>

</div>
<br>
</div>
<hr>



<div id="container">
<div class="am-g">
<div class="am-u-sm-10 am-u-sm-offset-1">
<form action="../way/addway" method="post">
<article class="am-comment"> <!-- 评论容器 -->

  <div class="am-comment-main" style="box-shadow: 0px 0px 2px 2px #888888;"> <!-- 评论内容容器 -->
    <header class="am-comment-hd">
      <input type="text" class="am-form-field " style="border:none;" placeholder="点击添加标题" required name="wname" />
  
    </header>

    <div class="am-comment-bd" style="padding:5px;">
	<div class="am-form-group" >
      <textarea style="width:100%; border-radius:5px;border:none;"class="" rows="2" id="doc-ta-1" placeholder="点击添加分享内容" required name="wcontent"></textarea>
    </div>

    </div> <!-- 评论内容 -->
  </div>
  <div class="am-g">
  <br>
  	<div class="am-u-sm-4 am-u-sm-offset-4">
  		<button type="submit" class="am-btn am-btn-success am-btn-block">分享</button>
  	</div>

  </div>
  <hr>
</article>
</form>


<?php if(is_array($allway)): $i = 0; $__LIST__ = $allway;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$way): $mod = ($i % 2 );++$i;?><article class="am-comment" > <!-- 评论容器 -->
  <a href=""> 
    <img class="am-comment-avatar" alt="" style="width:50px;height:50px;" src="/ilearn/Public/logo/imlogo.png" /> <!-- 评论者头像 -->   
  </a>

  <div class="am-comment-main" style="box-shadow: 0px 0px 2px 2px #888888; "> <!-- 评论内容容器 -->
    <header class="am-comment-hd">
      <h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo ($way["wtitle"]); ?></h4>
      <div class="am-comment-meta am-text-right"> <!-- 评论元数据 -->
        分享于 <time datetime=""><?php echo ($way["wdate"]); ?></time>
      </div>
    </header>

    <div class="am-comment-bd"><p><?php echo ($way["wcontent"]); ?></p></div> <!-- 评论内容 -->
  </div>
  
</article>
<br><?php endforeach; endif; else: echo "" ;endif; ?>
</div>
</div>
</div>



<hr>

	<footer>
		<div class="am-g">
		<div id="colorborder"></div>
		<div id="footer">
		
		</div>
		<div id="colorborder"></div>
		</div>
	</footer>


<?php if(empty($_SESSION['msg'])): else: ?>
<div class="am-modal am-modal-alert" tabindex="-1" id="msg">
  <div class="am-modal-dialog">
    <div class="am-modal-hd">i微学</div>
    <div class="am-modal-bd">
      <?php echo (session('msg')); ?>
    </div>
    <div class="am-modal-footer">
      <span class="am-modal-btn">确定</span>
    </div>
  </div>
</div>
<?php  unset($_SESSION['msg']); endif; ?>
<script src="/ilearn/Public/amazeassets/js/jquery.min.js"></script>
<script src="/ilearn/Public/amazeassets/js/amazeui.min.js"></script>
<script src="/ilearn/Public/amazeassets/js/app.js"></script>

</body>
</html>