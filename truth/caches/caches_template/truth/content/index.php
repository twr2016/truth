<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>/truth/index.css" />
<link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>/truth/head.css" />
<script type="text/javascript" src="<?php echo JS_PATH;?>/truth/index.js"></script>
<title>全国两会</title>
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
				<input type="button"/>
			</div>
		</div>
		<div class="column">
			<div class="column1">
			    <a href="">网站首页</a>
				<!--<a href="">两会热文</a>
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
                           <a href="<?php echo $v['url'];?>"><?php echo $v['catname'];?></a>
                    <?php $n++;}unset($n); ?>
                 <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>

			</div>
		</div>
	</div>
	<div class="bigpic"></div>
	<div class="mybody">
		<div id="content_one">
			<div class="longtitle">
				<img src="<?php echo IMG_PATH;?>/truth/title.gif" width="47px" height="39px" alt="" />
				<div class="checkOut">
					<a href="<?php echo APP_PATH;?>index.php?m=content&c=index&a=lists&catid=9">查看更多</a>
				</div>
				<div class="fontStyle">
					两会热文
				</div>
			</div>
			<div class="somenews_on1">
				<!--<div class="news">1
					<img src="<?php echo IMG_PATH;?>/truth/1.jpg" height="186px" width="315px" alt="" />
					<div class="title1">
						<a href="#">十二届全国人大四次会议在京闭幕</a>
					</div>
					<span class="title1_content">
						3月16日，国务院总理李克强在北京人民大会堂与中外记者见面，并回答记者提问。这是李克强步入会场。
					</span>
				</div>
				<div class="news">2
					<img src="<?php echo IMG_PATH;?>/truth/2.jpg" height="186px" width="315px" alt="" />		
					<div class="title1">
						<a href="#">李克强总理与中外记者见面</a>
					</div>
					<span class="title1_content">
						3月16日，十二届全国人大四次会议在北京人民大会堂闭幕。习近平、李克强、俞正声、刘云山、王岐山、张高丽等党和国家领导人在主席台就座。
					</span>
				</div>
				<div class="news" style="margin-right:16px">3
					<img src="<?php echo IMG_PATH;?>/truth/3.jpg" height="186px" width="315px" alt="" />
					<div class="title1">
						<a href="#">为决胜全面小康开好局、起好步</a>
					</div>
					<span class="title1_content">
						3月16日上午，十二届全国人大四次会议在人民大会堂举行闭幕大会。大会通过了李克强总理代表国务院所作的政府工作报告。
					</span>
				</div>
				<div class="news" style="display: none;">
					<img src="<?php echo IMG_PATH;?>/truth/8.jpg" height="186px" width="315px" alt=""  />		
					<div class="title1">
						<a href="#">“十三五”规划纲要：发展多层次股权融资市场</a>
					</div>
					<span class="title1_content">
						“十三五”规划纲要明确金融体制改革目标，发展多层次股权融资市场，改革并完善适应现代金融市场发展的金融监管框架。
					</span>
				</div>
				<div class="news" style="display:none;">
					<img src="<?php echo IMG_PATH;?>/truth/8.jpg" height="186px" width="315px" alt=""  />		
					<div class="title1">
						<a href="#">2016全国两会八大看点</a>
					</div>
					<span class="title1_content">
						 3月16日，十二届全国人大四次会议在北京人民大会堂闭幕。习近平、李克强、俞正声、刘云山、王岐山、张高丽等党和国家领导人在主席台就座。
					</span>
				</div>
				<div class="news" style="display:none;">
					<img src="<?php echo IMG_PATH;?>/truth/9.jpg" height="186px" width="315px" alt="" />		
					<div class="title1">
						<a href="#">李克强总理与中外记者见面</a>
					</div>
					<span class="title1_content">
						3月16日，十二届全国人大四次会议在北京人民大会堂闭幕。习近平、李克强、俞正声、刘云山、王岐山、张高丽等党和国家领导人在主席台就座。
					</span>
				</div>-->

				<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=60b12d980fb1c85245e15751ef42bf24&action=lists&catid=9&order=id+ASC&number=3\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'9','order'=>'id ASC','number'=>'3','limit'=>'20',));}?>
                    <?php $n=1;if(is_array($data)) foreach($data AS $val) { ?>
                     <?php if($val['id']%6>3) { ?>
				 <div class="news" style="display:none;">
					<img src="<?php echo $val['thumb'];?>" height="186px" width="315px" alt="<?php echo $val['title'];?>" />
					<div class="title1">
						<a href="<?php echo $val['url'];?>"><?php echo $val['title'];?></a>
					</div>
					<span class="title1_content">
						<?php echo $val['description'];?>
					</span>
				</div>
                    <?php } elseif ($val['id']%6==0) { ?>
                   <div class="news" style="display:none;">
					<img src="<?php echo $val['thumb'];?>" height="186px" width="315px" alt="<?php echo $val['title'];?>" />
					<div class="title1">
						<a href="<?php echo $val['url'];?>"><?php echo $val['title'];?></a>
					</div>
					<span class="title1_content">
						<?php echo $val['description'];?>
					</span>
				</div>
				<?php } elseif ($val['id']%6==1) { ?>
				<div class="news" style="margin-right:60px">
					<img src="<?php echo $val['thumb'];?>" height="186px" width="315px" alt="<?php echo $val['title'];?>" />
					<div class="title1">
						<a href="<?php echo $val['url'];?>"><?php echo $val['title'];?></a>
					</div>
					<span class="title1_content">
						<?php echo $val['description'];?>
					</span>
				</div>
				<?php } elseif ($val['id']%6==2) { ?>
				<div class="news">
					<img src="<?php echo $val['thumb'];?>" height="186px" width="315px" alt="<?php echo $val['title'];?>" />
					<div class="title1">
						<a href="<?php echo $val['url'];?>"><?php echo $val['title'];?></a>
					</div>
					<span class="title1_content">
						<?php echo $val['description'];?>
					</span>
				</div>
				<?php } elseif ($val['id']%6==3) { ?>
				<div class="news" style="margin-right:16px">
					<img src="<?php echo $val['thumb'];?>" height="186px" width="315px" alt="<?php echo $val['title'];?>" />
					<div class="title1">
						<a href="<?php echo $val['url'];?>"><?php echo $val['title'];?></a>
					</div>
					<span class="title1_content">
						<?php echo $val['description'];?>
					</span>
				</div>
                    <?php } ?> 
                    <?php $n++;}unset($n); ?>
                    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                <div class="page_left">
                	<input type="button"  id="button_left" />
                </div>
                <div class="page_right">
                	<input type="button"  id="button_right" />
                </div>
			</div>
		</div>
		<!--content_two-->
	</div>
		<div class="content_two">
			<div class="mybody">
				<div class="longtitle">
					<img src="<?php echo IMG_PATH;?>/truth/title.gif" width="47px" height="39px" alt="" />
					<div class="checkOut">
						<a href="<?php echo APP_PATH;?>index.php?m=content&c=index&a=lists&catid=10">查看更多</a>
					</div>
					<div class="fontStyle">
						思想报告
					</div>
				</div>
				<div class="myreport">
					<!--<div class="report" style="margin-left:20px">
						<img src="<?php echo IMG_PATH;?>/truth/4.jpg" height="125px" width="205px" alt="" />
						<div class="title2">
							<a href="#">谈观看两会的体会</a>
						</div>
					</div>
					<div class="report">
						<img src="<?php echo IMG_PATH;?>/truth/5.jpg" height="125px" width="205px" alt="" />
						<div class="title2">
							<a href="#">入党积极分子的思想报告</a>
						</div>
					</div>
					<div class="report">
						<img src="<?php echo IMG_PATH;?>/truth/6.jpg" height="125px" width="205px" alt="" />
						<div class="title2">
							<a href="#">迈上新征程</a>
						</div>
					</div>
					<div class="report">
						<img src="<?php echo IMG_PATH;?>/truth/7.jpg" height="125px" width="205px" alt="" />
						<div class="title2">
							<a href="#">实现伟大中国梦</a>
						</div>
					</div>
					-->
					<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=4e37d6f7601d39c584128b0c36a2f245&action=lists&catid=10&order=id+ASC&number=4\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'10','order'=>'id ASC','number'=>'4','limit'=>'20',));}?>
                    <?php $n=1;if(is_array($data)) foreach($data AS $val) { ?>
                     <?php if($val['id']>10) { ?>
				 <div class="report" style="display: none;">
						<img src="<?php echo $val['thumb'];?>" height="125px" width="205px" alt="" />
						<div class="title2">
							<a href="<?php echo $val['url'];?>"><?php echo $val['title'];?></a>
						</div>
					</div>
                    <?php } elseif ($val['id']==7) { ?>
                   <div class="report" style="margin-left:20px">
						<img src="<?php echo $val['thumb'];?>" height="125px" width="205px" alt="" />
						<div class="title2">
							<a href="<?php echo $val['url'];?>"><?php echo $val['title'];?></a>
						</div>
					</div>
				   <?php } else { ?>
				   <div class="report">
						<img src="<?php echo $val['thumb'];?>" height="125px" width="205px" alt="" />
						<div class="title2">
							<a href="<?php echo $val['url'];?>"><?php echo $val['title'];?></a>
						</div>
					</div>
                    <?php } ?> 
                    <?php $n++;}unset($n); ?>
                    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
					
				</div>
			</div>
		</div>
		<div class="mybody">
			<div id="content_three">
		<!--block高度根据实际情况-->
				<div class="block">
					<div class="kindsOf">
						<div class="lh2016">
							<img src="<?php echo IMG_PATH;?>/truth/title.gif" width="47px" height="39px" alt="" />
						</div>
						<div class="fontStyle_">
							直播摘要
						</div>
						<div class="checkOut_">
							<a href="<?php echo APP_PATH;?>index.php?m=content&c=index&a=lists&catid=11">查看更多</a>
						</div>
					</div>
					<!--<div class="left">
						<img src="<?php echo IMG_PATH;?>/truth/8.jpg" width="125px" height="95px" alt="" />
					</div>
					<div class="right1">
						<div class="right1title"><a href="#">十三五规划纲要：股权融资市场</a></div>
						
						<div class="right1content" style="font-size:12px;color:#666666">《中华人民共和国国民经济和社会发展第十三个五年规划纲要》17日发布。创造条件实施股票发行注册制，发展多层次股权融资市场，深化创业板、新三板改革，规范发展区域性股权市场，建立健全转板机制和退出机制。
						</div>
					</div>-->
					<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=514d40567d7c534b071a92f4b2c9fd3d&action=lists&catid=11&order=listorder+ASC&num=1&page=page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 1;$page = intval(page) ? intval(page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>'11','order'=>'listorder ASC','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>'11','order'=>'listorder ASC','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
          <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
           <div class="left" >
						<img src="<?php echo $v['thumb'];?>" width="125px" height="95px" alt="" />
					</div>
					<div class="right1">
						<div class="right1title"><a href="<?php echo $v['url'];?>"><?php echo $v['title'];?></a></div>
						<div class="right1content" style="font-size:12px;color:#666666"><?php echo $v['description'];?>
						</div>
				    </div>
          <?php $n++;}unset($n); ?>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
          
				</div>
				<div class="block_">
					<div class="kindsOf">
						<div class="lh2016">
						<img src="<?php echo IMG_PATH;?>/truth/title.gif" width="47px" height="39px" alt="" />
						</div>
						<div class="fontStyle_">
						两会热播
						</div>
						<div class="checkOut_">
						<a href="<?php echo APP_PATH;?>index.php?m=content&c=index&a=lists&catid=15">查看更多</a>
						</div>
					</div>
					<!--缺少红线-->
					<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=8f621dae1d0fac3f4ba7f76e7476cdf8&action=lists&catid=15&order=listorder+ASC&num=1&page=page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 1;$page = intval(page) ? intval(page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>'15','order'=>'listorder ASC','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>'15','order'=>'listorder ASC','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
          <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
           <div class="left" >
						<img src="<?php echo $v['thumb'];?>" width="125px" height="95px" alt="" />
					</div>
					<div class="right1">
						<div class="right1title"><a href="<?php echo $v['url'];?>"><?php echo $v['title'];?></a></div>
						<div class="right1content" style="font-size:12px;color:#666666"><?php echo $v['description'];?>
						</div>
				    </div>
          <?php $n++;}unset($n); ?>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
					<!--<div class="left">
						<img src="<?php echo IMG_PATH;?>/truth/8.jpg" width="125px" height="95px" alt="" />
					</div>
					<div class="right1">
						<div class="right1title"><a href="#">南存辉传达全国两会精神</a></div>
						<div class="right1content" style="font-size:12px;color:#666666">
						林晓峰在学习会上说，这次的报告会站位很高、理念很新、信息量很大、正能量很足，充满了发展的信心和辩证的思维，使大家进一步开阔视野，对全国两会精神有了更深入的领悟和体会。
						</div>
					</div>-->

				</div>
			<div class="block">
				<div class="kindsOf">
					<div class="lh2016">
					<img src="<?php echo IMG_PATH;?>/truth/title.gif" width="47px" height="39px" alt="" />
					</div>
					<div class="fontStyle_">
					两会热议
					</div>
					<div class="checkOut_">
					<a href="<?php echo APP_PATH;?>index.php?m=content&c=index&a=lists&catid=16">查看更多</a>
					</div>
				</div>
				<!--缺少红线-->
				<!--<div class="left">
					<div class="alineblock">
						<div class="small_block">长城网</div>
						<div class="block_content"><a href="#">检察机关贯彻全国两会精神:找准服务大局</a></div>
					</div>
					<div class="alineblock">
						<div class="small_block">河北新闻网</div>
						<div class="block_content"><a href="#">全国IT职业英语专家 把脉英语教学！</a></div>
					</div>
				</div>-->	
				<div class="left">
				<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=b2c9ca60b438691fe4b226f946c1c5b2&action=lists&catid=16&order=listorder+ASC&num=2&page=page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 2;$page = intval(page) ? intval(page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>'16','order'=>'listorder ASC','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>'16','order'=>'listorder ASC','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
          <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
         
		 <div class="alineblock">
						<div class="small_block">真知社</div>
						<div class="block_content"><a href="<?php echo $v['url'];?>"><?php echo $v['title'];?></a></div>
					</div>
				   
          <?php $n++;}unset($n); ?>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>	
        </div>			
			</div>
			<div class="block_">
				<div class="kindsOf">
					<div class="lh2016">
					<img src="<?php echo IMG_PATH;?>/truth/title.gif" width="47px" height="39px" alt="" />
					</div>
					<div class="fontStyle_">
					媒体聚焦
					</div>
					<div class="checkOut_">
					<a href="<?php echo APP_PATH;?>index.php?m=content&c=index&a=lists&catid=12">查看更多</a>
					</div>
				</div>
				<div class="left">
					<!--<div class="alineblock">
						<div class="small_block">长城网</div>
						<div class="block_content"><a href="#">检察机关贯彻全国两会精神:找准服务大局</a></div>
					</div>
					<div class="alineblock">
						<div class="small_block">河北新闻网</div>
						<div class="block_content"><a href="#">全国IT职业英语专家 把脉英语教学！</a></div>
					</div>-->
					<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=85e9c8489d25cfaf5f3b8f3989a4543a&action=lists&catid=12&order=listorder+ASC&num=2&page=page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 2;$page = intval(page) ? intval(page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>'12','order'=>'listorder ASC','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>'12','order'=>'listorder ASC','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
          <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
         
					<div class="alineblock">
						<div class="small_block">真知社</div>
						<div class="block_content"><a href="<?php echo $v['url'];?>"><?php echo $v['title'];?></a></div>
					</div>
		
          <?php $n++;}unset($n); ?>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>	
				</div>
			</div>
			<div class="block">
				<div class="kindsOf">
					<div class="lh2016">
					<img src="<?php echo IMG_PATH;?>/truth/title.gif" width="47px" height="39px" alt="" />
					</div>
					<div class="fontStyle_">
					文字实录
					</div>
					<div class="checkOut_">
					<a href="<?php echo APP_PATH;?>index.php?m=content&c=index&a=lists&catid=13">查看更多</a>
					</div>
				</div>
				<!--<div class="dateleft" style="color:#8c0000;font-family:'Georgia';font-size:16px">
					<div class="date">
					01-18.2016
					</div>
					<div class="date">
					01-18.2016
					</div>
					<div class="date">
					01-18.2016
					</div>
				</div>
				<div class="right" style="line-height:45px">
					<a href="#">关于做好2016年寒假期间公共教室使用安排的通知</a>
					<a href="#">关于做好2016年寒假期间公共教室使用安排的通知</a>
					<a href="#">关于做好2016年寒假期间公共教室使用安排的通知</a>
				</div>-->
				
          <div class="dateleft" style="color:#8c0000;font-family:'Georgia';font-size:16px">
          <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=2047ac401aa662510b901c7c74963787&action=lists&catid=13&order=listorder+ASC&num=3&page=page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 3;$page = intval(page) ? intval(page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>'13','order'=>'listorder ASC','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>'13','order'=>'listorder ASC','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
          <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
					<div class="date">
					
					<?php echo date('m-d.Y',$val[inputtime]);?>
					</div>
		 <?php $n++;}unset($n); ?>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
				</div>
				<div class="right" style="line-height:45px">
				<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=2047ac401aa662510b901c7c74963787&action=lists&catid=13&order=listorder+ASC&num=3&page=page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 3;$page = intval(page) ? intval(page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>'13','order'=>'listorder ASC','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>'13','order'=>'listorder ASC','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
          <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
					<p><a href="<?php echo $v['url'];?>"><?php echo $v['title'];?></a>
					  <?php $n++;}unset($n); ?>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>	
					</div>
			</div>
			<div class="block_">
				<div class="kindsOf">
					<div class="lh2016">
					<img src="<?php echo IMG_PATH;?>/truth/title.gif" width="47px" height="39px" alt="" />
					</div>
					<div class="fontStyle_">
					意见征集
					</div>
					<div class="checkOut_">
					<a href="<?php echo APP_PATH;?>index.php?m=content&c=index&a=lists&catid=17">查看更多</a>
					</div>
				</div>
				<div class="dateleft" style="color:#8c0000;font-family:'Georgia';font-size:16px">
				<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=8293e71cb7878e83e5f974202b327c18&action=lists&catid=17&order=listorder+ASC&num=3&page=page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 3;$page = intval(page) ? intval(page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>'17','order'=>'listorder ASC','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>'17','order'=>'listorder ASC','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
          <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
					
					<div class="date">
					<?php echo date('m-d.Y',$val[inputtime]);?>
					</div>
					  <?php $n++;}unset($n); ?>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>	
				</div>
				<div class="right" style="line-height:45px">
				<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=8293e71cb7878e83e5f974202b327c18&action=lists&catid=17&order=listorder+ASC&num=3&page=page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 3;$page = intval(page) ? intval(page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>'17','order'=>'listorder ASC','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>'17','order'=>'listorder ASC','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
          <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
					<p><a href="<?php echo $v['url'];?>"><?php echo $v['title'];?></a>
					  <?php $n++;}unset($n); ?>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>	
				</div>
			</div>
			</div>
		</div>
			<div class="content_two content_three">
				<div class="mybody">
					<div class="longtitle">
						<img src="<?php echo IMG_PATH;?>/truth/title.gif" width="47px" height="39px" alt="" />
						<div class="checkOut">
							<a href="<?php echo APP_PATH;?>index.php?m=content&c=index&a=lists&catid=14">查看更多</a>
						</div>
						<div class="fontStyle">
							两会图刊
						</div>
					</div>
					<div class="myreport">
					<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=38aa45cf348a0ce0b75638a8ad049971&action=lists&catid=14&order=id+ASC&number=4\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'14','order'=>'id ASC','number'=>'4','limit'=>'20',));}?>
                    <?php $n=1;if(is_array($data)) foreach($data AS $val) { ?>
                     <?php if($val['id']>27) { ?>
				 <div class="report" style="display: none;">
						<img src="<?php echo $val['thumb'];?>" height="125px" width="205px" alt="" />
						<div class="title2">
							<a href="<?php echo $val['url'];?>"><?php echo $val['title'];?></a>
						</div>
					</div>
                    <?php } elseif ($val['id']==24) { ?>
                   <div class="report" style="margin-left:20px">
						<img src="<?php echo $val['thumb'];?>" height="125px" width="205px" alt="" />
						<div class="title2">
							<a href="<?php echo $val['url'];?>"><?php echo $val['title'];?></a>
						</div>
					</div>
				   <?php } else { ?>
				   <div class="report">
						<img src="<?php echo $val['thumb'];?>" height="125px" width="205px" alt="" />
						<div class="title2">
							<a href="<?php echo $val['url'];?>"><?php echo $val['title'];?></a>
						</div>
					</div>
                    <?php } ?> 
                    <?php $n++;}unset($n); ?>
                    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
					<!--
						<div class="report" style="margin-left:20px">
							<img src="<?php echo IMG_PATH;?>/truth/4.jpg" height="125px" width="205px" alt="" />
								<div class="title2">
									<a href="#">谈观看两会的体会</a>
								</div>
						</div>
						<div class="report">
							<img src="<?php echo IMG_PATH;?>/truth/5.jpg" height="125px" width="205px" alt="" />
							<div class="title2">
								<a href="#">入党积极分子的思想报告</a>
							</div>
						</div>
					<div class="report">
						<img src="<?php echo IMG_PATH;?>/truth/6.jpg" height="125px" width="205px" alt="" />
						<div class="title2">
							<a href="#">迈上新征程</a>
						</div>
					</div>
					<div class="report">
						<img src="<?php echo IMG_PATH;?>/truth/7.jpg" height="125px" width="205px" alt="" />
						<div class="title2">
							<a href="#">实现伟大中国梦</a>
						</div>
					</div>-->

				</div>
			</div>
		</div>
		<div class="mybody">
			<div class="links">
				<div class="software_logo">
					<a href="http://software.hebtu.edu.cn/"><img src="<?php echo IMG_PATH;?>/truth/swlogo.gif" alt="" /></a>
				</div>
				<div class="many_link">
					<ul>
						<!--<li><a href=""><img src="<?php echo IMG_PATH;?>/truth/link1.gif" alt="" /></a></li>
						<li><a href=""><img src="<?php echo IMG_PATH;?>/truth/link2.gif" alt="" /></a></li>
						<li><a href=""><img src="<?php echo IMG_PATH;?>/truth/link3.jpg" alt="" /></a></li>
						<li><a href=""><img src="<?php echo IMG_PATH;?>/truth/link4.gif" alt="" /></a></li>
						<li><a href=""><img src="<?php echo IMG_PATH;?>/truth/link5.gif" alt="" /></a></li>
						<li><a href=""><img src="<?php echo IMG_PATH;?>/truth/link6.gif" alt="" /></a></li>-->
						<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"link\" data=\"op=link&tag_md5=88e3acc8c67a164280cf7bdaaf67ec56&action=type_list&typeid=55&siteid=1&linktype=1&order=listorder+DESC&num=6&return=pic_link\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$link_tag = pc_base::load_app_class("link_tag", "link");if (method_exists($link_tag, 'type_list')) {$pic_link = $link_tag->type_list(array('typeid'=>'55','siteid'=>'1','linktype'=>'1','order'=>'listorder DESC','limit'=>'6',));}?>
  <?php $n=1;if(is_array($pic_link)) foreach($pic_link AS $v) { ?>
  <li><a href="<?php echo $v['url'];?>"><img src="<?php echo $v['logo'];?>" alt="" /></a></li>
  <?php $n++;}unset($n); ?>
  <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
					</ul>
				</div>
			</div>
			
		</div>
		<?php include template("content","footer"); ?>