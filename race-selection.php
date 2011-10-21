<?php
include("configs.php");
$page_cat = "security";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-us">
<head>
<title><?php echo $website['title']; ?> - Race Change</title>
<meta content="false" http-equiv="imagetoolbar" />
<meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible" />
<link rel="shortcut icon" href="wow/static/local-common/images/favicons/bam.ico" type="image/x-icon"/>
<link rel="stylesheet" type="text/css" media="all" href="wow/static/local-common/css/management/common.css" />
<!--[if IE]> <link rel="stylesheet" type="text/css" media="all" href="wow/static/local-common/css/common-ie.css" /><![endif]-->
<!--[if IE 6]> <link rel="stylesheet" type="text/css" media="all" href="wow/static/local-common/css/common-ie6.css" /><![endif]-->
<!--[if IE 7]> <link rel="stylesheet" type="text/css" media="all" href="wow/static/local-common/css/common-ie7.css" /><![endif]-->
<link rel="stylesheet" type="text/css" media="all" href="wow/static/css/bnet.css" />
<link rel="stylesheet" type="text/css" media="print" href="wow/static/css/bnet-print.css" />
<link rel="stylesheet" type="text/css" media="all" href="wow/static/css/management/dashboard.css" />
<link rel="stylesheet" type="text/css" media="all" href="wow/static/css/management/services.css" />
<!--[if IE 6]><link rel="stylesheet" type="text/css" media="all" href="wow/static/css/management/services-ie6.css" /><![endif]-->
<link rel="stylesheet" type="text/css" media="all" href="wow/static/css/ui.css" />
<!--[if IE]><link rel="stylesheet" type="text/css" media="all" href="wow/static/css/bnet-ie.css" /><![endif]-->
<!--[if IE 6]><link rel="stylesheet" type="text/css" media="all" href="wow/static/css/bnet-ie6.css" /><![endif]-->
<!--[if IE 7]><link rel="stylesheet" type="text/css" media="all" href="wow/static/css/bnet-ie7.css" /><![endif]-->
<script type="text/javascript" src="wow/static/local-common/js/third-party/jquery-1.4.4-p1.min.js"></script>
<script type="text/javascript" src="wow/static/local-common/js/core.js"></script>
<script type="text/javascript" src="wow/static/local-common/js/tooltip.js"></script>
<!--[if IE 6]> <script type="text/javascript">
//<![CDATA[
try { document.execCommand('BackgroundImageCache', false, true) } catch(e) {}
//]]>
</script>
<![endif]-->
<script type="text/javascript">
//<![CDATA[
Core.staticUrl = '/account';
Core.sharedStaticUrl= 'wow/static/local-common';
Core.baseUrl = '/account';
Core.projectUrl = '/account';
Core.cdnUrl = 'http://eu.media.blizzard.com';
Core.supportUrl = 'http://eu.battle.net/support/';
Core.secureSupportUrl= 'https://eu.battle.net/support/';
Core.project = 'bam';
Core.locale = 'en-us';
Core.language = 'en';
Core.buildRegion = 'eu';
Core.region = 'eu';
Core.shortDateFormat= 'MM/dd/yyyy';
Core.dateTimeFormat = 'MM/dd/yyyy hh:mm a';
Core.loggedIn = true;
Flash.videoPlayer = 'http://eu.media.blizzard.com/global-video-player/themes/bam/video-player.swf';
Flash.videoBase = 'http://eu.media.blizzard.com/bam/media/videos';
Flash.ratingImage = 'http://eu.media.blizzard.com/global-video-player/ratings/bam/rating-en-us.jpg';
Flash.expressInstall= 'http://eu.media.blizzard.com/global-video-player/expressInstall.swf';
var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-544112-16']);
_gaq.push(['_setDomainName', '.blizzard.net']);
_gaq.push(['_trackPageview']);
_gaq.push(['_trackPageLoadTime']);
//]]>
</script>
</head>
<body class="en-us logged-in">
<div id="layout-top">
<div class="wrapper">
<div id="header">
<?php include("functions/header_account.php"); ?>
<?php include("functions/footer_man_nav.php"); ?>
</div>
<div id="layout-middle">
<div class="wrapper">
<div id="content">
<script type="text/javascript" src="wow/static/js/management/services.js"></script>
<div class="dashboard service">
<div class="primary">
<div class="header">
<h2 class="subcategory">Character Services</h2>
<h3 class="headline">Race Change</h3>
<a href=""><img src="wow/static/local-common/images/game-icons/wow.png" alt="World of Warcraft" width="48" height="48" /></a>
</div>
<div class="service-wrapper">
<p class="service-nav">
<a href="" class="active">Service</a>
<a href="">History/Status</a>
<a href="">Return to dashboard</a>
</p>
<div class="service-info">
<div class="service-tag">
<div class="service-tag-contents border-3">
<div class="character-icon wow-portrait-64 no-character">
</div>
<div class="service-tag-description">
<span class="character-message caption">Select a character to continue</span>
</div>
<span class="clear"><!-- --></span>
</div>
</div>
<div class="service-summary">
<p class="service-price headline">Cost: 20.00 $
</p>
<a href="" target="_blank">Race Change table of equivalences</a>
</div>
</div>
<div class="service-form">
<?php
include("configs.php");

$races = array(
1 => "Human",
2 => "Orc",
3 => "Dwarf",
4 => "Night Elf",
5 => "Undead",
6 => "Tauren",
7 => "Gnome",
8 => "Troll",
9 => "Goblin",
10 => "Blood Elf",
11 => "Draenei",
22 => "Worgen");


$genders = array(
0 => "Male",
1 => "Female");


//Database Connection
$link = mysql_connect($serveraddress, $serveruser, $serverpass) or die(mysql_error());
mysql_select_db($server_cdb) or die(mysql_error());

if (isset($_POST['changeSubmit'])) {
$result = mysql_query("UPDATE $charTable SET race={$_POST['race']}, gender={$_POST['gender']} WHERE guid={$_POST['id']}") or die(mysql_error());
if ($result) echo '<p style="color: #00CC00;">Race changed successfully</p>';
}

$query = 'SELECT guid, account, name, race, class, gender FROM '.$charTable;
if (isset($_GET['searchName'])) {
$query .= " WHERE name LIKE '{$_GET['searchName']}%'";
}
$query .= ' LIMIT '.$charLimit;

$result = mysql_query($query) or die(mysql_error());
?>
<form method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<div class="form-row required">
<label for="searchName" class="label-full ">
<strong> Search your Character:
</strong>
<span class="form-required">*</span>
</label>
<input type="text" id="searchName" name="searchName" value="<?php echo $_GET['searchName']; ?>" class=" input border-5 glow-shadow-2" maxlength="16" tabindex="1" />
</div>
</form>
<fieldset class="ui-controls " >
<button
class="ui-button button1"
type="submit"
name="submit"
id="settings-submit"
value="Search"
tabindex="1">
<span>
<span>Continue</span>
</span>
</button>
<a class="ui-cancel "
href="account_man.php"
tabindex="1">
<span>
Cancel </span>
</a>
</fieldset>



<table border="1">
<?php
//Search And Show Characters
while ($row = mysql_fetch_array($result)) { ?>
<center><tr>
<form id="<?php echo $row['guid']; ?>" method="post" action="<?php echo $_SERVER['PHP_SELF']."?searchName=".$_GET['searchName']; ?>">
<td><?php echo $row['name']; ?></td>
<td><?php getRace($row['race']); ?></td>
<td><?php getGender($row['gender']); ?></td>
<td><input type="hidden" name="id" value="<?php echo $row['guid']; ?>" /><input type="submit" name="changeSubmit" value="Set Race" /></td>
</form>
</tr>
<?php } ?>
</table></center>


<?php
//Clear DB
mysql_free_result($result);
mysql_close($link);

//Working..Function
function getRace($race) {
global $races;
$output = '<select name="race">';
foreach ($races as $key=>$val) {
$output .= '<option value="'.$key.'"';
if ("$key" == "$race") {
$output .= ' selected="selected"';
}
$output .= '>'.$val.'</option>';
}

$output .= '</select>';

echo $output;
return true;
}

function getGender($gender) {
global $genders;
$output = '<select name="gender">';
foreach ($genders as $key=>$val) {
$output .= '<option value="'.$key.'"';
if ("$key" == "$gender") {
$output .= ' selected="selected"';
}
$output .= '>'.$val.'</option>';
}

$output .= '</select>';

echo $output;
return true;
}

?>
<!--<div class="character-list">
<a href="#" class="realm opened border-2" id="active-realm" rel="character-list-hellscream">
<span class="realm-name">Realm Name</span>
</a>
<ul id="character-list-hellscream">
<li class="character border-4" id="">
<div class="character-icon wow-portrait-64-80 wow-0-4-11 glow-shadow-3">
<img src="https://eu.battle.net/static-render/eu/hellscream/207/22010063-avatar.jpg?alt=wow/static/images/2d/avatar/4-0.jpg" width="64" height="64" alt="" />
</div>
<div class="character-description">
<span class="character-name caption"><a href="" class="character-link">Crankboy - <em>I Can Pwnz></a></span>
<span class="character-class">
level 75 Night Elf Druid
</span>
</div>
</li>
</ul>
</div>-->
<div class="character-list">
<a href="#" class="realm closed border-2" rel="character-list-nordrassil">
<span class="realm-name">Realm Name</span>
</a>
</div>
<div class="character-list">
<a href="#" class="realm closed border-2" rel="character-list-lightnings-blade">
<span class="realm-name">Realm Name</span>
</a>
</div>
<div id="error-container" style="display: none;"></div>
<script type="text/javascript">
//<![CDATA[
var additionalMessages = {
'error': {
'title': 'Error:',
'serverTitle': 'Server Unavailable',
'serverDesc': 'Please try again later',
'retry': '<a href="#retry" onclick="return false;">Try Again</a>',
'multiDesc': 'Please address <a href="#retry" onclick="return false;" onmouseover="Tooltip.show(this, \'#error-container\', {\'location\': \'mouse\'});">these issues</a>',
'20012Title': 'Character is an active guild master',
'20012Desc': 'Log in and disband your guild or promote another character to guild master, then log out.',
'20016Title': 'Character has mail in mailbox',
'20016Desc': 'Log in to the game and clear your character's mailbox, then log out.',
'20032Title': 'Character's gold exceeds the limit for their level',
'20032Desc': 'Log in and reduce your character's gold so that it is under the limit, then log out.',
'20033Title': 'Character has active auctions',
'20033Desc': 'Log in and cancel your auctions, then log out.',
'20034Title': 'Logged in too recently',
'20034Desc': 'The character must be logged out for at least 20 minutes.',
'20057Title': 'Logged in too recently',
'20057Desc': 'Character has service pending.',
'20064Title': 'Already requested',
'20064Desc': 'Log in and disband your arena team or promote another character to captain, then log out.',
'unknown': 'Unknown error'
},
'loading': {
'title': 'Checking Eligibility'
},
'active': {
serviceName: 'PRC',
viewingRealm: '619'
}
};
//]]>
</script>
<a href="#" class="help-link" id="realm-selector-link" rel="realm-selector">Can't find your realm?</a>
<div class="service-interior realm-selector" id="realm-selector" style="display: none;">
<p class="caption">If you have characters on a realm not shown above, please enter the realm name and we'll try to retrieve a character list for that realm.</p>
<form method="post">
<input type="hidden" name="l" value=""/>
<input type="hidden" name="r" value="EU"/>
<div class="hiddenInputWrapper">
<input type="hidden" name="action" value="CHECK_REALM" />
</div>
<div class="form-row-stacked">
<label><strong class="secondary-label">Enter your new realm:</strong></label><br />
<div style="position:relative; margin-bottom:40px;">
<input type="text" id="realm-type-ahead" value="" class="input border-5 glow-shadow-2" autocomplete="off" />
<input type="hidden" name="sr" id="targetRealmId" value="0" />
</div>
</div>
<span class="clear"><!-- --></span>
<a class="combobox-link icon-search" style="margin-top:0px;" onclick="Services.showRealmSelectDialog();">View all realms</a>
<fieldset class="ui-controls section-stacked" >
<button
class="ui-button button1 "
type="submit"
tabindex="1"
>
<span>
<span>Check Realm</span>
</span>
</button>
<a class="ui-cancel "
href="wow/static/"
id="realm-selector-cancel"
tabindex="1">
<span>
Cancel </span>
</a>
</fieldset>
</form>
</div>
</div>
<span class="clear"><!-- --></span>
</div>
</div>
</div>
<div class="realmselect-dialog" style="display:none;" id="realmselect-dialog" title="Select a realm">
<p>Choose a realm from the available list</p>
<div class="filter-controls">
<input type="text" id="name-filter" class="border-5 glow-shadow-2" />
<select class="input border-5 glow-shadow-2" id="realm-type-filter">
<option value=""></option>
<option value="PVE">PVE</option>
<option value="PVP">PVP</option>
<option value="RP">RP</option>
<option value="RPPVP">RPPVP</option>
</select>
<select class="input border-5 glow-shadow-2" id="realm-locale-filter">
<option value=""></option>
<option value="United States">United States</option>
<option value="Oceanic">Oceanic</option>
<option value="Latin America">Latin America</option>
<option value="English">English</option>
<option value="German">German</option>
<option value="French">French</option>
<option value="Spanish">Spanish</option>
<option value="Russian">Russian</option>
<option value="CN 1">CN 1</option>
<option value="CN 2">CN 2</option>
<option value="CN 3">CN 3</option>
<option value="CN 5">CN 5</option>
<option value="CN 10">CN 10</option>
</select>
<span class="name-label">NAME</span>
<span class="realm-type-label">TYPE</span>
<span class="realm-locale-label">LOCALE</span>
<span class="button-container">
<span class="small-button" onclick="Services.filterRealmDataTable();">Filter</span>
<span class="reset-link" onclick="Services.resetRealmFilter();">Reset</span>
</span>
</div>
<div class="table-options" id="table-options-top">
<div class="option">
<ul class="ui-pagination">
<li><a href="#">…</a></li>
</ul>
</div>
<span class="position">
Showing <strong class="results-start">…</strong>–<strong class="results-end">…</strong> of <strong class="results-total">…</strong> results
</span>
</div>
<span class="clear"><!-- --></span>
<table id="realm-table">
<thead>
<tr>
<th class="guid">GUID</th>
<th class="header" scope="col" width="300"><a href="#" class="sort-link"><span class="arrow">NAME</span></a></th>
<th class="header" scope="col" width="100"><a href="#" class="sort-link"><span class="arrow">TYPE</span></a></th>
<th class="header" scope="col"><a href="#" class="sort-link"><span class="arrow">LOCALE</span></a></th>
</tr>
</thead>
</table>
<div class="table-options" id="table-options-bottom">
<div class="option">
<ul class="ui-pagination">
<li><a href="#">…</a></li>
</ul>
</div>
<span class="position">
Showing <strong class="results-start">…</strong>–<strong class="results-end">…</strong> of <strong class="results-total">…</strong> results
</span>
</div>
<span class="clear"><!-- --></span>
</div>
<script type="text/javascript">
//<![CDATA[
$(function() {
$(".realmselect-dialog").dialog("destroy");
$('.realmselect-dialog').dialog({
autoOpen: false,
modal: true,
position: "center",
resizeable: false,
closeText: "Close",
width: 570,
height: 580,
open: function() {
}
});
});
//]]>
</script>
</div>
</div>
</div>
<div id="layout-bottom">
<?php include("functions/footer_man.php"); ?>
</div><script type="text/javascript">
//<![CDATA[
var xsToken = '7abb4c16-95ff-4b34-a14b-72afd1e0b7e2';
var Msg = {
support: {
ticketNew: 'Ticket {0} was created.',
ticketStatus: 'Ticket {0}'s status changed to {1}.',
ticketOpen: 'Open',
ticketAnswered: 'Answered',
ticketResolved: 'Resolved',
ticketCanceled: 'Canceled',
ticketArchived: 'Archived',
ticketInfo: 'Need Info',
ticketAll: 'View All Tickets'
},
cms: {
requestError: 'Your request cannot be completed.',
ignoreNot: 'Not ignoring this user',
ignoreAlready: 'Already ignoring this user',
stickyRequested: 'Sticky requested',
stickyHasBeenRequested: 'You have already sent a sticky request for this topic.',
postAdded: 'Post added to tracker',
postRemoved: 'Post removed from tracker',
userAdded: 'User added to tracker',
userRemoved: 'User removed from tracker',
validationError: 'A required field is incomplete',
characterExceed: 'The post body exceeds XXXXXX characters.',
searchFor: "Search for",
searchTags: "Articles tagged:",
characterAjaxError: "You may have become logged out. Please refresh the page and try again.",
ilvl: "Level {0}",
shortQuery: "Search requests must be at least three characters long."
},
bml: {
bold: 'Bold',
italics: 'Italics',
underline: 'Underline',
list: 'Unordered List',
listItem: 'List Item',
quote: 'Quote',
quoteBy: 'Posted by {0}',
unformat: 'Remove Formating',
cleanup: 'Fix Linebreaks',
code: 'Code Blocks',
item: 'WoW Item',
itemPrompt: 'Item ID:',
url: 'URL',
urlPrompt: 'URL Address:'
},
ui: {
submit: 'Submit',
cancel: 'Cancel',
reset: 'Reset',
viewInGallery: 'View in gallery',
loading: 'Loading…',
unexpectedError: 'An error has occurred',
fansiteFind: 'Find this on…',
fansiteFindType: 'Find {0} on…',
fansiteNone: 'No fansites available.'
},
grammar: {
colon: '{0}:',
first: 'First',
last: 'Last'
},
fansite: {
achievement: 'achievement',
character: 'character',
faction: 'faction',
'class': 'class',
object: 'object',
talentcalc: 'talents',
skill: 'profession',
quest: 'quest',
spell: 'spell',
event: 'event',
title: 'title',
arena: 'arena team',
guild: 'guild',
zone: 'zone',
item: 'item',
race: 'race',
npc: 'NPC',
pet: 'pet'
},
search: {
kb: 'Support',
post: 'Forums',
article: 'Blog Articles',
static: 'General Content',
wowcharacter: 'Characters',
wowitem: 'Items',
wowguild: 'Guilds',
wowarenateam: 'Arena Teams',
other: 'Other'
}
};
//]]>
</script>
<script type="text/javascript" src="wow/static/js/bam.js"></script>
<script type="text/javascript" src="wow/static/local-common/js/tooltip.js"></script>
<script type="text/javascript" src="wow/static/local-common/js/menu.js"></script>
<script type="text/javascript">
$(function() {
Menu.initialize();
Menu.config.colWidth = 190;
Locale.dataPath = 'data/i18n.frag.xml';
});
</script>
<!--[if lt IE 8]>
<script type="text/javascript" src="wow/static/local-common/js/third-party/jquery.pngFix.pack.js"></script>
<script type="text/javascript">$('.png-fix').pngFix();</script>
<![endif]-->
<script type="text/javascript" src="wow/static/local-common/js/third-party/jquery-ui-1.8.1.custom.min.js"></script>
<script type="text/javascript" src="wow/static/local-common/js/table.js"></script>
<script type="text/javascript">
//<![CDATA[
Core.load("wow/static/local-common/js/third-party/jquery-ui-1.8.6.custom.min.js");
Core.load("wow/static/local-common/js/search.js");
Core.load("wow/static/local-common/js/login.js", false, function() {
if (typeof Login !== 'undefined') {
Login.embeddedUrl = 'https://eu.battle.net/login/login.frag';
}
});
//]]>
</script>
<!--[if lt IE 8]> <script type="text/javascript" src="wow/static/local-common/js/third-party/jquery.pngFix.pack.js"></script>
<script type="text/javascript">
//<![CDATA[
$('.png-fix').pngFix(); //]]>
</script>
<![endif]-->
<script type="text/javascript">
//<![CDATA[
(function() {
var ga = document.createElement('script');
var src = "https://ssl.google-analytics.com/ga.js";
if ('http:' == document.location.protocol) {
src = "http://www.google-analytics.com/ga.js";
}
ga.type = 'text/javascript';
ga.setAttribute('async', 'true');
ga.src = src;
var s = document.getElementsByTagName('script');
s = s[s.length-1];
s.parentNode.insertBefore(ga, s.nextSibling);
})();
//]]>
</script>
</body>
</html>
