<?php
include("configs.php");
$page_cat = "account";
?>
<?php
include("functions/configs.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-gb">
<head>
<title><?php echo $website['title']; ?> - Character Unstuck</title>
<meta content="false" http-equiv="imagetoolbar" />
<meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible" />
<link rel="shortcut icon" href="wow/static/local-common/images/favicons/bam.ico" type="image/x-icon"/>
<link rel="search" type="application/opensearchdescription+xml" href="http://eu.battle.net/en-gb/data/opensearch" title="Battle.net Search" />
<link rel="stylesheet" type="text/css" media="all" href="wow/static/local-common/css/management/common.css" />
<!--[if IE]><link rel="stylesheet" type="text/css" media="all" href="wow/static/local-common/css/common-ie.css?v22" /><![endif]-->
<!--[if IE 6]><link rel="stylesheet" type="text/css" media="all" href="wow/static/local-common/css/common-ie6.css?v22" /><![endif]-->
<!--[if IE 7]><link rel="stylesheet" type="text/css" media="all" href="wow/static/local-common/css/common-ie7.css?v22" /><![endif]-->
<link rel="stylesheet" type="text/css" media="all" href="wow/static/css/bnet.css" />
<link rel="stylesheet" type="text/css" media="print" href="wow/static/css/bnet-print.css" />
<link rel="stylesheet" type="text/css" media="all" href="wow/static/css/inputs.css?v21" />
<!--[if IE 6]><link rel="stylesheet" type="text/css" media="all" href="wow/static/css/inputs-ie6.css?v21" /><![endif]-->
<!--[if IE]><link rel="stylesheet" type="text/css" media="all" href="wow/static/css/inputs-ie.css?v21" /><![endif]-->
<link rel="stylesheet" type="text/css" media="all" href="wow/static/css/management/wow/merge/wow-merge.css?v21" />
<!--[if IE]><link rel="stylesheet" type="text/css" media="all" href="wow/static/css/bnet-ie.css?v21" /><![endif]-->
<!--[if IE 6]><link rel="stylesheet" type="text/css" media="all" href="wow/static/css/bnet-ie6.css?v21" /><![endif]-->
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
<body class="en-gb wowconv logged-in">
<div id="layout-top">
<div class="wrapper">
<div id="header">
<?php include("functions/navigation.php"); ?>
<?php include("functions/footer_man_nav.php"); ?>
</div>
<div id="layout-middle">
<div class="wrapper">
<div id="content">
<div id="account-progress">
<span>Progress 100%</span> [Step 1 of 1]
<div id="progress-bar" class="border-3">
<div id="current-progress" class="border-3" style="width: 100%"></div>
</div>
</div>
<div id="notKRAccount" class="noregion-merge" style="display: none;">
<div class="alert caution border-4 glow-shadow">
<div class="alert-inner">
<div class="alert-message">
<p class="title"><strong>Game Region Warning</strong></p>
<p>You should change your country to Korea, republic of and verify your Personal Residence Number to use Korean games.</p>
</div>
</div>
<span class="clear"><!-- --></span>
</div>
</div>
<div id="mergeNA" class="noregion-merge" style="display: none;">
<div class="alert caution border-4 glow-shadow">
<div class="alert-inner">
<div class="alert-message">
<p class="title"><strong>Game Region Warning</strong></p>
<p>The World of Warcraft account merge process is not yet available in your region.</p>
</div>
</div>
<span class="clear"><!-- --></span>
</div>
</div>
<div class="caution" id="kr-merge-alert" style="display: none;">
<div class="alert caution border-4 glow-shadow">
<div class="alert-inner">
<div class="alert-message">
<p>If you lost your authenticator, please detach it before proceeding. (Security card service ended 8/13/2010 and was automatically detached.) <a href="http://www.worldofwarcraft.co.kr/myworld/security/unbind-form.do" target="_blank">Detach your authenticator</a>.<br /><br /><a href="http://kr.blizzard.com/support/article.xml?articleId=21140&amp;categoryId=1614&amp;parentCategoryId=&amp;pageNumber=1" target="_blank">Read more</a>.</p>
</div>
</div>
<span class="clear"><!-- --></span>
</div>
</div>
<div class="caution" id="tw-warning" style="display: none;">
<div class="alert caution border-4 glow-shadow">
<div class="alert-inner">
<div class="alert-message">
<p class="title"><strong>If you use Phone Lock: please unlock your World of Warcraft account before merging.</strong></p>
<p>
Taiwan: 0800-303-585<br />
<em>(Not available 10–11AM every first Wed of the month)</em>
</p>
<p>Hong Kong &amp; Macau: 396-54666</p>
</div>
</div>
<span class="clear"><!-- --></span>
</div>
</div>
<div id="page-header">
<span class="float-right"><span class="form-req">*</span> Required</span>
<h2 class="subcategory">Game Management</h2>
<h3 class="headline">Unstuck your World of Warcraft Character</h3>
</div>
<p>Enter the username and password of the World of Warcraft account and the Character you wish to transfer from the stucked area. You will have the opportunity to move or to continue your journey ingame. You must be offline from your account to let this succeed.</p>
<div id="page-content">
<form method="post" action="" class="account-merge" id="account-merge">
<?php
function char_unstuck(){
global $host, $user, $pass, $logon, $char;
if(isset($_POST['unstuck'])){
//Connect To Database
$connect = mysql_connect("$host", "$user", "$pass") or die('Connection Error: ' . mysql_error());
//Get Username From Input
$username = $_POST['username'];
//Get Password From Input
$password = $_POST['password'];
//Get Character From Input
$character = $_POST['char'];
//Encrypt Password
$password = sha1(strtoupper($username) . ":" . strtoupper($password));
//Check If Account Is Valid
$valid_account = mysql_query("SELECT * FROM $logon.account WHERE username='$username' AND sha_pass_hash='$password'");
$account_valid = mysql_num_rows($valid_account);
if($account_valid != 1){print'Invalid Account.<br/>';}else{
//Account Is Valid, Now Check If Character Is Valid
while($get_char = mysql_fetch_array($valid_account)){
$valid_char = mysql_query("SELECT * FROM $char.characters WHERE name='$character'");
$char_valid = mysql_num_rows($valid_char);
if($char_valid != 1){print'Invalid Character.<br/>';}else{
//Character Is Valid, Check If Character Belongs To Account
$char_acc = mysql_query("SELECT * FROM $char.characters WHERE account='".$get_char['id']."' AND name='$character'");
$acc_char = mysql_num_rows($char_acc);
if($acc_char != 1){print'That Character Is Not Yours.<br/>';}else{
//Get Character HomeBind
while($acc_id = mysql_fetch_array($char_acc)){
$homeb = mysql_query("SELECT * FROM $char.character_homebind WHERE guid='".$acc_id['guid']."'");
while($home = mysql_fetch_array($homeb)){
$px = $home['position_x'];//Position X
$py = $home['position_y'];//Position Y
$pz = $home['position_z'];//Position Z
$z = $home['zone'];//Zone
$m = $home['map'];//Map
//Unstuck Character
$unstuck = mysql_query("UPDATE $char.characters SET position_x = '$px', position_y = '$py', position_z = '$pz', zone = '$z', map = '$m' WHERE name='$character'") or die('UnStuck Failed: ' . mysql_error());
//Success
print'Your character is unlocked.';
}}}}}}}}
print'<table align="center">
<form action="" method="post">
<tr>
<div id="wowLogin">
<div class="input-row input-row-text">
<span class="input-left">
<label for="username">
<span class="label-text">
World of Warcraft Account Name:
</span>
<span class="input-required">*</span>
</label>
</span>
<span class="input-right">
<span class="input-text input-text-small">
<input type="text" name="username" value="" id="username" class="small border-5 glow-shadow-2" autocomplete="off" tabindex="1" required="required" />
<span class="inline-message" id="username-message"></span>
</span>
</span>
</div>
<div id="wowLogin">
<div class="input-row input-row-text">
<span class="input-left">
<label for="username">
<span class="label-text">
World of Warcraft Account Character:
</span>
<span class="input-required">*</span>
</label>
</span>
<span class="input-right">
<span class="input-text input-text-small">
<input type="text" name="char" value="" id="char" class="small border-5 glow-shadow-2" autocomplete="off" tabindex="1" required="required" />
<span class="inline-message" id="username-message"></span>
</span>
</span>
</div>
<div class="input-row input-row-text">
<span class="input-left">
<label for="password">
<span class="label-text">
World of Warcraft Account Password:
</span>
<span class="input-required">*</span>
</label>
</span>
<span class="input-right">
<span class="input-text input-text-small">
<input type="password" id="password" name="password" value="" class="small border-5 glow-shadow-2" autocomplete="off" onpaste="return false;" maxlength="16" tabindex="1" required="required" />
<span class="inline-message" id="password-message"><a id="pwLink" class="icon-external" href="" onclick="window.open(this.href);return false" tabindex="1">
Forgot your password?
</a>
<p id="pwLinkNo" style="display:none;">If you have forgotten your World of Warcraft password, please contact <a href="" target="_blank">Customer Support</a>.</p>
</span>
</span>
</span>
</div>
<fieldset class="ui-controls " >
<button
class="ui-button button1 "
type="submit"
name="unstuck"
value="Unstuck!"
id="merge-submit"
tabindex="1">
<span>
<span>Continue</span>
</span>
</button>
<a class="ui-cancel "
href="/account/"
tabindex="1">
<span>
Cancel </span>
</a>
</fieldset>
</form>
</table>
<center>';
char_unstuck();
print'</center>';
?>



</div>


<script type="text/javascript">
//<![CDATA[
(function() {
var mergeSubmit = document.getElementById('merge-submit');
mergeSubmit.disabled = 'disabled';
mergeSubmit.className = mergeSubmit.className + ' disabled';
})();
//]]>
</script>
</form>
</div>
<script type="text/javascript">
//<![CDATA[
$(function() {
var inputs = new Inputs('#account-merge');
var mergeForm = new AccountMerge('#account-merge', {
captchaRegions: [ 'US', 'EU', 'KR', 'TW' ],
accountCountry: 'GRC'
});
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
var xsToken = 'b213c993-d61d-4957-9141-9da399fd7d54';
var Msg = {
support: {
ticketNew: 'Ticket {0} was created.',
ticketStatus: 'Ticket {0}’s status changed to {1}.',
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
<script type="text/javascript" src="wow/static/js/bam.js?v21"></script>
<script type="text/javascript" src="wow/static/local-common/js/tooltip.js?v22"></script>
<script type="text/javascript" src="wow/static/local-common/js/menu.js?v22"></script>
<script type="text/javascript">
$(function() {
Menu.initialize();
Menu.config.colWidth = 190;
Locale.dataPath = 'data/i18n.frag.xml';
});
</script>
<!--[if lt IE 8]>
<script type="text/javascript" src="wow/static/local-common/js/third-party/jquery.pngFix.pack.js?v22"></script>
<script type="text/javascript">$('.png-fix').pngFix();</script>
<![endif]-->
<script type="text/javascript" src="wow/static/js/inputs.js?v21"></script>
<script type="text/javascript" src="wow/static/js/management/wow/merge/account-merge.js?v21"></script>
<script type="text/javascript">
//<![CDATA[
Core.load("wow/static/local-common/js/overlay.js?v22");
Core.load("wow/static/local-common/js/search.js?v22");
Core.load("wow/static/local-common/js/third-party/jquery-ui-1.8.6.custom.min.js?v22");
Core.load("wow/static/local-common/js/third-party/jquery.mousewheel.min.js?v22");
Core.load("wow/static/local-common/js/third-party/jquery.tinyscrollbar.custom.js?v22");
Core.load("wow/static/local-common/js/login.js?v22", false, function() {
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
