<?php
include("configs.php");
$page_cat = "security";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-gb">
<head>
<title><?php echo $website['title']; ?> - Refer a Friend</title>
<meta content="false" http-equiv="imagetoolbar" />
<meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible" />
<link rel="shortcut icon" href="wow/static/local-common/images/favicons/bam.ico" type="image/x-icon"/>
<link rel="stylesheet" type="text/css" media="all" href="wow/static/local-common/css/common.css?v22" />
<!--[if IE]><link rel="stylesheet" type="text/css" media="all" href="wow/static/local-common/css/common-ie.css?v22" /><![endif]-->
<!--[if IE 6]><link rel="stylesheet" type="text/css" media="all" href="wow/static/local-common/css/common-ie6.css?v22" /><![endif]-->
<!--[if IE 7]><link rel="stylesheet" type="text/css" media="all" href="wow/static/local-common/css/common-ie7.css?v22" /><![endif]-->
<link rel="stylesheet" type="text/css" media="all" href="wow/static/css/bnet.css" />
<link rel="stylesheet" type="text/css" media="print" href="wow/static/css/bnet-print.css" />
<link rel="stylesheet" type="text/css" media="all" href="wow/static/css/management/dashboard.css" />
<link rel="stylesheet" type="text/css" media="all" href="wow/static/css/management/services.css" />
<!--[if IE 6]><link rel="stylesheet" type="text/css" media="all" href="wow/static/css/management/services-ie6.css" /><![endif]-->
<link rel="stylesheet" type="text/css" media="all" href="wow/static/css/management/wow/raf.css" />
<!--[if IE 6]><link rel="stylesheet" type="text/css" media="all" href="wow/static/css/management/wow/raf-ie6.css" /><![endif]-->
<!--[if IE]><link rel="stylesheet" type="text/css" media="all" href="wow/static/css/bnet-ie.css" /><![endif]-->
<!--[if IE 6]><link rel="stylesheet" type="text/css" media="all" href="wow/static/css/bnet-ie6.css" /><![endif]-->
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
    <?php include("functions/header_account.php"); ?>
	<?php include("functions/footer_man_nav.php"); ?>
        <div id="layout-middle">
            <div class="wrapper">
                <div id="content">
	<div class="dashboard service">
		<div class="primary">
			<div class="header">
	<span class="float-right"><span class="form-req">*</span> Required</span>
    <h2 class="subcategory">Referrals &amp; Rewards</h2>
    <h3 class="headline">Refer a Friend</h3>
    <a href=""><img src="wow/static/local-common/images/game-icons/wow.png" alt="World of Warcraft®" width="48" height="48" /></a>
			</div>
			<div class="service-wrapper">
    <p class="service-nav">
            <a href="" class="active">Send Invitations</a>
            <a href="">History/Status</a>
            <a href="">How It Works</a>
            <a href="">Instructions For Recipient</a>
    </p>
	<div class="raf-service-info">
    You have <a href="">0 friends</a> linked to your account and 20 Referrals remaining.
    <ul>
        <li>Level together and faster</li>
        <li>Gain rewards if your friend subscribes</li>
        <li>Get a unique two-person mount</li>
    </ul>
    <a href="">More details on how it works...</a>
    <div class="sub-section">
        You are not allowed to Refer friends who used to or still play,<br> Use the <a href="">Refer a Friend</a> instead!
    </div>
	</div>
	<div class="service-form">
    Fill in your friend's information below, along with any custom message you would like to send, and we will send an e-mail containing an invitation to the provided address. You can track the status of each Refer a Friend invitation <a href="">here</a>.
                <form method="POST" action="raf-invite.php" id="raf-form">
                    <input type="hidden" name="" value=""/>
                    <input type="hidden" name="" value=""/>
<?php  
include("configs.php");

$link = mysql_connect($serveraddress,$serveruser,$serverpass)or die("Could not connect: " . mysql_error());
mysql_select_db($server_adb) or die(mysql_error());
mysql_select_db($server_cdb) or die(mysql_error());

/* SQL INJECTION */
function protect($string){
    $string = mysql_real_escape_string($string);
    $string = strip_tags($string);
    $string = addslashes($string);

    return $string;
}

function sha_password($user,$pass){
$user = strtoupper($user);
$pass = strtoupper($pass);
 
return SHA1($user.':'.$pass);
}

function random_string($counts){
$str = "abcdefghijklmnopqrstuvwxyz";//Count 0-25
for($i=0;$i<$counts;$i++){
if ($o == 1){
$output .= rand(0,9);
$o = 0;
}else{
$o++;
$output .= $str[rand(0,25)];
}
}
return $output;
}
$rand = random_string(6);

/* START */
if(isset($_POST['user'])) 
{

$username = protect($_POST['user']);
$password = sha_password($_POST['user'],$_POST['pass']);
$hero1    = protect($_POST['hero1']);
$ip = getenv('REMOTE_ADDR');
  
  $check_account1  = mysql_query("SELECT * FROM `$server_adb`.`invite_member` WHERE `account` = '$username';") or die(mysql_error());
	if(mysql_num_rows($check_account1) > 0)
	{
	echo '<font color="red">Error : this account allready in database</font>';
	}
	else
	{
	
	$check_account2  = mysql_query("SELECT * FROM `$server_adb`.`account` WHERE `username` = '$username' AND `sha_pass_hash` = '$password'") or die(mysql_error());
	if(mysql_num_rows($check_account2) < 1)
	{
	echo '<font color="red">Error : Username and Password not valid</font>';
	}
	else
	{
	
	$result1  = mysql_query("SELECT * FROM `$server_cdb`.characters, `$server_adb`.account WHERE `$server_adb`.account.id = `$server_cdb`.characters.account AND `$server_cdb`.characters.name='$hero1' AND `$server_adb`.account.username = '$username';") or die(mysql_error());
	if(mysql_num_rows($result1) < 1)
	{
	echo '<font color="red">This character does not belong to this account</font>';
	}
	else
	{
	
  $select_character = mysql_query("SELECT name,guid FROM `$server_cdb`.characters WHERE name='$hero1';");
  $fetch_char = mysql_fetch_array($select_character);
  $guid = $fetch_char["guid"];
  
  if(mysql_num_rows($select_character) < 1)
  {
  echo '<font color="red">Error : Characters Not Found</font>';
  }
  else
  {
     // Update
     mysql_query("INSERT INTO `$server_adb`.`invite_member` (`account`,`character`,`inv_code`,`ip`) VALUE ('".$username."','".$guid."','".$rand."','".$ip."')") or die(mysql_error());
     echo '<font color="yellow">Your Link :</font>  <font color="green">http://www.adictoswow.com/ucp.php?mode=register&i='.$rand.'</font><p></p>';
     echo '<font color="yellow">code :</font> <font color="green">'.$rand.'</font> keep it';
  }
  }
  }
  }
  }
mysql_close($link);
?>					
	<div class="form-row required">
	<label for="name" class="label-full ">
	<strong>Your Account Name:</strong>
	<span class="form-required">*</span>
	</label>				
    <input type="text" name="user" value='<?php echo strtolower($_SESSION['username']); ?>' id="username" class="input border-5 glow-shadow-2 form-disabled" autocomplete="off" tabindex="1" required="required" disabled="disabled" />
	</div>
	<div class="form-row required">
	<label for="email" class="label-full ">
	<strong>Your Password:</strong>
	<span class="form-required">*</span>
	</label>			
    <input type="password" id="email" name="pass" value="" class="input border-5 glow-shadow-2" maxlength="255" tabindex="2"    />
	</div>
	<div class="form-row required">
	<label for="email" class="label-full ">
	<strong>Friend's Email Address:</strong>
	<span class="form-required">*</span>
	</label>			
    <input type="text" id="email" name="email" value="" class="input border-5 glow-shadow-2 form-disabled" maxlength="255" tabindex="2"  disabled="disabled"  />
	* Function Unavailable.
	</div>
	<div class="form-row required">
	<label for="email" class="label-full ">
	<strong>Your Character:</strong>
	<span class="form-required">*</span>
	</label>			
    <input type="text" id="email" name="hero1" value="" class="input border-5 glow-shadow-2" maxlength="255" tabindex="2"    />
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
	<span class="inline-radio" style="padding-left:20px;">American
    <input type="radio" name="keyLocale" value="US"   />
    </span>
    </span>
    </div>
	<div class="form-row-raf required">
    <label class="label-full">
    <strong>Method:</strong>
    <span class="form-required">*</span>
    </label>
    <span>
    <span class="inline-radio" >Manual
    <input type="radio" name="keyLocale" value="manual" checked="true" />
    </span>
	<span class="inline-radio" style="padding-left:20px;">Automatic
    <input type="radio" name="keyLocale" value="auto" class="form-disabled" disabled="disabled" />
    </span>
    </span>
    </div>
	<p class="special-p">Manual Version is available right now. Automatic Method will be coming in the near future. Stay Tuned at: <a href="https://github.com/Strawberry-Pr0jcts/WoWFailureCMS/commits/">WoWFailureCMS</a> for any updates.</p>
        <div class="form-row">
        <label for="customMessage" class="label-full">
        <strong>Custom Message:</strong>
        <span class="form-required"></span>
        </label> 
        <textarea rows="8" cols="30" name="customMessage" class="input border-5 glow-shadow-2" id="customMessage" tabindex="3" maxlength="255">Suggestion: Include your realm, guild, and character name so that your friend can contact you in-game.</textarea>
        <p class="special-p">Your friend will need to follow the instructions in the e-mail in order to create the link between your accounts.  <a href="">View the steps they will take.</a></p>
        </div>
	<fieldset class="ui-controls " >
	<button
		class="ui-button button1 disabled"
			type="submit"
			name="submit"
		disabled="disabled"
		id="submit1">
		<span>
			<span>SEND INVITATION</span>
		</span>
	</button>             
	<a class="ui-cancel "
		href="">
		<span>Cancel</span>
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
<script type="text/javascript" src="wow/static/js/management/wow/raf.js"></script>
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
