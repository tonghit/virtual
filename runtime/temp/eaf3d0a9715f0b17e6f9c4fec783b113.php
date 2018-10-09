<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:71:"E:\wamp64\www\virtual\public/../application/index\view\index\index.html";i:1538125615;s:73:"E:\wamp64\www\virtual\public/../application/index\view\common\header.html";i:1538125401;s:71:"E:\wamp64\www\virtual\public/../application/index\view\common\foot.html";i:1535014000;}*/ ?>
<!doctype html>
<html class="no-js" lang="">

<head> 
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>哈尔滨工业大学 高端装备制造虚拟仿真实验教学中心</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="manifest" href="site.webmanifest">
  <link rel="icon" href="__PUBLIC__/img/favicon.ico">
  <!-- Place favicon.ico in the root directory -->

  <link rel="stylesheet" href="__PUBLIC__/css/normalize.css">
  <link rel="stylesheet" href="__PUBLIC__/css/main.css">
  <link rel="stylesheet" href="__PUBLIC__/css/index.css" />
  <link rel="stylesheet" href="__PUBLIC__/css/bootstrap.min.css" />
  <link rel="stylesheet" href="__PUBLIC__/css/font-awesome.min.css" />
 
 
</head>

<body>
  
  <!-- header start -->
  <header role="banner" class="top-pic clearfix ">
      <img src="__PUBLIC__/img/img1.png" alt="" class="img-responsive" style="height: 145px;width: 100%">
      <div class="navbar-wrapper">
        <div class="container">
            <nav class="navbar navbar-inverse navbar-static-top" id="nav">
                <div class="container" id="fixedMenu">
                    <div class="navbar-header" >
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" >
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <!-- <a href="#" class="navbar-brand">Project name</a> -->
                    </div><!-- navbar-header -->
                    <div id="navbar" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                            <li><a href="<?php echo url('index/index'); ?>">首页</a></li>
                            <li><a href="<?php echo url('zxgk/index'); ?>">中心概况</a></li>
                            <li><a href="<?php echo url('szdw/index'); ?>">师资队伍</a></li>
                            <li><a href="<?php echo url('yxgl/index'); ?>">运行管理</a></li>
                            <li><a href="<?php echo url('syjx/index'); ?>">实验教学</a></li>
                            <li><a href="<?php echo url('jxpt/index'); ?>">教学平台</a></li>
                            <li><a href="<?php echo url('zygx/index'); ?>">资源共享</a></li>
                            <li><a href="<?php echo url('xqhz/index'); ?>">校企合作</a></li>
                            <li><a href="<?php echo url('tscx/index'); ?>">特色创新</a></li>
                            <li><a href="<?php echo url('dxsy/index'); ?>">典型实验</a></li>
                            <li><a href="<?php echo url('admin/login/index'); ?>">登录入口</a></li>
                        </ul>
                    </div>
                </div><!--container -->
            </nav>
        </div><!-- container -->
      </div><!-- navbar-wrapper -->

  </header>
  <!-- header end -->



  <!-- center start -->
 <div class="container">
    <!-- 中心简介 start-->
    <div class="row clearfix" id="zxjs">
      <div class="col-md-8 column">
        <div class="row clearfix">
          <div class="col-md-5 column " id="center-img" >
            <img alt="140x140" src="__PUBLIC__/img/img2.png" class="img-responsive" style="" />
          </div>
          <div class="col-md-7 column">
            <div>
              <h4 class="titleh4">
                中心简介
              </h4>
            </div>
            <content>
              <p >
                “高端装备制造虚拟仿真实验教学中心”隶属于哈尔滨工业大学机电工程学院，是国家级虚拟仿真实验教学中心。哈工大的本科生人才培养目标为培养“学术型拔尖创新人才（科技领军人）、工程应用型拔尖创新人才（工程领军人）”两类人才。中心的成立和建设依据哈工大的人才培...
              </p>
              <span style=""><a href="<?php echo url('index/zxjj'); ?>">【更多】</a>
            </content>
            
          </div>
          
        </div>
      </div>
      <div class="col-md-4 column">
      </div>
    </div>
    <!-- 中心简介 end-->


    <!-- 实验 start -->
    <div class="row clearfix" id="center_two">
      <div class="col-md-8 column">
        <div>
          <h4 class="titleh4">
            实验资源
          </h4>
        </div>
        <div id="content-3-nr1">
            <img src="__PUBLIC__/img/img4.png" usemap="#pmap1">
            <map name="pmap1" id="ptmap1">
                <area shape="rect" coords="1,4,578,57" href ="<?php echo url('syal/index'); ?>" alt="Sun" />
                <area shape="rect" coords="0,70,578,123" href ="<?php echo url('syal/index'); ?>" alt="Sun" />
                <area shape="rect" coords="0,139,578,190" href ="<?php echo url('syal/index'); ?>" alt="Sun" />
            </map>
        </div>

      </div>
      <div class="col-md-4 column" id="tzyw">
        <div>
          <h4 class="titleh4">
          <a href="<?php echo url('tzyw/index'); ?>" style="color: #fff">通知要闻</a>
            
          </h4>
        </div>
        <ul>
        <?php if(is_array($tzyws) || $tzyws instanceof \think\Collection): $i = 0; $__LIST__ = $tzyws;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
          <li><a class="black" href="<?php echo url('tzyw/nn',array('arid'=>$vo['id'])); ?>" target="_blank">
          <?php echo mb_substr($vo['title'],0,15,'utf-8');if(strlen($vo['title'])>15){echo '...';}?></a>
            
            </li>
          <?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>

      </div>
    </div>
    <!-- 实验 end -->

    <!-- 中心环境 start -->
    <div class="row clearfix" id="zxhj">
      <div>
        <h4 class="titleh4">
          中心环境
        </h4>
      </div>
      <!-- 轮播图 start -->
      <div id="colee_left" style="">
        <table cellpadding="0">
            <tbody>
                <tr>
                    <td id="colee_left1" valign="top">
                        <table>
                            <tbody>
                                <tr align="center">
                                    <td>
                                        <a href="#">
                                            <img class="tt" src="__PUBLIC__/img/jxl.jpg" style="width: 300px;height: 210px;margin: 10px" />
                                        </a>
                                    </td>
                                    <td>
                                        <a href="#">
                                            <img class="tt" src="__PUBLIC__/img/jqryjs.jpg" style="width: 300px;height: 210px;margin: 10px"/>
                                        </a>
                                    </td>
                                    
                                    <td>
                                        <a href="#">
                                            <img class="tt" src="__PUBLIC__/img/dxscxcy.png" style="width: 300px;height: 210px;margin: 10px"/>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="#">
                                            <img class="tt" src="__PUBLIC__/img/gygcsys.png" style="width: 300px;height: 210px;margin: 10px"/>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="#">
                                            <img class="tt" src="__PUBLIC__/img/jqrs.png" style="width: 300px;height: 210px;margin: 10px"/>
                                        </a>
                                    </td>
                                    

                                </tr>
                            </tbody>
                        </table>
                    </td>
                    <td id="colee_left2" valign="top">
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
      <!-- 轮播图 end -->
    </div>
    <!-- 中心环境 end -->

  </div>
  <!-- center end -->
  <!-- center end -->

  <!-- footer start -->
  <footer role="contentinfo" >
  <div class="footer-con">
    <div class="col-xs-12 f-stlye">
      <div class="col-xs-4"><a href="#">实验台运行环境插件下载</a></div>
    </div>
  <address class="col-xs-12 address">
    <div class="col-xs-6"><a href="#">建设单位：哈尔滨工业大学??哈尔滨市南岗区西大直街92号</a></div>
    <div class="col-xss-6"><a href="<?php echo url('index/question'); ?>">实验台初始化及运行常见问题指南</a></div>
  </address>
  </div>
</footer>
  <!-- footer end -->
 
  <script src="__PUBLIC__/js/vendor/modernizr-3.6.0.min.js"></script>
  <script src="__PUBLIC__/js/vendor/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script>window.jQuery || document.write('<script src="__PUBLIC__/js/vendor/jquery-3.3.1.min.js"><\/script>')</script>
  <script src="__PUBLIC__/js/plugins.js"></script>
  <script src="__PUBLIC__/js/main.js"></script>
  <script src="__PUBLIC__/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="__PUBLIC__/js/move-top.js"></script>
  <script type="text/javascript" src="__PUBLIC__/js/easing.js"></script>

  
  <script type="text/javascript">
    $(document).ready(function() {
    
      var defaults = {
          containerID: 'toTop', // fading element id
        containerHoverID: 'toTopHover', // fading element hover id
        scrollSpeed: 1200,
        easingType: 'linear' 
      };
      
      
      $().UItoTop({ easingType: 'easeOutQuart' });
      
    });
  </script>
  <a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 1;"></span></a>
</body>

</html>

