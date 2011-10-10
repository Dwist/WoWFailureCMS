<?php require_once("configs.php"); ?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-gb" xmlns:xml="http://www.w3.org/XML/1998/namespace">
<head>
<title><?php echo $website['title']; ?></title>
<meta content="false" http-equiv="imagetoolbar" />
<meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible" />
<link rel="shortcut icon" href="wow/static/local-common/images/favicons/wow.ico" type="image/x-icon" />
<link rel="search" type="application/opensearchdescription+xml" href="http://eu.battle.net/en-gb/data/opensearch" title="Battle.net Search" />
<link rel="stylesheet" type="text/css" media="all" href="wow/static/local-common/css/common.css?v15" />
<!--[if IE]><link rel="stylesheet" type="text/css" media="all" href="wow/static/local-common/css/common-ie.css?v15" /><![endif]-->
<!--[if IE 6]><link rel="stylesheet" type="text/css" media="all" href="wow/static/local-common/css/common-ie6.css?v15" /><![endif]-->
<!--[if IE 7]><link rel="stylesheet" type="text/css" media="all" href="wow/static/local-common/css/common-ie7.css?v15" /><![endif]-->
<link title="World of Warcraft - News" href="wow/en/feed/news" type="application/atom+xml" rel="alternate" />
<link rel="stylesheet" type="text/css" media="all" href="wow/static/css/wow.css?v4" />
<link rel="stylesheet" type="text/css" media="all" href="wow/static/css/services/services-index.css?v4" />
<!--[if IE 6]><link rel="stylesheet" type="text/css" media="all" href="wow/static/css/services/services-ie6.css?v4" /><![endif]-->
<!--[if IE]><link rel="stylesheet" type="text/css" media="all" href="wow/static/css/wow-ie.css?v4" /><![endif]-->
<!--[if IE 6]><link rel="stylesheet" type="text/css" media="all" href="wow/static/css/wow-ie6.css?v4" /><![endif]-->
<!--[if IE 7]><link rel="stylesheet" type="text/css" media="all" href="wow/static/css/wow-ie7.css?v4" /><![endif]-->
<script type="text/javascript" src="wow/static/local-common/js/third-party/jquery-1.4.4.min.js"></script>
	<script type="text/javascript" src="wow/static/local-common/js/core.js?v15"></script>
	<script type="text/javascript" src="wow/static/local-common/js/tooltip.js?v15"></script>
<!--[if IE 6]> <script type="text/javascript">
//<![CDATA[
try { document.execCommand('BackgroundImageCache', false, true) } catch(e) {}
//]]>
</script>
<![endif]--></head>
<body class="en-gb services-home logged-in">

<div id="wrapper">
<?php $page_cat="services"; include("header.php"); ?>
<div id="content">
<div class="content-top">
<div class="content-trail">
<ol class="ui-breadcrumb">
<li><a href="index.php" rel="np" class=""><?php echo $website['title']; ?></a></li>
<li class="last"><a href="services.php" rel="np">Services</a></li>
</ol>
</div>
<div class="content-bot">	
	<div class="bg-body">
		<div class="bg-bottom">		
			<div class="contents-wrapper">
			
				<div class="left-col" align="left">
					<div class="section-title">
					<?php
					if(isset($_GET['ref']) && $_GET['ref'] != ""){
					//Ids
					/*
					1 - Change Avatar
					*/
					
					switch($_GET['ref']){
					case "avatar":
					include("services/avatar.php");
					break;
					default:
					include("services/redirect.php");
					break;
					}
					}else{
					?>
					<span><?php echo $website['title']; ?> Account Services</span>
					<p>Use the account services available for World of Warcraft to easily upgrade your game and access a number of additional account options.</p>
					</div>
					
					<div class="main-services">
					<a href="#" class="main-services-banner left-bnr" style="background-image:url('wow/static/images/services/thumbnails/thumb-main-services-1.jpg');">
						<span class="banner-title">Account Management</span>
						<span class="banner-desc">Review and change your account security options, use additional account services, and more.</span>
					</a>
					<a href="#" class="main-services-banner right-bnr" style="background-image:url('wow/static/images/services/thumbnails/thumb-main-services-2.jpg');">
						<span class="banner-title">Support</span>
						<span class="banner-desc">Find information, assistance, and solutions for common issues on our support website</span>
					</a>
					<a href="#" class="main-services-banner left-bnr" style="background-image:url('wow/static/images/services/thumbnails/thumb-main-services-3.jpg');">
						<span class="banner-title">Remote</span>
						<span class="banner-desc">Access the auction house via this website. Place bids and sell your items!</span>
					</a>
					<a href="#" class="main-services-banner right-bnr" style="background-image:url('wow/static/images/services/thumbnails/thumb-main-services-4.jpg');">
						<span class="banner-title">Armory</span>
						<span class="banner-desc">Browse the <?php echo $website['title']; ?> Armory.</span>
					</a>
					<a href="#" class="main-services-banner left-bnr" style="background-image:url('wow/static/images/services/thumbnails/thumb-main-services-5.jpg');">
						<span class="banner-title">Donation Shop</span>
						<span class="banner-desc">Visit the Donation Shop and check out our services/gifts/prizes/etc.</span>
					</a>
					<a href="#" class="main-services-banner right-bnr" style="background-image:url('wow/static/images/services/thumbnails/thumb-main-services-6.jpg');">
						<span class="banner-title">Upgrade your Account</span>
						<span class="banner-desc">Upgrade your World of Warcraft Account!</span>
					</a>
						<span class="clear"><!-- --></span>
					</div>
				<?php
				}
				?>
				</div>
				<div class="right-col">
					<div class="sub-services">					
							<div class="sub-services-section">
								<div class="sub-title">
									<span>Account Services</span>
								</div>
								<ul>
										<li><a href="javascript:;" class="c1-l1"><span>Account Settings</span></a></li>
										<li><a href="javascript:;" class="c1-l2"><span>Account Security</span></a></li>
										
										<!--<li><a href="javascript:;" class="c1-l3"><span>Add an Authenticator</span></a></li>
										<li><a href="javascript:;" class="c1-l4"><span>Authenticator FAQ</span></a></li>-->
								</ul>					
							</div>
							<div class="sub-services-section">
								<div class="sub-title">
									<span>Website Options</span>
								</div>
								<ul>
										<li><a href="javascript:;" class="c2-l1"><span>Change Website Theme</span></a></li>
										<li><a href="services.php?ref=avatar" class="c4-20"><span>Change Avatar</span></a></li>
										<li><a href="javascript:;" class="c2-l2"><span>Request GM Application</span></a></li>
										<li><a href="javascript:;" class="c2-l3"><span>Request GM Trial</span></a></li>
										<li><a href="javascript:;" class="c2-l4"><span>Download WoW Client</span></a></li>
										<!--<li><a href="javascript:;" class="c2-l5"><span>Download Language Pack</span></a></li>-->
								</ul>					
							</div>
							<div class="sub-services-section">
								<div class="sub-title">
									<span>CHARACTER SERVICES</span>
								</div>
								<ul>
										<li><a href="javascript:;" class="c3-l1"><span>Trade Characters</span></a></li>
										<li><a href="javascript:;" class="c3-l2"><span>Character Name Change</span></a></li>
										<li><a href="javascript:;" class="c3-l3"><span>Character Race Change</span></a></li>
										<li><a href="javascript:;" class="c3-l4"><span>Character Faction Change</span></a></li>
										<li><a href="javascript:;" class="c3-l5"><span>Character Customization</span></a></li>
										<!--<li><a href="javascript:;" class="c3-l6"><span>Free Character Migration</span></a></li>-->
										<!--<li><a href="javascript:;" class="c3-l7"><span>Public Test Realm</span></a></li>-->
								</ul>					
							</div>
							<div class="sub-services-section">
								<div class="sub-title">
									<span>OTHER SERVICES AND PROMOTIONS</span>
								</div>
								<ul>
										<li><a href="javascript:;" class="c4-l1"><span>Recruit-A-Friend</span></a></li>
										<!--<li><a href="javascript:;" class="c4-l2"><span>World of Warcraft Magazine</span></a></li>
										<li><a href="javascript:;" class="c4-l3"><span>Scroll of Resurrection</span></a></li>-->
								</ul>					
							</div>
					</div>	
				</div>
				<br />
				<span class="clear"><!-- --></span>
				<span class="clear"><!-- --></span>
				<span class="clear"><!-- --></span>
			</div>
		</div>
	</div>
</div>
</div>
</div>
<?php include("footer.php"); ?></body>
</html>