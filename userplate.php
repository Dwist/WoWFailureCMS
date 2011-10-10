<?php if(!isset($_SESSION['username'])){ ?>

<?php }else{
  $side = rand(1,2);
  switch($side){
    case 1:
      $side = "alliance";
    break;
    case 2:
      $side = "horde";
    break;
  } 
?>

<div id="user-plate" class="user-plate plate-<?php echo $side; ?> ajax-update"
style="background: url(<?php echo $website['root']; ?>chars/0-0.jpg) 0 100% no-repeat;">
<div class="card-overlay"></div>
<a href="#" rel="np" class="profile-link">
<span class="hover"></span>
</a>
<div class="user-meta">
  <div class="player-name"><?php echo strtolower($_SESSION['username']); ?></div>
  
  <div class="character">
  <a class="character-name context-link" href="#da" rel="np" data-tooltip="Change character">No Characters</a>
    <div id="context-1" class="ui-context character-select">
    
      <div class="context">
        <a href="javascript:;" class="close" onclick="return CharSelect.close(this);"></a>
        
        <div class="context-user">
        <strong>No Characters</strong>
        <br />
        <span>No Realm</span>
        </div>
      
        <div class="context-links">
        <a href="#" title="Profile" class="icon-profile link-first">Profile</a>
        <a href="#" title="View my posts" class="icon-posts"> </a>
        <a href="#" title="View auctions" rel="np"class="icon-auctions"> </a>
        <a href="#" title="View events" rel="np" class="icon-events link-last"> </a>
        </div>
      </div>
      
      <div class="character-list">
        <div class="primary chars-pane">
          <div class="char-wrapper">
          <a href="javascript:;" class="char pinned" rel="np">
          <span class="pin"></span>
          <span class="name">No Characters</span>
          <span class="class color-c1">level race class</span>
          <span class="realm">No Realm</span>
          </a>
          
          <!--<a href="/wow/en/character/burning-steppes/stefyvolt/" onclick="CharSelect.pin(1, this); return false;" class="char " rel="np">
          <span class="pin"></span>
          <span class="name">TheAdriann</span>
          <span class="class color-c1">80 Human Warrior</span>
          <span class="realm">No Realm</span>
          </a>-->
          </div>
          
          <!--
          <a href="javascript:;" class="manage-chars" onclick="CharSelect.swipe('in', this); return false;">
          <span class="plus"></span>
          Manage Characters<br />
          <span>Customize characters that appear in this menu.</span>
          </a>
          -->
          
        </div>
        
        <!--
        <div class="secondary chars-pane" style="display: none">
        <div class="char-wrapper scrollbar-wrapper" id="scroll">
        <div class="scrollbar">
        <div class="track"><div class="thumb"></div></div>
        </div>
        <div class="viewport">
        <div class="overview">
        <a href="javascript:;"
        class="color-c1 pinned"
        rel="np"
        onmouseover="Tooltip.show(this, $(this).children('.hide').text());">
        <img src="/wow/static/images/icons/race/2-0.gif" alt="" />
        <img src="/wow/static/images/icons/class/1.gif" alt="" />
        28 Aghman
        <span class="hide">Orc Warrior (Burning Steppes)</span>
        </a>
        <a href="/wow/en/character/burning-steppes/stefyvolt/"
        class="color-c2"
        rel="np"
        onclick="CharSelect.pin(1, this); return false;"
        onmouseover="Tooltip.show(this, $(this).children('.hide').text());">
        
        <img src="/wow/static/images/icons/race/10-0.gif" alt="" />
        <img src="/wow/static/images/icons/class/2.gif" alt="" />
        80 Stefyvolt
        <span class="hide">Blood Elf Paladin (Burning Steppes)</span>
        </a>
        <a href="/wow/en/character/burning-steppes/taylda/"
        class="color-c6"
        rel="np"
        onclick="CharSelect.pin(2, this); return false;"
        onmouseover="Tooltip.show(this, $(this).children('.hide').text());">
        <img src="/wow/static/images/icons/race/10-1.gif" alt="" />
        <img src="/wow/static/images/icons/class/6.gif" alt="" />
        62 Taylda
        <span class="hide">Blood Elf Death Knight (Burning Steppes)</span>
        </a>
        <a href="/wow/en/character/burning-steppes/stefybank/"
        class="color-c1"
        rel="np"
        onclick="CharSelect.pin(3, this); return false;"
        onmouseover="Tooltip.show(this, $(this).children('.hide').text());">
        <img src="/wow/static/images/icons/race/6-0.gif" alt="" />
        <img src="/wow/static/images/icons/class/1.gif" alt="" />
        5 Stefybank
        
        <span class="hide">Tauren Warrior (Burning Steppes)</span>
        </a>
        <a href="/wow/en/character/arathi/pvpsausage/"
        class="color-c7"
        rel="np"
        onclick="CharSelect.pin(4, this); return false;"
        onmouseover="Tooltip.show(this, $(this).children('.hide').text());">
        <img src="/wow/static/images/icons/race/2-0.gif" alt="" />
        <img src="/wow/static/images/icons/class/7.gif" alt="" />
        1 Pvpsausage
        <span class="hide">Orc Shaman (Arathi)</span>
        </a>
        <a href="/wow/en/character/ragnaros/adenor/"
        class="color-c6"
        rel="np"
        onclick="CharSelect.pin(5, this); return false;"
        onmouseover="Tooltip.show(this, $(this).children('.hide').text());">
        <img src="/wow/static/images/icons/race/11-0.gif" alt="" />
        <img src="/wow/static/images/icons/class/6.gif" alt="" />
        61 Adenor
        <span class="hide">Draenei Death Knight (Ragnaros)</span>
        </a>
        
        <div class="no-results hide">No characters were found</div>
        </div>
        </div>
        </div>
        <div class="filter">
        <input type="input" class="input character-filter" value="Filter�" alt="Filter�" /><br />
        <a href="javascript:;" onclick="CharSelect.swipe('out', this); return false;">Return to characters</a>
        </div>
        </div>
        -->
      </div>
    </div>
  </div>
</div>
</div>
<script type="text/javascript">

//<![CDATA[
$(document).ready(function() {
Tooltip.bind('#header .user-meta .character-name', { location: 'topCenter' });
});
//]]>
</script>
<?php } ?>