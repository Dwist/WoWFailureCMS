<?php
require_once("configs.php");
$page_cat = "home";
?>

<head>
	<title><?php echo $website['title']; ?></title>
	<meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible" />
	<link rel="shortcut icon" href="wow/static/local-common/images/favicons/wow.ico" type="image/x-icon"/>
	<link rel="search" type="application/opensearchdescription+xml" href="http://eu.battle.net/en-gb/data/opensearch" title="Battle.net Search" />
	<link rel="stylesheet" type="text/css" media="all" href="wow/static/local-common/css/common.css?v15" />
	<!--[if IE]><link rel="stylesheet" type="text/css" media="all" href="wow/static/local-common/css/common-ie.css?v15" /><![endif]-->
	<!--[if IE 6]><link rel="stylesheet" type="text/css" media="all" href="wow/static/local-common/css/common-ie6.css?v15" /><![endif]-->
	<!--[if IE 7]><link rel="stylesheet" type="text/css" media="all" href="wow/static/local-common/css/common-ie7.css?v15" /><![endif]-->
	<link title="World of Warcraft - News" href="wow/en/feed/news" type="application/atom+xml" rel="alternate"/>
	<link rel="stylesheet" type="text/css" media="all" href="wow/static/css/wow.css?v4" />
	<link rel="stylesheet" type="text/css" media="all" href="wow/static/local-common/css/cms/homepage.css?v15" />
	<link rel="stylesheet" type="text/css" media="all" href="wow/static/local-common/css/cms/blog.css?v15" />
	<link rel="stylesheet" type="text/css" media="all" href="wow/static/local-common/css/cms/cms-common.css?v15" />
	<link rel="stylesheet" type="text/css" media="all" href="wow/static/css/cms.css?v4" />
	<!--[if IE 6]><link rel="stylesheet" type="text/css" media="all" href="wow/static/css/cms-ie6.css?v4" /><![endif]-->
	<!--[if IE]><link rel="stylesheet" type="text/css" media="all" href="wow/static/css/wow-ie.css?v4" /><![endif]-->
	<!--[if IE 6]><link rel="stylesheet" type="text/css" media="all" href="wow/static/css/wow-ie6.css?v4" /><![endif]-->
	<!--[if IE 7]><link rel="stylesheet" type="text/css" media="all" href="wow/static/css/wow-ie7.css?v4" /><![endif]-->
	<script type="text/javascript" src="wow/static/local-common/js/third-party/jquery-1.4.4-p1.min.js"></script>
	<script type="text/javascript" src="wow/static/local-common/js/core.js?v15"></script>
	<script type="text/javascript" src="wow/static/local-common/js/tooltip.js?v15"></script>
	<!--[if IE 6]> <script type="text/javascript">
	//<![CDATA[
	try { document.execCommand('BackgroundImageCache', false, true) } catch(e) {}
	//]]>
	</script>
	<![endif]-->
</head>

<body class="en-us homepage" onunload="opener.location=('index.php')">

<div id="wrapper">
	<?php include("header.php"); ?>
	<div id="content">
		<div class="content-top">
			<div class="content-bot">	
				<div id="homepage">
					<div id="left">
						<script type="text/javascript" src="wow/static/local-common/js/slideshow.js"></script>
						<script type="text/javascript" src="wow/static/local-common/js/third-party/swfobject.js"></script>
						<div id="slideshow">
							<?php
							$slideshows = mysql_query("SELECT * FROM slideshows ORDER BY id DESC LIMIT 5");
							$i=0; 
							echo '<div class="container">';
							while($slideshow=mysql_fetch_array($slideshows)){
							if($i == 0){echo'<div class="slide" id="slide-'.$i.'" style="background-image: url(\'images/slideshows/'.$slideshow['image'].'\');"></div>';}
							if($i != 0){
							echo'<div class="slide" id="slide-'.$i.'" style="background-image: url(\'images/slideshows/'.$slideshow['image'].'\'); display:none;"></div>';}
							$i++;
							}
							echo '</div>';
							?>

							<div class="paging">
									<a href="javascript:;" id="paging-0" onclick="Slideshow.jump(0, this);" onmouseover="Slideshow.preview(0);" class="current"></a>
									<a href="javascript:;" id="paging-1" onclick="Slideshow.jump(1, this);" onmouseover="Slideshow.preview(1);"></a>
									<a href="javascript:;" id="paging-2" onclick="Slideshow.jump(2, this);" onmouseover="Slideshow.preview(2);"></a>
									<a href="javascript:;" id="paging-3" onclick="Slideshow.jump(3, this);" onmouseover="Slideshow.preview(3);"></a>
									<a href="javascript:;" id="paging-4" onclick="Slideshow.jump(4, this);" onmouseover="Slideshow.preview(4);" class=" last-slide"></a>
							</div>
			
							<?php
							$slideshows = mysql_query("SELECT * FROM slideshows ORDER BY id DESC LIMIT 1");
							$slideshow = mysql_fetch_assoc($slideshows);
							echo'<div class="caption">
							<h3><a href="#" class="link">'.$slideshow['title'].'</a></h3>
							'.$slideshow['description'].'
							</div>';
							?>
							
							<div class="preview"></div>
							<div class="mask"></div>
						</div>
						
						<?php $slideshows = mysql_query("SELECT * FROM slideshows ORDER BY id DESC LIMIT 5"); ?>
						<script type="text/javascript">
						//<![CDATA[
							$(function() {
								Slideshow.initialize('#slideshow', [
									<?php
									$i=0; 
									while($slideshow=mysql_fetch_array($slideshows)){
									echo '
									{
										image: "images/slideshows/'.$slideshow['image'].'",
										desc: "'.$slideshow['description'].'",
										title: "'.$slideshow['title'].'",
										url: "'.$slideshow['link'].'",
										id: "'.$slideshow['id'].'"
									}';
									if($i!=4){echo',';}
									$i++;
									}
									?>
								]);

							});
						//]]>
						</script>
						
						
						<div class="featured-news">
							<?php
							$articles_query = mysql_query("SELECT * FROM news ORDER BY DATE desc LIMIT 4")or print("No Articles");
							while($articles = mysql_fetch_array($articles_query)){
							?>
							<div class="featured">
								<a href="news.php?id=<?php echo $articles['id']; ?>">
									<span class="featured-img" style="background-image: url('news/<?php echo $articles['image']; ?>.jpg');"></span>
									<span class="featured-desc"> <?php echo $articles['title']; ?> </span>
								</a>
							</div>
							<?php
							}
							?>
							<span class="clear"></span>
						</div>
						<!-- DO NOT EDIT BELOW UNLESS YOU KNOW WHAT YOU ARE DOING! -->
						<div id="news-updates">
							<?php
							
							if(isset($_GET['new'])){
								$new = intval($_GET['new']);
							}else{
								$new = 0;
							}
							
							$news_first = $new ? $new : 9999999999;
							$news_query = ("SELECT * FROM news WHERE id <= '".$news_first."' ORDER BY `id` desc LIMIT 6");
							$news_query = mysql_query($news_query);
							$counter = 1;
							
							while($counter<=5 && $news=mysql_fetch_array($news_query)){
								if($counter == 1){
									echo '<div class="news-article first-child">';
								}else{
									echo '<div class="news-article">';
								}
							
								echo'
								<h3><a href="news.php?id='.$news['id'].'">'.$news['title'].'</a></h3>
								<div class="by-line">
								by <a href="'.$news['authorlnk'].'">'.$news['author'].'</a><span class="spacer"> // </span> '.$news['date'].'
								<a href="news.php?id='.$news['id'].'#comments" class="comments-link">'.$news['comments'].'</a>
								</div>
								
								<div class="article-left" style="background-image: url(\'news/'.$news['image'].'.jpg\');">
								<a href="news.php?id='.$news['id'].'"><img src="wow/static/images/homepage/thumb-frame.gif" alt="" /></a>
								</div>

								<div class="article-right">
									<div class="article-summary">
									<p>'.substr($news['content'],0,120)."...".'</p>
									<a href="news.php?id='.$news['id'].'" class="more">More</a>
									</div>
								</div>
								
								<span class="clear"><!-- --></span>
								</div>
								';
								
								$counter++;
							}
							
							if($news=mysql_fetch_array($news_query)){ ?>
								<!--Next Page Button-->
								<div class="blog-paging">
								<a class="ui-button button1 button1-next float-right " href="<?php echo'?new='.$news['id'];?>">
								<span><span>Next</span></span></a>
								<span class="clear"><!-- --></span>
								</div>
							<?php }?>
						</div>
					</div>
				
					<!-- Right Panel -->
					<div id="right" class="ajax-update">
					<div id="sidebar-marketing" class="sidebar-module">
					<!-- DO NOT EDIT BELOW UNLESS YOU KNOW WHAT YOU ARE DOING! -->
					<!-- DO NOT EDIT BELOW UNLESS YOU KNOW WHAT YOU ARE DOING! -->
				<div class="bnet-offer">
				
				<div class="sidebar-title"><h3 class="title-bnet-ads">Promo Advertisement</h3></div>
				<!-- DO NOT EDIT BELOW UNLESS YOU KNOW WHAT YOU ARE DOING! -->
				<div class="bnet-offer-bg">
				<a href="" target="_blank" id="vote" class="bnet-offer-image" onclick="">
				<img src="wow/static/images/sidebar/Share/vote.jpg" width="300" height="250" alt=""/>
						</a>
						</div>
						</div>
						</div>
						<div id="sidebar-marketing" class="sidebar-module">
						<div class="sidebar-title">
						<h3 class="title-bnet-ads">Server Information: 
						<?php
						require_once("configs.php");
						if(realm_status($serveraddress, $serverport) === false)
						{
						echo                      "<font color=red>Offline</font>";
						}
						elseif(realm_status($serveraddress, $serverport) === true)
						{
						echo "<font color=#00FF00>Online</font>";
						}
						else
						{
						echo "<font color=yellow>Unavailable</font>";
						}
						function realm_status($host, $port)
						{
						error_reporting(0);
						$etat = fsockopen($host,$port,$errno,$errstr,3);
						if(!$etat)
						{
						return false;
						}
						else
						{
						return true;
						}
						}
						?>
						</h3></div>
						<span class="clear"><!-- --></span>
						<?php
						require_once("configs.php");

						mysql_connect($serveraddress, $serveruser, $serverpass) or die ("<font color='#00FF00'>Can't connect with</font> <font color='#FF0000'>$host</font>");
						mysql_selectdb ("$server_adb");

						$sql = mysql_query ("SELECT * FROM $server_adb.`uptime` ORDER BY `starttime` DESC LIMIT 1");  
						$uptime_results = mysql_fetch_array($sql);    

						if ($uptime_results['uptime'] > 86400) { 
					    $uptime =  round(($uptime_results['uptime'] / 24 / 60 / 60),2)." Days";
						}
						elseif($uptime_results['uptime'] > 3600) { 
 						$uptime =  round(($uptime_results['uptime'] / 60 / 60),2)." Hours";
						}
						else { 
						$uptime =  round(($uptime_results['uptime'] / 60),2)." Min";
						}
						echo "<font color='#00FF00'><b>Uptime :</b></font> <span class='date'>$uptime</span> <br>";
						?>
						<div class="sidebar-module" id="sidebar">
						  Realmlist : <span class="date">Set Realmlist your_realmlist</span><br />
						  Patch Version : <span class="date">4.x.x</span><br />
						  Accounts : <span class="date">
						  <?php
						require_once("configs.php");

						$conn = mysql_connect($serveraddress, $serveruser, $serverpass) or die(mysql_error());
						mysql_select_db($server_adb, $conn) or die(mysql_error());

						// Account Selection
						$acct_sql = "SELECT COUNT(*) FROM account";
						$acct_sqlquery = mysql_query($acct_sql) or die(mysql_error());
						$acc = mysql_result($acct_sqlquery,0,0);

						echo ("<font color='#FF0000'>$acc</font>");
						mysql_close($conn);
						?>
						Accounts Registered</span><br />
						Characters : <span class="date"><?php
						require_once("configs.php");

						$conn = mysql_connect($serveraddress, $serveruser, $serverpass) or die(mysql_error());
						mysql_select_db($server_cdb, $conn) or die(mysql_error());

						// Character select
						$sql = "SELECT COUNT(*) FROM characters";
						$sqlquery = mysql_query($sql) or die(mysql_error());
						$char = mysql_result($sqlquery,0,0);

						echo ("<font color='#FF0000'>$char</font>");

						mysql_close($conn);
						?> Characters Created</span><br />
						  
						</div>
						<span class="clear"><!-- --></span>
						<center><?php
						require_once("configs.php");

						$bar_width = "273px";
						$bar_height = "20px";
						$ally_img = "wow/static/images/services/status/ally.png";
						$horde_img = "wow/static/images/services/status/horde.png";
						//Show percent online (true = yes, false = no)
						$show_percent = true; 

						$alliance = array("1","3","4","7","11","22");
						$horde = array("2","5","6","8","9","10");

						define("QFAIL","Unable to run query.");
						define("CFAIL","Database connection failed! Check your settings!");
						define("DFAIL","Unable to select database.");

						$conn = @mysql_connect($serveraddress,$serveruser,$serverpass) or die(mysql_error());
						if(!$conn)
							die(CFAIL);
							
						function getPlayers($server_cdb,$conn) {
							$db = @mysql_select_db($server_cdb,$conn);
							if(!$db) {
								die(DFAIL);
							}
							$query = @mysql_query("SELECT online FROM characters WHERE online = '1'");
							if(!$query) {
								die(QFAIL);
							}
							return @mysql_num_rows($query);
						}

						function doFaction($server_cdb,$conn,$a) {
							$db = @mysql_select_db($server_cdb,$conn);
							if(!$db) {
								die(DFAIL);
							}
							$query = @mysql_query("SELECT race FROM characters WHERE online = '1'");
							if(!$query) {
								die(QFAIL);
							}
							$i = 0;
							while($r = @mysql_fetch_array($query)) {
								$race = $r['race'];
								if(in_array($race,$a)) {
									$i++;
								}
							}
							return $i;
						}

						function percent($a,$t) {
							$count1 = $a / $t;
							$count2 = $count1 * 100;
							$count = number_format($count2, 0);
							return $count;
						}

						function barWidth($a,$b,$t) {
							if(($a == 0) && ($b == 0)) {
								$count2 = "136.5";
							}
							else {
								$count1 = $a / $b;
								$count2 = $count1 * $t;
							}
							return $count2;
						}

						$p = @getPlayers($server_cdb,$conn);
						$a = @doFaction($server_cdb,$conn,$alliance);
						$h = @doFaction($server_cdb,$conn,$horde);
						$ap = @percent($a,$p);
						$hp = @percent($h,$p);
						$b = @barWidth($a,$p,273);
						$c = @barWidth($h,$p,273);
						echo "<div style=\"width:" . $bar_width . ";height:" . $bar_height . ";\">
						<div style=\"float:left;text-align:right;background:url(./" . $ally_img . ");width:" . $b . "px;height:20px;\">";
						if($show_percent) {
							echo "<font style=\"color:#FFFFFF;font-weight:bold;\">$ap%</font>";
						}
						echo "</div>
						<div style=\"float:right;text-align:left;background:url(./" . $horde_img . ");background-position:right;width:" . $c . "px;height:20px;\">";
						if($show_percent) {
							echo "<font style=\"color:#FFFFFF;font-weight:bold;\">$hp%</font>";
						}
						echo "</div>
						</div>";
						?></center>
						</div>
						<!--<div class="sidebar-module " id="sidebar-friends" style="">
						<div class="sidebar-title">
						<h3 class="category title-friends">						
						<a href="">
						Guild Loot News
						<span class="sidebar-count">(Number)</span>
							</a>
							</h3>
							</div>
							<div class="sidebar-content">
							<div id="news-list">
							<ul class="activity-feed activity-feed-wide">
							<li data-id="15421221" class="item-looted first">
							<dl>
							<dd>
							<a href="" class="color-q4">
							<span class="icon-frame frame-18 " style="background-image: url(http://eu.media.blizzard.com/wow/icons/18/inv_sword_07.jpg);">
							</span>
							</a>
							<a href="">Crankboy</a> obtained <a href="http://www.wowhead.com/item=71325" class="color-q4">The Horseman's Sinister Saber</a>.
							</dd>
							<dt>in 1 hour</dt>
							</dl>
							</li>
							<li data-id="15420371" class="item-purchased">
							<dl>
							<dd>
							<a href="" class="color-q4">
							<span class="icon-frame frame-18 " style="background-image: url(http://eu.media.blizzard.com/wow/icons/18/inv_gauntlets_cloth_pvpmage_c_01.jpg);">
							</span>
							</a>
							<a href="">Dragonz</a> purchased item <a href="http://www.wowhead.com/item=70657" class="color-q4">Vicious Gladiator's Silk Handguards</a>.
							</dd>
							<dt>in 1 hour</dt>
							</dl>
							</li>
							</div>
							</div>
							</div>-->
						<!-- Do not Touch here -->
						<!-- X -->
						<div class="sidebar-module" id="sidebar-bnet-ads">
							<div class="sidebar-title"><h3 class="title-bnet-ads">Recommended Services</h3></div>
							<div class="sidebar-content">
							<div class="bnet-offer">
							<!-- Sidebar No.1 of Services-->
							<div class="bnet-offer-bg"><a href="#"><img src="wow/static/images/services/more/copy.gif" width="300" height="100" alt="" /></a></div>
							<div class="desc"><a href="#">Donation Shop</a>
							<div class="subtitle">You wanna help us stay up? You wanna earn magic rewards? Donate now!</div>
							</div>
							</div>
							</div>
							<!-- Do not Touch here -->
							<div class="sidebar-content">
							<div class="bnet-offer">
							<!-- Sidebar No.2 of Services-->
							<div class="bnet-offer-bg"><a href="#"><img src="wow/static/images/services/more/freepets.gif" width="300" height="100" alt="" /></a></div>
							<div class="desc"><a href="#">Gift Voting Shop</a>
							<div class="subtitle">The Moonkin Hatchling and Lil' Ragnaros need a home! Vote now!</div>
							</div>
							</div>
							</div>
						</div>
						
						<div class="sidebar-module" id="sidebar-sotd">
							<div>
								<div class="sidebar-title">
									<h3 class="title-sotd">
										<a href="vote.php">Vote to Save the Day</a>
									</h3>
								</div>

								<div class="sidebar-content">
									<div class="sotd" style="background-image: url(wow/static/images/vote/clicky.png);">
									<a href="vote.php" class="image"> </a>
										<div class="caption">
											<a class="view">Vote is: <font color="green">Online!</font></a>
											<a href="vote.php" class="submit">Vote Now!</a>
										<span class="clear"><!-- --></span>
										</div>
									</div>
								</div>
							</div>
							<br>
							<div>
								<div class="sidebar-title">
									<h3 class="title-sotd">
										<a href="">GPS / Visitors Map</a>
									</h3>
								</div>

								<div class="sidebar-content">
									<div class="sotd" alt="Map" style="background-image: url(http://rh.revolvermaps.com/h/m/a/0/ffffff/180/10/7shj9utgbpg.png);" height="180">
									<a href="http://www.revolvermaps.com/?target=enlarge&amp;i=7omrra41w5x&amp;color=ffffff&amp;m=0" class="image"> </a>
										<div class="caption">
											<a class="view">Map / GPS is: <font color="green">Online!</font></a>
											<a href="http://www.revolvermaps.com/?target=enlarge&amp;i=7omrra41w5x&amp;color=ffffff&amp;m=0" class="submit">Check Online Now!</a>
										<span class="clear"><!-- --></span>
										</div>
									</div>
								</div>
							</div>
							
						</div>

						<div class="sidebar-module" id="sidebar-forums">
							<div class="sidebar-title">
								<h3 class="title-forums">Popular Topics</h3>
							</div><br />
							<div align="center">
							Loading Forum Settings...
							<div class="sidebar-content loading"></div>
							</div>
						</div>
 
					</div>
					<span class="clear"><!-- --></span>
				</div>
			</div>
		</div>
	</div>
	<?php include("footer.php"); ?>
</div>
</body>
</html>
