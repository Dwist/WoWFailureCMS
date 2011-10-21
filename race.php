<?php
include("configs.php");

$races = array(
1 => "Human",
2 => "Orc",
3 => "Dwarf",
4 => "Night Elf",
5 => "Undead",
6 => "Tauren",
7 => "Gnome",
8 => "Troll",
9 => "Goblin",
10 => "Blood Elf",
11 => "Draenei",
22 => "Worgen");


$genders = array(
0 => "Male",
1 => "Female");


//Database Connection
$link = mysql_connect($serveraddress, $serveruser, $serverpass) or die(mysql_error());
mysql_select_db($server_cdb) or die(mysql_error());

if (isset($_POST['changeSubmit'])) {
$result = mysql_query("UPDATE $charTable SET race={$_POST['race']}, gender={$_POST['gender']} WHERE guid={$_POST['id']}") or die(mysql_error());
if ($result) echo '<p style="color: #00CC00;">Race changed successfully</p>';
}

$query = 'SELECT guid, account, name, race, class, gender FROM '.$charTable;
if (isset($_GET['searchName'])) {
$query .= " WHERE name LIKE '{$_GET['searchName']}%'";
}
$query .= ' LIMIT '.$charLimit;

$result = mysql_query($query) or die(mysql_error());
?>

<form method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<label for="searchName">Search characters:</label> <input type="text" name="searchName" id="searchName" size="25" value="<?php echo $_GET['searchName']; ?>" /> <input type="submit" value="Search" />
</form>

<table border="1">
<?php
//Search And Show Characters
while ($row = mysql_fetch_array($result)) { ?>
<tr>
<form id="<?php echo $row['guid']; ?>" method="post" action="<?php echo $_SERVER['PHP_SELF']."?searchName=".$_GET['searchName']; ?>">
<td><?php echo $row['name']; ?></td>
<td><?php getRace($row['race']); ?></td>
<td><?php getGender($row['gender']); ?></td>
<td><input type="hidden" name="id" value="<?php echo $row['guid']; ?>" /><input type="submit" name="changeSubmit" value="Set Race" /></td>
</form>
</tr>
<?php } ?>
</table>


<?php
//Clear DB
mysql_free_result($result);
mysql_close($link);

//Working..Function
function getRace($race) {
global $races;
$output = '<select name="race">';
foreach ($races as $key=>$val) {
$output .= '<option value="'.$key.'"';
if ("$key" == "$race") {
$output .= ' selected="selected"';
}
$output .= '>'.$val.'</option>';
}

$output .= '</select>';

echo $output;
return true;
}

function getGender($gender) {
global $genders;
$output = '<select name="gender">';
foreach ($genders as $key=>$val) {
$output .= '<option value="'.$key.'"';
if ("$key" == "$gender") {
$output .= ' selected="selected"';
}
$output .= '>'.$val.'</option>';
}

$output .= '</select>';

echo $output;
return true;
}

?>