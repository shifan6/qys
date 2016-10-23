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
<meta name="keywords" content="七月上,FannieShi,Fannie Shi,web前端"> 
<link rel="shortcut icon" href="favicon.ico"/>
<link rel="stylesheet" href="css/basic.css" />
<link rel="stylesheet" href="css/artical.css" />
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
	<section class="wrap clearfix">
		<div class="main">
			<div class="crumbs">
				<a href="index.php">首页</a>
				<i>/</i>
				<a href="blog.php">前端小记</a>
				<i>/</i>
				玩转HTML5移动页面
			</div>
			<article class="post">
				<h4 class="post-title">玩转HTML5移动页面</h4>
				<div class="post-info">
					<span class="post-author">七月上</span>
					<span class="post-date">2016-05-20</span>
				</div>
				<div class="thumbnail">
					<img src="imgs/img01.jpg" alt="" />
				</div>
				<!--content-->
				<div class="post-content">
                    <p>小宝：腾讯游戏HTML 5实战案例！在这次朋友圈广告的设计过程中，遇到了好多拦路虎，有惊喜有郁闷，但在这个过程中我收获到了很多关于设计的经验和对项目的理解。下面，我以设计师的角度来分享一下在这次朋友圈广告中的一些过程和感悟，附设计流程图哟。</p>
					<p>最近有好多好多的优秀的朋友圈广告出现在我们的眼前，得到了好多人的关注。</p>
					<p>小宝也很期待能够做一个有意思的朋友圈广告给大家玩玩，没想到梦想成真了！</p>
					<p>这篇有趣的文章呢，我会分3大部分来和大家讲述，请屏幕前的你耐心的听我“墨迹”呗：</p>
					<p>接下来我就开始了呀！</p>
					<p>（空降了一个大大大需求）</p>
					<p>听说一款3D枪击手游《全民突击》要上微信朋友圈广告了呀。项目组的同学们和我们设计师们都惊呆了，手忙脚轮的赶紧的展开筹划和讨论。</p>
					<p>随着枪击手游的竞争越来越凶，玩家对《全民突击》的认知还是不够，需要做一次品牌的曝光宣传，让玩家对《全民突击》的认知更深入做到拉新的一个宣传效果，也借助微信朋友圈广告的渠道，打造一个《全民突击》是第一个上微信朋友圈广告的枪击游戏品类的游戏。小伙伴们都“鸡冻湿”了！</p>
					<p>《全民突击》要在这个阶段进行一次拉新，品牌曝光，提升产品知名度，还要保持老玩家活跃度和拉回流的目的，转化新进，提升市场占有率，做一次品牌的整合传播推广，围绕整个初始想法策划了一个H5对其进行传播。</p>
					<p>投放机制的目的也就是拉新进，就要针对目标用户来刺激，触发传播和曝光。打准目标玩家，信息才有效的提高到达率。</p>
					<p>对于前期的项目目标的挖掘和制定方向，我们与项目组也讨论了很久，最后也很谢谢大家的相互积极的配合，有效率的做出了一些决定，让我们继续的往下走。</p>
					<p>这个环节是最要人抓狂纠结也是最能学到东西的环节。我们对这次的设计创意进行了头脑风暴，针对微信朋友圈广告的纬度，围绕着：</p>
					<p>a.情感的表达是不是会更适合？</p>
					<p>b.游戏的元素要不要也要在里面有所体现？</p>
					<p>c.哪些内容会对玩家有排斥或者反感？</p>
					<p>d.表述的故事情节会不会过于简单了，玩家根本不在乎？</p>
					<p>e.拉取微信与游戏信息会不会有隐私的风险？</p>
					<p>……….（无止境的在思考和抛出所有想到的问题，只因为我们的脑汁太多了）</p>
				</div>
			</article>
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
			</div>
			<div class="search">
				<form action="">
					<input type="text" placeholder="输入关键词搜索相关文章" />
					<button type="submit"></button>
				</form>
			</div>
			<!--文章列表-->
			<div class="lists rank">
				<h3>
					<span>点击排行</span>
				</h3>
				<ul>
					<li>
						<a href="#">犯错了怎么办？</a>
					</li>
					<li>
						<a href="#">两只蜗牛艰难又浪漫的一吻</a>
					</li>
					<li>
						<a href="#">春暖花开-走走停停-发现美</a>
					</li>
					<li>
						<a href="#">琰智国际-Nativ for Life官方网站</a>
					</li>
					<li>
						<a href="#">个人博客模板（2014草根寻梦）</a>
					</li>
					<li>
						<a href="#">简单手工纸玫瑰</a>
					</li>
					<li>
						<a href="#">响应式个人博客模板（蓝色清新）</a>
					</li>
					<li>
						<a href="#">玩转HTML5移动页面</a>
					</li>
				</ul>
			</div>
			<div class="lists">
				<h3>
					<span>最新文章</span>
				</h3>
				<ul>
					<li>
						<a href="#">犯错了怎么办？</a>
					</li>
					<li>
						<a href="#">两只蜗牛艰难又浪漫的一吻</a>
					</li>
					<li>
						<a href="#">春暖花开-走走停停-发现美</a>
					</li>
					<li>
						<a href="#">琰智国际-Nativ for Life官方网站</a>
					</li>
					<li>
						<a href="#">个人博客模板（2014草根寻梦）</a>
					</li>
					<li>
						<a href="#">简单手工纸玫瑰</a>
					</li>
					<li>
						<a href="#">响应式个人博客模板（蓝色清新）</a>
					</li>
					<li>
						<a href="#">玩转HTML5移动页面</a>
					</li>
				</ul>
			</div>
			<div class="lists">
				<h3>
					<span>友情链接</span>
				</h3>
				<dl>
					<dd>
						<a href="http://www.ycku.com" target="_blank">瓢城Web俱乐部</a>
					</dd>
					<dd>
						<a href="http://www.zhangxinxu.com" target="_blank">张鑫旭-鑫空间-鑫生活</a>
					</dd>
					<dd>
						<a href="http://www.ruanyifeng.com/home.html" target="_blank">阮一峰的个人网站</a>
					</dd>
					<dd>
						<a href="http://www.xuanfengge.com" target="_blank">轩枫阁</a>
					</dd>
				</dl>
			</div>
			<?php
				require ROOT_PATH.'includes/footer.inc.php';
			?>
		</aside>
	</section>
</body>
</html>