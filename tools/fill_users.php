<?php
require_once("../configs.php");
?>
<html>
<head>
<title><?php echo $website['title']; ?></title>
<link rel="stylesheet" type="text/css" href="../login/static/local-common/css/common.css?v15"/>
<link rel="stylesheet" type="text/css" href="../login/static/_themes/bam/css/master.css?v1"/>
<script type="text/javascript" src="../login/static/local-common/js/third-party/jquery-1.4.2.min.js?v15"></script>
<script type="text/javascript" src="../login/static/local-common/js/core.js?v15"></script>
<style type="text/css">
.loader {
	width:24px;
	height:24px;
	background: url("../wow/static/images/loaders/canvas-loader.gif") no-repeat;
}
</style>
</head>
<body>
<div id="embedded-login">
	<h2>Trinity Blizzard Website - Filling Users</h2>
	<br />
	<center>
		<?php
        mysql_select_db($server_adb,$connection_setup)or die(mysql_error());
        $get_acc = mysql_query("SELECT * FROM account ORDER BY id ASC");
		echo'<h3>Filling users...</h3><br />
		<div class="loader"></div><br /><br />';
        while($acc = mysql_fetch_array($get_acc)){
            mysql_select_db($server_db,$connection_setup)or die(mysql_error());
            $select_user = mysql_query("SELECT * FROM users WHERE id = '".$acc['id']."' LIMIT 1");
            if(mysql_num_rows($select_user) > 0){
                echo 'Account <font color="aqua">'.strtolower($acc['username']).'</font> already inserted into users table<br />';
            }else{
                echo '<font color="aqua">'.strtolower($acc['username']).'</font> added!<br />';
                $fill_users = mysql_query("INSERT INTO users(id) VALUES ('".$acc['id']."')");
            }
        }
        echo '<br /><br /><font color="aqua">I\'m outta here. All things done.</font>';
		?>
		<meta http-equiv="refresh" content="8;url=../index.php"/>
	</center>
</div>
</body>
</html>