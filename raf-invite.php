<?php
include("configs.php");
$page_cat = "account";
?>
<?php
include("functions/configs.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-gb">
<head>
<title><?php echo $website['title']; ?> - Recruit a Friend</title>
<meta content="false" http-equiv="imagetoolbar" />
<meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible" />
<link rel="shortcut icon" href="wow/static/local-common/images/favicons/bam.ico" type="image/x-icon"/>
<link rel="search" type="application/opensearchdescription+xml" href="http://eu.battle.net/en-gb/data/opensearch" title="Battle.net Search" />
<link rel="stylesheet" type="text/css" media="all" href="wow/static/local-common/css/common.css?v22" />
<!--[if IE]><link rel="stylesheet" type="text/css" media="all" href="wow/static/local-common/css/common-ie.css?v22" /><![endif]-->
<!--[if IE 6]><link rel="stylesheet" type="text/css" media="all" href="wow/static/local-common/css/common-ie6.css?v22" /><![endif]-->
<!--[if IE 7]><link rel="stylesheet" type="text/css" media="all" href="wow/static/local-common/css/common-ie7.css?v22" /><![endif]-->
<link rel="stylesheet" type="text/css" media="all" href="wow/static/css/bnet.css?v21" />
<link rel="stylesheet" type="text/css" media="print" href="wow/static/css/bnet-print.css?v21" />
<link rel="stylesheet" type="text/css" media="all" href="wow/static/css/management/dashboard.css?v21" />
<link rel="stylesheet" type="text/css" media="all" href="wow/static/css/management/services.css?v21" />
<!--[if IE 6]><link rel="stylesheet" type="text/css" media="all" href="wow/static/css/management/services-ie6.css?v21" /><![endif]-->
<link rel="stylesheet" type="text/css" media="all" href="wow/static/css/management/wow/raf.css?v21" />
<!--[if IE 6]><link rel="stylesheet" type="text/css" media="all" href="wow/static/css/management/wow/raf-ie6.css?v21" /><![endif]-->
<!--[if IE]><link rel="stylesheet" type="text/css" media="all" href="wow/static/css/bnet-ie.css?v21" /><![endif]-->
<!--[if IE 6]><link rel="stylesheet" type="text/css" media="all" href="wow/static/css/bnet-ie6.css?v21" /><![endif]-->
<script type="text/javascript" src="wow/static/local-common/js/third-party/jquery-1.4.4-p1.min.js"></script>
<script type="text/javascript" src="wow/static/local-common/js/core.js?v22"></script>
<script type="text/javascript" src="wow/static/local-common/js/tooltip.js?v22"></script>
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
<body class="en-gb logged-in">

        <div id="layout-top">
            <div class="wrapper">
                <div id="header">
                    <div id="search-bar">
                        <form action="https://eu.battle.net/search" method="get" id="search-form">
	                        <div>
	                            <input type="text" name="q" id="search-field" value="Search Battle.net" maxlength="35" alt="Search Battle.net" tabindex="50" accesskey="q" />
								<input type="submit" id="search-button" value="" title="Search Battle.net" tabindex="50" />
	                        </div>
	                    </form>
                    </div>

                    <h1 id="logo"><a href="http://eu.battle.net/" tabindex="50" accesskey="h">Battle.net</a></h1>

    <?php include("functions/navigation.php"); ?>
	<?php include("functions/footer_man_nav.php"); ?>

        <div id="layout-middle">
            <div class="wrapper">
                <div id="content">



	
	

	<div class="dashboard service">

		<div class="primary">

			<div class="header">
	<span class="float-right"><span class="form-req">*</span> Required</span>
    <h2 class="subcategory">Referrals &amp; Rewards</h2>
    <h3 class="headline">Recruit a Friend</h3>
    <a href="wow/static/management/wow/dashboard.html?region=EU&amp;accountName=PAP123"><img src="wow/static/local-common/images/game-icons/wow.png" alt="World of Warcraft®" width="48" height="48" /></a>
			</div>

			<div class="service-wrapper">

    <p class="service-nav">
            <a href="wow/static/management/wow/services/raf-invite.html?l=PAP123&amp;r=EU" class="active">Send Invitations</a>
            <a href="wow/static/management/wow/services/raf-status.html?l=PAP123&amp;r=EU">History/Status</a>
            <a href="wow/static/raf-instructions.html?l=PAP123&amp;r=EU&amp;i=true">How It Works</a>
            <a href="wow/static/raf-instructions.html?l=PAP123&amp;r=EU">Instructions For Recipient</a>
    </p>

	<div class="raf-service-info">
    You have <a href="raf-status.html?l=PAP123&amp;r=EU">0 friends</a> linked to your account and 19 referrals remaining.
    <ul>
        <li>Level together and faster</li>
        <li>Gain rewards if your friend subscribes</li>
        <li>Get a unique two-person mount</li>
    </ul>
    <a href="wow/static/raf-instructions.html?l=PAP123&amp;r=EU&amp;i=true">More details on how it works…</a>
    <div class="sub-section">
        To recruit friends who used to play, use a <a href="wow/static/management/wow/services/sor-invite.html?l=PAP123&amp;r=EU">Scroll of Resurrection</a> instead!
    </div>
	</div>

	<div class="service-form">
                        Fill in your friend’s information below, along with any custom message you would like to send, and we will send an e-mail containing an invitation to the provided address. You can track the status of each Recruit a Friend invitation <a href="raf-status.html?l=PAP123&amp;r=EU">here</a>.

                <form method="POST" action="raf-invite.html" id="raf-form">

                    <input type="hidden" name="l" value="PAP123"/>
                    <input type="hidden" name="r" value="EU"/>


	

	
	
	
	

	
	<div class="form-row required">
									<label for="name" class="label-full ">
						<strong>                        Friend’s Name:
</strong>
						<span class="form-required">*</span>
					</label>
				
    <input type="text" id="name" name="name" value="" class="		input border-5 glow-shadow-2 
		
		
		
		" maxlength="100" tabindex="1"    />



	</div>



	

	
	
	
	

	
	<div class="form-row required">
									<label for="email" class="label-full ">
						<strong>                            Friend’s Email Address:
</strong>
						<span class="form-required">*</span>
					</label>
				
    <input type="text" id="email" name="email" value="" class="		input border-5 glow-shadow-2 
		
		
		
		" maxlength="255" tabindex="2"    />



	</div>



                        <div class="form-row-raf required">
                            <label class="label-full">
                                <strong>Key Type:</strong>
                                <span class="form-required">*</span>
                            </label>
                            <span>
                                <span class="inline-radio">Russian
                                    <input type="radio" name="keyLocale" value="RU"   />
                                </span>
                                <span class="inline-radio" style="padding-left:20px;">European
                                    <input type="radio" name="keyLocale" value="EU" checked="true" />
                                </span>
                            </span>
                        </div>

                    <div class="form-row">
                        <label for="customMessage" class="label-full">
                            <strong>Custom Message:</strong>
                            <span class="form-required"></span>
                        </label> 
                        <textarea rows="8" cols="30" name="customMessage" class="input border-5 glow-shadow-2" id="customMessage" tabindex="3" maxlength="255">Suggestion: Include your realm, guild, and character name so that your friend can contact you in-game.</textarea>
                        <p class="special-p">Your friend will need to follow the instructions in the e-mail in order to create the link between your accounts.  <a href="wow/static/raf-instructions.html?l=PAP123&amp;r=EU">View the steps they will take.</a></p>
                    </div>

	<fieldset class="ui-controls " >
                        

	<button
		class="ui-button button1 disabled"
			type="submit"
			
		disabled="disabled"
		id="submit1"
		
		
		
		
		>
		<span>
			<span>SEND INVITATION</span>
		</span>
	</button>

                        
	<a class="ui-cancel "
		href="wow/static/"
		
		
		
		>
		<span>
Cancel		</span>
	</a>

	</fieldset>
		<script type="text/javascript">
		//<![CDATA[
					$(function() {
						var rafSubmit = $('#submit1');
						rafSubmit.removeAttr('disabled');
						rafSubmit.removeClass('disabled').removeClass('processing').removeClass('hover');
					});
		//]]>
		</script>

                </form>
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
</div>
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
<script type="text/javascript" src="wow/static/js/management/wow/raf.js?v21"></script>
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
