<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><div class="footer">
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
</html>
