<?php
require_once("configs.php");
?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-gb" xmlns:xml="http://www.w3.org/XML/1998/namespace" class="chrome chrome8">
<head>
<title><?php echo $website['title']; ?> - Status</title>
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
<li class="last"><a href="servername1.php" rel="np"><?php 	require_once("configs.php");
									echo $name_realm1['realm']; 
									?></a></li>
</ol>
</div>
<div class="content-bot">
	<div class="content-header">
				<h2 class="header "><?php 	require_once("configs.php");
									echo $name_realm1['realm']; 
									?> Status</h2>

		<div class="desc">This page lists all available World of Failure Players inside the <?php 	require_once("configs.php");
									echo $name_realm1['realm']; 
									?> Realm as well as the stats of each. The Character can be listed as either Horde or Alliance. Let us apologize in advance if you find any player that is not listed, it takes 5 seconds to refresh the list.</div>
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
$con = mysql_connect($serveraddress, $serveruser, $serverpass, $serverport) or die(mysql_error());
mysql_select_db($server_cdb, $con) or die (mysql_error());
$sql = mysql_query("SELECT * FROM characters WHERE online='1' ORDER BY RAND() LIMIT 49") or die(mysql_error());
$numrows = mysql_num_rows($sql);
if($numrows > 0)
{
echo '<br /><table border="1" width="100%" style="border: 1px solid #c0c0c0;border-collapse:collapse;" align="center">
<div id="all-realms">
	<div class="table full-width">
		<table>
			<thead>
				<tr>
					<th><a href="javascript:;" class="sort-link"><span class="arrow">Name</span></a></th>
					<th><a href="javascript:;" class="sort-link"><span class="arrow">Race</span></a></th>
					<th><a href="javascript:;" class="sort-link"><span class="arrow">Class</span></a></th>
					<th><a href="javascript:;" class="sort-link"><span class="arrow">Level</span></a></th>
					<th><a href="javascript:;" class="sort-link"><span class="arrow">Location</span></a></th>
					<th><a href="javascript:;" class="sort-link"><span class="arrow">Faction</span></a></th>
					</tr>
				</thead>';
while($raw = mysql_fetch_array($sql)){
//Character Class
$cclass = $raw['class'];
if ($cclass == 1)
{
$class = "<img src='wow/static/images/icons/class/1.gif' width='18' height='18'/>";
}
elseif ($cclass == 2)
{
$class = "<img src='wow/static/images/icons/class/2.gif' width='18' height='18'/>";
}
elseif ($cclass == 3)
{
$class = "<img src='wow/static/images/icons/class/3.gif' width='18' height='18'/>";
}
elseif ($cclass == 4)
{
$class = "<img src='wow/static/images/icons/class/4.gif' width='18' height='18'/>";
}
elseif ($cclass == 5)
{
$class = "<img src='wow/static/images/icons/class/5.gif' width='18' height='18'/>";
}
elseif ($cclass == 6)
{
$class = "<img src='wow/static/images/icons/class/6.gif' width='18' height='18'/>";
}
elseif ($cclass == 7)
{
$class = "<img src='wow/static/images/icons/class/7.gif' width='18' height='18'/>";
}
elseif ($cclass == 8)
{
$class = "<img src='wow/static/images/icons/class/8.gif' width='18' height='18'/>";
}
elseif ($cclass == 9)
{
$class = "<img src='wow/static/images/icons/class/9.gif' width='18' height='18'/>";
}
elseif ($cclass == 11)
{
$class = "<img src='wow/static/images/icons/class/10.gif' width='18' height='18'/>";
}
//Character Race
$rrace = $raw['race'];
$gender = $raw['gender'];
if ($rrace == 1)
{
$race = "Human";
}
elseif ($rrace == 2)
{
$race = "Orc";
}
if ($rrace == 3)
{
$race = "Dwarf";
}
elseif ($rrace == 4)
{
$race = "Night Elf";
}
elseif ($rrace == 5)
{
$race = "Undead";
}
elseif ($rrace == 6)
{
$race = "Tauren";
}
elseif ($rrace == 7)
{
$race = "Gnome";
}
elseif ($rrace == 8)
{
$race = "Troll";
}
elseif ($rrace == 10)
{
$race = "Blood Elf";
}
elseif ($rrace == 11)
{
$race = "Draenei";
}
//Character Gender
$ggender = $raw['gender'];
if($ggender == 1)
{
$gender = "Female";
}
elseif($ggender == 0)
{
$gender = "Male";
}
//Location Map
$map = $raw['map'];
if($map == 0)
{
$location = "<b>Eastern Kingdoms</b>";
}
elseif($map == 648)
{
$location = "<b>Lost Isles / Kezan</b>";
}
elseif($map == 638)
{
$location = "<b>Gilneas City</b>";
}
elseif($map == 1)
{
$location = "<b>Kalimdor</b>";
}
elseif($map == 530)
{
$location = "<b>Outland</b>";
}
elseif($map == 571)
{
$location = "<b>Northrend</b>";
}
 // Alliance or Horde FLAG
if($rrace == 2 || $rrace == 5 || $rrace == 6 || $rrace == 8 || $rrace == 9 || $rrace == 10)
{
$bg = "<img src='wow/static/images/icons/faction/ally.gif' width='18' height='18'/>";
}
elseif($rrace == 1 || $rrace == 3 || $rrace == 4 || $rrace == 7 || $rrace == 11 || $rrace == 22)
{
$bg = "<img src='wow/static/images/icons/faction/horde.gif' width='18' height='18'/>";
}
echo '
<tr>
<td style="background-color: '.$bg.';"><b><center>'.$raw['name'].'</center></b></td>
<td style="background-color: '.$bg.';"><center><img src="wow/static/images/icons/race/'.$raw[race].'-'.$raw[gender].'.gif" title="'.$race.' '.$gender.'"/></center></td>
<td style="background-color: '.$bg.';"><center>'.$class.'</center></td>
<td style="background-color: '.$bg.';"><center>'.$raw['level'].'</center></td>
<td style="background-color: '.$bg.';"><center>'.$location.'</center></td>
<td style="background-color: '.$bg.';"><center>'.$bg.'</center></td>
</tr>';
}
echo '</tr>';
echo"</table><br />";
}
else
{
echo "<b>There are now players connected right now on.</b>";
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
<?php include("functions/footer_man.php"); ?>
<div id="fansite-menu" class="ui-fansite"></div><div id="menu-container"></div><ul class="ui-autocomplete ui-menu ui-widget ui-widget-content ui-corner-all" role="listbox" aria-activedescendant="ui-active-menuitem" style="z-index: 6; top: 0px; left: 0px; display: none; "></ul></body>
</html>