<?php
require_once("configs.php");

$con = mysql_connect("$serveraddress", "$serveruser", "$serverpass", "$server_adb") or die(mysql_error());
        mysql_select_db("$server_adb", $con) or die(mysql_error());
        $query = "SELECT bandate,id,banreason FROM account_banned WHERE active != '0'";




echo "<table width=\"500px\" border=\"0\"><tr><td>$serverusername</td><td>Ban duration</td><td>Ban reason</td></tr>";

while($query->fetch_array()) {
    if($query['active'] == "1") {
        $bantime = "Permanent";
    }
    else {
        $bantime = "Until" . date("Y-m-d H:i:s", $query['bandate']);
    }
    
    echo "<tr><td>" . $query['id'] . "</td><td>" . $bantime . "</td><td>" . $query['banreason'] . "</td></tr>";
}

echo "</table>";
?>