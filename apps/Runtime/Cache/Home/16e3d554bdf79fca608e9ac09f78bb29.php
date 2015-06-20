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
    <a href="/ilearn/" >&nbsp;&nbsp;&nbsp;&nbsp;i微学&nbsp;&nbsp;&nbsp;&nbsp;</a>
  </h1>

  <button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-success am-show-sm-only" data-am-collapse="{target: '#topnav'}"><span class="am-sr-only">导航切换</span> <span class="am-icon-bars"></span></button>

  <div class="am-collapse am-topbar-collapse" id="topnav">
    <ul class="am-nav am-nav-pills am-topbar-nav">
      <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
      <li class="am-hide-sm-only" ><a href="/ilearn/">首页</a></li>
      <li class="am-dropdown am-hide-sm-only" data-am-dropdown>
      <a class="am-dropdown-toggle" data-am-dropdown-toggle href="javascript:;">
          学习方向 <span class="am-icon-caret-down"></span>
        </a>
        <ul class="am-dropdown-content">
          <?php if(is_array($alltype)): $i = 0; $__LIST__ = $alltype;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="/ilearn/course/typecourse?id=<?php echo ($vo["tid"]); ?>"><?php echo ($vo["tname"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
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
            <button class="am-btn am-btn-warning am-topbar-btn am-btn-sm"> <?php echo ((isset($_SESSION['userinfo']['unickname']) && ($_SESSION['userinfo']['unickname'] !== ""))?($_SESSION['userinfo']['unickname']):"我是昵称"); ?><small>【点我】</small></button>
            </a>
            <a href="/ilearn/user/logout">
            <button class="am-btn am-btn-danger am-topbar-btn am-btn-sm">注销</button>
            </a><?php endif; ?>
        </div>

 
  
  </div>
  </div>
  <div id="colorborder"></div>
</header>






<div id="allcoursetitle" style="background:#888888; line-height:100%;" >
		<div id="container" >
			<div class="am-g">
			<div class="am-u-sm-3">
				<img src="/ilearn/Public/images/typeimg/<?php echo ($nowtype["timg"]); ?>.jpg" alt="" 
				class="am-img-responsive am-hide-sm-only" style="max-height:130px;">

			</div>
				<div class="am-u-sm-3  am-u-md-2">
				<br>
  	<?php if(empty($_SESSION['userinfo'])): ?><a href="../user/login"><button type="button" class="am-btn am-btn-success am-btn-block">登录更精彩</button></a>
  	<?php else: ?>
  	<a href="../course/showaddcourse"><button type="button" class="am-btn am-btn-success am-btn-block">分享教程</button></a><?php endif; ?> 
  	<br> 
  <a href="../way/showway"><button type="button" class="am-btn am-btn-primary am-btn-block">经验互动</button></a>
  <br>
</div>

			</div>
		
		</div>
</div>
	<br>
			<div id="container">
				<div class="am-g">		
	
	<div class="admin-sidebar am-offcanvas am-u-md-4 am-u-lg-3" style="padding:0;" id="sidebar">
    <div class="am-offcanvas-bar admin-offcanvas-bar">
      <ul id="cebian" class="am-list admin-sidebar-list am-text-center">
      <li><br></li>
      <li><a href="/ilearn/course/showallcourse">教程总览<span class="am-icon-angle-right am-fr am-margin-right"></span></a></li>
      <?php if(is_array($alltype)): $i = 0; $__LIST__ = $alltype;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$t): $mod = ($i % 2 );++$i;?><li>
        <a href="/ilearn/course/typecourse?id=<?php echo ($t["tid"]); ?>">
  		<?php echo ($t["tname"]); ?><span class="am-icon-angle-right am-fr am-margin-right"></span></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
        
		<?php if(empty($_SESSION['userinfo'])): ?><li><a href="/ilearn/user/login"><span class="am-icon-home"></span> 登录后更精彩...<span class="am-icon-angle-right am-fr am-margin-right"></span></a>
        </li>
		<?php else: ?>
        <li><a href="/ilearn/user/userlikecourse"><span class="am-icon-home"></span> 我的收录<span class="am-icon-angle-right am-fr am-margin-right"></span></a>
        </li><?php endif; ?>
    
      </ul>

      <div class="am-panel am-panel-default admin-sidebar-panel">
        <div class="am-panel-bd">
          <p><span class="am-icon-bookmark"></span> 寄语</p>
          <p>时光静好，与君语；<br>细水流年，与君同。<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;—— i微学</p>
        </div>
      </div>


    </div>
  </div>

  <a class="am-icon-btn am-icon-th-list am-show-sm-only admin-menu" 
    data-am-offcanvas="{target: '#sidebar'}"></a>

	 		<div class="am-u-md-8 am-u-lg-9  am-u-sm-10 am-u-sm-centered am-u-md-uncentered">
			<div class="am-g">
			<div class="am-u-sm-10 am-show-sm-only">
			<br>
			<h1><?php echo ($nowtype["tname"]); ?></h1>
			</div>
			<?php if(is_array($showtypecourse)): $i = 0; $__LIST__ = $showtypecourse;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$tc): $mod = ($i % 2 );++$i;?><div class="am-u-sm-12  am-u-md-4 am-u-lg-3 am-u-end">
					
					<div class="am-panel am-panel-secondary am-scrollspy-init am-scrollspy-inview am-animation-fade" data-am-scrollspy="{animation: 'fade', delay: 300}">

					<div class="am-panel-hd">
					<a href="/ilearn/course/showonecourse?id=<?php echo ($tc["cid"]); ?>"><?php echo ($tc["cname"]); ?></a></div>
					

					<div class="am-panel-bd">
					<?php echo ($tc["ctitle"]); ?>
					</div>
					</div>

				</div><?php endforeach; endif; else: echo "" ;endif; ?>
			</div>
				
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