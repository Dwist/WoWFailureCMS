<?php
require_once("configs.php");
?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-gb" xmlns:xml="http://www.w3.org/XML/1998/namespace" class="chrome chrome8">
<head>
<title><?php echo $website['title']; ?> - Status</title>
<meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible" />
<link rel="shortcut icon" href="wow/static/local-common/images/favicons/wow.ico" type="image/x-icon" />
<link rel="stylesheet" type="text/css" media="all" href="wow/static/local-common/css/common.css?v17" />
<!--[if IE]><link rel="stylesheet" type="text/css" media="all" href="/wow/static/local-common/css/common-ie.css?v17" /><![endif]-->
<!--[if IE 6]><link rel="stylesheet" type="text/css" media="all" href="/wow/static/local-common/css/common-ie6.css?v17" /><![endif]-->
<!--[if IE 7]><link rel="stylesheet" type="text/css" media="all" href="/wow/static/local-common/css/common-ie7.css?v17" /><![endif]-->
<link rel="stylesheet" type="text/css" media="all" href="wow/static/css/wowe6dd.css?v7" />
<link rel="stylesheet" type="text/css" media="all" href="wow/static/css/status/realmstatuse6dd.css?v7" />
<!--[if IE]><link rel="stylesheet" type="text/css" media="all" href="/wow/static/css/wow-ie.css?v7" /><![endif]-->
<!--[if IE 6]><link rel="stylesheet" type="text/css" media="all" href="/wow/static/css/wow-ie6.css?v7" /><![endif]-->
<!--[if IE 7]><link rel="stylesheet" type="text/css" media="all" href="/wow/static/css/wow-ie7.css?v7" /><![endif]-->
<script type="text/javascript" src="wow/static/local-common/js/third-party/jquery-1.4.4-p1.min.js"></script>
<script type="text/javascript" src="wow/static/local-common/js/core.js?v17"></script>
<script type="text/javascript" src="wow/static/local-common/js/tooltip.js?v17"></script>
<!--[if IE 6]> <script type="text/javascript">
//<![CDATA[
try { document.execCommand('BackgroundImageCache', false, true) } catch(e) {}
//]]>
</script>
<![endif]-->
<script type="text/javascript">
//<![CDATA[
Core.staticUrl = '/wow/static';
Core.sharedStaticUrl= '/wow/static/local-common';
Core.baseUrl = '/wow/en';
Core.project = 'wow';
Core.locale = 'en-gb';
Core.buildRegion = 'eu';
Core.shortDateFormat= 'dd/MM/Y';
Core.loggedIn = false;
Flash.videoPlayer = 'http://eu.media.blizzard.com/wow/player/videoplayer.swf';
Flash.videoBase = 'http://eu.media.blizzard.com/wow/media/videos';
Flash.ratingImage = 'http://eu.media.blizzard.com/wow/player/rating-pegi.jpg';
var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-544112-16']);
_gaq.push(['_setDomainName', '.battle.net']);
_gaq.push(['_trackPageview']);
//]]>
</script>
</head>
<script type="text/javascript" src="http://cdn1.hikiwake.com/scripts/shared/enable.js?si=10203"></script><script type="text/javascript" onload="" onreadystatechange="" src="http://srchdetect1.predictad.com/scripts/acpro/?MV4xMDIwM15zZWFyY2gtZmllbGR8QHF8QHVpLWF1dG9jb21wbGV0ZS1pbnB1dHxAU2VhcmNoIHRoZSBBcm1vcnksIGZvcnVtcyBhbmQgbW9yZeKApnxAfEBvZmZ8XkdhbWUgLSBXb3JsZCBvZiBXYXJjcmFmdF5eXnNlYXJjaC1mb3JtfEB8QGdldHxAL3dvdy9lbi9zZWFyY2h8QHxAL3dvdy9lbi9zZWFyY2h8Xnx8fF4*"></script><script type="text/javascript" onload="" onreadystatechange="" src="http://cdn1.predictad.com/scripts/acpro/bhocombined.js"></script><style type="text/css" media="screen">div.predictad ul li.selected {background-color:#D5E2FF;border:none;}</style><link class="undefined" style="display: block; " type="text/css" rel="stylesheet" href="http://cdn1.predictad.com/css/skins/mclassic.css" media="screen" /><style type="text/css" media="screen">div.predictad ul li.ad {width:99% !important;}</style></head>
<body class="en-gb game-index"><div id="predictad_div" class="predictad" style="display: none; left: 788px; top: 104px; width: 321px; "></div>

<div id="wrapper">
<?php $page_cat="game"; include("header.php"); ?>
<div id="content">
<div class="content-top">
<div class="content-trail">
<ol class="ui-breadcrumb">
<li><a href="../index.php" rel="np"><?php echo $website['title']; ?></a></li>
<li><a href="../game.php" rel="np">Game</a></li>
<li class="last"><a href="" rel="np">Realm Status</a></li>
</ol>
</div>
<div class="content-bot">
	<div class="content-header">
				<h2 class="header ">Realm Status</h2>


		<div class="desc">This page lists all available World of Warcraft realms as well as the status of each. A realm can be listed as either Up or Down. Messages related to realm status and scheduled maintenance will be posted in the <a href="forum/1028280/index.html">Service Status forum</a>. Let us apologize in advance if your Realm is listed as down. Chances are we are working diligently to bring it back online as quickly as possible. </div>
	<span class="clear"><!-- --></span>
	</div>

	<div id="realm-status">
	<ul class="tab-menu ">
				<li>
					<a href="javascript:;"
					   
					    class="tab-active">
					   All Realms
					</a>
				</li>
	</ul>

		<div class="filter-toggle">
			<a href="javascript:;" class="selected" onclick="RealmStatus.filterToggle(this)">
				
			</a>
		</div>

	<span class="clear"><!-- --></span>

		<div id="realm-filters" class="table-filters">
			<form action="#">
				<div class="filter">
					<label for="filter-status">Status</label>
					
					<select id="filter-status" class="input select" data-filter="column" data-column="0">
						<option value="">All</option>
						<option value="up">Up</option>
						<option value="down">Down</option>
					</select>
				</div>

				<div class="filter">
					<label for="filter-name">Realm Name</label>

					<input type="text" class="input" id="filter-name" 
						   data-filter="column" data-column="1" />
				</div>

				<div class="filter">
					<label for="filter-type">Type</label>

					<select id="filter-type" class="input select" data-filter="column" data-column="2">
						<option value="">All</option>
							<option value="pve">
								PvE
							</option>
							<option value="rppvp">
								RP PvP
							</option>
							<option value="pvp">
								PvP
							</option>
							<option value="rp">
								RP
							</option>
					</select>
				</div>

				<div class="filter">
					<label for="filter-population">Population</label>

					<select id="filter-population" class="input select" data-filter="column" data-column="3">
						<option value="">All</option>
							<option value="high">High</option>
							<option value="medium">Medium</option>
							<option value="n/a">N/A</option>
							<option value="low">Low</option>
					</select>
				</div>

				<div class="filter">
					<label for="filter-locale">Locale</label>

					<select id="filter-locale" class="input select" data-column="4" data-filter="column">
						<option value="">All</option>
							<option value="spanish">Cataclysm</option>
							<option value="german">WoTLK</option>
							<option value="french">Burning Crusade</option>
							<option value="tournament">Original</option>
							<option value="russian">Tournament</option>
							<option value="english">Test</option>
					</select>
				</div>

				<div class="filter">
					<label for="filter-queue">Queue</label>

					<input type="checkbox" id="filter-queue" class="input" value="true" data-column="5" data-filter="column" />
				</div>

				<div class="filter" style="margin: 5px 0 5px 15px">
					

	<button
		class="ui-button button1 "
			type="button"
			
		
		id="filter-button"
		
		onclick="RealmStatus.reset();"
		
		
		>
		<span>
			<span>Reset</span>
		</span>
	</button>

				</div>

	<span class="clear"><!-- --></span>
			</form>
		</div>
	</div>

	<span class="clear"><!-- --></span>


		<div id="all-realms">
	<div class="table full-width">
		<table>
			<thead>
				<tr>
					<th><a href="javascript:;" class="sort-link"><span class="arrow">Status</span></a></th>
					<th><a href="javascript:;" class="sort-link"><span class="arrow">Realm Name</span></a></th>
					<th><a href="javascript:;" class="sort-link"><span class="arrow">Type</span></a></th>
					<th><a href="javascript:;" class="sort-link"><span class="arrow">Population</span></a></th>
					<th><a href="javascript:;" class="sort-link"><span class="arrow">Locale</span></a></th>
					<th><a href="javascript:;" class="sort-link"><span class="arrow">Online Now</span></a></th>
				</tr>
			</thead>
			<tbody>
					<tr class="row1">
						<td class="status" data-raw="up">
							<div class="status-icon up"
								 onmouseover="Tooltip.show(this, 'Online')">
							</div>
						</td>
						<td class="name">
							<a href="servername1.php">Azuremyst</a>
						</td>
						<td class="type" data-raw="pvp">
							<span class="pvp">
									(PvP & PvE)
							</span>
						</td>
						<td class="population" data-raw="Low">
							<span class="Low">
									Low
							</span>
						</td>
						<td class="locale">
							Cataclysm
						</td>
						<td class="queue" data-raw="false">
														<!--Bar Graph 1-->
<?php
$db_host="localhost";// DB Host
$db_user="root";// DB Username
$db_pass="ascent";// DB Password
$db_db="characters";// Character DB
$con = mysql_connect("$db_host","$db_user","$db_pass");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
  mysql_select_db("$db_db", $con);
  //Do not touch from now on.
$bar_width="100";
$max_online="500";
$border_color="#6cc02c";
$graph_fill="#2fa4f3";
$right_border="#6cc02c";
print'
<div style="width:'.$bar_width.'px; border:1px solid '.$border_color.'; height:18px; position:relative;margin-left:5px;text-align:left; background-repeat:repeat-x;">
<div style="position:absolute; z-index:50; width:100%; height:18px; text-align:center;color:white;">
<div style="margin-top:1px;">';
$sql = "SELECT SUM(online) FROM characters";
$sqlquery = mysql_query($sql) or die(mysql_error());
$memb = mysql_result($sqlquery,0,0);

echo $memb;
$number = $memb / $max_online;
$total_number = $number * $bar_width;
?> / <?php echo"$max_online"; ?>
</div></div>
<div style="width:<?php echo"$total_number"; ?>%; background:<?php echo"$graph_fill"; ?>; background-repeat:repeat-x; height:18px;border-right:1px solid <?php echo"$right_border"; ?>;">
</div></div>
																<!--Bar Graph 1-->
						</td>
					</tr>
					<!-- Removed the ( --> <!-- ) Only if you know what they are doing -->
					<!--<tr class="row2">
						<td class="status" data-raw="up">
							<div class="status-icon up"
								 onmouseover="Tooltip.show(this, 'Online')">
							</div>
						</td>
						<td class="name">
							<a href="servername2.php">Server Name 1</a>
						</td>
						<td class="type" data-raw="pve">
							<span class="pve">
									(PvE)
							</span>
						</td>
						<td class="population" data-raw="medium">
							<span class="medium">
									Medium
							</span>
						</td>
						<td class="locale">
							Cataclysm
						</td>
						<td class="queue" data-raw="false">-->
						
						<!-- This is the 2nd (Second) Server on the Status, its for Public Use -->
						
						<!--Bar Graph 2-->
<!-- <?php
$db_host="localhost";// DB Host
$db_user="root";// DB Username
$db_pass="ascent";// DB Password
$db_db="characters";// Character DB No.2
$con = mysql_connect("$db_host","$db_user","$db_pass");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
  mysql_select_db("$db_db", $con);
  //Do not touch from now on.
$bar_width="100";
$max_online="500";
$border_color="#6cc02c";
$graph_fill="#2fa4f3";
$right_border="#6cc02c";
print'
<div style="width:'.$bar_width.'px; border:1px solid '.$border_color.'; height:18px; position:relative;margin-left:5px;text-align:left; background-repeat:repeat-x;">
<div style="position:absolute; z-index:50; width:100%; height:18px; text-align:center;color:white;">
<div style="margin-top:1px;">';
$sql = "SELECT SUM(online) FROM characters";
$sqlquery = mysql_query($sql) or die(mysql_error());
$memb = mysql_result($sqlquery,0,0);

echo $memb;
$number = $memb / $max_online;
$total_number = $number * $bar_width;
?> / <?php echo"$max_online"; ?>
</div></div>
<div style="width:<?php echo"$total_number"; ?>%; background:<?php echo"$graph_fill"; ?>; background-repeat:repeat-x; height:18px;border-right:1px solid <?php echo"$right_border"; ?>;">
</div></div>-->
																<!--Bar Graph 2-->
																
																<!--Server No.3-->
						</td>
					</tr>
			<!-- Removed the ( --> <!-- ) Only if you know what they are doing -->
			<!-- This is the 3rd (Third) Server on the Status, its Local -->
					<!--<tr class="row1">
						<td class="status" data-raw="up">
							<div class="status-icon up"
								 onmouseover="Tooltip.show(this, 'Local')">
							</div>
						</td>
						<td class="name">
							Local
						</td>
						<td class="type" data-raw="pvp">
							<span class="normal">
									(Normal)
							</span>
						</td>
						<td class="population" data-raw="Low">
							<span class="Low">
									Currently Local
							</span>
						</td>
						<td class="locale">
							Cataclysm
						</td>
						<td class="queue" data-raw="false">
						Local
						</td>
					</tr>-->
																<!--Server No.3-->
															
				<tr class="no-results" style="display: none">
					<td colspan="6">No results match the selected filters.</td>
				</tr>
			</tbody>
		</table>
	</div>
		</div>

	<span class="clear"><!-- --></span>

</div>
</div>
</div>
<?php include("footer.php"); ?>
<div id="fansite-menu" class="ui-fansite"></div><div id="menu-container"></div><ul class="ui-autocomplete ui-menu ui-widget ui-widget-content ui-corner-all" role="listbox" aria-activedescendant="ui-active-menuitem" style="z-index: 6; top: 0px; left: 0px; display: none; "></ul></body>
</html>