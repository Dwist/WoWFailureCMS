<?php
require_once("configs.php");
?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-gb" xmlns:xml="http://www.w3.org/XML/1998/namespace" class="chrome chrome8">
<head>
<title><?php echo $website['title']; ?> - Top Honor</title>
<meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible" />
<link rel="shortcut icon" href="wow/static/local-common/images/favicons/wow.ico" type="image/x-icon" />
<link rel="stylesheet" type="text/css" media="all" href="wow/static/local-common/css/common.css?v15" />
<!--[if IE]><link rel="stylesheet" type="text/css" media="all" href="/wow/static/local-common/css/common-ie.css?v17" /><![endif]-->
<!--[if IE 6]><link rel="stylesheet" type="text/css" media="all" href="/wow/static/local-common/css/common-ie6.css?v17" /><![endif]-->
<!--[if IE 7]><link rel="stylesheet" type="text/css" media="all" href="/wow/static/local-common/css/common-ie7.css?v17" /><![endif]-->
<link rel="stylesheet" type="text/css" media="all" href="wow/static/css/wowe6dd.css?v7" />
<link rel="stylesheet" type="text/css" media="all" href="wow/static/css/status/realmstatuse6dd.css?v7" />
<!--[if IE]><link rel="stylesheet" type="text/css" media="all" href="/wow/static/css/wow-ie.css?v7" /><![endif]-->
<!--[if IE 6]><link rel="stylesheet" type="text/css" media="all" href="/wow/static/css/wow-ie6.css?v7" /><![endif]-->
<!--[if IE 7]><link rel="stylesheet" type="text/css" media="all" href="/wow/static/css/wow-ie7.css?v7" /><![endif]-->
<script type="text/javascript" src="wow/static/local-common/js/third-party/jquery-1.4.4.min.js"></script>
<script type="text/javascript" src="wow/static/local-common/js/core.js?v15"></script>
<script type="text/javascript" src="wow/static/local-common/js/tooltip.js?v15"></script>

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
Core.loggedIn = false;
Flash.videoPlayer = 'http://eu.media.blizzard.com/wow/player/videoplayer.swf';
Flash.videoBase = 'http://eu.media.blizzard.com/wow/media/videos';
Flash.ratingImage = '../../../eu.media.blizzard.com/wow/player/rating-pegi.jpg';
var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-544112-16']);
_gaq.push(['_setDomainName', '.battle.net']);
_gaq.push(['_trackPageview']);
//]]>
</script>
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
<li><a href="status.php" rel="np">Realm Status</a></li>
<li class="last"><a href="hellscream.php" rel="np">Hellscream</a></li>
</ol>
</div>
<div class="content-bot">
	<div class="content-header">
				<h2 class="header ">Azuremyst Status</h2>

		<div class="desc">This page lists all available World of Failure Players inside the Azuremyst Realm as well as the stats of each. The Character can be listed as either Horde or Alliance. Let us apologize in advance if you find any player that is not listed, it takes 5 seconds to refresh the list.</div>
<span class="clear"><!-- --></span>
	</div>

	<div id="realm-status">
<?php include("functions/status_nav.php"); ?>
		<div class="filter-toggle">
			<a href="javascript:;" class="selected" onclick="RealmStatus.filterToggle(this)">
				
			</a>
		</div>

	<span class="clear"><!-- --></span>

		<div id="realm-filters" class="table-filters">
			<form action="#">
				<div class="filter">
					<label for="filter-status">Faction</label>
					
					<select id="filter-status" class="input select" data-filter="column" data-column="0">
						<option value="">All</option>
						<option value="up">Alliance</option>
						<option value="down">Horde</option>
					</select>
				</div>

				<div class="filter">
					<label for="filter-name">Name</label>

					<input type="text" class="input" id="filter-name" 
						   data-filter="column" data-column="1" />
				</div>

				<div class="filter">
					<label for="filter-type">Race</label>

					<select id="filter-type" class="input select" data-filter="column" data-column="2">
						<option value="">All</option>
							<option value="pve">
								Human
							</option>
							<option value="rppvp">
								Dwarf
							</option>
							<option value="pvp">
								Night Elf
							</option>
							<option value="rp">
								Gnome
							</option>
							<option value="rp">
								Draenei
							</option>
							<option value="rp">
								Worgen
							</option>
							<option value="rp">
								Orc
							</option>
							<option value="rp">
								Troll
							</option>
							<option value="rp">
								Tauren
							</option>
							<option value="rp">
								Undead
							</option>
							<option value="rp">
								Blood Elf
							</option>
							<option value="rp">
								Goblin
							</option>
					</select>
				</div>

				<div class="filter">
					<label for="filter-population">Class</label>

					<select id="filter-population" class="input select" data-filter="column" data-column="3">
						<option value="">All</option>
							<option value="high">Warrior</option>
							<option value="medium">Paladin</option>
							<option value="n/a">Rogue</option>
							<option value="low">Mage</option>
							<option value="low">Druid</option>
							<option value="low">Warlock</option>
							<option value="low">Hunter</option>
							<option value="low">Shaman</option>
							<option value="low">Priest</option>
							<option value="low">Death Knight</option>
					</select>
				</div>

				<div class="filter">
					<label for="filter-locale">Level</label>

					<select id="filter-locale" class="input select" data-column="4" data-filter="column">
						<option value="">All</option>
							<option value="spanish">Cataclysm Levels</option>
							<option value="german">WoTLK Levels</option>
							<option value="french">Burning Crusade Levels</option>
							<option value="tournament">Vanilla Levels</option>
							
					</select>
				</div>

				<div class="filter">
					<label for="filter-queue">Location</label>

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
				<?php



$connect = mysql_connect($serveraddress,$serveruser,$serverpass) OR DIE("'Can't connect with $host"); 
mysql_select_db($server_cdb,$connect) or die(mysql_error()); 

$result = mysql_query("SELECT * FROM `characters` ORDER BY `totalKills` DESC LIMIT 0 , 100 ");  

?>
<div id="all-realms">
	<div class="table full-width">
		<table>
			<thead>
				<tr>
<th><a href="javascript:;" class="sort-link"><span class="arrow">Name</span></a></th>
<th><a href="javascript:;" class="sort-link"><span class="arrow">Number</span></a></th>
<th><a href="javascript:;" class="sort-link"><span class="arrow">Level</span></a></th>
<th><a href="javascript:;" class="sort-link"><span class="arrow">Honor</span></a></th>
<th><a href="javascript:;" class="sort-link"><span class="arrow">Kills</span></a></th>
    </thead>
    <tbody>
                
<?php

while($rows = mysql_fetch_object($result)) 
{ 
 $i++; 
 $name = $rows->name; 
 $level = $rows->level;  
 $Total_Kills = $rows->totalKills;
 $Total_Honor = $rows->totalHonorPoints;
 
    echo " 
 <tr>
 <td><i>",$name,"</i></td>
 <td><center>",$i,"</center></td>
 <td><center>",$level,"</center></td>
 <td><center>",$Total_Honor,"</center></td>
 <td><center>",$Total_Kills,"</center></td>
 </tr>"; 
} 

?>
			<tbody>
			
					<tr class="row1">
						
						<td class="name">
							
						</td>
						<td class="type" data-raw="pvp">
							<span class="pvp">
									
							</span>
						</td>
						<td class="population" data-raw="Low">
							<span class="Low">
									
							</span>
						</td>
						<td class="locale">
							
						</td>
						<td class="queue" data-raw="false">
						
						</td>
					</tr>
					<tr class="row2">
						
						<td class="name">
							
						</td>
						<td class="type" data-raw="pve">
							<span class="pve">
									
							</span>
						</td>
						<td class="population" data-raw="medium">
							<span class="medium">
									
							</span>
						</td>
						<td class="locale">
							
						</td>
						<td class="queue" data-raw="false">
						
						</td>
					</tr>
					<tr class="row1">
						
						<td class="name">
							
						</td>
						<td class="type" data-raw="pvp">
							<span class="normal">
									
							</span>
						</td>
						<td class="population" data-raw="Low">
							<span class="Low">
									
							</span>
						</td>
						<td class="locale">
							
						</td>
						<td class="queue" data-raw="false">
						
						</td>
					</tr>
				<tr class="no-results" style="display: none">
					<td colspan="6"></td>
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