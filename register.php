<?php
include("configs.php");
$page_cat = "account";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-gb">
<head>
<title>Registration of <?php echo $website['title']; ?></title>
<meta content="false" http-equiv="imagetoolbar" />
<meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible" />
<link rel="shortcut icon" href="wow/static/local-common/images/favicons/bam.ico" type="image/x-icon"/>
<link rel="search" type="application/opensearchdescription+xml" href="http://eu.battle.net/en-gb/data/opensearch" title="Battle.net Search" />
<link rel="stylesheet" type="text/css" media="all" href="wow/static/local-common/css/common.css" />
<!--[if IE]><link rel="stylesheet" type="text/css" media="all" href="wow/static/local-common/css/common-ie.css" /><![endif]-->
<!--[if IE 6]><link rel="stylesheet" type="text/css" media="all" href="wow/static/local-common/css/common-ie6.css" /><![endif]-->
<!--[if IE 7]><link rel="stylesheet" type="text/css" media="all" href="wow/static/local-common/css/common-ie7.css" /><![endif]-->
<link rel="stylesheet" type="text/css" media="all" href="wow/static/css/bnet.css" />
<link rel="stylesheet" type="text/css" media="print" href="wow/static/css/bnet-print.css" />
<link rel="stylesheet" type="text/css" media="all" href="wow/static/css/inputs.css" />
<!--[if IE 6]><link rel="stylesheet" type="text/css" media="all" href="wow/static/css/inputs-ie6.css" /><![endif]-->
<!--[if IE]><link rel="stylesheet" type="text/css" media="all" href="wow/static/css/inputs-ie.css" /><![endif]-->
<link rel="stylesheet" type="text/css" media="all" href="wow/static/css/account-reg/streamlined-creation.css" />
<!--[if IE 6]><link rel="stylesheet" type="text/css" media="all" href="wow/static/css/account-reg/streamlined-creation-ie6.css" /><![endif]-->
<!--[if IE 7]><link rel="stylesheet" type="text/css" media="all" href="wow/static/css/account-reg/streamlined-creation-ie7.css" /><![endif]-->
<!--[if IE]><link rel="stylesheet" type="text/css" media="all" href="wow/static/css/bnet-ie.css" /><![endif]-->
<!--[if IE 6]><link rel="stylesheet" type="text/css" media="all" href="wow/static/css/bnet-ie6.css" /><![endif]-->
<script type="text/javascript" src="wow/static/local-common/js/third-party/jquery-1.4.4-p1.min.js"></script>
<script type="text/javascript" src="wow/static/local-common/js/core.js"></script>
<script type="text/javascript" src="wow/static/local-common/js/tooltip.js"></script>
<!--[if IE 6]> <script type="text/javascript">
//<![CDATA[
try { document.execCommand('BackgroundImageCache', false, true) } catch(e) {}
//]]>
</script>
<![endif]-->
<script type="text/javascript">
//<![CDATA[
Core.staticUrl = '/account';
Core.sharedStaticUrl= 'wow/static/local-common';
Core.baseUrl = '/account';
Core.supportUrl = 'http://eu.battle.net/support/';
Core.secureSupportUrl= 'https://eu.battle.net/support/';
Core.project = 'bam';
Core.locale = 'en-gb';
Core.buildRegion = 'eu';
Core.shortDateFormat= 'dd/MM/yyyy';
Core.dateTimeFormat = 'dd/MM/yyyy HH:mm';
Core.loggedIn = false;
Flash.videoPlayer = 'http://eu.media.blizzard.com/global-video-player/themes/bam/video-player.swf';
Flash.videoBase = 'http://eu.media.blizzard.com/bam/media/videos';
Flash.ratingImage = 'http://eu.media.blizzard.com/global-video-player/ratings/bam/rating-pegi.jpg';
Flash.expressInstall= 'http://eu.media.blizzard.com/global-video-player/expressInstall.swf';
var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-544112-16']);
_gaq.push(['_trackPageview']);
_gaq.push(['_trackPageLoadTime']);
//]]>
</script>
</head>
<body class="en-gb creation">
<div id="layout-top">
<div class="wrapper">
<div id="header">
<div id="navigation">
<div id="page-menu" class="large">
<h2 class="isolated"> Account Creation
</h2>
<span class="clear"></span>
</div>
<span class="clear"></span>
</div>
</div>
<?php include("functions/footer_man_nav.php"); ?>
<div id="layout-middle">
<div class="wrapper">
<div id="content">
<div id="page-header">
<?php
			?>
			<?php
						  if(!isset($_SESSION['username'])){
						  if(isset($_POST['reg'])){
						  $accountName = mysql_real_escape_string(stripslashes($_POST['accountName']));
						  $accountPass = stripslashes($_POST['accountPass']);
						  $accountEmail = mysql_real_escape_string(stripslashes($_POST['accountEmail']));
						  mysql_select_db($server_adb,$connection_setup)or die(mysql_error());
						  $check_query = mysql_query("SELECT * FROM account WHERE username = '".$accountName."'");
						  $check = mysql_fetch_assoc($check_query);

						  if(!$check){

							if($accountPass != stripslashes($_POST['accountPassc'])){
							  $error[]="Passwords does not match.";
							}

							if(empty($accountEmail)){
							  $error[]="You need to enter your e-mail";
							}

							if(empty($accountPass)){
							  $error[]="You need to enter a password";
							}

						  }else{
							$error[]="The username has been already taken";
						  }
              
              ?>
			  <?php
              if(isset($error) && count($error) > 0){
                echo '<div class="errors">';
                foreach($error as $errors){
                echo "<font color='red'>*".$errors."</font><br />";
                }
                echo '</div>';
                echo '<meta http-equiv="refresh" content="2"';
              }else{
				function sha_password($user,$pass){
					$user = strtoupper($user);
					$pass = strtoupper($pass);
					return SHA1($user.':'.$pass);
				}
				$sha_pass_hash = strtoupper(sha_password($accountName,$accountPass));
				$ip = intval($_SERVER['REMOTE_ADDR']);
                $register_query = mysql_query("INSERT INTO account (username,sha_pass_hash,email,last_ip,expansion) VALUES ('".strtoupper($accountName)."','".mysql_real_escape_string($sha_pass_hash)."','".$accountEmail."','".$ip."','2')")or die(mysql_error());
                $accinfoq = mysql_query("SELECT * FROM account WHERE username = '".$accountName."'");
				$accinfo = mysql_fetch_assoc($accinfoq)or die(mysql_error());
				mysql_select_db($server_db,$connection_setup)or die(mysql_error());
				$register_query = mysql_query("INSERT INTO users(id) VALUES ('".mysql_real_escape_string($accinfo['id'])."')");
				echo '<div class="success">';
                echo $accountName.' has been successfully created.';
                echo '</div>';
                $_SESSION['username'] = $accountName;
                echo '<meta http-equiv="refresh" content="2;url=index.php"';
              }
              ?>
			  <?php
						  }else{
						  ?>
<p class="privacy-message"><b>We value and respect your privacy.</b> Find out how Blizzard safeguards user information by reading our <a href="" onclick="window.open(this.href); return false;">Online Privacy Policy</a>.</p>
</div>
<form action="" method="get" class="country-select">
<div class="input-row input-row-select">
<span class="input-left">
<label for="country">
<span class="label-text">
Country of Residence:
</span>
<span class="input-required"></span>
</label>
</span>
<span class="input-right">
<span class="input-select input-select-small">
<select name="country" id="country" class="small border-5 glow-shadow-2" tabindex="1">
<optgroup label="">
<option value="GBR" selected="selected">United Kingdom</option>
<option value="FRA">France</option>
<option value="DEU">Germany</option>
<option value="ESP">Spain</option>
<option value="RUS">Russian Federation</option>
</optgroup>
<option value="AFG">Afghanistan</option>
<option value="ALA">Åland Islands</option>
<option value="ALB">Albania</option>
<option value="DZA">Algeria</option>
<option value="ASM">American Samoa</option>
<option value="AND">Andorra</option>
<option value="AGO">Angola</option>
<option value="AIA">Anguilla</option>
<option value="ATA">Antarctica</option>
<option value="ATG">Antigua And Barbuda</option>
<option value="ARG">Argentina</option>
<option value="ARM">Armenia</option>
<option value="ABW">Aruba</option>
<option value="AUS">Australia</option>
<option value="AUT">Austria</option>
<option value="AZE">Azerbaijan</option>
<option value="BHS">Bahamas</option>
<option value="BHR">Bahrain</option>
<option value="BGD">Bangladesh</option>
<option value="BRB">Barbados</option>
<option value="BLR">Belarus</option>
<option value="BEL">Belgium</option>
<option value="BLZ">Belize</option>
<option value="BEN">Benin</option>
<option value="BMU">Bermuda</option>
<option value="BTN">Bhutan</option>
<option value="BOL">Bolivia</option>
<option value="BIH">Bosnia And Herzegovina</option>
<option value="BWA">Botswana</option>
<option value="BVT">Bouvet Island</option>
<option value="BRA">Brazil</option>
<option value="IOT">British Indian Ocean Territory</option>
<option value="BRN">Brunei Darussalam</option>
<option value="BGR">Bulgaria</option>
<option value="BFA">Burkina Faso</option>
<option value="BDI">Burundi</option>
<option value="KHM">Cambodia</option>
<option value="CMR">Cameroon</option>
<option value="CAN">Canada</option>
<option value="CPV">Cape Verde</option>
<option value="CYM">Cayman Islands</option>
<option value="CAF">Central African Republic</option>
<option value="TCD">Chad</option>
<option value="CHL">Chile</option>
<option value="CHINA">China</option>
<option value="CXR">Christmas Island</option>
<option value="CCK">Cocos (Keeling) Islands</option>
<option value="COL">Colombia</option>
<option value="COM">Comoros</option>
<option value="COG">Congo</option>
<option value="COD">Congo, Democratic Republic Of The</option>
<option value="COK">Cook Islands</option>
<option value="CRI">Costa Rica</option>
<option value="CIV">Cote D'Ivoire</option>
<option value="HRV">Croatia</option>
<option value="CUB">Cuba</option>
<option value="CYP">Cyprus</option>
<option value="CZE">Czech Republic</option>
<option value="DNK">Denmark</option>
<option value="DJI">Djibouti</option>
<option value="DMA">Dominica</option>
<option value="DOM">Dominican Republic</option>
<option value="TLS">East Timor</option>
<option value="ECU">Ecuador</option>
<option value="EGY">Egypt</option>
<option value="SLV">El Salvador</option>
<option value="GNQ">Equatorial Guinea</option>
<option value="ERI">Eritrea</option>
<option value="EST">Estonia</option>
<option value="ETH">Ethiopia</option>
<option value="FLK">Falkland Islands (Malvinas)</option>
<option value="FRO">Faroe Islands</option>
<option value="FJI">Fiji</option>
<option value="FIN">Finland</option>
<option value="GUF">French Guiana</option>
<option value="ATF">French Southern Territories</option>
<option value="GAB">Gabon</option>
<option value="GMB">Gambia</option>
<option value="GEO">Georgia</option>
<option value="GHA">Ghana</option>
<option value="GIB">Gibraltar</option>
<option value="GRC">Greece</option>
<option value="GRL">Greenland</option>
<option value="GRD">Grenada</option>
<option value="GLP">Guadeloupe</option>
<option value="GUM">Guam</option>
<option value="GTM">Guatemala</option>
<option value="GGY">Guernsey</option>
<option value="GIN">Guinea</option>
<option value="GNB">Guinea-Bissau</option>
<option value="GUY">Guyana</option>
<option value="HTI">Haiti</option>
<option value="HMD">Heard Island And Mcdonald Islands</option>
<option value="HND">Honduras</option>
<option value="HKG">Hong Kong</option>
<option value="HUN">Hungary</option>
<option value="ISL">Iceland</option>
<option value="IND">India</option>
<option value="IDN">Indonesia</option>
<option value="IRN">Iran, Islamic Republic Of</option>
<option value="IRQ">Iraq</option>
<option value="IRL">Ireland</option>
<option value="IMN">Isle Of Man</option>
<option value="ISR">Israel</option>
<option value="ITA">Italy</option>
<option value="JAM">Jamaica</option>
<option value="JPN">Japan</option>
<option value="JEY">Jersey</option>
<option value="JOR">Jordan</option>
<option value="KAZ">Kazakhstan</option>
<option value="KEN">Kenya</option>
<option value="KIR">Kiribati</option>
<option value="KOR">Korea, Republic Of</option>
<option value="KWT">Kuwait</option>
<option value="KGZ">Kyrgyzstan</option>
<option value="LAO">Lao People'S Democratic Republic</option>
<option value="LVA">Latvia</option>
<option value="LBN">Lebanon</option>
<option value="LSO">Lesotho</option>
<option value="LBR">Liberia</option>
<option value="LBY">Libyan Arab Jamahiriya</option>
<option value="LIE">Liechtenstein</option>
<option value="LTU">Lithuania</option>
<option value="LUX">Luxembourg</option>
<option value="MAC">Macao</option>
<option value="MKD">Macedonia, The Former Yugoslav Republic Of</option>
<option value="MDG">Madagascar</option>
<option value="MWI">Malawi</option>
<option value="MYS">Malaysia</option>
<option value="MDV">Maldives</option>
<option value="MLI">Mali</option>
<option value="MLT">Malta</option>
<option value="MHL">Marshall Islands</option>
<option value="MRT">Mauritania</option>
<option value="MUS">Mauritius</option>
<option value="MYT">Mayotte</option>
<option value="MEX">Mexico</option>
<option value="FSM">Micronesia, Federated States Of</option>
<option value="MDA">Moldova, Republic Of</option>
<option value="MCO">Monaco</option>
<option value="MNG">Mongolia</option>
<option value="MNE">Montenegro</option>
<option value="MSR">Montserrat</option>
<option value="MAR">Morocco</option>
<option value="MOZ">Mozambique</option>
<option value="MMR">Myanmar</option>
<option value="NAM">Namibia</option>
<option value="NRU">Nauru</option>
<option value="NPL">Nepal</option>
<option value="NLD">Netherlands</option>
<option value="ANT">Netherlands Antilles</option>
<option value="NCL">New Caledonia</option>
<option value="NZL">New Zealand</option>
<option value="NIC">Nicaragua</option>
<option value="NER">Niger</option>
<option value="NGA">Nigeria</option>
<option value="NIU">Niue</option>
<option value="NFK">Norfolk Island</option>
<option value="MNP">Northern Mariana Islands</option>
<option value="NOR">Norway</option>
<option value="OMN">Oman</option>
<option value="PAK">Pakistan</option>
<option value="PLW">Palau</option>
<option value="PSE">Palestinian Territory, Occupied</option>
<option value="PAN">Panama</option>
<option value="PNG">Papua New Guinea</option>
<option value="PRY">Paraguay</option>
<option value="PER">Peru</option>
<option value="PHL">Philippines</option>
<option value="PCN">Pitcairn</option>
<option value="POL">Poland</option>
<option value="PRT">Portugal</option>
<option value="PRI">Puerto Rico</option>
<option value="QAT">Qatar</option>
<option value="REU">Reunion</option>
<option value="ROU">Romania</option>
<option value="RWA">Rwanda</option>
<option value="BLM">Saint Barthélemy</option>
<option value="SHN">Saint Helena</option>
<option value="KNA">Saint Kitts And Nevis</option>
<option value="LCA">Saint Lucia</option>
<option value="MAF">Saint Martin (French Part)</option>
<option value="SPM">Saint Pierre And Miquelon</option>
<option value="VCT">Saint Vincent And The Grenadines</option>
<option value="WSM">Samoa</option>
<option value="SMR">San Marino</option>
<option value="STP">Sao Tome And Principe</option>
<option value="SAU">Saudi Arabia</option>
<option value="SEN">Senegal</option>
<option value="SRB">Serbia</option>
<option value="SYC">Seychelles</option>
<option value="SLE">Sierra Leone</option>
<option value="SGP">Singapore</option>
<option value="SVK">Slovakia</option>
<option value="SVN">Slovenia</option>
<option value="SLB">Solomon Islands</option>
<option value="SOM">Somalia</option>
<option value="ZAF">South Africa</option>
<option value="SGS">South Georgia And The South Sandwich Islands</option>
<option value="LKA">Sri Lanka</option>
<option value="SDN">Sudan</option>
<option value="SUR">Suriname</option>
<option value="SJM">Svalbard And Jan Mayen</option>
<option value="SWZ">Swaziland</option>
<option value="SWE">Sweden</option>
<option value="CHE">Switzerland</option>
<option value="SYR">Syrian Arab Republic</option>
<option value="TWN">Taiwan</option>
<option value="TJK">Tajikistan</option>
<option value="TZA">Tanzania, United Republic Of</option>
<option value="THA">Thailand</option>
<option value="TGO">Togo</option>
<option value="TKL">Tokelau</option>
<option value="TON">Tonga</option>
<option value="TTO">Trinidad And Tobago</option>
<option value="TUN">Tunisia</option>
<option value="TUR">Turkey</option>
<option value="TKM">Turkmenistan</option>
<option value="TCA">Turks And Caicos Islands</option>
<option value="TUV">Tuvalu</option>
<option value="UGA">Uganda</option>
<option value="UKR">Ukraine</option>
<option value="ARE">United Arab Emirates</option>
<option value="USA">United States</option>
<option value="UMI">United States Minor Outlying Islands</option>
<option value="URY">Uruguay</option>
<option value="UZB">Uzbekistan</option>
<option value="VUT">Vanuatu</option>
<option value="VAT">Vatican City State</option>
<option value="VEN">Venezuela, Bolivarian Republic Of</option>
<option value="VNM">Viet Nam</option>
<option value="VGB">Virgin Islands, British</option>
<option value="VIR">Virgin Islands, U.S.</option>
<option value="WLF">Wallis And Futuna</option>
<option value="ESH">Western Sahara</option>
<option value="YEM">Yemen</option>
<option value="ZMB">Zambia</option>
<option value="ZWE">Zimbabwe</option>
</select>
<span class="inline-message" id="country-message"> </span>
</span>
<button
class="ui-button button1 "
type="submit"
id="country-submit"
tabindex="1">
<span>
<span>Change Country</span>
</span>
</button>
</span>
</div>
<div class="input-row input-row-note" id="country-warning" style="display: none">
<div class="input-note border-5 glow-shadow">
<div id="countryGlobal" class="input-note-content">
<p class="caption">If you change your country, you will get different form fields for account creation and address entry that may not match your situation. Proceed?</p>
<p>
<a
class="ui-button button1 "
href=""
tabindex="1">
<span>
<span>Change Country</span>
</span>
</a>
<a class="ui-cancel "
href=""
tabindex="1">
<span>
Cancel </span>
</a>
</p>
</div>
<div id="countryCHINA" class="input-note-content">
<p class="caption">You are on the Taiwanese regional Battle.net website. Only account holders who have a Taiwanese World of Warcraft account should create a Battle.net account here. If you have a Chinese World of Warcraft account, go to Battle.net China instead.</p>
<p>
<a
class="ui-button button1 "
href="?country=CHINA"
id="stayTaiwan"
tabindex="1">
<span>
<span>YES, I HAVE A TAIWANESE WORLD OF WARCRAFT ACCOUNT</span>
</span>
</a>
<br />
<a
class="ui-button button1 "
href="http://www.battlenet.com.cn"
id="gotoChina"
tabindex="1">
<span>
<span>GO TO BATTLE.NET IN CHINA</span>
</span>
</a>
<a class="ui-cancel "
href=""
tabindex="1">
<span>
Cancel </span>
</a>
</p>
</div>
<div class="input-note-arrow"></div>
</div>
</div>
</form>
<script type="text/javascript">
//<![CDATA[
(function() {
var countrySubmit = document.getElementById('country-submit');
countrySubmit.style.display = 'none';
})();
//]]>
</script>
<div id="page-content">
<form action="" method="post" id="creation">
<div class="input-hidden">
<input type="hidden" id="csrftoken" name="csrftoken" value="6693641e-fbf5-4e6a-af8b-00d8d853a45e" />
<input type="hidden" name="country" value="GBR" />
</div>
<script type="text/javascript">
//<![CDATA[
var FormMsg = {
emailMessage1: 'This will be the username you use to log in.',
emailError1: '<span class="inline-error">Not a valid e-mail address.</span>',
emailError2: '<span class="inline-error">E-mail addresses must match.</span>',
passwordError1: '<span class="inline-error">Password does not meet the guidelines.</span>',
passwordError2: '<span class="inline-error">Passwords must match!</span>',
passwordStrength0: 'Too Short',
passwordStrength1: 'Weak',
passwordStrength2: 'Fair',
passwordStrength3: 'Strong'
};
//]]>
</script>
<div class="form-blockable" id="country-change">
<div class="input-row input-row-select">
<span class="input-left">
<label for="dobDay">
<span class="label-text">
Date of Birth:
</span>
<span class="input-required">*</span>
</label>
</span>
<span class="input-right">
<span class="input-select input-select-extra-extra-extra-small">
<select name="dobDay" id="dobDay" class="extra-extra-extra-small border-5 glow-shadow-2" tabindex="1" required="required">
<option value="" selected="selected">Day</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
<option value="31">31</option>
</select>
<span class="inline-message" id="dobDay-message"> </span>
</span>
<span class="input-select input-select-extra-extra-small">
<select name="dobMonth" id="dobMonth" class="extra-extra-small border-5 glow-shadow-2" tabindex="1" required="required">
<option value="" selected="selected">Month</option>
<option value="1">January</option>
<option value="2">February</option>
<option value="3">March</option>
<option value="4">April</option>
<option value="5">May</option>
<option value="6">June</option>
<option value="7">July</option>
<option value="8">August</option>
<option value="9">September</option>
<option value="10">October</option>
<option value="11">November</option>
<option value="12">December</option>
</select>
<span class="inline-message" id="dobMonth-message"> </span>
</span>
<span class="input-select input-select-extra-extra-extra-small">
<select name="dobYear" id="dobYear" class="extra-extra-extra-small border-5 glow-shadow-2" tabindex="1" required="required">
<option value="" selected="selected">Year</option>
<option value="2011">2011</option>
<option value="2010">2010</option>
<option value="2009">2009</option>
<option value="2008">2008</option>
<option value="2007">2007</option>
<option value="2006">2006</option>
<option value="2005">2005</option>
<option value="2004">2004</option>
<option value="2003">2003</option>
<option value="2002">2002</option>
<option value="2001">2001</option>
<option value="2000">2000</option>
<option value="1999">1999</option>
<option value="1998">1998</option>
<option value="1997">1997</option>
<option value="1996">1996</option>
<option value="1995">1995</option>
<option value="1994">1994</option>
<option value="1993">1993</option>
<option value="1992">1992</option>
<option value="1991">1991</option>
<option value="1990">1990</option>
<option value="1989">1989</option>
<option value="1988">1988</option>
<option value="1987">1987</option>
<option value="1986">1986</option>
<option value="1985">1985</option>
<option value="1984">1984</option>
<option value="1983">1983</option>
<option value="1982">1982</option>
<option value="1981">1981</option>
<option value="1980">1980</option>
<option value="1979">1979</option>
<option value="1978">1978</option>
<option value="1977">1977</option>
<option value="1976">1976</option>
<option value="1975">1975</option>
<option value="1974">1974</option>
<option value="1973">1973</option>
<option value="1972">1972</option>
<option value="1971">1971</option>
<option value="1970">1970</option>
<option value="1969">1969</option>
<option value="1968">1968</option>
<option value="1967">1967</option>
<option value="1966">1966</option>
<option value="1965">1965</option>
<option value="1964">1964</option>
<option value="1963">1963</option>
<option value="1962">1962</option>
<option value="1961">1961</option>
<option value="1960">1960</option>
<option value="1959">1959</option>
<option value="1958">1958</option>
<option value="1957">1957</option>
<option value="1956">1956</option>
<option value="1955">1955</option>
<option value="1954">1954</option>
<option value="1953">1953</option>
<option value="1952">1952</option>
<option value="1951">1951</option>
<option value="1950">1950</option>
<option value="1949">1949</option>
<option value="1948">1948</option>
<option value="1947">1947</option>
<option value="1946">1946</option>
<option value="1945">1945</option>
<option value="1944">1944</option>
<option value="1943">1943</option>
<option value="1942">1942</option>
<option value="1941">1941</option>
<option value="1940">1940</option>
<option value="1939">1939</option>
<option value="1938">1938</option>
<option value="1937">1937</option>
<option value="1936">1936</option>
<option value="1935">1935</option>
<option value="1934">1934</option>
<option value="1933">1933</option>
<option value="1932">1932</option>
<option value="1931">1931</option>
<option value="1930">1930</option>
<option value="1929">1929</option>
<option value="1928">1928</option>
<option value="1927">1927</option>
<option value="1926">1926</option>
<option value="1925">1925</option>
<option value="1924">1924</option>
<option value="1923">1923</option>
<option value="1922">1922</option>
<option value="1921">1921</option>
<option value="1920">1920</option>
<option value="1919">1919</option>
<option value="1918">1918</option>
<option value="1917">1917</option>
<option value="1916">1916</option>
<option value="1915">1915</option>
<option value="1914">1914</option>
<option value="1913">1913</option>
<option value="1912">1912</option>
<option value="1911">1911</option>
<option value="1910">1910</option>
<option value="1909">1909</option>
<option value="1908">1908</option>
<option value="1907">1907</option>
<option value="1906">1906</option>
<option value="1905">1905</option>
<option value="1904">1904</option>
<option value="1903">1903</option>
<option value="1902">1902</option>
<option value="1901">1901</option>
<option value="1900">1900</option>
</select>
<span class="inline-message" id="dobYear-message"> </span>
</span>
<span class="inline-note">
<span class="caption">Parents registering for children, <a href="wow/static/creation/parent-signup.html?country=GBR">click here.</a></span>
</span>
</span>
</div>
<div class="input-row input-row-select">
<span class="input-left">
<label for="gender">
<span class="label-text">
Title:
</span>
<span class="input-required">*</span>
</label>
</span>
<span class="input-right">
<span class="input-select input-select-small">
<select name="gender" id="gender" class="small border-5 glow-shadow-2" tabindex="1" required="required">
<option value="1" selected="selected">Mr</option>
<option value="2">Ms</option>
<option value="3">Mrs</option>
<option value="4">Miss</option>
</select>
<span class="inline-message" id="gender-message"> </span>
</span>
</span>
</div>
<div class="input-row input-row-text">
<span class="input-left">
<label for="firstname">
<span class="label-text">
E-mail Address:
</span>
<span class="input-required">*</span>
</label>
</span>
<span class="input-right">
<span class="input-text input-text-small">
<input type="text" name="accountEmail" value="" id="emailAddress" class="small border-5 glow-shadow-2" autocomplete="off" maxlength="32" tabindex="1" required="required" placeholder="Enter E-mail Address" />
<span class="inline-message" id="emailAddress-message"></span>
</span>
<span class="input-text input-text-small">
<input type="text" name="emailAddressConfirmation" value="" id="lastname" class="small border-5 glow-shadow-2" autocomplete="off" maxlength="32" tabindex="1" required="required" placeholder="Re-enter E-mail Address" />
<span class="inline-message" id="emailAddressConfirmation-message"></span>
</span>
</span>
</div>
<div class="input-row input-row-text">
<span class="input-left">
<label for="emailAddress">
<span class="label-text">
Username:
</span>
<span class="input-required">*</span>
</label>
</span>
<span class="input-right">
<span class="input-text input-text-small">
<input type="email" name="accountName" value="" id="emailAddress" class="small border-5 glow-shadow-2" autocomplete="off" onpaste="return false;" maxlength="320" tabindex="1" required="required" placeholder="Enter your Username" />
<span class="inline-message" id="emailAddress-message"></span>
</span>
</span>
</div>
<div class="input-row input-row-text">
<span class="input-left">
<label for="password">
<span class="label-text">
Password:
</span>
<span class="input-required">*</span>
</label>
</span>
<span class="input-right">
<span class="input-text input-text-small">
<input type="password" id="password" name="accountPass" value="" class="small border-5 glow-shadow-2" autocomplete="off" onpaste="return false;" maxlength="16" tabindex="1" required="required" placeholder="Enter Password" />
<span class="inline-message" id="password-message"> </span>
</span>
<span class="input-text input-text-small">
<input type="password" id="rePassword" name="accountPassc" value="" class="small border-5 glow-shadow-2" autocomplete="off" onpaste="return false;" maxlength="16" tabindex="1" required="required" placeholder="Re-enter Password" />
<span class="inline-message" id="rePassword-message"> </span>
</span>
</span>
</div>
<div class="input-row input-row-note" id="password-strength" style="display: none">
<div class="input-note border-5 glow-shadow">
<div class="input-note-left">
<p class="caption">For your security, we highly recommend that you choose a unique password that you don't use for any other online account.</p>
</div>
<div class="input-note-right border-5">
<div class="password-strength">
<span class="password-result">
Password Strength:
<strong id="password-result"></strong>
</span>
<span class="password-rating"><span class="rating rating-default" id="password-rating"></span></span>
</div>
<ul class="password-level" id="password-level">
<li id="password-level-0">
<span class="icon-16"></span>
<span class="icon-16-label">Your password must be between 8-16 characters in length.</span>
</li>
<li id="password-level-1">
<span class="icon-16"></span>
<span class="icon-16-label">Your password may only contain alphabetic characters (A-Z), numeric characters (0-9), and punctuation.</span>
</li>
<li id="password-level-2">
<span class="icon-16"></span>
<span class="icon-16-label">Your password must contain at least one alphabetic character and one numeric character.</span>
</li>
<li id="password-level-3">
<span class="icon-16"></span>
<span class="icon-16-label">You cannot enter your account name as your password.</span>
</li>
<li id="password-level-4">
<span class="icon-16"></span>
<span class="icon-16-label">Passwords must match.</span>
</li>
</ul>
</div>
<div class="clear"></div>
<div class="input-note-arrow"></div>
</div>
</div>
<div class="input-row input-row-select">
<span class="input-left">
<label for="question1">
<span class="label-text">
Secret Question &amp; Answer:
</span>
<span class="input-required">*</span>
</label>
</span>
<span class="input-right">
<span class="input-select input-select-small">
<select name="question1" id="question1" class="small border-5 glow-shadow-2" tabindex="1" required="required">
<option value="" selected="selected">Select a Question</option>
<option value="1">First elementary school I attended?</option>
<option value="2">The high school I graduated from?</option>
<option value="3">Mother's city of birth? </option>
<option value="4">Father's city of birth?</option>
<option value="5">Your city of birth?</option>
<option value="6">Name of your first pet?</option>
<option value="7">Best friend in high school?</option>
<option value="8">Model of your first car?</option>
<option value="9">Your favorite sports team?</option>
<option value="10">Your first employer (company name)?</option>
</select>
<span class="inline-message" id="question1-message"> </span>
</span>
<span class="input-text input-text-small">
<input type="text" name="answer1" value="" id="answer1" class="small border-5 glow-shadow-2" autocomplete="off" maxlength="100" tabindex="1" required="required" placeholder="Answer" />
<span class="inline-message" id="answer1-message"> </span>
</span>
</span>
</div>
<div class="input-row input-row-note question-info" id="question-info" style="display: none;">
<span class="inline-message">This information is used for account security related issues such as resetting your password.</span>
</div>
<div class="input-row input-row-text">
<span class="input-left">
<label for="agreedToChatPolicy">
<span class="label-text">Chat Agreement:</span>
<span class="input-required">*</span>
</label>
</span>
<span class="input-right">
<div class="agreement-check">
<p class="tou-desc">In order to provide Free Gaming, we will monitor and/or review your text chat, including private, or 'whisper' chat, in the event of complaints from other users or violations of the rules. By clicking the check box below, you agree with the rule of allowing us to review your chat Conversations ingame, to investigate potential violations of the rules. We will not use the information for any reason other than pursuing such violations.</p>
</div>
</span>
</div>
<div class="input-row input-row-checkbox input-row-important">
<span class="input-left">
<span class="title-text">
</span>
<span class="input-required"></span>
</span>
<span class="input-right">
<label for="agreedToChatPolicy">
<input type="checkbox" name="agreedToChatPolicy" value="true" id="agreedToChatPolicy" tabindex="1" required="required" />
<span class="label-text">
I consent to Blizzard monitoring and/or reviewing my personal messages.
<span class="input-required">*</span>
</span>
</label>
</span>
<span class="input-left">
<span class="title-text">
</span>
<span class="input-required"></span>
</span>
<span class="input-right">
<label for="agreedToToU">
<input type="checkbox" name="agreedToToU" value="true" id="agreedToToU" tabindex="1" required="required" />
<span class="label-text">
I accept the <a href="" onclick="window.open(this.href); return false;">Terms of Use</a> applicable to my country of residence and if under 18 years old, agree and acknowledge that my parent or guardian has also reviewed and accepted the Terms of Use on my behalf.
<span class="input-required">*</span>
</span>
</label>
</span>
</div>
<div class="submit-row">
<div class="input-left"> </div>
<div class="input-right">
<button
class="ui-button button1 "
type="submit"
name="reg"
id="submit"
tabindex="1">
<span>
<span>Create Free Account</span>
</span>
</button>
<a class="ui-cancel "
href="http://eu.battle.net/"
tabindex="1">
<span>
Cancel </span>
</a>
</div>
</div>
<?php
               }
               }else{
                 echo "<center>You cannot register while you're logged in!</center>";
                 echo '<meta http-equiv="refresh" content="2;url=index.php"';
               }
               ?>
<script type="text/javascript">
//<![CDATA[
(function() {
var creationSubmit = document.getElementById('creation-submit');
creationSubmit.disabled = 'disabled';
creationSubmit.className = creationSubmit.className + ' disabled';
})();
//]]>
</script>
<div class="form-block" id="country-change-overlay" style="display: none"></div>
</div>
</form>
</div>
<script type="text/javascript">
//<![CDATA[
$(function() {
var inputs = new Inputs('#creation');
var creation = new Creation('#creation');
Core.appendFrame('https://bs.serving-sys.com/BurstingPipe/ActivityServer.bs?cn=as&amp;ifrm=1&amp;ActivityID=99739&amp;Value=Revenue&amp;OrderID=OrderID&amp;ProductID=ProductID&amp;ProductInfo=ProductInfo');
});
//]]>
</script>
<!--[if IE 6]> <script type="text/javascript" src="wow/static/local-common/js/third-party/DD_belatedPNG.js"></script>
<script type="text/javascript">
//<![CDATA[
DD_belatedPNG.fix('.icon-32');
DD_belatedPNG.fix('.icon-64');
DD_belatedPNG.fix('.input-note-arrow');
//]]>
</script>
<![endif]-->
</div>
</div>
</div>
<div id="layout-bottom">
<?php include("functions/footer_man.php"); ?>
</div>
<script type="text/javascript">
//<![CDATA[
var xsToken = '33037d3c-3214-46b1-bcb6-7350cedc9ca5';
var Msg = {
support: {
ticketNew: 'Ticket {0} was created.',
ticketStatus: 'Ticket {0}'s status changed to {1}.',
ticketOpen: 'Open',
ticketAnswered: 'Answered',
ticketResolved: 'Resolved',
ticketCanceled: 'Cancelled',
ticketArchived: 'Archived',
ticketInfo: 'Need Info',
ticketAll: 'View All Tickets'
},
cms: {
requestError: 'Your request cannot be completed.',
ignoreNot: 'Not ignoring this user',
ignoreAlready: 'Already ignoring this user',
stickyRequested: 'Sticky requested',
postAdded: 'Post added to tracker',
postRemoved: 'Post removed from tracker',
userAdded: 'User added to tracker',
userRemoved: 'User removed from tracker',
validationError: 'A required field is incomplete',
characterExceed: 'The post body exceeds XXXXXX characters.',
searchFor: "Search for",
searchTags: "Articles tagged:",
characterAjaxError: "You may have become logged out. Please refresh the page and try again.",
ilvl: "Item Lvl",
shortQuery: "Search requests must be at least three characters long."
},
bml: {
bold: 'Bold',
italics: 'Italics',
underline: 'Underline',
list: 'Unordered List',
listItem: 'List Item',
quote: 'Quote',
quoteBy: 'Posted by {0}',
unformat: 'Remove Formating',
cleanup: 'Fix Linebreaks',
code: 'Code Blocks',
item: 'WoW Item',
itemPrompt: 'Item ID:',
url: 'URL',
urlPrompt: 'URL Address:'
},
ui: {
viewInGallery: 'View in gallery',
loading: 'Loading…',
unexpectedError: 'An error has occurred',
fansiteFind: 'Find this on…',
fansiteFindType: 'Find {0} on…',
fansiteNone: 'No fansites available.'
},
grammar: {
colon: '{0}:',
first: 'First',
last: 'Last'
},
fansite: {
achievement: 'achievement',
character: 'character',
faction: 'faction',
'class': 'class',
object: 'object',
talentcalc: 'talents',
skill: 'profession',
quest: 'quest',
spell: 'spell',
event: 'event',
title: 'title',
arena: 'arena team',
guild: 'guild',
zone: 'zone',
item: 'item',
race: 'race',
npc: 'NPC',
pet: 'pet'
}
};
//]]>
</script>
<script type="text/javascript" src="wow/static/js/bam.js"></script>
<script type="text/javascript" src="wow/static/local-common/js/tooltip.js"></script>
<script type="text/javascript" src="wow/static/local-common/js/menu.js"></script>
<script type="text/javascript">
$(function() {
Menu.initialize();
Menu.config.colWidth = 190;
Locale.dataPath = 'data/i18n.frag.xml';
});
</script>
<!--[if lt IE 8]>
<script type="text/javascript" src="wow/static/local-common/js/third-party/jquery.pngFix.pack.js"></script>
<script type="text/javascript">$('.png-fix').pngFix();</script>
<![endif]-->
<script type="text/javascript" src="wow/static/js/inputs.js"></script>
<script type="text/javascript" src="wow/static/js/account-creation/streamlined-creation.js"></script>
<script type="text/javascript">
//<![CDATA[
Core.load("wow/static/local-common/js/overlay.js");
Core.load("wow/static/local-common/js/search.js");
Core.load("wow/static/local-common/js/third-party/jquery-ui-1.8.6.custom.min.js");
Core.load("wow/static/local-common/js/third-party/jquery.mousewheel.min.js");
Core.load("wow/static/local-common/js/third-party/jquery.tinyscrollbar.custom.js");
Core.load("wow/static/local-common/js/login.js", false, function() {
Login.embeddedUrl = 'https://eu.battle.net/login/login.frag';
});
//]]>
</script>
<script type="text/javascript">
//<![CDATA[
(function() {
var ga = document.createElement('script');
var src = "https://ssl.google-analytics.com/ga.js";
if ('http:' == document.location.protocol) {
src = "http://www.google-analytics.com/ga.js";
}
ga.type = 'text/javascript';
ga.setAttribute('async', 'true');
ga.src = src;
var s = document.getElementsByTagName('script');
s = s[s.length-1];
s.parentNode.insertBefore(ga, s.nextSibling);
})();
//]]>
</script>
</body>
</html>