<?php
include("configs.php");
$page_cat = "account";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<meta http-equiv="content-type" content="text/html;charset=UTF-8">
<head>
                <title>Registration of <?php echo $website['title']; ?></title>
                <meta name="description" content="Sign up for the <?php echo $website['title']; ?> Free Account!"/>
                <link rel="shortcut icon" href="" type="image/x-icon"/>
        <link rel="stylesheet" type="text/css" media="screen, projection" href="wow/static/css/account/signup.css"/>
        <link rel="stylesheet" type="text/css" media="screen, projection" href="wow/static/css/account/account-register.css"/>
        

        <!--[if IE 6]>
                <link rel="stylesheet" type="text/css" media="screen, projection" href="/account/css/lightweight-account-creation/signup-ie6.css"/>
                <link rel="stylesheet" type="text/css" media="screen, projection" href="/account/css/lightweight-account-creation/signup-promo-free-starter-ie6.css"/>
        <![endif]-->

        <!--[if IE 7]>
                <link rel="stylesheet" type="text/css" media="screen, projection" href="/account/css/lightweight-account-creation/signup-ie7.css"/>
                <link rel="stylesheet" type="text/css" media="screen, projection" href="/account/css/lightweight-account-creation/signup-promo-free-starter-ie7.css"/>
        <![endif]-->
        <script type="text/javascript" src="wow/static/local-common/js/third-party/jquery-1.4.4-p1.min.js"></script>
        <script type="text/javascript" src="wow/static/local-common/js/core2.js"></script>
        <script type="text/javascript" src="wow/static/local-common/js/third-party/swfobject2.js"></script>
        <script type="text/javascript" src="wow/static/local-common/js/signup.js"></script>
        <script type="text/javascript" src="wow/static/local-common/js/form-validation.js"></script>

        <script type="text/javascript">
                FormValidation.validators.required.errorProperties.text         = "Please fill in all required fields.";
                FormValidation.validators.emailMatch.errorProperties.text       = "Your e-mail addresses must match.";
                FormValidation.validators.captcha.errorProperties.text          = "The security input you've entered was invalid, please try again.";
                FormValidation.validators.emailUnavailable.errorProperties.text = 'This e-mail address is already in use. Existing <?php echo $website['title']; ?> users can &lt;a href=&quot;{0}&quot;&gt;log in&lt;/a&gt; and create their account.';
                FormValidation.validators.emailInvalid.errorProperties.text     = "Please enter a valid e-mail address.";
                FormValidation.validators.password.errorProperties.text         = "Your password does not meet all requirements.";
                FormValidation.validators.cannotPaste.errorProperties.text      = "Please enter this field manually.";


                WowLanding.regionMenu.regionLabels = {
                        us: "Americas/Oceania",
                        eu: "Europe",
                        ru: "Russia"
                };

                        var regionalSites = {
                                US: '',
                                EU: '',
                                RU: '' 
                        };

                        var enforceCaptcha = false;

        </script>
    
    <script type="text/javascript">
    $(document).ready(function(){
        $("#btnSubmit").click(function(){
            $.ajax({
                url : "register_ajax.php",
                type : "POST",
                data : "action=register&username="+$("#firstName").val()+"&password="+$("#passwordConfirmation").val()+"&email="+$("#emailAddressConfirmation"),
                success : function(result){
                    if(result === "1")
                    {
                        alert("You are now Registered, and may Login to play!");
                    }
                }
            });
        });
        $("#firstName").blur(function(){
            var timer = setTimeout(function(){
                $.ajax({
                    url : "register_ajax.php",
                    type : "POST",
                    data : "action=check_username&username="+$("#firstName").val(),
                    success : function(result){
                        if(result == "2")
                        {
                            alert("Username already taken!");
                        }
                    }
                });
            },2000);
        });
    });
    </script>


        </head>
        
        <body class="en-gb" onclick="WowLanding.regionMenu.hide();">
        <div class="positionWrapper">
                <div class="relative">
                        <div class="page">
                                <div class="header-text"></div>
        <div class="leftColumn">

                <div class="wow-logo"></div>
                <div class="starter-desc">
                        <b>The world's most epic online experience is now free! <br/>Enter our World of Warcraft Servers and live an experience that you could never feel!</b>
                </div>
        </div>
         <div class="rightColumn">
        <table class="topLogin">
            <tr>
                <td class="left" valign="middle">
                    Already have an account and you got redirected by mistake?
                </td>
                <td class="right" valign="middle">
                    <a class="signIn" href="?login" onClick="return Login.open('<?php echo $website['root'];?>login.php?<?php echo $_SESSION['sessionid']; ?>')">
                        <span>Log In</span>
                    </a>
                </td>
            </tr>
        </table>

        <div class="clear"><!-- --></div>
        <div id="parchment-container">
                        <div class="wrapper-parchment-bottom">
                                <div class="parchment-bottom">
                                        <div class="parchment-top">
                                                <div class="parchment-top-smoothener">
        <form id="signUpForm" name="signUpForm" class="signUpForm" action="https://eu.battle.net/account/creation/wow/signup/." method="post"
                onsubmit="return FormValidation.validateForm(this);">

                <h1 class="formHeader">
                        <!-- Sign Up. It?s Free. -->
                                        </h1>
                <div class="formHeader-desc"><br></div>


                <div class="relative">


        <div id="formValidation" class="messageBox" style="display:none">
                <div class="background">
                        <ul id="errorList">
                        </ul>
                </div>
        </div>
                </div>
        <div class="formBackground">
                <div class="formTop">
                        <div class="formBottom">
                                <table class="accountInfo">
        <tr id="firstNameRow" class="">
                <td class="leftCol">
                        <label for="firstName">Account Name</label>
                </td>
                <td class="rightCol">
    <input type="text" id="firstName" name="accountName" value="" class='text validate required' onblur='FormValidation.validateField(this, event);' maxlength='32'    />

                        <div class="validField"><!-- --></div>

                        <script type="text/javascript">
                                document.getElementById("firstName").focus();
                        </script>
                        <div class="clear"><!-- --></div>
                </td>
        </tr>
        
        <tr id="lastNameRow" class="">
                <td class="leftCol">
                        <label for="lastName">Security Question</label>
                </td>
                </td>
                <td class="rightCol">
                                <select class="text validate required" style="width:50" name="SecurityQ" id="dobDay" onchange="FormValidation.validateField(this, event);">
                                        <option value="Your middle name?">Your middle name?</option>
                                        <option value="Your mother maiden name?">Your mother maiden name?</option>
                                        <option value="Your pet's name?">Your pet's name?</option>
                                        <option value="Your birth town?">Your birth town?</option>
                                        <option value="Father's City of birth?">Father's City of birth?</option>
                                        <option value="Mother's City of birth?">Mother's City of birth?</option>
                                </select>
        </tr>
        <tr id="emailAddressRow" class="">
                <td class="leftCol">
                        <label for="emailAddress">Security Answer</label>
                </td>
                <td class="rightCol">
    <input type="text" id="emailAddress" name="emailAddress" value="" class='text validate required emailMatch emailUnavailable emailInvalid' onclick='$("#accountNote").show();' onfocus='$("#accountNote").show();' onblur='$("#accountNote").hide();FormValidation.validateField(this, event);PasswordValidation.validate(event)' maxlength='320'    />

                        <div class="validField"><!-- --></div>
                        <div class="clear"><!-- --></div>
                        <div id="accountNote" class="messageBox" style="display:none">
                                
                </td>
        </tr>
        <tr id="emailAddressRow" class="">
                <td class="leftCol">
                        <label for="emailAddress">E-mail</label>
                </td>
                <td class="rightCol">
    <input type="text" id="emailAddress" name="accountEmail" value="" class='text validate required emailMatch emailUnavailable emailInvalid' onclick='$("#accountNote").show();' onfocus='$("#accountNote").show();' onblur='$("#accountNote").hide();FormValidation.validateField(this, event);PasswordValidation.validate(event)' maxlength='320'    />

                        <div class="validField"><!-- --></div>
                        <div class="clear"><!-- --></div>
                        <div id="accountNote" class="messageBox" style="display:none">
                                <div class="arrowLeft"><!-- --></div>
                                <div class="background">
                                        <p>
                                                <strong>This will be your account name</strong>
                                        </p>
                                </div>
                        </div>
                </td>
        </tr>
        <tr id="emailAddressConfirmationRow" class="">
                <td class="leftCol evenRow">
                        <label for="emailAddressConfirmation">Confirm E-mail</label>
                </td>
                <td class="rightCol evenRow">
    <input type="text" id="emailAddressConfirmation" name="accountEmailc" value="" class='text validate required emailMatch' onblur='FormValidation.validateField(this, event);' maxlength='320'    />

                        <div class="validField"><!-- --></div>
                </td>
        </tr>
        <tr id="passwordRow" class="">
                <td class="leftCol">
                        <label for="password">Password</label>
                </td>
                <td class="rightCol">
    <input type="password" id="password" name="accountPass" value="" class='text validate required password' onkeyup='FormValidation.validateField(this, event);' onblur='FormValidation.validateField(this, event);' maxlength='16'    />

                        <div class="validField"><!-- --></div>
                        <div class="clear"><!-- --></div>
                        <div id="passwordValidation" class="messageBox" style="display:none">
                                <div class="arrowLeft"><!-- --></div>
                                <div class="background">
                                        <ul>
                                                <li id="passwordLength" class="invalid">Length is between 8-16 characters</li>
                                                <li id="passwordNumber" class="invalid">Contains at least one number</li>
                                                <li id="passwordCharacter" class="invalid">Contains at least one alphabetic character</li>
                                                <li id="passwordCharacters" class="invalid">Only contains alphabetic characters (A-Z), numeric characters (0-9), and punctuation.</li>
                                                <li id="passwordSimilarity" class="invalid">Not similar to your account name</li>
                                                <li id="passwordsMatch" class="invalid">Passwords must match</li>
                                        </ul>
                                </div>
                        </div>
                </td>
        </tr>
        <tr id="passwordConfirmationRow" class="">
                <td class="leftCol">
                        <label for="passwordConfirmation">Confirm Password</label>
                </td>
                <td class="rightCol evenRow">
    <input type="password" id="passwordConfirmation" name="accountPassc" value="" class='text validate required password' onkeyup='FormValidation.validateField(this, event);' maxlength='16'    />

                        <div class="validField"><!-- --></div>
                </td>
        </tr>
        <tr class="parental-toggle" id="ageRow">
                <td class="leftCol">
                        <label for="age">Date of Birth</label>
                </td>
                <td class="rightCol">
                                <select class="text validate required" style="width:auto" name="dobDay" id="dobDay" onchange="FormValidation.validateField(this, event);">
                                        <option value="">Day</option>
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
                                <select class="text validate required" style="width:auto" name="dobMonth" id="dobMonth" onchange="FormValidation.validateField(this, event);">
                                        <option value="">Month</option>
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
                                </select>

                        <select class="text validate required" style="width:auto" name="dobYear" id="dobYear" onchange="FormValidation.validateField(this, event);">
                                <option value="">Year</option>
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

                        <div class="validField"><!-- --></div>
                </td>
        </tr>

                                </table>
                        </div>
                </div>
        </div>


                <div class="clear"><!-- --></div>
                <div id="captchaExtension">
                        <table class="accountInfo">
        <tr>
                <td valign="top" class="leftCol region">Region</td>
                <td valign="top" class="rightCol region">
                        <span id="regionLabel">Entire World</span>
                                <br />
                        <span class="aboutRegions">
                                
                        </span>
                        <div class="clear"><!-- --></div>

                        
                                <div id="regionSelection" style="display:none" class="messageBox"
                                        onmouseover="WowLanding.regionMenu.focus=true"
                                        onmouseout="WowLanding.regionMenu.focus=false">

                                        
                                </div>
                        </div>
                </td>
        </tr>
        <tr id="touAgreeRow">
                <td valign="top" class="leftCol">
                        <div class="checkboxBorder">
                                <input id="touAgree" name="touAgree" type="checkbox" class="validate required"
                                        onclick="FormValidation.validateField(this, event);" />
                        </div>
                </td>
                <td class="rightCol">
                        <label for="touAgree">
                                        I agree to the <a href="" onclick="window.open(this.href);return false;">Terms of Use</a>, <a href="" onclick="window.open(this.href);return false;">Privacy Policy</a> and <a href="" onclick="window.open(this.href);return false;">Anti-cheating Program</a>
                        </label>
                        <div class="terms-desc">
                                We will not sell or rent your e-mail address however we need it for Security Reasons.
                        </div>
                </td>
        </tr>
        <tr>
                <td class="rightCol" colspan="2">
                        <input id="prepopulate" name="prepopulate" type="hidden" value="false" />
                        <input name="regionRef" type="hidden" value=""/>
                        <input id="btnSubmit" type="submit" name="reg" class="submit" value="Register now!" />
                </td>
        </tr>
                        </table>
                </div>
                        <div class="starter-additional-msg"></div>
        </form>
                                                </div>
                                        </div>
                                </div>
                        </div>
                        <div class="parchment-bottom-edge">

                        </div>
                </div>
        </div>

        <div class="clear"><!-- --></div>

                        </div>
                </div>
        </div>

        <script type="text/javascript">
                FormValidation.initialize("signUpForm", true);

                //returning user
                ReturningUser.check();
        </script>

    <script type="text/javascript" src="../../ssl.google-analytics.com/ga.js"></script>
                <script type="text/javascript">
                //<![CDATA[
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
                //]]>
                </script>
                <script type="text/javascript">
                //<![CDATA[
        $(function() {
            Core.appendFrame('https://bs.serving-sys.com/BurstingPipe/ActivityServer.bs?cn=as&amp;ifrm=1&amp;ActivityID=97820&amp;Value=1&amp;OrderID=1&amp;ProductID=WOW&amp;ProductInfo=Classic');
        });
                //]]>
                </script>
                </body>
                
<meta http-equiv="content-type" content="text/html;charset=UTF-8">
</html>