<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:23:"./template/pc/index.htm";i:1590223804;s:55:"D:\phpStudy\PHPTutorial\WWW\bjsh\template\pc\header.htm";i:1590030270;s:55:"D:\phpStudy\PHPTutorial\WWW\bjsh\template\pc\footer.htm";i:1590114750;}*/ ?>
<!DOCTYPE html>
<html>
  <head>
  <title><?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_title"); echo $__VALUE__; ?></title>
  <meta name="renderer" content="webkit" />
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=0,minimal-ui" />
  <meta name="description" content="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_description"); echo $__VALUE__; ?>" />
  <meta name="keywords" content="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_keywords"); echo $__VALUE__; ?>" />
  <link href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_cmspath"); echo $__VALUE__; ?>/favicon.ico" rel="shortcut icon" type="image/x-icon" />
  <?php  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/css/basic.css","","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/css/common.css","","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/css/you.css","","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/css/style.css","","",""); echo $__VALUE__; ?>
  <!--<script type="text/javascript" src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/js/jq.js"></script>
<script type="text/javascript" src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/js/jquery.superslide.2.1.1.js"></script>-->
  <script type="text/javascript" src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/js/jquery.min1.js"></script>
  <!--[if lte IE 9]>
    <?php  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/js/lteie9.js","","",""); echo $__VALUE__; ?>
    <![endif]-->
  </head>
  <!--[if lte IE 8]>
    <div class="text-xs-center m-b-0 bg-blue-grey-100 alert">
    <button type="button" class="close" aria-label="Close" data-dismiss="alert">
        <span>×</span>
    </button>
    你正在使用一个 <strong>过时</strong> 的浏览器。请 <a href=https://browsehappy.com/ target=_blank>升级您的浏览器</a>，以提高您的体验。</div>
<![endif]-->

  <body>
<!--header-s--> 
  <div class="top" style="background: #e3e3e3;height: 30px;line-height: 30px;overflow: hidden;">
    <div class="g_cw clearfix" style="width: 70.5%;padding: 0 10px;margin: 0 auto;">
          <p class="left" style="float: left;color:#393939;font-weight:700;font-size: 14px;"><?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_attr_9"); echo $__VALUE__; ?></p>
          <!--<p class="right" style="float: right;color: #fff;">咨询热线：<b><?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_attr_2"); echo $__VALUE__; ?></b></p>-->
          <!--<p class="right" style="float: right;color: #fff;font-size: 14px;">-->
          	<!--<a target="_blank" href="http://mail.qq.com/cgi-bin/qm_share?t=qm_mailme&email=1243254749@qq.com">发送邮件给我们→</a>-->
          <!--</p>-->
        </div>
  </div>
  <header class="ey-head"> 
   <nav class="navbar navbar-default box-shadow-none ey-nav"> 
    <div class="container"> 
     <div class="row"> 
      <h1 hidden=""><?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_name"); echo $__VALUE__; ?></h1> 
      <div class="navbar-header pull-xs-left"> 
       <a href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_cmsurl"); echo $__VALUE__; ?>/" class="navbar-logo vertical-align block pull-xs-left" title="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_name"); echo $__VALUE__; ?>"> 
        <div class="vertical-align-middle"> 
         <img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_logo"); echo $__VALUE__; ?>" alt="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_name"); echo $__VALUE__; ?>" /> 
        </div> </a> 
      </div>
    
    <div class="db" style="">
      <div class="" style="align-content: 05px;font-size: 24px;line-height: 24px;padding: 20px 0 0 105px;color: #7f7f7f;float: left;">
        <p style="font-size: 18px;">咨询热线</p>
       <span style="color: #b23c42;"> <?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_attr_2"); echo $__VALUE__; ?></span></div>
    </div>
  
     
      <button type="button" class="navbar-toggler hamburger hamburger-close collapsed p-x-5 ey-nav-toggler" data-target="#ey-nav-collapse" data-toggle="collapse">
        <span class="sr-only"></span>
        <span class="hamburger-bar"></span>
      </button> 
       
     </div> 
    </div> 
    </nav> 
    <nav class="navbar navbar-default box-shadow-none ey-nav" style="background: #1d1d1d;">
    <div class="container"> 
      <div class="collapse navbar-collapse navbar-collapse-toolbar pull-md-right p-0" id="ey-nav-collapse"> 
       <ul class="nav navbar-nav navlist"> 
        <li class="nav-item"> <a href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_cmsurl"); echo $__VALUE__; ?>" title="<?php  $tagLang = new \think\template\taglib\eyou\TagLang; $__VALUE__ = $tagLang->getLang('a:1:{s:4:"name";s:5:"yybl1";}'); echo $__VALUE__; ?>" class="nav-link <?php if(\think\Request::instance()->param('m') == 'Index'): ?>active<?php endif; ?>"><?php  $tagLang = new \think\template\taglib\eyou\TagLang; $__VALUE__ = $tagLang->getLang('a:1:{s:4:"name";s:5:"yybl1";}'); echo $__VALUE__; ?></a> </li> 

        <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = ""; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 60; endif; $tagChannel = new \think\template\taglib\eyou\TagChannel; $_result = $tagChannel->getChannel($typeid, "top", "active"); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($_result) ? array_slice($_result,0, $row, true) : $_result->slice(0, $row, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $field["typename"] = text_msubstr($field["typename"], 0, 100, false); $__LIST__[$key] = $_result[$key] = $field;$mod = ($e % 2 );$i= intval($key) + 1;?>
        <li class="nav-item dropdown m-l-10"> <a href="<?php echo $field['typeurl']; ?>" class="nav-link dropdown-toggle <?php echo $field['currentstyle']; ?>" <?php if(!(empty($field['children']) || (($field['children'] instanceof \think\Collection || $field['children'] instanceof \think\Paginator ) && $field['children']->isEmpty()))): ?>data-toggle="dropdown"<?php endif; ?> data-hover="dropdown" aria-haspopup="true" aria-expanded="false"> <?php echo $field['typename']; if(!(empty($field['children']) || (($field['children'] instanceof \think\Collection || $field['children'] instanceof \think\Paginator ) && $field['children']->isEmpty()))): ?><span class="fa fa-angle-down p-l-5"></span><?php endif; ?></a> 
         <?php if(!(empty($field['children']) || (($field['children'] instanceof \think\Collection || $field['children'] instanceof \think\Paginator ) && $field['children']->isEmpty()))): ?>
         <div class="dropdown-menu dropdown-menu-right dropdown-menu-bullet"> 
          <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = ""; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 100; endif;if(is_array($field['children']) || $field['children'] instanceof \think\Collection || $field['children'] instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($field['children']) ? array_slice($field['children'],0,100, true) : $field['children']->slice(0,100, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field2): $field2["typename"] = text_msubstr($field2["typename"], 0, 100, false); $__LIST__[$key] = $_result[$key] = $field2;$mod = ($e % 2 );$i= intval($key) + 1;?>
          <div class="dropdown-item dropdown-submenu"> 
           <a href="<?php echo $field2['typeurl']; ?>" class="dropdown-item col"><?php echo $field2['typename']; ?></a> 
           <?php if(!(empty($field2['children']) || (($field2['children'] instanceof \think\Collection || $field2['children'] instanceof \think\Paginator ) && $field2['children']->isEmpty()))): ?>
           <div class="dropdown-menu animate"> 
            <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = ""; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 100; endif;if(is_array($field2['children']) || $field2['children'] instanceof \think\Collection || $field2['children'] instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($field2['children']) ? array_slice($field2['children'],0,100, true) : $field2['children']->slice(0,100, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field3): $field3["typename"] = text_msubstr($field3["typename"], 0, 100, false); $__LIST__[$key] = $_result[$key] = $field3;$mod = ($e % 2 );$i= intval($key) + 1;?>
            <a href="<?php echo $field3['typeurl']; ?>" class="dropdown-item col"><?php echo $field3['typename']; ?></a> 
            <?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field3 = []; ?>
           </div> 
           <?php endif; ?>
          </div> 
          <?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field2 = []; ?>
         </div>
         <?php endif; ?>
        </li> 
        <?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>

       </ul> 
      </div> 
     </div> 
    </div>
   </nav> 
  </header>  
<!--header-e--> 
<!--main-s-->
  <div class="ey-banner carousel slide" id="exampleCarouselDefault" e-page="index"> 
   <ol class="carousel-indicators carousel-indicators-fall"> 
      <?php  $tagAdv = new \think\template\taglib\eyou\TagAdv; $_result = $tagAdv->getAdv(1, "", ""); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($_result) ? array_slice($_result,0, 10, true) : $_result->slice(0, 10, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field):  if ($i == 0) : $field["currentstyle"] = "active"; else:  $field["currentstyle"] = ""; endif;$mod = ($e % 2 );$i= intval($key) + 1;?>
      <li data-slide-to="<?php echo $key; ?>" data-target="#exampleCarouselDefault" class="<?php echo $field['currentstyle']; ?>"></li>
      <?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>
   </ol> 
   <div class="carousel-inner" role="listbox"> 
    <?php  $tagAdv = new \think\template\taglib\eyou\TagAdv; $_result = $tagAdv->getAdv(1, "", ""); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($_result) ? array_slice($_result,0, 10, true) : $_result->slice(0, 10, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field):  if ($i == 0) : $field["currentstyle"] = "active"; else:  $field["currentstyle"] = ""; endif;$mod = ($e % 2 );$i= intval($key) + 1;?>
    <div class="carousel-item eyou-edit <?php echo $field['currentstyle']; ?>" e-id="<?php echo $field['id']; ?>" e-type="adv">
      <a href="<?php echo $field['links']; ?>" title="<?php echo $field['title']; ?>" <?php echo $field['target']; ?>><img class="w-full" src="<?php echo $field['litpic']; ?>" srcset="<?php echo $field['litpic']; ?> 767w,<?php echo $field['litpic']; ?>" sizes="(max-width: 767px) 767px" /></a>
    </div>
    <?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>
    <a class="left carousel-control" href="#exampleCarouselDefault" role="button" data-slide="prev"> <span class="icon">&lt;</span> <span class="sr-only">Previous</span> </a>
    <a class="right carousel-control" href="#exampleCarouselDefault" role="button" data-slide="next"> <span class="icon">&gt;</span> <span class="sr-only">Next</span> </a>
   </div> 
  </div>
  
    <main class="ey-index-body" e-page="index">
		   <!--产品中心-->
	   <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = "3"; endif; if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 10; endif; $tagChannelartlist = new \think\template\taglib\eyou\TagChannelartlist; $_result = $tagChannelartlist->getChannelartlist($typeid, "self"); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($_result) ? array_slice($_result,0, $row, true) : $_result->slice(0, $row, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$channelartlist): $channelartlist["typename"] = text_msubstr($channelartlist["typename"], 0, 100, false); $__LIST__[$key] = $_result[$key] = $channelartlist;$mod = ($e % 2 );$i= intval($key) + 1;?>
        <!-- 自定义产品中心-->
        <section class=" text-xs-center" style="background-color:#c22f32 ;width: 100%;padding: 30px 0;">
            <div class="container">
                <div class="col-lg-3 text-lg-center" style="color: #fff;">
					<div class="pro-cont" >
						<h2 style="color: #fff;"><?php  $__VALUE__ = isset($channelartlist["typename"]) ? $channelartlist["typename"] : "变量名不存在"; echo $__VALUE__; ?></h2>
						<h4 style="color: #fff;">ABOUT US</h4>
						<div class="text-lg-left font-size-16">
							<?php  $__VALUE__ = isset($channelartlist["seo_description"]) ? $channelartlist["seo_description"] : "变量名不存在"; echo $__VALUE__; ?>
						</div>
						<span  style="display: inline-block; border: 1px solid #fff;padding: 5px;margin-top: 10px;">
						<a href="<?php  $__VALUE__ = isset($channelartlist["typeurl"]) ? $channelartlist["typeurl"] : "变量名不存在"; echo $__VALUE__; ?>">查看更多</a>
						</span>			
					</div>
                </div>
                <div class="col-lg-9 " style="padding: 30px;">
					  <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = ""; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 6; endif; $tagChannel = new \think\template\taglib\eyou\TagChannel; $_result = $tagChannel->getChannel($typeid, "son", ""); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($_result) ? array_slice($_result,0, $row, true) : $_result->slice(0, $row, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $field["typename"] = text_msubstr($field["typename"], 0, 100, false); $__LIST__[$key] = $_result[$key] = $field;$mod = ($e % 2 );$i= intval($key) + 1;?>
						<div class="pro-view col-lg-3 col-xs-12">
							<div style="float: left;">
								<div class="pro-tit"><?php echo $field['typename']; ?></div>
							<span><a href="<?php echo $field['typeurl']; ?>"><查看更多产品></a></span>
							</div>
							<div style="float: right;">
								<img src="<?php echo $field['litpic']; ?>" alt="<?php echo $field['typename']; ?>" >
							</div>
						</div>
						  <?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?> 
                </div>
            </div>
        </section>
        <!-- 自定义产品中心-->
  
 
      <section class="service_list_met_11_3 text-xs-center">
        <div class="container">
        	<div class="head" style="text-align: center;">
            <h2 class="title newpro">产品推荐</h2>
            <span><?php  $__VALUE__ = isset($channelartlist["seo_description"]) ? $channelartlist["seo_description"] : "变量名不存在"; echo $__VALUE__; ?></span>
            <p class="desc newpro" style="margin: 10px auto;"></p>
          </div>
          <!--搜索开始-->
   <!--<div class="i_box1 clearfix">
    <div class="center">
      <div class="i_box1_content clearfix">
        <div class="search" style="margin-bottom: 0;">
          <div class="fr">
          <?php  $tagSearchform = new \think\template\taglib\eyou\TagSearchform; $_result = $tagSearchform->getSearchform("","","","",""); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $mod = ($e % 2 );$i= intval($key) + 1;?>
            <form method="get" action="<?php echo $field['action']; ?>">
              <?php echo $field['hidden']; ?>
              <input class="texta" type="text" name="keywords" placeholder="请输入关键字">
              <input class="btna" type="submit" name="" value="搜索">
            </form>
          <?php ++$e; endforeach;endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>
          </div>
        </div>
        <div class="search">
          <p> <b>热门搜索：</b> <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = "3"; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 8; endif; $tagChannel = new \think\template\taglib\eyou\TagChannel; $_result = $tagChannel->getChannel($typeid, "son", ""); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($_result) ? array_slice($_result,0, $row, true) : $_result->slice(0, $row, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $field["typename"] = text_msubstr($field["typename"], 0, 100, false); $__LIST__[$key] = $_result[$key] = $field;$mod = ($e % 2 );$i= intval($key) + 1;?> <a href="<?php echo $field['typeurl']; ?>"><?php echo $field['typename']; ?></a><?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?> </p>
        </div>
      </div>
    </div>
  </div>-->
          <!--搜索结束-->
        <div class="title-box clearfix" >
            
         <!--   <ul class="tabs ulstyle" style="float: left;">
            <li class="active newpro"> <a href="javascript:void(0);" onClick="tabspro(this);" data-typeid="<?php  $__VALUE__ = isset($channelartlist["typeid"]) ? $channelartlist["typeid"] : "变量名不存在"; echo $__VALUE__; ?>" data-url="<?php  $__VALUE__ = isset($channelartlist["typeurl"]) ? $channelartlist["typeurl"] : "变量名不存在"; echo $__VALUE__; ?>" title="<?php  $__VALUE__ = isset($channelartlist["typename"]) ? $channelartlist["typename"] : "变量名不存在"; echo $__VALUE__; ?>">
              <h3>推荐产品</h3>
              </a> </li>
            <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = ""; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 6; endif; $tagChannel = new \think\template\taglib\eyou\TagChannel; $_result = $tagChannel->getChannel($typeid, "son", ""); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($_result) ? array_slice($_result,0, $row, true) : $_result->slice(0, $row, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $field["typename"] = text_msubstr($field["typename"], 0, 100, false); $__LIST__[$key] = $_result[$key] = $field;$mod = ($e % 2 );$i= intval($key) + 1;?>
            <li class="newpro">
              <a href="javascript:void(0);" onClick="tabspro(this);" data-typeid="<?php echo $field['typeid']; ?>" data-url="<?php echo $field['typeurl']; ?>" title="<?php echo $field['typename']; ?>">
                <h3><?php echo $field['typename']; ?></h3>
              </a>
            </li>
            <?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?> 
          </ul> -->
    <!--      <ul class="tabs ulstyle">
            <li class="active newpro"> <a href="<?php  $__VALUE__ = isset($channelartlist["typeurl"]) ? $channelartlist["typeurl"] : "变量名不存在"; echo $__VALUE__; ?>" onClick="tabspro(this);" data-typeid="<?php  $__VALUE__ = isset($channelartlist["typeid"]) ? $channelartlist["typeid"] : "变量名不存在"; echo $__VALUE__; ?>" data-url="<?php  $__VALUE__ = isset($channelartlist["typeurl"]) ? $channelartlist["typeurl"] : "变量名不存在"; echo $__VALUE__; ?>" title="<?php  $__VALUE__ = isset($channelartlist["typename"]) ? $channelartlist["typename"] : "变量名不存在"; echo $__VALUE__; ?>">
              <h3>MORE+ </h3>
              </a> </li> -->
            <!--<?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = ""; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 100; endif; $tagChannel = new \think\template\taglib\eyou\TagChannel; $_result = $tagChannel->getChannel($typeid, "son", ""); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($_result) ? array_slice($_result,0, $row, true) : $_result->slice(0, $row, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $field["typename"] = text_msubstr($field["typename"], 0, 100, false); $__LIST__[$key] = $_result[$key] = $field;$mod = ($e % 2 );$i= intval($key) + 1;?>
            <li class="newpro">
              <a href="javascript:void(0);" onClick="tabspro(this);" data-typeid="<?php echo $field['typeid']; ?>" data-url="<?php echo $field['typeurl']; ?>" title="<?php echo $field['typename']; ?>">
                <h3><?php echo $field['typename']; ?></h3>
              </a>
            </li>
            <?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?> -->
        <!--  </ul> -->
        </div>
        <ul class="list m-0 clearfix ulstyle tabspro" id="pro_<?php  $__VALUE__ = isset($channelartlist["typeid"]) ? $channelartlist["typeid"] : "变量名不存在"; echo $__VALUE__; ?>">
          <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = ""; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 8; endif; $channelid = ""; $param = array(      "typeid"=> $typeid,      "notypeid"=> "",      "flag"=> "c",      "noflag"=> "",      "channel"=> $channelid, ); $tag = array (
  'row' => '8',
  'titlelen' => '20',
  'infolen' => '22',
  'flag' => 'c',
); $tagArclist = new \think\template\taglib\eyou\TagArclist; $_result = $tagArclist->getArclist($param, $row, "", "","desc","",$tag,"0");if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($_result) ? array_slice($_result,0, $row, true) : $_result->slice(0, $row, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $aid = $field["aid"];$field["title"] = text_msubstr($field["title"], 0, 20, false);$field["seo_description"] = text_msubstr($field["seo_description"], 0, 22, true);$mod = ($e % 2 );$i= intval($key) + 1;?>
            <li class="item col-xs-12 col-md-6 col-lg-41 col-xxl-31 newpro col-xs-12p col-md-6p">
            <div class="content"> <a href="<?php echo $field['arcurl']; ?>" title="<?php echo $field['title']; ?>" target="_self"> <img data-original="<?php echo $field['litpic']; ?>" alt="<?php echo $field['title']; ?>" src="<?php echo $field['litpic']; ?>" style="display: inline;">
              <div class="txt">
              	<h4><?php echo $field['title']; ?></h4>
              <span class="more">MORE</span>
              </div>
              </a> </div>
          </li>
          <?php ++$e; $aid = 0; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>
        </ul>
     <!--   <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = ""; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 100; endif; $tagChannel = new \think\template\taglib\eyou\TagChannel; $_result = $tagChannel->getChannel($typeid, "son", ""); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($_result) ? array_slice($_result,0, $row, true) : $_result->slice(0, $row, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $field["typename"] = text_msubstr($field["typename"], 0, 100, false); $__LIST__[$key] = $_result[$key] = $field;$mod = ($e % 2 );$i= intval($key) + 1;?>
        <ul class="list m-0 clearfix ulstyle tabspro" style="display: none;" id="pro_<?php echo $field['typeid']; ?>">
          <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = $field['typeid']; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 8; endif; $channelid = ""; $param = array(      "typeid"=> $typeid,      "notypeid"=> "",      "flag"=> "",      "noflag"=> "",      "channel"=> $channelid, ); $tag = array (
  'typeid' => '$field.typeid',
  'row' => '8',
  'titlelen' => '20',
  'infolen' => '22',
  'id' => 'field2',
); $tagArclist = new \think\template\taglib\eyou\TagArclist; $_result = $tagArclist->getArclist($param, $row, "", "","desc","",$tag,"0");if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($_result) ? array_slice($_result,0, $row, true) : $_result->slice(0, $row, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field2): $aid = $field2["aid"];$field2["title"] = text_msubstr($field2["title"], 0, 20, false);$field2["seo_description"] = text_msubstr($field2["seo_description"], 0, 22, true);$mod = ($e % 2 );$i= intval($key) + 1;?>
            <li class="item col-xs-12 col-md-6 col-lg-41 col-xxl-31 newpro col-xs-12p col-md-6p">
            <div class="content"> <a href="<?php echo $field2['arcurl']; ?>" title="<?php echo $field2['title']; ?>" target="_self"> <img data-original="<?php echo $field2['litpic']; ?>" alt="<?php echo $field2['title']; ?>" src="<?php echo $field2['litpic']; ?>" style="display: inline;">
              <div class="txt">
              	<h4><?php echo $field['title']; ?></h4>
              <span class="more">MORE</span>
              </div>
              </a> </div>
          </li>
          <?php ++$e; $aid = 0; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field2 = []; ?>
        </ul>
        <?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?> -->
      </section>
    <?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $typeid = $row = ""; unset($channelartlist); ?>
    <!--关于我们-->
    <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = "8"; endif; if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 10; endif; $tagChannelartlist = new \think\template\taglib\eyou\TagChannelartlist; $_result = $tagChannelartlist->getChannelartlist($typeid, "self"); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($_result) ? array_slice($_result,0, $row, true) : $_result->slice(0, $row, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$channelartlist): $channelartlist["typename"] = text_msubstr($channelartlist["typename"], 0, 100, false); $__LIST__[$key] = $_result[$key] = $channelartlist;$mod = ($e % 2 );$i= intval($key) + 1;?>
    <section class="about_list_met_11_3">
      <div class="background">
        <div style="height: 422px;" class="eyou-edit" e-id="206" e-type="upload">
         <?php  $tagUiupload = new \think\template\taglib\eyou\TagUiupload; $__LIST__ = $tagUiupload->getUiupload("206", "index"); if((is_array($__LIST__)) && (!empty($__LIST__["value"]) || (($__LIST__["value"] instanceof \think\Collection || $__LIST__["value"] instanceof \think\Paginator ) && $__LIST__["value"]->isEmpty()))): $field = $__LIST__; ?>
          <?php echo $field['value']; else: ?>
          <img style="display: inline;" src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/images/aboutpic.png" class="">
        <?php endif; ?>
        </div>
      </div>
      <div class="container">
      	<!-- <div class="head" style="text-align: center;">
           <h2 class="title newpro" style="color: #fff;"><?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_attr_19"); echo $__VALUE__; ?></h2>
            <p class="title newpro" style="color: #fff;font-size: 1.3em;font-weight: normal;margin: 0;padding: 0;"><?php  $__VALUE__ = isset($channelartlist["seo_description"]) ? $channelartlist["seo_description"] : "变量名不存在"; echo $__VALUE__; ?></p> 
			<span style="font-size: 1.3em;opacity: 1"><?php  $__VALUE__ = isset($channelartlist["seo_description"]) ? $channelartlist["seo_description"] : "变量名不存在"; echo $__VALUE__; ?></span> 
			<p class="desc newpro" style="margin: 10px auto;"></p> 
          </div> -->
        <div class="about-us col-md-12">
          
          <div class="content">
            <div class="left col-md-5 col-sm-5 fl" >
              <div class="img eyou-edit" e-id="208" e-type="upload" >
                 <?php  $tagUiupload = new \think\template\taglib\eyou\TagUiupload; $__LIST__ = $tagUiupload->getUiupload("208", "index"); if((is_array($__LIST__)) && (!empty($__LIST__["value"]) || (($__LIST__["value"] instanceof \think\Collection || $__LIST__["value"] instanceof \think\Paginator ) && $__LIST__["value"]->isEmpty()))): $field = $__LIST__; ?>
                  <?php echo $field['value']; else: ?>
                  <img style="display: inline;" src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_attr_29"); echo $__VALUE__; ?>" class="">
                <?php endif; ?>
              </div>
            </div>
            <div class="right fl" style="margin-left: 10px;">
              <div class="text" style="visibility: inherit; opacity: 1;">
                <p class="desc newpro">
                	<span style="font-size: 22px;font-weight: bold;margin-bottom: 5px;"><?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_title"); echo $__VALUE__; ?></span>
                <!--  <span><?php  $__VALUE__ = isset($channelartlist["englist_name"]) ? $channelartlist["englist_name"] : "变量名不存在"; echo $__VALUE__; ?></span> -->
               <span>
                <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = ""; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  $tagType = new \think\template\taglib\eyou\TagType; $_result = $tagType->getType($typeid, "self", "single_content"); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator):  $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: $field = $__LIST__;?>
               <?php echo html_msubstr($field['content'],0,225); ?>...
                <?php endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>
               </span>
                <a href="<?php  $__VALUE__ = isset($channelartlist["typeurl"]) ? $channelartlist["typeurl"] : "变量名不存在"; echo $__VALUE__; ?>" title="<?php  $__VALUE__ = isset($channelartlist["typename"]) ? $channelartlist["typename"] : "变量名不存在"; echo $__VALUE__; ?>" class="btn-more fr" target="_blank"><?php  $tagLang = new \think\template\taglib\eyou\TagLang; $__VALUE__ = $tagLang->getLang('a:1:{s:4:"name";s:5:"yybl3";}'); echo $__VALUE__; ?><i class="fa fa-angle-right"></i></a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $typeid = $row = ""; unset($channelartlist); ?>
	<!-- 应用案例 -->
	<?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = "66"; endif; if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 10; endif; $tagChannelartlist = new \think\template\taglib\eyou\TagChannelartlist; $_result = $tagChannelartlist->getChannelartlist($typeid, "self"); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($_result) ? array_slice($_result,0, $row, true) : $_result->slice(0, $row, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$channelartlist): $channelartlist["typename"] = text_msubstr($channelartlist["typename"], 0, 100, false); $__LIST__[$key] = $_result[$key] = $channelartlist;$mod = ($e % 2 );$i= intval($key) + 1;?>
	  <section class="cases text-xs-center" >
		  <div class="container">
			  <div class="col-lg-3 case-left text-lg-center">
				 <h2> <?php  $__VALUE__ = isset($channelartlist["typename"]) ? $channelartlist["typename"] : "变量名不存在"; echo $__VALUE__; ?></h2>
				 <h5><?php  $__VALUE__ = isset($channelartlist["englist_name"]) ? $channelartlist["englist_name"] : "变量名不存在"; echo $__VALUE__; ?></h5>	 
				 <a href="<?php  $__VALUE__ = isset($channelartlist["typeurl"]) ? $channelartlist["typeurl"] : "变量名不存在"; echo $__VALUE__; ?>" title="<?php  $__VALUE__ = isset($channelartlist["typename"]) ? $channelartlist["typename"] : "变量名不存在"; echo $__VALUE__; ?>" class="btn-more " target="_blank"><?php  $tagLang = new \think\template\taglib\eyou\TagLang; $__VALUE__ = $tagLang->getLang('a:1:{s:4:"name";s:5:"yybl3";}'); echo $__VALUE__; ?></a>				  
			  </div>			
			  <div class="col-lg-9 case-right" >
				   <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = "66"; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 6; endif; $channelid = ""; $param = array(      "typeid"=> $typeid,      "notypeid"=> "",      "flag"=> "",      "noflag"=> "",      "channel"=> $channelid, ); $tag = array (
  'typeid' => '66',
  'row' => '6',
); $tagArclist = new \think\template\taglib\eyou\TagArclist; $_result = $tagArclist->getArclist($param, $row, "", "","desc","",$tag,"0");if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($_result) ? array_slice($_result,0, $row, true) : $_result->slice(0, $row, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $aid = $field["aid"];$field["title"] = text_msubstr($field["title"], 0, 100, false);$field["seo_description"] = text_msubstr($field["seo_description"], 0, 160, true);$mod = ($e % 2 );$i= intval($key) + 1;?>
				  <div class="col-lg-4 text-lg-center case-right-yy">
					 <a href="<?php echo $field['arcurl']; ?>"> <img src="<?php echo $field['litpic']; ?>" alt=""></a>
					  <div><span><?php echo $field['title']; ?></span></div>
				  </div>
				
				<?php ++$e; $aid = 0; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?> 
				  
			  </div>
		  </div>		
		</section>
	 <?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $typeid = $row = ""; unset($channelartlist); ?>

<!--新闻资讯-->
 
<section class="service_list_met_11_3 text-xs-center">
	<?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = "2"; endif; if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 10; endif; $tagChannelartlist = new \think\template\taglib\eyou\TagChannelartlist; $_result = $tagChannelartlist->getChannelartlist($typeid, "self"); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($_result) ? array_slice($_result,0, $row, true) : $_result->slice(0, $row, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$channelartlist): $channelartlist["typename"] = text_msubstr($channelartlist["typename"], 0, 100, false); $__LIST__[$key] = $_result[$key] = $channelartlist;$mod = ($e % 2 );$i= intval($key) + 1;?> 
        	<div class="head" style="text-align: center;">
            <h2 class="title newpro"><?php  $__VALUE__ = isset($channelartlist["typename"]) ? $channelartlist["typename"] : "变量名不存在"; echo $__VALUE__; ?></h2>
            <span><?php  $__VALUE__ = isset($channelartlist["seo_description"]) ? $channelartlist["seo_description"] : "变量名不存在"; echo $__VALUE__; ?></span>
            <p class="desc newpro" style="margin: 10px auto;"></p>
          </div>
	<?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $typeid = $row = ""; unset($channelartlist); ?>  	  
<!--新闻动态start-->
<div class="news">
    
    <div class="container">
		<?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = "10"; endif; if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 10; endif; $tagChannelartlist = new \think\template\taglib\eyou\TagChannelartlist; $_result = $tagChannelartlist->getChannelartlist($typeid, "self"); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($_result) ? array_slice($_result,0, $row, true) : $_result->slice(0, $row, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$channelartlist): $channelartlist["typename"] = text_msubstr($channelartlist["typename"], 0, 100, false); $__LIST__[$key] = $_result[$key] = $channelartlist;$mod = ($e % 2 );$i= intval($key) + 1;?> 
        <div class="list1 col-lg-4">
            <div class="news-cat">
                <div class="b"><?php  $__VALUE__ = isset($channelartlist["typename"]) ? $channelartlist["typename"] : "变量名不存在"; echo $__VALUE__; ?></div>
                <div class="e"><a href="<?php  $__VALUE__ = isset($channelartlist["typeurl"]) ? $channelartlist["typeurl"] : "变量名不存在"; echo $__VALUE__; ?>">MORE+</a></div>
            </div>
            <ul>
				 <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = "10"; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 6; endif; $channelid = ""; $param = array(      "typeid"=> $typeid,      "notypeid"=> "",      "flag"=> "",      "noflag"=> "",      "channel"=> $channelid, ); $tag = array (
  'typeid' => '10',
  'limit' => '0,6',
  'titlelen' => '22',
  'infolen' => '160',
  'orderby' => 'add_time',
); $tagArclist = new \think\template\taglib\eyou\TagArclist; $_result = $tagArclist->getArclist($param, $row, "add_time", "","desc","",$tag,"0");if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($_result) ? array_slice($_result,0, $row, true) : $_result->slice(0, $row, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $aid = $field["aid"];$field["title"] = text_msubstr($field["title"], 0, 22, false);$field["seo_description"] = text_msubstr($field["seo_description"], 0, 160, true);$mod = ($e % 2 );$i= intval($key) + 1;if(($i == 1)): ?>
                 <li><a href="<?php echo $field['arcurl']; ?>"><img src="<?php echo $field['litpic']; ?>" width="368px" height="204px" alt=""/></a></li>
				  <?php else: ?>
                <li><a href="<?php echo $field['arcurl']; ?>"><?php echo $field['title']; ?>...</a></li>
				 <?php endif; ++$e; $aid = 0; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>
            </ul>
        </div>
		<?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $typeid = $row = ""; unset($channelartlist);  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = "11"; endif; if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 10; endif; $tagChannelartlist = new \think\template\taglib\eyou\TagChannelartlist; $_result = $tagChannelartlist->getChannelartlist($typeid, "self"); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($_result) ? array_slice($_result,0, $row, true) : $_result->slice(0, $row, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$channelartlist): $channelartlist["typename"] = text_msubstr($channelartlist["typename"], 0, 100, false); $__LIST__[$key] = $_result[$key] = $channelartlist;$mod = ($e % 2 );$i= intval($key) + 1;?>
       <div class="list1 col-lg-4">
           <div class="news-cat">
               <div class="b"><?php  $__VALUE__ = isset($channelartlist["typename"]) ? $channelartlist["typename"] : "变量名不存在"; echo $__VALUE__; ?></div>
               <div class="e"><a href="<?php  $__VALUE__ = isset($channelartlist["typeurl"]) ? $channelartlist["typeurl"] : "变量名不存在"; echo $__VALUE__; ?>">MORE+</a></div>
           </div>
           <ul>
       		 <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = "11"; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 6; endif; $channelid = ""; $param = array(      "typeid"=> $typeid,      "notypeid"=> "",      "flag"=> "",      "noflag"=> "",      "channel"=> $channelid, ); $tag = array (
  'typeid' => '11',
  'limit' => '0,6',
  'titlelen' => '22',
  'infolen' => '160',
  'orderby' => 'add_time',
); $tagArclist = new \think\template\taglib\eyou\TagArclist; $_result = $tagArclist->getArclist($param, $row, "add_time", "","desc","",$tag,"0");if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($_result) ? array_slice($_result,0, $row, true) : $_result->slice(0, $row, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $aid = $field["aid"];$field["title"] = text_msubstr($field["title"], 0, 22, false);$field["seo_description"] = text_msubstr($field["seo_description"], 0, 160, true);$mod = ($e % 2 );$i= intval($key) + 1;if(($i == 1)): ?>
                <li><a href="<?php echo $field['arcurl']; ?>"><img src="<?php echo $field['litpic']; ?>" width="368px" height="204px" alt=""/></a></li>
       		  <?php else: ?>
               <li><a href="<?php echo $field['arcurl']; ?>"><?php echo $field['title']; ?>...</a></li>
       		 <?php endif; ++$e; $aid = 0; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>
           </ul>
       </div>
       <?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $typeid = $row = ""; unset($channelartlist);  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = "80"; endif; if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 10; endif; $tagChannelartlist = new \think\template\taglib\eyou\TagChannelartlist; $_result = $tagChannelartlist->getChannelartlist($typeid, "self"); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($_result) ? array_slice($_result,0, $row, true) : $_result->slice(0, $row, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$channelartlist): $channelartlist["typename"] = text_msubstr($channelartlist["typename"], 0, 100, false); $__LIST__[$key] = $_result[$key] = $channelartlist;$mod = ($e % 2 );$i= intval($key) + 1;?>
        <div class="list1 col-lg-4">
            <div class="news-cat">
                <div class="b"><?php  $__VALUE__ = isset($channelartlist["typename"]) ? $channelartlist["typename"] : "变量名不存在"; echo $__VALUE__; ?></div>
                <div class="e"><a href="<?php  $__VALUE__ = isset($channelartlist["typeurl"]) ? $channelartlist["typeurl"] : "变量名不存在"; echo $__VALUE__; ?>">MORE+</a></div>
            </div>
            <ul>
        		 <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = "80"; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 6; endif; $channelid = ""; $param = array(      "typeid"=> $typeid,      "notypeid"=> "",      "flag"=> "",      "noflag"=> "",      "channel"=> $channelid, ); $tag = array (
  'typeid' => '80',
  'limit' => '0,6',
  'titlelen' => '22',
  'infolen' => '160',
  'orderby' => 'add_time',
); $tagArclist = new \think\template\taglib\eyou\TagArclist; $_result = $tagArclist->getArclist($param, $row, "add_time", "","desc","",$tag,"0");if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($_result) ? array_slice($_result,0, $row, true) : $_result->slice(0, $row, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $aid = $field["aid"];$field["title"] = text_msubstr($field["title"], 0, 22, false);$field["seo_description"] = text_msubstr($field["seo_description"], 0, 160, true);$mod = ($e % 2 );$i= intval($key) + 1;if(($i == 1)): ?>
                 <li><a href="<?php echo $field['arcurl']; ?>"><img src="<?php echo $field['litpic']; ?>" width="368px" height="204px" alt=""/></a></li>
        		  <?php else: ?>
                <li><a href="<?php echo $field['arcurl']; ?>"><?php echo $field['title']; ?>...</a></li>
        		 <?php endif; ++$e; $aid = 0; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>
            </ul>
        </div>
        <?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $typeid = $row = ""; unset($channelartlist); ?>  

    </div>

</div>
<!--新闻动态end-->		  	  
          </section>
 
    <!--</div>-->
  </main>
<!--main-e--> 
<!--footer-s--> 
  <footer class="ey-foot-info p-y-20 border-top1" e-page="footer"> 
   <div class="langcss text-xs-center1 p-b-20"> 
    <div class="container"> 
     <div class="row mob-masonry" style="border-bottom: 1px solid #fff;"> 
     
     
      
      <div style="text-align: left;"  class="col-lg-8 col-md-12 col-xs-12 info masonry-item font-size-20 " m-id="met_contact" m-type="nocontent"> 
       <p class="font-size-20 " >
				<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_name"); echo $__VALUE__; ?>
        </p> 
       <p class="eyou-edit" e-id="web_attr_2" e-type="text" style="font-size: 14px;">
     <?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_attr_25"); echo $__VALUE__; ?>
       </p> 
       
      </div> 
      <div style="float: right;" class="col-lg-2 col-md-12 col-xs-12 info masonry-item font-size-20 fr" m-id="met_contact" m-type="nocontent"> 
       
       <?php if(!(empty($eyou['global']['web_attr_4']) || (($eyou['global']['web_attr_4'] instanceof \think\Collection || $eyou['global']['web_attr_4'] instanceof \think\Paginator ) && $eyou['global']['web_attr_4']->isEmpty()))): ?>
        <img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_attr_4"); echo $__VALUE__; ?>"  width="100" height="100"/> 
        <p style="font-size: 14px; color: #fff;">扫一扫关注我们</p>
       <?php endif; ?>
      </div>
     </div> 
    </div> 
   </div> 
   <div class="copy p-y-10 border-top1"> 
    <!-- <div class="container text-xs-center1"> 
     <p style="font-size: 12px;">
      <?php  $tagFlink = new \think\template\taglib\eyou\TagFlink; $_result = $tagFlink->getFlink("all", ""); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $field["title"] = text_msubstr($field["title"], 0, 15, false); $__LIST__[$key] = $_result[$key] = $field;$mod = ($e % 2 );$i= intval($key) + 1;?>
      <a href='<?php echo $field['url']; ?>' <?php echo $field['target']; ?>><?php echo $field['title']; ?></a>
      <?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>
     </p>
    </div> -->
    <div class="container text-xs-center1"> 
     <p class="eyou-edit" e-id="web_copyright" e-type="text" style="font-size: 12px;">
         <?php  $tagUitext = new \think\template\taglib\eyou\TagUitext; $__LIST__ = $tagUitext->getUitext("web_copyright", "footer"); if((is_array($__LIST__)) && (!empty($__LIST__["value"]) || (($__LIST__["value"] instanceof \think\Collection || $__LIST__["value"] instanceof \think\Paginator ) && $__LIST__["value"]->isEmpty()))): $field = $__LIST__; ?>
          <?php echo $field['value']; else: ?>
          <?php echo htmlspecialchars_decode($global['web_copyright']); ?>--SEO技术支持：<a href="http://www.0917bjms.com/">麦思科技</a>&nbsp;&nbsp;<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_recordnum"); echo $__VALUE__; endif; ?>
     </p>
    </div> 
   </div>  
   <?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_thirdcode_pc"); echo $__VALUE__; ?>
  </footer>
<script>
(function(){
    var bp = document.createElement('script');
    var curProtocol = window.location.protocol.split(':')[0];
    if (curProtocol === 'https') {
        bp.src = 'https://zz.bdstatic.com/linksubmit/push.js';
    }
    else {
        bp.src = 'http://push.zhanzhang.baidu.com/push.js';
    }
    var s = document.getElementsByTagName("script")[0];
    s.parentNode.insertBefore(bp, s);
})();
</script>
  <input type="hidden" name="met_lazyloadbg" value="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/images/loading.gif" /> 
  <?php  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/js/jquery.min.js","","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/js/common.js","","",""); echo $__VALUE__; ?>
  <!-- 应用插件标签 start -->
   <?php  $tagWeapp = new \think\template\taglib\eyou\TagWeapp; $__VALUE__ = $tagWeapp->getWeapp("default"); echo $__VALUE__; ?>
  <!-- 应用插件标签 end --> 
<!--footer-e--> 


<?php  $tagUi = new \think\template\taglib\eyou\TagUi; $__VALUE__ = $tagUi->getUi(); echo $__VALUE__; ?>
</body>
</html>