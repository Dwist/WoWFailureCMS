<?php
$page="loginframe.php";
include("configs.php");
?>
<!DOCTYPE html>
  <html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="login/static/local-common/css/common.css?v15"/>
    <link rel="stylesheet" type="text/css" href="login/static/_themes/bam/css/master.css?v1"/>
    <script type="text/javascript" src="login/static/local-common/js/third-party/jquery-1.4.2.min.js?v15"></script>
    <script type="text/javascript" src="login/static/local-common/js/core.js?v15"></script>

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
      <h2>World of Warcraft</h2>
  <?php
  
  if(!isset($_SESSION['username'])){
  if(isset($_POST['accountName'])){
    $accountName = mysql_real_escape_string($_POST['accountName']);
    $accountPass = mysql_real_escape_string($_POST['password']);

    $sha_pass_hash = sha1(strtoupper($accountName ) . ":" . strtoupper($accountPass));

    $db_setup = mysql_select_db($server_adb,$connection_setup)or die(mysql_error());
    $login_query = mysql_query("SELECT * FROM account WHERE username = UPPER('".$accountName."') AND sha_pass_hash = CONCAT('".$sha_pass_hash."')");
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
        $_SESSION['username']=$accountName;
          echo '<meta http-equiv="refresh" content="2"';
          echo 'Succesfully';
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
      <h3>Wrong Password or Account Name</h3><br />
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
  </body>
  </html>


