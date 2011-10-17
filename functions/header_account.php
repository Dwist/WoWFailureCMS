<div id="navigation">
<div id="page-menu" class="large">
<h2><a href="account_man.php"> Account
</a></h2>
<?php if(isset($page_cat)) ?>
<ul>
<li <?php if($page_cat=='summary') echo'class="active"';?>>
<a href="<?php echo $website['root']; ?>account_man.php" class="border-3">Summary</a>
<span></span>
</li>
<li <?php if($page_cat=='settings') echo'class="active"';?>>
<a href="#" class="border-3 menu-arrow" onclick="openAccountDropdown(this, 'settings'); return false;">Settings</a>
<span></span>
<div class="flyout-menu" id="settings-menu" style="display: none">
<ul>
<li><a href="">Change E-mail Address</a></li>
<li><a href="change-password.php">Change Password</a></li>
<li><a href="">Communication Preferences</a></li>
<li><a href="">Parental Controls</a></li>
<li><a href="">My Payment Options</a></li>
<li><a href="contact_info.php">Contact &amp; Shipping Addresses</a></li>
</ul>
</div>
</li>
<li <?php if($page_cat=='gamesncodes') echo'class="active"';?>>
<a href="#" class="border-3 menu-arrow" onclick="openAccountDropdown(this, 'games'); return false;">Games &amp; Codes</a>
<span></span>
<div class="flyout-menu" id="games-menu" style="display: none">
<ul>
<li><a href="">Add or Upgrade a Game</a></li>
<li><a href="">Buy Digital Games</a></li>
<li><a href="">Merge a World of Warcraft Account</a></li>
<li><a href="game_client.php">Download Game Clients</a></li>
<li><a href="">Beta Profile Settings</a></li>
<li><a href="">Item Code Redemption</a></li>
</ul>
</div>
</li>
<li <?php if($page_cat=='transaction') echo'class="active"';?>>
<a href="" class="border-3">Transaction History</a>
<span></span>
</li>
<li <?php if($page_cat=='security') echo'class="active"';?>>
<a href="" class="border-3 menu-arrow" onclick="openAccountDropdown(this, 'player'); return false;">Player Options</a>
<span></span>
<div class="flyout-menu" id="player-menu" style="display: none">
<ul>
<li><a href="chars-unst.php">Character Unstuck</a></li>
<li><a href="">Name Change</a></li>
<li><a href="">Faction Change</a></li>
<li><a href="">Race Change</a></li>
<li><a href="">Character Transfer</a></li>
<li><a href="">Appearance Change</a></li>
<li><a href="raf-invite.php">Recruit a Friend</a></li>
</ul>
</li>
</ul>
<span class="clear"><!-- --></span>
</div>
<span class="clear"></span>
</div>
</div>