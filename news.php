	<?php
require_once("configs.php");
?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-gb" xmlns:xml="http://www.w3.org/XML/1998/namespace" class="chrome chrome8">
<head><link rel="stylesheet" type="text/css" href="/s7.addthis.com/static/r07/widget49.css" media="all" />
<title><?php echo $website['title']; ?></title>
<meta content="false" http-equiv="imagetoolbar" />
<meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible" />
<link rel="shortcut icon" href="wow/static/local-common/images/favicons/wow.ico" type="image/x-icon" />
<link rel="search" type="application/opensearchdescription+xml" href="http://eu.battle.net/en-gb/data/opensearch" title="WoW Search" />
<link rel="stylesheet" type="text/css" media="all" href="wow/static/local-common/css/common.css?v15" />
<!--[if IE]><link rel="stylesheet" type="text/css" media="all" href="wow/static/local-common/css/common-ie.css?v15" /><![endif]-->
<!--[if IE 6]><link rel="stylesheet" type="text/css" media="all" href="wow/static/local-common/css/common-ie6.css?v15" /><![endif]-->
<!--[if IE 7]><link rel="stylesheet" type="text/css" media="all" href="wow/static/local-common/css/common-ie7.css?v15" /><![endif]-->
<link rel="stylesheet" type="text/css" media="all" href="wow/static/css/wow.css?v3" />
<link rel="stylesheet" type="text/css" media="all" href="wow/static/css/lightbox.css?v7" />
<!--[if IE 6]><link rel="stylesheet" type="text/css" media="all" href="wow/static/css/lightbox-ie6.css?v7" /><![endif]-->
<link rel="stylesheet" type="text/css" media="all" href="wow/static/local-common/css/cms/blog.css?v15" />
<link rel="stylesheet" type="text/css" media="all" href="wow/static/local-common/css/cms/comments.css?v15" />
<link rel="stylesheet" type="text/css" media="all" href="wow/static/css/cms.css?v3" />
<!--[if IE 6]><link rel="stylesheet" type="text/css" media="all" href="wow/static/css/cms-ie6.css?v3" /><![endif]-->
<!--[if IE]><link rel="stylesheet" type="text/css" media="all" href="wow/static/css/wow-ie.css?v3" /><![endif]-->
<!--[if IE 6]><link rel="stylesheet" type="text/css" media="all" href="wow/static/css/wow-ie6.css?v3" /><![endif]-->
<!--[if IE 7]><link rel="stylesheet" type="text/css" media="all" href="wow/static/css/wow-ie7.css?v3" /><![endif]-->
<script type="text/javascript" src="wow/static/local-common/js/third-party/jquery-1.4.4.min.js"></script>
<script type="text/javascript" src="wow/static/local-common/js/core.js?v15"></script>
<script type="text/javascript" src="wow/static/local-common/js/tooltip.js?v15"></script>
<!--[if IE 6]> <script type="text/javascript">
//<![CDATA[
try { document.execCommand('BackgroundImageCache', false, true) } catch(e) {}
//]]>
</script>
<![endif]-->
<script type="text/javascript">
//<![CDATA[
Core.staticUrl = 'wow/static';
Core.sharedStaticUrl= '/wow/static/local-common';
Core.baseUrl = 'wow/en';
Core.project = 'wow';
Core.locale = 'en-gb';
Core.buildRegion = 'eu';
Core.shortDateFormat= 'dd/MM/Y';
Core.loggedIn = false;
Flash.videoPlayer = 'http://eu.media.blizzard.com/wow/player/videoplayer.swf';
Flash.videoBase = 'http://eu.media.blizzard.com/wow/media/videos';
Flash.ratingImage = 'http://eu.media.blizzard.com/wow/player/rating-pegi.jpg';
var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-544112-16']);
_gaq.push(['_setDomainName', '.battle.net']);
_gaq.push(['_trackPageview']);
//]]>
</script>
</head>
<body class="en-gb logged-in">
<div id="wrapper">
	<?php include("header.php"); ?>
		<div id="content">
			<div class="content-top">
				<div class="content-trail">
					<ol class="ui-breadcrumb">
					<li><a href="index.php"><?php echo $website['title']; ?></a></li>
					<?php
					$news_id = intval($_GET['id']);
					if($news_id != 0) $error=0; else $error=1;
					$news_query = mysql_query("SELECT * FROM news WHERE id = '".$news_id."'")or $error=1;
					$news = mysql_fetch_assoc($news_query)or $error=1;
					$date = $news['date'];
					?>
					<li class="last"><a href="#" rel="np"><?php echo $news['title']; ?></a></li>
					</ol>
				</div>
				
				<div class="content-bot">	
				
					<script type="text/javascript">
					//<![CDATA[
						var addthis_config = {
							 username: "TrinityCMS"
						};
					//]]>
					</script>
					
					<div id="blog-wrapper">
						<div id="left">
							<div id="blog-container">
								<div class="featured-news">
									<?php
									$articles_query = mysql_query("SELECT * FROM news ORDER BY DATE desc LIMIT 4")or print("No Articles");
									while($articles = mysql_fetch_array($articles_query)){
									?>
									<div class="featured">
										<a href="news.php?id=<?php echo $articles['id']; ?>">
											<span class="featured-img" style="background-image: url('news/<?php echo $articles['image']; ?>.jpg');"></span>
											<span class="featured-desc"> <?php echo $articles['title']; ?> </span>
										</a>
									</div>
									<?php
									}
									?>

									<span class="clear"></span>
								</div>
		
								<div id="blog">
								
									<?php
									if($error == 0){
									
										$posted = 0;
										
										if(isset($_POST['vali'])){
											mysql_select_db($server_adb,$connection_setup)or die(mysql_error());
											$get_accountinfo = mysql_query("SELECT * FROM account WHERE username = '".mysql_real_escape_string($_SESSION['username'])."'");
											$accountinfo = mysql_fetch_assoc($get_accountinfo);
											mysql_select_db($server_db,$connection_setup)or die(mysql_error());
											$author = $accountinfo['id'];
											$comment = stripslashes($_POST['detail']);
											
											/* Replace some HTML tags */
											$comment = strip_tags($comment);

											/* End of Replacing */
											$comment = addslashes($comment);
											$comment = nl2br($comment);
											$insert = mysql_query("INSERT INTO comments (newsid,comment,accountid) VALUES ('".$news['id']."','".$comment."','".$author."')")or print("Could not post the comment!");

											//Fixed that bugging bug + DATE =)) :)) =)) :D
											$update = mysql_query("UPDATE news SET comments = comments + 1 WHERE id = '".$news['id']."'");
											$update = mysql_query("UPDATE date SET date = '".$date."' WHERE id = '".$news['id']."'");
											$posted = 1;
											
											echo '<center><br /><br />Comment Posted<br />';
											echo '
											<style type="text/css">
											.loader {
											  width:24px;
											  height:24px;
											  background: url("'.$website['root'].'wow/static/images/loaders/canvas-loader.gif") no-repeat;
											 }
											</style>';
											echo '<div class="loader"></div><br /></center>';
											echo '<meta http-equiv="refresh" content="1;url=news.php?id='.$news_id.'"/>';
											$show_comment=false;
										}else{				
										
										echo'
										<h3 class="blog-title">'.$news['title'].'</h3>
										<div class="byline">
											<div class="blog-info">
											by <a href="'.$news['authorlnk'].'">'.$news['author'].'</a><span>//</span> '.$news['date'].'
											</div>
											<a class="comments-link" href="#comments">'.$news['comments'].'</a>
											<span class="clear"><!-- --></span>
										</div>
										
										<div class="header-image">
											<img alt="" src="news/'.$news['image'].'_header.jpg" />
										</div>

										<div class="detail">
											<div>'.$news['content'].'</div>
										</div>
										
										<div class="community-share">
											<!-- ADDTHIS BUTTON BEGIN -->
											<!--<div class="addthis_toolbox addthis_default_style">
												<a class="addthis_button_twitter at300b" target="_blank" title="Tweet This"><span class="at300bs at15nc at15t_twitter"></span></a>
												<a class="addthis_button_facebook at300b" href="http://www.addthis.com/bookmark.php?v=250&amp;winname=addthis&amp;pub=blizzardwebteam&amp;source=tbx-250&amp;lng=en-US&amp;s=facebook&amp;url=http%3A%2F%2Feu.battle.net%2Fwow%2Fen%2Fblog%2F2192483%23blog&amp;title=Memories%20of%20Blizzard%20Video%20Contest%20Entries%20Closed%20-%20World%20of%20Warcraft&amp;ate=AT-blizzardwebteam/-/-/4daf164f55138edd/1&amp;uid=4daf164f974ffadb&amp;CXNID=2000001.5215456080540439074NXC&amp;pre=http%3A%2F%2Feu.battle.net%2Fwow%2Fen%2F&amp;tt=0" target="_blank" title="Send to Facebook"><span class="at300bs at15nc at15t_facebook"></span></a>
												<a class="addthis_button_myspace at300b" href="http://www.addthis.com/bookmark.php?v=250&amp;winname=addthis&amp;pub=blizzardwebteam&amp;source=tbx-250&amp;lng=en-US&amp;s=myspace&amp;url=http%3A%2F%2Feu.battle.net%2Fwow%2Fen%2Fblog%2F2192483%23blog&amp;title=Memories%20of%20Blizzard%20Video%20Contest%20Entries%20Closed%20-%20World%20of%20Warcraft&amp;ate=AT-blizzardwebteam/-/-/4daf164f55138edd/2&amp;uid=4daf164fca431fd2&amp;CXNID=2000001.5215456080540439074NXC&amp;pre=http%3A%2F%2Feu.battle.net%2Fwow%2Fen%2F&amp;tt=0" target="_blank" title="Send to MySpace"><span class="at300bs at15nc at15t_myspace"></span></a>
												<a class="addthis_button_stumbleupon at300b" href="http://www.addthis.com/bookmark.php?v=250&amp;winname=addthis&amp;pub=blizzardwebteam&amp;source=tbx-250&amp;lng=en-US&amp;s=stumbleupon&amp;url=http%3A%2F%2Feu.battle.net%2Fwow%2Fen%2Fblog%2F2192483%23blog&amp;title=Memories%20of%20Blizzard%20Video%20Contest%20Entries%20Closed%20-%20World%20of%20Warcraft&amp;ate=AT-blizzardwebteam/-/-/4daf164f55138edd/3&amp;uid=4daf164f06059580&amp;CXNID=2000001.5215456080540439074NXC&amp;pre=http%3A%2F%2Feu.battle.net%2Fwow%2Fen%2F&amp;tt=0" target="_blank" title="Send to StumbleUpon"><span class="at300bs at15nc at15t_stumbleupon"></span></a>
												<a class="addthis_button_digg at300b" href="http://www.addthis.com/bookmark.php?v=250&amp;winname=addthis&amp;pub=blizzardwebteam&amp;source=tbx-250&amp;lng=en-US&amp;s=digg&amp;url=http%3A%2F%2Feu.battle.net%2Fwow%2Fen%2Fblog%2F2192483%23blog&amp;title=Memories%20of%20Blizzard%20Video%20Contest%20Entries%20Closed%20-%20World%20of%20Warcraft&amp;ate=AT-blizzardwebteam/-/-/4daf164f55138edd/4&amp;uid=4daf164f14677003&amp;CXNID=2000001.5215456080540439074NXC&amp;pre=http%3A%2F%2Feu.battle.net%2Fwow%2Fen%2F&amp;tt=0" target="_blank" title="Digg This"><span class="at300bs at15nc at15t_digg"></span></a>
											<div class="atclear"></div></div>-->
											<!-- ADDTHIS BUTTON END -->
											<script type="text/javascript">
											Core.appendFrame(\'http://www.facebook.com/plugins/like.php?href=http://theadriann.zapto.org/TrinityCMS/&amp;layout=button_count&amp;show_faces=false&amp;width=450&amp;action=like&amp;font=lucida+grande&amp;colorscheme=light&amp;height=21\', 120, 21, $(\'.community-share\'));
											//<![CDATA[
											//]]>
											</script>
										</div>';
										$show_comment=true;
										}
									}
									?>
								</div>
								
								<script type="text/javascript">
								//<![CDATA[
									$(function(){
										Cms.Comments.commentInit();
									});
								//]]>
								</script>
								
								<!--[if IE 6]>
								<script type="text/javascript">
								//<![CDATA[
									$(function() {
										Cms.Comments.commentInitIe();
									});
								//]]>
								</script>
								<![endif]-->

								<div id="report-post">
										<table id="report-table">
											<tr>
												<td class="report-desc"> </td>
												<td class="report-detail report-data"> Report Post #<span id="report-postID"></span> written by <span id="report-poster"></span> </td>
												<td class="post-info"></td>
											</tr>
											<tr>
												<td class="report-desc"><div>Reason</div></td>
												<td class="report-detail">
													<select id="report-reason">
																<option value="SPAMMING">Spamming</option>
																<option value="REAL_LIFE_THREATS">Real Life Threats</option>
																<option value="BAD_LINK">Bad Link</option>
																<option value="ILLEGAL">Illegal</option>
																<option value="ADVERTISING_STRADING">Advertising</option>
																<option value="HARASSMENT">Harassment</option>
																<option value="OTHER">Other</option>
																<option value="NOT_SPECIFIED">Not Specified</option>
																<option value="TROLLING">Trolling</option>
													</select>
												</td>
												<td></td>
											</tr>
											<tr>
												<td class="report-desc"><div>Explain <small>(256 characters max)</small></div></td>
												<td class="report-detail"><textarea id="report-detail" class="post-editor" cols="78" rows="13"></textarea></td>
												<td></td>
											</tr>
											<tr>
												<td></td>
												<td colspan="2" class="report-submit">
													<div>
														<a href="javascript:;" onclick="Cms.Topic.reportSubmit('comments')">Submit</a>
														 |
														<a href="javascript:;" onclick="Cms.Topic.reportCancel()">Cancel</a>
													</div></td>
											</tr>
										</table>
										<div id="report-success" style="text-align:center">
											<h4>Reported!</h4>
											[<a href="javascript:;" onclick="$(&quot;#report-post&quot;).hide()">Close</a>]
										</div>
								</div>
								
								<?php if($show_comment == true){ ?>
								<span id="comments"></span>
								<div id="page-comments">
									<div class="page-comment-interior" id="comments">
										<h3>Comments(<?php echo $news['comments']; ?>)</h3>

										<div class="comments-container">
										<script type="text/javascript">
											//<![CDATA[
												var textAreaFocused = false;
											//]]>
										</script>

										<form action="" method="post" onsubmit="return Cms.Comments.validateComment(this);" id="comment-form-reply" class="nested">
											<fieldset>
												<input type="hidden" id="replyTo" name="replyTo" value="" />
												<input type="hidden" name="ref" value="" />
												<input type="hidden" name="xstoken" value="" />
											</fieldset>
											<div class="new-post">
												<div class="comment">
												
													<div class="portrait-c ajax-update">
														<div class="avatar-interior">
															<a href="#"><img height="64" src="http://eu.battle.net/static-render/eu/burning-steppes/203/36178379-avatar.jpg?alt=/wow/static/images/2d/avatar/10-0.jpg" alt="" /></a>
														</div>
													</div>
													
													<div class="comment-interior">
														<div class="character-info user ajax-update">
														<!--commentThrottle[]-->
															<div class="user-name">
																<span class="char-name-code" style="display: none">TheAdriann</span>

																<div id="context-2" class="ui-context character-select">
																	<div class="context">
																		<a href="javascript:;" class="close" onclick="return CharSelect.close(this);"></a>

																		<div class="context-user">
																			<strong>TheAdriann</strong><br />
																			<span>Realm Name</span>
																		</div>
																		
																		<div class="context-links">
																		</div>
																	</div>
																</div>
																
																<a href="#" class="context-link" rel="np">TheAdriann</a>
																
															</div>
														</div>
														
														<div class="content">
															<div class="comment-ta">
															<textarea id="comment-ta-reply" cols="78" rows="3" name="detail" onfocus="textAreaFocused = true;" onblur="textAreaFocused = false;"></textarea>
															</div>
															
															<div class="action">
															
																<div class="cancel">
																	<span class="spacer">|</span>
																	<a href="javascript:;" onclick="$('#comment-form-reply').slideUp();">Cancel</a>
																</div>
																
																<div class="submit">
																	<button class="ui-button button1 comment-submit " type="submit">
																		<span>
																			<span>Post</span>
																		</span>
																	</button>
																</div>
																<span class="clear"><!-- --></span>
															</div>
														</div>
													</div>
												</div>
											</div>
										</form>

										<script type="text/javascript">
											//<![CDATA[
												var textAreaFocused = false;
											//]]>
										</script>

										<?php
										if(isset($_SESSION['username'])){
											if($posted == 1){
											}else{
											$user_query = mysql_query("SELECT * FROM users WHERE id = '".mysql_real_escape_string($account_information['id'])."'");
											$user = mysql_fetch_assoc($user_query);
											?>
											<form action="" method="post" onsubmit="return Cms.Comments.validateComment(this);" id="comment-form">
												<fieldset>
													<input type="hidden" name="ref" value="" />
													<input type="hidden" name="xstoken" value="" />
													<input type="hidden" name="vali" value="" />
												</fieldset>
												<div class="new-post">
													<div class="comment">
														<div class="portrait-b ajax-update">
															<div class="avatar-interior">
															<a href="#"><img height="64" src="images/avatars/2d/<?php echo $user['avatar']; ?>" alt="" /></a>
															</div>
														</div>
														
														<div class="comment-interior">
															<div class="character-info user ajax-update">
																<!--commentThrottle[]-->
																<div class="user-name">
																<a href="#" class="context-link" rel="np"><?php echo strtolower($_SESSION['username']); ?></a>
																</div>
															</div>
															
															<div class="content">
																<div class="comment-ta">
																	<textarea id="comment-ta" cols="78" rows="3" name="detail" onfocus="textAreaFocused = true;" onblur="textAreaFocused = false;"></textarea>
																</div>
																<div class="action">
																
																	<div class="cancel">
																				<span class="spacer">|</span>
																				<a href="javascript:;" onclick="$('#comment-form-reply').slideUp();">Cancel</a>
																	</div>
																	
																	<div class="submit">
																		<button class="ui-button button1 comment-submit" type="submit">
																			<span>
																				<span>Post</span>
																			</span>
																		</button>
																	</div>
																	<span class="clear"><!-- --></span>
																</div>
															</div>
														</div>
													</div>
												</div>
											</form>
											<?php
											}
										}
										
										$get_comments = mysql_query("SELECT * FROM comments WHERE newsid = '".$news['id']."' ORDER BY DATE desc");
										if(mysql_num_rows($get_comments) > 0){
										while($comment = mysql_fetch_array($get_comments)){
											mysql_select_db($server_adb,$connection_setup)or die(mysql_error());
											$accountInfo_query = mysql_query("SELECT * FROM account WHERE id = '".$comment['accountId']."'");
											$accountInfo = mysql_fetch_assoc($accountInfo_query);
											
											mysql_select_db($server_db,$connection_setup)or die(mysql_error());
											$userInfo_query = mysql_query("SELECT * FROM users WHERE id = '".$accountInfo['id']."'");
											$userInfo = mysql_fetch_assoc($userInfo_query);
											?>
											<div class="comment" id="">
												<div class="avatar portrait-b">
												<a href="#">
												<img height="64" src="images/avatars/2d/<?php echo $userInfo['avatar']; ?>" alt="" />
												</a>
												</div>

												<div class="comment-interior">
												  <div class="character-info user">
													<div class="user-name">
													  <a href="#" class="context-link" rel="np">
														<?php echo strtolower($accountInfo['username']); ?>
													  </a>
													</div>
													
													<span class="time"><a href="#"><?php echo $comment['date']; ?></a></span>
												  </div>
												  <div class="content"><?php echo html_entity_decode($comment['comment']); ?></div>
												  <div class="comment-actions"><a class="reply-link" href="#" onclick="">Reply</a></div>
												</div>
											</div>
											<?php
											}
										}else{
											echo'
											<table class="dynamic-center"><tr><td>
											<a class="ui-button button1 " href="?login" onclick="return Login.open(\'loginframe.php\')"><span><span>Add a reply</span></span></a>
											</td></tr></table>
											';
											}
											mysql_select_db($server_db,$connection_setup)or die(mysql_error());
											?>
											
											<!--<div class="karma">
												<div class="rate-btn-holder">
												  <a href="javascript:;" onclick="" class="rateup rate-btn"><span>Like</span></a>
												</div>
												<div class="rate-btn-holder">
												  <a href="javascript:;" onclick="$(this).siblings('.rate-action').show();" class="ratedown rate-btn"></a>
												  <div class="rate-action">
													<div class="ui-dropdown">
													  <div class="dropdown-wrapper">
														<ul>
														  <li><a href="javascript:;" onclick="Cms.Topic.vote(1302730296,'down',1,'comments')">Dislike</a></li>
														  <li><a href="javascript:;" onclick="Cms.Topic.vote(1302730296,'down',2,'comments')">Trolling</a></li>
														  <li><a href="javascript:;" onclick="Cms.Topic.vote(1302730296,'down',3,'comments')">Spam</a></li>
														  <li><a href="javascript:;" onclick="Cms.Topic.report(1302730296,'Yonga','c-1302730296')" class="report">Report</a></li>
														</ul>
													  </div>
													</div>
												  </div>
												</div>
												<div class="prev-vote">You have already rated this item.</div>
											<span class="clear"><!-- </span>
											</div>-->
											
											<div class="page-nav-container">
												<div class="page-nav-int"></div>
											</div>
										</div>
									</div>
								</div>
								<?php } ?>
							</div>
						</div>

						<script type="text/javascript">
						//<![CDATA[
								var addthis_config = {
									 username: "wow"
								}
						//]]>
						</script>

						<div id="right">
							
							<div class="sidebar-module" id="sidebar-recent">
								<div class="sidebar-content">
									<div class="sidebar-title">
										<h3 class="title-recent"> Recent Articles </h3>
									</div>
									<div class="featured-news">
											<?php
											$articles_query = mysql_query("SELECT * FROM news ORDER BY DATE desc LIMIT 6")or print("No Articles");
											while($articles = mysql_fetch_array($articles_query)){
											?>
											<div class="featured">
												<a href="news.php?id=<?php echo $articles['id']; ?>">
													<span class="featured-desc"> <?php echo $articles['title']; ?></span>
												   <span class="date"><?php echo $articles['date']; ?></span>
												</a>
											</div>
											<?php
											}
											?>
									</div>
								</div>

							<span class="clear"><!-- --></span>
							</div>
							
							<div class="sidebar-module" id="sidebar-forums">
								<div class="sidebar-title">
									<h3 class="title-forums">Popular Topics</h3>
								</div><br />
								<div align="center">
								Loading Forum Settings...
								<div class="sidebar-content loading"></div>
								</div>
							</div>
						</div>
	
						<span class="clear"><!-- --></span>
					</div>
				</div>
			</div>
		</div>
	<script type="text/javascript" src="wow/static/local-common/js/cms.js"></script>
	<script type="text/javascript" src="wow/static/local-common/js/menu.js"></script>
	<script type="text/javascript" src="wow/static/js/wow.js"></script>
	<script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js"></script>
	<script type="text/javascript" src="wow/static/local-common/js/cms.js?v17?v7"></script>
	<script type="text/javascript" src="wow/static/local-common/js/lightbox.js?v17?v7"></script>
	<?php include("footer.php"); ?>
</div>
</body>
</html>