<div id="footer">
<div id="sitemap" class="footer-ads">
<div class="column">
<h3 class="bnet">
<a href="#" tabindex="100">World of Warcraft</a>
</h3>
<ul>
<li><a href="account_man.php">Account</a></li>
<li><a href="">Support</a></li>
</ul>
</div>
<div class="column">
<h3 class="games">
<a href="#" tabindex="100">Games</a>
</h3>
<ul>
<li><a href="#">World of Warcraft</a></li>
<li><a href="#">Game Client Downloads</a></li>
</ul>
</div>
<div class="column">
<h3 class="account">
<a href="#" tabindex="100">Account</a>
</h3>
<ul>
<li><a href="#">Can't log in?</a></li>
<li><a href="#">Create Account</a></li>
<li><a href="#">Account Summary</a></li>
<li><a href="#">Account Security</a></li>
</ul>
</div>
<div class="column">
<h3 class="support">
<a href="#" tabindex="100">Support</a>
</h3>
<ul>
<li><a href="#">Support Articles</a></li>
<li><a href="#">Help! I got hacked!</a></li>
</ul>
</div>
<div id="footer-ad">
<div class="sidebar-content">
<div class="bnet-offer">
<div class="bnet-offer-bg">
<a href="">
<img src="<?php echo $website['root'];?>wow/static/images/services/more/copy.gif" width="300" height="100" alt="" />
</a>
</div>
<div class="desc">
<a href="#">
<center>
<script type="text/javascript" src="http://ja.revolvermaps.com/b.js">
</script><script type="text/javascript">rmb_ki101('0ffftggap25','','26','26',1,'ffffff','010020','aa0000');</script>
</center>
</a>
<div class="subtitle">
<center>
<?php echo $website['title']; ?>
</center>
</div>
</div>
</div>
</div>
</div>
<div id="copyright">
<a href="javascript:;" tabindex="100" id="change-language">
<span>World of Warcraft - Entire World</span>
</a>
<div xmlns="http://www.w3.org/1999/xhtml" id="international" style=": block; ">
		<div class="column">
			<h3>Americas</h3>
			<ul>
			<li>
			<a href="" tabindex="100" onclick="Locale.trackEvent('Change Language', 'en-gb to en-us'); return true;">
			English (US)
			</a>
			</li>
			<li>
			<a href="" tabindex="100" onclick="Locale.trackEvent('Change Language', 'en-gb to es-mx'); return true;">
			Espa&ntilde;ol (AL)
			</a>
			</li>
			</ul>
			</div>
			<div class="column">
			<h3>Europe</h3>
			<ul>
			<li>
			<a href="" tabindex="100" onclick="Locale.trackEvent('Change Language', 'en-gb to de-de'); return true;">
			Deutsch
			</a>
			</li>
			<li>
			<a href="" class="selected" tabindex="100" onclick="Locale.trackEvent('Change Language', 'en-gb to en-gb'); return true;">
			English (EU)
			</a>
			</li>
			<li>
			<a href="" tabindex="100" onclick="Locale.trackEvent('Change Language', 'en-gb to es-es'); return true;">
			Espa&ntilde;ol (EU)
			</a>
			</li>
			<li>
			<a href="" tabindex="100" onclick="Locale.trackEvent('Change Language', 'en-gb to fr-fr'); return true;">
			Fran&ccedil;ais
			</a>
			</li>
			<li>
			<a href="" tabindex="100" onclick="Locale.trackEvent('Change Language', 'en-gb to ru-ru'); return true;">
			Pycc&#1082;&#1080;&#1081;
			</a>
			</li>
			</ul>
			</div>
			<div class="column">
			<h3>Korea</h3>
			<ul>
			<li>
			<a href="" tabindex="100" onclick="Locale.trackEvent('Change Language', 'en-gb to ko-kr'); return true;">
			&#54620;&#44397;&#51032;
			</a>
			</li>
			</ul>
			</div>
			<div class="column">
			<h3>Taiwan</h3>
			<ul>
			<li>
			<a href="" tabindex="100" onclick="Locale.trackEvent('Change Language', 'en-gb to zh-tw'); return true;">
			&#32321;&#39636;&#20013;&#25991;
			</a>
			</li>
			</ul>
			</div>
			<div class="column">
			<h3>China</h3>
			<ul>
			<li>
			<a href="" tabindex="100" onclick="Locale.trackEvent('Change Language', 'en-gb to zh-cn'); return true;">
			&#31616;&#20307;&#20013;&#25991;
			</a>
			</li>
			</ul>
			</div>
			<div class="column">
			<h3>Southeast Asia</h3>
			<ul>
			<li>
			<a href="http://sea.battle.net/wow/en-us/?loc" tabindex="100" onclick="Locale.trackEvent('Change Language', 'en-gb to en-us'); return true;">
			English (US)
			</a>
			</li>
			</ul>
			</div>
			<span class="clear"><!-- --></span>
</div>
<br />
<center>
<br>
<small>Copyright &copy; 2011 <?php echo $website['title']; ?>.<br />Powered by WoWFailureCMS<br />Resources are in Blizzard Entertainment Property.</small>
</center>
</div>
<span class="clear"><!-- --></span>
</div>
</div>


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
<a href="#" tabindex="55">
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
<li><a href="" tabindex="55"><center><script type="text/javascript" src="http://ja.revolvermaps.com/b.js">
</script><script type="text/javascript">rmb_ki101('0ffftggap25','','26','26',1,'ffffff','010020','aa0000');</script><br>Find us on the Map!</center></a></li>
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
