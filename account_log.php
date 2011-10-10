<?php
include("configs.php");
$page_cat = "account";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php echo $website['title']; ?> - Login</title>
<meta http-equiv="imagetoolbar" content="false"/>
<link rel="stylesheet" type="text/css" href="wow/static/local-common/css/common.css?v22"/>
<!--[if IE]><link rel="stylesheet" type="text/css" href="wow/static/local-common/css/common-ie.css?v22"/><![endif]-->
<!--[if IE 6]><link rel="stylesheet" type="text/css" href="wow/static/local-common/css/common-ie6.css?v22"/><![endif]-->
<!--[if IE 7]><link rel="stylesheet" type="text/css" href="wow/static/local-common/css/common-ie7.css?v22"/><![endif]-->
<link rel="shortcut icon" href="wow/static/_themes/bam/img/favicon.ico" type="image/x-icon"/>
<link rel="stylesheet" type="text/css" href="wow/static/_themes/bam/css/master.css?v1"/>
<!--[if IE 6]><link rel="stylesheet" type="text/css" href="wow/static/_themes/bam/css/master-ie6.css?v1" /><![endif]-->
<link rel="stylesheet" type="text/css" href="wow/static/_themes/bam/css/_lang/en-gb.css?v1"/>
<script type="text/javascript" src="wow/static/local-common/js/third-party/jquery-1.4.4-p1.min.js"></script>
<script type="text/javascript" src="wow/static/local-common/js/core.js?v22"></script>
<script type="text/javascript">
Core.baseUrl = '/login/en/';
</script>
</head>
<body class="en-gb">
<div id="wrapper">
<h1 id="logo"><a href="http://eu.battle.net/">Battle.net</a></h1>
<div id="content" class="login">
<div id="left">
<script>
      var targetOrigin = "<?php echo $website['address']; ?>";

      function updateParent(action, key, value) {
        var obj = { action: action };

        if (key) obj[key] = value;

        parent.postMessage(JSON.stringify(obj), targetOrigin);
        return false;
      }

      function checkDefaultValue(input, isPass) {
        if (input.value == input.title)
          input.value = "";

        if (isPass)
          input.type = "password";
      }
    </script>
  </head>
  <body>
    <div id="embedded-login">
      <h2>Log In</h2>
  <?php
  
  if(!isset($_SESSION['username'])){
  if(isset($_POST['accountName'])){
    $accountName = stripslashes($_POST['accountName']);
    $accountPass = stripslashes($_POST['password']);
	function sha_password($user,$pass){
		$user = strtoupper($user);
		$pass = strtoupper($pass);
		return SHA1($user.':'.$pass);
	}
	$sha_pass_hash = sha_password($accountName,$accountPass);
	$db_setup = mysql_select_db($server_adb,$connection_setup)or die(mysql_error());
    $login_query = mysql_query("SELECT * FROM account WHERE username = '".mysql_real_escape_string($accountName)."'");
    $login = mysql_fetch_assoc($login_query);
    if($login){
      ?>
      <style type="text/css">
      .loader {
        width:24px;
        height:24px;
        background: url("wow/static/images/loaders/canvas-loader.gif") no-repeat;
       }
      </style>
      <center>
      <h3>Logging In</h3><br />
      <div class="loader"></div>
      <?php
        if(strtoupper($sha_pass_hash) == $login['sha_pass_hash']){
          $_SESSION['username']=$accountName;
          echo '<br /><br /><meta http-equiv="refresh" content="2"/>';
        }else{
          echo '<br /><br /><font color="red">Wrong Password</font><meta http-equiv="refresh" content="2"/>';
        }
      ?>
      </center>
      <?php
    }else{
      ?>
      <style type="text/css">
      .loader {
        width:24px;
        height:24px;
        background: url("wow/static/images/loaders/canvas-loader.gif") no-repeat;
       }
      </style>
      <center>
      <h3>Invalid Account Name</h3><br />
      <div class="loader"></div>
      <meta http-equiv="refresh" content="2"/>
      </center>
      <?php
    }
    
    ?>
    
    
    
  <?php }else{ ?>
  <form action="?SSID:<?php echo $sessionid; ?>" method="post">
    <a id="embedded-close" href="javascript:;" onclick="updateParent('close')"> </a>
    <div>
      <p><label for="accountName" class="label">Account Name</label>
      <input id="accountName" value="" name="accountName" maxlength="320" type="text" tabindex="1" class="input" /></p>
      <p><label for="password" class="label">Password</label>
      <input id="password" name="password" maxlength="16" type="password" tabindex="2" autocomplete="off" class="input"/></p>
      <p>
        <span id="remember-me">
          <label for="persistLogin">
            <input type="checkbox" checked="checked" name="persistLogin" value="true" id="persistLogin" />
            Keep me logged in
          </label>
        </span>
        <input type="hidden" name="app" value="com-sc2"/>
        <button class="ui-button button1" type="submit" data-text="Processing…">
          <span>
            <span>Log In</span>
          </span>
        </button>
      </p>
    </div>
  </form>
  <?php } }else{
    ?>
    <a id="embedded-close" href="javascript:;" onclick="updateParent('close')"> </a>
    <script>
    parent.postMessage("{\"action\":\"success\"}", "<?php echo $website['address']; ?>");
    </script>
    <?php
    echo "<h3><font color='green'>You're Logged In</font></h3>";
    
  } ?>
  <ul id="help-links">
      <li class="icon-pass">
        <a href="#">Can't log in</a>?
      </li>
        <li class="icon-signup">
          Don't have an account yet? <a href="register.php">Sign up now</a>!
        </li>
      <li class="icon-secure">
        Learn how to <a href="#">protect your account</a>!
      </li>
  </ul>
  <br /><br />
    <script type="text/javascript">
      $(function() {
        $("#ssl-trigger").click(function() {
          updateParent('onload', 'height', $(document).height() + 76);
          $("#thawteseal").show();
        });
        
        $("#help-links a").click(function() {
          updateParent('redirect', 'url', this.href);
          return false;
        });

        $('#accountName').focus();

        updateParent('onload', 'height', $(document).height());
      });
    </script>
    </div>
</div>
<div id="right">
<h2>Already Logged in?</h2>
<h3>If you are already logged but ths page does not redirect you to the account then press the following button: </h3>
<a
class="ui-button button1 "
href="account_man.php"
>
<span>
<span>Account Management</span>
</span>
</a>
</div>
<span class="clear"><!-- --></span>
<script type="text/javascript">
$(function() {
$('#accountName').focus();
});
</script>
</div>
<?php include("functions/footer_man.php"); ?>
<script type="text/javascript" src="https://ssl.google-analytics.com/ga.js"></script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker('UA-544112-16');
function _gaInit() {
pageTracker._setDomainName(".battle.net");
pageTracker._initData();
pageTracker._trackPageview();
}
function _htmlDomInit(doc) {
_htmlDom = doc;
_gaInit();
}
/* Partial workaround for Firefox bug 230214 */
if(typeof(document.cookie) == 'undefined') {
var obj = document.createElementNS('http://www.w3.org/1999/xhtml', 'object');
obj.setAttribute('style', 'display:none');
obj.width = 0;
obj.height = 0;
obj.type = 'text/html';
obj.data = 'data:text/html;charset=utf-8,%3Cscript%3Eparent._htmlDomInit%28document%29%3C/script%3E';
document.getElementsByTagName('body')[0].appendChild(obj);
document.__defineGetter__('cookie', function() { return _htmlDom.cookie; });
document.__defineSetter__('cookie', function(c) { _htmlDom.cookie = c; });
} else
_gaInit();
} catch(err) {}
</script>
</body>
</html>
