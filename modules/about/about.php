<?php
/*
 * 注意：此文件由tpl_engine编译型模板引擎编译生成。
 * 如果您的模板要进行修改，请修改 templates/default/modules/about/about.html
 * 如果您的模型要进行修改，请修改 models/modules/about/about.php
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
if(filemtime("templates/default/modules/about/about.html") > filemtime(__file__) || (file_exists("models/modules/about/about.php") && filemtime("models/modules/about/about.php") > filemtime(__file__)) ) {
	tpl_engine("default","modules/about/about.html",1);
	include(__file__);
}else {
/* debug模式运行生成代码 结束 */
?><?php
$page_url=$_SERVER["QUERY_STRING"];
	$page_url=explode('mod=', $page_url);
	if(isset($page_url[1])){
		$mod=$page_url[1];
	}else{
		$mod=1;
	}

?><div class="wrapper">
<div class="main">

	<?php if ($mod==1||$mod==0) {?>
	<div class="title">
	
	<img src="about/images/about_title.gif" alt="关于我们 About US" />
	<h3>员工俱乐部寄语----快乐工作，快乐生活</h3>
<p>生活是美好的，不是吗？有时只需换个角度......</p><p>
或许，你曾试图平衡工作与生活。然而，由于工作与生活都变得异常复杂，要在创造最佳业绩的同时维持和谐的生活似乎日益困难。
           </p><p>
看，这是一个神奇的开始。我们的员工精心制作了上面的标识，希望你理解——正是每一天的生活决定了你的生命。这里我要对人们普遍的认识提出质疑——其实你享受的并非只有休闲时间。</p>
<p>1.欣赏美。每天，我们都会在不经意间遇到各式的美。加入新的员工俱乐部后，例如摄影俱乐部，我建议你重新观察身边的同事、植物、器皿和建筑。花一会儿功夫去品味是什么让他们如此的与众不同。你认同吗？</p>
<p>2. 拥抱自然。大自然是现代生活压力和紧张情绪的神奇治疗师。旅游俱乐部会告诉你：确实如此！！怎样在日常生活中享受户外生活呢？你可以尝试一些简单易行的方式：在公园里吃顿午餐，打理一下后院的菜园，或者看看日落。多到大自然里走走，你会享受到更多乐趣。</p>
<p>3. 心连心享受简单的快乐。 运动可以帮你找到内在的自我。你一定要让你的身体恢复活力，并与自然“交流”。运动难免流汗，加速呼吸，甚至让人受伤，但是你终会享受与队友一起的难忘时光，体味坚持不懈的精神。篮球、足球、羽毛球、太极、网球、游泳，想象一下，去运动吧。通过这种方式，与他人间的交往给我们的生活带来最大的乐趣。让你更好地享受工作的方式或许不再是加薪或晋升，而是与同事建起良好的关系。</p>
<p>4. 音乐中享受清晨和夜晚时光。清晨，你是否总是急匆匆地冲出家门？晚上，你是否关了电视机就直接去睡觉了？那么音乐呢？音乐能否激励你呢？在舞蹈和音乐俱乐部，你可以演奏乐器，唱出你的心声，跟随最疯狂的音乐翩然起舞。其实，你会发现处处是“音乐之声”。</p>
<p>5. 为你的成功喝彩。这一点是我想让你参加了主持人俱乐部能获得的。我们每天都会获得一些小小的成功。可能你成功地解决了问题，报告一个DRB，或者从收到了老板给你的升职信。无论你在何地，员工俱乐部会一直陪着你。一旦你觉得离开了员工俱乐部，就无法更好地工作和生活，员工俱乐部已经住进你的心里了。加入，一起分享，成都都成！！</p>
<p>员工俱乐部主席: Tang, Reed & Chi, Wangqing</p>
	
	</div>
	<?php }?>
	<?php if ($mod==2||$mod==0) {?>
	<div class="title">
	
	<h1>组织结构</h1>
	<img src="about/images/zuzhi.gif" alt="组织结构图" /><p>
	 •共有17个俱乐部，其中球类运动俱乐部5个，非球类运动俱乐部4个，艺术类俱乐部4个，生活与健康俱乐部4个。Shift协调部和技术支持部(负责IT、财务等相关技术)正在筹建中。 
<p>•Office 和 shift 的具体联系方式，请到员工俱乐部网站 了解最新信息. 
	 <h3>角色和职责</h3> <P>
英特尔成都员工俱乐部有6个主要的利益相关者：工会委员会，员工俱乐部主席，员工俱乐部财务总监，俱乐部主席和俱乐部成员。<P>
工会委员会  是所有员工俱乐部组织资金赞助人，其主要职责如下：<P>
•确定整个俱乐部发展战略以支持公司GPTW. <P>
•规划并分配员工俱乐部预算。 <P>
•审批员工俱乐部活动指导方针，审计核查员工俱乐部预算方案并且有权对俱乐部活动进行查账，使其符合英特尔行为准则。<P>
•对员工俱乐部所有活动拥有最终解释权。 <P>
•监督并审查员工俱乐部工作。 
<P>•聘请并任命员工俱乐部主席。 

<P><h5>员工俱乐部财务总监 </h5>是员工俱乐部的财务专家，确保所有员工俱乐部预算和支出符合英特尔和成都公司。其的职责如下： 
<P>•在后台管理员工俱乐部预算。 
<P>•审查员工俱乐部支出，并将其控制在预算之内，确保报销遵循英特尔政策。 
<P>•按季度审查员工俱乐部预算和支出情况，向俱乐部提出成本效益建议。
<P>•担任财政顾问，协助任何与财政相关问题的解决和政策制定。 

<P><h5>员工俱乐部主席 </h5>负责整个员工俱乐部的活动，向工会委员会汇报工作。领导各俱乐部主席规划和执行俱乐部的事务和活动。其职责如下：
<P>•确立员工俱乐部指导方针。
<P>•建立工会和俱乐部主席之间信息传递和反馈的交流渠道。
<P>•与俱乐部主席开展密切合作，促进基地员工俱乐部运营，追求卓越，提升成本效益，注重效率。
<P>•通过员工俱乐部活动宣传GPTW理念，展示其取得的成就。 
<P>•为俱乐部主席提供支持，促进俱乐部各项活动在公司员工中的宣传。
<P>•管理员工俱乐部预算和支出。

<P><h5>俱乐部主席</h5> 是指具体某一类活动俱乐部的主席。向员工俱乐部主席汇报工作，带领俱乐部负责人筹划并实施本俱乐部事务和活动。其职责如下：
<P>•通过合理筹划，有效实施和解决问题以推动俱乐部卓越运营。 
<P>•与员工俱乐部主席一起，通过员工俱乐部活动，积极宣传GPTW理念。
<P>•按季度预算和分配俱乐部资金，保证俱乐部支出符合公司财务政策。 
<P>•遵守英特尔安全和行为守则要求，严格遵从英特尔成都员工俱乐部指导方针。 
<P>•及时监督俱乐部各项活动，按季度向员工俱乐部主席汇报俱乐部工作情况。
<P>
<h5>俱乐部负责人</h5> 向俱乐部主席汇报工作。其负责俱乐部在办公室员工，CD1翻班员工，CD6翻班员工和IW员工的日常具体活动。其职责如下：
<P>•安排办公或翻班的定期活动和事项。 
<P>•支持俱乐部主席，不断提高俱乐部运营。 
<P>•向其范围内的所有员工宣传俱乐部活动。 
<P>•遵守英特尔安全和行为准则要求，严格遵从英特尔成都员工俱乐部指导方针。
<P>•收集并回复员工对特定俱乐部活动的反馈信息。 

<P><h5>俱乐部成员</h5>是参加员工俱乐部活动的员工，其主要职责如下： 
<P>•遵守英特尔安全和行为准则要求，严格遵从英特尔成都员工俱乐部指导方针。 
<P>•遵守分俱乐部具体要求。
<P>•对自身在俱乐部活动中的安全负责。参加任何员工俱乐部主办的活动之前签订免责表（见附录B）。 
<P>•注意自身在公共场所的行为，维护英特尔的形象。
	 
	</div>
	<?php }?>
	<?php if ($mod==3||$mod==0) {?>
	<div class="title">
	<h3>俱乐部管理员</h3>
	
	</div>
	<?php }?>
	<?php if ($mod==4||$mod==0) {?>
	<div class="title">
	<h3>俱乐部守则</h3>
	<img src="about/images/doc.gif" alt="guidebook" /><p>
<a href="about/chinese.docx">俱乐部守则（中文版）</a><p>
<a href="about/english.docx">Intel CD Social Club Org Chart</a>
	</div>
	<?php }?>
	
</div></div><?php } ?>