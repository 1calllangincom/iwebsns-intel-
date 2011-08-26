<?php
/*
 * 注意：此文件由tpl_engine编译型模板引擎编译生成。
 * 如果您的模板要进行修改，请修改 templates/default/modules/square/square.html
 * 如果您的模型要进行修改，请修改 models/modules/square/square.php
 *
 * 修改完成之后需要您进入后台重新编译，才会重新生成。
 * 如果您开启了debug模式运行，那么您可以省去上面这一步，但是debug模式每次都会判断程序是否更新，debug模式只适合开发调试。
 * 如果您正式运行此程序时，请切换到service模式运行！
 *
 * 如有您有问题请到官方论坛（http://tech.jooyea.com/bbs/）提问，谢谢您的支持。
 */
?><?php
/*
 * 此段代码由debug模式下生成运行，请勿改动！
 * 如果debug模式下出错不能再次自动编译时，请进入后台手动编译！
 */
/* debug模式运行生成代码 开始 */
if(!function_exists("tpl_engine")) {
	require("foundation/ftpl_compile.php");
}
if(filemtime("templates/default/modules/square/square.html") > filemtime(__file__) || (file_exists("models/modules/square/square.php") && filemtime("models/modules/square/square.php") > filemtime(__file__)) ) {
	tpl_engine("default","modules/square/square.html",1);
	include(__file__);
}else {
/* debug模式运行生成代码 结束 */
?><?php
 //引入公共模块
require("foundation/fpages_bar.php");
	require("foundation/module_users.php");
	require("foundation/module_blog.php");
	require("foundation/fcontent_format.php");
	require("foundation/module_mypals.php");
	require("servtools/menu_pop/trans_pri.php");
	require("api/base_support.php");
	
  //语言包引入
  $b_langpackage=new bloglp;
	
  //变量区
	$user_id=1;
	$url=get_sess_userid();
 
  //数据表定义
  $t_blog=$tablePreStr."blog";
  dbtarget('r',$dbServs);
  $dbo=new dbex();
  $sql="select * from $t_blog where user_id=$user_id order by log_id desc";
  $blog_rs=$dbo->getRs($sql);
  
	?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Social Club - Create a great place to work</title> 
<meta name="description" content="即便一个很小的创意，也蕴含着很大的智慧！" />
<meta name="keywords" content="创意,超现实" />
<link rel="stylesheet" type="text/css" href="skin/<?php echo $skinUrl;?>/css/square.css" />
<!--[if IE]> 
<link rel="stylesheet" href="http://www.chaoxs.com/wp-content/themes/HotNewspro24/css/ie.css" /> <![endif]--><link rel="alternate" type="application/rss+xml" title="员工俱乐部网 RSS Feed" href="modules.php?app=square" />
<link rel='stylesheet' id='wp-pagenavi-css'  href='http://www.chaoxs.com/wp-content/plugins/wp-pagenavi/pagenavi-css.css?ver=2.70' type='text/css' media='all' />
<script type="text/javascript" src="http://www.chaoxs.com/wp-content/themes/HotNewspro24/js/jquery.min.js" ></script>
<script type="text/javascript" src="http://www.chaoxs.com/wp-content/themes/HotNewspro24/js/hoveraccordion.js"></script>
<script type="text/javascript" src="http://www.chaoxs.com/wp-content/themes/HotNewspro24/js/custom.js"></script>
<script type="text/javascript">$(function () {
$('.thumbnail img,.thumbnail_t img,.box_comment img,#slideshow img,.cat_ico,.cat_name,.r_comments img').hover(
function() {$(this).fadeTo("fast", 0.5);},
function() {$(this).fadeTo("fast", 1);
});
});
</script>
<!-- PNG -->
<!--[if lt IE 7]>
<script type="text/javascript" src="default/pngfix.js"></script>
<script type="text/javascript">
DD_belatedPNG.fix('.boxCaption,.top_box,.logo,.reply');
</script>
<![endif]-->
<!-- 图片延迟加载 -->
<!-- IE6菜单 -->
<script type="text/javascript"><!--//--><![CDATA[//><!--
sfHover = function() {
	if (!document.getElementsByTagName) return false;
	var sfEls = document.getElementById("menu").getElementsByTagName("li");
	for (var i=0; i<sfEls.length; i++) {
		sfEls[i].onmouseover=function() {
			this.className+=" sfhover";
		}
		sfEls[i].onmouseout=function() {
			this.className=this.className.replace(new RegExp(" sfhover\\b"), "");
		}
	}	
	var sfEls = document.getElementById("topnav").getElementsByTagName("li");
	for (var i=0; i<sfEls.length; i++) {
		sfEls[i].onmouseover=function() {
			this.className+=" sfhover";
		}
		sfEls[i].onmouseout=function() {
			this.className=this.className.replace(new RegExp(" sfhover\\b"), "");
		}
	}
}
if (window.attachEvent) window.attachEvent("onload", sfHover);
//--><!]]></script>
<script type="text/javascript"> 
jQuery(function(){
jQuery('#loading-one').empty().append('页面加载完毕.').parent().fadeOut('slow');
});
</script>
<style type="text/css">
.style1 {
				clear: both;
				text-align: center;
}
.style2 {
				color: #FF0000;
}
</style>
</head>
<body>
<div id="wrapper">
	<div id="top">
		<div id='topnav'>
			<div class="left_top ">
				<div class="home"><a href="modules.php?app=square" title="俱乐部广场" class="home"></a></div>
				<div class="menu">
				<ul>
					<li class="page_item page-item-511"><a href="main.php" title="好友近况">好友近况</a>
					</li>
					<li class="page_item page-item-511"><a href="home.php?h=<?php echo $url;?>" title="我的生涯">我的生涯</a>
					</li>
					<li class="page_item page-item-511"><a href="main.php?app=group" title="俱乐部">俱乐部</a>
					</li>
					<li class="page_item page-item-511"><a href="main.php?app=event" title="活动">活动</a>
					<li class="page_item page-item-511"><a href="mailto:<?php echo $adminEmail;?>" title="联系我们">联系我们</a>
					</li>
					</li>
				</ul></div>
			</div>
			<!-- end: left_top --> 
			<!-- end: searchbar -->
		</div>
		<!-- end: topnav -->
	</div>
	<!-- end: top -->
	<div id="header">
		<div class="header_c">
			<div class="login_t">
			welcome to cd social club</div>
			<a href="modules.php?app=square"title="Social Club">
			<img alt="" src="default/logo.png" width="188" height="60" /></a></div>
		<div class="clear"></div>
		<!-- end: header_c -->
	</div>
	<!-- end: header -->
	<div id="featured" class="clearfix">
		<div class="item grid">
						<div class="top_t">
						</div>
		<!-- 截图 -->
		<div class="thumbnail_hot">
							<a href="http://bbs.cd.intel.com/bbs/forumdisplay.php?fid=29" rel="bookmark" title="What's new and hot!"><img class="home-thumb" src="default/activity.png" width="236px" height="155px" alt="Fancy Activity"/></a>
							</div>
		<div class="top_box"><a href="http://bbs.cd.intel.com/bbs/forumdisplay.php?fid=29" rel="bookmark" title="What's new and hot!">详细内容</a></div>
		<div class="boxCaption">
			<h2><a href="http://bbs.cd.intel.com/bbs/forumdisplay.php?fid=29" title="What's new and hot!">Fancy Activity</a></h2>
		</div>
	</div>
		<div class="item grid">
						<div class="top_t">
						</div>
		<!-- 截图 -->
		<div class="thumbnail_hot">
							<a href="tiltviewer\colorfulalbum.html" rel="bookmark" title="Activity photos to share!"><img class="home-thumb" src="default/album.png" width="236px" height="155px" alt="Colorful Album"/></a>
							</div>
		<div class="top_box"><a href="tiltviewer\colorfulalbum.html" rel="bookmark" title="Activity photos to share!">详细内容</a></div>
		<div class="boxCaption">
			<h2><a href="tiltviewer\colorfulalbum.html" title="Activity photos to share!">Colorful Album</a></h2>
		</div>
	</div>
		<div class="item grid">
						<div class="top_t">
						</div>

		<!-- 截图 -->

		<div class="thumbnail_hot">

							<a href="relaxingtime.html" rel="bookmark" title="Here are stories、essays、jokes and games!"><img class="home-thumb" src="default/relaxingtime.png" width="236px" height="155px" alt="Relaxing Time"/></a>

							</div>

		<div class="top_box"><a href="relaxingtime.html" rel="bookmark" title="Here are stories、essays、jokes and games!">详细内容</a></div>

		<div class="boxCaption">

			<h2><a href="relaxingtime.html" title="Here are stories、essays、jokes and games!">Relaxing Time</a></h2>

		</div>

	</div>

		<div class="item grid">

						<div class="top_t">

						</div>

		<!-- 截图 -->

		<div class="thumbnail_hot">

							<a href="Org Chart.htm" rel="bookmark" title="Chairs、Sub-clubs leaders and Your application!"><img class="home-thumb" src="default/orgchart.png" width="236px" height="155px" alt="Chairs、Sub-clubs leaders and Your application."/></a>

							</div>

		<div class="top_box"><a href="Org Chart.htm" rel="bookmark" title="Chairs、Sub-clubs leaders and Your application!">详细内容</a></div>

		<div class="boxCaption">

			<h2><a href="Org Chart.htm" title="Chairs、Sub-clubs leaders and Your application!">Org Chart</a></h2>

		</div>

	</div>

		<div class="clear"></div>

</div>

	 <div id="roll"><div title="回到顶部" id="roll_top"></div></div>

<div id="post">

	<!-- menu -->

	<div id="map">

	<div class="browse"> 现在的位置: <a title="进入新闻版" href="http://bbs.cd.intel.com/bbs/forumdisplay.php?fid=29">Hot News抢先看！</a></div>	

	<div id="feed"><a title="RSS">RSS</a></div>

	</div>

	<!-- end: menu -->
	<?php foreach($blog_rs as $rs){?>
		<div class="post-16228 post type-post hentry category-xxkw tag-232" id="post-16228">
			<div class="entry_box">
				<div class="box_entry">
					<div class="thumbnail_box">
						<div class="thumbnail_t">
			<a href="modules.php?app=blog&id=<?php echo $rs["log_id"];?>&user_id=1" target="_blank" rel="bookmark" title="<?php echo $rs["log_title"];?>">

			<img src="<?php echo $rs['img'];?>" alt="<?php echo $rs["log_title"];?>" style="left: 15px; top: 22px; right: 535px;" width="164" height="137" /></a>
	</div>
					</div>
						<h3><a href="modules.php?app=blog&id=<?php echo $rs["log_id"];?>&user_id=1" target="_blank" rel="bookmark" title="<?php echo filt_word($rs["log_title"]);?>"><?php echo $rs["log_title"];?></a></h3>
					<div class="post_entry"><?php echo sub_str(strip_tags($rs["log_content"]),180);?>
						<span class="posttag">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 

						held by Social Club Chairs</span>

<span class="archive_more"><a href="modules.php?app=blog&id=<?php echo $rs["log_id"];?>&user_id=1" target="_blank" title="<?php echo $rs["log_title"];?>" rel="bookmark" class="title">阅读全文</a></span>

						<div class="clear"></div>

					</div>

				</div>

				<b class="lt"></b>

				<b class="rt"></b>

			</div>	
<div class="entry_box_b">

				<b class="lb"></b>

				<b class="rb"></b>

			</div>
		</div>
<?php }?>
				


	</div>

<!-- end: post -->

<div id="sidebar">

 

	<div class="s_category">

	<h3>Know More About Us</h3>	

	<div class="categories">

		<div class="categories_c">

															<ul class="cat_h">

					<div class="ico">	<div class="cat_ico">

		<a href="guidebook.htm"><img src="default/guidebook.png" width="35px" height="35px" alt="Here is the guidebook! " title="Guidebook" /></a>

	</div>

</div>

					<span class="cat_name_h">

						<a href="guidebook.htm" rel="bookmark" title="Read more">Guide Book</a>

						<span class="cat_description"><p>Guidance、Regular Review 

					etc.</p>

</span>

					</span>

				</ul>

																			<ul class="cat_h">

					<div class="ico">	<div class="cat_ico">

		<a href="contact web owner.html"><img src="default/message.png" width="35px" height="35px"  alt="Message US " title="Contact Web Owner" /></a>

	</div>

</div>

					<span class="cat_name_h">

						<a href="contact web owner.html" rel="bookmark" title="Read more">Message Us</a>

						<span class="cat_description"><p>Message to editors and F.A.Q.</p>

</span>

					</span>

				</ul>

																			<ul class="cat_h">

					<div class="ico">	<div class="cat_ico">

		<a href="underconstruction.html"><img src="default/joinus.png" width="35px" height="35px" alt="Time to join " title="Join Us" /></a>

	</div>

</div>

					<span class="cat_name_h">

						<a href="underconstruction.html" rel="bookmark" title="Read more">Join Us</a>

						<span class="cat_description"><p>Send your application now.</p>

</span>

					</span>

				</ul>

																			<ul class="cat_h">

					<div class="ico">	<div class="cat_ico">

		<a href="SCbriefintroduction&doc download.htm"><img src="default/download.png"  width="35px" height="35px" alt="shijuezuopin category " title="About Us" /></a>

	</div>

</div>

					<span class="cat_name_h">

						<a href="SCbriefintroduction&doc download.htm" rel="bookmark" title="Read more">About Us</a>

						<span class="cat_description"><p>Intro. and Doc. download.</p>

</span>

					</span>

				</ul>

							 		</div>

				<div class="clear"></div>

	</div>

	<div class="box-bottom">

		<b class="lb"></b>

		<b class="rb"></b>

	</div>

</div>

				<div class="clear"></div>

 

			

			

	<div class="widget">

					</div>

 

	<div class="widget">

					</div>

 

			

			

	<div class="widget">

					</div>

 

	<div class="widget">

					</div>

 

			<div class="ad">

	<div class="ads">

		<h3>Sub-leaders&#39; show (Especially New Clubs)</h3>	

		<div class="ads_c"><a href="underconstruction.htm" target="_blank">

						<img src="default/leaders'show/guihao.jpg" height="232" /></a>

<br />

<a href="underconstruction.htm" target="_blank">

						Intel parents club (Gui Hao)</a> <br />

						Intel parents club will be a learning &amp; sharing platform 

						for father and mother, let’s learn to be a good parent 

						that will make our job excellent and keep our family 

						harmony.<br />

<hr />

<div class="clear"></div>

 

<a href="underconstruction.htm" target="_blank">

						<img src="default/leaders'show/zhupeel.jpg" height="345" width="228"  /></a>

<br />

<a href="underconstruction.htm" target="_blank">Table Tennis (Zhu Peel)</a>

						<br />

						Table tennis, known as the “national ball” in China, 

						attracts so many people. There are lots of collogues 

						eager to play table tennis. Here, we have our own club. 

						As a social club, Table Tennis Club is open to all the 

						Chengdu site employees, and we welcome anyone who is 

						fond of playing table tennis.<br />

<hr />

<div class="clear"></div>

 

						<div class="previous">

 

<a href="underconstruction.htm" target="_blank">

						<img src="default/leaders'show/Jiang, Anne.jpg" height="268" width="228"  /></a>

<br />

<a href="underconstruction.htm" target="_blank">Music Club (Wang, Ruipeng/ Xia, Zhiming/ Jiang, Anne)</a>

										<br />

										Here are some descriptions about Music 

										Club. So if you want to know more, PLS 

										touch the hyperlink, then a new webpage 

										will show what you like. Thank you.<br />

						</div>

<hr />

<div class="clear"></div>

 

<a href="underconstruction.htm" target="_blank">

						<img src="default/leaders'show/Zhang, Ruibo.jpg" height="268" width="224" /></a>

<br />

<a href="underconstruction.htm" target="_blank">i-Running Club (Zhang, Ruibo)</a>

						<br />

						“Enjoy life, enjoy running” this is the slogan of our 

						i-running club, do remember, our objective is to make 

						you enjoy the running and benefit your health throughout 

						your life. No matter you desire to loss weight, want to 

						improve your healthy, or even try to challenge marathon, 

						just join our club.<br />

<hr />

		</div>

		<div class="box-bottom">

			<b class="lb"></b>

			<b class="rb"></b>

		</div>

	</div>

</div>		

	<div class="widget">

					</div>

 

	<div class="widget">

					</div>

 

			

	<div class="clear"></div>

	<!-- end: widget -->

	</div><!--cos-html-cache-safe-tag-->

	<!-- end: link -->

  	<div class="style1">Copyright &copy; 2010-2011 <a href="modules.php?app=square">I</a>ntel 

		Chengdu&nbsp;&nbsp;All rights reserved.

	 	</span>	</div>

</div>

</body></html><?php } ?>