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
      

      <section class="border page-content">
        <div class="wrapper-sm">
          <h2>Supporters</h2>
          <p>Our team does this project in our spare time, so support from our friends and community truly keeps us going. We mean it: Thank you!</p>
          <p>If you are interested in sponsoring a future interview, <a href="mailto:contact@womenandtech.com">contact us</a>.</p>
          
          <div class="supporter-logos">
            <a href="http://www.microsoft.com/en-us/diversity/"><img src="/assets/img/microsoft.png" alt="Microsoft logo"></a>
            <a href="http://camptech.ca"><img class="supporter-logo" src="/assets/img/camp_tech_logo.png" alt="Camp Tech logo"></a>
            <a href="http://www.ecentricarts.com/"><img src="/assets/img/ecentricarts.png" alt="ecentricarts logo"></a>
            <a href="http://peopleandcode.com/"><img src="/assets/img/peopleandcode.png" alt="People &amp; Code logo"></a>
          </div>
        </div>
      </section>


      <!-- // Team Signature -->
      <?php include ("includes/modules/team-signature.php"); ?>

      <!-- // Team Listing -->
      <?php include ("includes/modules/team-listing.php"); ?>
          
          
      

      <footer class="no-border footer-secondary">
        <div class=wrapper-sm>
          <h2>Contact Us</h2>
          <p>Follow us on <a href="http://twitter.com/WomenAndTech">Twitter</a>, <a href="http://www.facebook.com/womenandtech/">Facebook</a> and <a href="http://www.instagram.com/WomenAndTech/">Instagram</a>.</p>
          <p>Don't hesitate to <a href="mailto:contact@womenandtech.com">email us</a>.</p>
          
          <h2 class="spacer30">Want to help?</h2>
          <img class="spacer30-bottom" src="/assets/img/coffee-icon.png" alt="Coffee" width="50px">
          <p><a href="https://www.patreon.com/WomenAndTech">Donate</a> a cup of coffee or tea and get first dibs on new content.</p>
          <p>We also welcome contributors, volunteers and sponsors.</p>
          <p>Check out our <a href="http://womenandtech.com/contributor-guidelines/">Contribute</a> page for more information.</p>
        </div>
      </footer>
    </article>
  </main>
    
<?php include ("includes/footer.php"); ?>