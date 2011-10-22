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
<!--[if lt IE 8]>
<style>
.confirm-service-details {}
.confirm-service-label {float:left;}
</style>
<![endif]-->
<div class="dashboard service">
<div class="primary">
<div class="header">
<h2 class="subcategory">Character Services</h2>
<h3 class="headline">Race Change</h3>
<a href="wow/static/management/wow/dashboard.html?region=EU&amp;accountName=PAP123"><img src="wow/static/local-common/images/game-icons/wow.png" alt="World of Warcraft" width="48" height="48" /></a>
</div>
<div class="service-wrapper">
<p class="service-nav">
<a href="wow/static/management/wow/services/prc-select.html?l=PAP123&amp;r=EU" class="active">Service</a>
<a href="prc-history.html?l=PAP123&amp;r=EU&amp;s=PRC">History/Status</a>
<a href="wow/static/management/wow/dashboard.html?accountName=PAP123&amp;region=EU">Return to dashboard</a>
</p>
<div class="service-info">
<div class="service-tag">
<div class="service-tag-contents border-3">
<div class="character-icon wow-portrait-64-80 wow-0-4-6 glow-shadow-3">
<img src="https://eu.battle.net/static-render/eu/hellscream/182/32353974-avatar.jpg?alt=wow/static/images/2d/avatar/4-0.jpg" width="64" height="64" alt="" />
</div>
<div class="service-tag-description">
<span class="character-name caption">Simitis</span>
<span class="character-class"> level 85 Night Elf Death Knight
</span>
<span class="character-realm">Hellscream</span>
</div>
<span class="clear"><!-- --></span>
</div>
</div>
<div class="service-summary">
<p class="service-price headline">20.00 €</p>
<a href="http://www.worldofwarcraft.com/info/race-change/index.xml" target="_blank">Race Change table of equivalences</a>
</div>
</div>
<div class="service-form">
<div class="service-interior light">
<h3 class="headline">Confirm the changes for this character:</h3>
<div class="confirm-service">
<span class="confirm-service-label pad-bottom">New Race:</span>
<span class="confirm-service-details">
Please select the Race and Gender Change that you want to do.<br />
<em>
You will select a new character race from the FACTION races that can be CLASS.
</em>
</span>
</div>
<span class="clear"><!-- --></span>
<form method="POST" action="prc-confirm.html?l=PAP123&amp;sr=619&amp;r=EU&amp;c=32353974">
<div class="service-interior light">
<fieldset class="ui-controls section-stacked override" >
<button
class="ui-button button1 "
type="submit"
tabindex="1"
>
<span>
<span>Continue to Payment</span>
</span>
</button>
<a class="ui-cancel "
href="wow/static/management/wow/services/prc-tos.html?l=PAP123&amp;r=EU&amp;sr=619&amp;c=32353974"
tabindex="1">
<span>
Back </span>
</a>
</fieldset>
</div>
</form>
</div>
</div>
<span class="clear"><!-- --></span>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="layout-bottom">
<?php include("functions/footer_man.php"); ?>
</div><script type="text/javascript">
//<![CDATA[
var xsToken = '';
var Msg = {
support: {
ticketNew: 'Ticket {0} was created.',
ticketStatus: 'Ticket {0}’s status changed to {1}.',
ticketOpen: 'Open',
ticketAnswered: 'Answered',
ticketResolved: 'Resolved',
ticketCanceled: 'Canceled',
ticketArchived: 'Archived',
ticketInfo: 'Need Info',
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
<script type="text/javascript" src="wow/static/js/bam.js?v23"></script>
<script type="text/javascript" src="wow/static/local-common/js/tooltip.js?v35"></script>
<script type="text/javascript" src="wow/static/local-common/js/menu.js?v35"></script>
<script type="text/javascript">
$(function() {
Menu.initialize();
Menu.config.colWidth = 190;
Locale.dataPath = 'data/i18n.frag.xml';
});
</script>
<!--[if lt IE 8]>
<script type="text/javascript" src="wow/static/local-common/js/third-party/jquery.pngFix.pack.js?v35"></script>
<script type="text/javascript">$('.png-fix').pngFix();</script>
<![endif]-->
<script type="text/javascript">
//<![CDATA[
Core.load("wow/static/local-common/js/third-party/jquery-ui-1.8.6.custom.min.js?v35");
Core.load("wow/static/local-common/js/search.js?v35");
Core.load("wow/static/local-common/js/login.js?v35", false, function() {
if (typeof Login !== 'undefined') {
Login.embeddedUrl = 'https://eu.battle.net/login/login.frag';
}
});
//]]>
</script>
<!--[if lt IE 8]> <script type="text/javascript" src="wow/static/local-common/js/third-party/jquery.pngFix.pack.js?v35"></script>
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