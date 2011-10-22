<?php
include("configs.php");
$page_cat = 'summary';
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-gb">
<head>
<title><?php echo $website['title']; ?> - Account Management</title>
<meta content="false" http-equiv="imagetoolbar" />
<meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible" />
<link rel="shortcut icon" href="local-common/images/favicons/bam.ico" type="image/x-icon"/>
<link rel="search" type="application/opensearchdescription+xml" href="http://eu.battle.net/en-gb/data/opensearch" title="Battle.net Search" />
<link rel="stylesheet" type="text/css" media="all" href="wow/static/local-common/css/management/common.css" />
<!--[if IE]><link rel="stylesheet" type="text/css" media="all" href="local-common/css/common-ie.css" /><![endif]-->
<!--[if IE 6]><link rel="stylesheet" type="text/css" media="all" href="local-common/css/common-ie6.css" /><![endif]-->
<!--[if IE 7]><link rel="stylesheet" type="text/css" media="all" href="local-common/css/common-ie7.css" /><![endif]-->
<link rel="stylesheet" type="text/css" media="all" href="wow/static/css/bnet.css" />
<link rel="stylesheet" type="text/css" media="print" href="wow/static/css/bnet-print.css" />
<link rel="stylesheet" type="text/css" media="all" href="wow/static/css/management/dashboard.css" />
<link rel="stylesheet" type="text/css" media="all" href="wow/static/css/management/wow/dashboard.css" />
<!--[if IE]><link rel="stylesheet" type="text/css" media="all" href="/css/management/wow/dashboard-ie.css" /><![endif]-->
<!--[if IE 6]><link rel="stylesheet" type="text/css" media="all" href="/css/management/dashboard-ie6.css" /><![endif]-->
<!--[if IE]><link rel="stylesheet" type="text/css" media="all" href="css/bnet-ie.css" /><![endif]-->
<!--[if IE 6]><link rel="stylesheet" type="text/css" media="all" href="css/bnet-ie6.css" /><![endif]-->
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
Core.sharedStaticUrl= 'local-common';
Core.baseUrl = '/account';
Core.supportUrl = 'http://eu.battle.net/support/';
Core.secureSupportUrl= 'https://eu.battle.net/support/';
Core.project = 'bam';
Core.locale = 'en-gb';
Core.buildRegion = 'eu';
Core.shortDateFormat= 'dd/MM/yyyy';
Core.dateTimeFormat = 'dd/MM/yyyy HH:mm';
Core.loggedIn = true;
Flash.videoPlayer = 'http://eu.media.blizzard.com/global-video-player/themes/bam/video-player.swf';
Flash.videoBase = 'http://eu.media.blizzard.com/bam/media/videos';
Flash.ratingImage = 'http://eu.media.blizzard.com/global-video-player/ratings/bam/rating-pegi.jpg';
Flash.expressInstall= 'http://eu.media.blizzard.com/global-video-player/expressInstall.swf';
var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-544112-16']);
_gaq.push(['_trackPageview']);
_gaq.push(['_trackPageLoadTime']);
//]]>
</script>
</head>
<body class="en-gb logged-in">
<div id="layout-top">
<div class="wrapper">
<div id="header">
<?php include("functions/header_account.php"); ?>
<?php include("functions/footer_man_nav.php"); ?>
</div>
</li>
</ul>
<div id="warnings-wrapper">
<!--[if lt IE 8]>
<div id="browser-warning" class="warning warning-red">
<div class="warning-inner2">
You are using an outdated web browser.<br />
<a href="http://eu.blizzard.com/support/article/browserupdate">Upgrade</a> or <a href="http://www.google.com/chromeframe/?hl=en-GB" id="chrome-frame-link">install Google Chrome Frame</a>.
<a href="#close" class="warning-close" onclick="App.closeWarning('#browser-warning', 'browserWarning'); return false;"></a>
</div>
</div>
<![endif]-->
<!--[if lte IE 8]>
<script type="text/javascript" src="wow/static/local-common/js/third-party/CFInstall.min.js?v22"></script>
<script type="text/javascript">
//<![CDATA[
$(function() {
var age = 365 * 24 * 60 * 60 * 1000;
var src = 'https://www.google.com/chromeframe/?hl=en-GB';
if ('http:' == document.location.protocol) {
src = 'http://www.google.com/chromeframe/?hl=en-GB';
}
document.cookie = "disableGCFCheck=0;path=/;max-age="+age;
$('#chrome-frame-link').bind({
'click': function() {
App.closeWarning('#browser-warning');
CFInstall.check({
mode: 'overlay',
url: src
});
return false;
}
});
});
//]]>
</script>
<![endif]-->
<noscript>
<div id="javascript-warning" class="warning warning-red">
<div class="warning-inner2">
JavaScript must be enabled to use this site.
</div>
</div>
</noscript>
</div>
</div>
</div>
</div>
<div id="layout-middle">
<div class="wrapper">
<div id="content">
<div class="dashboard wowx3 eu">
<div class="primary">
<div class="header">
<h2 class="subcategory">Game Management</h2>
<h3 class="headline">World of Warcraft&#174;: Cataclysm</h3>
<a href=""><img src="wow/static/local-common/images/game-icons/wowx3.png" alt="World of Warcraft®" title="" width="48" height="48" /></a>
</div>
<div class="account-summary">
<div class="account-management">
<div class="section box-art" id="box-art">
<img src="wow/static/local-common/images/game-boxes/en-gb/wowx3-big.png" alt="World of Warcraft®" title="" width="242" height="288" id="box-img" />
</div>
<div class="section account-details">
<dl>
<dt class="subcategory">Account Name</dt>
<dd class="account-name"><?php echo strtolower($_SESSION['username']); ?></dd>
<dt class="subcategory">Status</dt>
<dd class="account-status"> <span><strong class="active">Active</strong></span>
</dd>
<dt class="subcategory">Current Game Source</dt>
<dd class="account-details"> 100% Days
</dd>
<dt class="subcategory">Expansion Pack</dt>
<dd class="account primary-account"><span class="account-history">Cataclysm</span>
<em><a href="">Change</a></em></dd>
<dd class="account secondary-account">Wrath of the Lich King
<em><a href="">Change</a></em></dd>
<dd class="account secondary-account">The Burning Crusade
<em><a href="">Change</a></em></dd>
<dd class="account secondary-account oldest-account">World of Warcraft
<em><a href="">Change</a></em></dd>
<dt class="subcategory">Region</dt>
<dd class="region eu">Europe (EU)</dd>
<dt class="subcategory"><?php echo $website['title']; ?> Donator</dt>
<dd><strong class="unsubscribed">Unsubscribed</strong></dd>
</dl>
</div>
<div class="section available-actions">
<ul class="game-time">
<li class="change-payment-method">
<a href="">Donate / Buy Subscription</a>
</li>
<li class="change-payment-method">
<a href="vote.php">Vote and Get Rewarded</a>
</li>
<li class="add-game-card">
<a href="change-password.php">Change your Password</a>
</li>
<li class="payment-history">
<a href="">View Account History</a>
</li>
<li class="download-guide">
<a href="">Download Beginner's Guide</a>
</li>
<li class="download-client">
<a href="game_client.php">Download Game Client</a>
</li>
</ul>
</div>
</div>
<div class="dashboard-form" id="enter-game-key">
<form action="" method="post">
<div class="hiddenInputWrapper">
<input type="hidden" name="confirmed" value="true" />
<input type="hidden" name="codeType" value="WOW" />
<input type="hidden" name="wowAccountLabel" value="<?php echo strtolower($_SESSION['username']); ?>" />
<input type="hidden" name="legalAgreementAccepted" value="false" />
<input type="hidden" name="product" value="" />
<input type="hidden" name="region" value="EU" />
</div>
<h4>Enter your Game Key</h4>
<p></p>
<p class="simple-input">
<input type="text" name="gameKey" value="" class="input border-5 glow-shadow-2" maxlength="320" tabindex="1" />
<button
class="ui-button button1 disabled"
type="submit"
disabled="disabled"
tabindex="1">
<span>
<span>Upgrade Account</span>
</span>
</button>
<a class="ui-cancel "
href="#"
onclick="DashboardForm.hide($('#enter-game-key')); return false;"
tabindex="1">
<span>
Cancel </span>
</a>
</p>
<p>Not case-sensitive, no spaces or hyphens required.</p>
</form>
</div>
</div>
</div>
<div class="secondary">
<div class="service-selection character-services">
<ul class="wow-services">
<li class="category"><a href="#character-services" class="character-services">Character Services</a></li>
<li class="category"><a href="#additional-services" class="additional-services">Additional Services</a></li>
<li class="category"><a href="#referrals-rewards" class="referrals-rewards">Referrals &amp; Rewards</a></li>
<li class="category"><a href="#game-time-subscriptions" class="game-time-subscriptions">Game Time &amp; Subscriptions</a></li>
</ul>
<div class="service-links">
<div class="position"></div>
<div class="content character-services" id="character-services">
<ul>
<li class="wow-service pct">
<a href="">
<span class="icon glow-shadow-3"></span>
<strong>Character Transfer</strong>
Move your characters to different realms or accounts.
</a>
</li>
<li class="wow-service pfc">
<a href="">
<span class="icon glow-shadow-3"></span>
<strong>Faction Change</strong>
Change a character's faction (Horde to Alliance or Alliance to Horde).
</a>
</li>
<li class="wow-service prc">
<a href="">
<span class="icon glow-shadow-3"></span>
<strong>Race Change</strong>
Change a character's race (within your current faction).
</a>
</li>
<li class="wow-service pnc">
<a href="">
<span class="icon glow-shadow-3"></span>
<strong>Name Change</strong>
Change your characters' names.
</a>
</li>
<li class="wow-service pcc">
<a href="">
<span class="icon glow-shadow-3"></span>
<strong>Appearance Change</strong>
Change your characters' appearance (Optional name change included).
</a>
</li>
<li class="wow-service char-move">
<a href="chars-unst.php">
<span class="icon glow-shadow-3"></span>
<strong>Character Unstuck</strong>
Transfer your characters when he gets stuck.
</a>
</li>
</ul>
</div>
<div class="content additional-services" id="additional-services">
<ul>
<li class="wow-service ptr-copy">
<a href="">
<span class="icon glow-shadow-3"></span>
<strong>Public Test Realm</strong>
Copy your characters to the Public Test Realms.
</a>
</li>
<li class="wow-service arena-tournament-closed">
<a href="" onclick="return Core.open(this);">
<span class="icon glow-shadow-3"></span>
<strong>Arena Pass (Closed)</strong>
Arena Pass registration is currently closed. Click here for more information.
</a>
</li>
<li class="wow-service parental-controls">
<a href="">
<span class="icon glow-shadow-3"></span>
<strong>Parental Controls</strong>
Manage, monitor, and limit your child's play time.
</a>
</li>
<li class="wow-service esports">
<a href="" onclick="return Core.open(this);">
<span class="icon glow-shadow-3"></span>
<strong>Blizzard eSports by ESL TV</strong>
Watch exciting eSports matches and in-depth TV shows exploring the competitive side of Blizzard Entertainment games.
</a>
</li>
</ul>
</div>
<div class="content referrals-rewards" id="referrals-rewards">
<ul>
<li class="wow-service raf">
<a href="">
<span class="icon glow-shadow-3"></span>
<strong>Recruit a Friend</strong>
Earn game time, in-game rewards, and more by recruiting your friends.
</a>
</li>
<li class="wow-service resurrection-scroll">
<a href="raf-invite.php">
<span class="icon glow-shadow-3"></span>
<strong>Refer a Friend</strong>
Get more Friends, to <?php echo $website['title']; ?>.
</a>
</li>
</ul>
</div>
<div class="content game-time-subscriptions" id="game-time-subscriptions">
<ul>
<li class="wow-service add-game-card">
<a href="">
<span class="icon glow-shadow-3"></span>
<strong>Add a Game Card</strong>
Add World of Warcraft game time to your account in prepaid intervals.
</a>
</li>
<li class="wow-service wow-anywhere">
<a href="">
<span class="icon glow-shadow-3"></span>
<strong>World of Warcraft Remote</strong>
Use all the features of the Remote Auction House.
</a>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>
<!--[if lt IE 7]> <script type="text/javascript" src="local-common/js/third-party/DD_belatedPNG.js"></script>
<script type="text/javascript">
//<![CDATA[
DD_belatedPNG.fix('.download a .icon');
//]]>
</script>
<![endif]-->
<script type="text/javascript">
//<![CDATA[
$(function() {
var times = new DateTime();
});
//]]>
</script>
</div>
</div>
</div>
<div id="layout-bottom">
<?php include("functions/footer_man.php"); ?>
</div>
<script type="text/javascript">
//<![CDATA[
var xsToken = '3dfc660d-d3a2-4e3c-a7c4-c73e23a74175';
var Msg = {
support: {
ticketNew: 'Ticket {0} was created.',
ticketStatus: 'Ticket {0}'s status changed to {1}.',
ticketOpen: 'Open',
ticketAnswered: 'Answered',
ticketResolved: 'Resolved',
ticketCanceled: 'Cancelled',
ticketArchived: 'Archived',
ticketInfo: 'Need Info',
ticketAll: 'View All Tickets'
},
cms: {
requestError: 'Your request cannot be completed.',
ignoreNot: 'Not ignoring this user',
ignoreAlready: 'Already ignoring this user',
stickyRequested: 'Sticky requested',
postAdded: 'Post added to tracker',
postRemoved: 'Post removed from tracker',
userAdded: 'User added to tracker',
userRemoved: 'User removed from tracker',
validationError: 'A required field is incomplete',
characterExceed: 'The post body exceeds XXXXXX characters.',
searchFor: "Search for",
searchTags: "Articles tagged:",
characterAjaxError: "You may have become logged out. Please refresh the page and try again.",
ilvl: "Item Lvl",
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
<script type="text/javascript" src="wow/static/local-common/js/third-party/swfobject.js"></script>
<script type="text/javascript" src="wow/static/js/management/dashboard.js"></script>
<script type="text/javascript" src="wow/static/js/management/wow/dashboard.js"></script>
<script type="text/javascript">
//<![CDATA[
Core.load("wow/static/local-common/js/overlay.js");
Core.load("wow/static/local-common/js/search.js");
Core.load("wow/static/local-common/js/third-party/jquery-ui-1.8.6.custom.min.js");
Core.load("wow/static/local-common/js/third-party/jquery.mousewheel.min.js");
Core.load("wow/static/local-common/js/third-party/jquery.tinyscrollbar.custom.js");
Core.load("wow/static/local-common/js/login.js", false, function() {
Login.embeddedUrl = 'https://eu.battle.net/login/login.frag';
});
//]]>
</script>
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