<?php
	//定义一个常量，用来授权调用includes里面的文件
	define('IN_TG', true);
	//调用公共文件
	require dirname(__FILE__).'/includes/common.inc.php';
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=yes">
<title>七月上｜web前端技术</title>
<meta name="description" content="七月上，专注于web前端开发技术、致力于前端开发工具资源的个人原创博客。">
<meta name="keywords" content="七月上,FannieShi,Fannie Shi,关于我,web前端"> 
<link rel="shortcut icon" href="favicon.ico"/>
<link rel="stylesheet" href="css/basic.css" />
<link rel="stylesheet" href="css/about.css" />
<script type="text/javascript" src="js/jquery-1.7.2.js"></script>
<script type="text/javascript" src="js/base.js"></script>
<!--[if lt IE 9]> 
<script>window.location.href='http://cdn.dmeng.net/upgrade-your-browser.html?referrer='+location.href;</script>
<![endif]-->
</head>
<body>
	<?php
		require ROOT_PATH.'includes/header.inc.php';
	?>	
	<section class="wrap">
		<div class="banner" style="background-image: url(imgs/img12.jpg);">
			<div class="text">
				<p>I want to ride the wind and waves, sand and oceans.</p>
				<p>我欲乘风破浪，踏遍黄沙海洋。</p>
			</div>
		</div>	
	</div>
	<section class="wrap clearfix">
		<div class="main">
			<div class="aboutqys">
				<h3 class="title">
					<span>关于七月上</span>
				</h3>
				<div class="aboutText">
					<p>初听《七月上》这首歌，就很喜欢里面的两句歌词：</p>
					<p>我欲乘风破浪，踏遍黄沙海洋。与其误会一场，也要不负勇往。</p>
					<p>当下时至七月，也很符合心境，因此便喜欢上这首歌，这首歌名。原谅起名无能的我，就以它自称了~</p>
				</div>
			</div>
			<div class="aboutme">
				<h3 class="title">
					<span>关于我</span>
				</h3>
				<div class="aboutText">
					<p>石帆，女，14年于武汉纺织大学毕业。近来想寻求一些改变，结束了在武汉的6年多生活。</p>
					<p>23岁，也已经是个老大不小的年纪了。既然不满足现状、不甘于安逸，那就趁早出去看看吧。毕竟世界那么大，是好是坏，总得领略一番是吧？</p>
					<p>初来北京，现一切也已尘埃落定，终于有精力鼓捣下博客了。也下定决心，闲暇时候，多看书多阅读多鼓捣下代码，毕竟人丑还是多读书。</p>
					<p>漫漫前端路，学习无止境，愿自己且行且珍惜。</p>
				</div>
			</div>
			<div class="aboutBlog">
				<h3 class="title">
					<span>关于本站</span>
				</h3>
				<div class="aboutText">
					<p>本站的初衷，用于记录自己在前端开发、学习上的一些心得。与此同时，经营它也正是经营自己，相信每一个新的版本，也会是自己的每一次突破。</p>
					<p>慢慢地，一些想法也变的清晰起来。会把它当做自己的产品对待，进行短期与长期规划，实现功能迭代与持续优化。同时，使用这个产品记录它和我的足迹。</p>
					<p>它将与我同行，跌跌撞撞，又坚定的向着前方。</p>
				</div>
			</div>
		</div>
		<aside class="sidebar">
			<!--个人信息-->
			<div class="qys">
				<div class="qys-img">
					<img src="imgs/img05.jpg" alt="" />
					<div class="about">
						<a href="about.php">关于七月上</a>
					</div>
				</div>
				<!--外链网易云音乐-->
				<div class="qys-music">
					<iframe frameborder="no" border="0" marginwidth="0" marginheight="0" width=297 height=86 src="http://music.163.com/outchain/player?type=2&id=31445554&auto=0&height=66"></iframe>
				</div>
				<div class="qys-intro">
					<p class="icon1">姓名：七月上｜Fannie Shi</p>
					<p class="icon2">职业：Web前端开发</p>
					<p class="icon3">籍贯：湖北省-黄冈市</p>
					<p class="icon4">邮箱：me@fannieshi.com</p>
					<p class="icon5">GitHub：<a href="https://github.com/FannieShi">FannieShi</a></p> 	
				</div>
				<div class="qys-sina">
					<h3>
						<span>新浪微博</span>
					</h3>
					<iframe width="100%" height="90" class="share_self"  frameborder="0" scrolling="no" src="http://widget.weibo.com/weiboshow/index.php?language=&width=0&height=350&fansRow=2&ptype=1&speed=0&skin=5&isTitle=0&noborder=0&isWeibo=0&isFans=0&uid=2647637494&verifier=72a768f2&colors=71c4a7,66a690,fff,eee,66a690&dpc=1"></iframe>
				</div>
			</div>
			<?php
				require ROOT_PATH.'includes/footer.inc.php';
			?>
		</aside>
	</div>
</body>
</html>