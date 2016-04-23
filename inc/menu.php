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
    <a href="<?php echo BASE_URL; ?>"><li>Home</li></a>
    <a href="<?php echo BASE_URL; ?>portfolio/"><li>Portfolio & Services</li></a>
    <a href="<?php echo BASE_URL; ?>campfirestories/"><li>Campfire Stories</li></a>
    <a href="<?php echo BASE_URL; ?>contact/"><li>Contact</li></a>
    <a href="#" class="subFormPopup"><li>Subscribe</li></a>
  </ul>
</div>
<!-- This creates a pop up that displays the Subscribe Form when you click Subscribe -->
<?php include(ROOT_PATH."inc/subscribeFormPopup.php") ?>
