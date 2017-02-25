<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>两会聚焦</title>
<link href="<?php echo CSS_PATH;?>/truth/content.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>/truth/head.css" />
<script type="text/javascript" src="<?php echo JS_PATH;?>/truth/jquery-1.8.2.min.js"></script>
</head>

  <body>
  <div class="mybody">
		<div class="head">
			<div class="logo">
				<img src="<?php echo IMG_PATH;?>/truth/logo.png" alt="" />
			</div>
			<div class="logo_right">
				<a href="">添加收藏</a>|<a href="">设为首页</a>|<a href="">联系我们</a>|<a href="">官方邮箱</a>|<a href="">快速导航</a>
			</div>
			<div class="search">
				<input type="text"/>
				<input type="button" />
			</div>
		</div>
		<div class="column">
			<div class="column1">
     <a href="<?php echo APP_PATH;?>index.php">网站首页</a>
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=f3bb00af8d3ea3f99d2d4985d67b7ac5&action=category&catid=0&num=11&order=listorder+ASC&siteid=%24siteid\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'0','order'=>'listorder ASC','siteid'=>$siteid,'limit'=>'11',));}?>
                    <?php $n=1;if(is_array($data)) foreach($data AS $val) { ?>
                   <a href="<?php echo $val['url'];?>"><?php echo $val['catname'];?></a>
                    <?php $n++;}unset($n); ?>
                    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
			</div>
		</div>
	</div>
	<div class="bigpic2"></div>
      <div class="content">
        <div class="thou">
          <p class="song"><a href="index.html">首页</a> &gt;&nbsp;<?php echo catpos($catid,'>');?><a href=""><?php echo $title;?></a></p>
          <br/>
          <div class="left float">
            <h1><?php echo $title;?></h1>
            <h2><span>作者：<?php echo $username;?></span><span>发布日期：<?php echo $updatetime;?></span><span>查看次数：<span id="hits"></span></span></h2>
            <div class="words"> <?php echo $content;?>
            </div>
            <div class="paralp">
              <p><a href="">【上一篇】：<a href="<?php echo $previous_page['url'];?>"><?php echo $previous_page['title'];?></a></a></p>
              <p><a href="">【下一篇】：<a href="<?php echo $next_page['url'];?>"><?php echo $next_page['title'];?></a></a></p>
            </div>
          </div>
          <div class="right float">
          	<div class="tw">
            	<div class="l_title">
                	推荐图文
                </div>
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=1c9d2c9c176e2c8c26d74d908c7fc792&action=position&posid=18&order=listorder+DESC&num=2\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'18','order'=>'listorder DESC','limit'=>'2',));}?>
                        <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
                           <img src="<?php echo $v['thumb'];?>" width="267" height="171" alt="图片" /> 
            <p><a href="<?php echo $v['url'];?>"><?php echo $v['title'];?></a></p>
                        <?php $n++;}unset($n); ?>
                    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
               
            <!--<img src="<?php echo IMG_PATH;?>/truth/tw_1.jpg" width="267" height="171" alt="pic1" /> 
            <p>【两会图刊】再踏征程 扬帆起航</p>
            <img src="<?php echo IMG_PATH;?>/truth/tw_2.jpg" width="267" height="171" alt="pic1" /> 
            <p>习近平出席解放军代表团全体会议</p>-->
            </div>
            <div class="l_top l_top2">
            	<div class="l_title">
                	新闻推荐
                </div>
                <ul>
                 <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=520bfe9839d1d6f54d919cbb7cd49307&action=position&posid=19&order=listorder+DESC&num=6\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'19','order'=>'listorder DESC','limit'=>'6',));}?>
                        <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
                           <li><a href="<?php echo $v['url'];?>"><?php echo $v['title'];?></a></li>
                        <?php $n++;}unset($n); ?>
                    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
               
                	<!--<li><a href="#">习近平的2016两会节奏，两会新语之"意"字篇</a></li>
                    <li><a href="#">张德江看望参加人大会议报道新闻工作者</a></li>
                    <li><a href="#">穿越世界经济迷雾的中国引力：新坐标、新合作...</a></li>
                    <li><a href="#">政府工作报告起草组负责人:为决胜全面小康开...</a></li>
                     <li><a href="#">台湾舆论关注总理记者会涉台表述</a></li>
                    <li><a href="#">无人机视角看提案议案　与你密切相关的“好声音”</a></li>-->
                </ul>
                </div>
        </div>
          </div>
          <div class="clear"></div>
        </div>
      </div>
      
    <div class="footer">
            <div class="footer1">地址：河北省石家庄市南二环东路20号河北师大新校区理科群 联系电话：0311-80786207(校办) 80786204(招生)</div>
              <div class="footer2">版权所有：河北师范大学软件学院<span>访问人数：<?php echo $time;?>   
<?php
function showpages($i)
{
$i = (int)$i;
return $i >= 10000 ? '<b>'.(int)($i / 10000).'</b>万' : '<b>'.$i.'</b>';
}
if($_SESSION[time]==$_POST[time]){
$visit=file_get_contents("index");
$visit=$visit+1;
echo "<font>".showpages($visit)."</font>";
file_put_contents("index",$visit);
}else{
$visit=file_get_contents("index");
echo "<font>".showpages($visit)."</font>";
}
$time=microtime();
$_SESSION[time]=$time;

?></span></div>
      </div>  
  </body>
  <script language="JavaScript" src="<?php echo APP_PATH;?>api.php?op=count&id=<?php echo $id;?>&modelid=<?php echo $modelid;?>"></script>
</html>
