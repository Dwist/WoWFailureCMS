<?php
session_save_path('phpsessions');
session_start();

$serveraddress = "localhost"; // Your mysql server address
$serveruser = "root"; // Your mysql user
$serverpass = "ascent"; //Your mysql password

$server_db = "site"; //Your website database
$server_adb = "auth"; //Your account database
$server_cdb = "characters"; //Your characters database
$server_wdb = "world"; //Your world database

$website['title'] = "WoWFailureCMS";
$website['address'] = "http://www.wowfailure.com"; // 'http://url/foldername/' or 'http://url/'
$website['root'] = "/WoWFailureCMS/"; // '/' <- for root and '/foldername/' <- for any folder
//Initialize Lang Files
include("lang/eng.php");

$connection_setup = mysql_connect($serveraddress,$serveruser,$serverpass)or die(mysql_error());
mysql_select_db($server_db,$connection_setup)or die(mysql_error());

if(isset($_SESSION['username'])){
	mysql_select_db($server_adb,$connection_setup)or die(mysql_error());
	$username = mysql_real_escape_string($_SESSION['username']);
	$lbrspa = mysql_query("SELECT * FROM account WHERE username = '".$username."'");
	$account_information = mysql_fetch_assoc($lbrspa);
	mysql_select_db($server_db,$connection_setup)or die(mysql_error());
}
?>
<script type="text/javascript" src="http://static.wowhead.com/widgets/power.js"></script>