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
<!--[if IE 6]> <script type="text/javascript">
//<![CDATA[
try { document.execCommand('BackgroundImageCache', false, true) } catch(e) {}
//]]>
</script>
<![endif]-->
<script type="text/javascript">
//<![CDATA[
Core.staticUrl = '<?php echo $website['root'];?>wow/static';
Core.baseUrl = '<?php echo $website['root'];?>';
Core.project = 'wow';
Core.locale = 'en-us';
Core.buildRegion = 'eu';
Core.loggedIn = true;
Flash.videoPlayer = 'http://eu.media.blizzard.com/wow/player/videoplayer.swf';
Flash.videoBase = 'http://eu.media.blizzard.com/wow/media/videos';
Flash.ratingImage = 'http://eu.media.blizzard.com/wow/player/rating-pegi.jpg';
//]]>
</script>
<script type="text/javascript" src="<?php echo $website['root'];?>wow/static/local-common/js/menu.js?v15"></script>
<script type="text/javascript" src="<?php echo $website['root'];?>wow/static/js/wow.js?v4"></script>
<script type="text/javascript"> 
friendData = [];
$(function(){
Menu.initialize('data/menu.json');
Search.init('ta/lookup');
});
</script>
</head>
<body class="en-gb logged-in">

<div id="wrapper">
<?php include("../header.php"); ?>
<div id="content">
<div class="content-top">
<div class="content-trail">
<ol class="ui-breadcrumb">
<?php if($_GET['f'] != ""){
	$forumid = intval($_GET['f']);
	$get_forum = mysql_query("SELECT * FROM forum_forums WHERE id = '".$forumid."'");
	$forum = mysql_fetch_assoc($get_forum)or $error=1;
	$get_category = mysql_query("SELECT * FROM forum_categ WHERE id = '".$forum['categ']."'");
	$category = mysql_fetch_assoc($get_category)or $error=1;
	$get_threads = mysql_query("SELECT * FROM forum_threads WHERE forumid = '".$forum['id']."'");
	
	echo '
	<li><a href="'.$website['root'].'index.php" rel="np">World of Warcraft</a></li>
	<li><a href="index.php" rel="np">Forums</a></li>
	<li><a href="index.php" rel="np">'.$category['name'].'</a></li>
	<li class="last"><a href="#" rel="np">'.$forum['name'].'</a></li>
	';
	
	/* small fix */
	$error = 0;
}else{ $error=1; }
if($error == 1){
echo '
<li><a href="'.$website['root'].'index.php" rel="np">World of Warcraft</a></li>
<li class="last"><a href="index.php" rel="np">Forums</a></li>
';
}
?>
</ol>
</div>
<div class="content-bot">
<div id="forum-content">
		<script type="text/javascript">
		//<![CDATA[
			$(function(){ Cms.Forum.threadListInit('<?php echo $forum['id']; ?>'); });
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
		<center>Request forum does not exist...<br /><br /><div class="loader"> </div><br />Redirecting...</center>
		<meta http-equiv="refresh" content="2;url=index.php"/>
		';
		}else{ ?>
		<div class="forum-options">
            <a href="javascript:;" onclick="Cms.Forum.setView('advanced',this)">Advanced</a>
        	<a href="javascript:;" class="active" onclick="Cms.Forum.setView('simple',this)">Simple</a>
        </div>
		
		<div class="forum-actions top">
		<div class="actions-panel">
        <div class="pageNav">
        <span class="active">1</span><!--
						<a href="#">2</a>
						<div class="page-sep"></div>

            	<div class="page-sep">
					...
        		</div>

	            <a href="#">Last Page</a>
		            	<a href="#">Next &gt;</a>-->
        </div>

		<a class="ui-button button1 imgbutton " href="index.php"><span><span><span class="back-arrow"> </span></span></span></a>
		<?php
		if(isset($_SESSION['username'])){
			if($forum['locked'] == 1){
				mysql_select_db($server_db,$connection_setup)or print($lang['db']);
				
				$posterInfo = mysql_fetch_assoc(mysql_query("SELECT * FROM users WHERE id = '".$account_information['id']."'"));
					switch($posterInfo['class']){
						case "blizz":
							echo'<a class="ui-button button1" href="createthread.php?f='.$forumid.'"><span><span>Create Thread</span></span></a>';
							break;
							
						case "mvp":
							echo'<a class="ui-button button1" href="createthread.php?f='.$forumid.'"><span><span>Create Thread</span></span></a>';
							break;
							
						default:
							echo'<a class="ui-button button1 disabled" href="#"><span><span>Create Thread</span></span></a>';
							break;
					}
			}else{
				echo'<a class="ui-button button1" href="createthread.php?f='.$forumid.'"><span><span>Create Thread</span></span></a>';
			}
		}else{
			echo '<a class="ui-button button1 disabled"><span><span>Create Thread</span></span></a>';
		}
		?>
		<span class="clear"><!-- --></span>
        </div>
		</div>
		
		<div id="posts-container">
			<table id="posts" cellspacing="0" class="simple">
				<tr class="post-th">
					<td></td>
					<td colspan="2">Subject</td>
					<td>Author</td>
						<td class="replies">Replies</td>
						<td class="views">Views</td>
						<td class="poster">Last Poster</td>
				</tr>
				<?php
				if(mysql_num_rows($get_threads) == 0){
				echo '
					<tr>
					<td class="post-icon"><div class="forum-post-icon"></div></td>
					<td class="post-title">No Threads in this forum.</td>
					<td class="post-pageNav"></td>
					<td class="post-author"></td>
						<td class="post-replies"></td>
						<td class="post-views"></td>
						<td class="post-lastPost"></td>
					<tr>
				';
				}
				while($thread = mysql_fetch_array($get_threads)){
				    mysql_select_db($server_adb,$connection_setup)or print($lang['adb']);
				    $posterAccount = mysql_fetch_assoc(mysql_query("SELECT * FROM account WHERE id = '".$thread['author']."'"));
                    mysql_select_db($server_db,$connection_setup)or print($lang['db']);
				    $posterInfo = mysql_fetch_assoc(mysql_query("SELECT * FROM users WHERE id = '".$thread['author']."'"));
                    
				echo'
				<tr id="postRowId" class=" featured read">
					<td class="post-icon">
						<div class="forum-post-icon">';
						if($thread['has_blizz'] == 1 || $posterInfo['blizz'] == 1){
							echo'
								<div class="blizzard_icon">
									<a href="" onmouseover="Tooltip.show(this,\'Jump to first Blizzard Post\');"></a>
								</div>';
						}
						echo'
						</div>
					</td>
					
					<td class="post-title">';
							if($thread['prefix'] != "none"){
							echo'<span class="post-status">['.$thread['prefix'].']</span>';
							}
							echo'
							<div id="thread_tt_'.$thread['id'].'" style="display:none">
								<div class="tt_detail">
										'.substr($thread['content'],0,80).'...
								</div>
								
								<div class="tt_time">'.$thread['date'].'</div> 
								<div class="tt_info">
									'.$thread['views'].' Views / '.$thread['replies'].' Replies<br />
										Last Post by <i>'.strtolower($posterAccount['username']).'</i> on '.$thread['date'].'
								</div>
							</div>
							<a href="viewthread.php?t='.$thread['id'].'" onmouseover="Tooltip.show(this, \'#thread_tt_'.$thread['id'].'\',{ location: \'mouse\' });">
									'.$thread['name'];
								if($thread['locked'] != 0){
								echo ' <img src="'.$website['root'].'wow/static/images/layout/cms/post_locked.gif" alt="" />';
								}
								echo '
							</a>
					</td>
					
					<td class="post-pageNav"></td>
					<td class="post-author">
							';
							if($posterInfo['blizz'] != 0){
							echo'
							<span class="type-blizzard">
								'.strtolower($posterAccount['username']).'
								<img src="'.$website['root'].'wow/static/images/layout/cms/icon_blizzard.gif" alt="" />
							</span>';
							}else{
							echo strtolower($posterAccount['username']);
							}
							echo '
					</td>
					
					<td class="post-replies">
						'.$thread['replies'].'
					</td>
					
					<td class="post-views">
						'.$thread['views'].'
					</td>
					
					<td class="post-lastPost">
						<a href="#" onmouseover="Tooltip.show(this, \'date\');">
								<span class="type-blizzard">
										Not done yet
								</span>
						</a>
							<img src="'.$website['root'].'wow/static/images/layout/cms/icon_blizzard.gif" alt="" />
					</td>
				</tr>';
				}
				?>
				</table>
		</div>

        


        <div class="forum-info">
		<div class="forum-actions topic-bottom">
			<div class="actions-panel">
				<div class="pageNav">
					<span class="active">1</span><!--
							<a href="#">2</a>
							<div class="page-sep"></div>

					<div class="page-sep">
						...
					</div>

					<a href="#">Last Page</a>
					<a href="#">Next &gt;</a>-->
				</div>
				<a class="ui-button button1 imgbutton " href="index.php"><span><span><span class="back-arrow"> </span></span></span></a>
				<?php
				if(isset($_SESSION['username'])){
					if($forum['locked'] == 1){
						mysql_select_db($server_db,$connection_setup)or print($lang['db']);
						
						$posterInfo = mysql_fetch_assoc(mysql_query("SELECT * FROM users WHERE id = '".$account_information['id']."'"));
							switch($posterInfo['class']){
								case "blizz":
									echo'<a class="ui-button button1" href="createthread.php?f='.$forumid.'"><span><span>Create Thread</span></span></a>';
									break;
									
								case "mvp":
									echo'<a class="ui-button button1" href="createthread.php?f='.$forumid.'"><span><span>Create Thread</span></span></a>';
									break;
									
								default:
									echo'<a class="ui-button button1 disabled" href="#"><span><span>Create Thread</span></span></a>';
									break;
							}
					}else{
						echo'<a class="ui-button button1" href="createthread.php?f='.$forumid.'"><span><span>Create Thread</span></span></a>';
					}
				}else{
					echo '<a class="ui-button button1 disabled"><span><span>Create Thread</span></span></a>';
				}
				?>
				<span class="clear"><!-- --></span>
			</div>
		</div>
        </div>
		<?php } ?>
    </div>
</div>
</div>
</div>

<?php include("../footer.php"); ?></body>
</html>