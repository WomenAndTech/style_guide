<?php 
include ("includes/head.php");
?>

<body class="theme-purple"> 
  <!-- Analytics tracking here via PHP in static site -->
   
  <!-- Global header -->
  <?php include ("includes/header.php"); ?>
  
  <main role="main" data-page>
    <article>
      <!-- All content goes between these article tags. Delete this comment. -->

      <!-- // Secondary Header -->
      <?php include ("includes/modules/header-secondary.php"); ?>

      <!-- // Default content -->
      <?php include ("includes/modules/content-default.php"); ?>
        
      <!-- // Team Signature -->
      <?php include ("includes/modules/team-signature.php"); ?>
      
      <!-- // Team Listing -->
      <?php include ("includes/modules/team-listing.php"); ?>
          
          
          <!-- <h2>Supporters</h2>
          <p>Our team does this project in our spare time, so support from our friends and community truly keeps us going. We mean it: Thank you!</p>
          
          <div class="supporter-logos no-underline">
            <a href="http://www.microsoft.com/en-us/diversity/"><img src="/assets/img/microsoft.png" alt="Microsoft logo"></a>
            <a href="http://camptech.ca"><img class="supporter-logo" src="/assets/img/camp_tech_logo.png" alt="Camp Tech logo"></a>
            <a href="http://www.ecentricarts.com/" class="no-underline"><img src="/assets/img/ecentricarts.png" alt="ecentricarts logo"></a>
            <a href="http://peopleandcode.com/" class="no-underline"></a><img src="/assets/img/peopleandcode.png" alt="People &amp; Code logo">
            <p>If you are interested in sponsoring a future interview, <a href="mailto:contact@womenandtech.com">contact us</a>.</p>
          </div> -->
          
        
      
      <footer class="no-border footer-secondary">
        <div class=wrapper-sm>
          <h2>Contact Us</h2>
          <p>Follow us on Twitter, Facebook and Instagram.</p>
          <p>Don't hesitate to email us.</p>
          
          <h2 class="spacer30">Want to help?</h2>
          <img class="spacer30-bottom" src="/assets/img/coffee-icon.png" alt="Coffee" width="50px">
          <p><a href="https://www.patreon.com/WomenAndTech">Donate</a> a cup of coffee or tea and get first dibs on new content.</p>
          <p>We also welcome contributors, volunteers and sponsors.</p>
          <p>Check out our <a href="http://womenandtech.com/contributor-guidelines/">Contribute</a> page for more information.</p>
        </div>
      </footer>
    </article>
  </main>
    
    
  <!-- for testing only -->
  <!-- <p style="position:fixed;bottom:20px;left:10px;color:black;background:white;padding:5px;"><span id="width"></span> x <span id="height"></span></p> -->
    
  <!-- // Primary Footer -->
  <footer class="footer-primary">
    <section>
      <p>&copy; 2012 - <span data-year></span> Women&&Tech. <span class="nowrap">Made in Toronto. All Rights Reserved.</span></p>
    </section>
    <section id="mc_embed_signup">
      <form action="//womenandtech.us5.list-manage.com/subscribe/post?u=1370c4a70b43a1285e806a56d&amp;id=123c00728e" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
        <label for="mce-EMAIL">Enter your email address to get updates:</label>
        <input id="subscribe" type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">&nbsp;
        <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe">
        <div id="mce-responses">
          <div class="response" id="mce-error-response" style="display:none"></div>
          <div class="response" id="mce-success-response" style="display:none"></div>
        </div><!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
        <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_1370c4a70b43a1285e806a56d_123c00728e" tabindex="-1" value=""></div>
      </form>
    </section>
    <section>
      <p>Connect with us: </p>
      <ul class="footer-links">
        <li>
          <a href="//facebook.com/womenandtech" title="Facebook">
            <i class="fa fa-facebook" aria-hidden="true"></i>
            <span class="screen-readers">Facebook</span>
          </a>
        </li>
        <li>
          <a href="//twitter.com/WomenAndTech" title="Twitter">
            <i class="fa fa-twitter" aria-hidden="true"></i>
            <span class="screen-readers">Twitter</span>
          </a>
        </li>
        <li>
          <a href="//instagram.com/WomenAndTech" title="Instagram">
            <i class="fa fa-instagram" aria-hidden="true"></i>
            <span class="screen-readers">Instagram</span>
          </a>
        </li>
        <li>
          <a href="mailto:contact@womenandtech.com" title="Email">
            <i class="fa fa-envelope" aria-hidden="true"></i>
            <span class="screen-readers">Email</span>
          </a>
        </li>
      </ul>
    </section>
  </footer>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>
  <script>!window.jQuery && document.write('<script src="<?php echo $path_js; ?>jquery-2.2.3.min.js"><\/script>')</script>
  <script src="<?php echo $path_js; ?>jquery.viewportchecker.min.js"></script>
  <script src="<?php echo $path_js; ?>global-min.js"></script>
</body>
</html>