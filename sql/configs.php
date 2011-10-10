<?php
$sessionid = session_id();
if($sessionid == ""){
  session_start();
}

$sessionid = session_id();
if ($sessionid == '') session_start();
if (!isset($_SESSION['safety'])){
    session_regenerate_id(true);
    $_SESSION['safety'] = true;
}
$_SESSION['sessionid'] = session_id();

$serveraddress = "localhost"; // Your mysql server address
$serveruser = "root"; // Your mysql user
$serverpass = "xxx"; //Your mysql password

$server_db = "wowsite"; //Your website database
$server_adb = "logon"; //Your account database
$server_cdb = "chars"; //Your characters database
$server_wdb = "world"; //Your world database

$website['title'] = "World of Warcraft";
//Initialize Lang Files
include("lang/eng.php");

$connection_setup = mysql_connect($serveraddress,$serveruser,$serverpass)or die(mysql_error());
mysql_select_db($server_db,$connection_setup)or die(mysql_error());

if($_SESSION['username'] != ""){
	mysql_select_db($server_adb,$connection_setup)or die(mysql_error());
	$lbrspa = mysql_query("SELECT * FROM account WHERE username = '".$_SESSION['username']."'");
	$account_information = mysql_fetch_assoc($lbrspa);
	mysql_select_db($server_db,$connection_setup)or die(mysql_error());
}