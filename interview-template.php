<?php 
include ("includes/head.php");
?>

<body class="theme-coral">
  <!-- Analytics tracking here via PHP in static site -->
    
  <!-- Global header -->
  <?php include ("includes/header.php"); ?>
    
  <main role="main" data-interview>
    
    <!-- // Featured image -->
    <?php include ("includes/modules/image-featured.php"); ?>
    
    <!-- // Interview Header -->
    <?php include ("includes/modules/header-interview.php"); ?>
    
    <!-- // Q&A -->
    <?php include ("includes/modules/qa.php"); ?>
    
    <!-- // Pull quote -->
    <?php include ("includes/modules/pull-quote.php"); ?>
    
    <!-- // Q&A -->
    <?php include ("includes/modules/qa.php"); ?>
    
    <!-- // Image side by side -->
    <?php include ("includes/modules/image-sidebyside.php"); ?>
    
    <!-- // Pull quote -->
    <?php include ("includes/modules/pull-quote.php"); ?>
    
    <!-- // Q&A -->
    <?php include ("includes/modules/qa.php"); ?>
    
    <!-- TODO - ADD TO STYLEGUIDE -->
    <div class="border video-landscape widescreen">
      <div class="embed-container">
        <iframe src="https://www.youtube.com/embed/Xoz2EERmZZ8?rel=0" frameborder="0" allowfullscreen></iframe>
      </div>
      <p class="caption">
        Michelle's FITC 2017 talk in Toronto explores how we can rethink UI design and consider Natural User Interface vs Zero User Interface.
      </p>
    </div>
    <div class="border video-landscape">
      <div class="embed-container">
        <iframe src="https://player.vimeo.com/video/25608606" frameborder="0" allowfullscreen></iframe>
      </div>
      <p class="caption">
        Inspired by AR psychotherapy studies for the treatment of phobias, Helen created “Who’s Afraid of Bugs?”, the world’s first Augmented Reality pop-up book, in 2011-2012.
      </p>
    </div>

    <!-- // Image Portrait -->
    <?php include ("includes/modules/image-portrait.php"); ?>
    
    <dl class="border">
      <dt class="interview-q">Not only do you work in an industry that is rapidly evolving, you’re an entrepreneur running a growing business. How is your work/life balance? Is there one?</dt>
      <dd class="interview-a">
        <p>Should I tell you the truth, or should I lie? [Laughs] Work/life balance is very difficult. There doesn’t seem to be a way to achieve it without making a compromise. I try to pick an extracurricular activity to do, especially in the summertime. I play beach volleyball every week, make sure to see friends as much as possible, and get out of the city.</p>
      </dd>
    </dl>

    <!-- // Image Landscape -->
    <?php include ("includes/modules/image-landscape.php"); ?>

    <!-- // Interview footer w/credits -->
    <?php include ("includes/modules/footer-credits.php"); ?>
    
    <aside class="interview-cards wrapper">
      <h2>Latest Interviews</h2>
      <a class="view-all" href="/archive/">view all</a>
      <div class="grid-wrapper">
        <article class="grid-3-1">
          <a href="/interview/sara-hicks/" class="no-underline">
            <img src="assets/img/thumbnail-sara-hicks.png" alt="Sara Hicks">
            <h3>Sara Hicks</h3>
            <p>with Sophie He</p>
            <p>Cofounder and CEO of Reaction Commerce, an open-source ecommerce platform.</p>
          </a>
        </article>
        <article class="grid-3-1">
          <a href="/interview/mitchell-baker/" class="no-underline">
            <img src="assets/img/thumbnail-mitchell-baker.png" alt="Mitchell Baker">
            <h3>Mitchell Baker</h3>
            <p>with Cassie McDaniel</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          </a>
        </article>
        <article class="grid-3-1">
          <a href="/interview/sandi-lin/" class="no-underline">
            <img src="assets/img/thumbnail-sandi-lin.png" alt="Sandi Lin">
            <h3>Sandi Lin</h3>
            <p>with Sarah Sutherland</p>
            <p>Co-founder and CEO of Seattle-based startup Skilljar, an online course delivery platform.</p>
          </a>
        </article>
      </div>
    </aside>
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
  <script>!window.jQuery && document.write('<script src="/assets/js/jquery-2.2.3.min.js"><\/script>')</script>
  <script src="/assets/js/jquery.viewportchecker.min.js"></script>
  <script src="/assets/js/global-min.js"></script>
  </body>
</html>