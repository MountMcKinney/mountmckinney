<?php
require_once("../inc/config.php");
require_once (ROOT_PATH."inc/portfolioArr.php");
?>
<!DOCTYPE html>
<html id="portfolio">
<?php
  $pageTitle="Portfolio";
?>
  <head>
    <link rel="shortcut icon" href="<?php echo BASE_URL; ?>img/favicon.ico">
    <title> <?php echo $pageTitle ?> | Mount McKinney LLC</title>
    <script src="https://code.jquery.com/jquery-1.12.3.min.js" integrity="sha256-aaODHAgvwQW1bFOGXMeX+pC4PZIPsvn2h1sArYOhgXQ=" crossorigin="anonymous"></script>
    <script src="https://services.cognitoforms.com/s/SkK_LHLpKUmLPQLt_eXuZQ"></script>
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
    <header class="header">
        <?php include(ROOT_PATH."inc/logo.php");?>
        <div class="menubar">
          <div class="menuBtn">
             <div></div>
             <span></span>
             <span></span>
             <span></span>
          </div>
          <!-- mobile menu -->
          <div class="mobileMenu">
            <!-- <img src="<?php echo BASE_URL; ?>img/logos/mountMcKinneyLogo.svg" alt="Logo" /> -->
            <h3><a href="<?php echo BASE_URL; ?>">Menu</a>
            <a href="#" class="mobileMenuToggle menuBtn">Close</a></h3>
              <ul>
                <a href="<?php echo BASE_URL; ?>"><li><img src="<?php echo BASE_URL; ?>img/menu/houseIcon.svg" alt="Home Icon"  class="menuIcons" />Home</li></a>
                <a href="<?php echo BASE_URL; ?>portfolio/"><li><img src="<?php echo BASE_URL; ?>img/menu/computerIcon.svg" alt="Portfolio Icon"  class="menuIcons" />Portfolio</li></a>
                <a href="<?php echo BASE_URL; ?>services/"><li><img src="<?php echo BASE_URL; ?>img/menu/gearIcon.svg" alt="Gear Icon"  class="menuIcons" />Services</li></a>
                <a href="<?php echo BASE_URL; ?>campfirestories/"><li><img src="<?php echo BASE_URL; ?>img/menu/campfireIcon.svg" alt="Campfire Icon"  class="menuIcons" />Campfire Stories</li></a>
                <a href="#contact" class="closeMobileMenu"><li><img src="<?php echo BASE_URL; ?>img/menu/contactIcon.svg" alt="Contact Icon"  class="menuIcons" />Contact</li></a>
                <a href="<?php echo BASE_URL; ?>about/"><li><img src="<?php echo BASE_URL; ?>img/menu/aboutIcon.svg" alt="About Icon"  class="menuIcons" />About</li></a>
                <!-- <a href="#" class="subFormPopup closeMobileMenu"><li><img src="<?php echo BASE_URL; ?>img/menu/newspaperIcon.svg" alt="Subscribe Icon"  class="menuIcons" />Subscribe</li></a> -->
              </ul>
          </div>
        </div>
        <!-- desktop menu -->
        <div class="menu">
          <ul>
            <a href="<?php echo BASE_URL; ?>"><li class="menuHover"><img src="<?php echo BASE_URL; ?>img/menu/houseIcon.svg" alt="Home Icon"  class="menuIcons" /><br/>Home</li></a>
            <a href="<?php echo BASE_URL; ?>portfolio/"><li class="menuHover"><img src="<?php echo BASE_URL; ?>img/menu/computerIcon.svg" alt="Portfolio Icon"  class="menuIcons" /><br/>Portfolio</li></a>
            <a href="<?php echo BASE_URL; ?>services/"><li class="menuHover"><img src="<?php echo BASE_URL; ?>img/menu/gearIcon.svg" alt="Gear Icon"  class="menuIcons" /><br/>Services</li></a>
            <a href="<?php echo BASE_URL; ?>campfirestories/"><li class="menuHover"><img src="<?php echo BASE_URL; ?>img/menu/campfireIcon.svg" alt="Campfire Icon"  class="menuIcons" /><br/>Campfire Stories</li></a>
            <a href="#contact"><li class="menuHover"><img src="<?php echo BASE_URL; ?>img/menu/contactIcon.svg" alt="Contact Icon"  class="menuIcons" /><br/>Contact</li></a>
            <a href="<?php echo BASE_URL; ?>about/"><li class="menuHover"><img src="<?php echo BASE_URL; ?>img/menu/aboutIcon.svg" alt="About Icon"  class="menuIcons" /><br/>About</li></a>
            <!-- <a href="#" class="subFormPopup"><li class="menuHover"><img src="<?php echo BASE_URL; ?>img/menu/newspaperIcon.svg" alt="Subscribe Icon"  class="menuIcons" /><br/>Subscribe</li></a> -->
          </ul>
        </div>
        <!-- This creates a pop up that displays the Subscribe Form when you click Subscribe -->
        <?php include(ROOT_PATH."inc/subscribeFormPopup.php") ?>
    </header>
    <div class="wrapper">
      <div class="portfolio">
        <h4>Portfolio</h4>
        <div class="portfolioServices">
          <div class="portfolioInfo">
            <p>
              Are you a business seeking a stronger web presence? Check out some of Mount McKinney&#039;s work below then drop us a line.
              <br>
              <div class="portfolioContact">
                <a href="#contact">I need a website!</a>
              </div>
              <br>
            </p>
            <ul class="portfolioImages">
              <?php foreach($websites as $websiteSKU => $website) {
                      echo displayPortfolioHtml($websiteSKU, $website);
                    }
                ?>
            </ul>
          </div>
        </div>
      </div>
      <div class="contactMe contact">
        <?php include(ROOT_PATH.'inc/contactIcons.php') ?>
        </div>
        <div id="contact" class="contMe">
          <h4>Contact Us</h4>
          <p>
            Need a new <span class="highlight">website</span>? How about a fresh <span class="highlight">redesign</span> of your current site? When&#039;s the last time you updated your <span class="highlight">logo</span>?
            <br/>
            <br/>
            Thankfully, you&#039;ve come to the right place. Mount McKinney LLC provides a large range of services related to your <span class="highlight">website</span> and <span class="highlight">branding</span>.
          </p>
          <?php include(ROOT_PATH."inc/contactForm.php"); ?>
        </div>
       </div>
    </div>
    <footer class="footer">
      <?php include(ROOT_PATH."inc/footer.php"); ?>
    </footer>
    <?php include(ROOT_PATH.'inc/scripts.php');?>
