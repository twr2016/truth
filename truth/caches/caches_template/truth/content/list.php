<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>两会聚焦</title>
<link href="<?php echo CSS_PATH;?>/truth/newslist.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>/truth/head.css" />
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
        <a href="<?php echo APP_PATH;?>index.php" style="text-decoration: none;">网站首页</a>
				<!--
        <a href="">两会热文</a>
        <a href="">思想报告</a>
        <a href="">直播摘要</a>
        <a href="">媒体聚焦</a>
        <a href="">文字实录</a>
        <a href="">两会图刊</a>
        <a href="">两会热播</a>
        <a href="">两会热议</a>
        <a href="">意见征集</a>-->
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=fc8830a494e50ec728f3a559662a05ff&action=category&catid=0&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'0','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'20',));}?>
                        <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
                           <a href="<?php echo $v['url'];?>" style="text-decoration: none;"><?php echo $v['catname'];?></a>
                    <?php $n++;}unset($n); ?>
                 <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
			</div>
		</div>
	</div>
	<div class="bigpic2"></div>
      <div class="content">
        <div class="thou">
          <div class="left float">
            <div class="l_top">
            	<div class="l_title">
                	最新消息
                </div>
                <ul>
                   <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=d0501803c0ab44cc8cb8be4d7f849558&action=position&posid=20&order=listorder+DESC&num=6\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'20','order'=>'listorder DESC','limit'=>'6',));}?>
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
            <div class="l_top l_top2">
            	<div class="l_title">
                	热门点击
                </div>
                <ul>
                  <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=05f9cdbbbf92fda68315cb17e17b78ef&action=position&posid=21&order=listorder+DESC&num=6\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'21','order'=>'listorder DESC','limit'=>'6',));}?>
                        <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
                           <li><a href="<?php echo $v['url'];?>"><?php echo $v['title'];?></a></li>
                        <?php $n++;}unset($n); ?>
                    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                <!--
                	<li><a href="#">习近平的2016两会节奏，两会新语之"意"字篇</a></li>
                    <li><a href="#">张德江看望参加人大会议报道新闻工作者</a></li>
                    <li><a href="#">穿越世界经济迷雾的中国引力：新坐标、新合作...</a></li>
                    <li><a href="#">政府工作报告起草组负责人:为决胜全面小康开...</a></li>
                     <li><a href="#">台湾舆论关注总理记者会涉台表述</a></li>
                    <li><a href="#">无人机视角看提案议案　与你密切相关的“好声音”</a></li>-->
                </ul>
            </div>
            </div>
          <div class="right float">
          	<div class="gsgs">
            	<img src="<?php echo IMG_PATH;?>/truth/title.gif" width="47" height="40"  class="th"/>
				<span class="rqt"><?php echo $catname;?></span>
            	<span class="mmb"><a href="<?php echo APP_PATH;?>index.php">首页</a>&nbsp;>&nbsp;<?php echo catpos($catid,'>');?></span>
        	</div>  
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=c3fc382df843ad071b08ca3b602576ce&action=lists&catid=%24catid&num=5&siteid=%24siteid&order=inputtime+DESC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>$catid,'siteid'=>$siteid,'order'=>'inputtime DESC','limit'=>'5',));}?>
<?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
<?php if($n==1) { ?>
<div class="news1 news">
              <img src="<?php echo $v['thumb'];?>" width="208" height="189" alt="新闻" />
                <div class="n_title n_tittle1">
                <h1><a href="<?php echo $v['url'];?>" class="h1_red"><?php echo $v['title'];?></a></h1>
                  <h2 class="h2_red"><span><?php echo date('Y-m-d',$v[inputtime]);?></span></h2>
              </div>
                <div class="tjnr">
                <p class="n_p"><a href="<?php echo $v['url'];?>"><?php echo $v['description'];?></a></p>
</div>
        <h4><a href="<?php echo $v['url'];?>">MORE&gt;&gt;</a></h4>
            </div>

<?php } elseif ($n<4) { ?>
<div class="news">
             <img src="<?php echo $v['thumb'];?>" width="73" height="66" alt="xinwen " />
              <div class="n_tittle">
                  <h1><a href="<?php echo $v['url'];?>" class="h1_b"><?php echo $v['title'];?></a></h1>
                  <h2><?php echo date('Y-m-d',$v[inputtime]);?></h2>
                </div>
              <p class="p2"><a href="<?php echo $v['url'];?>"><?php echo $v['description'];?></a></p>
            </div>
<?php } elseif ($n<6) { ?>
<div class="news">
      <div class="n_tittle">
          <h1><a href="<?php echo $v['url'];?>" class="h1_b"><?php echo $v['title'];?></a></h1>
                  <h2><?php echo date('Y-m-d',$v[inputtime]);?></h2>
              </div>
              <p class="p3"><a href="<?php echo $v['url'];?>"><?php echo $v['description'];?></a></p>
           </div>
<?php } ?>
<?php $n++;}unset($n); ?>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>

           <!--<div class="news1 news">
            	<img src="<?php echo IMG_PATH;?>/truth/listnew.jpg" width="208" height="189" alt="新闻" />
                <div class="n_title n_tittle1">
       	  			<h1><a href="#" class="h1_red">新坐标、新合作、新希望:透视穿越世界的中国引力</a></h1>
                	<h2 class="h2_red"><span>7小时前</span></h2>
             	</div>
                <div class="tjnr">
                <p class="n_p"><a href="#">当前世界经济，可谓“迷雾重重”。旧的增长引擎已经衰减，新的增长动能尚未发力；新的风险正在积聚，不确定性有增无减；主要经济体各有难处，深层博弈增强，协调难度加大。谁能拥有穿越迷雾的眼睛，让世界经济“强劲、可持续和平衡”的增长不再只是梦想？两会刚刚闭幕的中国，备受全球瞩目。当下的供给侧结构性改革，中期的“十三五”规划...</a></p>
</div>
				<h4><a href="#">MORE&gt;&gt;</a></h4>
            </div>
            <div class="news">
             <img src="<?php echo IMG_PATH;?>/truth/news_pic1.gif" width="73" height="66" alt="xinwen " />
            	<div class="n_tittle">
                	<h1><a href="#" class="h1_b">为决胜全面小康开好局、起好步</a></h1>
                	<h2>7小时前</h2>
                </div>
              <p class="p2"><a href="#">国务院向全国人民代表大会报告工作是一项法定职责，也是接受人民监督的重要形式。这份约２万字的报告是如何起草、修改到提交代表委员审议、讨论的？报告与以往相比有何新特点、新亮点？</a></p>
            </div>
            <div class="news">
            <img src="<?php echo IMG_PATH;?>/truth/news_pic2.gif" width="73" height="66" alt="xinwen " />
			<div class="n_tittle">
       	  <h1><a href="#" class="h1_b">新坐标、新合作、新希望:透视穿越世界的中国引力</a></h1>
                	<h2>7小时前</h2>
                </div>
              <p class="p2"><a href="#">当前世界经济，可谓“迷雾重重”。旧的增长引擎已经衰减，新的增长动能尚未发力；新的风险正在积聚，不确定性有增无减；主要经济体各济体各有难处，深层博弈增强，协调难度加大。</a></p>
           </div>
            <div class="news">
			<div class="n_tittle">
       	  <h1><a href="#" class="h1_b">秦市中院召开新闻发布会首次向社会发布典型案例</a></h1>
                	<h2>2015年10月30日</h2>
              </div>
              <p class="p3"><a href="#">日前，第十五届全国“村长”论坛在云南丽江举行。在论坛上，北戴河区北戴河村、费石庄村成功入选“2015中国特色村”，并被吸纳为中国村社发展促进会特色村发展委员会成员单位。</a></p>
           </div>
            <div class="news">
			<div class="n_tittle">
       	  <h1><a href="#" class="h1_b">秦市中院召开新闻发布会首次向社会发布典型案例</a></h1>
                	<h2>2015年10月30日</h2>
              </div>
              <p class="p3"><a href="#">日前，第十五届全国“村长”论坛在云南丽江举行。在论坛上，北戴河区北戴河村、费石庄村成功入选“2015中国特色村”，并被吸纳为中国村社发展促进会特色村发展委员会成员单位。</a></p>
           </div>-->

            <div class="fanye">
            	<ul class="page">
                        	<li>共<?php echo $items;?>条</li>
                            <!--<li><a href="#">上一页</a></li>
                            <li class="underline">1</li>
                            <li><a href="#">2</a></li>
                            <li>...</li>
                            <li><a href="#">5</a></li>
                            <li><a href="#">6</a></li>
                            <li><a href="#">下一页</a></li>--><?php echo $pages;?>
              </ul>
           
        </div>
          </div>
          <div class="clear"></div>
        </div>
      </div>
       <?php include template("content","footer"); ?>