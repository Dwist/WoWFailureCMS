<div id="service">
<ul class="service-bar">
<li class="service-cell service-home"><a href="#" tabindex="50" accesskey="1" title="Home"><div style="width:45px;">&nbsp;</div></a></li>
<?php if(isset($_SESSION['username'])){ ?>
<li class="service-cell service-welcome">Welcome, <a href=""><?php echo strtolower($_SESSION['username']); ?></a> | <a href="<?php echo $website['root'];?>logout.php">Log Out</a></li>
<?php }else{ ?>
<li class="service-cell service-welcome"><a href="?login" onclick="return Login.open('<?php echo $website['root'];?>login.php?<?php echo $_SESSION['sessionid']; ?>')">Log in</a> or <a href="register.php">Create an Account</a></li>
<?php } ?>
<li class="service-cell service-account"><a href="account_log.php" class="service-link" tabindex="50" accesskey="3">Account</a></li>
<li class="service-cell service-support service-support-enhanced">
<a href="#support" class="service-link service-link-dropdown" tabindex="50" accesskey="4" id="support-link" onclick="return false" style="cursor: progress" rel="javascript">Support<span class="no-support-tickets" id="support-ticket-count"></span></a>
<div class="support-menu" id="support-menu" style="display:none;">
<div class="support-primary">
<ul class="support-nav">
<li>
<a href="" tabindex="55" class="support-category">
<strong class="support-caption">Knowledge Center</strong>
Browse our support articles
</a>
</li>
<li>
<a href="" tabindex="55" class="support-category">
<strong class="support-caption">Ask a Question</strong>
Create a new support ticket
</a>
</li>
<li>
<a href="" tabindex="55" class="support-category">
<strong class="support-caption">Your Support Tickets</strong>
View your active support tickets.
</a>
<div class="ticket-summary" id="ticket-summary"></div>
</li>
</ul>
<span class="clear"><!-- --></span>
</div>
<div class="support-secondary"></div>
<!--[if IE 6]> <iframe id="support-shim" src="javascript:false;" frameborder="0" scrolling="no" style="display: block; position: absolute; top: 0; left: 9px; width: 297px; height: 400px; z-index: -1;"></iframe>
<script type="text/javascript">
//<![CDATA[
(function(){
var doc = document;
var shim = doc.getElementById('support-shim');
shim.style.filter = 'progid:DXImageTransform.Microsoft.Alpha(style=0,opacity=0)';
shim.style.display = 'block';
})();
//]]>
</script>
<![endif]-->
</div>
</li>
<li class="service-cell service-explore">
<a href="#explore" tabindex="50" accesskey="5" class="dropdown" id="explore-link" onclick="return false" style="cursor: progress" rel="javascript">Explore</a>
<div class="explore-menu" id="explore-menu" style="display:none;">
<div class="explore-primary">
<ul class="explore-nav">
<li>
<a href="index.php" tabindex="55">
<strong class="explore-caption"><?php echo $website['title']; ?></strong>
Keep your friends in game.
</a>
</li>
<li>
<a href="account_man.php" tabindex="55">
<strong class="explore-caption">Account</strong>
Manage your Account
</a>
</li>
<li>
<a href="#" tabindex="55">
<strong class="explore-caption">Support</strong>
Get Support and explore the knowledgebase.
</a>
</li>
<li>
<a href="#" tabindex="55">
<strong class="explore-caption">Donate</strong>
Donate for <?php echo $website['title']; ?>.
</a>
</li>
</ul>
<div class="explore-links">
<h2 class="explore-caption">More</h2>
<ul>
<li><a href="" tabindex="55">Retrieve Lost Account</a></li>
<li><a href="" tabindex="55">Download World of Warcraft Client</a></li>
</ul>
</div>
<span class="clear"><!-- --></span>
<!--[if IE 6]> <iframe id="explore-shim" src="javascript:false;" frameborder="0" scrolling="no" style="display: block; position: absolute; top: 0; left: 9px; width: 409px; height: 400px; z-index: -1;"></iframe>
<script type="text/javascript">
//<![CDATA[
(function(){
var doc = document;
var shim = doc.getElementById('explore-shim');
shim.style.filter = 'progid:DXImageTransform.Microsoft.Alpha(style=0,opacity=0)';
shim.style.display = 'block';
})();
//]]>
</script>
<![endif]-->
</div>
<!--<ul class="explore-secondary">
<li class="explore-game explore-game-sc2">
<a href="http://eu.battle.net/sc2/" tabindex="55">
<strong class="explore-caption">StarCraft II</strong>
<span>Community Site</span> <span>Forum Discussions</span> <span>Character Profiles and more…</span>
</a>
</li>
<li class="explore-game explore-game-wow">
<a href="http://eu.battle.net/wow/" tabindex="55">
<strong class="explore-caption">World of Warcraft</strong>
<span>Community Site</span> <span>Forum Discussions</span> <span>Character Profiles and more…</span>
</a>
</li>
<li class="explore-game explore-game-d3">
<a href="http://eu.battle.net/d3" tabindex="55">
<strong class="explore-caption">Diablo III</strong>
<span>Under Development, visit the Announcement Site</span>
</a>
</li>
</ul>-->
</div>
</li>
</ul>
</div>
<script type="text/javascript"> 
//<![CDATA[
var xsToken = '';
var Msg = {
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
shortQuery: "Search requests must be at least two characters long."
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
colon: '{0}:'
},
fansite: {
achievement: 'achievement',
character: 'character',
faction: 'faction',
'class': 'class',
object: 'object',
talentcalc: 'talents',
skill: 'skill',
quest: 'quest',
spell: 'spell',
event: 'event',
title: 'title',
arena: 'arena',
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
<script type="text/javascript" src="wow/static/local-common/js/menu.js?v15"></script>
<script type="text/javascript" src="wow/static/js/wow.js?v4"></script>
<script type="text/javascript"> 
friendData = [];
$(function(){
Menu.initialize('data/menu.json');
Search.init('ta/lookup');
});
</script>
<!--[if lt IE 8]> <script type="text/javascript" src="wow/static/local-common/js/third-party/jquery.pngFix.pack.js?v15"></script>
<script type="text/javascript">$('.png-fix').pngFix();</script>
<![endif]-->
<script type="text/javascript" src="wow/static/local-common/js/cms.js?v15?v2"></script>
<script type="text/javascript">
//<![CDATA[
Core.load("<?php echo $website['root'];?>wow/static/local-common/js/third-party/jquery-ui-1.8.6.custom.min.js?v15");
Core.load("<?php echo $website['root'];?>wow/static/local-common/js/overlay.js?v15");
Core.load("<?php echo $website['root'];?>wow/static/local-common/js/search.js?v15");
Core.load("<?php echo $website['root'];?>wow/static/local-common/js/login.js?v15", false, function() {
Login.embeddedUrl = '<?php echo $website['root'];?>loginframe.php';
});
//]]>
</script>
</a>
</li>
</ul>
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