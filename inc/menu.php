<div id="menubar">
  <div class="menuBtn">
     <div></div>
     <span></span>
     <span></span>
     <span></span>
  </div>
  <!-- mobile menu -->
  <div class="mobileMenu">
    <h3><a href="<?php echo BASE_URL; ?>"><img src="<?php echo BASE_URL; ?>img/logos/mountMcKinneyLogo.svg" alt="Logo" /></a>
    <a href="#" class="mobileMenuToggle menuBtn">Close</a></h3>
      <ul>
        <a href="<?php echo BASE_URL; ?>"><li>Home</li></a>
        <a href="<?php echo BASE_URL; ?>portfolio/"><li>Portfolio & Services</li></a>
        <a href="<?php echo BASE_URL; ?>campfirestories/"><li>Campfire Stories</li></a>
        <a href="<?php echo BASE_URL; ?>contact/"><li>Contact</li></a>
        <a href="#" class="subFormPopup"><li>Subscribe</li></a>
      </ul>
  </div>
</div>
<!-- desktop menu -->
<div id="menu">
  <ul>
    <a href="<?php echo BASE_URL; ?>"><li id="menu1" class="notCurrentPage"><img src="<?php echo BASE_URL; ?>img/menu/house-color.png" alt="Home Icon"  class="menuIcons" /><br/>Home</li></a>
    <a href="<?php echo BASE_URL; ?>portfolio/"><li id="menu2" class="current"><img src="<?php echo BASE_URL; ?>img/menu/computer.png" alt="Portfolio Icon"  class="menuIcons" /><br/>Portfolio & Services</li></a>
    <a href="<?php echo BASE_URL; ?>campfirestories/"><li id="menu3" class="notCurrentPage"><img src="<?php echo BASE_URL; ?>img/menu/campfire.png" alt="Campfire Icon"  class="menuIcons" /><br/>Campfire Stories</li></a>
    <a href="<?php echo BASE_URL; ?>contact/"><li id="menu4" class="notCurrentPage"><img src="<?php echo BASE_URL; ?>img/social/mail.png" alt="Contact Icon"  class="menuIcons" /><br/>Contact</li></a>
    <a href="#" class="subFormPopup"><li id="menu5" class="notCurrentPage"><img src="<?php echo BASE_URL; ?>img/menu/news.png" alt="Subscribe Icon"  class="menuIcons" /><br/>Subscribe</li></a>
  </ul>
</div>
<!-- This creates a pop up that displays the Subscribe Form when you click Subscribe -->
<?php include(ROOT_PATH."inc/subscribeFormPopup.php") ?>
